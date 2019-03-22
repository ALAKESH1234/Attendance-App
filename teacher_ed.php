<?php
require_once 'includes/header.php';
require_once 'bootstrap.php';
require_once 'includes/admin_nav.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $uid=$_GET['uid'];
echo $uid;
require_once 'db.php';
$sql="SELECT *  FROM teacher where `cno`=$uid";
print_r($sql);

$result = $conn->query($sql);

$row=$result->fetch_assoc();
var_dump($row);
$de=$row['deptid'];
echo $de;
}

?>
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
                                            <label for="dept">Department</label>
                                            <select name="deptid" class="form-control" id="dept">
                                            <?php
                                            echo "<option value=cs>".$row['deptid']."</option>.";
                                            while ($row=$result->fetch_assoc()) {

                                                echo "<option value=cs>".$row['deptid']."</option>.";

                                            }
                                            ?>
                                                
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
<?php require_once 'includes/footer.php'?>