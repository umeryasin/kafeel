<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
//
session_start();
$admin_id=$_SESSION['uts_wk_sub_admin_id'];
$del_id=$_POST['del_id'];
$sql_del="DELETE FROM `client_info` WHERE `ci_id`=$del_id";
$result_del=mysqli_query($ob->makeconn(),$sql_del);
if($result_del)
{
	echo true;
}
?>