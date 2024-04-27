<?php
echo '<body>';

//f ($hide_timeclock_link < 1)
		//{echo '<a href="./timeclock.php?referrer=agent&amp;pl=$phone_login&amp;pp=$phone_pass&amp;VD_login=$VD_login&amp;VD_pass=$VD_pass> <font class="sb_text">'._QXZ("Timeclock").'</font></a>$grey_link<br />';}
echo '<!-- login page start-->';
echo '<div class="container-fluid">';
echo '<div class="row">';
echo '<div class="col-xl-5"><img class="bg-img-cover bg-center" src="../agc/dunzo/assets/images/login.jpg" alt="looginpage"></div>';
echo '<div class="col-xl-7 p-0">';
echo '<div class="login-card login-dark">';
echo '<div>';
echo '<div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="../vicidial/images/pereine-recrute.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt="looginpage"></a></div>';
echo '<div class="login-main">';
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
echo '<h4>Phone login</h4>';

echo '<div class="form-group">';
echo '<label class="col-form-label">'._QXZ("Phone Login:").'</label>';
echo '<input class="form-control" name="phone_login" type="text" required placeholder="" value="">';
echo '</div>';
echo '<div class="form-group">';
echo '<label class="col-form-label">'._QXZ("Phone Password").'</label>';
echo '<div class="form-input position-relative">';
echo '<input class="form-control" type="password" name="phone_pass" required maxlength="100" placeholder="*********" value="">';
echo '<div class="show-hide"><span class="show">                         </span></div>';
echo '</div>';
echo '</div>';
echo '<div class="form-group mb-0">';

if ($login_submit_once > 0)
		{
            echo '<button id="login_sub" name="login_sub" class="btn btn-primary btn-block w-100" type="submit" onclick="login_click()">'._QXZ("SUBMIT").'</button>';
        }
	else
		{
            echo '<button name="SUBMIT" class="btn btn-primary btn-block w-100" type="submit">'._QXZ("SUBMIT").'</button>';
        }

echo '</div>';

echo '</form>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo "$LoginLoadingBox";
echo "$INSERT_before_body_close";
echo '</body>';

?>
