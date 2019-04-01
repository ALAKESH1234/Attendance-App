<?php
              
              require_once 'db.php';
               $sql="SELECT *  FROM `department`";
               $result2 = $conn->query($sql);
               
?>
<div class="modal fade" id="addd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <div class="panel-heading">Add Department</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-offset-1 col-lg-10 col-lg-offset-1">
                                    <form name="teacher_register" action="actions/department_add_action.php" method="post" enctype="multipart/form-data">

                                    <?php
                                      require_once 'db.php';
                                      $sql="SELECT `COLUMN_NAME`,`COLUMN_COMMENT` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE  `TABLE_NAME`='department'";

                                      
                                      $result = $conn->query($sql);
                                      
                                      while ($row=$result->fetch_assoc()){
                                        echo '<div class="form-group">
                                        <label>'. $row['COLUMN_COMMENT'] .'</label>
                                        <input type="text" name="'. $row['COLUMN_NAME'] .'"class="form-control" placeholder="'. $row['COLUMN_COMMENT'] .'">
                                    </div>';
                                        }
                                       ?>
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