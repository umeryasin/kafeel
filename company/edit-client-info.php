<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
$edit_id=$_POST['edit_id'];
$sql_ci_info="SELECT * FROM `client_info` WHERE `ci_id`=$edit_id";
$result_ci_info=mysqli_query($ob->makeconn(),$sql_ci_info);
$row_ci_info=mysqli_fetch_assoc($result_ci_info);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Client Info</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!--font awesome css-->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <!--custom css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- License Under UTS Experts (https://utsexperts.com) -->
    <style type="text/css">
    	.form-font-text{
    		font-size: 20px;
    		color: white;
    		border-radius: 20px;
    	}
    	.login-btn{
    		color: white;
    		background-color: #d06161;
    		border-radius: 10px;
    	}
    </style>
</head>
<body>
	<!--first-header-->
	<?php include_once('nav/first_header.php'); ?>
	<section id="wrap">
		<div class="nav-bottom-area h-100">
			<!-- second-header-->
			<?php include_once('nav/second_header.php'); ?>
		    <div class="container">
		    	<div class="row">
		    		<div class="col-md-12">
			    		<div class="login-form-outer mt-5 mb-5">
			    			<div class="text-center">
			    				<h3 style="color:white;">Edit Client Info</h3>
			    			</div>
				    		<div class="login-form-inner p-5">
				    			<form method="post" action="module/client/update_client_info.php" enctype="multipart/form-data">
				    				<input type="hidden" name="client_edit_id" id="client_edit_id" value="<?php echo $edit_id; ?>">

				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-6">
				    						<!--start-->
				    						<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Client Username</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="client_user_name" id="client_user_name" class="form-control admin-form-input-text" placeholder="Client User Name" value="<?php echo $row_ci_info['ci_username']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Client Password</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="password" name="client_password" id="client_password" class="form-control admin-form-input-text" placeholder="Client User Name" value="<?php echo $row_ci_info['ci_password']; ?>" required>
				    					</div>
				    				</div>
				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Upload Picture</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="file" name="pro_pic" id="pro_pic" class="form-control admin-form-input-text" placeholder="Picture" value="<?php echo $row_ci_info['ci_profile_pic']; ?>">
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Client Name</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="client_name" id="client_name" class="form-control admin-form-input-text" placeholder="Client Name" value="<?php echo $row_ci_info['ci_name']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Address</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="address" id="address" class="form-control admin-form-input-text" placeholder="Address" value="<?php echo $row_ci_info['ci_address']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Nationality</p>
				    					</div>
				    					<div class="col-md-8">
				    						<select name="nationality" id="nationality" class="form-control select2" required="required">
								               <?php
								               $sql_countries="SELECT * FROM `apps_countries` ORDER BY `country_name` ASC";
								               $result_countries=mysqli_query($ob->makeconn(),$sql_countries);
								               while($row_coutries=mysqli_fetch_assoc($result_countries))
								               {
								                ?>
								                <option <?php
								                if($row_ci_info['ci_nationality_id']==$row_coutries['id'])
								                echo "selected"; 
								                	?> value="<?php echo $row_coutries['id']; ?>"><?php echo $row_coutries['country_name']; ?></option>
								                <?php
								               }
								               ?>
								            </select>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Company Name</p>
				    					</div>
				    					<div class="col-md-8">
				    						<select name="company_name" id="company_name" class="form-control" required>
				    							<?php
				    							$sql_com="SELECT * FROM `companies` ORDER BY company_name ASC";
				    							$result_com=mysqli_query($ob->makeconn(),$sql_com);
				    							while($row_com=mysqli_fetch_assoc($result_com))
				    							{
				    								?>
				    								<option <?php
				    								if($row_com['company_id']==$row_ci_info['ci_company_name'])
				    								{
				    									echo "selected";
				    								}
				    								?> value="<?php echo $row_com['company_id'] ?>"><?php echo $row_com['company_name']; ?></option>
				    								<?php
				    							}
				    							?>
				    						</select>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Land Line#</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="land_line" id="land_line" class="form-control admin-form-input-text" placeholder="Land Line" value="<?php echo $row_ci_info['ci_landline']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">City</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="city" id="city" class="form-control admin-form-input-text" placeholder="City" value="<?php echo $row_ci_info['ci_city']; ?>" required>
				    					</div>
				    				</div>
				    						<!--end-->
				    					</div>
				    					<div class="col-md-6">
				    						<img src="upload/<?php echo $row_ci_info['ci_profile_pic']; ?>" alt="avatar" class="avatar img-circle img-thumbnail" style="border-radius: 50%; max-width: 200px;">
				    					</div>
				    				</div>
				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Partner 1</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_1" id="partner_1" class="form-control admin-form-input-text" placeholder="Partner 1" value="<?php echo $row_ci_info['ci_partner1_name']; ?>">
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_1_mobile_1" id="partner_1_mobile_1" class="form-control admin-form-input-text" placeholder="Mobile 1" value="<?php echo $row_ci_info['ci_partner1_mob1']; ?>">
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_1_mobile_2" id="partner_1_mobile_2" class="form-control admin-form-input-text" placeholder="Mobile 2" value="<?php echo $row_ci_info['ci_partner1_mob2']; ?>">
				    					</div>
				    				</div>
				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Partner 2</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_2" id="partner_2" class="form-control admin-form-input-text" placeholder="Partner 2" value="<?php echo $row_ci_info['ci_partner2_name']; ?>">
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_2_mobile_1" id="partner_2_mobile_1" class="form-control admin-form-input-text" placeholder="Mobile 1" value="<?php echo $row_ci_info['ci_partner2_mob1']; ?>">
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_2_mobile_2" id="partner_2_mobile_2" class="form-control admin-form-input-text" placeholder="Mobile 2" value="<?php echo $row_ci_info['ci_partner2_mob2']; ?>">
				    					</div>
				    				</div>
				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-6">
				    						<!--start-->
				    						<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Emirates ID</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="emirates_id" id="emirates_id" class="form-control admin-form-input-text" value="<?php echo $row_ci_info['ci_emirates_id']; ?>" placeholder="Emirates ID" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Emirates ID Image</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="file" name="emirates_id_image" id="emirates_id_image" class="form-control admin-form-input-text" placeholder="Emirates ID Image" value="<?php echo $row_ci_info['ci_emirates_id_image']; ?>">
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Emirates ID Issue Date</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="date" name="emirates_id_issue_date" id="emirates_id_issue_date" class="form-control admin-form-input-text" placeholder="Emirates ID Issue Date" value="<?php echo $row_ci_info['ci_emirates_id_issue_date']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Emirates ID Expiry Date</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="date" name="emirates_id_expiry_date" id="emirates_id_expiry_date" class="form-control admin-form-input-text" placeholder="Emirates ID Expire Date" value="<?php echo $row_ci_info['ci_emirates_id_expiry_date']; ?>" required>
				    					</div>
				    				</div>
				    						<!--end-->
				    					</div>
				    					<div class="col-md-6">
				    						<img src="upload/<?php echo $row_ci_info['ci_emirates_id_image']; ?>" alt="avatar" class="emirates_id_pic img-circle img-thumbnail" style="max-width: 350px;">
				    					</div>
				    				</div>
				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-6">
				    						<!--start-->
				    						<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Passport #</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="passport_no" id="passport_no" class="form-control admin-form-input-text" value="<?php echo $row_ci_info['ci_passport_no']; ?>" placeholder="Passport #" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Passport Image</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="file" name="passport_image" id="passport_image" class="form-control admin-form-input-text" value="<?php echo $row_ci_info['ci_passport_image']; ?>" placeholder="Passport Image">
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Passport Issue Date</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="date" name="passport_issue_date" id="passport_issue_date" class="form-control admin-form-input-text" value="<?php echo $row_ci_info['ci_passport_issue_date']; ?>" placeholder="Passport Issue Date" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Passport Expire Date</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="date" name="passport_expire_date" id="passport_expire_date" class="form-control admin-form-input-text" value="<?php echo $row_ci_info['ci_passport_expiry_date']; ?>" placeholder="Passport Expire Date" required>
				    					</div>
				    				</div>
				    						<!--end-->
				    					</div>
				    					<div class="col-md-6">
				    						<img src="upload/<?php echo $row_ci_info['ci_passport_image']; ?>" alt="avatar" class="passport_id_pic img-circle img-thumbnail" style="max-width: 350px;">
				    					</div>
				    				</div>
				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Amount</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="amount" id="amount" class="form-control admin-form-input-text" placeholder="Amount" value="<?php echo $row_ci_info['ci_amount']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Installments</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="number" name="installments" id="installments" class="form-control admin-form-input-text" value="<?php echo $row_ci_info['ci_installment']; ?>" placeholder="Installments" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Remaining Balance</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="r_balance" id="r_balance" class="form-control admin-form-input-text" placeholder="Remaining Balance" value="<?php echo $row_ci_info['ci_r_balance']; ?>" required>
				    					</div>
				    				</div>
				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Agreement Date</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="date" name="agreement_date" id="agreement_date" class="form-control admin-form-input-text" placeholder="Agreement Date" value="<?php echo $row_ci_info['ci_agreement_date']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Sponsership End Date</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="date" name="sponship_end_date" id="sponship_end_date" class="form-control admin-form-input-text" placeholder="Sponsership End Date" value="<?php echo $row_ci_info['ci_sponsership_end_date']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Client Percentage in Documents %</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="number" name="c_p_in_doco" id="c_p_in_doco" class="form-control admin-form-input-text" placeholder="Client Percentage in Documents" value="<?php echo $row_ci_info['ci_percentage']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Total Employees</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="number" name="total_emp" id="total_emp" class="form-control admin-form-input-text" placeholder="Total Employees" value="<?php echo $row_ci_info['ci_total_emp']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Any Remarks</p>
				    					</div>
				    					<div class="col-md-3">
				    						<textarea class="form-control" name="remarks" id="remarks"><?php echo $row_ci_info['ci_remarks']; ?></textarea>
				    					</div>
				    				</div>
				    				<hr style="padding-top:2px; padding-bottom:2px; background-color:white; border-radius: 50px;">
				    				<div class="row">
				    					<div class="col-md-6">
				    						<!--start-->
				    						<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Desigination</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="designation" id="designation" class="form-control admin-form-input-text" value="<?php echo $row_ci_info['ci_desigination']; ?>" placeholder="Desigination" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Salary</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="text" name="salary" id="salary" class="form-control admin-form-input-text" placeholder="Salary" value="<?php echo $row_ci_info['ci_salary']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Visa Issue Date</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="date" name="visa_issue_date" id="visa_issue_date" class="form-control admin-form-input-text" placeholder="Visa Issue Date" value="<?php echo $row_ci_info['ci_visa_issue_date']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Visa Expire Date</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="date" name="visa_expire_date" id="visa_expire_date" class="form-control admin-form-input-text" placeholder="Visa Expire Date" value="<?php echo $row_ci_info['ci_visa_expire_date']; ?>" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-4">
				    						<p class="form-font-text">Labor Contract Image</p>
				    					</div>
				    					<div class="col-md-8">
				    						<input type="file" name="labor_contract_image" id="labor_contract_image" class="form-control admin-form-input-text" placeholder="Labor Contract Image" value="<?php echo $row_ci_info['ci_labor_contract_image']; ?>">
				    					</div>
				    				</div>
				    						<!--end-->
				    					</div>
				    					<div class="col-md-6">
				    						<img src="upload/<?php echo $row_ci_info['ci_labor_contract_image']; ?>" alt="avatar" class="contract_pic img-circle img-thumbnail" style="max-width: 350px;">
				    					</div>
				    				</div>

				    				<div class="row text-center">
				    					<div class="col-md-12">
				    						<button type="submit" class="btn login-btn mt-2">Update Info</button>
				    					</div>
				    				</div>
				    			</form>
				    		</div>
			    		</div>	
		    		</div>
		    	</div>
		    </div>
		</div>
	</section>
	<!--footer-->
	<?php include_once('nav/footer.php'); ?>
<!--js-->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!--font awesome js-->
<script type="text/javascript" src="fontawesome/js/all.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput/jquery.maskedinput.js"></script>
<script type="text/javascript">
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  });
}
setInputFilter(document.getElementById("r_balance"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value); });
setInputFilter(document.getElementById("amount"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value); });	
</script>
<script type="text/javascript">
$(document).ready(function() {
	//
    var readURLPro = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#pro_pic").on('change', function(){
        readURLPro(this);
    });
    //
    var readURLEMP = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.emirates_id_pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#emirates_id_image").on('change', function(){
        readURLEMP(this);
    });
    //
    var readURLPASS = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.passport_id_pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#passport_image").on('change', function(){
        readURLPASS(this);
    });
    //
    var readURLLAb = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.contract_pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#labor_contract_image").on('change', function(){
        readURLLAb(this);
    });
});
</script>

</body>
</html>