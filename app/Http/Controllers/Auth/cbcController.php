<?php

namespace App\Http\Controllers\Auth;

use App\Models\cbcModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use PDF;
class cbcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cbc = cbcModel::all();
      return view('msscontent.departments.laboratory.cbc.cbc', compact('cbc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
      'tyy' => 'required',
      'dpt' => 'required',
      'patid' => 'required',
      'repdate' => 'required',
      'age' => 'required',
      'lname' => 'required',
      'fname' => 'required',
      'mdname' => 'required',
      'dob' => 'required',
      'gnder' => 'required',
      'bplace' => 'required',
      'rbc' => 'required',
      'wbc' => 'required',
      'hgb' => 'required',
      'hct' => 'required',
      'mcv' => 'required',
      'mch' => 'required',
      'mchc' => 'required',
      'rdw' => 'required',
      'plat' => 'required',
      'mpv' => 'required'
    ]);
    $result = new cbcModel();
    $result->patient_id = $request->get('patid', false);
    $result->lastname = $request->get('lname', false);
    $result->firstname = $request->get('fname', false);
    $result->middlename = $request->get('mdname', false);
    $result->edad = $request->get('age', false);
    $result->report_date = $request->get('repdate', false);
    $result->bday = $request->get('dob', false);
    $result->gender = $request->get('gnder', false);
    $result->birthplace = $request->get('bplace', false);
    $result->wbc = $request->get('wbc', false);
    $result->rbc = $request->get('rbc', false);
    $result->hgb = $request->get('hgb', false);
    $result->hct = $request->get('hct', false);
    $result->mcv = $request->get('mcv', false);
    $result->mch = $request->get('mch', false);
    $result->mchc = $request->get('mchc', false);
    $result->rdw_cv = $request->get('rdw', false);
    $result->plat_count = $request->get('plat', false);
    $result->mpv = $request->get('mpv', false);
    $result->pat_type = $request->get('tyy', false);
    $result->section = $request->get('dpt', false);
    if($validator->fails()){
      $request->session()->flash('message.level', 'danger');
      $request->session()->flash('message.content', 'Please fill up all entry forms');
      return redirect('/msscontent/departments/laboratory/cbc/cbc')->withErrors($validator)->withInput();
    }
    elseif(cbcModel::create($request->all()))
    {
      $request->session()->flash('message.level', 'success');
      $request->session()->flash('message.content', 'Laboratory Examination Submitted');
      $result->save();
    }
    return redirect()->route('sub');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
    * View results with stream
    */
    public function download($id)
    {
      $cb = cbcModel::find($id);
      $pdf = PDF::loadView('/msscontent/departments/laboratory/cbc/pdf', compact('cb'));

      return $pdf->stream('result.pdf');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cbc = cbcModel::where('id',$id)->first();
        $cbc->delete();
        return view('/msscontent/departments/laboratory/cbc/cbc');
    }
}
