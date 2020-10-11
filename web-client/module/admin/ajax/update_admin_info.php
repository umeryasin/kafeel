<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//
session_start();
$admin_id=$_SESSION['wakeel_uts_admin_id'];
//
$fname=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$nationality=$_POST['nationality'];
$amount=$_POST['amount'];
$installment=$_POST['installment'];
$remaining_amount=$_POST['remaining_amount'];
$starting_date=$_POST['starting_date'];
$expire_date=$_POST['expire_date'];

//
$sql_check="SELECT * FROM `admin_info` WHERE `admin_id`='$admin_id'";
$result_check=mysqli_query($ob->makeconn(),$sql_check);
$row_check=mysqli_fetch_assoc($result_check);
if($row_check['admin_email']==$email)
{
	$sql_up="UPDATE `admin_info` SET `admin_name`='$fname',`admin_password`='$password',`admin_mob1`='$mob1',`admin_mob2`='$mob2',`admin_nationality_id`=$nationality,`admin_amount`=$amount,`admin_installment`=$installment,`admin_remaining_amount`=$remaining_amount,`admin_starting_date`='$starting_date',`admin_expire_date`='$expire_date' WHERE `admin_id`=$admin_id";
	$result_up=mysqli_query($ob->makeconn(),$sql_up);
	if($result_up)
	{
		echo true;
	}
}
elseif($row_check['admin_email']!=$email)
{
	$sql_email_check="SELECT * FROM `admin_info` WHERE `admin_email`='$email'";
	$result_email_check=mysqli_query($ob->makeconn(),$sql_email_check);
	if(mysqli_num_rows($result_email_check)>0)
	{
		echo false;
	}
	else
	{
		$sql_up="UPDATE `admin_info` SET `admin_name`='$fname',`admin_email`='$email',`admin_password`='$password',`admin_mob1`='$mob1',`admin_mob2`='$mob2',`admin_nationality_id`=$nationality,`admin_amount`=$amount,`admin_installment`=$installment,`admin_remaining_amount`=$remaining_amount,`admin_starting_date`='$starting_date',`admin_expire_date`='$expire_date' WHERE `admin_id`=$admin_id";
		$result_up=mysqli_query($ob->makeconn(),$sql_up);
		if($result_up)
		{
			echo true;
		}
	}
}
?>