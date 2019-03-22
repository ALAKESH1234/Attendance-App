<?php
require_once '../bootstrap.php';
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
require_once '../db.php';
$_POST['status']="0";
var_dump($_POST);
$sql="UPDATE `teacher`  SET `status`='".$_POST['status']."' where `name`='".$_POST['name']."' and `deptname`='".$_POST['deptname']."'and`email`='".$_POST['email']."'and`cno`='".$_POST['cno'] ."'";
echo $sql;
$result = $conn->query($sql);
var_dump($result);
if($result == true)
{
    if(!($result->num_rows == 1)) {
        $_SESSION['error'] = 'Wrong Details !!! register again';
        header('location: ../index.php');
    }
    else
    $_SESSION['success'] = 'successfully registered';

}
    //if role is admin redirect to admin home
    header('location: ../index.php');
?>