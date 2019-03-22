<?php 
require_once 'includes/header.php';
flash();
LogInCheck();

require_once 'bootstrap.php';
AdminCheck();
require_once 'includes/admin_nav.php';

?>
<?php
var_dump($_SESSION);

$uid=5;
if($_SERVER["REQUEST_METHOD"]=="GET"){
   $uid=$_GET['uid'];
echo $uid;
require_once 'db.php';
$sql="DELETE FROM teacher where `cno`=$uid";
print_r($sql);
}
?>


<div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Dept Id</th>
                    <th>Update Option</th>
                </tr>
                <?php
              
               require_once 'db.php';
                $sql="SELECT *  FROM `teacher`";
                $result = $conn->query($sql);
                if($result->num_rows == 0)
                {
                    $_SESSION['error']="nothing to show";
                    header ('location:edit_teacher.php');
                }
                else{
                while ($row=$result->fetch_assoc()) {
                    
                   

                    echo "<tr>";
                    echo  "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['cno']."</td>";
                    echo "<td>".$row['deptid']."</td>";
                    echo "<td>"."<a href='teacher_update.php?uid=".$row['cno']."' class='btn btn-primary btn-xs'><i class='fa fa-edit'>"."</i></a>"."<a href='edit_teacher.php?uid=".$row['cno']."'><button class='btn btn-danger btn-xs'  >"."<i class='fa fa-trash-o'></i>"."</button>"."</a>"."</td>";
                   
                }}
                
                    ?>

</table>


</div>
</div>
<?php require_once 'includes/footer.php'?>
