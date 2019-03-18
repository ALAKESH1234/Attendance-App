<?php
require_once 'bootstrap.php';
LogInCheck();
//unset session
unset($_SESSION['email']);
unset($_SESSION['role']);

//redirect to log in page
$_SESSION['success'] = 'you have tgyhujiko successfully logged out ';
header('location: index.php');


