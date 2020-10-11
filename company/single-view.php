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

</head>
<body>
		<?php
				    			$us_id=$_POST['view_id'];
				    			$sql_all="SELECT * FROM `client_info` WHERE `ci_id`=$us_id";
				    			$result_all=mysqli_query($ob->makeconn(),$sql_all);
				    			$row_all=mysqli_fetch_assoc($result_all);
				    			?>
			    				<table class="table table-bordered table-hover">
				    				<tr>
				    					<th>Profile</th>
				    					<td><img src="upload/<?php echo $row_all['ci_profile_pic']; ?>" class="img-fluid" width="100"></td>
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
				    						<input type="text" name="password" id="password" class="form-control" value="<?php echo $row_all['ci_password']; ?>">
				    						
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
				    					<td><?php echo $row_all['ci_company_name']; ?></td>
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
				    						<img src="upload/<?php echo $row_all['ci_emirates_id_image']; ?>" width="250">
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
				    					<td><img src="upload/<?php echo $row_all['ci_passport_image']; ?>" width="250"></td>
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
				    					<td><img src="upload/<?php echo $row_all['ci_labor_contract_image']; ?>" width="250"></td>
				    					<td></td>
				    					<td></td>
				    				</tr>
				    			</table>
<!--js-->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!--font awesome js-->
<script type="text/javascript" src="fontawesome/js/all.js"></script>

</body>
</html>