<?php

namespace App\Http\Controllers\Auth;

use App\Models\diagnosticModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use PDF;
class diagnosticsResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $urine = diagnosticModel::all();
      return view('msscontent.departments.laboratory.diagnostics.urinalysis', compact('urine'));
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
      'colo' => 'required',
      'clar' => 'required',
      'bili' => 'required',
      'specgrav' => 'required',
      'occult' => 'required',
      'ph' => 'required',
      'urob' => 'required',
      'nitr' => 'required',
      'leuko' => 'required',
      'gluc' => 'required',
      'keton' => 'required',
      'wbc' => 'required',
      'prote' => 'required',
      'rbc' => 'required',
      'epicells' => 'required',
      'bact' => 'required',
      'urinecul' => 'required'
    ]);
    $result = new diagnosticModel();
    $result->urine_id = $request->get('patid', false);
    $result->lst_name = $request->get('lname', false);
    $result->frst_name = $request->get('fname', false);
    $result->mdle_name = $request->get('mdname', false);
    $result->age = $request->get('age', false);
    $result->rep_date = $request->get('repdate', false);
    $result->dob = $request->get('dob', false);
    $result->sex = $request->get('gnder', false);
    $result->bplace = $request->get('bplace', false);
    $result->color = $request->get('colo', false);
    $result->clarity = $request->get('clar', false);
    $result->bilirubin = $request->get('bili', false);
    $result->specgrav = $request->get('specgrav', false);
    $result->occultblood = $request->get('occult', false);
    $result->ph = $request->get('ph', false);
    $result->urobilinogen = $request->get('urob', false);
    $result->nitrate = $request->get('nitr', false);
    $result->leukocytes = $request->get('leuko', false);
    $result->glucose = $request->get('gluc', false);
    $result->ketones = $request->get('keton', false);
    $result->protein = $request->get('prote', false);
    $result->wbc = $request->get('wbc', false);
    $result->rbc = $request->get('rbc', false);
    $result->epithelial = $request->get('epicells', false);
    $result->bacteria = $request->get('bact', false);
    $result->urineculture = $request->get('urinecul', false);
    if($validator->fails()){
      $request->session()->flash('message.level', 'danger');
      $request->session()->flash('message.content', 'Please fill up all entry forms');
      return redirect('/msscontent/departments/laboratory/diagnostics/urinalysis')->withErrors($validator)->withInput();
    }
    elseif(diagnosticModel::create($request->all()))
    {
      $request->session()->flash('message.level', 'success');
      $request->session()->flash('message.content', 'Laboratory Examination Submitted');
      $result->save();
    }
    return redirect()->route('sto');
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

    public function pdfdl($id)
    {
      $diagnose = diagnosticModel::find($id);
      $pdf = PDF::loadView('/msscontent/departments/laboratory/diagnostics/pdf', compact('diagnose'));

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
        //
    }
}
