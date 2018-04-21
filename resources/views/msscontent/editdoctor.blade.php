<div id="docs" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modify Data of Doctors</h4>
      </div>
      <div class="modal-body">
        <form action="/msscontent/editdoctor" id="frmDoct" method="post">
            <div class="row">
              <div class="form-group">
                <div class="col-md-4">
                  <label>Last Name:</label>
                  <input type="text" name="last_name" class="textcss" id="last_name" value="">
                </div>
                <div class="col-md-4">
                  <label>First Name:</label>
                  <input type="text" name="first_name" class="textcss" id="first_name" value="">
                </div>
                <div class="col-md-4">
                  <label>Middle Name:</label>
                  <input type="text" name="middle_name" class="textcss" id="middle_name" value="">
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <div class="col-md-4">
                  <label>Date Employed:</label>
                  <input type="datetime" class="textcss" name="date_emplyd" id="date_emplyd" value="" disabled>
                </div>
                <div class="col-md-4">
                  <label>Employee No:</label>
                  <input type="text" class="textcss" name="doc_no" id="doc_no" value="" disabled>
                </div>
                <div class="col-md-4">
                  <label>Specialty:</label>
                  <select class="textcss" name="spclty" id="spclty">
                    <option value="Surgery">Surgery</option>
                    <option value="Opthalmologist">Opthalmologist</option>
                    <option value="Radiologist">Radiologist</option>
                  </select>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="form-group">
                <div class="col-md-4">
                  <label>Status:</label>
                  <select class="textcss" name="stat" id="stat">
                    <option id="stat"></option>
                    <option value="Available">Available</option>
                    <option value="Unavailable">Unavailable</option>
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
