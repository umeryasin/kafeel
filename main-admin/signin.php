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

    <title>Login | Wakeel</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo">Kaf<span>ee</span>l</h1>

        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>

          <form action="javascript:login()" method="post" id="login_form">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required="required">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required="required">
            </div><!-- form-group -->
            <button class="btn btn-az-primary btn-block">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p class="error-message" style="display: none; color: red;">Incorrect Login Information</p>
          <p><a href="#">Forgot password?</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>

    <script src="js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
    <script type="text/javascript" src="module/main_admin_login/custom.js"></script>
  </body>
</html>
