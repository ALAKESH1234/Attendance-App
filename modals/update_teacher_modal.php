<div class="modal fade" id="upt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <form name="teacher_register" action="actions/teacher_update_action.php" method="post" enctype="multipart/form-data">
                                      <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value='<?php echo $row['name'];?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" name="email"value='<?php echo $row['email'];?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="phone" name="cno" class="form-control" value='<?php echo $row['cno'];?>'>
                                        </div>
                                        <div class="form-group">
                                            <label for="dept">Department</label>\
                                            <select name="deptid" class="form-control" id="dept" value='<?php echo $row['deptid'];?>'>
                                            <option value="cs">123</option>
                                            <option value="el">234</option>
                                            <option value="cs">122</option>
                                            <option value="el">120</option>
                                            </select>
                                        </div>    
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Register</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
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
     
    </div>
  </div>
</div>