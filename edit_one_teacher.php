<?php 
require_once 'includes/header.php';
flash();
LogInCheck();
require_once 'db.php';
$sql="SELECT * FROM `teacher`  where `name`='".$_POST['name']."' and`deptname`='".$_POST['deptname']."'and`cno`='".$_POST['cno']."'";
 $result = $conn->query($sql);
if($result->num_rows == 0)
                {
                    $_SESSION['error']="no one matches the description";
                    header ('location:index.php');
                }
require_once 'bootstrap.php';
AdminCheck();
require_once 'includes/admin_nav.php';

?>
<?php



if($_SERVER["REQUEST_METHOD"]=="GET"){
   $uid=$_GET['uid'];
require_once 'db.php';
$sql="DELETE FROM `teacher` where `cno`=$uid";
$result = $conn->query($sql);
}
?>


<div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Dept Name</th>
                    <th>Update Option</th>
                </tr>
                <?php
              
               require_once 'db.php';
              
               $sql="SELECT * FROM `teacher`  where `name`='".$_POST['name']."' and`deptname`='".$_POST['deptname']."'and`cno`='".$_POST['cno']."'";
                $result = $conn->query($sql);
                
                
                
                if($result->num_rows == 0)
                {
                   
                    header ('location:index.php');
                }
                else{
                 
                    
                   

                    echo "<tr>";
                    echo  "<td>".$_POST['name']."</td>";
                    echo "<td>".$_POST['email']."</td>";
                    echo "<td>".$_POST['cno']."</td>";
                    echo "<td>".$_POST['deptname']."</td>";
                    echo "<td>"."<a href='teacher_update.php?uid=".$_POST['cno']."' class='btn btn-primary btn-xs'><i class='fa fa-edit'>"."</i></a>"."<a href='edit_teacher.php?uid=".$row['cno']."'><button class='btn btn-danger btn-xs'  >"."<i class='fa fa-trash-o'></i>"."</button>"."</a>"."</td>";
                   
                }
                
                    ?>

</table>


</div>
</div>
<?php require_once 'includes/footer.php'?>
