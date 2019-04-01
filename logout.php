<?php
require_once 'bootstrap.php';
LogInCheck();
//unset session
unset($_SESSION['email']);
$_SESSION['role']='1';

//redirect to log in page
$_SESSION['success'] = 'you have successfully logged out ';
header('location: index.php');


