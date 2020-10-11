<?php
include_once('../../../db/db_config.php');
$ob=new DBConnection();
//
$client_edit_id=$_POST['client_edit_id'];
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
//
if(isset($_FILES['emirates_id_image']))
{
	$emirates_id_image=$_FILES['emirates_id_image']['name'];
	$target = "../../upload/".basename($emirates_id_image);
	move_uploaded_file($_FILES['emirates_id_image']['tmp_name'], $target);
	$up="UPDATE `client_info` SET `ci_emirates_id_image`='$emirates_id_image' WHERE ci_id=$client_edit_id";
	$re=mysqli_query($ob->makeconn(),$up);
}
//
$emirates_id_issue_date=$_POST['emirates_id_issue_date'];
$emirates_id_expiry_date=$_POST['emirates_id_expiry_date'];
//
$nationality=$_POST['nationality'];
$passport_no=$_POST['passport_no'];
//
if(isset($_FILES['passport_image']))
{
	$passport_image=$_FILES['passport_image']['name'];
	$target = "../../upload/".basename($passport_image);
	move_uploaded_file($_FILES['passport_image']['tmp_name'], $target);
	$up="UPDATE `client_info` SET `ci_passport_image`='$passport_image' WHERE ci_id=$client_edit_id";
	$re=mysqli_query($ob->makeconn(),$up);
}
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
if(isset($_FILES['pro_pic']))
{
	$profile_pic=$_FILES['pro_pic']['name'];
	$target = "../../upload/".basename($profile_pic);
	move_uploaded_file($_FILES['pro_pic']['tmp_name'], $target);
	$up="UPDATE `client_info` SET `ci_profile_pic`='$profile_pic' WHERE ci_id=$client_edit_id";
	$re=mysqli_query($ob->makeconn(),$up);
}
//
$remarks=$_POST['remarks'];
//
$designation=$_POST['designation'];
$salary=$_POST['salary'];
$visa_issue_date=$_POST['visa_issue_date'];
$visa_expire_date=$_POST['visa_expire_date'];
//
if(isset($_FILES['labor_contract_image']))
{
	$labor_contract_image=$_FILES['labor_contract_image']['name'];
	$target = "../../upload/".basename($labor_contract_image);
	move_uploaded_file($_FILES['labor_contract_image']['tmp_name'], $target);
	$up="UPDATE `client_info` SET `ci_labor_contract_image`='$labor_contract_image' WHERE ci_id=$client_edit_id";
	$re=mysqli_query($ob->makeconn(),$up);
}
//
$sql_up="UPDATE `client_info` SET `ci_username`='$client_user_name',`ci_password`='$client_password',`ci_name`='$client_name',`ci_address`='$address',`ci_company_name`='$company_name',`ci_city`='$city',`ci_partner1_name`='$partner_1',`ci_partner1_mob1`='$partner_1_mobile_1',`ci_partner1_mob2`='$partner_1_mobile_2',`ci_partner2_name`='$partner_2',`ci_partner2_mob1`='$partner_2_mobile_1',`ci_partner2_mob2`='$partner_2_mobile_2',`ci_landline`='$land_line',`ci_emirates_id`='$emirates_id',`ci_emirates_id_issue_date`='$emirates_id_issue_date',`ci_emirates_id_expiry_date`='$emirates_id_expiry_date',`ci_nationality_id`=$nationality,`ci_passport_no`='$passport_no',`ci_passport_issue_date`='$passport_issue_date',`ci_passport_expiry_date`='$passport_expire_date',`ci_amount`=$amount,`ci_installment`=$installments,`ci_r_balance`=$r_balance,`ci_agreement_date`='$agreement_date',`ci_sponsership_end_date`='$sponship_end_date',`ci_percentage`=$c_p_in_doco,`ci_total_emp`=$total_emp,`ci_remarks`='$remarks',`ci_desigination`='$designation',`ci_salary`=$salary,`ci_visa_issue_date`='$visa_issue_date',`ci_visa_expire_date`='$visa_expire_date' WHERE ci_id=$client_edit_id";
$result_up=mysqli_query($ob->makeconn(),$sql_up);
if($result_up)
{
	header("location:../../view-client-info.php");
}
?>