<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Client Info</title>
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
    	table,tr,td,th{
    		color: white;
    	}
    	td a{
    		color: white;
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
			    				<h3 style="color:white;">View <?php echo $_SESSION['uts_client_mm_username']; ?> Info</h3>
			    				<?php
				    			$us_id=$_SESSION['uts_client_mm_id'];
				    			$sql_all="SELECT * FROM `client_info` WHERE `ci_id`=$us_id";
				    			$result_all=mysqli_query($ob->makeconn(),$sql_all);
				    			$row_all=mysqli_fetch_assoc($result_all);
				    			?>
			    				<a href='print.php' class='btn btn-info'>Click Here To Print</a>
			    			</div>
				    		<div class="login-form-inner p-5">
				    			<table class="table table-bordered table-hover">
				    				<tr>
				    					<th>Profile</th>
				    					<td><img src="../company/upload/<?php echo $row_all['ci_profile_pic']; ?>" class="img-fluid" width="100"></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>User Name</th>
				    					<td><?php echo $row_all['ci_username']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Password</th>
				    					<td>
				    						<input type="password" name="password" id="password" class="form-control" value="<?php echo $row_all['ci_password']; ?>">
				    						<label>Show</label>
				    						<input type="checkbox" name="check_pass" id="check_pass">
				    					</td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Name</th>
				    					<td><?php echo $row_all['ci_name']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Address</th>
				    					<td><?php echo $row_all['ci_address']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Company Name</th>
				    					<td>
				    					<?php
				    					$sql_com="SELECT * FROM `companies` WHERE company_id=".$row_all['ci_company_name'];
				    					$result_com=mysqli_query($ob->makeconn(),$sql_com);
				    					$row_com=mysqli_fetch_assoc($result_com);
				    					echo $row_com['company_name'];   
				    					?>	
				    					</td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Partner 1</th>
				    					<td><?php echo $row_all['ci_partner1_name']; ?></td>
				    					<td>Tel:<a href="tel:<?php echo $row_all['ci_partner1_mob1']; ?>"><?php echo $row_all['ci_partner1_mob1']; ?></a></td>
				    					<td>Tel:<a href="tel:<?php echo $row_all['ci_partner1_mob1']; ?>"><?php echo $row_all['ci_partner1_mob1']; ?></a></td>
				    				</tr>
				    				<tr>
				    					<th>Partner 2</th>
				    					<td><?php echo $row_all['ci_partner2_name']; ?></td>
				    					<td>Tel:<a href="tel:<?php echo $row_all['ci_partner2_mob1']; ?>"><?php echo $row_all['ci_partner2_mob1']; ?></a></td>
				    					<td>Tel:<a href="tel:<?php echo $row_all['ci_partner2_mob1']; ?>"><?php echo $row_all['ci_partner2_mob2']; ?></a></td>
				    				</tr>
				    				<tr>
				    					<th>Landline</th>
				    					<td><?php echo $row_all['ci_landline']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Emirates ID</th>
				    					<td><?php echo $row_all['ci_emirates_id']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Emirates ID Image</th>
				    					<td>
				    						<img src="../company/upload/<?php echo $row_all['ci_emirates_id_image']; ?>" width="250">
				    					</td>
				    					<td>Issue Date: <?php echo $row_all['ci_emirates_id_issue_date']; ?></td>
				    					<td>Expiry Date: <?php echo $row_all['ci_emirates_id_expiry_date']; ?></td>
				    				</tr>
				    				<tr>
				    					<th>Passport No.</th>
				    					<td><?php echo $row_all['ci_passport_no']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Passport Image</th>
				    					<td><img src="../company/upload/<?php echo $row_all['ci_passport_image']; ?>" width="250"></td>
				    					<td>Issue Date: <?php echo $row_all['ci_passport_issue_date']; ?></td>
				    					<td>Expiry Date: <?php echo $row_all['ci_passport_expiry_date']; ?></td>
				    				</tr>
				    				<tr>
				    					<th>Amount</th>
				    					<td><?php echo $row_all['ci_amount']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Installment</th>
				    					<td><?php echo $row_all['ci_installment']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Remaining Balance</th>
				    					<td><?php echo $row_all['ci_r_balance']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Agreement Date</th>
				    					<td><?php echo $row_all['ci_agreement_date']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Sponsership End Date</th>
				    					<td><?php echo $row_all['ci_sponsership_end_date']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Percentage</th>
				    					<td><?php echo $row_all['ci_percentage']; ?>%</td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Total Employees</th>
				    					<td><?php echo $row_all['ci_total_emp']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Remarks</th>
				    					<td><?php echo $row_all['ci_remarks']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Desigination</th>
				    					<td><?php echo $row_all['ci_desigination']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Salary</th>
				    					<td><?php echo $row_all['ci_salary']; ?></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Visa</th>
				    					<td>Issue Date: <?php echo $row_all['ci_visa_issue_date']; ?></td>
				    					<td>Expiry Date: <?php echo $row_all['ci_visa_expire_date']; ?></td>
				    					<td></td>
				    				</tr>
				    				<tr>
				    					<th>Labor Contract Image</th>
				    					<td><img src="../company/upload/<?php echo $row_all['ci_labor_contract_image']; ?>" width="250"></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    			</table>
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
	$(".admin-client-info").addClass("active");
</script>
<script type="text/javascript">
	$('#check_pass').click(function(){
    if('password' == $('#password').attr('type')){
         $('#password').prop('type', 'text');
    }else{
         $('#password').prop('type', 'password');
    }
});
</script>
</body>
</html>