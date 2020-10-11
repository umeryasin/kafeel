<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
//
session_start();
$admin_id=$_SESSION['uts_wk_sub_admin_id'];
$del_id=$_POST['del_id'];
$sql_del_status="UPDATE `client_info` SET `ci_del_status`=1 WHERE `ci_id`=$del_id";
$result_del_status=mysqli_query($ob->makeconn(),$sql_del_status);
if($result_del_status)
{
	echo true;
}
?>