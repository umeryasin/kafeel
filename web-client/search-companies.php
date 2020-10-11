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

    <title>Search Companies - Kafeel</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src='multifilter/multifilter.js'></script>

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
          <h2 class="az-content-title mg-b-5 mg-b-lg-8">Search Companies</h2>
          <p class="mg-b-0">Apply Filter</p>
        </div>
        <div class="az-dashboard-header-right">
          <!--header--content-->
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
<div class='container'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src='multifilter/multifilter.js'></script>
<script type='text/javascript'>
    //<![CDATA[
      $(document).ready(function() {
        $('.filter').multifilter()
      })
    //]]>
  </script>

  <div class='filters'>
    <div class='row'>
      <div class='col-md-3'>
        <div class='filter-container'>
        <input autocomplete='off' class='filter form-control' name='username' placeholder='User Name' data-col='User Name'/>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='filter-container'>
        <input autocomplete='off' class='filter form-control' name='mob1' placeholder='Mobile 1' data-col='Mobile 1'/>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='filter-container'>
        <input autocomplete='off' class='filter form-control' name='mob2' placeholder='Mobile 2' data-col='Mobile 2'/>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='filter-container'>
        <input autocomplete='off' class='filter form-control' name='nationality' placeholder='Nationality' data-col='Nationality'/>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class='container'>
  <table class='table table-hover table-bordered table-striped'>
    <thead>
      <th>User Name</th>
      <th>Mobile 1</th>
      <th>Mobile 2</th>
      <th>Nationality</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php
      $sql_all="SELECT * FROM `wakeel_info` WHERE `wi_sub_admin_id`=$admin_id AND `wi_del_status`=0 ORDER BY wi_username ASC";
      $result_all=mysqli_query($ob->makeconn(),$sql_all);
      while($row_all=mysqli_fetch_assoc($result_all))
      {
        ?>
        <tr>
          <td><?php echo $row_all['wi_username']; ?></td>
          <td><?php echo $row_all['wi_mob1']; ?></td>
          <td><?php echo $row_all['wi_mob2']; ?></td>
          <td>
            <?php 
              $sql_con="SELECT * FROM `apps_countries` WHERE `id`=".$row_all['wi_nationality_id'];
              $result_con=mysqli_query($ob->makeconn(),$sql_con);
              $row_con=mysqli_fetch_assoc($result_con);
              echo $row_con['country_name']; 
            ?>  
          </td>
          <td>
            <a href="view-single-client.php?cid=<?php echo $row_all['wi_id']; ?>">View</a>
            <!--<button class="btn btn-info view-btn" value="<?php echo $row_all['wi_id']; ?>"><i class="far fa-eye"></i></button>-->
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
      </div><!-- az-content-body -->
      <!--footer--start-->
      <?php include_once('nav/footer.php'); ?>
      <!--footer--end-->
    </div><!-- az-content -->
    <!--modal-->

    
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>
    <script src="lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

    <script src="js/azia.js"></script>
    <script src="module/advocate/custom.js"></script>
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
      $(".view-btn").on("click",function(){
        var view_id=$(this).val();
        //alert(view_id);
        window.open("view-single-client.php?cid="+view_id, "_blank");
      });
    </script>

  
    <script type="text/javascript">
      $("#adv-main").addClass("active");
      $("#adv-main").addClass("show");
      $("#search-adv").addClass("active");
    </script>
  </body>
</html>
