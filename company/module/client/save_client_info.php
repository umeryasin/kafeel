<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
//
session_start();
$admin_id=$_SESSION['uts_wk_sub_admin_id'];
//Client Page Values
$sql_user_check="SELECT * FROM `wakeel_info` WHERE `wi_username`='".$_POST['client_user_name']."'";
$result_user_check=mysqli_query($ob->makeconn(),$sql_user_check);
if(mysqli_num_rows($result_user_check)>0)
{
	header('location:../../view-client-info.php?error=1');
}
else
{
	//
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
	$emirates_id_image=$_FILES['emirates_id_image']['name'];
	$target = "../../upload/".basename($emirates_id_image);
	move_uploaded_file($_FILES['emirates_id_image']['tmp_name'], $target);
	//
	$emirates_id_issue_date=$_POST['emirates_id_issue_date'];
	$emirates_id_expiry_date=$_POST['emirates_id_expiry_date'];
	//
	$nationality=$_POST['nationality'];
	$passport_no=$_POST['passport_no'];
	//
	$passport_image=$_FILES['passport_image']['name'];
	$target = "../../upload/".basename($passport_image);
	move_uploaded_file($_FILES['passport_image']['tmp_name'], $target);
	//
	$passport_issue_date=$_POST['passport_issue_date'];
	$passport_expire_date=$_POST['passport_expire_date'];


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
	$designation=$_POST['designation'];
	$salary=$_POST['salary'];
	$visa_issue_date=$_POST['visa_issue_date'];
	$visa_expire_date=$_POST['visa_expire_date'];
	//
	$labor_contract_image=$_FILES['labor_contract_image']['name'];
	$target = "../../upload/".basename($labor_contract_image);
	move_uploaded_file($_FILES['labor_contract_image']['tmp_name'], $target);
	//
	$sql_max_id="SELECT MAX(`ci_id`) AS max_id FROM `client_info`";
	$result_max_id=mysqli_query($ob->makeconn(),$sql_max_id);
	$row_max_id=mysqli_fetch_assoc($result_max_id);
	$max_id=$row_max_id['max_id']+1;
	//
	$sql_ins="INSERT INTO `client_info`(`ci_id`, `ci_username`, `ci_password`, `ci_name`, `ci_address`, `ci_company_name`, `ci_city`, `ci_partner1_name`, `ci_partner1_mob1`, `ci_partner1_mob2`, `ci_partner2_name`, `ci_partner2_mob1`, `ci_partner2_mob2`, `ci_landline`, `ci_emirates_id`, `ci_emirates_id_image`, `ci_emirates_id_issue_date`, `ci_emirates_id_expiry_date`, `ci_nationality_id`, `ci_passport_no`, `ci_passport_image`, `ci_passport_issue_date`, `ci_passport_expiry_date`, `ci_amount`, `ci_installment`, `ci_r_balance`, `ci_agreement_date`, `ci_sponsership_end_date`, `ci_percentage`, `ci_total_emp`, `ci_profile_pic`, `ci_remarks`, `ci_desigination`, `ci_salary`, `ci_visa_issue_date`, `ci_visa_expire_date`, `ci_activation_code`, `ci_client_act_status`, `ci_wakeel_act_status`, `ci_del_status`, `wakeel_id`) VALUES ($max_id,'$client_user_name','$client_password','$client_name','$address','$company_name','$city','$partner_1','$partner_1_mobile_1','$partner_1_mobile_2','$partner_2','$partner_2_mobile_1','$partner_2_mobile_2','$land_line','$emirates_id','$emirates_id_image','$emirates_id_issue_date','$emirates_id_expiry_date',$nationality,'$passport_no','$passport_image','$passport_issue_date','$passport_expire_date',$amount,$installments,$r_balance,'$agreement_date','$sponship_end_date',$c_p_in_doco,$total_emp,'$profile_pic','$remarks','$designation',$salary,'$visa_issue_date','$visa_expire_date','',1,1,0,$admin_id)";
	//echo $sql_ins;
	$result_ins=mysqli_query($ob->makeconn(),$sql_ins);
	if($result_ins)
	{
		header('location:../../view-client-info.php');
	}
	else
	{
		header('location:../../view-client-info.php?error=2');
	}
	//
}
?>