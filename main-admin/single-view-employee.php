<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
$empid=$_GET['empid'];
$sql_all="SELECT * FROM `client_info` WHERE `ci_id`=$empid";
$result_all=mysqli_query($ob->makeconn(),$sql_all);
$row_all=mysqli_fetch_assoc($result_all);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>View Employee Info</title>
		 <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Bootstrap -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <!-- License Under UTS Experts (https://utsexperts.com) -->
	</head>
	<body>
	<div class="container bootstrap snippet">
	    <div class="row">
	  		<div class="col-sm-10"><h1>Employee Info</h1></div>
	    	<div class="col-sm-2"><a href="" class="pull-right"><img title="Company Profile" class="img-circle img-responsive" src="img/kafeel_1.png"></a></div>
	    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

	      <div class="text-center">
	        <img src="../company/upload/<?php echo $row_all['ci_profile_pic']; ?>" class="avatar img-circle img-thumbnail" alt="avatar" style="max-width: 183px;">
	      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Desigination <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><?php echo $row_all['ci_desigination']; ?></div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">              
          <form class="form" action="##" method="post" id="registrationForm">
           <div class="panel panel-default">
            <div class="panel-heading">Login Info</div>
            <div class="panel-body">
            <div class="row">
                          <div class="col-xs-6">
                            <div class="form-group">
                              <label for="user_name"><h4>User Name</h4></label>
                              <input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name" title="User Name." value="<?php echo $row_all['ci_username']; ?>">
                            </div>
                          </div>
               
                        
                          <div class="col-xs-6">
                            <div class="form-group">
                            <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password" title="Password." value="<?php echo $row_all['ci_password']; ?>">
                              <label for="show_password">Show Password</label>
                              <input type="checkbox" name="show_password" id="show_password">
                            </div>
                         </div>
            </div>
            </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">Basic Info</div>
              <div class="panel-body">
                <div class="row">
                          <div class="col-xs-6">
                            <div class="form-group">
                              <label for="name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="name" id="name" placeholder="Name" title="Name." value="<?php echo $row_all['ci_name']; ?>">
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="form-group">
                              <label for="address"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="address" id="address" placeholder="Address" title="Address." value="<?php echo $row_all['ci_address']; ?>">
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="form-group">
                              <label for="company_name"><h4>Company Name</h4></label>
                              <?php
                              $sql_com="SELECT * FROM `companies` WHERE company_id=".$row_all['ci_company_name'];
                              $result_com=mysqli_query($ob->makeconn(),$sql_com);
                              $row_com=mysqli_fetch_assoc($result_com);
                               
                              ?>
                              <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Company Name" title="Company Name." value="<?php echo $row_com['company_name']; ?>">
                            </div>
                          </div>
                          <div class="col-xs-6">
                            <div class="form-group">
                              <label for="landline"><h4>Landline</h4></label>
                              <input type="text" class="form-control" name="landline" id="landline" placeholder="Landline" title="Landline." value="<?php echo $row_all['ci_landline']; ?>">
                            </div>
                          </div>
                                                  
            </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">Partner 1</div>
              <div class="panel-body">
                <div class="row">
              <div class="col-xs-6">
                            <div class="form-group">
                              <label for="partner_1_name"><h4>Partner 1 Name</h4></label>
                              <input type="text" class="form-control" name="partner_1_name" id="partner_1_name" placeholder="Partner 1 Name" title="Partner 1 Name." value="<?php echo $row_all['ci_partner1_name']; ?>">
                            </div>
                </div> 
                <div class="col-xs-6">
                            <div class="form-group">
                              <label for="partner_1_mob_1"><h4>Mobile 1</h4></label>
                              <input type="text" class="form-control" name="partner_1_mob_1" id="partner_1_mob_1" placeholder="Partner 1 Mobile 1" title="Partner 1 Mobile 1." value="<?php echo $row_all['ci_partner1_mob1']; ?>">
                            </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="partner_1_mob_2"><h4>Mobile 2</h4></label>
                              <input type="text" class="form-control" name="partner_1_mob_2" id="partner_1_mob_2" placeholder="Partner 1 Mobile 2" title="Partner 1 Mobile 2." value="<?php echo $row_all['ci_partner1_mob2']; ?>">
                    </div>
                </div> 
            </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">Partner 2</div>
              <div class="panel-body">
                <div class="row">
              <div class="col-xs-6">
                            <div class="form-group">
                              <label for="partner_2_name"><h4>Partner 2 Name</h4></label>
                              <input type="text" class="form-control" name="partner_2_name" id="partner_2_name" placeholder="Partner 2 Name" title="Partner 2 Name." value="<?php echo $row_all['ci_partner2_name']; ?>">
                            </div>
                </div> 
                <div class="col-xs-6">
                            <div class="form-group">
                              <label for="partner_2_mob_1"><h4>Mobile 1</h4></label>
                              <input type="text" class="form-control" name="partner_2_mob_1" id="partner_2_mob_1" placeholder="Partner 2 Mobile 1" title="Partner 2 Mobile 1." value="<?php echo $row_all['ci_partner2_mob1']; ?>">
                            </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="partner_2_mob_2"><h4>Mobile 2</h4></label>
                              <input type="text" class="form-control" name="partner_2_mob_2" id="partner_2_mob_2" placeholder="Partner 2 Mobile 2" title="Partner 2 Mobile 2." value="<?php echo $row_all['ci_partner2_mob2']; ?>">
                    </div>
                </div> 
            </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">Emirates ID</div>
              <div class="panel-body">
                <div class="row">
              <div class="col-xs-6">
                  <div class="form-group">
                              <label for="emirates_id"><h4>Emirates ID</h4></label>
                              <input type="text" class="form-control" name="emirates_id" id="emirates_id" placeholder="Emirates ID" title="Emirates ID." value="<?php echo $row_all['ci_emirates_id']; ?>">
                    </div>
                </div> 
                <div class="col-xs-6">
                  <div class="form-group">
                        <img src="../company/upload/<?php echo $row_all['ci_emirates_id_image']; ?>" width="200">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="emirates_id_issue_date"><h4>Issue Date</h4></label>
                              <input type="date" class="form-control" name="emirates_id_issue_date" id="emirates_id_issue_date" placeholder="Emirates ID Issue Date" title="Emirates ID Issue Date." value="<?php echo $row_all['ci_emirates_id_issue_date']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="emirates_id_expire_date"><h4>Expiry Date</h4></label>
                              <input type="date" class="form-control" name="emirates_id_expire_date" id="emirates_id_expire_date" placeholder="Emirates ID Expire Date" title="Emirates ID Expire Date." value="<?php echo $row_all['ci_emirates_id_expiry_date']; ?>">
                    </div>
                </div>   
            </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">Passport</div>
              <div class="panel-body">
                <div class="row">
              <div class="col-xs-6">
                  <div class="form-group">
                              <label for="passport_no"><h4>Passport No.</h4></label>
                              <input type="text" class="form-control" name="passport_no" id="passport_no" placeholder="Passport No." title="Passport No." value="<?php echo $row_all['ci_passport_no']; ?>">
                    </div>
                </div> 
                <div class="col-xs-6">
                  <div class="form-group">
                        <img src="../company/upload/<?php echo $row_all['ci_passport_image']; ?>" width="200">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="passport_issue_date"><h4>Issue Date</h4></label>
                              <input type="date" class="form-control" name="passport_issue_date" id="passport_issue_date" placeholder="Passport Issue Date" title="Passport Issue Date." value="<?php echo $row_all['ci_passport_issue_date']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="passport_expire_date"><h4>Expiry Date</h4></label>
                              <input type="date" class="form-control" name="passport_expire_date" id="passport_expire_date" placeholder="Passprt Expire Date" title="Passport Expire Date." value="<?php echo $row_all['ci_passport_expiry_date']; ?>">
                    </div>
                </div>   
            </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">Business Info</div>
              <div class="panel-body">
                <div class="row">
              <div class="col-xs-6">
                  <div class="form-group">
                              <label for="amount"><h4>Amount</h4></label>
                              <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount." title="Amount." value="<?php echo $row_all['ci_amount']; ?>">
                    </div>
                </div> 
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="installment"><h4>Installment</h4></label>
                              <input type="text" class="form-control" name="installment" id="installment" placeholder="Installment." title="Installment." value="<?php echo $row_all['ci_installment']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="r_balance"><h4>Remaining Balance</h4></label>
                              <input type="text" class="form-control" name="r_balance" id="r_balance" placeholder="Remaining Balance." title="Remaining Balance." value="<?php echo $row_all['ci_r_balance']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="agreement_date"><h4>Agreement Date</h4></label>
                              <input type="date" class="form-control" name="agreement_date" id="agreement_date" placeholder="Agreement Date." title="Agreement Date" value="<?php echo $row_all['ci_agreement_date']; ?>">
                    </div>
                </div> 
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="spon_end_date"><h4>Sponsership End Date</h4></label>
                              <input type="date" class="form-control" name="spon_end_date" id="spon_end_date" placeholder="Sponsership End Date." title="Sponsership End Date" value="<?php echo $row_all['ci_sponsership_end_date']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="Percentage"><h4>Percentage</h4></label>
                              <input type="text" class="form-control" name="percentage" id="percentage" placeholder="Percentage." title="Percentage" value="<?php echo $row_all['ci_percentage']; ?>%">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="total_employees"><h4>Total Employees</h4></label>
                              <input type="number" class="form-control" name="total_employees" id="total_employees" placeholder="Total Employees." title="Total Employees" value="<?php echo $row_all['ci_total_emp']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="remarks"><h4>Remarks</h4></label>
                              <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks." title="Remarks" value="<?php echo $row_all['ci_remarks']; ?>">
                    </div>
                </div>  
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="desigination"><h4>Desigination</h4></label>
                              <input type="text" class="form-control" name="desigination" id="desigination" placeholder="desigination." title="desigination" value="<?php echo $row_all['ci_desigination']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="salary"><h4>Salary</h4></label>
                              <input type="text" class="form-control" name="salary" id="salary" placeholder="Salary." title="Salary" value="<?php echo $row_all['ci_salary']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="salary"><h4>Salary</h4></label>
                              <input type="text" class="form-control" name="salary" id="salary" placeholder="Salary." title="Salary" value="<?php echo $row_all['ci_salary']; ?>">
                    </div>
                </div>
            </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">Visa</div>
              <div class="panel-body">
                <div class="row">
              <div class="col-xs-6">
                  <div class="form-group">
                              <label for="visa_issue_date"><h4>Visa Issue Date</h4></label>
                              <input type="date" class="form-control" name="visa_issue_date" id="visa_issue_date" placeholder="Visa Issue Date." title="Visa Issue Date" value="<?php echo $row_all['ci_visa_issue_date']; ?>">
                    </div>
                </div>
                <div class="col-xs-6">
                  <div class="form-group">
                              <label for="visa_expire_date"><h4>Visa Expire Date</h4></label>
                              <input type="date" class="form-control" name="visa_expire_date" id="visa_expire_date" placeholder="Visa Expire Date." title="Visa Expire Date" value="<?php echo $row_all['ci_visa_expire_date']; ?>">
                    </div>
                </div>
            </div>
              </div>
            </div>
           <div class="panel panel-default">
             <div class="panel-heading">Labor Contract</div>
             <div class="panel-body">
                <div class="row">
              <div class="col-xs-6">
                  <div class="form-group">
                    <h4>Labor Contract Image</h4>
                        <img src="../company/upload/<?php echo $row_all['ci_labor_contract_image']; ?>" width="200">
                    </div>
                </div>
            </div>
             </div>
           </div> 
          </form>     
         </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
		<!--js-->
    <script type="text/javascript">
       $(document).ready(function(){
            $('#show_password').click(function(){
             //alert($(this).is(':checked'));
                $(this).is(':checked') ? $('#password').attr('type', 'text') : $('#password').attr('type', 'password');
            });
        });
    </script>
	</body>
</html>