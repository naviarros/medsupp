<?php

namespace App\Http\Controllers\Auth;

use App\Models\patientModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
use PDF;

class patientlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patien = patientModel::all()->toArray();
        return view('msscontent.patients.addpatient', compact('patien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/msscontent/patients/addpatient')->with('list', $list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $listpatients = new patientModel();
        $listpatients->frst_name = $request->input('firstn');
        $listpatients->mdle_name = $request->input('mdname');
        $listpatients->lst_name = $request->input('lastn');
        $listpatients->patient_img = $request->input('openfile');
        if($request->hasFile('openfile')){
          $file = $request->input('openfile');
          $file->move(public_path(). '/', $file->getClientOriginalName());
        }
        $listpatients->patient_bday = $request->input('bday');
        $listpatients->marital_status = $request->input('civil');
        $listpatients->patient_age = $request->input('agese');
        $listpatients->patient_address = $request->input('addres');
        $listpatients->brgy = $request->input('brgy');
        $listpatients->cty_name = $request->input('cty');
        $listpatients->rgn_name = $request->input('cty1');
        $listpatients->occupation = $request->input('occ');
        $listpatients->gender = $request->input('sex');
        $listpatients->action_taken = $request->input('acti');
        if(patientModel::create($request->all()))
        {
          $request->session()->flash('message.level', 'success');
          $request->session()->flash('message.content', 'New Patient Record Added');
          $listpatients->save();
        }else {
          $request->session()->flash('message.level', 'danger');
          $request->session()->flash('message.content', 'Please fill up all entry forms');
        }
        return redirect()->route('addnew');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $showdata = patientModel::paginate(10);
        return view('msscontent.patients.patientstatus')->with('patient', $showdata);
    }

    public function count()
    {
      $listdata = patientModel::count();
      return view('/msscontent/patients/addpatient', compact('listdata'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
      if($request->ajax())
      {
        $listpatients = patientModel::find($request->id);
        return response($listpatients);
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
          if($request->ajax()){
            $listpatients = patientModel::find($request->id);
            $listpatients->lst_name = $request->lst_name;
            $listpatients->frst_name = $request->frst_name;
            $listpatients->mdle_name = $request->mdle_name;
            $listpatients->patient_age = $request->ages;
            $listpatients->marital_status = $request->marital;
            $listpatients->occupation = $request->occu;
            $listpatients->stats = $request->ssts;
            $listpatients->save();
            return response($listpatients);
          }
    }

    public function pdfform(){
      $pdf = PDF::loadView('/msscontent/patients/admissionform');

      return $pdf->stream('admissionform.pdf');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      if($request->ajax())
      {
        patientModel::destroy($request->id);
        return response()->json(['sms'=> 'One row affected']);
      }
    }
}
