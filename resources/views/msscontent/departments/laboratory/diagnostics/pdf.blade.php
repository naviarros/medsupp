<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/app.css">
    <script type="text/javascript" src="js/app.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.js">
    </script>
  </head>
  <body>
    <div style="margin-left: 20px;">
      <img src="img/ollh-logo.png" width="250" height="230" alt="">
    </div>
    <div style="margin-left: 220px; margin-top: -180px;">
      <p style="font-family: Tahoma; font-size: 26px; text-transform: uppercase;"><b>Our Lady of Lourdes Hospital</b></p>
    </div>
    <div style="margin-left: 220px; margin-top: -15px;">
      <p style="font-family: Tahoma; font-size: 18px;">46 P. Sanchez St, Santa Mesa, Manila, Metro Manila</p>
    </div>
    <div style="margin-left: 220px; margin-top: -10px;">
      <p style="font-family: Tahoma; font-size: 18px;">Telephone/FAX: (02) 716 8001</p>
    </div>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Patient Number</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Gender</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $diagnose->urine_id }}</td>
          <td>{{ $diagnose->lst_name}}</td>
        </tr>
      </tbody>
  </body>
</html>
