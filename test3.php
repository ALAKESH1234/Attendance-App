<?php
require_once 'bootstrap.php';
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
require_once 'db.php';
$_POST['status']="1";
var_dump($_POST);

$sql="UPDATE `teacher`  SET `status`='".$_POST['status']."' WHERE `email`='".$_POST['email']."'";
echo $sql;
$result = $conn->query($sql);
var_dump($result);
