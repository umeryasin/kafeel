<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
//Client Page Values
$client_user_name=$_POST['client_user_name'];
$client_password=$_POST['client_password'];
$client_name=$_POST['client_name'];
$address=$_POST['address'];
$company_name=$_POST['company_name'];
$city=$_POST['city'];
//
$partner_1=$_POST['partner_1'];
$partner_1_mobile_1=$_POST['partner_1_mobile_1'];
$partner_1_mobile_2=$_POST['partner_1_mobile_2'];
//
$partner_2=$_POST['partner_2'];
$partner_2_mobile_1=$_POST['partner_2_mobile_1'];
$partner_2_mobile_2=$_POST['partner_2_mobile_2'];
//
$land_line=$_POST['land_line'];
$emirates_id=$_POST['emirates_id'];
$nationality=$_POST['nationality'];
$passport_no=$_POST['passport_no'];
$amount=$_POST['amount'];
$installments=$_POST['installments'];
$r_balance=$_POST['r_balance'];
$agreement_date=$_POST['agreement_date'];
$sponship_end_date=$_POST['sponship_end_date'];
$c_p_in_doco=$_POST['c_p_in_doco'];
$total_emp=$_POST['total_emp'];
//
$profile_pic=$_FILES['pro_pic']['name'];
$target = "../../upload/".basename($profile_pic);
move_uploaded_file($_FILES['pro_pic']['tmp_name'], $target);
//
$remarks=$_POST['remarks'];
//
$sql_max_id="SELECT MAX(`ci_id`) AS max_id FROM `client_info`";
$result_max_id=mysqli_query($ob->makeconn(),$sql_max_id);
$row_max_id=mysqli_fetch_assoc($result_max_id);
$max_id=$row_max_id['max_id']+1;
//
$sql_ins="INSERT INTO `client_info`(`ci_id`, `ci_username`, `ci_password`, `ci_name`, `ci_address`, `ci_company_name`, `ci_city`, `ci_partner1_name`, `ci_partner1_mob1`, `ci_partner1_mob2`, `ci_partner2_name`, `ci_partner2_mob1`, `ci_partner2_mob2`, `ci_landline`, `ci_emirates_id`, `ci_nationality_id`, `ci_passport_no`, `ci_amount`, `ci_installment`, `ci_r_balance`, `ci_agreement_date`, `ci_sponsership_end_date`, `ci_percentage`, `ci_total_emp`, `ci_profile_pic`, `ci_remarks`, `ci_activation_code`, `ci_client_act_status`, `ci_wakeel_act_status`, `ci_del_status`) VALUES ($max_id,'$client_user_name','$client_password','$client_name','$address','$company_name','$city','$partner_1','$partner_1_mobile_1','partner_1_mobile_2','$partner_2','partner_2_mobile_1','$partner_2_mobile_2','$land_line','$emirates_id',$nationality,'$passport_no',$amount,$installments,$r_balance,'$agreement_date','$sponship_end_date',$c_p_in_doco,$total_emp,'$profile_pic','$remarks','',1,1,0)";
//echo $sql_ins;
$result_ins=mysqli_query($ob->makeconn(),$sql_ins);
if($result_ins)
{
	header('location:../../view-client-info.php');
}
?>