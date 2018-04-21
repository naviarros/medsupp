<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MSS - Login</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
    <script>
       window.Laravel = {!! json_encode([
           'csrfToken' => csrf_token(),
       ]) !!};
   </script>
  </head>
  <body>
    <div class="middlePage">
      <div class="page-header">
      <h1 class="logo" style="color: #8b0000;">OLLH - <small> Medical Support System </small></h1>
      </div>
      <div class="panel panel-primary panel-transparent">
        <div class="panel-heading">
              <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">

            <div class="row">

          <div class="col-md-5" >
          <a href="#"><img src="http://techulus.com/buttons/fb.png" /></a><br/>
          </div>
          <div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
            {!! Form::open(['url' => '/msscontent/dashboard', 'method' => 'post']) !!}
          <fieldset>
            {{ csrf_field() }} <input type="hidden" name="redirurl" value="{{ $_SERVER['REQUEST_URI']}}">
           <input id="textinput" name="usern" type="text" placeholder="Enter User Name" class="form-control input-md">
           <div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Remember me</small></div>
           <input id="password" name="pword" type="password" placeholder="Enter Password" class="form-control input-md">
           <div class="spacing"><a href="#"><small> Forgot Password?</small></a><br/></div>
           <button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Sign In</button>
          </fieldset>
          {!! Form::close() !!}
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </body>
</html>
