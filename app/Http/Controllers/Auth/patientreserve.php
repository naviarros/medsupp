<?php

namespace App\Http\Controllers\Auth;

use App\Models\reservationModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Rest\Client;

class patientreserve extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserv = reservationModel::all();
        return view('msscontent.patients.requests')->with('reserv', $reserv);
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

    public function sendSMS(){
      $accountSid = env('TWILIO_ACCOUNT_SID');
      $authToken = env('TWILIO_AUTH_TOKEN');
      $twilioNumber = env('TWILIO_NUMBER');

      $client = new Client($accountSid,$authToken);

      $res = new reservationModel();
      $message = $client->messages->create(
          '+639120429426',
          [
            'from' => $twilioNumber,
            'body' => 'Good Day. I am Christian Dimatibag from OLLH. Your appointment has been set at April 3, 2018 at 10:00 AM. Thank You and God Bless'
          ]
        );
      return response($message);
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $reserv = reservationModel::find($id);
      $reserv->delete();
      return redirect('/msscontent/patients/requests');
    }
}
