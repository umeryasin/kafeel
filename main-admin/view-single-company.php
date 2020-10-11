<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
$admin_id=$_SESSION['uts_wakeel_main_id_secret_id'];
//
$cid=$_GET['wid'];
$sql="SELECT * FROM `wakeel_info` WHERE `wi_id`=$cid";
$result=mysqli_query($ob->makeconn(),$sql);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <title>Company View</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container bootstrap snippet">
	    <div class="row">
	  		<div class="col-sm-10"><h1>Company Info</h1></div>
	    	<div class="col-sm-2"><a href="" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="img/kafeel_1.png"></a></div>
	    </div>
    <div class="row">
    	<div class="col-sm-12">
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="#" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="user_name"><h4>User Name</h4></label>
                              <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name" title="enter your user name." value="<?php echo $row['wi_username']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" title="enter your password." value="<?php echo $row['wi_password']; ?>">
                              <label for="show_password">Show Password</label>
                              <input type="checkbox" name="show_password" id="show_password">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="mob1"><h4>Mobile 1</h4></label>
                              <input type="text" class="form-control" name="mob1" id="mob1" placeholder="Mobile 1" title="enter your mobile 1" value="<?php echo $row['wi_mob1']; ?>">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mob2"><h4>Mobile 2</h4></label>
                              <input type="text" class="form-control" name="mob2" id="mob2" placeholder="Mobile 2" title="enter your mobile 2" value="<?php echo $row['wi_mob2']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <?php
                            $country_sql="SELECT * FROM `apps_countries` WHERE `id`=".$row['wi_nationality_id'];
                            $country_result=mysqli_query($ob->makeconn(),$country_sql);
                            $country_row=mysqli_fetch_array($country_result);
                            ?>  
                              <label for="nationality"><h4>Nationality</h4></label>
                              <input type="text" class="form-control" id="nationality" name="nationality"placeholder="Nationality" title="Enter Nationality" value="<?php echo $country_row['country_name']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="amount"><h4>Amount</h4></label>
                              <input type="text" class="form-control" name="amount" id="amount" placeholder="Amount" title="enter your amount." value="<?php echo $row['wi_amount']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="installment"><h4>Installment</h4></label>
                              <input type="number" class="form-control" name="installment" id="installment" placeholder="Installment" title="Installment" value="<?php echo $row['wi_installment']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="installment"><h4>Remaining Amount</h4></label>
                              <input type="text" class="form-control" name="remaining_amount" id="remaining_amount" placeholder="Remainign Amount" title="Remaining Amount" value="<?php echo $row['wi_remaining_amount']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="starting_date"><h4>Starting Date</h4></label>
                              <input type="date" class="form-control" name="starting_date" id="starting_date" placeholder="Starting Date" title="Starting Date" value="<?php echo $row['wi_starting_date']; ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                            <label for="expire_date"><h4>Expire Date</h4></label>
                              <input type="date" class="form-control" name="expire_date" id="expire_date" placeholder="Expire Date" title="Expire Date" value="<?php echo $row['wi_expire_date']; ?>">
                          </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function(){
            $('#show_password').click(function(){
             //alert($(this).is(':checked'));
                $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
            });
        });
    </script>
</html>