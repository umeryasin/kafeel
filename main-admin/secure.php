<?php
session_start();
if(isset($_SESSION['uts_wakeel_main_id_secret_id']) && isset($_SESSION['uts_wakeel_main_secret_name']) && isset($_SESSION['uts_wakeel_main_secret_email']) && isset($_SESSION['uts_wakeel_main_secret_pic']) && $_SESSION['uts_wakeel_main_secret_check']==true)
{
  $_SESSION['loged']=date('Y/m/d');
}
else
  header('location:signin.php');
?>