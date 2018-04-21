<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientAdd extends Controller
{
    public function patientview(){
      return view('msscontent.patients.addpatient');
    }
}
