<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `main_admin` WHERE `main_admin_email`='$email' AND `main_admin_password`='$password' AND `main_admin_status`=1";
$result=mysqli_query($ob->makeconn(),$sql);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
	/*Admin Log Sessions Details*/
	session_start();
	$_SESSION['uts_wakeel_main_id_secret_id']=$row['main_admin_id'];
	$_SESSION['uts_wakeel_main_secret_name']=$row['main_admin_name'];
	$_SESSION['uts_wakeel_main_secret_email']=$row['main_admin_email'];
	$_SESSION['uts_wakeel_main_secret_pic']=$row['main_admin_pic'];
	$_SESSION['uts_wakeel_main_secret_check']=true;
	echo true;
}
else
{
	echo false;
}
?>