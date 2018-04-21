<?php

namespace App\Http\Controllers\Auth;

use App\Models\registrationModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RegisterController extends Controller
{
    public function store(Request $request){

      $admin_name = $request->input('username');
      $admin_pw = $request->input('password');

      $data = array('admin_uname'=>$admin_name,'admin_pw'=>$admin_pw);

      DB::table('admin')->insert($data);

      return view('login.signin');
    }
}
 ?>
