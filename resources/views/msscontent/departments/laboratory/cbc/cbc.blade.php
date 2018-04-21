@extends('layouts.masterdboard')

@section('content')
    <h3> CBC Tests Results and Samples </h3>
    <br>
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Add Patients Laboratory Examination</a></li>
    <li><a data-toggle="tab" href="#menu1">Manage CBC Examination</a></li>
    <li><a data-toggle="tab" href="#menu2">For Reproduce</a></li>
  </ul>
  @if(session()->has('message.level'))
  <div id="form-messages" class="alert alert-{{ session('message.level') }}" role="alert">
    {!! session('message.content') !!}
  </div>
  @endif
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>CBC Laboratory Examination Registration</h3>
      {{ Form::open(['action' => 'Auth\cbcController@store', 'method' => 'post']) }}
          {{ csrf_field() }}
        <div class="row">
        <fieldset>
          <legend>Create CBC Examination</legend>
          <div class="panel-body">
            <label for="typpes">Patient Type:
              <select class="form-control" name="tyy">
                <option value="Inpatient">Inpatient</option>
                <option value="Outpatient">Outpatient</option>
              </select>
            </label>
            <label for="typpes">Section:
              <select class="form-control" name="dpt">
                <option value="CBC">CBC</option>
              </select>
            </label>
            <br><br>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3>Patient Information</h3>
            </div>
            <div class="panel-body">
              <div class="row">
              <div class="form-group">
                <div class="col-md-4">
                <label for="fname">Patient ID:</label>
                <input type="text" id="fname" class="textcss" name="patid" placeholder="Example: John">
              </div>
              <div class="col-md-4">
              <label for="fname">Report Date:</label>
              <input type="date" id="fname" class="textcss" name="repdate" placeholder="Example: John">
            </div>
            <div class="col-md-4">
            <label for="fname">Age:</label>
            <input type="number" id="fname" class="textcss" name="age" placeholder="Example: John">
          </div>
              </div>
            </div>
            <br>
            <div class="row">
            <div class="form-group">
              <div class="col-md-4">
              <label for="fname">Last Name:</label>
              <input type="text" id="fname" class="textcss" name="lname" placeholder="Example: John">
            </div>
            <div class="col-md-4">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" class="textcss" name="fname" placeholder="Example: John">
          </div>
          <div class="col-md-4">
          <label for="fname">Middle Name:</label>
          <input type="text" id="fname" class="textcss" name="mdname" placeholder="Example: John">
          </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="form-group">
              <div class="col-md-4">
                <label for="fname">Date of Birth:</label>
                <input type="date" id="fname" class="textcss" name="dob" placeholder="Example: John">
              </div>
              <div class="col-md-4">
                <label for="fname">Gender:</label>
                <select class="textcss" id="fname" name="gnder">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="fname">Birthplace:</label>
                <select class="textcss" id="fname" name="bplace">
                  <option value="Manila">Manila</option>
                  <option value="Quezon City">Quezon City</option>
                </select>
              </div>
            </div>
          </div>
          </div>
        </fieldset>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3>Medical Examination</h3>
          </div>
          <div class="panel-body">
            <div class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">RBC:</label>
                <div class="col-md-4">
                  <input type="text" name="rbc" class="textcss" placeholder="RBC Count" value="">
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">WBC:</label>
                  <div class="col-md-4">
                    <input type="text" name="wbc" class="textcss" placeholder="WBC Count" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">HGB:</label>
                  <div class="col-md-4">
                    <input type="text" name="hgb" class="textcss" placeholder="Hemoglobin" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">HCT:</label>
                  <div class="col-md-4">
                    <input type="text" name="hct" class="textcss" placeholder="Hematocrit" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">MCV:</label>
                  <div class="col-md-4">
                    <input type="text" name="mcv" class="textcss" placeholder="MCV Count" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">MCH:</label>
                  <div class="col-md-4">
                    <input type="text" name="mch" class="textcss" placeholder="MCH Count" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">MCHC:</label>
                  <div class="col-md-4">
                    <input type="text" name="mchc" class="textcss" placeholder="MCHC Count" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">RDW-CV:</label>
                  <div class="col-md-4">
                    <input type="text" name="rdw" class="textcss" placeholder="RDW-CV Count" value="">
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Platelets:</label>
                    <div class="col-md-4">
                      <input type="text" name="plat" class="textcss" placeholder="Platelet Count" value="">
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">MPV:</label>
                      <div class="col-md-4">
                        <input type="text" name="mpv" class="textcss" value="" placeholder="MPV Count">
                      </div>
                    </div>
          </div>
        </div>
        </div>
          <input type="submit" name="sbm_bt" class="btn btn-default" value="Submit">
          <input type="reset" name="" class="btn btn-default" value="Clear">
      {{ Form::close() }}
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="row">
        <div class="col-md-6">
          <br>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
  </div>
  <br>
  <table class="table table-striped">
      <thead>
        <tr>
        <th>Modify</th>
        <th>Remove</th>
        <th>Result ID</th>
        <th>Patient ID</th>
        <th>Report Date</th>
        <th>Last Name</th>
        <th>First Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cbc as $key => $sum)
      <tr>
        <td><div class="text-center"><a href="" name="insett"><span class="glyphicon glyphicon-pencil"></span></a></div></td>
        <td><div class="text-center"><form action="{{ action('Auth\cbcController@destroy', $sum->id)}}" method="post">
          {{ csrf_field() }}
          <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
        </form></div></td>
        <td>{{ $sum->id }}</td>
        <td>{{ $sum->patient_id }}</td>
        <td>{{ $sum->report_date}}</td>
        <td>{{ $sum->lastname}}</td>
        <td>{{ $sum->firstname}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
      </div>
    <div id="menu2" class="tab-pane fade">
      <div class="row">
        <div class="col-md-6">
          <br>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
  </div>
  <br>
  <table class="table table-striped">
      <thead>
        <tr>
        <th>Result ID</th>
        <th>Patient ID</th>
        <th>Report Date</th>
        <th>Last Name</th>
        <th>First Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cbc as $sum)
      <tr>
        <td><div class="text-center"><a href="{{ action('Auth\cbcController@download', $sum->id)}}" name="insett"><span class="glyphicon glyphicon-print"></span></a></div></td>
        <td>{{ $sum->id }}</td>
        <td>{{ $sum->patient_id }}</td>
        <td>{{ $sum->report_date }}</td>
        <td>{{ $sum->lastname }}</td>
        <td>{{ $sum->firstname }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
  </div>
@endsection
