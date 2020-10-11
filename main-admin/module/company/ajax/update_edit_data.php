<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//
$editid=$_POST['editid'];
$company_name=$_POST['company_name'];
//
$sql_check="SELECT * FROM `companies` WHERE `company_name`='$company_name'";
$result_check=mysqli_query($ob->makeconn(),$sql_check);
if(mysqli_num_rows($result_check)>0)
{
	echo false;
}
else
{
	$sql_up="UPDATE `companies` SET `company_name`='$company_name' WHERE `company_id`=$editid";
	$result_up=mysqli_query($ob->makeconn(),$sql_up);
	if($result_up)
	{
		echo true;
	}
}
?>