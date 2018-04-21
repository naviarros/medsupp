<div id="consultationreport" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- report content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Report Form</h4>
      </div>
      <div class="modal-body">
        <fieldset>
          <legend>Create Consultation Report</legend>
          <div class="panel panel-default">
            <div class="panel-body">
              <form class="" action="/msscontent/patients/consultation/consult" id="reportt" method="post">
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-4">
                      <label>Last Name:</label>
                      <input type="text" name="lst" id="lst" class="textcss" value="" disabled>
                    </div>
                    <div class="col-md-4">
                      <label>First Name:</label>
                      <input type="text" name="frst" id="frst" class="textcss" value="" disabled>
                    </div>
                    <div class="col-md-4">
                      <label>Middle Name:</label>
                      <input type="text" name="mdle" id="mdle" class="textcss" value="" disabled>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-4">
                      <label>Gender:</label>
                      <input type="text" name="gn" id="gn" class="textcss" value="" disabled>
                    </div>
                    <div class="col-md-4">
                      <label>Age:</label>
                      <input type="number" name="ggg" id="ggg" class="textcss" value="" disabled>
                    </div>
                    <div class="col-md-4">
                      <label>Birthday:</label>
                      <input type="text" name="dayt" id="dayt" class="textcss" value="" disabled>

                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-4">
                      <label>Date Created:</label>
                      <input type="date" name="cret" id="cret" class="textcss" value="">
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="form-group">
                      <label>Consult Result:</label>
                      <textarea name="resul" rows="7" id="resul" class="form-control" cols="10" ></textarea>
                    </div>
                </div>
            </div>
          </div>
        </fieldset>
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
