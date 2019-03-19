<?php
require_once '../bootstrap.php';
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
require_once '../db.php';
$_POST['status']="1";
var_dump($_POST);
$sql="UPDATE `teacher`  SET `name`='".$_POST['name']."',`email`='".$_POST['email']."',`status`='".$_POST['status']."'WHERE `cno`='".$_POST['cno'] ."'";
echo $sql;
$result = $conn->query($sql);
var_dump($result);
if($result == true){
  
    $_SESSION['success'] = 'successfully registered';
    header('location: ../index.php');
}
?>