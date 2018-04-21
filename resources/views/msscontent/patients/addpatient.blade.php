@extends('layouts.masterdboard')

@section('content')
<div class="panel panel-primary">
  <div class="panel-body">
    <p> Number of Patients Count: &nbsp;{{$listdata}} </p>
  </div>
</div>
<div>
  <h3> Add New Patient </h3>
</div>
<a href="/msscontent/patients/patientstatus"> Click to redirect to lists of patients &raquo;</a>
<br>
<br />
@if(session()->has('message.level'))
<div id="form-messages" class="alert alert-{{ session('message.level') }}" role="alert">
  {!! session('message.content') !!}
</div>
@endif
<br>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="javascript:void(0);" data-target="#home">Patient Information</a></li>
    <li><a href="{{ action('Auth\patientlistController@pdfform')}}">Request Form</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div style="padding-top: 20px;">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3> Patient Information </h3>
        </div>

        <div class="panel-body">
          {{ Form::open(['action' => 'Auth\patientlistController@store', 'method' => 'post']) }}
            {{ csrf_field() }}
            <div class="col-sm-10">
              <div class="row">
                <div id="image_preview"><img id="previewing" src="{{ asset('img/no-image.png')}}" /></div>
                <div id="selectImage">
                  <label>Select Your Image</label><br/>
                  <input type="file" name="openfile" id="file" />
                  </div>
                  <br>
                <div class="col-sm-4 form-group">
								<label>First Name:</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control" name="lastn">
							</div>
							<div class="col-sm-4 form-group">
								<label>Last Name:</label>
								<input type="text" name="firstn" placeholder="Enter Last Name Here.." class="form-control">
							</div>
              <div class="col-sm-4 form-group">
                <label>Middle Name:</label>
                <input type="text" name="mdname" class="form-control">
              </div>
                <div class="col-sm-4 form-group">
                  <label>Age:</label>
                  <select class="form-control" name="agese">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="5">6</option>
                    <option value="5">7</option>
                    <option value="5">8</option>
                    <option value="5">9</option>
                    <option value="5">10</option>
                    <option value="5">11</option>
                    <option value="5">12</option>
                    <option value="5">13</option>
                    <option value="5">14</option>
                    <option value="5">15</option>
                    <option value="5">16</option>
                    <option value="5">17</option>
                    <option value="5">18</option>
                    <option value="5">19</option>
                    <option value="5">20</option>
                    <option value="5">21</option>
                    <option value="5">22</option>
                    <option value="5">23</option>
                    <option value="5">24</option>
                    <option value="5">25</option>
                    <option value="5">26</option>
                    <option value="5">27</option>
                    <option value="5">28</option>
                    <option value="5">29</option>
                    <option value="5">30</option>
                    <option value="5">31</option>
                    <option value="5">32</option>
                    <option value="5">33</option>
                  </select>
              </div>
              <div class="col-sm-4 form-group">
                <label>Marital Status:</label>
                <select class="form-control" name="civil">
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Separated">Separated</option>
                </select>
              </div>
              <div class="col-sm-4 form-group">
                <label>Birth Date:</label>
                <input type="date" name="bday" value="" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="form-group">
                <label>Street Address:</label>
                <textarea placeholder="Street Address" rows="3" class="form-control" name="addres"></textarea>
              </div>
              <div class="col-sm-4 form-group">
                <label>Barangay:</label>
                <select class="form-control" name="brgy">
                  <option value="400">400</option>
                  <option value="401">401</option>
                  <option value="402">402</option>
                  <option value="403">403</option>
                  <option value="404">404</option>
                  <option value="405">405</option>
                </select>
              </div>
              <div class="col-sm-4 form-group">
                <label>City:</label>
                <select class="form-control" name="cty">
                  <option value="Manila">Manila</option>
                  <option value="Makati">Makati</option>
                  <option value="Quezon City">Quezon City</option>
                  <option value="Legazpi">Legazpi</option>
                </select>
                </div>
                <div class="col-sm-4 form-group">
                  <label>Region:</label>
                  <select class="form-control" name="cty1">
                    <option value="NCR">National Capital Region</option>
                    <option value="Reg1">Region I</option>
                    <option value="Reg2">Region II</option>
                    <option value="Reg3">Region III</option>
                  </select>
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Occupation:</label>
                    <input type="text" class="form-control" name="occ">
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Gender:</label>
                    <select class="form-control" name="sex">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Action Taken by Client</label>
                    <select class="form-control" name="acti">
                      <option value="Consult">Consultation</option>
                      <option value="XRAY">XRAY</option>
                      <option value="CT Scan">CT Scan</option>
                    </select>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <input type="submit" name="inst" value="Add" class="btn btn-default">
                  <button type="button" name="button" class="btn btn-danger">Cancel</button>
                </div>
          </div>
          {{ Form::close() }}
        </div>
      </div>
  </div>
  </div>
    <div id="menu1" class="tab-pane fade">
      <div style="padding-top: 20px;">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Requesting new form <a href="{{ action('Auth\patientlistController@pdfform')}}" style="text-align: right;"><span class="glyphicon glyphicon-print"></span> Print </a></h3>
          </div>
          <div class="panel-body">
            <form>
              <div class="col-sm-10">
                <div class="row">
                  <div class="col-sm-4 form-group">
  								<label>Admission Date:</label>
  								<input type="date" name="admdate" class="form-control">
  							</div>
                <div class="col-sm-4 form-group">
                  <label>Patient Number:</label>
                  <input type="text" name="patno" class="form-control" value="">
              </div>
              <div class="col-sm-4 form-group">
                <label>Patient Name:</label>
                <input type="text" name="patname" class="form-control" value="">
              </div>
              <div class="col-sm-4 form-group">
                <label>Test Findings:</label>
                <input type="text" name="findings" class="form-control" value="">
              </div>
              <div class="col-sm-4 form-group">
                <label>Assigned Room for admitting:</label>
                <select class="form-control" name="assro">
                  <option value="101">Rm. 101</option>
                  <option value="102">Rm. 102</option>
                  <option value="103">Rm. 103</option>
                  <option value="104">Rm. 104</option>
                  <option value="105">Rm. 105</option>
                </select>
              </div>
              <div class="col-sm-4 form-group">
                <label>Department:</label>
                <select class="form-control" name="deptt">
                  <option value="rad">Radiology</option>
                  <option value="ped">Pediatric</option>
                  <option value="surg">Surgery</option>
                  <option value="card">Cardiology</option>
                </select>
              </div>
              <div class="col-sm-4 form-group">
                <label>Doctor Handled:</label>
                <input type="text" name="docha" class="form-control" value="">
              </div>
              <div class="col-sm-4 form-group">
                <label>Position:</label>
                <select class="form-control" name="spc">
                  <option value="surg">Surgeon</option>
                  <option value="med">Medical Tech</option>
                  <option value="gyne">OB Gyne</option>
                  <option value="pedi">Pediatrician</option>
                </select>
              </div>
              <div class="col-sm-4 form-group">
                <label>Status:</label>
                <select class="form-control" name="stat">
                  <option value="active">Active</option>
                  <option value="inactive">Inactive</option>
                </select>
              </div>
              <div class="form-group">
                <label>Summary of Report:</label>
                <textarea placeholder="Definition of Patient's Status.." rows="5" class="form-control" name="summ"></textarea>
              </div>
            </div>
            <br>
            <div class="form-group">
              <input type="submit" name="sbm2" class="btn btn-primary" value="Submit">
              <input type="button" name="cnc" value="Cancel" class="btn btn-default">
            </div>
          </div>
          </form>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
