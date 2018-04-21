<div id="patientslists" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modify/Edit Client Information</h4>
      </div>
      <div class="modal-body">
        <form action="/msscontent/patients/editpatient" id="pasyente" method="post">
          <div class="row">
            <div class="form-group">
              <div class="col-md-4">
                <label>Last Name:</label>
                <input type="text" name="lst_name" class="textcss" id="lst_name" value="">
              </div>
              <div class="col-md-4">
                <label>First Name:</label>
                <input type="text" name="frst_name" class="textcss" id="frst_name" value="">
              </div>
              <div class="col-md-4">
                <label>Middle Name:</label>
                <input type="text" name="mdle_name" class="textcss" id="mdle_name" value="">
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="form-group">
              <div class="col-md-4">
                <label>Age:</label>
                <input type="number" name="ages" id="ages" class="textcss" value="">
              </div>
              <div class="col-md-4">
                <label>Civil Status:</label>
                <select class="textcss" name="marital" id="marital">
                  <option id="marital"></option>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                </select>
              </div>
              <div class="col-md-4">
                <label>Occupation:</label>
                <input type="text" name="occu" id="occu" class="textcss" value="">
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-md-4">
                <label>Status:</label>
                <select class="textcss" name="ssts">
                  <option value="Completed">Completed</option>
                  <option value="Ongoing">Ongoing</option>
                  <option value="Cancelled">Cancelled</option>
                </select>
              </div>
            </div>
          </div>
      </div>
      <input type="hidden" name="id" id="id" value="">
      <div class="modal-footer">
        <input type="submit" id="save" value="Save" class="btn btn-default">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</form>
    </div>

  </div>
</div>
