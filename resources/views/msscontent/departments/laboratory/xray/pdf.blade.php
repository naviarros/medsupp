<!DOCTYPE html>
<html>
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
    <br><br><br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Age</th>
          <th>Marital Status</th>
          <th>Nationality</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $resu->lstname }}</td>
          <td>{{ $resu->frstname }}</td>
          <td>{{ $resu->mdlename }}</td>
          <td>{{ $resu->age }}</td>
          <td>{{ $resu->cstatus}}</td>
          <td>{{ $resu->ntnl}}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Type of Laboratory</th>
          <th>Department/Section</th>
          <th>Created At</th>
          <th>Patient Type</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td>{{ $resu->typeoflab }}</td>
            <td>{{ $resu->dprtment}}</td>
            <td>{{ $resu->created_at }}</td>
            <td>{{ $resu->patient_type}}</td>
          </tr>
      </tbody>
    </table>
    <div style="border-bottom: 1px solid #000000"></div>
    <br>
    <h3> Results: </h3>
    <br>
    <div class="col-md-4">
      <p style="font-family: sans-serif; size: 20px;">{{ $resu->definition_test}}</p>
      <br>
      <p style="font-family: sans-serif; size: 30px;"><strong>Remarks (If any problems found. Insert here):</strong> {{ $resu->remarks }}</p>
      </div>
      <br>
      <br>
      <br>
      <div class="col-md-4">
          <p>Approved by:</p>
          <br>
          <p>Physician Name</p>
          <p>(Signature over Printed Name)</p>
      </div>
    </div>
  </body>
</html>
