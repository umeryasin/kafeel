<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
$recover_id=$_POST['recover_id'];
//
$sql_wakeel_info_status="UPDATE `wakeel_info` SET `wi_del_status`=0 WHERE `wi_id`= $recover_id";
$result_wakeel_info_status=mysqli_query($ob->makeconn(),$sql_wakeel_info_status);
//
$sql_client_info_status="UPDATE `client_info` SET `ci_wakeel_act_status`=1 WHERE `wakeel_id`=$recover_id";
$result_client_info_status=mysqli_query($ob->makeconn(),$sql_client_info_status);
if($result_wakeel_info_status && $result_client_info_status)
{
	echo true;
}
?>