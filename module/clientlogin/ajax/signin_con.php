<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
$username=$_POST['username'];
$password=$_POST['password'];
$sql_check="SELECT * FROM `client_info` WHERE `ci_username`='$username' AND `ci_password`='$password' AND `ci_client_act_status`=1 AND `ci_wakeel_act_status`=1 AND `ci_del_status`=0";
$result_check=mysqli_query($ob->makeconn(),$sql_check);
if(mysqli_num_rows($result_check)>0)
{
	$row=mysqli_fetch_assoc($result_check);
	/*Client Log Details*/
	date_default_timezone_set("Asia/Karachi");
	$date=date("Y/m/d");
	$t=time();
	$time=date("G:i:s",$t);
	//current ip
	function getUserIpAddr(){
		if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		    //ip from share internet
		    $ip = $_SERVER['HTTP_CLIENT_IP'];
		}
		elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		    //ip pass from proxy
		    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else{
		    $ip = $_SERVER['REMOTE_ADDR'];
		}
	    return $ip;
	}
	$ip=getUserIpAddr();
	//
	$user_id=$row['ci_id'];
	//
	session_start();
	$_SESSION['uts_client_mm_id']=$user_id;
	$_SESSION['uts_client_mm_username']=$row['ci_username'];
	$_SESSION['uts_client_mm_ci_name']=$row['ci_name'];
	$_SESSION['uts_client_mm_check']=true;
	//
	$sql_log="INSERT INTO `client_log`(`client_id`, `client_log_ip`, `client_log_date`, `client_log_time`) VALUES ($user_id,'$ip','$date','$time')";
	$result_log=mysqli_query($ob->makeconn(),$sql_log);
	echo true;
}
else
{
	echo false;
}
?>