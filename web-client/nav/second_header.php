<div class="az-header">
        <div class="container-fluid">
          <div class="az-header-left">
            <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
          </div><!-- az-header-left -->
          <div class="az-header-right">
            <div class="dropdown az-profile-menu">
              <a href="" class="az-img-user">
                <i class="fas fa-users-cog fa-2x"></i>
              </a>
              <div class="dropdown-menu">
                <div class="az-dropdown-header d-sm-none">
                  <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                </div>
                <div class="az-header-profile">
                  <h6><?php echo $_SESSION['wakeel_uts_admin_name']; ?></h6>
                  <span>Client</span>
                </div><!-- az-header-profile -->

                <a href="my-profile.php" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                <a href="logout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
              </div><!-- dropdown-menu -->
            </div>
          </div><!-- az-header-right -->
        </div><!-- container -->
      </div><!-- az-header -->