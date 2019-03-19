<div class="modal fade" id="registert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Teacher Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-lg-offset-1 col-lg-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                    <form name="teacher_register" action="actions/teacher_register_action.php" method="post" enctype="multipart/form-data">
                                      <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Your Name...">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Your Email..">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="phone" name="cno" class="form-control" placeholder="Your phone number...">
                                        </div>
                                        <div class="form-group">
                                            <label for="dept">Department</label>\
                                            <select name="deptid" class="form-control" id="dept">
                                            <option value="cs">Computer Science</option>
                                            <option value="el">Electronics</option>
                                            <option value="cs">Physics</option>
                                            <option value="el">Maths</option>
                                            </select>
                                        </div>    
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Register</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>