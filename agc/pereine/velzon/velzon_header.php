<header id="page-topbar" style="background: white;">
        <div class="layout-width">
          <div class="navbar-header">
            <div class="d-flex">
              <!-- LOGO -->
              <div class="navbar-brand-box horizontal-logo">
                <a href="#" class="logo logo-dark">
                  <span class="logo-sm">
                    <img src="../agc/pereine/velzon/assets/images/pereine.png" alt="" height="40">
                  </span>
                  <span class="logo-lg">
                    <img src="../agc/pereine/velzon/assets/images/pereine.png" alt="" height="40">
                  </span>
                </a>
                <a href="#" class="logo logo-light">
                  <span class="logo-sm">
                    <img src="../agc/pereine/velzon/assets/images/pereine.png" alt="" height="40">
                  </span>
                  <span class="logo-lg">
                    <img src="../agc/pereine/velzon/assets/images/pereine.png" alt="" height="40">
                  </span>
                </a>
              </div>
              <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none" id="topnav-hamburger-icon">
                <span class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </button>
              <!-- App Search-->
              
            </div>
            <div class="d-flex align-items-center">
              <div class="dropdown d-md-none topbar-head-dropdown header-item">
                <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-search fs-22"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                  <form class="p-3">
                    <div class="form-group m-0">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        <button class="btn btn-primary" type="submit">
                          <i class="mdi mdi-magnify"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="dropdown ms-1 topbar-head-dropdown header-item">
                <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img id="header-lang-img" src="../agc/pereine/velzon/assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
					<img src="../agc/pereine/velzon/assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
					<span class="align-middle">English</span>
				</a>

				<!-- item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
					<img src="../agc/pereine/velzon/assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
					<span class="align-middle">Española</span>
				</a>

				<!-- item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
					<img src="../agc/pereine/velzon/assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
				</a>

				<!-- item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
					<img src="../agc/pereine/velzon/assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
					<span class="align-middle">Italiana</span>
				</a>

				<!-- item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
					<img src="../agc/pereine/velzon/assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
					<span class="align-middle">русский</span>
				</a>

				<!-- item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
					<img src="../agc/pereine/velzon/assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
					<span class="align-middle">中国人</span>
				</a>

				<!-- item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
					<img src="../agc/pereine/velzon/assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
					<span class="align-middle">français</span>
				</a>

				<!-- item-->
				<a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
					<img src="../agc/pereine/velzon/assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
					<span class="align-middle">Arabic</span>
				</a>
                </div>
              </div>
              <div class="ms-1 header-item d-none d-sm-flex">
                <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode">
                  <i class='bx bx-moon fs-22'></i>
                </button>
              </div>
              
              <div class="dropdown ms-sm-3 header-item topbar-user">
                <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="d-flex align-items-center">
                    <img class="rounded-circle header-profile-user" src="../abdellah/agc/pereine/velzon/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    <span class="text-start ms-xl-2">
                      <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Agent Screen</span>
                      <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text"><?php echo "$VD_login-$SIP_user" ?></span>
                    </span>
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <h6 class="dropdown-header">Welcome</h6>
                  <a class="dropdown-item" href="pages-profile.html">
                    <i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                    <span class="align-middle">Profile</span>
                  </a>
                  <a class="dropdown-item" href="apps-chat.html">
                    <i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                    <span class="align-middle">Messages</span>
                  </a>
                  <a class="dropdown-item" href="pages-faqs.html">
                    <i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i>
                    <span class="align-middle">Help</span>
                  </a>
                  <a href="#" onclick="NormalLogout();return false;needToConfirmExit = false;"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
</header>