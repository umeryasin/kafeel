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

    <title>Trash</title>

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
          <h2 class="az-content-title mg-b-5 mg-b-lg-8">Trash</h2>
          <p class="mg-b-0">Deleted Advocates</p>
        </div>
        <div class="az-dashboard-header-right">
          <!--header--content-->
        </div><!-- az-dashboard-header-right -->
      </div><!-- az-content-header -->
      <div class="az-content-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>Username</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql_all="SELECT * FROM `wakeel_info` WHERE `wi_del_status`=1";
              $result_all=mysqli_query($ob->makeconn(),$sql_all);
              while($row_all=mysqli_fetch_assoc($result_all))
              {
                ?>
                <tr>
                  <td><?php echo $row_all['wi_username']; ?></td>
                  <td>
                    <button class="btn btn-info view-btn" value="<?php echo $row_all['wi_id']; ?>"><i class="far fa-eye"></i></button>
                    <button class="btn btn-warning recover" value="<?php echo $row_all['wi_id']; ?>">Recover</button>
                   <button class="btn btn-danger permenent-del" value="<?php echo $row_all['wi_id']; ?>">Perment Delete</button>
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
  <div id="modaldemo1" class="modal">
      <div class="modal-dialog wd-xl-400" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <button type="button" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <h5 class="modal-title mg-b-5">Edit Advocate Info</h5>
            <p class="mg-b-20">Edit info</p>
            <form method="post" action="javascript:update_adv()" id="update_adv_form">
              <div class="edit-embed-content"></div>
              <button class="btn btn-primary btn-block">Continue</button>
            </form>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="lib/jquery/jquery.min.js"></script>
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
      function add_adv()
      {
        var datastring = $("#add_adv_form").serialize();
        $.ajax({
            type: "POST",
            url: "module/advocate/ajax/add_wakeel_info.php",
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
                $(".error-message").css("display","block");
                $(".error-message").text(data);
              }
            }
        });
      }
    </script>
    <script type="text/javascript">
      function update_adv()
      {
        var datastring = $("#update_adv_form").serialize();
        $.ajax({
            type: "POST",
            url: "module/advocate/ajax/update_advocate_info.php",
            data: datastring,
            success: function(data)
            {
              console.log(data);
              alert(data);
              location.reload();
            }
        }); 
      }
    </script>
    <script type="text/javascript">
      $("#adv-main").addClass("active");
      $("#adv-main").addClass("show");
      $("#del-status-wakeel-info").addClass("active");
    </script>
    <script type="text/javascript">
      $(".edit-btn").on("click",function(){
        var editid=$(this).val();
        //console.log(editid);
        $.ajax({
          method:'POST',
          url:'module/advocate/ajax/get_advocate_edit_info.php',
          data:{editid:editid},
          success: function(data)
          {
            //console.log(data);
            $(".edit-embed-content").html(data);
          }
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
      $(".recover").on("click",function(){
        var recover_id=$(this).val();
        //alert(del_id);
        if(confirm("Sure you want to Recover this Wakeel Info ?"))
        {
            $.ajax({
            method: "POST",
            url: "module/advocate/ajax/recover_advocate_info.php",
            data: {recover_id:recover_id},
            success: function(data){
              //console.log(data);
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
      $(".permenent-del").on("click",function(){
        var permenent_del_id=$(this).val();
        //alert(del_id);
        if(confirm("Sure you want to Permenently Delete this Wakeel Info ?"))
        {
            $.ajax({
            method: "POST",
            url: "module/advocate/ajax/permenent_del_advocate_info.php",
            data: {permenent_del_id:permenent_del_id},
            success: function(data){
              //console.log(data);
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
