<?php

require_once '../bootstrap.php';

if($_SERVER["REQUEST_METHOD"]=="GET"){
   $uid=$_GET['uid'];
echo $uid;
require_once '../db.php';
$sql="DELETE FROM `teacher` where `cno`=$uid";
$result = $conn->query($sql);
if($result == true)
{
   
    $_SESSION['success'] = 'successfully deleted';
    header('location: ../edit_teacher.php');
    }
    else{
        $_SESSION['error'] = 'somting went Wrong ';
        header('location: ../edit_teacher.php');
    }
}
?>