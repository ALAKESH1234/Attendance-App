<?php
require_once '../bootstrap.php';
require_once '../db.php';

var_dump($_POST);

$sql="SELECT `deptid` from `department` where `dept_name`='".$_POST['deptname']."'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
$_did=$row['deptid'];
$sql="UPDATE `teacher` SET `name`='".$_POST['name']."',`status`='".$_POST['status']."',`deptid`='".$_did."',`cno`='".$_POST['cno']."' where `email`='".$_POST['email']."'";
echo $sql;
$result=$conn->query($sql);




?>
 