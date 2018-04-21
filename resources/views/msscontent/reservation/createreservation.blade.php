@extends('layouts.masterdboard')

@if(session()->has('message.level'))
<div id="form-messages" class="alert alert-{{ session('message.level') }}" role="alert">
  {!! session('message.content') !!}
</div>
@endif
  <fieldset>
    <legend>Patient Reservation Form</legend>
    <div class="panel-body">
      {{ Form::open(['action' => 'Auth\ReservationController@store', 'method' => 'post']) }}
        {{ csrf_field() }}
        <div class="row">
          <div class="form-group">
            <div class="col-md-4">
              <label>Reserve No:</label>
              <input type="text" name="reser" value="" class="form-control">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group">
            <div class="col-md-4">
              Last Name: <input type="text" name="patname" class="form-control" value="">
            </div>
            <div class="form-group">
              <div class="col-md-4">
                First Name <input type="text" name="patfname" class="form-control" value="">
              </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
              Middle Initial: <input type="text" name="patminit" class="form-control" value="">
            </div>
        </div>
        </div>
        </div>
        <div class="row">
          <div class="form-group">
            <div class="col-md-4">
              Mobile Number: <input type="text" name="mobile" value="" class="form-control">
            </div>
            <div class="form-group">
              <div class="col-md-4">
                Telephone Number: <input type="text" name="tel" class="form-control" value="">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                Date of Birth: <input type="date" name="bdd" class="form-control" value="">
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="form-group">
            <div class="col-md-4">
              HMO Accredited: <select class="form-control" name="hmo">
                <option value="PH">Asian Life</option>
                <option value="MC">MaxiCare</option>
                <option value="IC">IntelliCare</option>
                <option value="PC">PhilCare</option>
                <option value="CL">CocoLife</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
              Action: <select class="form-control" name="actiontake">
                <option value="Consultation">Consultation</option>
                <option value="Medical Clearance">Medical Clearance</option>
                <option value="Medical Certificate">Medical Certificate</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
              Doctor Name: <select class="form-control" name="namedoc">
                <option value="Melendrez">Dr. Melendrez</option>
                <option value="Gonzales">Dr. Gonzales</option>
                <option value="Sarte">Dr. Sarte</option>
              </select>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="form-group">
            <div class="col-md-4">
              <input type="submit" name="done" class="btn btn-default" value="Reserve Now">
            </div>
          </div>
        </div>
      {{ Form::close() }}
    </div>
  </fieldset>
