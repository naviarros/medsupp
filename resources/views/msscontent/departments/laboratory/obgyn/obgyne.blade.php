@extends('layouts.masterdboard')

@section('content')
    <h3> Chemotherapy Tests Results and Samples </h3>
    <button type="button" class="btn btn-default">Inpatient</button>
    <button type="button" class="btn btn-default">Outpatient</button>
    <br>
    <br>
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Add Patients Laboratory Examination</a></li>
    <li><a data-toggle="tab" href="#menu1">Patient Results</a></li>
    <li><a data-toggle="tab" href="#menu2">Manage Chemotherapy Examination</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Chemotherapy Laboratory Examination Registration</h3>
      <form method="post" action="">
        <div class="row">
          <div class="col-md-4">
            <label class="radio-inline">
              <input type="radio" name="optradio">Plain
            </label>
            <label class="radio-inline">
              <input type="radio" name="optradio">w/ Contrast
            </label>
          </div>
          <div class="col-md-4">
            <input type="file" name="resu" value="">
          </div>
        </div>
        <br>
        <fieldset>
          <legend>Create Chemotherapy Examination</legend>
          {{ csrf_field() }}
          <div class="panel-body">
            <label for="typpes">Patient Type:
              <select class="form-control" name="tyy">
                <option value="Inpatient">Inpatient</option>
                <option value="Outpatient">Outpatient</option>
              </select>
            </label>
            <br><br>
            <div class="form-group">
              <div class="col-md-4">
                Patient Name: <input type="text" name="patname" class="form-control" value="">
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  Date Created: <input type="date" name="datet" class="form-control" value="">
                </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
            Patient Status: <select class="form-control" name="stt">
              <option value="underobs">Under Observation</option>
              <option value="cleared">Cleared Result</option>
              <option value="foradm">For Admit</option>
            </select>
          </div>
          </div>
          <br><br><br>
          <div class="form-group">
            <div class="col-md-4">
              Subject: <input type="text" name="subj" class="form-control" value="">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="form-group">
              <br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Definition:</label>
              <div style="padding-left: 30px;"><textarea rows="8" cols="10" class="form-control" name="defi"></textarea>
            </div>
          </div>
          <div style="padding-left: 30px;">
          <p class="help-block">
            If there is another findings of problem. Put it on remarks
          </p>
        </div>
        <div style="padding-left: 20px;">
        <div class="form-group">
          <div class="col-md-4">
            Remarks: <textarea name="rem" class="form-control" rows="3" cols="30"></textarea>
          </div>
        </div>
        </div>
        </div>
        <div style="padding-left: 15px; padding-top: 20px;">
        <div class="row">
        <div class="form-group">
          <div class="col-md-4">
            <input type="submit" name="insett" class="btn btn-default btn-primary" value="Create">
            <input type="submit" name="bkc" class="btn btn-default btn-primary" value="Return to Forms">
          </div>
        </div>
      </div>
        </div>
        </fieldset>
      </form>
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
        <th>Result ID</th>
        <th>Result Image</th>
        <th>Patient Name</th>
        <th>Date Created</th>
        <th>Patient Status</th>
        <th>Subject</th>
        <th>Remarks</th>
      </tr>
    </thead>
  </table>
    </div>
      </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
@endsection
