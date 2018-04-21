@extends('layouts.masterdboard')

@section('content')
    <h3> X-RAY Tests Results and Samples </h3>
    <button type="button" class="btn btn-default">Inpatient</button>
    <button type="button" class="btn btn-default">Outpatient</button>
    <br>
    <br>
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Add Patients Laboratory Examination</a></li>
    <li><a data-toggle="tab" href="#menu2">Manage Xray Examination</a></li>
  </ul>
@if(session()->has('message.level'))
<div id="form-messages" class="alert alert-{{ session('message.level') }}" role="alert">
  {!! session('message.content') !!}
</div>
@endif
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>XRAY Laboratory Examination Registration</h3>
      {{ Form::open(['action' => 'Auth\resultscontroller@store', 'method' => 'post']) }}
          {{ csrf_field() }}
        <div class="row">
          <div class="col-md-4">
            <label class="radio-inline">
              <input type="radio" name="optradio" value="Chest">Chest
            </label>
            <label class="radio-inline">
              <input type="radio" name="optradio" value="Abdomen">Abdomen
            </label>
            <label class="radio-inline">
              <input type="radio" value="Lungs" name="optradio">Lungs
            </label>
          </div>
          <div class="col-md-4">
            <input type="file" name="resu" value="">
          </div>
        </div>
        <br>
        <fieldset>
          <legend>Create Xray Examination</legend>
          <div class="panel-body">
            <label for="typpes">Patient Type:
              <select class="form-control" name="tyy">
                <option value="Inpatient">Inpatient</option>
                <option value="Outpatient">Outpatient</option>
              </select>
            </label>

            <label for="typpes">Department:
              <select class="form-control" name="dpt">
                <option value="XRAY">XRAY</option>
              </select>
            </label>
            <br><br>
            <div class="form-group">
              <div class="col-md-4">
                Last Name: <input type="text" name="lstsname" class="form-control" value="">
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  First Name: <input type="text" name="firstname" class="form-control" value="">
                </div>
                <div class="form-group">
                  <div class="col-md-4">
                    Middle Name: <input type="text" name="mdlename" class="form-control" value="">
                  </div>
              <div class="form-group">
                <div class="col-md-4">
                  Date Created: <input type="date" name="datet" class="form-control" value="">
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-4">
                Age: <input type="number" name="ag" class="form-control" value="">
              </div>
          </div>
          </div>
          <div class="form-group">
            <div class="col-md-4">
            Patient Status: <select class="form-control" name="stt">
              <option value="Under Observation">Under Observation</option>
              <option value="Cleared Result">Cleared Result</option>
              <option value="For Admit">For Admit</option>
            </select>
          </div>
          </div>
          <br><br><br><br>
          <div class="form-group">
            <div class="col-md-4">
              Civil Status: <select class="form-control" name="cst">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Widowed">Widowed</option>
              </select>
            </div>
        </div>
        <div class="form-group">
          <div class="col-md-4">
            Citizenship: <select class="form-control" name="ctsz">
              <option value="Filipino">Filipino</option>
              <option value="American">American</option>
              <option value="Chinese">Chinese</option>
              <option value="Hindu">Hindu</option>
            </select>
          </div>
      </div>
          <br><br>
          <div class="row">
            <div class="form-group">
              <br><br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Findings:</label>
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
      {{ Form::close() }}
      </div>
    <div id="menu2" class="tab-pane fade">
      <div class="row">
        <div class="col-md-6">
          <br>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" name="search" id="search" class="form-control input-lg" placeholder="Search" />
                </div>
            </div>
        </div>
  </div>
  <br>
    <div id="editp">
      <table class="table table-bordered">
          <thead>
            <tr>
            <th>Result ID</th>
            <th>Result Image</th>
            <th>Patient Last Name</th>
            <th>Patient First Name</th>
            <th>Patient Middle Name</th>
            <th>Date Created</th>
            <th><div class="text-center">Print</div></th>
            <th><div class="text-center">Delete</div></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($xrayres as $res)
            <td>{{ $res->id }}</td>
            <td>{{ $res->res_img }}</td>
            <td>{{ $res->lstname }}</td>
            <td>{{ $res->frstname}}</td>
            <td>{{ $res->mdlename}}</td>
            <td>{{ $res->created_at }}</td>
            <td><div class="text-center"><a href="{{ action('Auth\resultscontroller@downloadPDF', $res->id)}}" name="insett"><span class="glyphicon glyphicon-print"></span></a></div></td>
            <td><div class="text-center"><form action="{{action('Auth\resultscontroller@destroy', $res->id)}}" method="post">
                      {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
          </form></div></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

      $('#search').on('keyup', function(){
        $value = $(this).val();
        $.ajax({
          type: 'get',
          url: '{{ URL::to('/getsearch')}}',
          data: {'search':$value},
          success: function(data){
            $('tbody').html(data);
          }
        });
      });
    </script>
  </div>
</div>
@endsection
