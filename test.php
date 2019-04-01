<?php
require_once 'bootstrap.php';
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
require_once 'db.php';
$_POST['status']="1";
var_dump($_POST);

//$sql="UPDATE `teacher`  SET `status`='".$_POST['status']."' WHERE `name`='a' AND `email`='al@al.com' AND`cno`='22'";
$sql="UPDATE teacher set status=0 where name='a' and email='al@al.com'and cno='22'";
echo $sql;
$result = $conn->query($sql);

var_dump ($result->num_rows);


?>