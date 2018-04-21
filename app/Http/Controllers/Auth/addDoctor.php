<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class addDoctor extends Controller
{
    public function adddoc(){
      return view('msscontent.addnewdoctor');
    }
}
