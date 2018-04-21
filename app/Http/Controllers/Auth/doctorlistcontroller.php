<?php

namespace App\Http\Controllers\Auth;

use App\Models\listdoctorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Carbon\Carbon;
use Validator;
class doctorlistcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = listdoctorModel::all()->toArray();

      return view('msscontent.addnewdoctor', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('msscontent.addnewdoctor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
      'lsname' => 'required',
      'fname' => 'required',
      'mdname' => 'required',
      'bbd' => 'required',
      'aag' => 'required',
      'cst' => 'required',
      'addre' => 'required',
      'dteem' => 'required',
      'degre' => 'required',
      'dcno' => 'required',
      'spcl' => 'required',
      'regi' => 'required',
      'cnty' => 'required',
      'dayy' => 'required',
      'time_av' => 'required',
      'stt' => 'required',
      'accr' => 'required'
    ]);
        $model = new listdoctorModel();
        $model->last_name = $request->input('lsname');
        $model->first_name = $request->input('fname');
        $model->middle_name = $request->input('mdname');
        $model->doc_bday = $request->input('bbd');
        $model->doc_age = $request->input('aag');
        $model->cstat = $request->input('cst');
        $model->doc_address = $request->input('addre');
        $model->date_emplyd = $request->input('dteem');
        $model->ttle_degree = $request->input('degre');
        $model->doc_no = $request->input('dcno');
        $model->spclty = $request->input('spcl');
        $model->state_reg = $request->input('regi');
        $model->countryy = $request->input('cnty');
        $model->day_avail = $request->input('dayy');
        $model->time_avail = $request->input('time_av');
        $model->status = $request->input('stt');
        $model->health_insurance = $request->input('accr');
        if($validator->fails()){
          $request->session()->flash('message.level', 'danger');
          $request->session()->flash('message.content', 'Please fill up all entry forms');
          return redirect('/msscontent/addnewdoctor')->withErrors($validator)->withInput();
        }
        elseif(listdoctorModel::create($request->all()))
        {
          $request->session()->flash('message.level', 'success');
          $request->session()->flash('message.content', 'Laboratory Examination Submitted');
          $model->save();
        }
        return redirect()->route('insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      $query = $request->get('srch');
        if($query)
        {
          $listdoctor = listdoctorModel::where('last_name','LIKE', "%$query%")->paginate(5);
        }
        else {
          $listdoctor = listdoctorModel::orderBy('id','DESC')->paginate(5);
        }
        return view('/msscontent/dutyroster')->with('doctors', $listdoctor);
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
          $listdoctor = listdoctorModel::find($request->id);
          return response($listdoctor);
        }
    }

    /**
    *
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if($request->ajax()){
          $listdoctor = listdoctorModel::find($request->id);
          $listdoctor->last_name = $request->last_name;
          $listdoctor->first_name = $request->first_name;
          $listdoctor->middle_name = $request->middle_name;
          $listdoctor->spclty = $request->spclty;
          $listdoctor->status = $request->stat;
          $listdoctor->save();
          return response($listdoctor);
        }
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
          listdoctorModel::destroy($request->id);
          return response()->json(['sms'=> 'One row affected']);
        }
    }
}
