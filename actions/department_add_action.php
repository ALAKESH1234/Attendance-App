<?php
require_once '../bootstrap.php';
var_dump($_POST);
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
    
    $_dname = $_POST['dept_name'];
    $_did = $_POST['deptid'];
    $_hod = $_POST['HOD'];
    require_once '../db.php';
$sql = "INSERT INTO `department`(`dept_name`,`deptid`,`HOD`) VALUES('" . $_dname . "','" . $_did . "','" . $_hod . "')";
print_r($sql);
    $result = $conn->query($sql);
var_dump($result);
if($result ==  true){
$_SESSION['success'] = 'successfully added';
header('location: ../index.php');
}
?>