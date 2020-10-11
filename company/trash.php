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
	<title>Trash Employee - Kafeel</title>
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
			    				<h3 style="color:white;">Trash</h3>
			    			</div>
				    		<div class="login-form-inner p-5">
				    			<div class="table-responsive">
					    			<table class="table table-bordered table-hover">
					    				<thead>
					    					<tr>
					    						<th>User Name</th>
					    						<th>Name</th>
					    						<th>Action</th>
					    					</tr>
					    				</thead>
					    				<tbody>
					    					<?php
					    					$sql_all="SELECT * FROM `client_info` WHERE wakeel_id=$admin_id AND ci_del_status=1";
					    					$result_all=mysqli_query($ob->makeconn(),$sql_all);
					    					while($row_all=mysqli_fetch_assoc($result_all))
					    					{
					    						?>
					    						<tr>
					    							<td><?php echo $row_all['ci_username']; ?></td>
					    							<td><?php echo $row_all['ci_name']; ?></td>		
					    							<td>
					    								<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
														  <div class="btn-group mr-2" role="group" aria-label="First group">
														  	<form method="post" action="single-view2.php">
					    									<input type="hidden" name="view_id" value="<?php echo $row_all['ci_id']; ?>">
						    								<button class="btn btn-info view-btn"><i class="far fa-eye"></i></button>
						    								</form>
						    								<button class="btn btn-warning btn-recover" value="<?php echo $row_all['ci_id']; ?>">Recover</button>
						    								<button class="btn btn-danger del-btn" value="<?php echo $row_all['ci_id']; ?>" >Permenent Delete</button>
														  </div>
														</div>
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
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
<!--font awesome js-->
<script type="text/javascript" src="fontawesome/js/all.js"></script>
<script type="text/javascript">
	$(".ad-trash").addClass("active");
</script>
<script type="text/javascript">
	$(".btn-recover").on("click",function(){
		if(confirm("Are you sure you want to recover"))
		{
			var recover_id=$(this).val();
			//alert(recover_id);
			$.ajax({
				url:'module/client/recover_client_info.php',
				method:'POST',
				data:{recover_id:recover_id},
				success: function(data)
				{
					console.log(data);
					if(data==true)
					{
						location.reload();
					}
				}
			});
		}
	});
</script>
<script type="text/javascript">
	$(".del-btn").on("click",function(){
		if(confirm("Conform Delete ?"))
		{
			var del_id=$(this).val();
			$.ajax({
				url:'module/client/del_client_info_permenent.php',
				method: 'POST',
				data: {del_id:del_id},
				success: function(data)
				{
					console.log(data);
					if(data==true)
					{
						location.reload();
					}
				}
			});
		}
	});
</script>
</body>
</html>