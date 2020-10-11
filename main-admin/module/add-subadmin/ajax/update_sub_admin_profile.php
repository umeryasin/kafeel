<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//main admin id
session_start();
$main_admin_id=$_SESSION['uts_wakeel_main_id_secret_id'];
//
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
//
$sql_update="UPDATE `main_admin` SET `main_admin_name`='$fname',`main_admin_email`='$email',`main_admin_password`='$password'  WHERE `main_admin_id`=$main_admin_id";
//echo $sql_update;
$result_update=mysqli_query($ob->makeconn(),$sql_update);
if($result_update)
{
	echo true;
}
?>