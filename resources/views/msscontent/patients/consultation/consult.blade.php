@extends('layouts.masterdboard')

@section('content')
    <h3>Lists of Consultation Reports</h3>
    <br>
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
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="glyphicon glyphicon-cog"></span> Advanced Search
        </button>
  </div>
  </div>
  <br>
  <div id="filter-panel" class="collapse filter-panel">
      <div class="panel panel-default">
          <div class="panel-body">
              <form class="form-inline" role="form">
                  <div class="form-group">
                      <label class="filter-col" style="margin-right:0;" for="pref-perpage">Rows per page:</label>
                      <select id="pref-perpage" class="form-control">
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option selected="selected" value="10">10</option>
                          <option value="15">15</option>
                          <option value="20">20</option>
                          <option value="30">30</option>
                          <option value="40">40</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="200">200</option>
                          <option value="300">300</option>
                          <option value="400">400</option>
                          <option value="500">500</option>
                          <option value="1000">1000</option>
                      </select>
                  </div> <!-- form group [rows] -->
                  <div class="form-group">
                      <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>
                      <input type="text" class="form-control input-sm" id="pref-search">
                  </div><!-- form group [search] -->
                  <div class="form-group">
                      <label class="filter-col" style="margin-right:0;" for="pref-orderby">Order by:</label>
                      <select id="pref-orderby" class="form-control">
                          <option>Descendent</option>
                      </select>
                  </div> <!-- form group [order by] -->
                  <div class="form-group">
                      <div class="checkbox" style="margin-left:10px; margin-right:10px;">
                          <label><input type="checkbox"> Remember parameters</label>
                      </div>
                      <button type="submit" class="btn btn-default filter-col">
                          <span class="glyphicon glyphicon-record"></span> Save Settings
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">Create Report</th>
        <th class="text-center">Print Report</th>
        <th class="text-center">Last Name</th>
        <th class="text-center">First Name</th>
        <th class="text-center">Middle Name</th>
        <th class="text-center">Gender</th>
        <th class="text-center">Age</th>
        <th class="text-center">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($report as $key => $consu)
      <tr id="consu{{ $consu->id }}">
        <td class="text-center"><button data-id="{{ $consu->id}}" class="btn btn-default connew">New Consult Report</button></td>
        <td class="text-center"><a href="{{ action('Auth\consultcontroller@consult', $consu->id)}}" class="btn btn-default" name="insett"><span class="glyphicon glyphicon-print"></span></a></td>
        <td>{{ $consu->lst_name}}</td>
        <td>{{ $consu->frst_name}}</td>
        <td>{{ $consu->mdle_name}}</td>
        <td>{{ $consu->gender}}</td>
        <td>{{ $consu->patient_age}}</td>
        <td>{{ $consu->stats}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @include('/msscontent/patients/consultation/newreport')
</div>
<script type="text/javascript">
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        //---------------
        $('#reportt').on('submit', function(e){
          e.preventDefault();
          var form = $('#reportt');
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
                if(state=='save'){
                  $('tbody').append(row);
                }
                else{
                  $('#consultationreport' + data.id).replaceWith(row);
                }
            }
          });
        });
        //---------------
        $('tbody').delegate('.connew','click',function(){
          var value = $(this).data('id');
          var url = '{{ URL::to('/editt')}}';
            $.ajax({
                type : 'get',
                url : url,
                data : {'id':value},
                success: function(data){
                  $('#id').val(data.id);
                  $('#lst').val(data.lst_name);
                  $('#frst').val(data.frst_name);
                  $('#mdle').val(data.mdle_name);
                  $('#ggg').val(data.patient_age);
                  $('#gn').val(data.gender);
                  $('#dayt').val(data.patient_bday);
                  $('#cret').val(data.date_created);
                  $('#resul').val(data.consultreport);
                  $('#save').val('Update');
                  $('#consultationreport').modal('show');
                }
            });
        });
</script>
@endsection
