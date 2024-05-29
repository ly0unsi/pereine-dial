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
echo '<a href="index.html" class="d-block">';
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
echo '<h5 class="text-primary">'._QXZ("Agent web client: Campaign Login").'</h5>';
echo '<p class="text-muted">Sign in to continue to our crm.</p>';
echo '</div>';
echo '';
echo '<div class="mt-4">';
echo "<form name=\"vicidial_form\" id=\"vicidial_form\" action=\"$agcPAGE\" method=\"post\" $LOGINformSUBtrigger>";
	echo "<input type=\"hidden\" name=\"DB\" id=\"DB\" value=\"$DB\" />";
	echo "<input type=\"hidden\" name=\"JS_browser_height\" id=\"JS_browser_height\" value=\"\" />";
	echo "<input type=\"hidden\" name=\"JS_browser_width\" id=\"JS_browser_width\" value=\"\" />";
	echo "<input type=\"hidden\" name=\"admin_test\" id=\"admin_test\" value=\"$admin_test\" />";
	echo "<input type=\"hidden\" name=\"LOGINvarONE\" id=\"LOGINvarONE\" value=\"$LOGINvarONE\" />";
	echo "<input type=\"hidden\" name=\"LOGINvarTWO\" id=\"LOGINvarTWO\" value=\"$LOGINvarTWO\" />";
	echo "<input type=\"hidden\" name=\"LOGINvarTHREE\" id=\"LOGINvarTHREE\" value=\"$LOGINvarTHREE\" />";
	echo "<input type=\"hidden\" name=\"LOGINvarFOUR\" id=\"LOGINvarFOUR\" value=\"$LOGINvarFOUR\" />";
	echo "<input type=\"hidden\" name=\"LOGINvarFIVE\" id=\"LOGINvarFIVE\" value=\"$LOGINvarFIVE\" />";
    if (preg_match("/^YES$|^READONLY_LOGIN$|^READONLY_LOGINPHONE$/",$hide_relogin_fields))
		{
		echo "<input type=\"hidden\" name=\"hide_relogin_fields\" id=\"hide_relogin_fields\" value=\"$hide_relogin_fields\" />";
		echo "<input type=\"hidden\" name=\"phone_login\" id=\"phone_login\" value=\"$phone_login\" />";
		echo "<input type=\"hidden\" name=\"phone_pass\" id=\"phone_pass\" value=\"$phone_pass\" />";
		echo "<input type=\"hidden\" name=\"VD_login\" id=\"VD_login\" value=\"$VD_login\" />";
		echo "<input type=\"hidden\" name=\"VD_pass\" id=\"VD_pass\" value=\"$VD_pass\" />";
		}
	if (preg_match("/^READONLY_PHONE$/",$hide_relogin_fields))
		{
		echo "<input type=\"hidden\" name=\"hide_relogin_fields\" id=\"hide_relogin_fields\" value=\"\" />"; # RESET, as this is one-time
		echo "<input type=\"hidden\" name=\"phone_login\" id=\"phone_login\" value=\"$phone_login\" />";
		echo "<input type=\"hidden\" name=\"phone_pass\" id=\"phone_pass\" value=\"$phone_pass\" />";
		}
		//echo "<center><br /><b>$VDdisplayMESSAGE</b><br /><br />";
echo '<h4>Re login</h4>';
if (preg_match("/^READONLY_PHONE$/",$hide_relogin_fields))
{
echo '<div class="form-group">';
echo '<label class="col-form-label">'._QXZ("Phone Login:").'</label>';
echo "<b>$phone_login</b>";
echo "<label class=\"col-form-label\">"._QXZ("User Login").":</label>";
echo "<input class=\"form-control\" type=\"text\" name=\"VD_login\" size=\"20\" maxlength=\"20\" value=\"$VD_login\" />";
echo "<label class=\"col-form-label\">"._QXZ("User Password:")."</label>";
echo "<input type=\"password\" name=\"VD_pass\" size=\"20\" maxlength=\"100\" value=\"$VD_pass\" />";
echo '</div>';
}
if (preg_match("/^READONLY_LOGIN$/",$hide_relogin_fields))
{
echo "<label class=\"col-form-label\">"._QXZ("User Login").":</label>  ";
echo "<b>$VD_login</b>";
}
if (preg_match("/^READONLY_LOGINPHONE$/",$hide_relogin_fields))
{
echo "<label class=\"col-form-label\">"._QXZ("User Login").":</label>  ";
echo "<b>$VD_login</b>";
echo "<label class=\"col-form-label\">"._QXZ("Phone Login:")."</label> ";
echo "<b>$phone_login</b>";
}
if (!preg_match("/^YES$|^READONLY_LOGIN$|^READONLY_PHONE$|^READONLY_LOGINPHONE$/",$hide_relogin_fields))
{
echo "<label class=\"col-form-label\">"._QXZ("Phone Login:")."</label> ";
echo "<input type=\"text\" name=\"phone_login\" size=\"20\" maxlength=\"20\" value=\"$phone_login\" />";
echo "<label class=\"col-form-label\">"._QXZ("Phone Password:")."</label>  ";
echo "<input type=\"password\" name=\"phone_pass\" size=\"20\" maxlength=\"100\" value=\"$phone_pass\" />";
echo "<label class=\"col-form-label\">"._QXZ("User Login").":</label>  ";
echo "<input type=\"text\" name=\"VD_login\" size=\"20\" maxlength=\"20\" value=\"$VD_login\" />";
echo "<label class=\"col-form-label\">"._QXZ("User Password:")."</label>  ";
echo "<input type=\"password\" name=\"VD_pass\" size=\"20\" maxlength=\"100\" value=\"$VD_pass\" />";
}
echo "<tr><td align=\"right\" valign=\"top\"><label class=\"col-form-label\">"._QXZ("Campaign:")."</label>  ";
echo "<label class=\"col-form-label\"><span id=\"LogiNCamPaigns\">$camp_form_code</span></label>";
if ($login_submit_once > 0)
{echo "<input class=\"btn btn-primary btn-block w-100\" type=\"submit\" id=\"login_sub\" name=\"login_sub\" value=\""._QXZ("SUBMIT")."\" onclick=\"login_click()\"> &nbsp; ";}
else
{echo "<input class=\"btn btn-primary btn-block w-100\" type=\"submit\" name=\"SUBMIT\" value=\""._QXZ("SUBMIT")."\" /> ";}
echo "<span id=\"LogiNReseT\"><input class=\"btn btn-primary btn-block w-100\" type=\"submit\" value=\""._QXZ("Refresh Campaign List")."\" onclick=\"login_allowable_campaigns()\"></span>";
echo "<label class=\"col-form-label\"><br />"._QXZ("VERSION:")." $version &nbsp; &nbsp; &nbsp; "._QXZ("BUILD:")." $build</label>";
		//echo "<span id=\"LogiNReseT\"></span>";
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
		echo '<script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand';
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
		echo "$LoginLoadingBox";		
		echo "$INSERT_before_body_close";
		echo '</body>';
		?>