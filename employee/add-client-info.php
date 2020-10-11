<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
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
			    				<h3 style="color:white;">Add Client Info</h3>
			    			</div>
				    		<div class="login-form-inner p-5">
				    			<form method="post" action="module/client/save_client_info.php" enctype="multipart/form-data">
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Client Username</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="client_user_name" id="client_user_name" class="form-control admin-form-input-text" placeholder="Client User Name" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Client Password</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="password" name="client_password" id="client_password" class="form-control admin-form-input-text" placeholder="Client User Name" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Client Name</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="client_name" id="client_name" class="form-control admin-form-input-text" placeholder="Client Name" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Address</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="address" id="address" class="form-control admin-form-input-text" placeholder="Address" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Company Name</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="company_name" id="company_name" class="form-control admin-form-input-text" placeholder="Company Name">
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">City</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="city" id="city" class="form-control admin-form-input-text" placeholder="City" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Partner 1</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_1" id="partner_1" class="form-control admin-form-input-text" placeholder="Partner 1">
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_1_mobile_1" id="partner_1_mobile_1" class="form-control admin-form-input-text" placeholder="Mobile 1">
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_1_mobile_2" id="partner_1_mobile_2" class="form-control admin-form-input-text" placeholder="Mobile 2">
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Partner 2</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_2" id="partner_2" class="form-control admin-form-input-text" placeholder="Partner 2">
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_2_mobile_1" id="partner_2_mobile_1" class="form-control admin-form-input-text" placeholder="Mobile 1">
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="partner_2_mobile_2" id="partner_2_mobile_2" class="form-control admin-form-input-text" placeholder="Mobile 2">
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Land Line#</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="land_line" id="land_line" class="form-control admin-form-input-text" placeholder="Land Line" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Emirates ID</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="emirates_id" id="emirates_id" class="form-control admin-form-input-text" placeholder="Emirates ID" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Nationality</p>
				    					</div>
				    					<div class="col-md-3">
				    						<select name="nationality" id="nationality" class="form-control select2" required="required">
								               <?php
								               $sql_countries="SELECT * FROM `apps_countries` ORDER BY `country_name` ASC";
								               $result_countries=mysqli_query($ob->makeconn(),$sql_countries);
								               while($row_coutries=mysqli_fetch_assoc($result_countries))
								               {
								                ?>
								                <option value="<?php echo $row_coutries['id']; ?>"><?php echo $row_coutries['country_name']; ?></option>
								                <?php
								               }
								               ?>
								            </select>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Passport #</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="passport_no" id="passport_no" class="form-control admin-form-input-text" placeholder="Passport #" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Amount</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="amount" id="amount" class="form-control admin-form-input-text" placeholder="Amount" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Installments</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="number" name="installments" id="installments" class="form-control admin-form-input-text" placeholder="Installments" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Remaining Balance</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="r_balance" id="r_balance" class="form-control admin-form-input-text" placeholder="Remaining Balance" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Agreement Date</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="date" name="agreement_date" id="agreement_date" class="form-control admin-form-input-text" placeholder="Agreement Date" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Sponsership End Date</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="date" name="sponship_end_date" id="sponship_end_date" class="form-control admin-form-input-text" placeholder="Sponsership End Date" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Client Percentage in Documents</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="c_p_in_doco" id="c_p_in_doco" class="form-control admin-form-input-text" placeholder="Client Percentage in Documents" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Total Employees</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="text" name="total_emp" id="total_emp" class="form-control admin-form-input-text" placeholder="Total Employees" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Upload Picture</p>
				    					</div>
				    					<div class="col-md-3">
				    						<input type="file" name="pro_pic" id="pro_pic" class="form-control admin-form-input-text" placeholder="Picture" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-2">
				    						<p class="form-font-text">Any Remarks</p>
				    					</div>
				    					<div class="col-md-3">
				    						<textarea class="form-control" name="remarks" id="remarks"></textarea>
				    					</div>
				    				</div>


				    				<div class="row text-center">
				    					<div class="col-md-12">
				    						<button type="submit" class="btn login-btn mt-2">Save</button>
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
<script type="text/javascript">
	$(".admin-ad-client").addClass("active");
</script>
</body>
</html>