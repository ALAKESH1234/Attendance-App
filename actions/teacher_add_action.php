<?php
require_once '../bootstrap.php';
var_dump($_POST);
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_name = $_POST['name'];
    $_deptid = $_POST['deptid'];
    $_cno = $_POST['cno'];
    $_status = '0';
    require_once '../db.php';
$sql = "INSERT INTO `teacher`(`email`,`name`,`cno`,`deptid`,`password`,`status`) VALUES('" . $_email . "','" . $_name . "','" . $_cno . "','" . $_deptid . "','" . $_password . "','" . $_status . "')";
print_r($sql);
    $result = $conn->query($sql);
var_dump($result);
if ($result!=0) {
    $_SESSION['success']="successfully added";
    header('location: ../index.php');
}
?>