<?php
session_start();
if(isset($_SESSION['uts_wk_sub_admin_id']) AND isset($_SESSION['uts_wk_sub_admin_uname']) AND $_SESSION['uts_wk_sub_admin_check']==true)
{
  $_SESSION['loged']=date('Y/m/d');
}
else
  header('location:../admin-login.php');
?>