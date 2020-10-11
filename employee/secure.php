<?php
session_start();
if(isset($_SESSION['uts_client_mm_id']) AND isset($_SESSION['uts_client_mm_username']) AND isset($_SESSION['uts_client_mm_ci_name']) AND $_SESSION['uts_client_mm_check']==true)
{
  $_SESSION['loged']=date('Y/m/d');
}
else
  header('location:../client-login.php');
?>