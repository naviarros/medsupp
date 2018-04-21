@extends('layouts.masterdboard')

@section('content')
  <h3>Patient Lists</h3>

<br>
<div class="row">
<div class="col-sm-4">
  <input type="search" name="srch" class="form-control" placeholder="Search..">
</div>
</div>
<br>
  <div>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Patient ID:</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Civil Status</th>
        <th>Occupation</th>
        <th>Action Taken</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
  <tbody>
    @foreach($patient as $key => $pat)
    <tr id="pat{{ $pat->id}}">
      <td>{{ $pat->id}}</td>
      <td>{{ $pat->lst_name}}</td>
      <td>{{ $pat->frst_name}}</td>
      <td>{{ $pat->mdle_name}}</td>
      <td>{{ $pat->patient_age}}</td>
      <td>{{ $pat->gender}}</td>
      <td>{{ $pat->marital_status}}</td>
      <td>{{ $pat->occupation}}</td>
      <td>{{ $pat->action_taken}}</td>
      <td class="text-center"><button class="btn btn-primary btn-edit" data-id="{{ $pat->id }}"><span class="glyphicon glyphicon-pencil"></span></button></td>
      <td class="text-center"><button class="btn btn-danger delete-btn" data-id="{{ $pat->id }}"><span class="glyphicon glyphicon-trash"></span></button></td>
    </tr>
    @endforeach
  </tbody>
</table>
@include('/msscontent/patients/editpatient')
</div>
<script type="text/javascript">
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      //---------------------
      $('#pasyente').on('submit', function(e){
        e.preventDefault();
        var form = $('#pasyente');
        var formData = form.serialize();
        var url = form.attr('action');
        var state = $('#save').val();
        var type = 'post';
        if(state=='Update')
        {
          type = 'put';
        }
        $.ajax({
          type : type,
          url : url,
          data : formData,
          success : function(data){
            var row = '<tr id="row'+ data.id +'">'+
              '<td>' + data.id + '</td>'+
              '<td>' + data.lst_name + '</td>' +
              '<td>' + data.frst_name + '</td>'+
              '<td>' + data.mdle_name + '</td>'+
              '<td>' + data.patient_age + '</td>'+
              '<td>' + data.gender + '</td>'+
              '<td>' + data.marital_status + '</td>'+
              '<td>' + data.occupation + '</td>'+
              '<td>' + data.action_taken + '</td>'+
              '<td>' + data.stats + '</td>' +
              '<td class="text-center"><button class="btn btn-primary btn-edit" data-id="'+ data.id +'"><span class="glyphicon glyphicon-pencil"></span></button></td>'+
              '<td class="text-center"><button class="btn btn-danger delete-btn" data-id="'+ data.id +'"><span class="glyphicon glyphicon-trash"></span></button></td>'+
              '</tr>';
              if(state=='save'){
                $('tbody').append(row);
              }
              else{
                $('#patientslists' + data.id).replaceWith(row);
              }
                $('#pasyente').trigger('reset');
                $('#lst_name').focus();
          }
        });
      });
      //-----------------------
      $('tbody').delegate('.btn-edit','click',function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/editpat')}}';
        $.ajax({
            type : 'get',
            url : url,
            data : {'id':value},
            success: function(data){
              $('#id').val(data.id);
              $('#lst_name').val(data.lst_name);
              $('#frst_name').val(data.frst_name);
              $('#mdle_name').val(data.mdle_name);
              $('#ages').val(data.patient_age);
              $('#marital').val(data.marital_status);
              $('#occu').val(data.occupation);
              $('#save').val('Update');
              $('#patientslists').modal('show');
            }
        });
      });

      $('tbody').delegate('.delete-btn','click',function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/deletecol')}}';
        if(confirm('Are you sure to delete?')==true){
          $.ajax({
            type: 'post',
            url: url,
            data: {'id':value},
            success: function(data){
              $('#patientslists'+value).remove();
            }
          });
        }
      });
</script>
@endsection
