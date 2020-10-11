<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
//
//Form Values
$sign=1;
$editid=$_POST['editid'];
$username=$_POST['username'];
$password=$_POST['password'];
$mob1=$_POST['mob1'];
$mob2=$_POST['mob2'];
$nationality_id=$_POST['nationality_id'];
$amount=$_POST['amount'];
$installments=$_POST['installments'];
$remaining_amount=$_POST['remaining_amount'];
$starting_date=$_POST['starting_date'];
$expire_date=$_POST['expire_date'];
//
$sql_check="SELECT * FROM `wakeel_info` WHERE `wi_username`='$username'";
$result_check=mysqli_query($ob->makeconn(),$sql_check);
if(mysqli_num_rows($result_check)>0)
{
	$sign=0;
	//
	$sql_up="UPDATE `wakeel_info` SET `wi_password`='$password',`wi_mob1`='$mob1',`wi_mob2`='$mob2',`wi_nationality_id`=$nationality_id,`wi_amount`=$amount,`wi_installment`=$installments,`wi_remaining_amount`=$remaining_amount,`wi_starting_date`='$starting_date',`wi_expire_date`='$expire_date' WHERE `wi_id`=$editid";
	$result_up=mysqli_query($ob->makeconn(),$sql_up);
	if($result_up)
		echo "Username Already Exist Other Updated";
}
//
if($sign==1)
{
	$sql_up="UPDATE `wakeel_info` SET `wi_username`='$username',`wi_password`='$password',`wi_mob1`='$mob1',`wi_mob2`='$mob2',`wi_nationality_id`=$nationality_id,`wi_amount`=$amount,`wi_installment`=$installments,`wi_remaining_amount`=$remaining_amount,`wi_starting_date`='$starting_date',`wi_expire_date`='$expire_date' WHERE `wi_id`=$editid";
	$result_up=mysqli_query($ob->makeconn(),$sql_up);
	if($result_up)
		echo "Updated";
}
?>