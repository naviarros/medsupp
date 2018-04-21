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
          <td>{{ $cb->patient_id }}</td>
          <td>{{ $cb->lastname }}</td>
          <td>{{ $cb->firstname }}</td>
          <td>{{ $cb->middlename }}</td>
          <td>{{ $cb->gender }}</td>
        </tr>
      </tbody>
    </table>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Age</th>
          <th>Date of Birth</th>
          <th>Report Date</th>
          <th>Department/Section</th>

        </tr>
      </thead>
      <tbody>
          <tr>
            <td>{{ $cb->edad }}</td>
            <td>{{ $cb->bday}}</td>
            <td>{{ $cb->report_date }}</td>
            <td>{{ $cb->section }}</td>
          </tr>
      </tbody>
    </table>
    <div style="border-bottom: 1px solid #000000"></div>
    <h3> Results: </h3>
    <div class="col-md-4">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Component</th>
            <th>Value Result</th>
            <th>Standard Range</th>
            <th>Units</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>RBC</td>
            <td>{{ $cb->rbc }}</td>
            <td>3.50 - 5.50</td>
            <td>MIL/UL</td>
          </tr>
          <tr>
            <td>WBC</td>
            <td>{{ $cb->wbc }}</td>
            <td>4.5 - 11.0</td>
            <td>K/UL</td>
          </tr>
          <tr>
            <td>HEMOGLOBIN</td>
            <td>{{ $cb->hgb}}</td>
            <td>12.0 - 15.0</td>
            <td>G/DL</td>
          </tr>
          <tr>
            <td>HEMATOCRIT</td>
            <td>{{ $cb->hct }}</td>
            <td>36.0 - 48.0</td>
            <td>%</td>
          </tr>
          <tr>
            <td>MCV</td>
            <td>{{ $cb->mcv }}</td>
            <td>79.0 - 101.0</td>
            <td>FL</td>
          </tr>
          <tr>
            <td>MCH</td>
            <td>{{ $cb->mch }}</td>
            <td>25.0 - 35.0</td>
            <td>PG</td>
          </tr>
          <tr>
            <td>MCHC</td>
            <td>{{ $cb->mchc }}</td>
            <td>31.0 - 37.0</td>
            <td>%</td>
          </tr>
          <tr>
            <td>RDW-CV</td>
            <td>{{ $cb->rdw_cv }}</td>
            <td>11.0 - 16.0</td>
            <td>FL</td>
          </tr>
          <tr>
            <td>PLATELET COUNT</td>
            <td>{{ $cb->plat_count }}</td>
            <td>150 - 420</td>
            <td>K/UL</td>
          </tr>
          <tr>
            <td>MPV</td>
            <td>{{ $cb->mpv }}</td>
            <td>7 - 10</td>
            <td>FL</td>
          </tr>
        </tbody>
      </table>
    </div>
      <div class="col-md-4">
          <p>Approved by:</p>
          <br>
          <p>Physician Name</p>
          <p>(Signature over Printed Name)</p>
      </div>
  </body>
</html>
