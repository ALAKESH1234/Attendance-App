<?php 
require_once 'includes/header.php';
flash();
LogInCheck();
require_once 'db.php';
$sql="SELECT *  FROM `department`";
$result = $conn->query($sql);
if($result->num_rows == 0)
{
    $_SESSION['error']="nothing to show";
    header ('location:edit_teacher.php');
}
require_once 'bootstrap.php';
AdminCheck();
require_once 'includes/admin_nav.php';

?>
<?php



if($_SERVER["REQUEST_METHOD"]=="GET"){
   $uid=$_GET['uid'];
echo $uid;
require_once 'db.php';
$sql="DELETE FROM `department` where `deptid`=$uid";
$result = $conn->query($sql);
if($result == true)
{
   
    $_SESSION['success'] = 'successfully deleted';
    header('location: ../edit_teacher.php');
    }
   

}

?>


<div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <tr>
                    
                    <th>Department Name</th>
                    <th>Department Id</th>
                    <th>Head Of The Department</th>
                </tr>
                <?php
              
               require_once 'db.php';
                $sql="SELECT *  FROM `department`";
                $result = $conn->query($sql);
                echo $sql;
                if($result->num_rows == 0)
                {
                    $_SESSION['error']="nothing to show";
                    header ('location:edit_teacher.php');
                }
                else{
                while ($row=$result->fetch_assoc()) {
                    
                   

                    echo "<tr>";
                    echo  "<td>".$row['dept_name']."</td>";
                    echo "<td>".$row['deptid']."</td>";
                    echo "<td>".$row['HOD']."</td>";
                    echo "<td>"."<a href='department_update.php?uid=".$row['deptid']."' class='btn btn-primary btn-xs'><i class='fa fa-edit'>"."</i></a>"."<a href='edit_department.php?uid=".$row['deptid']."'><button class='btn btn-danger btn-xs'  >"."<i class='fa fa-trash-o'></i>"."</button>"."</a>"."</td>";
                   
                }}
                
                    ?>

</table>


</div>
</div>
<?php require_once 'includes/footer.php'?>
