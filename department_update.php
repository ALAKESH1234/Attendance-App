<?php
require_once 'includes/header.php';
require_once 'bootstrap.php';
require_once 'includes/admin_nav.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $uid=$_GET['uid'];

require_once 'db.php';
$sql="SELECT *  FROM department where `deptid`=$uid";


$result = $conn->query($sql);

$row=$result->fetch_assoc();
var_dump($row);
$de=$row['status'];
//echo $de;
}

?>
        <div class="col-lg-offset-1 col-lg-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Update</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                    <form name="teacher_register" action="actions/department_update_action.php" method="post" enctype="multipart/form-data">
                                      <div>
                                        <div class="form-group">
                                            <label>Department Name</label>
                                            <input type="text" name="dept_name" class="form-control" value='<?php echo $row['dept_name'];?>'>
                                        </div>
                                       
                                        <div class="form-group">
                                            <input type="hidden" name="deptid" class="form-control" value='<?php echo $row['deptid'];?>'>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Head Of The Department</label>
                                            <input type="text" name="HOD" class="form-control" value='<?php echo $row['HOD'];?>'>
                                        </div>
                                       
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-primary">Update</button>
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
<?php require_once 'includes/footer.php'?>