<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
//
session_start();
$admin_id=$_SESSION['wakeel_uts_admin_id'];
//
$profile_pic=$_FILES['profile_pic']['name'];
$target = "../../upload/".basename($profile_pic);
//
$sql_up="UPDATE `admin_info` SET `admin_profile_pic`='$profile_pic' WHERE `admin_id`=$admin_id";
$result_up=mysqli_query($ob->makeconn(),$sql_up);
if($result_up)
{
	move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target);
	header('location:../../logout.php');
}
?>