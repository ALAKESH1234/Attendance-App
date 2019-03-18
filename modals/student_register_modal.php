<div class="modal fade" id="registers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
      <div class="row" id="row">
        <div class="col-lg-offset-1 col-lg-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panelfsdifjf;sdfldsjfl-primary">
                        <div class="panel-heading">Student Register</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                    <form name="student_register" action="actions/student_register_action.php" method="post" enctype="multipart/form-data">

                                    

                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Your Name...">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" name="email" placeholder="Your Email..">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" class="form-control" name="cnumber" placeholder="Your contact is------">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Type Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                        </div>
                                        <button type="submit" class="btn btn-default">Register</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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