    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="index.php" class="az-logo">Kaf<span>ee</span>l</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="upload/<?php echo $_SESSION['uts_wakeel_main_secret_pic']; ?>" alt=""></div>
        <div class="media-body">
          <h6><?php echo $_SESSION['uts_wakeel_main_secret_name']; ?></h6>
          <span>Admin</span>
        </div><!-- media-body -->
      </div><!-- az-sidebar-loggedin -->
      <div class="az-sidebar-body">
        <ul class="nav">
          <li class="nav-label">Main Menu</li>
          <li class="nav-item" id="dash-main">
            <a href="index.php" class="nav-link with-sub"><i class="typcn typcn-clipboard"></i>Dashboard</a>
            <nav class="nav-sub">
              <a href="index.php" class="nav-sub-link" id="dash-home">Dashboard</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item" id="adv-main-admin">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Sub Admin Clients</a>
            <nav class="nav-sub">
              <a href="add-new-sub-admin.php" class="nav-sub-link" id="add-new-sub-admin">Add New Client</a>
              <a href="view-subadmin-active.php" class="nav-sub-link" id="view-sub-admin">View Clients</a>
               <a href="search-subadmin.php" class="nav-sub-link" id="search-adv">Search Clients</a>
               <!--
                <a href="del-status-wakeel-info.php" class="nav-sub-link" id="del-status-wakeel-info">Trash</a>-->
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item" id="adv-company-main">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Companies</a>
            <nav class="nav-sub">
              <a href="add-new-company.php" class="nav-sub-link" id="add-new-company">Add New Company</a>
              <a href="view-company.php" class="nav-sub-link" id="add-view-company">View Company</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item" id="adv-company-sps-main">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Companies / Sponsers</a>
            <nav class="nav-sub">
              <a href="view-company-sponsers.php" class="nav-sub-link" id="add-view-company-sponsers">View Companies / Sponsers</a>
            </nav>
          </li><!-- nav-item -->
          <li class="nav-item" id="adv-emp-main">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Employees</a>
            <nav class="nav-sub">
              <a href="view-employees.php" class="nav-sub-link" id="add-view-emp-main">View Employees</a>
            </nav>
          </li><!-- nav-item -->
         
        </ul><!-- nav -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->