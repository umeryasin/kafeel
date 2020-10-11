<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//main admin id
session_start();
$main_admin_id=$_SESSION['uts_wakeel_main_id_secret_id'];
//
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$nationality=$_POST['nationality_id'];
$amount=$_POST['amount'];
$installments=$_POST['installments'];
$remaining_amount=$_POST['remaining_amount'];
$starting_date=$_POST['starting_date'];
$expire_date=$_POST['expire_date'];
//
$sql_check="SELECT * FROM `admin_info` WHERE `admin_email`='$email'";
$result_check=mysqli_query($ob->makeconn(),$sql_check);
if(mysqli_num_rows($result_check)>0)
{
	$sql_update="UPDATE `admin_info` SET `admin_name`='$full_name',`admin_password`='$password',`admin_mob1`='$mob1',`admin_mob2`='$mob2',`admin_nationality_id`=$nationality,`admin_amount`=$amount,`admin_installment`=$installments,`admin_remaining_amount`=$remaining_amount,`admin_starting_date`='$starting_date',`admin_expire_date`='$expire_date' WHERE admin_id=$main_admin_id";
	$result_update=mysqli_query($ob->makeconn(),$sql_update);
	if($result_update)
	{
		echo true;
	}
}
else
{
	$sql_update="UPDATE `admin_info` SET `admin_name`='$full_name',`admin_email`='$email',`admin_password`='$password',`admin_mob1`='$mob1',`admin_mob2`='$mob2',`admin_nationality_id`=$nationality,`admin_amount`=$amount,`admin_installment`=$installments,`admin_remaining_amount`=$remaining_amount,`admin_starting_date`='$starting_date',`admin_expire_date`='$expire_date' WHERE admin_id=$main_admin_id";
	$result_update=mysqli_query($ob->makeconn(),$sql_update);
	if($result_update)
	{
		echo true;
	}
}
?>