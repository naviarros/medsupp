<?php

namespace App\Http\Controllers\Auth;

use App\Models\listdoctorModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Input;

class AvailabilityDoctor extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = listdoctorModel::paginate(5);
        return view('msscontent.reservation.availability.availability')->with('avail', $data);
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
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    public function search(Request $request)
    {
      if($request->ajax())
      {
        $output = "";
        $availa = DB::table('doctors')->where('last_name','LIKE','%'.$request->search."%")->get();
        if($availa)
        {
          foreach ($availa as $key => $avai) {
            $output = '<tr>'.
            '<td>'.$avai->doc_no.'</td>'.
            '<td>'.$avai->last_name.'</td>'.
            '<td>'.$avai->first_name.'</td>'.
            '<td>'.$avai->middle_name.'</td>'.
            '<td>'.$avai->spclty.'</td>'.
            '<td>'.$avai->ttle_degree.'</td>'.
            '<td>'.$avai->day_avail.'</td>'.
            '<td>'.$avai->time_avail.'</td>'.
            '<td>'.$avai->status.'</td>'.
            '</tr>';
          }
          return response($output);
        }
      }
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
