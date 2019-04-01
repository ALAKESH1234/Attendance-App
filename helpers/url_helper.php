<?php
//login helper
/**
 * @desc redirects to login page
 *       if not logged in.
 */
function LogInCheck()
{
   //if user is not logged in through them to index
    if(!isset($_SESSION['email'])){
        $_SESSION['error'] = 'please log in first';
        header('location: http://localhost/clg/');
    }
}
function AdminCheck()
{
   //if user is not logged in through them to index
    if($_SESSION['role']!='admin'){
        $_SESSION['error'] = 'you are not an admin';
        header('location: http://localhost/clg/');
    }
}