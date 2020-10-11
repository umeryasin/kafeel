<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
if(isset($_POST['status_id_act']))
{
	$status_id=$_POST['status_id_act'];
	//Activate the advocates profile
	$sql_change_status="UPDATE `wakeel_info` SET `wi_act_status`=1 WHERE `wi_id`=$status_id";
	$result_change_status=mysqli_query($ob->makeconn(),$sql_change_status);
	if($result_change_status)
	{
		echo true;
	}
}
elseif(isset($_POST['status_id_deact']))
{
	//Deactivate the advocate profile
	$status_id=$_POST['status_id_deact'];
	//Activate the advocates profile
	$sql_change_status="UPDATE `wakeel_info` SET `wi_act_status`=0 WHERE `wi_id`=$status_id";
	$result_change_status=mysqli_query($ob->makeconn(),$sql_change_status);
	if($result_change_status)
	{
		echo true;
	}
}
?>