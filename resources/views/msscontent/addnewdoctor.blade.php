@extends('layouts.masterdboard')

@section('content')
  <h3> Add New Doctor </h3>
  <a href="/msscontent/dutyroster">Click to redirect to Duty Roster &raquo;
  </a>
<br>
<br>
    <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#newdoc">Doctor Registration</a></li>
  </ul>
  <br>

  @if(session()->has('message.level'))
  <div id="form-messages" class="alert alert-{{ session('message.level') }}" role="alert">
    {!! session('message.content') !!}
  </div>
  @endif
  <div class="tab-content">
  <div id="newdoc" class="tab-pane fade in active">
    <div style="padding-top: 20px;">
    <fieldset>
      <legend>Register New Doctor</legend>
          {{ Form::open(['action' => 'Auth\doctorlistcontroller@store', 'method' => 'post']) }}
            {{ csrf_field() }}
            <div class="col-sm-10">
              <div class="row">
              <div class="col-sm-4 form-group">
              <label>Doctor Number:</label>
              <input type="text" name="dcno" class="form-control" value="<?php $char = '0123456789';
              $charArray = str_split($char);
              for($i = 0; $i <= 50; $i++){
                $randitem = array_rand($charArray);
              }
              echo "EMP"."-".date('Y')."-".$charArray[$randitem];
              ?>">
              <p class="help-block"><span class="glyphicon glyphicon-help"></span> The Doctor Number is based on the Employee Number. </p>
            </div>
          </div>
              <div class="row">
                <div class="col-sm-4 form-group">
								<label>Last Name:</label>
								<input type="text" name="lsname" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>First Name:</label>
								<input type="text" name="fname" class="form-control">
							</div>
              <div class="col-sm-4 form-group">
                <label>Middle Name:</label>
                <input type="text" name="mdname" class="form-control">
              </div>
              <div class="col-sm-4 form-group">
                <label>Birth Date:</label>
                <input type="date" name="bbd" class="form-control" value="">
              </div>
              <div class="col-sm-4 form-group">
                <label>Age:</label>
                <input type="number" name="aag" class="form-control" value="">
              </div>
              <div class="col-sm-4 form-group">
                <label>Civil Status:</label>
                <select class="form-control" name="cst">
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                </select>
              </div>
              <div class="row">
                <div class="form-group">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <label>Street Address:</label>
                  &nbsp;&nbsp;&nbsp;<textarea placeholder="Street Address" rows="3" class="form-control" name="addre"></textarea>
                </div>
              </div>
              <div class="col-sm-4 form-group">
                <label>Date Employed:</label>
                <input type="date" name="dteem" value="" class="form-control">
              </div>
              <div class="col-md-4 form-group">
                <label>Country:</label>
                <select class="form-control" name="cnty">
                  <option value="Philippines">Philippines</option>
                  <option value="United States">United States</option>
                </select>
              </div>
              <div class="col-md-4 form-group">
                <label>Region:</label>
                <select class="form-control" name="regi">
                  <option value="NCR">National Capital Region</option>
                  <option value="I">Region I</option>
                  <option value="II">Region II</option>
                </select>
              </div>
              <div class="col-md-4 form-group">
                <label>Specialization:</label>
                <select class="form-control" name="spcl">
                  <option value="Pedia">Pediatric</option>
                  <option value="Surgery">Surgery</option>
                  <option value="Cardiology">Cardiology</option>
                </select>
              </div>
              <div class="col-md-4 form-group">
                <label>Title Degree</label>
                <select class="form-control" name="degre">
                  <option value="PHD">Ph.D</option>
                  <option value="MD">M.D.</option>
                </select>
              </div>
              <div class="col-md-4 form-group">
                <label>Accredited Health Insurance:</label>
                <select class="form-control" name="accr">
                  <option value="PhilHealth">PhilHealth</option>
                  <option value="MaxiCare">MaxiCare</option>
                  <option value="IntelliCare">IntelliCare</option>
                  <option value="Caritas">Caritas Health Shield</option>
                  <option value="Carehealth">Carehealth</option>
                  <option selected="true">Choose Accredited HMO</option>
                </select>
              </div>
              <div class="col-md-4 form-group">
                <label>Day Available</label>
                <select class="form-control" name="dayy">
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>
                  <option value="MWF">MWF</option>
                  <option value="TTH">Tuesday & Thursday</option>
                </select>
              </div>
              <div class="col-sm-4 form-group">
                <label>Time Available:</label>
                <input type="time" name="time_av" value="" class="form-control">
              </div>
              <div class="col-md-4 form-group">
                <label>Status</label>
                <select class="form-control" name="stt">
                  <option value="Available">Available</option>
                  <option value="Unavailable">Unavailable</option>
                  <option value="Leave">Leave</option>
                </select>
              </div>
              <div class="form-group">
                <br>
                <center>
                <input type="submit" name="inst" value="Done" class="btn btn-default">
                <input type="reset" name="rest" value="Clear" class="btn btn-default">
              </center>
              </div>
          {{ Form::close() }}
    </fieldset>
  </div>
</div>
  </div>
@endsection
