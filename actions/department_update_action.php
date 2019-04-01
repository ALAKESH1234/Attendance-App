<?php
require_once '../bootstrap.php';
require_once '../db.php';

var_dump($_POST);
$sql="UPDATE `Department` SET `dept_name`='".$_POST['dept_name']."',`HOD`='".$_POST['HOD']."' where `deptid`='".$_POST['deptid']."'";
echo $sql;
$result=$conn->query($sql);

if($result == true)
{
   
    $_SESSION['success'] = 'successfully updated';
    header('location: ../edit_department.php');
    }
   


?>