<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//
session_start();
$admin_id=$_SESSION['wakeel_uts_admin_id'];
//
$error='';
//Get Max Value
$sql_max="SELECT MAX(`wi_id`) AS max_id FROM `wakeel_info`";
$result_max=mysqli_query($ob->makeconn(),$sql_max);
$row_max=mysqli_fetch_assoc($result_max);
$new_max_id=$row_max['max_id']+1;
//
$username=$_POST['username'];
$password=$_POST['password'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$nationality_id=$_POST['nationality'];
$amount=$_POST['amount'];
$installments=$_POST['installments'];
$remaing_amount=$_POST['remaing_amount'];
$starting_date=$_POST['starting_date'];
$expire_date=$_POST['expire_date'];
//Check username
$sql_check="SELECT * FROM `wakeel_info` WHERE `wi_username`='$username'";
$result_check=mysqli_query($ob->makeconn(),$sql_check);
if(mysqli_num_rows($result_check)>0)
{
	$error=$error."Username Already Exist";
}
else
{
	$sql_in="INSERT INTO `wakeel_info`(`wi_id`, `wi_username`, `wi_password`, `wi_mob1`, `wi_mob2`, `wi_nationality_id`, `wi_amount`, `wi_installment`, `wi_remaining_amount`, `wi_starting_date`, `wi_expire_date`, `wi_activation_code`, `wi_act_status`, `wi_del_status`, `wi_sub_admin_id`) VALUES ($new_max_id,'$username','$password','$mob1','$mob2',$nationality_id,$amount,$installments,$remaing_amount,'$starting_date','$expire_date','',1,0,$admin_id)";
	$result_in=mysqli_query($ob->makeconn(),$sql_in);
	if($result_in)
	{
		echo true;
	}
}
echo $error;
?>