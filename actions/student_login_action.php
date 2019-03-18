<?php
session_start();
?>
<?php


/**
 * Created by PhpStorm.
 * User: NIKU
 * Date: 24-07-2018
 * Time: 03:06 PM
 */


$db=new mysqli('localhost','root','','attendance');
//var_dump($db);
$sql="SELECT * from `user` where `email`='".$_POST['email']."' and `password`='".$_POST['password']."' LIMIT 1";
echo $sql;
$result=$db->query($sql);
var_dump($result);
/*$result->num_rows;
while($row=$result->fetch_assoc())
{


    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['role'];
}*/
//if($_SESSION['role']==0)

?>
