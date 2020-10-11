<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
$permenent_del_id=$_POST['permenent_del_id'];
//
$sql_del_wakeel="DELETE FROM `wakeel_info` WHERE `wi_id`=$permenent_del_id";
$result_del_wakeel=mysqli_query($ob->makeconn(),$sql_del_wakeel);
//
$sql_del_client="DELETE FROM `client_info` WHERE `wakeel_id`=$permenent_del_id";
$result_del_client=mysqli_query($ob->makeconn(),$sql_del_client);
if($result_del_wakeel && $result_del_client)
{
	echo true;
}
?>