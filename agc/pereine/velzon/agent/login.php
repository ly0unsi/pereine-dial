<?php
echo '<body>';
echo '';
echo '<!-- auth-page wrapper -->';
echo '<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">';
echo '<div class="bg-overlay"></div>';
echo '<!-- auth-page content -->';
echo '<div class="auth-page-content overflow-hidden pt-lg-5">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-12">';
echo '<div class="card overflow-hidden card-bg-fill galaxy-border-none">';
echo '<div class="row g-0">';
echo '<div class="col-lg-6">';
echo '<div class="p-lg-5 p-4 auth-one-bg h-100">';
echo '<div class="bg-overlay"></div>';
echo '<div class="position-relative h-100 d-flex flex-column">';
echo '<div class="mb-4">';
echo '<a href="#" class="d-block">';
echo '<img src="./pereine/velzon/assets/images/pereine2white.png" alt="" height="50">';
echo '</a>';
echo '</div>';
echo '<div class="mt-auto">';
echo '<div class="mb-3">';
echo '<i class="ri-double-quotes-l display-4 text-success"></i>';
echo '</div>';
echo '';
echo '<div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">';
echo '<div class="carousel-indicators">';
echo '<button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
echo '<button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>';
echo '<button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>';
echo '</div>';
echo '<div class="carousel-inner text-center text-white-50 pb-5">';
echo '<div class="carousel-item active">';
echo '<p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>';
echo '</div>';
echo '<div class="carousel-item">';
echo '<p class="fs-15 fst-italic">" The theme is really great with an amazing customer support."</p>';
echo '</div>';
echo '<div class="carousel-item">';
echo '<p class="fs-15 fst-italic">" Great! Clean code, clean design, easy for customization. Thanks very much! "</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- end carousel -->';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- end col -->';
echo '';
echo '<div class="col-lg-6">';
echo '<div class="p-lg-5 p-4">';
echo '<div>';
echo '<h5 class="text-primary">Welcome Agent !</h5>';
echo '<p class="text-muted">Sign in to continue to our crm.</p>';
echo '</div>';
echo '';
echo '<div class="mt-4">';
echo '<form class="theme-form" name="vicidial_form" id="vicidial_form" action="'.$agcPAGE.'" method="post" $LOGINformSUBtrigger>';
echo '<input type="hidden" name="DB" value="$DB" />';
echo '<input type="hidden" name="JS_browser_height" id="JS_browser_height" value="" />';
echo '<input type="hidden" name="JS_browser_width" id="JS_browser_width" value="" />';
echo '<input type="hidden" name="LOGINvarONE" id="LOGINvarONE" value="$LOGINvarONE" />';
echo '<input type="hidden" name="LOGINvarTWO" id="LOGINvarTWO" value="$LOGINvarTWO" />';
echo '<input type="hidden" name="LOGINvarTHREE" id="LOGINvarTHREE" value="$LOGINvarTHREE" />';
echo '<input type="hidden" name="LOGINvarFOUR" id="LOGINvarFOUR" value="$LOGINvarFOUR" />';
echo '<input type="hidden" name="LOGINvarFIVE" id="LOGINvarFIVE" value="$LOGINvarFIVE" />';
echo '<input type="hidden" name="hide_relogin_fields" id="hide_relogin_fields" value="$hide_relogin_fields" />';
echo '';
echo '<div class="mb-3">';
echo '<label for="username" class="form-label">'._QXZ("Phone Login").'</label>';
echo '<input type="text" name="phone_login" class="form-control" id="username" placeholder="Phone Login">';
echo '</div>';
echo '';
echo '<div class="mb-3">';
echo '<label for="phone_pass" class="form-label">'._QXZ("Phone Password").'</label>';
echo '<div class="position-relative auth-pass-inputgroup mb-3">';
echo '<input type="password" name="phone_pass" class="form-control pe-5 password-input" placeholder="Phone Password" id="password-input"><br>';
echo '<button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="mt-4">';
if ($login_submit_once > 0) {
    echo '<button id="login_sub" name="login_sub" class="btn btn-success w-100" type="submit" onclick="login_click()">'._QXZ("SUBMIT").'</button>';
} else {
    echo '<button name="SUBMIT" class="btn btn-success w-100" type="submit">'._QXZ("SUBMIT").'</button>';
}
echo '</div>';
echo '';
echo '</form>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '<!-- end col -->';
echo '</div>';
echo '<!-- end row -->';
echo '</div>';
echo '<!-- end card -->';
echo '</div>';
echo '<!-- end col -->';
echo '';
echo '</div>';
echo '<!-- end row -->';
echo '</div>';
echo '<!-- end container -->';
echo '</div>';
echo '<!-- end auth page content -->';
echo '';
echo '<!-- footer -->';
echo '<footer class="footer galaxy-border-none">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-lg-12">';
echo '<div class="text-center">';
echo '<p class="mb-0">&copy;';
echo '<script>document.write(new Date().getFullYear())</script> Pereine. Crafted with <i class="mdi mdi-heart text-danger"></i> by Pereine';
echo '</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</footer>';
echo '<!-- end Footer -->';
echo '</div>';
echo '<!-- end auth-page-wrapper -->';
echo '';
echo '<!-- JAVASCRIPT -->';
echo '<script src="./pereine/velzon/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>';
echo '<script src="./pereine/velzon/assets/libs/simplebar/simplebar.min.js"></script>';
echo '<script src="./pereine/velzon/assets/libs/node-waves/waves.min.js"></script>';
echo '<script src="./pereine/velzon/assets/libs/feather-icons/feather.min.js"></script>';
echo '<script src="./pereine/velzon/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>';
echo '<script src="./pereine/velzon/assets/js/plugins.js"></script>';
echo '';
echo '<!-- password-addon init -->';
echo '<script src="./pereine/velzon/assets/js/pages/password-addon.init.js"></script>';
echo '</body>';
?>