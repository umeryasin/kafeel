<?php
include('secure.php');
include_once('../db/db_config.php');
$ob=new DBConnection();
//$ob->makeconn()
$admin_id=$_SESSION['uts_wakeel_main_id_secret_id'];
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

    <title>Main Admin Dashboard - Kafeel</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.css" rel="stylesheet">
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
          <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
          <p class="mg-b-0">Your monitoring dashboard</p>
        </div>
      </div><!-- az-content-header -->
      <div class="az-content-body">
        <!--start-->
        <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6">

              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users fa-6x" style="color:#2fb12f;"></i>
                  </div>
                  <h2 class="card-category">Employees</h2>
                  <h3 class="card-title">
                    <a href="view-employees.php">
                      <?php
                      $sql_clients="SELECT COUNT(*) AS total FROM `client_info`";
                      $result_clients=mysqli_query($ob->makeconn(),$sql_clients);
                      $row_clients=mysqli_fetch_assoc($result_clients);
                      echo $row_clients['total'];
                      ?>
                    </a>
                  </h3>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                   <i class="fas fa-user-tie fa-6x" style="color:#6610f2;"></i>
                  </div>
                  <h2 class="card-category">Companies / Sponsers</h2>
                  <h3 class="card-title">
                    <a href="view-company-sponsers.php">
                    <?php
                    $sql_adv_total="SELECT COUNT(*) AS total FROM `wakeel_info` WHERE `wi_sub_admin_id`=$admin_id";
                    $result_adv_total=mysqli_query($ob->makeconn(),$sql_adv_total);
                    $row_adv_total=mysqli_fetch_assoc($result_adv_total);
                    echo $row_adv_total['total'];
                    ?>
                    </a>
                  </h3>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fas fa-users fa-6x" style="color:#2fb12f;"></i>
                  </div>
                  <h2 class="card-category">Clients</h2>
                  <h3 class="card-title">
                  <a href="view-subadmin-active.php">
                    <?php
                    $sql_adv_act="SELECT COUNT(*) AS total FROM `admin_info` WHERE admin_status=1";
                    $result_adv_act=mysqli_query($ob->makeconn(),$sql_adv_act);
                    $row_adv_act=mysqli_fetch_assoc($result_adv_act);
                    echo $row_adv_act['total'];
                    ?>
                  </a>
                  </h3>
                </div>
              </div>
            </div>

          </div>
        <!--end-->
      </div><!-- az-content-body -->
      <!--footer--start-->
      <?php include_once('nav/footer.php'); ?>
      <!--footer--end-->
    </div><!-- az-content -->


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="lib/raphael/raphael.min.js"></script>
    <script src="lib/morris.js/morris.min.js"></script>
    <script src="lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="lib/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="lib/fontawesome-free/js/all.js"></script>

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


        var morrisData = [
          { y: 'Oct 01', a: 95000, b: 70000 },
          { y: 'Oct 05', a: 75000,  b: 55000 },
          { y: 'Oct 10', a: 50000,  b: 40000 },
          { y: 'Oct 15', a: 75000,  b: 65000 },
          { y: 'Oct 20', a: 50000,  b: 40000 },
          { y: 'Oct 25', a: 80000, b: 90000 },
          { y: 'Oct 30', a: 75000,  b: 65000 }
        ];

        new Morris.Bar({
          element: 'morrisBar1',
          data: morrisData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Online', 'Offline'],
          barColors: ['#560bd0', '#00cccc'],
          preUnits: '$',
          barSizeRatio: 0.55,
          gridTextSize: 11,
          gridTextColor: '#494c57',
          gridTextWeight: 'bold',
          gridLineColor: '#999',
          gridStrokeWidth: 0.25,
          hideHover: 'auto',
          resize: true,
          padding: 5
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#fff',
          color: '#60adff',
          colors: {
            mo: '#9fceff',
            fl: '#60adff',
            or: '#409cff',
            ca: '#005cbf',
            tx: '#005cbf',
            wy: '#005cbf',
            ny: '#007bff'
          },
          hoverColor: '#222',
          enableZoom: false,
          borderWidth: 1,
          borderColor: '#fff',
          hoverOpacity: .85
        });

      });
    </script>
    <script type="text/javascript">
      $("#dash-main").addClass("active");
      $("#dash-main").addClass("show");
      $("#dash-home").addClass("active");
    </script>
  </body>
</html>
