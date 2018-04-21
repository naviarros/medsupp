@extends('layouts.masterdboard')
@section('content')
  <div class="col-md-4">
    <div style="margin-top: 30px;">
      <div class="row">
      <div class="imgbox">
        <img src="{{ $res->res_img }}" alt="">
        <div style="padding-left: 320px;">
          <button type="button" class="btn btn-default" name="button">Click to enlarge</button>
          <br><br>
          <button type="button" class="btn btn-default" name="button">Print Summary Report</button>
        </div>
      </div>
    </div>
    <br>
    <form class="" action="index.html" method="post">
      <div class="form-group">
          <label for="">Results ID: </label>
          <input type="text" name="" placeholder="Name" value="{{ $res->id }}" disabled>
        </div>
      <div class="form-group">
          <label for="">Patient Name: </label>
          <input type="text" name="" placeholder="Name" value="{{ $res->lstname}} {{ $res->frstname}} {{ $res->mdlename}}" disabled>
        </div>
        <div class="form-group">
          <label for="">Subject: </label>
          <input type="text" name="" placeholder="Subject" value="">
        </div>
        <div class="form-group">
          <label for="">Created at: </label>
          <input type="text" name="" placeholder="Created at" value="">
        </div>
        <div class="form-group">
          <label for="">Status: </label>
          <input type="text" name="" placeholder="Status" value="">
        </div>
        <div class="form-group">
          <label for="">Patient Type: </label>
          <input type="text" name="" placeholder="Patient Type" value="{{ $res->patient_type}}">
        </div>
        <div class="form-group">
          <label for="">Remarks: </label>
          <input type="text" name="" placeholder="Remarks" value="">
        </div>
    </form>
    </div>
  </div>
@endsection
