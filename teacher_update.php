<?php
require_once 'includes/header.php';
require_once 'bootstrap.php';
require_once 'includes/admin_nav.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
    $uid=$_GET['uid'];

require_once 'db.php';
$sql="SELECT *  FROM teacher where `cno`=$uid";


$result = $conn->query($sql);

$row=$result->fetch_assoc();
//var_dump($row);
$de=$row['status'];
$_did=$row['deptid'];
echo $_did;
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
                                    <form name="teacher_register" action="actions/teacher_update_action.php" method="post" enctype="multipart/form-data">
                                      <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" value='<?php echo $row['name'];?>'>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="email"value='<?php echo $row['email'];?>'>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact No</label>
                                            <input type="phone" name="cno" class="form-control" value='<?php echo $row['cno'];?>'>
                                        </div>
                                        <div class="form-group">
                                            <label for="dept">Department</label>
                                            <select  name="deptname" class="form-control" id="dept">
                                            <?php
                                              require_once 'db.php';
                                            $sql="SELECT `dept_name` from `department` where `deptid`='".$_did."'";
                                            $result2 = $conn->query($sql);
                                            $row=$result2->fetch_assoc();
                                            echo "<option >".$row['dept_name']."</option>.";
                                                require_once 'db.php';
                                                $sql="SELECT *  FROM `department`";
                                                $result2 = $conn->query($sql);

                                               
                                            while ($row=$result2->fetch_assoc()) {

                                                echo "<option>".$row['dept_name']."</option>.";

                                            }
                                            ?>
                                                
                                            </select>
                                        </div>    
                                        <div class="form-group">
                                            <label for="dept">Status</label>
                                            <select name="status" class="form-control" >
                                            <?php
                                            var_dump($row);
                                            echo "<option >".$de."</option>.";
              
                                                require_once 'db.php';
                                                $sql="SELECT *  FROM `status`";
                                                $result3 = $conn->query($sql);
                                                
                                            while ($row=$result3->fetch_assoc()) {

                                                echo "<option>".$row['status']."</option>.";

                                            }
                                            ?>
                                                
                                            </select>
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