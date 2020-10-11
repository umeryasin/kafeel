<!DOCTYPE html>
<html lang="en">
<head>
	<title>Company / Sponser Login - Kafeel</title>
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
	<section>
		<div class="nav-bottom-area">
			<!-- second-header-->
			<?php include_once('nav/second_header.php'); ?>
		    <div class="container">
		    	<div class="row">
		    		<div class="col-md-3"></div>
		    		<div class="col-md-6">
			    		<div class="login-form-outer mt-5">
			    			<div class="text-center">
			    				<h3 style="color:white;">Company / Sponser</h3>
			    			</div>
				    		<div class="login-form-inner p-5">
				    			<form method="post" action="javascript:login()" id="login_form">
				    				<div class="row">
				    					<div class="col-md-3">
				    						<p class="form-font-text">Username</p>
				    					</div>
				    					<div class="col-md-9">
				    						<input type="text" name="username" id="username" class="form-control admin-form-input-text" placeholder="Username" required>
				    					</div>
				    				</div>
				    				<div class="row">
				    					<div class="col-md-3">
				    						<p class="form-font-text">Password</p>
				    					</div>
				    					<div class="col-md-9">
				    						<input type="password" name="password" id="password" class="form-control admin-form-input-text" placeholder="Password" required>
				    					</div>
				    				</div>
				    				<div class="row text-center">
				    					<div class="col-md-12">
				    						<p style="color: red; display: none" class="error-message">Incorrect Info</p>
				    						<button type="submit" class="btn login-btn mt-2">Login</button>
				    					</div>
				    				</div>
				    			</form>
				    		</div>
			    		</div>	
		    		</div>
		    		<div class="col-md-3"></div>
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
	$(".admin-login-pg").addClass("active");
</script>
<script type="text/javascript">
/*Login Ajax Start*/
function login()
{
	var datastring = $("#login_form").serialize();
	$.ajax({
	    type: "POST",
	    url: "module/login/ajax/signin_con.php",
	    data: datastring,
	    success: function(data)
	    {
	    	//console.log(data);
		    if(data==true)
		    {
		        window.location='company';
		    }
		    else
		    {
		    	$(".error-message").css("display","block");
		    }
	    }
	});
}
/*Login Ajax End*/
</script>
</body>
</html>