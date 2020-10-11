<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
//
session_start();
$admin_id=$_SESSION['uts_wakeel_main_id_secret_id'];
//
$profile_pic=$_FILES['profile_pic']['name'];
$target = "../../upload/".basename($profile_pic);
//
$sql_up="UPDATE `main_admin` SET `main_admin_pic`='$profile_pic' WHERE `main_admin_id`=$admin_id";
$result_up=mysqli_query($ob->makeconn(),$sql_up);
if($result_up)
{
	move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target);
	header('location:../../logout.php');
}
?>