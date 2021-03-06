<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Consultation Report 2018</title>
    <link rel="stylesheet" href="css/app.css">
    <script type="text/javascript" src="js/app.js">
    </script>
    <script type="text/javascript" src="js/bootstrap.js">
    </script>
  </head>
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
      <br><br><br><br>
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Gender</th>
          <th>Age</th>
      </thead>
      <tbody>
        <tr>
          <td>{{ $report->lst_name}}</td>
          <td>{{ $report->frst_name}}</td>
          <td>{{ $report->mdle_name}}</td>
          <td>{{ $report->gender}}</td>
          <td>{{ $report->patient_age}}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>Birthday</th>
          <th>Address</th>
          <th>Civil Status</th>
          <th>Occupation</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $report->patient_bday}}</td>
          <td>{{ $report->patient_address}}</td>
          <td>{{ $report->marital_status}}</td>
          <td>{{ $report->occupation}}</td>
          <td>{{ $report->action_taken}}</td>
        </tr>
      </tbody>
    </table>
    <div style="border: 1px solid #000000">
    </div>
    <br>
    <div class="container">
      <h3>IMPRESSION (RESULT OF CONSULTATION):</h3>
      <br>
      <div class="container-fluid">
        <ul><li style="font-family: Courier; font-size: 24px; font-style: Italic;"><b>{{ $report->consultreport}}</li></ul>
          <br>
          <div style="margin-top: 100px;">
            <p>Consulted By:</p>
            <br>
            <p>Physician Name<br>Signature Over Printed Name</p>
          </div>
      </div>
    </div>
  </body>
</html>
