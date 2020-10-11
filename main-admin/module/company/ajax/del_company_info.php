<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//
$del_id=$_POST['del_id'];
//
$sql="DELETE FROM `companies` WHERE `company_id`=$del_id";
$result=mysqli_query($ob->makeconn(),$sql);
if($result)
{
	echo true;
}
?>