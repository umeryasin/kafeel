<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//main admin id
session_start();
$main_admin_id=$_SESSION['uts_wakeel_main_id_secret_id'];
//Get max id
$sql_max="SELECT MAX(`admin_id`) AS max_id FROM `admin_info`";
$result_max=mysqli_query($ob->makeconn(),$sql_max);
$row_max=mysqli_fetch_assoc($result_max);
$max_id=$row_max['max_id']+1;
//POST values
$full_name=$_POST['full_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$nationality=$_POST['nationality'];
$amount=$_POST['amount'];
$installments=$_POST['installments'];
$remaing_amount=$_POST['remaing_amount'];
$starting_date=$_POST['starting_date'];
$expire_date=$_POST['expire_date'];
//
$sql_check="SELECT * FROM `admin_info` WHERE `admin_email`='$email'";
$result_check=mysqli_query($ob->makeconn(),$sql_check);
if(mysqli_num_rows($result_check)>0)
{
	echo false;
}
else
{
	$sql_in="INSERT INTO `admin_info`(`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_mob1`, `admin_mob2`, `admin_nationality_id`, `admin_amount`, `admin_installment`, `admin_remaining_amount`, `admin_starting_date`, `admin_expire_date`, `admin_profile_pic`, `admin_activation_key`, `admin_status`, `main_admin_id`) VALUES ($max_id,'$full_name','$email','$password','$mob1','$mob2',$nationality,$amount,$installments,$remaing_amount,'$starting_date','$expire_date','','',1,$main_admin_id)";
	$result_in=mysqli_query($ob->makeconn(),$sql_in);
	if($result_in)
	{
		echo true;
	}
}
?>