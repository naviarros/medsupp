<?php

namespace App\Http\Controllers\Auth;

use App\Models\signInModel;
use App\Notification\emailNotif;
use Illuminate\Http\Request;
use App\Models\emailModel;
use App\Models\reservationModel;
use App\Models\listdoctorModel;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
    public function login(){
      return view('login.signin');
    }
    public function loginprocess(Request $request){
        $admin_uname = $request->input('usern');
        $admin_pword = $request->input('pword');

        $checklogin = DB::table('admin')->where(['admin_uname'=>$admin_uname,'password'=>$admin_pword])->get();

        if(count($checklogin)){
            session(['usern' => $request->get('usern')]);
            return view('msscontent.dashboard');
        }
        else{
            return view('login.signin');
        }
      }
      public function dashboard()
      {
          return view('/msscontent/dashboard');
      }
    public function store(Request $request)
    {
      $validator = Validator::make($request->all(), [
      'lname' => 'required',
      'fname' => 'required',
      'mname' => 'required',
      'dayb' => 'required',
      'mobno' => 'required',
      'telno' => 'required',
      'pname' => 'required',
      'hmo' => 'required',
      'requ' => 'required',
      'act' => 'required',
    ]);
      $reserve = new reservationModel();
      $reserve->pat_res_lname = $request->get('lname');
      $reserve->pat_res_fname = $request->get('fname');
      $reserve->pat_res_mdinit = $request->get('mname');
      $reserve->dateofbirth = $request->get('dayb');
      $reserve->mobile_no = $request->get('mobno');
      $reserve->doc_name = $request->get('pname');
      $reserve->tel_no = $request->get('telno');
      $reserve->hmo_credited = $request->get('hmo');
      $reserve->request_date = $request->get('requ');
      $reserve->action = $request->get('act');
      if($validator->fails()){
        $request->session()->flash('message.level', 'danger');
        $request->session()->flash('message.content', 'Please fill up all entry forms');
        return redirect('/index')->withErrors($validator)->withInput();
      }
      elseif(reservationModel::create($request->all()))
      {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Your Request has been submitted');
        $reserve->save();
      }
      return redirect()->route('reserve');
    }
    public function display()
    {
        $sp = DB::table('specialty')->pluck('spcl','id');
        return view('index',compact('sp'));
    }
    public function displayresu($id)
    {
        $spcl = DB::table('doctors')->where('doc_id',$id)->pluck('last_name','id');
        return json_encode($spcl);
    }
    public function logout(){
      Session::flush();
      return redirect('/login/signin');
    }
}
?>
