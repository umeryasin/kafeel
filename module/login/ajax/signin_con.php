<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM `wakeel_info` WHERE `wi_username`='$username' AND `wi_password`='$password' AND `wi_act_status`=1 AND `wi_del_status`=0";
$result=mysqli_query($ob->makeconn(),$sql);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
	//
	/*Admin Log Details*/
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
	$user_id=$row['wi_id'];
	//
	session_start();
	$_SESSION['uts_wk_sub_admin_id']=$row['wi_id'];
	$_SESSION['uts_wk_sub_admin_uname']=$row['wi_username'];
	$_SESSION['uts_wk_sub_admin_check']=true;
	//Add Log Record
	$sql_log="INSERT INTO `wakeel_log`(`wakeel_id`, `wakeel_log_ip`, `wakeel_log_date`, `wakeel_log_time`) VALUES ($user_id,'$ip','$date','$time')";
	$result=mysqli_query($ob->makeconn(),$sql_log);
	echo true;
}
else
{
	echo false;
}
?>