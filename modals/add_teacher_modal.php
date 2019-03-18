<div class="modal fade" id="addt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
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
                        <div class="panel-heading">Add Teacher</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                    <form name="teacher_register" action="actions/teacher_add_action.php" method="post" enctype="multipart/form-data">


                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Teacher Name...">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Teacher Email..">
                                        </div>
                                        <div class="form-group">
                                            <label>Dept Id</label>
                                            <input type="text" class="form-control" name="deptid" placeholder="Teacher Id">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Contact No.</label>
                                            <input type="password" class="form-control" name="cno" placeholder="Contact No.">
                                        </div>
                                        <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">ADD</button>
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