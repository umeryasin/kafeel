    <div class="az-sidebar">
      <div class="az-sidebar-header">
        <a href="index.php" class="az-logo">Kaf<span>ee</span>l</a>
      </div><!-- az-sidebar-header -->
      <div class="az-sidebar-loggedin">
        <div class="az-img-user online">
          <i class="fas fa-user fa-2x"></i>
        </div>
        <div class="media-body">
          <h6><?php echo $_SESSION['wakeel_uts_admin_name']; ?></h6>
          <span>Client</span>
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
          <li class="nav-item" id="adv-main">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i>Company</a>
            <nav class="nav-sub">
              <a href="add-new-company.php" class="nav-sub-link" id="add-new-adv">Add New Company</a>
              <a href="view-companies.php" class="nav-sub-link" id="view-adv-active">View Companies</a>
               <a href="search-companies.php" class="nav-sub-link" id="search-adv">Search Companies</a>
                <a href="trash.php" class="nav-sub-link" id="del-status-wakeel-info">Trash</a>
            </nav>
          </li><!-- nav-item -->
         
        </ul><!-- nav -->
      </div><!-- az-sidebar-body -->
    </div><!-- az-sidebar -->