<?php
session_start();
if(isset($_SESSION['wakeel_uts_admin_id']) && isset($_SESSION['wakeel_uts_admin_name']) && isset($_SESSION['wakeel_uts_admin_email']) && isset($_SESSION['wakeel_uts_admin_pic']) && $_SESSION['wakeel_uts_check']==true && isset($_SESSION['wakeel_uts_loged_date']))
{
  $_SESSION['loged']=date('Y/m/d');
}
else
  header('location:signin.php');
?>