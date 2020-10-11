<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
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

    <title>Add New Client - Kafeel</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

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
          <h2 class="az-content-title mg-b-5 mg-b-lg-8">Add New Client</h2>
          <p class="mg-b-0">Add New Client Record</p>
        </div>
        <div class="az-dashboard-header-right">
          <!--header--content-->
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
        <p class="error-message" id="error-display" style="color: red; display: none;">Error Message ! Email Exist</p>
        <form method="post" action="javascript:add_adv()" id="add_adv_form">
          <div class="row">
            <div class="col-md-4 col-12">
              <label for="full_name"><b>Full Name</b></label>
              <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Full Name" required="required">
            </div>
            <div class="col-md-4 col-12">
              <label for="username"><b>Email</b></label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="col-md-4 col-12">
              <label for="password"><b>Password</b></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
            </div>   
          </div>
          <br>
          <div class="row">
            <div class="col-md-6 col-12">
              <label for="mob1"><b>Mobile 1</b></label>
              <input type="text" name="mob1" id="mob1" class="form-control" placeholder="____-_______" required="required">
            </div>
            <div class="col-md-6 col-12">
              <label for="mob2"><b>Mobile 2</b></label>
              <input type="text" name="mob2" id="mob2" class="form-control" required="required" placeholder="____-_______">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6 col-12">
              <label for="nationality"><b>Nationality</b></label>
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
          <br>
          <div class="row">
            <div class="col-md-4 col-12">
              <label for="amount"><b>Amount</b></label>
              <input type="text" name="amount" id="amount" class="form-control" placeholder="Amount" required="required" min="1">
            </div>
            <div class="col-md-4 col-12">
              <label for="installments"><b>Installments</b></label>
              <input type="number" name="installments" id="installments" class="form-control" placeholder="Installment" required="required" min="1">
            </div>
            <div class="col-md-4 col-12">
              <label for="remaing_amount"><b>Remaining Amount</b></label>
              <input type="text" name="remaing_amount" id="remaing_amount" class="form-control" placeholder="Remaining Amount" required="required" min="1">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6 col-12">
              <label for="starting_date"><b>Starting Date</b></label>
              <input type="date" name="starting_date" id="starting_date" class="form-control" placeholder="Starting Date" required="required">
            </div>
            <div class="col-md-6 col-12">
              <label for="expire_date"><b>Expire Date</b></label>
              <input type="date" name="expire_date" id="expire_date" class="form-control" placeholder="Expire Date" required="required">
            </div>
          </div>
          <br>
          <div class="row text-center">
            <div class="col-md-5"></div>
            <div class="col-md-2 col-12">
              <button class="btn btn-az-primary btn-block btn-save">Save</button>
            </div>
            <div class="col-md-5"></div>
          </div>

        </form>
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

        // Input Masks
        $('#mob1').mask('9999-9999999');
        $('#mob2').mask('9999-9999999');

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

        $('#compositeline').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline2').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline3').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

        $('#compositeline4').sparkline('html', {
          lineColor: '#cecece',
          lineWidth: 2,
          spotColor: false,
          minSpotColor: false,
          maxSpotColor: false,
          highlightSpotColor: null,
          highlightLineColor: null,
          fillColor: '#f9f9f9',
          chartRangeMin: 0,
          chartRangeMax: 10,
          width: '100%',
          height: 20,
          disableTooltips: true
        });

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
      function add_adv()
      {
        $(".btn-save").attr("disabled",true);
        var datastring = $("#add_adv_form").serialize();
        $.ajax({
            type: "POST",
            url: "module/add-subadmin/ajax/add_new_sub_admin.php",
            data: datastring,
            success: function(data)
            {
              console.log(data);
              if(data==true)
              {
                location.reload();
              }
              else
              {
                console.log("Else Con");
                $(".error-message").show();
                $(".btn-save").attr("disabled",false);
                window.location="#error-display";
              }
            }
        });
      }
    </script>
    <script type="text/javascript">
      $("#adv-main-admin").addClass("active");
      $("#adv-main-admin").addClass("show");
      $("#add-new-sub-admin").addClass("active");
    </script>
  </body>
</html>
