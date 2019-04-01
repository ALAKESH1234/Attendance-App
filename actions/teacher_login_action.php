<?php
//var_dump($_POST);
require_once '../bootstrap.php';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //var_dump($_POST);
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_status='1';
    //connect db
    require_once '../db.php';
    $sql = "SELECT * FROM  `teacher` WHERE `email`='" . $_email . "' AND `password`='" . $_password . "' and `status`='".$_status."'";
    //$sql = "SELECT * FROM  `department` WHERE `dept_id`='" . $_id . "'";
    //print_r($sql);
    $result = $conn->query($sql);
    //var_dump ($result);
     //print_r($result);
     if($result == true)
    {
        if(!($result->num_rows == 1)) {
            $_SESSION['error'] = 'Wrong Details !!!';
            header('location: ../index.php');
        }
        else
        {
        $row = $result->fetch_assoc();
            //var_dump($row);
        
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = '1';
                $_SESSION['success'] = 'welcome to teacher home page';


                //if role is admin redirect to admin home
                header('location: ../index.php');
        }    
    }

}     
else
{
    $_SESSION['error'] = 'Something went wrong';
    echo '<script>alert("login failed try again");</script>';
    header('location: ../index.php');
}

?>