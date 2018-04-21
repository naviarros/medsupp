<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RosterController extends Controller
{
    public function duty(){
      return view('msscontent.dutyroster');
    }
}
