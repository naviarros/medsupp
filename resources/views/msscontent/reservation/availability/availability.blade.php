@extends('layouts.masterdboard')

@section('content')
<meta name="_token" content="{{ csrf_token() }}">
  <h3>Doctors Availability</h3>
      <br>
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">On Duty</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="row">
        <div class="col-md-6">
          <br>
            <div id="custom-search-input">
              <form class="" action="" method="post">
                {{ csrf_field() }}
                   <div class="input-group col-md-12">
                    <input type="text" name="search" id="search" class="form-control input-lg" placeholder="Search" />
                
                </div>
              </form>
            </div>
        </div>
	</div>
  <br>

  <table class="table table-striped">
      <thead>
        <tr>
        <th>Doctor Number</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Specialty</th>
        <th>Title Degree</th>
        <th>Date Available</th>
        <th>Time Available</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach($avail as $row)
      <tr>
        <td>{{ $row->doc_no }}</td>
        <td>{{ $row->last_name }}</td>
        <td>{{ $row->first_name}}</td>
        <td>{{ $row->middle_name}}</td>
        <td>{{ $row->spclty }}</td>
        <td>{{ $row->ttle_degree}}</td>
        <td>{{ $row->day_avail}}</td>
        <td>{{ $row->time_avail}}</td>
        <td>{{ $row->status }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $avail->links()}}

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
      url: '{{ URL::to('/search')}}',
      data: {'search':$value},
      success: function(data){
        $('tbody').html(data);
      }
    });
  });
</script>

@endsection
