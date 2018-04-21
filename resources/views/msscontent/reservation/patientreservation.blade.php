@extends('layouts.masterdboard')
@section('content')

  <div class="row">
  <div class="form-group">
      <input type="button" name="insett" id="creat" class="btn btn-default btn-primary" onclick="makecreate();" value="Create Patient Reservation">
  </div>
</div>
<div id="direct">
  <fieldset>
    <legend>Status of Patients Reserved</legend>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Reserve No</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Initial</th>
        <th>Birthdate</th>
        <th>Mobile No</th>
        <th>Telephone No</th>
        <th>HMO Credited</th>
        <th>Action</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <table class="table table-bordered">
      <tbody>
      @foreach($data as $rows)
      <tr>
        <th>{{$rows->reserve_no}}</th>
        <th>{{$rows->pat_res_lname}}</th>
        <th>{{$rows->pat_res_fname}}</th>
        <th>{{$rows->pat_res_mdinit}}</th>
        <th>{{$rows->dateofbirth}}</th>
        <th>{{$rows->mobile_no}}</th>
        <th>{{$rows->tel_no}}</th>
        <th>{{$rows->hmo_credited}}</th>
        <th><button type="button" name="button" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button></th>
          <th><button type="button" name="button" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button></th>
      </tr>
      @endforeach
    </tbody>
    </table>
  </fieldset>
</div>
  </div>
@endsection
