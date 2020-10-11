<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
$admin_id=$_SESSION['wakeel_uts_admin_id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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

    <title>My Profile</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/morris.js/morris.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
  <body class="az-body az-body-sidebar">
    <!--head nav-start-->
    <?php include_once('nav/header.php'); ?>
    <!--head nav-end-->
    <div class="az-content az-content-dashboard-two">
      <!--second header-start-->
    <?php include_once('nav/second_header.php'); ?>
      <!--second header-end-->
      <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title mg-b-5 mg-b-lg-8">Profile</h2>
          <p class="mg-b-0">Edit Profile</p>
        </div>
        <div class="az-dashboard-header-right">
          <!--header--content-->
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
          <div class="row">
            <div class="col-md-8">
              <?php
              $sql_all="SELECT * FROM `admin_info` WHERE `admin_id`=$admin_id";
              $result_all=mysqli_query($ob->makeconn(),$sql_all);
              $row_all=mysqli_fetch_assoc($result_all);
              ?>
              <p style="color:red; display:none;" id="error_message_log">Email Already Exist</p>
              <form method="post" action="javascript:update_form()" id="update_admin">
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Full Name:</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Full Name" required="required" value="<?php echo $row_all['admin_name']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Email</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required" value="<?php echo $row_all['admin_email']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Password</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required" value="<?php echo $row_all['admin_password']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Mobile 1</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="text" name="mob1" id="mob1" class="form-control" placeholder="Mobile 1" required="required" value="<?php echo $row_all['admin_mob1']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Mobile 2</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="text" name="mob2" id="mob2" class="form-control" placeholder="Mobile 2" required="required" value="<?php echo $row_all['admin_mob2']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Nationality</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <select name="nationality" id="nationality" class="form-control" required="required">
                     <?php
                     $sql_countries="SELECT * FROM `apps_countries` ORDER BY `country_name` ASC";
                     $result_countries=mysqli_query($ob->makeconn(),$sql_countries);
                     while($row_coutries=mysqli_fetch_assoc($result_countries))
                     {
                      ?>
                      <option <?php
                      if($row_all['admin_nationality_id']==$row_coutries['id'])
                      {
                        echo "selected";
                      }
                      ?> value="<?php echo $row_coutries['id']; ?>"><?php echo $row_coutries['country_name']; ?></option>
                      <?php
                     }
                     ?>
                    </select>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Amount</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="text" name="amount" id="amount" class="form-control" placeholder="Amount" required="required" value="<?php echo $row_all['admin_amount']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Installment</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="number" name="installment" id="installment" class="form-control" placeholder="Installment" required="required" value="<?php echo $row_all['admin_installment']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Remaining Amount</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="text" name="remaining_amount" id="remaining_amount" class="form-control" placeholder="Remaining Amount" required="required" value="<?php echo $row_all['admin_remaining_amount']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Starting Date</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="date" name="starting_date" id="starting_date" class="form-control" placeholder="Starting Date" required="required" value="<?php echo $row_all['admin_starting_date']; ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2 col-4">
                    <p><b>Expire Date</b></p>
                  </div>
                  <div class="col-md-5 col-8">
                    <input type="date" name="expire_date" id="expire_date" class="form-control" placeholder="Expire Date" required="required" value="<?php echo $row_all['admin_expire_date']; ?>">
                  </div>
                </div>
                <br>
                <div class="row text-center">
                  <div class="col-md-2 col-4"></div>
                  <div class="col-md-2 col-4">
                    <button class="btn btn-az-primary btn-block">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div><!-- az-content-body -->
      <!--footer--start-->
      <?php include_once('nav/footer.php'); ?>
      <!--footer--end-->
    </div><!-- az-content -->


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
    <script src="lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

    <script src="js/azia.js"></script>

    <script>
      $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
          e.preventDefault();
          $(this).parent().toggleClass('show');
          $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
          e.stopPropagation();

          // closing of sidebar menu when clicking outside of it
          if(!$(e.target).closest('.az-header-menu-icon').length) {
            var sidebarTarg = $(e.target).closest('.az-sidebar').length;
            if(!sidebarTarg) {
              $('body').removeClass('az-sidebar-show');
            }
          }
        });


        $('#azSidebarToggle').on('click', function(e){
          e.preventDefault();

          if(window.matchMedia('(min-width: 992px)').matches) {
            $('body').toggleClass('az-sidebar-hide');
          } else {
            $('body').toggleClass('az-sidebar-show');
          }
        })

        /* ----------------------------------- */
        /* Dashboard content */

       
        $(document).ready(function(){
          $('.select2').select2({
            placeholder: 'Choose one'
          });

          $('.select2-no-search').select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Choose one'
          });
        });

      });
    </script>
    <script type="text/javascript">
      function update_form()
      {
        //
        var datastring = $("#update_admin").serialize();
        $.ajax({
            type: "POST",
            url: "module/admin/ajax/update_admin_info.php",
            data: datastring,
            success: function(data)
            {
              console.log(data);
              if(data==true)
              {
                //location.reload();
                window.location='logout.php';
              }
              else
              {
                $("#error_message_log").show();
              }
            }
        });
        //
      }
    </script>
    <script type="text/javascript">
      /*Input Validation*/
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
      setInputFilter(document.getElementById("remaining_amount"), function(value) {
        return /^-?\d*[.,]?\d*$/.test(value); });
      setInputFilter(document.getElementById("amount"), function(value) {
        return /^-?\d*[.,]?\d*$/.test(value); });
    </script>
  </body>
</html>
