@extends('layouts.masterdboard')

@section('title','User')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Directory</h3>
  </div>
    <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                      <a href="/msscontent/dutyroster" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Physicians</a>
                      <a href="/msscontent/departments/laboratory/xray/labxray" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Laboratory</a>
                      <a href="/msscontent/patients/patientstatus" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-signal"></span> <br/>Patients</a>
                    </div>
                    <div class="col-xs-6 col-md-6">
                      <a href="/msscontent/patients/consultation/consult" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Reports</a>
                      <a href="#" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Requests</a>
                      <a href="#" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-picture"></span> <br/>Profile</a>
                    </div>
                </div>
  </div>
</div>
<fieldset>
  <legend>Announcements:</legend>
  <div style="margin-left: 50px;">
    Released v0.1.1 (Testing):
    <br>
    <div style="margin-left: 40px; margin-top: 5px;">
      Physician/Doctor Navigation:
    </div>
    <div style="margin-left: 90px; margin-top: 5px;">
      <ul>
        <li>Added Inserting Newly-employed Doctor (v0.1.1)</li>
        <li>Added Monitoring of Doctors (v0.1.1)</li>
        <li>Added Status/Duty of Doctors (v0.1.1)</li>
      </ul>
    </div>
    <div style="margin-left: 40px; margin-top: 5px;">
      Patients Navigation:
    </div>
    <div style="margin-left: 90px; margin-top: 5px;">
      <ul>
        <li>Added Inserting new Patient/s (v0.1.1)</li>
        <li>Added Monitoring of Patients (v0.1.1)</li>
        <li>Added Consultation Result/Report downloadable via PDF (v0.1.1)</li>
      </ul>
    </div>
    <div style="margin-left: 40px; margin-top: 5px;">
      Reservation of Patients:
    </div>
    <div style="margin-left: 90px; margin-top: 5px;">
      <ul>
        <li>Added Online Reservation for Clients (v0.1.1)</li>
        <li>Added Administrator Approval of Requests (v0.1.1)</li>
        <li>Added SMS Notification to receive once the request approved (v0.1.1)</li>
      </ul>
    </div>
    <div style="margin-left: 40px; margin-top: 5px;">
        Laboratory & Radiology:
    </div>
    <div style="margin-left: 90px; margin-top: 5px;">
      <ul>
        <li>Added Viewing of Results (v0.1.1)</li>
        <li>Added Creating Laboratory Examination (Hospital Use Only) (v0.1.1)</li>
        <li>Added Monitoring of Laboratory Tests of Patients (v0.1.1)</li>
        <li>Added Requests for Reproduce of Laboratory Impressions downloadable via PDF (v0.1.1)</li>
      </ul>
    </div>
    <div style="margin-left: 40px; margin-top: 5px;">
        Doctor's Availability:
    </div>
    <div style="margin-left: 90px; margin-top: 5px;">
      <ul>
        <li>Added Lists of Availability of Doctors (v0.1.1)</li>
      </ul>
    </div>
  </div>
</fieldset>
@endsection
