<?php
require_once '../bootstrap.php';
var_dump($_POST);
require_once '../db.php';

$sql = "INSERT into `teacher`(`name`,`email`,`deptid`,`cno`) VALUES('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['deptid'] . "','" .$_POST['cno']. "')";
$result = $db->query($sql);
var_dump($result);
if ($result!=0) {
    $_SESSION['success']="successfully registered" ."<br>". "login please";
    header('location: ../index.php');
}
?>