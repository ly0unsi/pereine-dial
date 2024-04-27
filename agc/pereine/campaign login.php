<?php
echo '<body>';

//f ($hide_timeclock_link < 1)
		//{echo '<a href="./timeclock.php?referrer=agent&amp;pl=$phone_login&amp;pp=$phone_pass&amp;VD_login=$VD_login&amp;VD_pass=$VD_pass> <font class="sb_text">'._QXZ("Timeclock").'</font></a>$grey_link<br />';}
echo '<!-- login page start-->';
echo '<div class="container-fluid">';
echo '<div class="row">';
echo '<div class="col-xl-5"><img class="bg-img-cover bg-center" src="../agc/dunzo/assets/images/campaign_login.jpg" alt="looginpage"></div>';
echo '<div class="col-xl-7 p-0">';
echo '<div class="login-card login-dark">';
echo '<div>';
echo '<div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="../vicidial/images/pereine-recrute.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo.png" alt="looginpage"></a></div>';
echo '<div class="login-main">';
echo "$DBoutput";
echo "<form name=\"vicidial_form\" id=\"vicidial_form\" action=\"$PHP_SELF\" method=\"post\" $LOGINformSUBtrigger>\n";
echo "<input type=\"hidden\" name=\"DB\" value=\"$DB\" />\n";
		echo "<input type=\"hidden\" name=\"JS_browser_height\" id=\"JS_browser_height\" value=\"\" />\n";
		echo "<input type=\"hidden\" name=\"JS_browser_width\" id=\"JS_browser_width\" value=\"\" />\n";
		echo "<input type=\"hidden\" name=\"phone_login\" value=\"$phone_login\" />\n";
		echo "<input type=\"hidden\" name=\"phone_pass\" value=\"$phone_pass\" />\n";
		echo "<input type=\"hidden\" name=\"LOGINvarONE\" id=\"LOGINvarONE\" value=\"$LOGINvarONE\" />\n";
		echo "<input type=\"hidden\" name=\"LOGINvarTWO\" id=\"LOGINvarTWO\" value=\"$LOGINvarTWO\" />\n";
		echo "<input type=\"hidden\" name=\"LOGINvarTHREE\" id=\"LOGINvarTHREE\" value=\"$LOGINvarTHREE\" />\n";
		echo "<input type=\"hidden\" name=\"LOGINvarFOUR\" id=\"LOGINvarFOUR\" value=\"$LOGINvarFOUR\" />\n";
		echo "<input type=\"hidden\" name=\"LOGINvarFIVE\" id=\"LOGINvarFIVE\" value=\"$LOGINvarFIVE\" />\n";
		echo "<input type=\"hidden\" name=\"hide_relogin_fields\" id=\"hide_relogin_fields\" value=\"$hide_relogin_fields\" />\n";
		//echo "<center><br /><b>$VDdisplayMESSAGE</b><br /><br />";
echo '<h4>Campaign login</h4>';
echo '<div class="form-group">';
echo '<label class="col-form-label">'._QXZ("User Login:").'</label>';
echo "<input class=\"form-control\" type=\"text\" name=\"VD_login\" size=\"20\" maxlength=\"20\" value=\"$VD_login\" />\n";

echo '</div>';
echo '<div class="form-group">';
echo '<label class="col-form-label">'._QXZ("User Password").'</label>';
echo '<div class="form-input position-relative">';
echo "<input class=\"form-control\" type=\"password\" name=\"VD_pass\" size=\"20\" maxlength=\"100\" placeholder=\"*********\" value=\"$VD_pass\" />\n";
echo '<div class="show-hide"><span class="show">                         </span></div>';
echo '<label class="col-form-label">'._QXZ("Campaign:").'</label>';
echo "<span id=\"LogiNCamPaigns\">$camp_form_code</span></font>\n<br>";
echo "<center><span  id=\"LogiNReseT\"></span>\n</center><br>";
		if ($login_submit_once > 0)
			{echo "<tr><td align=\"center\" colspan=\"2\"><input class=\"btn btn-primary btn-block w-100\" type=\"submit\" id=\"login_sub\" name=\"login_sub\" value=\""._QXZ("SUBMIT")."\" onclick=\"login_click()\"> &nbsp; \n";}
		else
			{echo "<tr><td align=\"center\" colspan=\"2\"><input class=\"btn btn-primary btn-block w-100\" type=\"submit\" name=\"SUBMIT\" value=\""._QXZ("SUBMIT")."\" /> &nbsp; \n";}
		//echo "<span id=\"LogiNReseT\"></span></td></tr>\n";
		echo "</form>";
		echo "$INSERT_before_body_close";
		echo "</body>";

?>
