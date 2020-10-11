<?php
include_once('../../../../db/db_config.php');
$ob=new DBConnection();
/*Form Info*/
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `admin_info` WHERE `admin_email`='$email' AND `admin_password`='$password' AND `admin_status`=1";
$result=mysqli_query($ob->makeconn(),$sql);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
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
	/*Session creating*/
	session_start();
	$_SESSION['wakeel_uts_admin_id']=$row['admin_id'];
	$_SESSION['wakeel_uts_admin_name']=$row['admin_name'];
	$_SESSION['wakeel_uts_admin_email']=$row['admin_email'];
	$_SESSION['wakeel_uts_admin_pic']=$row['admin_profile_pic'];
	$_SESSION['wakeel_uts_check']=true;
	$_SESSION['wakeel_uts_loged_date']=$date;
	/*update admin log info*/
	$admin_id_ins=$row['admin_id'];
	$sql_log="INSERT INTO `admin_log`(`admin_id`, `admin_log_ip`, `admin_log_date`, `admin_log_time`) VALUES ($admin_id_ins,'$ip','$date','$time')";
	$result_log=mysqli_query($ob->makeconn(),$sql_log);
	echo true;
}
else
{
	echo false;
}



?>