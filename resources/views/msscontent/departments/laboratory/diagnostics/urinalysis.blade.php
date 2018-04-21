@extends('layouts.masterdboard')

@section('content')
    <h3> Urinalysis Tests Results and Samples </h3>
    <button type="button" class="btn btn-default">Inpatient</button>
    <button type="button" class="btn btn-default">Outpatient</button>
    <br>
    <br>
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Add Patients Laboratory Examination</a></li>
    <li><a data-toggle="tab" href="#menu1">Manage Urinalysis Examination</a></li>
    <li><a data-toggle="tab" href="#menu2">For Reproduce</a></li>
  </ul>
  @if(session()->has('message.level'))
  <div id="form-messages" class="alert alert-{{ session('message.level') }}" role="alert">
    {!! session('message.content') !!}
  </div>
  @endif
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Urinalysis Laboratory Examination Registration</h3>
      {{ Form::open(['action' => 'Auth\diagnosticsResultsController@store', 'method' => 'post']) }}
          {{ csrf_field() }}
        <div class="row">
        <fieldset>
          <legend>Create Urinalysis Examination</legend>
          <div class="panel-body">
            <label for="typpes">Patient Type:
              <select class="form-control" name="tyy">
                <option value="Inpatient">Inpatient</option>
                <option value="Outpatient">Outpatient</option>
              </select>
            </label>
            <label for="typpes">Section:
              <select class="form-control" name="dpt">
                <option value="Urinalysis">Urinalysis</option>
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
                <label class="col-sm-3 control-label">Color:</label>
                <div class="col-md-4">
                  <select class="textcss" name="colo">
                    <option value="Yellow">Yellow</option>
                    <option value="Orange">Orange</option>
                    <option value="Red Orange">Red Orange</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Clarity:</label>
                  <div class="col-md-4">
                    <select class="textcss" name="clar">
                      <option value="Transparent">Transparent</option>
                      <option value="Clear">Clear</option>
                      <option value="Yellowish">Yellowish</option>
                    </select>
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Bilirubin:</label>
                  <div class="col-md-4">
                    <select class="textcss" name="bili">
                      <option value="Positive">Positive</option>
                      <option value="Negative">Negative</option>
                    </select>
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Specific Gravity:</label>
                  <div class="col-md-4">
                    <input type="text" name="specgrav" class="textcss" placeholder="Specific Gravity" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Occult Blood:</label>
                  <div class="col-md-4">
                    <select class="textcss" name="occult">
                      <option value="Small">Small</option>
                      <option value="Large">Large</option>
                    </select>
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">pH:</label>
                  <div class="col-md-4">
                    <input type="text" name="ph" class="textcss" placeholder="pH" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Urobilinogen:</label>
                  <div class="col-md-4">
                    <input type="text" name="urob" class="textcss" placeholder="Urobilinogen" value="">
                  </div>
                </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">Nitrate:</label>
                  <div class="col-md-4">
                    <select class="textcss" name="nitr">
                      <option value="Positive">Positive</option>
                      <option value="Negative">Negative</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Leukocytes:</label>
                    <div class="col-md-4">
                      <select class="textcss" name="leuko">
                        <option value="Normal">Normal</option>
                        <option value="Trace">Trace</option>
                        <option value="Abnormal">Abnormal</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-3 control-label">Glucose:</label>
                      <div class="col-md-4">
                        <select class="textcss" name="gluc">
                          <option value="500 (1/2%)">500 (1/2%)</option>
                          <option value="200">200</option>
                          <option value="100">100</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Ketones:</label>
                        <div class="col-md-4">
                          <select class="textcss" name="keton">
                            <option value="Positive">Positive</option>
                            <option value="Negative">Negative</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label">Protein:</label>
                          <div class="col-md-4">
                            <input type="text" name="prote" class="textcss" value="" placeholder="Protein">
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">WBC:</label>
                            <div class="col-md-4">
                              <input type="text" name="wbc" class="textcss" value="" placeholder="WBC">
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">RBC:</label>
                              <div class="col-md-4">
                                <input type="text" name="rbc" class="textcss" value="" placeholder="RBC">
                              </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Epithelial Cells:</label>
                                <div class="col-md-4">
                                  <select class="textcss" name="epicells">
                                    <option value="None Seen">None Seen</option>
                                    <option value="Seen">Seen</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-3 control-label">Bacteria:</label>
                                  <div class="col-md-4">
                                    <select class="textcss" name="bact">
                                      <option value="Always">Always</option>
                                      <option value="Occasional">Occasional</option>
                                      <option value="Never">Never</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Urine Culture:</label>
                                    <div class="col-md-4">
                                      <input type="text" name="urinecul" class="textcss" value="" placeholder="Urine Culture">
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
        <th>Patient ID</th>
        <th>Report Date</th>
        <th>Last Name</th>
        <th>First Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($urine as $diag)
      <tr>
        <td><div class="text-center"><a href="{{ action('Auth\diagnosticsResultsController@edit', $diag->id)}}" name="insett" id="edit" onclick="edit();"><span class="glyphicon glyphicon-pencil"></span></a></div></td>
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

                </div>
            </div>
        </div>
  </div>
  <br><br>
  <table class="table table-striped">
      <thead>
        <tr>
        <th>Print</th>
        <th>Patient ID</th>
        <th>Report Date</th>
        <th>Last Name</th>
        <th>First Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($urine as $diag)
      <tr>
        <td><div class="text-center"><a href="{{ action('Auth\diagnosticsResultsController@pdfdl', $diag->id)}}" name="insett"><span class="glyphicon glyphicon-print"></span></a></div></td>
        <td>{{ $diag->urine_id }}</td>
        <td>{{ $diag->rep_date}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
    </div>
  </div>
@endsection
