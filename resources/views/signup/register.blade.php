<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script type="text/javascript" src="js/app.js">
    </script>
  </head>
  <body>

    <div class="container">
        {{ Form::open(array('url' => '/login/signin', 'method' => 'post')) }}
          {{ csrf_field() }}
          <div class="form-group">
            {{  Form::label('username','Username', ['class' => 'control-label']) }}
            {{  Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username']) }}
          </div>
          <div class="form-group">
            {{ Form::label('password','Password', ['class' => 'control-label']) }}
            {{ Form::password('password', ['class' => 'form-control']) }}
          </div>
          <div class="form-group">
            {{ Form::submit('Register') }}
          </div>
        {{ Form::close() }}
  </body>
</html>
