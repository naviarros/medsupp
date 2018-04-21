<?php

namespace App\Http\Controllers\Auth;

use App\Models\reservationModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Nexmo\Laravel\Facade\Nexmo;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  reservationModel::all();
        return view('msscontent.reservation.patientreservation')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('msscontent.reservation.createreservation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reserve = new reservationModel();
        $reserve->reserve_no = $request->input('reser');
        $reserve->pat_res_lname = $request->input('patname');
        $reserve->pat_res_fname = $request->input('patfname');
        $reserve->pat_res_mdinit = $request->input('patminit');
        $reserve->dateofbirth = $request->input('bdd');
        $reserve->mobile_no = $request->input('mobile');
        $reserve->tel_no = $request->input('tel');
        $reserve->hmo_credited = $request->input('hmo');
        $reserve->action = $request->input('actiontake');
        $reserve->doc_name = $request->input('namedoc');
        if(reservationModel::create($request->all()))
        {
          $request->session()->flash('message.level', 'success');
          $request->session()->flash('message.content', 'New Patient Record Added');
          $reserve->save();
        }else {
          $request->session()->flash('message.level', 'danger');
          $request->session()->flash('message.content', 'Please fill up all entry forms');
        }
        return redirect('/msscontent/reservation/patientreservation');
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
