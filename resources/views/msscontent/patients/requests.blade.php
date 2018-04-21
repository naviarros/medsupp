@extends('layouts.masterdboard')

@section('content')
<style type="text/css">
  .button1, .button1:hover {
    border-radius: 80%;
    background-color: white;
    border: none;
    color: green;
  }
  .button2, .button2:hover {
    border-radius: 80%;
    background-color: white;
    border: none;
    color: red;
  }
  .successbox{
    border-radius: 110%;
    width: auto;
    border: none;
    color: blue;
  }
</style>
  <h3> Monitoring of Reserve Requests </h3>
  <div class="container">
  <div class="row">
    <div class="col-md-4">
    <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Patient Reports">
                <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                <span class="glyphicon glyphicon-search"></span>
               </button>
               </span>
               </div>
             </div>
</div>
</div>
<br>
<table class="table table-condensed">
  <thead>
    <tr>
      <th></th>
      <th>Patient Name</th>
      <th>Birthdate</th>
      <th>Mobile No</th>
      <th>Action</th>
      <th>Status</th>
    </tr>
  </thead>
<tbody>
  @foreach($reserv as $resr)
  <tr>
    <td><div class="text-center">
    {{ Form::open(['action' => 'Auth\patientreserve@sendSMS', 'method' => 'post']) }}
      <button type="submit" name="smsbtn" class="button1"><span class="glyphicon glyphicon-ok"></span></button>
      {{ Form::close() }}
      &nbsp;
      <a href="{{ action('Auth\patientreserve@destroy', $resr->id)}}" class="button2"><span class="glyphicon glyphicon-remove"></span></a>
    </div>
  </td>
    <td>{{ $resr->pat_res_lname}} {{ $resr->pat_res_fname }} {{ $resr->pat_res_mdinit }}</td>
    <td>{{ $resr->dateofbirth }}</td>
    <td>{{ $resr->mobile_no }}</td>
    <td>{{ $resr->action}}</td>
    <td>@if($resr['status']==0)
      <p>Active</p>
      @else
      <p>Inactive</p>
      @endif
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>

@endsection
