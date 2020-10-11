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
	<title>View Employee - Kafeel</title>
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
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src='multifilter/multifilter.js'></script>
    <script type='text/javascript'>
    //<![CDATA[
      $(document).ready(function() {
        $('.filter').multifilter()
      })
    //]]>
  </script>
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
			    				<h3 style="color:white;">Search Employee Info</h3>
			    			</div>
				    		<div class="login-form-inner p-5">
				    			<div class="search-area">
				    				<div class='filters'>
									    <div class='row'>
									      <div class='col-md-3'>
									        <div class='filter-container'>
									        <input autocomplete='off' class='filter form-control' name='username' placeholder='User Name' data-col='User Name'/>
									        </div>
									      </div>
									      <div class='col-md-3'>
									        <div class='filter-container'>
									        <input autocomplete='off' class='filter form-control' name='emp_name' placeholder='Emp Name' data-col='Emp Name'/>
									        </div>
									      </div>
									      <div class='col-md-3'>
									        <div class='filter-container'>
									        <input autocomplete='off' class='filter form-control' name='companyname' placeholder='Company Name' data-col='Company Name'/>
									        </div>
									      </div>
									      <div class='col-md-3'>
									        <div class='filter-container'>
									        <input autocomplete='off' class='filter form-control' name='city' placeholder='City' data-col='City'/>
									        </div>
									      </div>
									    </div>
									    <br>
									    <div class="row">
									    	<div class='col-md-3'>
									        <div class='filter-container'>
									        <input autocomplete='off' class='filter form-control' name='nationality' placeholder='Nationality' data-col='Nationality'/>
									        </div>
									      	</div>
									      	<div class='col-md-3'>
									        <div class='filter-container'>
									        <input autocomplete='off' class='filter form-control' name='emirates_id' placeholder='Emirates ID' data-col='Emirates ID'/>
									        </div>
									      	</div>
									      	<div class='col-md-3'>
									        <div class='filter-container'>
									        <input autocomplete='off' class='filter form-control' name='passport_no' placeholder='Passport No.' data-col='Passport No.'/>
									        </div>
									      	</div>
									    </div>
									  </div>
				    			</div>
				    			<br>
				    			<div class="table-responsive">
					    			<table class="table table-bordered table-hover">
					    				<thead>
					    					<tr>
					    						<th>User Name</th>
					    						<th>Emp Name</th>
					    						<th>Company Name</th>
					    						<th>City</th>
					    						<th>Nationality</th>
					    						<th>Emirates ID</th>
					    						<th>Passport No.</th>
					    						<th>Action</th>
					    					</tr>
					    				</thead>
					    				<tbody>
					    					<?php
					    					$sql_all="SELECT * FROM `client_info` WHERE wakeel_id=$admin_id AND ci_del_status=0";
					    					$result_all=mysqli_query($ob->makeconn(),$sql_all);
					    					while($row_all=mysqli_fetch_assoc($result_all))
					    					{
					    						?>
					    						<tr>
					    							<td><?php echo $row_all['ci_username']; ?></td>
					    							<td><?php echo $row_all['ci_name']; ?></td>
					    							<td>
					    							<?php
					    								$sql_com="SELECT * FROM `companies` WHERE `company_id`=".$row_all['ci_company_name'];
					    								$result_com=mysqli_query($ob->makeconn(),$sql_com);
					    								$row_com=mysqli_fetch_assoc($result_com);
					    								echo $row_com['company_name']; 
					    							?>	
					    							</td>
					    							<td><?php echo $row_all['ci_city']; ?></td>
					    							<td>
					    								<?php
					    								$sql_country="SELECT * FROM `apps_countries` WHERE `id`=".$row_all['ci_nationality_id'];
					    								$result_country=mysqli_query($ob->makeconn(),$sql_country);
					    								$row_country=mysqli_fetch_assoc($result_country);
					    								echo $row_country['country_name']
					    								?>		
					    							</td>
					    							<td><?php echo $row_all['ci_emirates_id']; ?></td>
					    							<td><?php echo $row_all['ci_passport_no']; ?></td>
					    							<td>
					    								<form method="post" action="single-view2.php">
					    									<input type="hidden" name="view_id" value="<?php echo $row_all['ci_id']; ?>">
					    								<button class="btn btn-info view-btn"><i class="far fa-eye"></i></button>
					    								</form>
					    							</td>
					    						</tr>
					    						<?php
					    					}
					    					?>
					    				</tbody>
					    			</table>
				    			</div>
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

<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!--font awesome js-->
<script type="text/javascript" src="fontawesome/js/all.js"></script>
<script type="text/javascript">
	$(".ad-seo-client-info").addClass("active");
</script>
</body>
</html>