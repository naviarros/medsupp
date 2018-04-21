@extends('layouts.masterdboard')

@section('content')
  <h3><b>Duty Roster</b> <small>Schedule Lists</small></h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="row">
      <div class="col-md-3">
        <input type="search" name="srch" placeholder="Search" class="form-control">
    </div>

  </div>
    </div>
  </div>
  <br>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">&nbsp;</h3>
    </div>
    <div class="panel-body">
      <table class="table table-bordered table-striped" id="table">
        <thead>
          <tr>
            <th>Print</th>
            <th>Action Taken</th>
            <th>ID</th>
            <th>Date Employed</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Specialty</th>
          </tr>
        </thead>
        <tbody>
          @foreach($doctors as $key => $row)
          <tr id="row{{ $row->id}}">
            <td width="50px"><button class="btn btn-sq-sm btn-default" type="button"><span class="glyphicon glyphicon-print"></span></button></td>
            <td width="125px">
            <button class="btn btn-sq-sm btn-default edit-modal" data-id="{{ $row->id}}"><span class="glyphicon glyphicon-pencil"></span></button>
            <button class="btn btn-sq-sm btn-default delete-modal" data-id="{{ $row->id}}"><span class="glyphicon glyphicon-trash"></span></button>
            </td>
            <td>{{ $row->id}}</td>
            <td>{{ $row->date_emplyd }}</td>
            <td>{{ $row->last_name }}</td>
            <td>{{ $row->first_name }}</td>
            <td>{{ $row->middle_name }}</td>
            <td>{{ $row->spclty }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
      {{ $doctors->appends(Request::only('srch'))->links() }}
      @include('/msscontent/editdoctor')
    </div>
  </div>
<script type="text/javascript">
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $('#frmDoct').on('submit', function(e){
        e.preventDefault();
        var form = $('#frmDoct');
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
              '<td width="50px"><button class="btn btn-sq-sm btn-default" type="button"><span class="glyphicon glyphicon-print"></span></button></td>'+
              '<td width="125px"><button class="btn btn-sq-sm btn-default edit-modal" data-id="'+ data.id + '"> <span class="glyphicon glyphicon-pencil"></span></button>'+
              '<button class="btn btn-sq-sm btn-default delete-modal" data-id="'+ data.id +'"><span class="glyphicon glyphicon-trash"></span></button></td>'+
              '<td>' + data.id + '</td>'+
              '<td>' + data.date_emplyd + '</td>' +
              '<td>' + data.last_name + '</td>'+
              '<td>' + data.first_name + '</td>'+
              '<td>' + data.middle_name + '</td>'+
              '<td>' + data.spclty + '</td>'+
              '</tr>';
              if(state=='save'){
                $('tbody').append(row);
              }
              else{
                $('#docs' + data.id).replaceWith(row);
              }
                $('#frmDoct').trigger('reset');
                $('#last_name').focus();
          }
        });
      });
      //---------------------
      $('tbody').delegate('.edit-modal','click',function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/edit')}}';
        $.ajax({
            type : 'get',
            url : url,
            data : {'id':value},
            success: function(data){
              $('#id').val(data.id);
              $('#date_emplyd').val(data.date_emplyd);
              $('#last_name').val(data.last_name);
              $('#first_name').val(data.first_name);
              $('#middle_name').val(data.middle_name);
              $('#doc_no').val(data.doc_no);
              $('#spclty').val(data.spclty);
              $('#save').val('Update');
              $('#docs').modal('show');
            }
        });
      });
      //--------------
      $('tbody').delegate('.delete-modal','click',function(){
        var value = $(this).data('id');
        var url = '{{ URL::to('/deleterow')}}';
        if(confirm('Are you sure to delete?')==true){
          $.ajax({
            type: 'post',
            url: url,
            data: {'id':value},
            success: function(data){
              $('#docs'+value).remove();
            }
          });
        }
      });
</script>
@endsection
