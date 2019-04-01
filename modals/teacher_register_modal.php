<?php
              
              require_once 'db.php';
               $sql="SELECT *  FROM `department`";
               $result2 = $conn->query($sql);
               
?>

<div class="modal fade" id="registert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <div class="panel-heading">Teacher Register</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                    <form name="teacher_register" action="actions/teacher_register_action.php" method="post" enctype="multipart/form-data">
                                      <div>
                                      
                                    
                                      <?php
                                      require_once 'db.php';
                                      $sql="SELECT `COLUMN_NAME`,`COLUMN_COMMENT` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE  `TABLE_NAME`='teacher'";

                                      
                                      $result = $conn->query($sql);
                                      
                                      while ($row=$result->fetch_assoc()) {
                                      
                                    if($row['COLUMN_NAME']=="password"||$row['COLUMN_NAME']=="status"){
                                    echo '<input type="hidden" name="'. $row['COLUMN_NAME'] .'"class="form-control" >
                                </div>';
                                    }
                                  elseif($row['COLUMN_NAME']=="deptname"){
                                   echo'  <label>'. $row['COLUMN_COMMENT'] .'</label>
                                         <select name="deptname" class="form-control" id="dept">
                                     <option >'.$row['dept_name'].'</option>.';
                                    while ($row=$result2->fetch_assoc()) {

                                        echo "<option >".$row['dept_name']."</option>.";

                                    }
                                  }
                                  else{
                                    echo '<div class="form-group">
                                      <label>'. $row['COLUMN_COMMENT'] .'</label>
                                      <input type="text" name="'. $row['COLUMN_NAME'] .'"class="form-control" placeholder="'. $row['COLUMN_COMMENT'] .'">
                                  </div>';
                                      }}

                                            ?>
                                            
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