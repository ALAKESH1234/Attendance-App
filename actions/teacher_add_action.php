<?php
require_once '../bootstrap.php';
var_dump($_POST);
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    $_email = $_POST['email'];
    $_password = '';
    $_name = $_POST['name'];
    $_deptname = $_POST['deptname'];
    $_cno = $_POST['cno'];
    $_status = '0';
    require_once '../db.php';
$sql = "INSERT INTO `teacher`(`email`,`name`,`cno`,`deptname`,`password`,`status`) VALUES('" . $_email . "','" . $_name . "','" . $_cno . "','" . $_deptname . "','" . $_password . "','" . $_status . "')";
print_r($sql);
    $result = $conn->query($sql);
var_dump($result);
if($result==true){
$_SESSION['success'] = 'successfully registered';

}