<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//
$sql_max="SELECT MAX(`company_id`) AS max_value FROM `companies`";
$result_max=mysqli_query($ob->makeconn(),$sql_max);
$row_max=mysqli_fetch_assoc($result_max);
$max_value=$row_max['max_value']+1;
//
$full_name=$_POST['full_name'];
//
$sql_check="SELECT * FROM `companies` WHERE `company_name`='$full_name'";
$result_check=mysqli_query($ob->makeconn(),$sql_check);
if(mysqli_num_rows($result_check)>0)
{
	echo false;
}
else
{
	$sql_ins="INSERT INTO `companies`(`company_id`, `company_name`) VALUES ($max_value,'$full_name')";
	$result_ins=mysqli_query($ob->makeconn(),$sql_ins);
	if($result_ins)
	{
		echo true;
	}
}
?>