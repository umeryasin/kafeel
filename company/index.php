<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
$admin_id=$_SESSION['uts_wk_sub_admin_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Company Dashboard - Kafeel</title>
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
    	table, th, td{
    		color: white;
    	}
    </style>
</head>
<body>
	<!--first-header-->
	<?php include_once('nav/first_header.php'); ?>
	<section>
		<div class="nav-bottom-area h-100">
			<!-- second-header-->
			<?php include_once('nav/second_header.php'); ?>
		    <div class="container">
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="front-bold p-2">
		    				<p class="landing-front-text">Welcome <?php echo $_SESSION['uts_wk_sub_admin_uname']; ?></p>
		    				<p>to Company Dashboard</p>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12 mt-2">
		    			<h4 class="text-center" style="color:white;">Documents Status</h4>
		    		</div>
		    		<div class="col-md-12">
		    			<div class="table-responsive log-table">
		    				<table class="table table-hover">
		    					<thead>
		    						<th>Client</th>
		    						<th>Type</th>
		    						<th>Issue Date</th>
		    						<th>Expire Date</th>
		    						<th>Expire Duration (Months)</th>
		    					</thead>
		    					<tbody>
		    					<?php
		    					$sql_all="SELECT * FROM `client_info` WHERE `wakeel_id`=$admin_id";
		    					$result_all=mysqli_query($ob->makeconn(),$sql_all);
		    					while($row_all=mysqli_fetch_assoc($result_all))
		    					{
		    						$cid=$row_all['ci_id'];
		    						//Emirates Expiry Check
		    						$date1=$row_all['ci_emirates_id_issue_date'];
		    						$date2=$row_all['ci_emirates_id_expiry_date'];

		    						$ts1 = strtotime($date1);
									$ts2 = strtotime($date2);
									$year1 = date('Y', $ts1);
									$year2 = date('Y', $ts2);
									$month1 = date('m', $ts1);
									$month2 = date('m', $ts2);

									$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
									if($diff<=2)
									{
										?>
										<tr style="<?php if($diff<=0) echo "background-color:#dc3545!important;"; elseif($diff==1) echo "background:linear-gradient(60deg, #ffa726, #fb8c00);"; else echo "background-color:#17a2b8!important;";  ?>">
										<td><?php echo $row_all['ci_username']; ?></td>
										<td>Emirates ID</td>
										<td><?php echo $date1; ?></td>
										<td><?php echo $date2; ?></td>
										<td><?php echo $diff; ?></td>
										</tr>
										<?php
									}
									//
									$date1=$row_all['ci_passport_issue_date'];
		    						$date2=$row_all['ci_passport_expiry_date'];

		    						$ts1 = strtotime($date1);
									$ts2 = strtotime($date2);
									$year1 = date('Y', $ts1);
									$year2 = date('Y', $ts2);
									$month1 = date('m', $ts1);
									$month2 = date('m', $ts2);

									$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
									$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
									if($diff<=2)
									{
										?>
										<tr style="<?php if($diff<=0) echo "background-color:#dc3545!important;"; elseif($diff==1) echo "background:linear-gradient(60deg, #ffa726, #fb8c00);"; else echo "background-color:#17a2b8!important;";  ?>">
										<td><?php echo $row_all['ci_username']; ?></td>
										<td>Passport</td>
										<td><?php echo $date1; ?></td>
										<td><?php echo $date2; ?></td>
										<td><?php echo $diff; ?></td>
										</tr>
										<?php
									}
									//
									$date1=$row_all['ci_visa_issue_date'];
		    						$date2=$row_all['ci_visa_expire_date'];

		    						$ts1 = strtotime($date1);
									$ts2 = strtotime($date2);
									$year1 = date('Y', $ts1);
									$year2 = date('Y', $ts2);
									$month1 = date('m', $ts1);
									$month2 = date('m', $ts2);

									$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
									$diff = (($year2 - $year1) * 12) + ($month2 - $month1);
									if($diff<=2)
									{
										?>
										<tr style="<?php if($diff<=0) echo "background-color:#dc3545!important;"; elseif($diff==1) echo "background:linear-gradient(60deg, #ffa726, #fb8c00);"; else echo "background-color:#17a2b8!important;";  ?>">
										<td><?php echo $row_all['ci_username']; ?></td>
										<td>Visa</td>
										<td><?php echo $date1; ?></td>
										<td><?php echo $date2; ?></td>
										<td><?php echo $diff; ?></td>
										</tr>
										<?php
									}			
								
		    					}
		    					?>
		    					</tbody>
		    				</table>
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
	$(".home-pg").addClass("active");
</script>
</body>
</html>