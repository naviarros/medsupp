<?php

namespace App\Http\Controllers\Auth;

use App\Models\results;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use PDF;
class resultscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xrayres = results::all();
        return view('msscontent.departments.laboratory.xray.labxray',compact('xrayres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
          'lstsname' => 'required',
          'firstname' => 'required',
          'mdlename' => 'required',
          'ag' => 'required',
          'cst' => 'required',
          'ctsz' => 'required',
          'tyy' => 'required',
          'dpt' => 'required',
          'datet' => 'required',
          'defi' => 'required',
          'rem' => 'required',
          'stt' => 'required',
          'resu' => 'required',
        ]);
        $result = new results();
        $result->lstname = $request->get('lstsname');
        $result->frstname = $request->get('firstname');
        $result->mdlename = $request->get('mdlename');
        $result->age = $request->get('ag');
        $result->cstatus = $request->get('cst');
        $result->ntnl = $request->get('ctsz');
        $result->created_at = $request->get('datet');
        $result->typeoflab = $request->get('optradio');
        $result->definition_test = $request->get('defi');
        $result->patient_type = $request->get('tyy');
        $result->remarks = $request->get('rem');
        $result->dprtment = $request->get('dpt');
        $result->status = $request->get('stt');
        $result->res_img = $request->get('resu');
        if($validator->fails()){
          $request->session()->flash('message.level', 'danger');
          $request->session()->flash('message.content', 'Please fill up all entry forms');
          return redirect('/msscontent/departments/laboratory/xray/labxray')->withErrors($validator)->withInput();
        }
        elseif(results::create($request->all()))
        {
          $request->session()->flash('message.level', 'success');
          $request->session()->flash('message.content', 'Laboratory Examination Submitted');
          $result->save();
        }
        return redirect()->route('inss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    public function downloadPDF($id)
    {
        $resu = results::find($id);
        $pdf = PDF::loadView('/msscontent/departments/laboratory/xray/pdf', compact('resu'));

        return $pdf->stream('results.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $result_id
     * @return \Illuminate\Http\Response
     */
    public function edit($result_id)
    {
        $res = results::find($result_id);
        return view('msscontent.departments.laboratory.xray.editxray', compact('res', 'result_id'));
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

    public function search(Request $request)
    {
      if($request->ajax())
      {
        $output = "";
        $xray = DB::table('results')->where('lstname','LIKE','%'.$request->search."%")->get();
        if($xray)
        {
          foreach ($xray as $key => $resu) {
            $output = '<tr>'.
            '<td>'.$resu->doc_no.'</td>'.
            '<td>'.$resu->res_img.'</td>'.
            '<td>'.$resu->lstname.'</td>'.
            '<td>'.$resu->frstname.'</td>'.
            '<td>'.$resu->mdlename.'</td>'.
            '<td>'.$resu->created_at.'</td>'.
            '</tr>';
          }
          return response($output);
        }
      }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = results::find($id);
        $res->delete();
        return view('/msscontent/departments/laboratory/xray/labxray');
    }
}
