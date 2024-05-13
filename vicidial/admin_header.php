<?php
# admin_header.php - VICIDIAL administration header
#
# Copyright (C) 2023  Matt Florell <vicidial@gmail.com>    LICENSE: AGPLv2
# 

# CHANGES
# 90310-0709 - First Build
# 90508-0542 - Added Call Menu option, changed script to use long PHP tags
# 90514-0605 - Added audio prompt selection functions
# 90530-1206 - Changed List Mix to allow for 40 mixes and a default populate option
# 90531-2339 - Added Dynamic options for Call Menu
# 90612-0852 - Changed relative links
# 90635-0943 - Added javascript for dynamic menus in In-Groups
# 90627-0548 - Added no-agent-no-queue options
# 90628-1016 - Added Text-to-speech options
# 90830-2213 - Added Music On Hold options
# 90904-1534 - Added launch_moh_chooser
# 90916-2334 - Added Voicemail options
# 91223-1030 - Added VIDPROMPT options for in-group routing in Call Menus
# 100311-2210 - Added callcard_enabled Admin element
# 100428-1039 - Added custom fields display
# 100507-1339 - Added copy carrier submenu
# 100616-2350 - Added VIDPROMPT call menu options
# 100728-0904 - Changed Lead Loader link to the new 3rd gen lead loader
# 100802-2127 - Changed Admin to point to links page instead of Phones listings
# 100831-2255 - Added password strength checking function
# 100914-1311 - Removed other links for reports-only users
# 101022-1323 - Added IGU_selectall function
# 101107-1133 - Added auto-refresh code
# 110215-1720 - Added the Add a new lead link
# 110322-1228 - Added user ID logged in as next to Logout link
# 110624-1439 - Added Screen Labels sub-section to Admin
# 110831-2048 - Added AC-CID to campaign submenu
# 110922-1707 - Added RA-EXTEN to campaign submenu
# 111015-2305 - Added Contacts menu to Admin
# 111106-0939 - Changes for user group restrictions
# 111116-0208 - Added ALT and ADDR3 in-group handle methods
# 120402-2134 - Changed lead loader link to fourth gen
# 121116-1412 - Added QC functionality
# 121123-0911 - Added Call Times Holidays Inbound functionality
# 121214-2238 - Added email menus
# 130221-1830 - Added Level 8 disable add option
# 130610-1040 - Finalized changing of all ereg instances to preg
# 130615-2314 - Changed Reports only and QC only headers
# 130824-2324 - Changed to mysqli PHP functions
# 140126-1022 - Added VMAIL_NO_INST option
# 140706-0828 - Incorporated QC includes into code
# 141001-2200 - Finalized adding QXZ translation to all admin files
# 141128-1009 - Added code for languages section
# 141230-0927 - Changed single-quote QXZ arguments to double-quotes
# 150227-1614 - Formatting issue #831
# 150307-0915 - Fixes for QXZ
# 150806-1023 - Added code for Admin -> Settings Containers
# 150808-2043 - Added compatibility for custom fields data option
# 151020-0654 - Added Status Groups
# 151203-1922 - Fix for javascript timezone issues in editing of timeclock entries
# 151212-0858 - Added Chat link at top of page
# 160312-1656 - Added FORM_selectall javascript, also used it to replace IGU_selectall
# 160325-1428 - Changed layout of sidebar links
# 160327-0146 - Changes to design
# 160328-1930 - Fixed display bugs
# 160330-1600 - Redesign of Admin sub-menu and added icons
# 160404-0934 - design changes
# 160429-1014 - Added admin_row_click option
# 160507-2324 - Added screen colors section
# 160611-2229 - Added style for diff on admin changes
# 160617-1426 - Added link from screen colors to system settings screen color settings
# 161101-2129 - Added user_new_lead_limit Users subhead
# 161103-2136 - Added agent_soundboards option
# 170113-1633 - Added dynamic call menu in-group option DYNAMIC_INGROUP_VAR for use with cm_phonesearch.agi
# 170304-1354 - Added Automated Reports section to Admin
# 170409-0757 - Added IP Lists
# 170623-2113 - Changed password strength parameters
# 170821-2010 - Fix for issue #1036
# 180213-1657 - Added CID Groups
# 180512-1105 - Changed to dynamic DB help
# 180614-2200 - Modified audio chooser window to appear at height where mouse was clicked in JS functions
# 180618-2300 - Modified calls to audio file chooser function
# 190121-1803 - Added special streamlined header option for mobile devices
# 190530-1013 - Added javascript for active list change feature
# 191028-1739 - Added VM Message Groups
# 200206-2314 - Added password length indicator
# 200407-1534 - Added play_browser_sound javascript function for campaigns/ingroups
# 200409-1720 - Reorganized the Inbound section
# 200508-1052 - Added copy_prev_cm_option() JS function
# 201108-1232 - Added no_header option within short_header option
# 210226-1547 - Added Copy Phone link
# 210306-0902 - Changes for new QC module
# 210707-0730 - Added header links for timezones, phone codes and postal codes
# 210907-1904 - Added new OWNERCUSTOMx handle methods for menu options
# 211208-1920 - Added Queue Groups to admin sidebar and sub-menu
# 211215-2225 - Added User Group options for altered header display
# 220827-0941 - Added ConfBridge top menu options
# 220829-1017 - Changed 'admin.php' links to "$ADMIN" variable
# 220830-2303 - Fix for ADMIN change, issue #1370
# 221214-1321 - Added HTML color chooser
# 221230-2230 - Added Postal Codes Cities submenu
# 230118-0835 - Added Agent Call Hangup Change function
# 230613-1835 - Added VIDPROMPTSPECIAL options
#

$HTMLcolors = 'IndianRed,CD5C5C|LightCoral,F08080|Salmon,FA8072|DarkSalmon,E9967A|LightSalmon,FFA07A|Crimson,DC143C|Red,FF0000|FireBrick,B22222|DarkRed,8B0000|Pink,FFC0CB|LightPink,FFB6C1|HotPink,FF69B4|DeepPink,FF1493|MediumVioletRed,C71585|PaleVioletRed,DB7093|LightSalmon,FFA07A|Coral,FF7F50|Tomato,FF6347|OrangeRed,FF4500|DarkOrange,FF8C00|Orange,FFA500|Gold,FFD700|Yellow,FFFF00|LightYellow,FFFFE0|LemonChiffon,FFFACD|LightGoldenrodYellow,FAFAD2|PapayaWhip,FFEFD5|Moccasin,FFE4B5|PeachPuff,FFDAB9|PaleGoldenrod,EEE8AA|Khaki,F0E68C|DarkKhaki,BDB76B|Lavender,E6E6FA|Thistle,D8BFD8|Plum,DDA0DD|Violet,EE82EE|Orchid,DA70D6|Fuchsia,FF00FF|Magenta,FF00FF|MediumOrchid,BA55D3|MediumPurple,9370DB|RebeccaPurple,663399|BlueViolet,8A2BE2|DarkViolet,9400D3|DarkOrchid,9932CC|DarkMagenta,8B008B|Purple,800080|Indigo,4B0082|SlateBlue,6A5ACD|DarkSlateBlue,483D8B|MediumSlateBlue,7B68EE|GreenYellow,ADFF2F|Chartreuse,7FFF00|LawnGreen,7CFC00|Lime,00FF00|LimeGreen,32CD32|PaleGreen,98FB98|LightGreen,90EE90|MediumSpringGreen,00FA9A|SpringGreen,00FF7F|MediumSeaGreen,3CB371|SeaGreen,2E8B57|ForestGreen,228B22|Green,008000|DarkGreen,006400|YellowGreen,9ACD32|OliveDrab,6B8E23|Olive,808000|DarkOliveGreen,556B2F|MediumAquamarine,66CDAA|DarkSeaGreen,8FBC8B|LightSeaGreen,20B2AA|DarkCyan,008B8B|Teal,008080|Aqua,00FFFF|Cyan,00FFFF|LightCyan,E0FFFF|PaleTurquoise,AFEEEE|Aquamarine,7FFFD4|Turquoise,40E0D0|MediumTurquoise,48D1CC|DarkTurquoise,00CED1|CadetBlue,5F9EA0|SteelBlue,4682B4|LightSteelBlue,B0C4DE|PowderBlue,B0E0E6|LightBlue,ADD8E6|SkyBlue,87CEEB|LightSkyBlue,87CEFA|DeepSkyBlue,00BFFF|DodgerBlue,1E90FF|CornflowerBlue,6495ED|MediumSlateBlue,7B68EE|RoyalBlue,4169E1|Blue,0000FF|MediumBlue,0000CD|DarkBlue,00008B|Navy,000080|MidnightBlue,191970|Cornsilk,FFF8DC|BlanchedAlmond,FFEBCD|Bisque,FFE4C4|NavajoWhite,FFDEAD|Wheat,F5DEB3|BurlyWood,DEB887|Tan,D2B48C|RosyBrown,BC8F8F|SandyBrown,F4A460|Goldenrod,DAA520|DarkGoldenrod,B8860B|Peru,CD853F|Chocolate,D2691E|SaddleBrown,8B4513|Sienna,A0522D|Brown,A52A2A|Maroon,800000|White,FFFFFF|Snow,FFFAFA|HoneyDew,F0FFF0|MintCream,F5FFFA|Azure,F0FFFF|AliceBlue,F0F8FF|GhostWhite,F8F8FF|WhiteSmoke,F5F5F5|SeaShell,FFF5EE|Beige,F5F5DC|OldLace,FDF5E6|FloralWhite,FFFAF0|Ivory,FFFFF0|AntiqueWhite,FAEBD7|Linen,FAF0E6|LavenderBlush,FFF0F5|MistyRose,FFE4E1|Gainsboro,DCDCDC|LightGray,D3D3D3|Silver,C0C0C0|DarkGray,A9A9A9|Gray,808080|DimGray,696969|LightSlateGray,778899|SlateGray,708090|DarkSlateGray,2F4F4F|Black,000000';

$stmt="SELECT admin_home_url,enable_tts_integration,callcard_enabled,custom_fields_enabled,allow_emails,level_8_disable_add,allow_chats,enable_languages,admin_row_click,admin_screen_colors,user_new_lead_limit,user_territories_active,qc_features_active,agent_soundboards,enable_drop_lists,allow_ip_lists,admin_web_directory from system_settings;";
$rslt=mysql_to_mysqli($stmt, $link);
$row=mysqli_fetch_row($rslt);
$admin_home_url_LU =		$row[0];
$SSenable_tts_integration = $row[1];
$SScallcard_enabled =		$row[2];
$SScustom_fields_enabled =	$row[3];
$SSemail_enabled =			$row[4];
$SSlevel_8_disable_add =	$row[5];
$SSchat_enabled =			$row[6];
$SSenable_languages =		$row[7];
$SSadmin_row_click =		$row[8];
$SSadmin_screen_colors =	$row[9];
$SSuser_new_lead_limit =	$row[10];
$SSuser_territories_active = $row[11];
$SSqc_features_active =		$row[12];
$SSagent_soundboards =		$row[13];
$SSenable_drop_lists =		$row[14];
$SSallow_ip_lists =			$row[15];
$SSadmin_web_directory =	$row[16];

if (strlen($SSadmin_home_url) > 5) {$admin_home_url_LU = $SSadmin_home_url;}
if(!isset($ADMIN)){$ADMIN = "../$SSadmin_web_directory/admin.php";}

$SSmenu_background='015B91';
$SSframe_background='D9E6FE';
$SSstd_row1_background='9BB9FB';
$SSstd_row2_background='B9CBFD';
$SSstd_row3_background='8EBCFD';
$SSstd_row4_background='B6D3FC';
$SSstd_row5_background='A3C3D6';
$SSalt_row1_background='BDFFBD';
$SSalt_row2_background='99FF99';
$SSalt_row3_background='CCFFCC';
$SSbutton_color='EFEFEF';

if ($SSadmin_screen_colors != 'default')
	{
	$stmt = "SELECT menu_background,frame_background,std_row1_background,std_row2_background,std_row3_background,std_row4_background,std_row5_background,alt_row1_background,alt_row2_background,alt_row3_background,web_logo,button_color FROM vicidial_screen_colors where colors_id='$SSadmin_screen_colors';";
	$rslt=mysql_to_mysqli($stmt, $link);
	if ($DB) {echo "$stmt\n";}
	$colors_ct = mysqli_num_rows($rslt);
	if ($colors_ct > 0)
		{
		$row=mysqli_fetch_row($rslt);
		$SSmenu_background =		$row[0];
		$SSframe_background =		$row[1];
		$SSstd_row1_background =	$row[2];
		$SSstd_row2_background =	$row[3];
		$SSstd_row3_background =	$row[4];
		$SSstd_row4_background =	$row[5];
		$SSstd_row5_background =	$row[6];
		$SSalt_row1_background =	$row[7];
		$SSalt_row2_background =	$row[8];
		$SSalt_row3_background =	$row[9];
		$SSweb_logo =			$row[10];
		$SSbutton_color = 		$row[11];
		}
	}
$Mhead_color =	$SSstd_row5_background;
$Mmain_bgcolor = $SSmenu_background;
$Mhead_color =	$SSstd_row5_background;

$selected_logo = "./images/pereine-recrute.png";
$selected_small_logo = "./images/pereine-recrute.png";
$logo_new=0;
$logo_old=0;
$logo_small_old=0;
if (file_exists('./images/pereine-recrute.png')) {$logo_new++;}
if (file_exists('pereine-recrute.png')) {$logo_small_old++;}
if (file_exists('pereine-recrute.png')) {$logo_old++;}
if ($SSweb_logo=='default_new')
	{
	$selected_logo = "./images/pereine-recrute.png";
	$selected_small_logo = "./images/pereine-recrute.png";
	}
if ( ($SSweb_logo=='default_old') and ($logo_old > 0) )
	{
	$selected_logo = "./pereine-recrute.png";
	$selected_small_logo = "./pereine-recrute.png";
	}
if ( ($SSweb_logo!='default_new') and ($SSweb_logo!='default_old') )
	{
	if (file_exists("./images/vicidial_admin_web_logo$SSweb_logo")) 
		{
		$selected_logo = "./images/vicidial_admin_web_logo$SSweb_logo";
		$selected_small_logo = "./images/vicidial_admin_web_logo$SSweb_logo";
		}
	}


##### BEGIN populate dynamic header content #####

######################### SMALL HTML HEADER END #######################################


######################### MOBILE HTML HEADER BEGIN ####################################
else if ($android_header)
	{
	?>
	<TABLE CELLPADDING=0 CELLSPACING=0 BGCOLOR=#<?php echo "$SSmenu_background" ?> width='100%'><TR>
	<TD><A HREF="./admin_mobile.php"><IMG SRC="<?php echo $selected_small_logo; ?>" WIDTH=71 HEIGHT=22 BORDER=0 ALT="System logo"></A> &nbsp; </TD>
	<TD align='left'> &nbsp; <A HREF="admin_mobile.php?ADD=999990" ALT="Admin" STYLE="text-decoration:none;"><?php echo $admin_icon ?> <FONT FACE="ARIAL,HELVETICA" COLOR=WHITE SIZE=2><B><?php echo _QXZ("Admin"); ?></B></FONT></A> &nbsp; </TD>
	</TR>
	</TABLE>
<?php
	}
######################### ANDROID HTML HEADER END ######################################



######################### FULL HTML HEADER BEGIN #######################################
else
{
if ($no_title < 1) {echo "</title>\n";}
echo "<script language=\"Javascript\">\n";
echo "var field_name = '';\n";
echo "var user = '$PHP_AUTH_USER';\n";
echo "var epoch = '" . date("U") . "';\n";

if ($TCedit_javascript > 0)
	{
	 ?>

	function run_submit()
		{
		calculate_hours();
		var go_submit = document.getElementById("go_submit");
		if (go_submit.disabled == false)
			{
			document.edit_log.submit();
			}
		}

	// Calculate login time
	function calculate_hours() 
		{
		var now_epoch = '<?php echo $StarTtimE ?>';
		var local_gmt_sec = '<?php echo $local_gmt_sec ?>';
		var local_gmt_sec = (local_gmt_sec * 1);
		var i=0;
		var total_percent=0;
		var SPANlogin_time = document.getElementById("LOGINlogin_time");
		var LI_date = document.getElementById("LOGINbegin_date");
		var LO_date = document.getElementById("LOGOUTbegin_date");
		var LI_datetime = LI_date.value;
		var LO_datetime = LO_date.value;
		var LI_datetime_array=LI_datetime.split(" ");
		var LI_date_array=LI_datetime_array[0].split("-");
		var LI_time_array=LI_datetime_array[1].split(":");
		var LO_datetime_array=LO_datetime.split(" ");
		var LO_date_array=LO_datetime_array[0].split("-");
		var LO_time_array=LO_datetime_array[1].split(":");

		// Calculate milliseconds since 1970 for each date string and find diff
		var LI_date_epoch = Date.UTC(LI_date_array[0], (LI_date_array[1]-1), LI_date_array[2], LI_time_array[0], LI_time_array[1], LI_time_array[2]);
		var LO_date_epoch = Date.UTC(LO_date_array[0], (LO_date_array[1]-1), LO_date_array[2], LO_time_array[0], LO_time_array[1], LO_time_array[2]);
		var temp_LI_epoch = ( (LI_date_epoch / 1000 ) + local_gmt_sec);
		var temp_LO_epoch = ( (LO_date_epoch / 1000 ) + local_gmt_sec);
		var epoch_diff = (temp_LO_epoch - temp_LI_epoch);
		var temp_diff = epoch_diff;

		document.getElementById("login_time").innerHTML = "ERROR, Please check date fields";

	//	document.getElementById("login_time").innerHTML = LI_date_epoch + '|' + temp_LI_epoch + '|' + LO_date_epoch + '|' + temp_LO_epoch + '|' + (Date.UTC(LI_date_array[0], LI_date_array[1], LI_date_array[2]) / 1000) + '|' + (Date.UTC(LO_date_array[0], LO_date_array[1], LO_date_array[2]) / 1000) + "\n diff " +  epoch_diff + "\n LI " +  temp_LI_epoch + "\n LO " +  temp_LO_epoch + "\n Now " +  now_epoch + "\n local" + local_gmt_sec;

		var go_submit = document.getElementById("go_submit");
		go_submit.disabled = true;
		// length is a positive number and no more than 24 hours, datetime is earlier than right now
		if ( (epoch_diff < 86401) && (epoch_diff > 0) && (temp_LI_epoch < now_epoch) && (temp_LO_epoch < now_epoch) )
			{
			go_submit.disabled = false;

			hours = Math.floor(temp_diff / (60 * 60)); 
			temp_diff -= hours * (60 * 60);

			mins = Math.floor(temp_diff / 60); 
			temp_diff -= mins * 60;
			if (mins < 10) {mins = "0" + mins;}

			secs = Math.floor(temp_diff); 
			temp_diff -= secs;

			document.getElementById("login_time").innerHTML = hours + ":" + mins;

			var form_LI_epoch = document.getElementById("LOGINepoch");
			var form_LO_epoch = document.getElementById("LOGOUTepoch");
			form_LI_epoch.value = temp_LI_epoch;
			form_LO_epoch.value = temp_LO_epoch;
			}
		}



	<?php
	}
######################
# ADD=31 or 34 and SUB=29 for list mixes
######################
if ( ( ($ADD==34) or ($ADD==31) or ($ADD==49) ) and ($SUB==29) and ($LOGmodify_campaigns==1) and ( (preg_match("/$campaign_id/i", $LOGallowed_campaigns)) or (preg_match("/ALL\-CAMPAIGNS/i",$LOGallowed_campaigns)) ) ) 
	{

	?>
	// List Mix status add and remove
	function mod_mix_status(stage,vcl_id,entry) 
		{
		if (stage=="ALL")
			{
			var count=0;
			var ROnew_statuses = document.getElementById("ROstatus_X_" + vcl_id);

			while (count < entry)
				{
				var old_statuses = document.getElementById("status_" + count + "_" + vcl_id);
				var ROold_statuses = document.getElementById("ROstatus_" + count + "_" + vcl_id);

				old_statuses.value = ROnew_statuses.value;
				ROold_statuses.value = ROnew_statuses.value;
				count++;
				}
			}
		else
			{
			if (stage=="EMPTY")
				{
				var count=0;
				var ROnew_statuses = document.getElementById("ROstatus_X_" + vcl_id);

				while (count < entry)
					{
					var old_statuses = document.getElementById("status_" + count + "_" + vcl_id);
					var ROold_statuses = document.getElementById("ROstatus_" + count + "_" + vcl_id);
					
					if (ROold_statuses.value.length < 3)
						{
						old_statuses.value = ROnew_statuses.value;
						ROold_statuses.value = ROnew_statuses.value;
						}
					count++;
					}
				}

			else
				{
				var mod_status = document.getElementById("dial_status_" + entry + "_" + vcl_id);
				if (mod_status.value.length < 1)
					{
					alert("You must select a status first");
					}
				else
					{
					var old_statuses = document.getElementById("status_" + entry + "_" + vcl_id);
					var ROold_statuses = document.getElementById("ROstatus_" + entry + "_" + vcl_id);
					var MODstatus = new RegExp(" " + mod_status.value + " ","g");
					if (stage=="ADD")
						{
						if (old_statuses.value.match(MODstatus))
							{
							alert("The status " + mod_status.value + " is already present");
							}
						else
							{
							var new_statuses = " " + mod_status.value + "" + old_statuses.value;
							old_statuses.value = new_statuses;
							ROold_statuses.value = new_statuses;
							mod_status.value = "";
							}
						}
					if (stage=="REMOVE")
						{
						var MODstatus = new RegExp(" " + mod_status.value + " ","g");
						old_statuses.value = old_statuses.value.replace(MODstatus, " ");
						ROold_statuses.value = ROold_statuses.value.replace(MODstatus, " ");
						}
					}
				}
			}
		}

	// List Mix percent difference calculation and warning message
	function mod_mix_percent(vcl_id,entries) 
		{
		var i=0;
		var total_percent=0;
		var percent_diff='';
		while(i < entries)
			{
			var mod_percent_field = document.getElementById("percentage_" + i + "_" + vcl_id);
			temp_percent = mod_percent_field.value * 1;
			total_percent = (total_percent + temp_percent);
			i++;
			}

		var mod_diff_percent = document.getElementById("PCT_DIFF_" + vcl_id);
		percent_diff = (total_percent - 100);
		if (percent_diff > 0)
			{
			percent_diff = '+' + percent_diff;
			}
		var mix_list_submit = document.getElementById("submit_" + vcl_id);
		if ( (percent_diff > 0) || (percent_diff < 0) )
			{
			mix_list_submit.disabled = true;
			document.getElementById("ERROR_" + vcl_id).innerHTML = "<font color=red><B>The Difference % must be 0</B></font>";
			}
		else
			{
			mix_list_submit.disabled = false;
			document.getElementById("ERROR_" + vcl_id).innerHTML = "";
			}

		mod_diff_percent.value = percent_diff;
		}

	function submit_mix(vcl_id,entries) 
		{
		var h=1;
		var j=1;
		var list_mix_container='';
		var mod_list_mix_container_field = document.getElementById("list_mix_container_" + vcl_id);
		while(h < 41)
			{
			var i=0;
			while(i < entries)
				{
				var mod_list_id_field = document.getElementById("list_id_" + i + "_" + vcl_id);
				var mod_priority_field = document.getElementById("priority_" + i + "_" + vcl_id);
				var mod_percent_field = document.getElementById("percentage_" + i + "_" + vcl_id);
				var mod_statuses_field = document.getElementById("status_" + i + "_" + vcl_id);
				if (mod_priority_field.value==h)
					{
					list_mix_container = list_mix_container + mod_list_id_field.value + "|" + j + "|" + mod_percent_field.value + "|" + mod_statuses_field.value + "|:";
					j++;
					}
				i++;
				}
			h++;
			}
		mod_list_mix_container_field.value = list_mix_container;
		var form_to_submit = document.getElementById("" + vcl_id);
		form_to_submit.submit();
		}
	<?php
	}
	?>

	<?php
	if ( ( ($ADD==34) or ($ADD==31) or ($ADD==44) or ($ADD==41) ) and ($LOGmodify_campaigns==1) and ( (preg_match("/$campaign_id/i", $LOGallowed_campaigns)) or (preg_match("/ALL\-CAMPAIGNS/i",$LOGallowed_campaigns)) ) ) 
		{
	?>
	// List status change confirmation
	function ConfirmListStatusChange(system_setting, listForm) {
		if (!system_setting) {
			// if the list change confirmation system setting is off, just submit the form
			listForm.submit();
			return false;
		}

		var previous_list_statuses=document.getElementById('last_list_statuses').value;

		var new_list_statuses="";

		var lists = document.getElementsByName('list_active_change[]');
		var no_selected=0;
		for (var i=0; i<lists.length; i++) {
			new_list_statuses+=lists[i].value+"|";
			if (lists[i].checked) {
				new_list_statuses+="Y|";
			} else {
				new_list_statuses+="N|";
			}
		}

		if (previous_list_statuses==new_list_statuses) {
			// if none of the lists active status has been changed, just submit the form
			listForm.submit();
			return false;
		} else {
			var prev_array=previous_list_statuses.split("|");
			var new_array=new_list_statuses.split("|");
			if (prev_array.length!=new_array.length) {alert("List error. Reload the page and try again."); return false;}

			var altered_lists="";
			for(i=0; i<prev_array.length; i+=2) {
				prev_status=prev_array[(i+1)];
				new_status=new_array[(i+1)];
				if (prev_status!=new_status) {
					altered_lists+=" - List "+new_array[i]+": "+prev_status+" => "+new_status+"\n";
				}
			}

			var proceed=confirm("You have changed the active status of the following lists:\n\n"+altered_lists+"\nWould you like to proceed with committing the changes?");
			if (proceed) {
				listForm.submit();
			}
		}

	}
	<?php
		}

	if ( ( ($ADD==31) or ($ADD==41) ) and ($LOGmodify_campaigns==1) and ( (preg_match("/$campaign_id/i", $LOGallowed_campaigns)) or (preg_match("/ALL\-CAMPAIGNS/i",$LOGallowed_campaigns)) ) ) 
		{
	?>
	// Agent Call Hangup Route change trigger
	function AgentCallHangupRouteChange(ACHR_new_value) 
		{
		var ACHR_list = document.getElementById("agent_hangup_route");
		var ACHR_route = ACHR_list.value;
		var ACHR_value = document.getElementById("agent_hangup_value");
		var ACHR_title = document.getElementById("agent_hangup_value_title");
		var ACHR_chooser = document.getElementById("agent_hangup_value_chooser");

		if (ACHR_route=='HANGUP')
			{
			ACHR_title.innerHTML = '-<?php echo _QXZ("no value required") ?>-';
			ACHR_chooser.innerHTML = '';
			ACHR_value.value='';
			}
		if (ACHR_route=='MESSAGE')
			{
			ACHR_title.innerHTML = '<?php echo _QXZ("Agent Hangup Message") ?>';
			ACHR_chooser.innerHTML = " <a href=\"javascript:launch_chooser('agent_hangup_value','date');\"><?php echo _QXZ("audio chooser") ?></a> ";
			ACHR_value.value='';
			}
		if (ACHR_route=='EXTENSION')
			{
			ACHR_title.innerHTML = '<?php echo _QXZ("Agent Hangup Dialplan Extension") ?>';
			ACHR_chooser.innerHTML = '';
			ACHR_value.value='';
			}
		if (ACHR_route=='IN_GROUP')
			{
			ACHR_title.innerHTML = '<?php echo _QXZ("Agent Hangup In-Group") ?>';
			ACHR_chooser.innerHTML = " <a href=\"javascript:launch_ingroup_chooser('agent_hangup_value','group_id');\"><?php echo _QXZ("in-group chooser") ?></a> ";
			ACHR_value.value='';
			}
		if (ACHR_route=='CALLMENU')
			{
			ACHR_title.innerHTML = '<?php echo _QXZ("Agent Hangup Call Menu") ?>';
			ACHR_chooser.innerHTML = " <a href=\"javascript:launch_callmenu_chooser('agent_hangup_value','menu_id');\"><?php echo _QXZ("call menu chooser") ?></a> ";
			ACHR_value.value='';
			}
		}

	<?php
	}
	?>

	var weak = new Image();
	weak.src = "images/weak.png";
	var medium = new Image();
	medium.src = "images/medium.png";
	var strong = new Image();
	strong.src = "images/strong.png";

	function pwdChanged(pwd_field_str, pwd_img_str, pwd_len_field, pwd_len_min) 
		{
		var pwd_field = document.getElementById(pwd_field_str);
		var pwd_field_value = pwd_field.value;
		var pwd_img = document.getElementById(pwd_img_str);
		var pwd_len = pwd_field_value.length

	//	var strong_regex = new RegExp( "^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])", "g" );
	//	var medium_regex = new RegExp( "^(?=.{6,})(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9]))).*$", "g" );
		var strong_regex = new RegExp( "^(?=.{20,})(?=.*[a-zA-Z])(?=.*[0-9])", "g" );
		var medium_regex = new RegExp( "^(?=.{10,})(?=.*[a-zA-Z])(?=.*[0-9])", "g" );

		if (strong_regex.test(pwd_field.value) ) 
			{
			if (pwd_img.src != strong.src)
				{pwd_img.src = strong.src;}
			} 
		else if (medium_regex.test( pwd_field.value) ) 
			{
			if (pwd_img.src != medium.src) 
				{pwd_img.src = medium.src;}
			}
		else 
			{
			if (pwd_img.src != weak.src) 
				{pwd_img.src = weak.src;}
			}
		if ( (pwd_len_min > 0) && (pwd_len_min > pwd_len) )
			{document.getElementById(pwd_len_field).innerHTML = "<font color=red><b>" + pwd_len + "</b></font>";}
		else
			{document.getElementById(pwd_len_field).innerHTML = "<font color=black><b>" + pwd_len + "</b></font>";}
		}

	function openNewWindow(url) 
		{
		window.open (url,"",'width=620,height=300,scrollbars=yes,menubar=yes,address=yes');
		}
	function scriptInsertField() 
		{
		openField = '--A--';
		closeField = '--B--';
		var textBox = document.scriptForm.script_text;
		var scriptIndex = document.getElementById("selectedField").selectedIndex;
		var insValue =  document.getElementById('selectedField').options[scriptIndex].value;
		if (document.selection) 
			{
			//IE
			textBox = document.scriptForm.script_text;
			insValue = document.scriptForm.selectedField.options[document.scriptForm.selectedField.selectedIndex].text;
			textBox.focus();
			sel = document.selection.createRange();
			sel.text = openField + insValue + closeField;
			} 
		else if (textBox.selectionStart || textBox.selectionStart == 0) 
			{
			//Mozilla
			var startPos = textBox.selectionStart;
			var endPos = textBox.selectionEnd;
			textBox.value = textBox.value.substring(0, startPos)
			+ openField + insValue + closeField
			+ textBox.value.substring(endPos, textBox.value.length);
			}
		else 
			{
			textBox.value += openField + insValue + closeField;
			}
		}

	<?php

#### Javascript for auto-generate of user ID Button
if ( ($SSadmin_modify_refresh > 1) and (preg_match("/^3|^4/",$ADD)) )
	{
	?>
	var ar_seconds=<?php echo "$SSadmin_modify_refresh;"; ?>

	function modify_refresh_display()
		{
		if (ar_seconds > 0)
			{
			ar_seconds = (ar_seconds - 1);
			document.getElementById("refresh_countdown").innerHTML = "<font color=black> screen refresh in: " + ar_seconds + " seconds</font>";
			setTimeout("modify_refresh_display()",1000);
			}
		}

	<?php
	}

#### BEGIN Javascript for auto-generate of user ID Button
if ( ($ADD==1) or ($ADD=="1A") )
	{
	?>

	function user_auto()
		{
		var user_toggle = document.getElementById("user_toggle");
		var user_field = document.getElementById("user");
		if (user_toggle.value < 1)
			{
			user_field.value = 'AUTOGENERATEZZZ';
			user_field.disabled = true;
			user_toggle.value = 1;
			}
		else
			{
			user_field.value = '';
			user_field.disabled = false;
			user_toggle.value = 0;
			}
		}

	function user_submit()
		{
		var user_field = document.getElementById("user");
		user_field.disabled = false;
		document.userform.submit();
		}

	<?php
	}
#### END Javascript for auto-generate of user ID Button

else
	{
	echo "	var pass = '$PHP_AUTH_PW';\n";
	?>

	mouseY=0;
	function getMousePos(event) {
		mouseY=event.pageY;
	}
	document.addEventListener("click", getMousePos);

	var chooser_field='';
	var chooser_field_td='';
	var chooser_type='';

	function launch_chooser(fieldname,stage)
		{
		var h = window.innerHeight;		
		var vposition=mouseY;

		var audiolistURL = "./non_agent_api.php";
		var audiolistQuery = "source=admin&function=sounds_list&user=" + user + "&pass=" + pass + "&format=selectframe&stage=" + stage + "&comments=" + fieldname;
		var Iframe_content = '<IFRAME SRC="' + audiolistURL + '?' + audiolistQuery + '"  style="width:740;height:440;background-color:white;" scrolling="NO" frameborder="0" allowtransparency="true" id="audio_chooser_frame' + epoch + '" name="audio_chooser_frame" width="740" height="460" STYLE="z-index:2"> </IFRAME>';

		document.getElementById("audio_chooser_span").style.position = "absolute";
		document.getElementById("audio_chooser_span").style.left = "220px";
		document.getElementById("audio_chooser_span").style.top = vposition + "px";
		document.getElementById("audio_chooser_span").style.visibility = 'visible';
		document.getElementById("audio_chooser_span").innerHTML = Iframe_content;
		}

	function launch_moh_chooser(fieldname,stage)
		{
		var h = window.innerHeight;		
		var vposition=mouseY;

		var audiolistURL = "./non_agent_api.php";
		var audiolistQuery = "source=admin&function=moh_list&user=" + user + "&pass=" + pass + "&format=selectframe&stage=" + stage + "&comments=" + fieldname;
		var Iframe_content = '<IFRAME SRC="' + audiolistURL + '?' + audiolistQuery + '"  style="width:740;height:440;background-color:white;" scrolling="NO" frameborder="0" allowtransparency="true" id="audio_chooser_frame' + epoch + '" name="audio_chooser_frame" width="740" height="460" STYLE="z-index:2"> </IFRAME>';

		document.getElementById("audio_chooser_span").style.position = "absolute";
		document.getElementById("audio_chooser_span").style.left = "220px";
		document.getElementById("audio_chooser_span").style.top = vposition + "px";
		document.getElementById("audio_chooser_span").style.visibility = 'visible';
		document.getElementById("audio_chooser_span").innerHTML = Iframe_content;
		}

	function launch_ingroup_chooser(fieldname,stage)
		{
		var h = window.innerHeight;		
		var vposition=mouseY;

		var apilistURL = "./non_agent_api.php";
		var apilistQuery = "source=admin&function=ingroup_list&user=" + user + "&pass=" + pass + "&format=selectframe&stage=" + stage + "&comments=" + fieldname;
		var Iframe_content = '<IFRAME SRC="' + apilistURL + '?' + apilistQuery + '"  style="width:740;height:440;background-color:white;" scrolling="NO" frameborder="0" allowtransparency="true" id="audio_chooser_frame' + epoch + '" name="audio_chooser_frame" width="740" height="460" STYLE="z-index:2"> </IFRAME>';

		document.getElementById("audio_chooser_span").style.position = "absolute";
		document.getElementById("audio_chooser_span").style.left = "220px";
		document.getElementById("audio_chooser_span").style.top = vposition + "px";
		document.getElementById("audio_chooser_span").style.visibility = 'visible';
		document.getElementById("audio_chooser_span").innerHTML = Iframe_content;
		}

	function launch_callmenu_chooser(fieldname,stage)
		{
		var h = window.innerHeight;		
		var vposition=mouseY;

		var apilistURL = "./non_agent_api.php";
		var apilistQuery = "source=admin&function=callmenu_list&user=" + user + "&pass=" + pass + "&format=selectframe&stage=" + stage + "&comments=" + fieldname;
		var Iframe_content = '<IFRAME SRC="' + apilistURL + '?' + apilistQuery + '"  style="width:740;height:440;background-color:white;" scrolling="NO" frameborder="0" allowtransparency="true" id="audio_chooser_frame' + epoch + '" name="audio_chooser_frame" width="740" height="460" STYLE="z-index:2"> </IFRAME>';

		document.getElementById("audio_chooser_span").style.position = "absolute";
		document.getElementById("audio_chooser_span").style.left = "220px";
		document.getElementById("audio_chooser_span").style.top = vposition + "px";
		document.getElementById("audio_chooser_span").style.visibility = 'visible';
		document.getElementById("audio_chooser_span").innerHTML = Iframe_content;
		}

	function launch_container_chooser(fieldname,stage,type)
		{
		var h = window.innerHeight;		
		var vposition=mouseY;

		var apilistURL = "./non_agent_api.php";
		var apilistQuery = "source=admin&function=container_list&user=" + user + "&pass=" + pass + "&format=selectframe&stage=" + stage + "&comments=" + fieldname + "&type=" + type;
		var Iframe_content = '<IFRAME SRC="' + apilistURL + '?' + apilistQuery + '"  style="width:740;height:440;background-color:white;" scrolling="NO" frameborder="0" allowtransparency="true" id="audio_chooser_frame' + epoch + '" name="audio_chooser_frame" width="740" height="460" STYLE="z-index:2"> </IFRAME>';

		document.getElementById("audio_chooser_span").style.position = "absolute";
		document.getElementById("audio_chooser_span").style.left = "220px";
		document.getElementById("audio_chooser_span").style.top = vposition + "px";
		document.getElementById("audio_chooser_span").style.visibility = 'visible';
		document.getElementById("audio_chooser_span").innerHTML = Iframe_content;
		}

	function launch_vm_chooser(fieldname,stage)
		{
		var h = window.innerHeight;		
		var vposition=mouseY;

		var audiolistURL = "./non_agent_api.php";
		var audiolistQuery = "source=admin&function=vm_list&user=" + user + "&pass=" + pass + "&format=selectframe&stage=" + stage + "&comments=" + fieldname;
		var Iframe_content = '<IFRAME SRC="' + audiolistURL + '?' + audiolistQuery + '"  style="width:740;height:440;background-color:white;" scrolling="NO" frameborder="0" allowtransparency="true" id="audio_chooser_frame' + epoch + '" name="audio_chooser_frame" width="740" height="460" STYLE="z-index:2"> </IFRAME>';

		document.getElementById("audio_chooser_span").style.position = "absolute";
		document.getElementById("audio_chooser_span").style.left = "220px";
		document.getElementById("audio_chooser_span").style.top = vposition + "px";
		document.getElementById("audio_chooser_span").style.visibility = 'visible';
		document.getElementById("audio_chooser_span").innerHTML = Iframe_content;
		}

	function launch_color_chooser(fieldname,stage,type)
		{
		var h = window.innerHeight;		
		var vposition=mouseY;
		chooser_field = fieldname;
		chooser_field_td = fieldname + '_td';
		chooser_type = type;
	<?php
	$color_chooser_output .= " &nbsp; <a href=\\\"javascript:close_chooser();\\\"><font size=1 face='Arial,Helvetica'>"._QXZ("close frame")."</font></a> &nbsp; <BR>";
	$color_chooser_output .= "<div id='select_color_frame' style=\\\"height:400px;width:400px;overflow:scroll;background-color:white;\\\">";
	$color_chooser_output .= '<table border=0 cellpadding=2 cellspacing=2 width=400 bgcolor=white>';
	$HTMLcolorsARY = explode('|',$HTMLcolors);
	$HTMLcolorsARYcount = count($HTMLcolorsARY);
	$HTMLct=0;
	while ($HTMLcolorsARYcount > $HTMLct)
		{
		$HTMLcolorsLINE = explode(',',$HTMLcolorsARY[$HTMLct]);
		if (preg_match("/1$|3$|5$|7$|9$/i", $HTMLct))
			{$bgcolor='#E6E6E6';} 
		else
			{$bgcolor='#F6F6F6';}

		$color_chooser_output .= "<tr bgcolor=\\\"$bgcolor\\\"><td>$HTMLcolorsLINE[0] </td><td><a href=\\\"javascript:choose_color('$HTMLcolorsLINE[1]');\\\"><font size=1 face='Arial,Helvetica'>#$HTMLcolorsLINE[1]</a> </td><td bgcolor='#$HTMLcolorsLINE[1]'> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td></tr>";

		$HTMLct++;
		}
	$color_chooser_output .= '</table></div>';
	?>

		var span_content = '<span id="color_chooser_frame' + epoch + '" name="color_chooser_frame" style="width:740;height:440;background-color:white;overflow:scroll;z-index:2;">' + "<?php  echo $color_chooser_output ?></span>";

		document.getElementById("audio_chooser_span").style.position = "absolute";
		document.getElementById("audio_chooser_span").style.left = "220px";
		document.getElementById("audio_chooser_span").style.top = vposition + "px";
		document.getElementById("audio_chooser_span").style.visibility = 'visible';
		document.getElementById("audio_chooser_span").style.backgroundcolor = 'white';
		document.getElementById("audio_chooser_span").innerHTML = span_content;
		}

	function choose_color(colorname)
		{
		if (colorname.length > 0)
			{
			if (chooser_type == '2')
				{
				document.getElementById(chooser_field).value = colorname;
				document.getElementById(chooser_field_td).style.backgroundColor = '#' + colorname;
				}
			else
				{
				document.getElementById(chooser_field).value = '#' + colorname;
				document.getElementById(chooser_field_td).style.backgroundColor = '#' + colorname;
				}
			close_chooser();
			}
		}

	function close_chooser()
		{
		document.getElementById("audio_chooser_span").style.visibility = 'hidden';
		document.getElementById("audio_chooser_span").innerHTML = '';
		}

	function user_submit()
		{
		var user_field = document.getElementById("user");
		user_field.disabled = false;
		document.userform.submit();
		}

	function play_browser_sound(temp_element,temp_volume)
		{
		var taskIndex = document.getElementById(temp_element).selectedIndex;
		var taskValue = document.getElementById(temp_element).options[taskIndex].value;
		var temp_selected_element = 'BAS_' + taskValue;
		if ( (taskValue != '---NONE---') && (taskValue != '---DISABLED---') && (taskValue != '') )
			{
			var temp_audio = document.getElementById(temp_selected_element);
			var taskVolIndex = document.getElementById(temp_volume).selectedIndex;
			var taskVolValue = document.getElementById(temp_volume).options[taskVolIndex].value;
			var temp_js_volume = (taskVolValue * .01);
			temp_audio.volume = temp_js_volume;
		//	alert(temp_selected_element + ' ' + temp_js_volume);
			temp_audio.play();
			}
		}
	<?php
	}

### Javascript for shift end-time calculation and display
if ( ($ADD==131111111) or ($ADD==331111111) or ($ADD==431111111) )
	{
	?>
	function shift_time()
		{
		var start_time = document.getElementById("shift_start_time");
		var end_time = document.getElementById("shift_end_time");
		var length = document.getElementById("shift_length");

		var st_value = start_time.value;
		var et_value = end_time.value;
		while (st_value.length < 4) {st_value = "0" + st_value;}
		while (et_value.length < 4) {et_value = "0" + et_value;}
		var st_hour=st_value.substring(0,2);
		var st_min=st_value.substring(2,4);
		var et_hour=et_value.substring(0,2);
		var et_min=et_value.substring(2,4);
		if (st_hour > 23) {st_hour = 23;}
		if (et_hour > 23) {et_hour = 23;}
		if (st_min > 59) {st_min = 59;}
		if (et_min > 59) {et_min = 59;}
		start_time.value = st_hour + "" + st_min;
		end_time.value = et_hour + "" + et_min;

		var start_time_hour=start_time.value.substring(0,2);
		var start_time_min=start_time.value.substring(2,4);
		var end_time_hour=end_time.value.substring(0,2);
		var end_time_min=end_time.value.substring(2,4);
		start_time_hour=(start_time_hour * 1);
		start_time_min=(start_time_min * 1);
		end_time_hour=(end_time_hour * 1);
		end_time_min=(end_time_min * 1);

		if (start_time.value == end_time.value)
			{
			var shift_length = '24:00';
			}
		else
			{
			if ( (start_time_hour > end_time_hour) || ( (start_time_hour == end_time_hour) && (start_time_min > end_time_min) ) )
				{
				var shift_hour = ( (24 - start_time_hour) + end_time_hour);
				var shift_minute = ( (60 - start_time_min) + end_time_min);
				if (shift_minute >= 60) 
					{
					shift_minute = (shift_minute - 60);
					}
				else
					{
					shift_hour = (shift_hour - 1);
					}
				}
			else
				{
				var shift_hour = (end_time_hour - start_time_hour);
				var shift_minute = (end_time_min - start_time_min);
				}
			if (shift_minute < 0) 
				{
				shift_minute = (shift_minute + 60);
				shift_hour = (shift_hour - 1);
				}

			if (shift_hour < 10) {shift_hour = '0' + shift_hour}
			if (shift_minute < 10) {shift_minute = '0' + shift_minute}
			var shift_length = shift_hour + ':' + shift_minute;
			}
	//	alert(start_time_hour + '|' + start_time_min + '|' + end_time_hour + '|' + end_time_min + '|--|' + shift_hour + ':' + shift_minute + '|' + shift_length + '|');

		length.value = shift_length;
		}

<?php
	}




### Javascript for selecting and deselecting all AC-CIDs and other checkboxes "active" on the modify page
if ( ($ADD==3111) or ($ADD==4111) or ($ADD==5111) or ($ADD==3811) or ($ADD==4811) or ($ADD==5811) or ($ADD==3911) or ($ADD==4911) or ($ADD==5911) or ($ADD==31) or ($ADD==34) or ($ADD==202) or ($ADD==396111111111) or ($ADD==496111111111) )
	{
?>
	function FORM_selectall(temp_count,temp_fields,temp_option,temp_span)
		{
		var fields_array=temp_fields.split('|');
		var inc=0;
		while (temp_count >= inc)
			{
			if (fields_array[inc].length > 0)
				{
				if (temp_option == 'off')
					{document.getElementById(fields_array[inc]).checked=false;}
				else
					{document.getElementById(fields_array[inc]).checked=true;}
				}
			inc++;
			}
		if (temp_option == 'off')
			{
			document.getElementById(temp_span).innerHTML = "<a href=\"#\" onclick=\"FORM_selectall('" + temp_count + "','" + temp_fields + "','on','" + temp_span + "');return false;\"><font size=1><?php echo _QXZ("select all"); ?></font></a>";
			}
		else
			{
			document.getElementById(temp_span).innerHTML = "<a href=\"#\" onclick=\"FORM_selectall('" + temp_count + "','" + temp_fields + "','off','" + temp_span + "');return false;\"><font size=1><?php echo _QXZ("deselect all"); ?></font></a>";
			}
		}

	<?php
	}


$stmt="SELECT menu_id,menu_name from vicidial_call_menu $whereLOGadmin_viewable_groupsSQL order by menu_id limit 10000;";
$rslt=mysql_to_mysqli($stmt, $link);
$menus_to_print = mysqli_num_rows($rslt);
$call_menu_list='';
$i=0;
while ($i < $menus_to_print)
	{
	$row=mysqli_fetch_row($rslt);
	$call_menu_list .= "<option value=\"$row[0]\">$row[0] - $row[1]</option>";
	$i++;
	}

### select list contents generation for dynamic route displays in call menu and in-group screens
if ( ($ADD==3511) or ($ADD==2511) or ($ADD==2611) or ($ADD==4511) or ($ADD==5511) or ($ADD==3111) or ($ADD==2111) or ($ADD==2011) or ($ADD==4111) or ($ADD==5111) )
	{
	$stmt="SELECT did_pattern,did_description,did_route from vicidial_inbound_dids where did_active='Y' $LOGadmin_viewable_groupsSQL order by did_pattern;";
	$rslt=mysql_to_mysqli($stmt, $link);
	$dids_to_print = mysqli_num_rows($rslt);
	$did_list='';
	$i=0;
	while ($i < $dids_to_print)
		{
		$row=mysqli_fetch_row($rslt);
		$did_list .= "<option value=\"$row[0]\">$row[0] - $row[1] - $row[2]</option>";
		$i++;
		}

	$stmt="SELECT group_id,group_name from vicidial_inbound_groups where active='Y' and group_id NOT LIKE \"AGENTDIRECT%\" $LOGadmin_viewable_groupsSQL order by group_id;";
	$rslt=mysql_to_mysqli($stmt, $link);
	$ingroups_to_print = mysqli_num_rows($rslt);
	$ingroup_list='';
	$i=0;
	while ($i < $ingroups_to_print)
		{
		$row=mysqli_fetch_row($rslt);
		$ingroup_list .= "<option value=\"$row[0]\">$row[0] - $row[1]</option>";
		$i++;
		}

	$stmt="SELECT campaign_id,campaign_name from vicidial_campaigns where active='Y' $LOGallowed_campaignsSQL order by campaign_id;";
	$rslt=mysql_to_mysqli($stmt, $link);
	$IGcampaigns_to_print = mysqli_num_rows($rslt);
	$IGcampaign_id_list='';
	$i=0;
	while ($i < $IGcampaigns_to_print)
		{
		$row=mysqli_fetch_row($rslt);
		$IGcampaign_id_list .= "<option value=\"$row[0]\">$row[0] - $row[1]</option>";
		$i++;
		}

	$IGhandle_method_list = '<option>CID</option><option>CIDLOOKUP</option><option>CIDLOOKUPRL</option><option>CIDLOOKUPRC</option><option>CIDLOOKUPALT</option><option>CIDLOOKUPRLALT</option><option>CIDLOOKUPRCALT</option><option>CIDLOOKUPADDR3</option><option>CIDLOOKUPRLADDR3</option><option>CIDLOOKUPRCADDR3</option><option>CIDLOOKUPALTADDR3</option><option>CIDLOOKUPRLALTADDR3</option><option>CIDLOOKUPRCALTADDR3</option><option>ANI</option><option>ANILOOKUP</option><option>ANILOOKUPRL</option><option>VIDPROMPT</option><option>VIDPROMPTLOOKUP</option><option>VIDPROMPTLOOKUPRL</option><option>VIDPROMPTLOOKUPRC</option><option>VIDPROMPTSPECIALLOOKUP</option><option>VIDPROMPTSPECIALLOOKUPRL</option><option>VIDPROMPTSPECIALLOOKUPRC</option><option>CLOSER</option><option>3DIGITID</option><option>4DIGITID</option><option>5DIGITID</option><option>10DIGITID</option><option>CIDLOOKUPOWNERCUSTOMX</option><option>CIDLOOKUPRLOWNERCUSTOMX</option><option>CIDLOOKUPRCOWNERCUSTOMX</option><option>CIDLOOKUPALTOWNERCUSTOMX</option><option>CIDLOOKUPRLALTOWNERCUSTOMX</option><option>CIDLOOKUPRCALTOWNERCUSTOMX</option><option>CIDLOOKUPADDR3OWNERCUSTOMX</option><option>CIDLOOKUPRLADDR3OWNERCUSTOMX</option><option>CIDLOOKUPRCADDR3OWNERCUSTOMX</option><option>CIDLOOKUPALTADDR3OWNERCUSTOMX</option><option>CIDLOOKUPRLALTADDR3OWNERCUSTOMX</option><option>CIDLOOKUPRCALTADDR3OWNERCUSTOMX</option>';

	$IGsearch_method_list = '<option value=\\"LB\\">LB - '._QXZ("Load Balanced").'</option><option value=\\"LO\\">LO - '._QXZ("Load Balanced Overflow").'</option><option value=\\"SO\\">SO - '._QXZ("Server Only").'</option>';

	$stmt="SELECT login,server_ip,extension,dialplan_number from phones where active='Y' $LOGadmin_viewable_groupsSQL order by login,server_ip;";
	$rslt=mysql_to_mysqli($stmt, $link);
	$phones_to_print = mysqli_num_rows($rslt);
	$phone_list='';
	$i=0;
	while ($i < $phones_to_print)
		{
		$row=mysqli_fetch_row($rslt);
		$phone_list .= "<option value=\"$row[0]\">$row[0] - $row[1] - $row[2] - $row[3]</option>";
		$i++;
		}
	}

# dynamic options for options in call_menu screen
if ( ($ADD==3511) or ($ADD==2511) or ($ADD==2611) or ($ADD==4511) or ($ADD==5511) )
	{

	?>
	function call_menu_option(option,route,value,value_context,chooser_height)
		{
		var call_menu_list = '<?php echo $call_menu_list ?>';
		var ingroup_list = '<?php echo $ingroup_list ?>';
		var IGcampaign_id_list = '<?php echo $IGcampaign_id_list ?>';
		var IGhandle_method_list = '<?php echo $IGhandle_method_list ?>';
		var IGsearch_method_list = "<?php echo $IGsearch_method_list ?>";
		var did_list = '<?php echo $did_list ?>';
		var phone_list = '<?php echo $phone_list ?>';
		var selected_value = '';
		var selected_context = '';
		var new_content = '';

		var select_list = document.getElementById("option_route_" + option);
		var selected_route = select_list.value;
		var span_to_update = document.getElementById("option_value_value_context_" + option);

		if (selected_route=='CALLMENU')
			{
			if (route == selected_route)
				{
				selected_value = '<option SELECTED value="' + value + '">' + value + "</option>\n";
				}
			else
				{value='';}
			new_content = '<span name=option_route_link_' + option + ' id=option_route_link_' + option + "><a href=\"<?php echo $ADMIN ?>?ADD=3511&menu_id=" + value + "\"><?php echo _QXZ("Call Menu"); ?>: </a></span><select size=1 name=option_route_value_" + option + " id=option_route_value_" + option + " onChange=\"call_menu_link('" + option + "','CALLMENU');\">" + call_menu_list + "\n" + selected_value + '</select>';
			}
		if (selected_route=='INGROUP')
			{
			if (value_context.length < 10)
				{value_context = 'CID,LB,998,TESTCAMP,1,,,,,';}
			var value_context_split =		value_context.split(",");
			var IGhandle_method =			value_context_split[0];
			var IGsearch_method =			value_context_split[1];
			var IGlist_id =					value_context_split[2];
			var IGcampaign_id =				value_context_split[3];
			var IGphone_code =				value_context_split[4];
			var IGvid_enter_filename =		value_context_split[5];
			var IGvid_id_number_filename =	value_context_split[6];
			var IGvid_confirm_filename =	value_context_split[7];
			var IGvid_validate_digits =		value_context_split[8];
			var IGvid_container =			value_context_split[9];

			if (route == selected_route)
				{
				selected_value = '<option SELECTED>' + value + '</option>';
				}

			new_content = '<input type=hidden name=option_route_value_context_' + option + ' id=option_route_value_context_' + option + ' value="' + selected_value + '">';
			new_content = new_content + '<span name="option_route_link_' + option + '" id="option_route_link_' + option + '">';
			new_content = new_content + "<a href=\"<?php echo $ADMIN ?>?ADD=3111&group_id=" + value + "\"><?php echo _QXZ("In-Group"); ?>:</a> </span>";
			new_content = new_content + '<select size=1 name=option_route_value_' + option + ' id=option_route_value_' + option + " onChange=\"call_menu_link('" + option + "','INGROUP');\">";
			new_content = new_content + '' + ingroup_list + "\n" + selected_value + '<option>DYNAMIC_INGROUP_VAR</option></select>';
			new_content = new_content + " &nbsp; <?php echo _QXZ("Handle Method"); ?>: <select size=1 name=IGhandle_method_" + option + ' id=IGhandle_method_' + option + '>';
			new_content = new_content + '' + '<option SELECTED>' + IGhandle_method + '</option>' + IGhandle_method_list + '</select>' + "\n";
			new_content = new_content + ' &nbsp; <IMG SRC=\"help.png\" onClick=\"FillAndShowHelpDiv(event, \'call_menu-ingroup_settings\')" WIDTH=20 HEIGHT=20 BORDER=0 ALT="HELP" ALIGN=TOP>';
			new_content = new_content + "<BR><?php echo _QXZ("Search Method"); ?>: <select size=1 name=IGsearch_method_" + option + ' id=IGsearch_method_' + option + '>';
			new_content = new_content + '' + IGsearch_method_list + "\n" + '<option SELECTED>' + IGsearch_method + '</select>';
			new_content = new_content + " &nbsp; <?php echo _QXZ("List ID"); ?>: <input type=text size=5 maxlength=14 name=IGlist_id_" + option + ' id=IGlist_id_' + option + ' value="' + IGlist_id + '">';
			new_content = new_content + "<BR><?php echo _QXZ("Campaign ID"); ?>: <select size=1 name=IGcampaign_id_" + option + ' id=IGcampaign_id_' + option + '>';
			new_content = new_content + '' + IGcampaign_id_list + "\n" + '<option SELECTED>' + IGcampaign_id + '</select>';
			new_content = new_content + " &nbsp; <?php echo _QXZ("Phone Code"); ?>: <input type=text size=5 maxlength=14 name=IGphone_code_" + option + ' id=IGphone_code_' + option + ' value="' + IGphone_code + '">';
			new_content = new_content + "<BR> &nbsp; <?php echo _QXZ("VID Enter Filename"); ?>: <input type=text name=IGvid_enter_filename_" + option + " id=IGvid_enter_filename_" + option + " size=40 maxlength=255 value=\"" + IGvid_enter_filename + "\"> <a href=\"javascript:launch_chooser('IGvid_enter_filename_" + option + "','date');\"><?php echo _QXZ("audio chooser"); ?></a>";
			new_content = new_content + "<BR> &nbsp; <?php echo _QXZ("VID ID Number Filename"); ?>: <input type=text name=IGvid_id_number_filename_" + option + " id=IGvid_id_number_filename_" + option + " size=40 maxlength=255 value=\"" + IGvid_id_number_filename + "\"> <a href=\"javascript:launch_chooser('IGvid_id_number_filename_" + option + "','date');\"><?php echo _QXZ("audio chooser"); ?></a>";
			new_content = new_content + "<BR> &nbsp; <?php echo _QXZ("VID Confirm Filename"); ?>: <input type=text name=IGvid_confirm_filename_" + option + " id=IGvid_confirm_filename_" + option + " size=40 maxlength=255 value=\"" + IGvid_confirm_filename + "\"> <a href=\"javascript:launch_chooser('IGvid_confirm_filename_" + option + "','date');\"><?php echo _QXZ("audio chooser"); ?></a>";
			new_content = new_content + " &nbsp; <?php echo _QXZ("VID Digits"); ?>: <input type=text size=3 maxlength=3 name=IGvid_validate_digits_" + option + ' id=IGvid_validate_digits_' + option + ' value="' + IGvid_validate_digits + '">';
			new_content = new_content + "<BR> &nbsp; <?php echo _QXZ("VID Container"); ?>: <input type=text size=40 maxlength=40 name=IGvid_container_" + option + ' id=IGvid_container_' + option + ' value="' + IGvid_container + '">';
			new_content = new_content + " &nbsp; <IMG SRC=\"help.png\" onClick=\"FillAndShowHelpDiv(event, 'call_menu-ingroup_vid_container')\" WIDTH=20 HEIGHT=20 BORDER=0 ALT=\"HELP\" ALIGN=TOP> <a href=\"javascript:launch_container_chooser('IGvid_container_" + option + "','date','CM_VIDPROMPT_SPECIAL');\"><?php echo _QXZ("container chooser"); ?></a>";
			}
		if (selected_route=='DID')
			{
			if (route == selected_route)
				{
				selected_value = '<option SELECTED value="' + value + '">' + value + "</option>\n";
				}
			else
				{value='';}
			new_content = '<span name=option_route_link_' + option + ' id=option_route_link_' + option + '><a href="<?php echo $ADMIN ?>?ADD=3311&did_pattern=' + value + "\"><?php echo _QXZ("DID"); ?>:</a> </span><select size=1 name=option_route_value_" + option + ' id=option_route_value_' + option + " onChange=\"call_menu_link('" + option + "','DID');\">" + did_list + "\n" + selected_value + '</select>';
			}
		if (selected_route=='HANGUP')
			{
			if (route == selected_route)
				{
				selected_value = value;
				}
			else
				{value='vm-goodbye';}
			new_content = "<?php echo _QXZ("Audio File"); ?>: <input type=text name=option_route_value_" + option + " id=option_route_value_" + option + " size=40 maxlength=255 value=\"" + selected_value + "\"> <a href=\"javascript:launch_chooser('option_route_value_" + option + "','date');\"><?php echo _QXZ("audio chooser"); ?></a>";
			}
		if (selected_route=='EXTENSION')
			{
			if (route == selected_route)
				{
				selected_value = value;
				selected_context = value_context;
				}
			else
				{value='8304';}
			new_content = "<?php echo _QXZ("Extension"); ?>: <input type=text name=option_route_value_" + option + " id=option_route_value_" + option + " size=20 maxlength=255 value=\"" + selected_value + "\"> &nbsp; <?php echo _QXZ("Context"); ?>: <input type=text name=option_route_value_context_" + option + " id=option_route_value_context_" + option + " size=20 maxlength=255 value=\"" + selected_context + "\"> ";
			}
		if (selected_route=='PHONE')
			{
			if (route == selected_route)
				{
				selected_value = '<option SELECTED value="' + value + '">' + value + "</option>\n";
				}
			else
				{value='';}
			new_content = "<?php echo _QXZ("Phone"); ?>: <select size=1 name=option_route_value_" + option + ' id=option_route_value_' + option + '>' + phone_list + "\n" + selected_value + '</select>';
			}
		if ( (selected_route=='VOICEMAIL') || (selected_route=='VMAIL_NO_INST') )
			{
			if (route == selected_route)
				{
				selected_value = value;
				}
			else
				{value='';}
			new_content = "<?php echo _QXZ("Voicemail Box"); ?>: <input type=text name=option_route_value_" + option + " id=option_route_value_" + option + " size=12 maxlength=10 value=\"" + selected_value + "\"> <a href=\"javascript:launch_vm_chooser('option_route_value_" + option + "','date');\"><?php echo _QXZ("voicemail chooser"); ?></a>";
			}
		if (selected_route=='AGI')
			{
			if (route == selected_route)
				{
				selected_value = value;
				}
			else
				{value='';}
			new_content = "<?php echo _QXZ("AGI"); ?>: <input type=text name=option_route_value_" + option + " id=option_route_value_" + option + " size=80 maxlength=255 value=\"" + selected_value + "\"> ";
			}

		if (new_content.length < 1)
			{new_content = selected_route}

		span_to_update.innerHTML = new_content;
		}

	function call_menu_link(option,route)
		{
		var selected_value = '';
		var new_content = '';

		var select_list = document.getElementById("option_route_value_" + option);
		var selected_value = select_list.value;
		var span_to_update = document.getElementById("option_route_link_" + option);

		if (route=='CALLMENU')
			{
			new_content = "<a href=\"<?php echo $ADMIN ?>?ADD=3511&menu_id=" + selected_value + "\"><?php echo _QXZ("Call Menu"); ?>:</a>";
			}
		if (route=='INGROUP')
			{
			new_content = "<a href=\"<?php echo $ADMIN ?>?ADD=3111&group_id=" + selected_value + "\"><?php echo _QXZ("In-Group"); ?>:</a>";
			}
		if (route=='DID')
			{
			new_content = "<a href=\"<?php echo $ADMIN ?>?ADD=3311&did_pattern=" + selected_value + "\"><?php echo _QXZ("DID"); ?>:</a>";
			}

		if (new_content.length < 1)
			{new_content = selected_value}

		span_to_update.innerHTML = new_content;
		}

	function copy_prev_cm_option(item_number,item_height)
		{
		var prev_item_number = (item_number - 1)

		var temp_option_value = 'option_value_' + item_number;
		var temp_option_description = 'option_description_' + item_number;
		var temp_option_route = 'option_route_' + item_number;
		var temp_option_route_value = 'option_route_value_' + item_number;
		var temp_option_route_value_context = 'option_route_value_context_' + item_number;

		var temp_prev_option_value = 'option_value_' + prev_item_number;
		var temp_prev_option_description = 'option_description_' + prev_item_number;
		var temp_prev_option_route = 'option_route_' + prev_item_number;
		var temp_prev_option_route_value = 'option_route_value_' + prev_item_number;
		var temp_prev_option_route_value_context = 'option_route_value_context_' + prev_item_number;

		var temp_ValIndex = document.getElementById(temp_prev_option_value).selectedIndex;
		var temp_ValLength = document.getElementById(temp_prev_option_value).length;
		var temp_ValValue =  document.getElementById(temp_prev_option_value).options[temp_ValIndex].value;
		var temp_ValNewLength = document.getElementById(temp_option_value).length;
		var NEWtemp_ValIndex = (temp_ValIndex + 1);
		if (temp_ValNewLength >= 21) 
			{
			if (temp_ValNewLength > temp_ValLength) 
				{
				NEWtemp_ValIndex = (NEWtemp_ValIndex + 1);
				}
			if (NEWtemp_ValIndex > 21) {NEWtemp_ValIndex=1;}
			}
		else
			{
			if (NEWtemp_ValIndex > 20) {NEWtemp_ValIndex=0;}
			}
		document.getElementById(temp_option_value).selectedIndex = NEWtemp_ValIndex;

		var temp_optionIndex = document.getElementById(temp_prev_option_route).selectedIndex;
		var temp_optionValue =  document.getElementById(temp_prev_option_route).options[temp_optionIndex].value;

		var rIndex = 0;
		if (temp_optionValue == 'CALLMENU') {rIndex = 0;}
		if (temp_optionValue == 'INGROUP') {rIndex = 1;}
		if (temp_optionValue == 'DID') {rIndex = 2;}
		if (temp_optionValue == 'HANGUP') {rIndex = 3;}
		if (temp_optionValue == 'EXTENSION') {rIndex = 4;}
		if (temp_optionValue == 'PHONE') {rIndex = 5;}
		if (temp_optionValue == 'VOICEMAIL') {rIndex = 6;}
		if (temp_optionValue == 'VMAIL_NO_INST') {rIndex = 7;}
		document.getElementById(temp_option_route).selectedIndex = rIndex;
		document.getElementById(temp_option_description).value = document.getElementById(temp_prev_option_description).value;

		call_menu_option(item_number,temp_optionValue,'','',item_height);

		if ( (temp_optionValue == 'CALLMENU') || (temp_optionValue == 'DID') || (temp_optionValue == 'PHONE') )
			{
			var temp_prev_optionVal = document.getElementById(temp_prev_option_route_value);
			var temp_prev_optionValIndex = temp_prev_optionVal.selectedIndex;
			var temp_prev_optionValValue = temp_prev_optionVal.options[temp_prev_optionValIndex].value;

			var temp_optionVal = document.getElementById(temp_option_route_value);
			var temp_optionValIndex = 0;
			var temp_optionValLength = temp_optionVal.length;
			var temp_counter=0; 
			while (temp_counter < temp_optionValLength)
				{
				if (temp_prev_optionValValue == temp_optionVal.options[temp_counter].value)
					{temp_optionValIndex = temp_counter;}

				temp_counter++;
				}
			document.getElementById(temp_option_route_value).selectedIndex = temp_optionValIndex;

			if ( (temp_optionValue == 'CALLMENU') || (temp_optionValue == 'DID') )
				{
				call_menu_link(item_number,temp_optionValue);
				}
			}

		if ( (temp_optionValue == 'HANGUP') || (temp_optionValue == 'VOICEMAIL') || (temp_optionValue == 'VMAIL_NO_INST') )
			{
			var temp_prev_optionVal = document.getElementById(temp_prev_option_route_value);
			var temp_optionVal = document.getElementById(temp_option_route_value);

			temp_optionVal.value = temp_prev_optionVal.value;
			}

		if (temp_optionValue == 'EXTENSION') 
			{
			var temp_prev_optionVal = document.getElementById(temp_prev_option_route_value);
			var temp_optionVal = document.getElementById(temp_option_route_value);
			var temp_prev_optionValContext = document.getElementById(temp_prev_option_route_value_context);
			var temp_optionValContext = document.getElementById(temp_option_route_value_context);

			temp_optionVal.value = temp_prev_optionVal.value;
			temp_optionValContext.value = temp_prev_optionValContext.value;
			}

		if (temp_optionValue == 'INGROUP') 
			{
			// In-Group select list
			var temp_prev_optionVal = document.getElementById(temp_prev_option_route_value);
			var temp_prev_optionValIndex = temp_prev_optionVal.selectedIndex;
			var temp_prev_optionValValue = temp_prev_optionVal.options[temp_prev_optionValIndex].value;

			var temp_optionVal = document.getElementById(temp_option_route_value);
			var temp_optionValIndex = 0;
			var temp_optionValLength = temp_optionVal.length;
			var temp_counter=0; 
			while (temp_counter < temp_optionValLength)
				{
				if (temp_prev_optionValValue == temp_optionVal.options[temp_counter].value)
					{temp_optionValIndex = temp_counter;}

				temp_counter++;
				}
			document.getElementById(temp_option_route_value).selectedIndex = temp_optionValIndex;
			call_menu_link(item_number,temp_optionValue);

			// In-Group Handle Method
			var temp2_option_route_value = 'IGhandle_method_' + item_number;
			var temp2_prev_option_route_value = 'IGhandle_method_' + prev_item_number;

			var temp2_prev_optionVal = document.getElementById(temp2_prev_option_route_value);
			var temp2_prev_optionValIndex = temp2_prev_optionVal.selectedIndex;
			var temp2_prev_optionValValue = temp2_prev_optionVal.options[temp2_prev_optionValIndex].value;

			var temp2_optionVal = document.getElementById(temp2_option_route_value);
			var temp2_optionValIndex = 0;
			var temp2_optionValLength = temp2_optionVal.length;
			var temp2_counter=0; 
			while (temp2_counter < temp2_optionValLength)
				{
				if (temp2_prev_optionValValue == temp2_optionVal.options[temp2_counter].value)
					{temp2_optionValIndex = temp2_counter;}

				temp2_counter++;
				}
			document.getElementById(temp2_option_route_value).selectedIndex = temp2_optionValIndex;

			// In-Group Search Method
			var temp3_option_route_value = 'IGsearch_method_' + item_number;
			var temp3_prev_option_route_value = 'IGsearch_method_' + prev_item_number;

			var temp3_prev_optionVal = document.getElementById(temp3_prev_option_route_value);
			var temp3_prev_optionValIndex = temp3_prev_optionVal.selectedIndex;
			var temp3_prev_optionValValue = temp3_prev_optionVal.options[temp3_prev_optionValIndex].value;

			var temp3_optionVal = document.getElementById(temp3_option_route_value);
			var temp3_optionValIndex = 0;
			var temp3_optionValLength = temp3_optionVal.length;
			var temp3_counter=0; 
			while (temp3_counter < temp3_optionValLength)
				{
				if (temp3_prev_optionValValue == temp3_optionVal.options[temp3_counter].value)
					{temp3_optionValIndex = temp3_counter;}

				temp3_counter++;
				}
			document.getElementById(temp3_option_route_value).selectedIndex = temp3_optionValIndex;

			// In-Group Campaign
			var temp4_option_route_value = 'IGcampaign_id_' + item_number;
			var temp4_prev_option_route_value = 'IGcampaign_id_' + prev_item_number;

			var temp4_prev_optionVal = document.getElementById(temp4_prev_option_route_value);
			var temp4_prev_optionValIndex = temp4_prev_optionVal.selectedIndex;
			var temp4_prev_optionValValue = temp4_prev_optionVal.options[temp4_prev_optionValIndex].value;

			var temp4_optionVal = document.getElementById(temp4_option_route_value);
			var temp4_optionValIndex = 0;
			var temp4_optionValLength = temp4_optionVal.length;
			var temp4_counter=0; 
			while (temp4_counter < temp4_optionValLength)
				{
				if (temp4_prev_optionValValue == temp4_optionVal.options[temp4_counter].value)
					{temp4_optionValIndex = temp4_counter;}

				temp4_counter++;
				}
			document.getElementById(temp4_option_route_value).selectedIndex = temp4_optionValIndex;

			// In-Group List ID
			var temp5 = 'IGlist_id_' + item_number;
			var temp5_prev = 'IGlist_id_' + prev_item_number;
			var temp5_optionVal = document.getElementById(temp5);
			var temp5_prev_optionVal = document.getElementById(temp5_prev);
			temp5_optionVal.value = temp5_prev_optionVal.value;

			// In-Group Phone Code
			var temp6 = 'IGphone_code_' + item_number;
			var temp6_prev = 'IGphone_code_' + prev_item_number;
			var temp6_optionVal = document.getElementById(temp6);
			var temp6_prev_optionVal = document.getElementById(temp6_prev);
			temp6_optionVal.value = temp6_prev_optionVal.value;

			// In-Group VID Enter Filename
			var temp7 = 'IGvid_enter_filename_' + item_number;
			var temp7_prev = 'IGvid_enter_filename_' + prev_item_number;
			var temp7_optionVal = document.getElementById(temp7);
			var temp7_prev_optionVal = document.getElementById(temp7_prev);
			temp7_optionVal.value = temp7_prev_optionVal.value;

			// In-Group VID ID Number Filename
			var temp8 = 'IGvid_id_number_filename_' + item_number;
			var temp8_prev = 'IGvid_id_number_filename_' + prev_item_number;
			var temp8_optionVal = document.getElementById(temp8);
			var temp8_prev_optionVal = document.getElementById(temp8_prev);
			temp8_optionVal.value = temp8_prev_optionVal.value;

			// In-Group VID Confirm Filename
			var temp9 = 'IGvid_confirm_filename_' + item_number;
			var temp9_prev = 'IGvid_confirm_filename_' + prev_item_number;
			var temp9_optionVal = document.getElementById(temp9);
			var temp9_prev_optionVal = document.getElementById(temp9_prev);
			temp9_optionVal.value = temp9_prev_optionVal.value;

			// In-Group VID Digits
			var temp10 = 'IGvid_validate_digits_' + item_number;
			var temp10_prev = 'IGvid_validate_digits_' + prev_item_number;
			var temp10_optionVal = document.getElementById(temp10);
			var temp10_prev_optionVal = document.getElementById(temp10_prev);
			temp10_optionVal.value = temp10_prev_optionVal.value;

			// In-Group VID Container
			var temp11 = 'IGvid_container_' + item_number;
			var temp11_prev = 'IGvid_container_' + prev_item_number;
			var temp11_optionVal = document.getElementById(temp11);
			var temp11_prev_optionVal = document.getElementById(temp11_prev);
			temp11_optionVal.value = temp11_prev_optionVal.value;
			}
		}
	<?php
	}


### Javascript for dynamic in-group option value entries
if ( ($ADD==2811) or ($ADD==3811) or ($ADD==3111) or ($ADD==2111) or ($ADD==2011) or ($ADD==4111) or ($ADD==5111) )
	{

	?>
	function dynamic_call_action(option,route,value,chooser_height)
		{
		var call_menu_list = '<?php echo $call_menu_list ?>';
		var ingroup_list = '<?php echo $ingroup_list ?>';
		var IGcampaign_id_list = '<?php echo $IGcampaign_id_list ?>';
		var IGhandle_method_list = '<?php echo $IGhandle_method_list ?>';
		var IGsearch_method_list = "<?php echo $IGsearch_method_list ?>";
		var did_list = '<?php echo $did_list ?>';
		var selected_value = '';
		var selected_context = '';
		var new_content = '';

		var select_list = document.getElementById(option + "");
		var selected_route = select_list.value;
		var span_to_update = document.getElementById(option + "_value_span");

		if (selected_route=='CALLMENU')
			{
			if (route == selected_route)
				{
				selected_value = '<option SELECTED value="' + value + '">' + value + "</option>\n";
				}
			else
				{value = '';}
			new_content = '<span name=' + option + '_value_link id=' + option + '_value_link><a href="<?php echo $ADMIN ?>?ADD=3511&menu_id=' + value + "\"><?php echo _QXZ("Call Menu"); ?>: </a></span><select size=1 name=" + option + '_value id=' + option + "_value onChange=\"dynamic_call_action_link('" + option + "','CALLMENU');\">" + call_menu_list + "\n" + selected_value + '</select>';
			}
		if (selected_route=='INGROUP')
			{
			if ( (route != selected_route) || (value.length < 10) )
				{value = 'SALESLINE,CID,LB,998,TESTCAMP,1,,,,,';}
			var value_split = value.split(",");
			var IGgroup_id =				value_split[0];
			var IGhandle_method =			value_split[1];
			var IGsearch_method =			value_split[2];
			var IGlist_id =					value_split[3];
			var IGcampaign_id =				value_split[4];
			var IGphone_code =				value_split[5];
			var IGvid_enter_filename =		value_split[6];
			var IGvid_id_number_filename =	value_split[7];
			var IGvid_confirm_filename =	value_split[8];
			var IGvid_validate_digits =		value_split[9];
			var IGvid_container =			value_split[10];

			if (route == selected_route)
				{
				selected_value = '<option SELECTED>' + IGgroup_id + '</option>';
				}

			new_content = new_content + '<span name=' + option + '_value_link id=' + option + '_value_link><a href="<?php echo $ADMIN ?>?ADD=3111&group_id=' + IGgroup_id + "\"><?php echo _QXZ("In-Group"); ?>:</a> </span> ";
			new_content = new_content + '<select size=1 name=IGgroup_id_' + option + ' id=IGgroup_id_' + option + " onChange=\"dynamic_call_action_link('IGgroup_id_" + option + "','INGROUP');\">";
			new_content = new_content + '' + ingroup_list + "\n" + selected_value + '</select>';
			new_content = new_content + " &nbsp; <?php echo _QXZ("Handle Method"); ?>: <select size=1 name=IGhandle_method_" + option + ' id=IGhandle_method_' + option + '>';
			new_content = new_content + '' + '<option SELECTED>' + IGhandle_method + '</option>' + IGhandle_method_list + '</select>' + "\n";
			new_content = new_content + "<BR><?php echo _QXZ("Search Method"); ?>: <select size=1 name=IGsearch_method_" + option + ' id=IGsearch_method_' + option + '>';
			new_content = new_content + '' + IGsearch_method_list + "\n" + '<option SELECTED>' + IGsearch_method + '</select>';
			new_content = new_content + " &nbsp; <?php echo _QXZ("List ID"); ?>: <input type=text size=5 maxlength=14 name=IGlist_id_" + option + ' id=IGlist_id_' + option + ' value="' + IGlist_id + '">';
			new_content = new_content + "<BR><?php echo _QXZ("Campaign ID"); ?>: <select size=1 name=IGcampaign_id_" + option + ' id=IGcampaign_id_' + option + '>';
			new_content = new_content + '' + IGcampaign_id_list + "\n" + '<option SELECTED>' + IGcampaign_id + '</select>';
			new_content = new_content + " &nbsp; <?php echo _QXZ("Phone Code"); ?>: <input type=text size=5 maxlength=14 name=IGphone_code_" + option + ' id=IGphone_code_' + option + ' value="' + IGphone_code + '">';
		//	new_content = new_content + "<BR> &nbsp; <?php echo _QXZ("VID Enter Filename"); ?>: <input type=text name=IGvid_enter_filename_" + option + " id=IGvid_enter_filename_" + option + " size=40 maxlength=255 value=\"" + IGvid_enter_filename + "\"> <a href=\"javascript:launch_chooser('IGvid_enter_filename_" + option + "','date');\"><?php echo _QXZ("audio chooser"); ?></a>";
		//	new_content = new_content + "<BR> &nbsp; <?php echo _QXZ("VID ID Number Filename"); ?>: <input type=text name=IGvid_id_number_filename_" + option + " id=IGvid_id_number_filename_" + option + " size=40 maxlength=255 value=\"" + IGvid_id_number_filename + "\"> <a href=\"javascript:launch_chooser('IGvid_id_number_filename_" + option + "','date');\"><?php echo _QXZ("audio chooser"); ?></a>";
		//	new_content = new_content + "<BR> &nbsp; <?php echo _QXZ("VID Confirm Filename"); ?>: <input type=text name=IGvid_confirm_filename_" + option + " id=IGvid_confirm_filename_" + option + " size=40 maxlength=255 value=\"" + IGvid_confirm_filename + "\"> <a href=\"javascript:launch_chooser('IGvid_confirm_filename_" + option + "','date');\"><?php echo _QXZ("audio chooser"); ?></a>";
		//	new_content = new_content + ' &nbsp; <?php echo _QXZ("VID Digits"); ?>: <input type=text size=3 maxlength=3 name=IGvid_validate_digits_' + option + ' id=IGvid_validate_digits_' + option + ' value="' + IGvid_validate_digits + '">';
		//	new_content = new_content + '<BR> &nbsp; <?php echo _QXZ("VID Container"); ?>: <input type=text size=40 maxlength=40 name=IGvid_container_' + option + ' id=IGvid_container_' + option + ' value="' + IGvid_container_ + '">';

			}
		if (selected_route=='DID')
			{
			if (route == selected_route)
				{
				selected_value = '<option SELECTED value="' + value + '">' + value + "</option>\n";
				}
			else
				{value = '';}
			new_content = '<span name=' + option + '_value_link id=' + option + '_value_link><a href="<?php echo $ADMIN ?>?ADD=3311&did_pattern=' + value + "\"><?php echo _QXZ("DID"); ?>:</a> </span><select size=1 name=" + option + '_value id=' + option + "_value onChange=\"dynamic_call_action_link('" + option + "','DID');\">" + did_list + "\n" + selected_value + '</select>';
			}
		if (selected_route=='MESSAGE')
			{
			if (route == selected_route)
				{
				selected_value = value;
				}
			else
				{value = 'nbdy-avail-to-take-call|vm-goodbye';}
			new_content = "<?php echo _QXZ("Audio File"); ?>: <input type=text name=" + option + "_value id=" + option + "_value size=40 maxlength=255 value=\"" + value + "\"> <a href=\"javascript:launch_chooser('" + option + "_value','date');\"><?php echo _QXZ("audio chooser"); ?></a>";
			}
		if (selected_route=='EXTENSION')
			{
			if ( (route != selected_route) || (value.length < 3) )
				{value = '8304,default';}
			var value_split = value.split(",");
			var EXextension =	value_split[0];
			var EXcontext =		value_split[1];

			new_content = "<?php echo _QXZ("Extension"); ?>: <input type=text name=EXextension_" + option + " id=EXextension_" + option + " size=20 maxlength=255 value=\"" + EXextension + "\"> &nbsp; <?php echo _QXZ("Context"); ?>: <input type=text name=EXcontext_" + option + " id=EXcontext_" + option + " size=20 maxlength=255 value=\"" + EXcontext + "\"> ";
			}
		if ( (selected_route=='VOICEMAIL') || (selected_route=='VMAIL_NO_INST') )
			{
			if (route == selected_route)
				{
				selected_value = value;
				}
			else
				{value = '101';}
			new_content = "<?php echo _QXZ("Voicemail Box"); ?>: <input type=text name=" + option + "_value id=" + option + "_value size=12 maxlength=10 value=\"" + value + "\"> <a href=\"javascript:launch_vm_chooser('" + option + "_value','date');\"><?php echo _QXZ("voicemail chooser"); ?></a>";
			}

		if (new_content.length < 1)
			{new_content = selected_route}

		span_to_update.innerHTML = new_content;
		}

	function dynamic_call_action_link(field,route)
		{
		var selected_value = '';
		var new_content = '';

		if ( (route=='CALLMENU') || (route=='DID') )
			{var select_list = document.getElementById(field + "_value");}
		if (route=='INGROUP')
			{
			var select_list = document.getElementById(field + "");
			field = field.replace(/IGgroup_id_/, "");
			}
		var selected_value = select_list.value;
		var span_to_update = document.getElementById(field + "_value_link");

		if (route=='CALLMENU')
			{
			new_content = '<a href="<?php echo $ADMIN ?>?ADD=3511&menu_id=' + selected_value + "\"><?php echo _QXZ("Call Menu"); ?>:</a>";
			}
		if (route=='INGROUP')
			{
			new_content = '<a href="<?php echo $ADMIN ?>?ADD=3111&group_id=' + selected_value + "\"><?php echo _QXZ("In-Group"); ?>:</a>";
			}
		if (route=='DID')
			{
			new_content = '<a href="<?php echo $ADMIN ?>?ADD=3311&did_pattern=' + selected_value + "\"><?php echo _QXZ("DID"); ?>:</a>";
			}

		if (new_content.length < 1)
			{new_content = selected_route}

		span_to_update.innerHTML = new_content;
		}

	<?php
	}
echo "</script>\n";

##### BEGIN - bar chart CSS style #####
?>

<style type="text/css">
<!--


<?php

if ($ADD == '730000000000000')
{
?>

.diff table{
margin          : 1px 1px 1px 1px;
border-collapse : collapse;
border-spacing  : 0;
}

.diff td{
vertical-align : top;
font-family    : monospace;
font-size      : 9;
}
.diff span{
display:block;
min-height:1pm;
margin-top:-1px;
padding:1px 1px 1px 1px;
}

* html .diff span{
height:1px;
}

.diff span:first-child{
margin-top:1px;
}

.diffDeleted span{
border:1px solid rgb(255,51,0);
background:rgb(255,173,153);
}

.diffInserted span{
border:1px solid rgb(51,204,51);
background:rgb(102,255,51);
}

<?php
}
?>

.auraltext
	{
	position: absolute;
	font-size: 0;
	left: -1000px;
	}
.chart_td
	{background-image: url(images/gridline58.gif); background-repeat: repeat-x; background-position: left top; border-left: 1px solid #e5e5e5; border-right: 1px solid #e5e5e5; padding:0; border-bottom: 1px solid #e5e5e5; background-color:transparent;}

.head_style
	{
	background-color: <?php echo $Mmain_bgcolor ?>;
	}
.head_style:hover{background-color: #262626;}

.head_style_selected
	{
	background-color: <?php echo $Mhead_color ?>;
	}
.head_style_selected:hover{background-color: <?php echo $Mhead_color ?>;}

.subhead_style
	{
	background-color: <?php echo $Msubhead_color ?>;
	}
.subhead_style:hover{background-color: white;}

.subhead_style_selected
	{
	background-color: <?php echo $Mselected_color ?>;
	}
.subhead_style_selected:hover{background-color: <?php echo $Mselected_color ?>;}

.adminmenu_style_selected
	{
	background-color: white;
	}
.adminmenu_style_selected:hover{background-color: #E6E6E6;}

.records_list_x
	{
	background-color: #<?php echo $SSstd_row2_background ?>;
	}
.records_list_x:hover{background-color: #E6E6E6;}

.records_list_y
	{
	background-color: #<?php echo $SSstd_row1_background ?>;
	}
.records_list_y:hover{background-color: #E6E6E6;}


.horiz_line
	{
	height: 0px;
	margin: 0px;
	border-bottom: 1px solid #E6E6E6;
	font-size: 1px;
	}
.horiz_line_grey
	{
	height: 0px;
	margin: 0px;
	border-bottom: 1px solid #9E9E9E;
	font-size: 1px;
	}

.sub_sub_head_links
	{
	font-family:HELVETICA;
	font-size:11;
	color:BLACK;
	}

-->

</style>

<?php
##### END - bar chart CSS style #####

echo "</head>\n";

if ( ($SSadmin_modify_refresh > 1) and (preg_match("/^3|^4/",$ADD)) )
	{
	echo "<BODY BGCOLOR=white marginheight=0 marginwidth=0 leftmargin=0 topmargin=0 onLoad=\"modify_refresh_display();\">\n";
	}
else
	{
	echo "<BODY BGCOLOR=white marginheight=0 marginwidth=0 leftmargin=0 topmargin=0>\n";
	}
	
echo "<!-- INTERNATIONALIZATION-LINKS-PLACEHOLDER-VICIDIAL -->\n";


if ($header_font_size < 4) {$header_font_size='12';}
if ($subheader_font_size < 4) {$subheader_font_size='11';}
if ($subcamp_font_size < 4) {$subcamp_font_size='11';}



?>

<?php require_once('./pereine/velzon_header.php'); ?>




<span style="position:absolute;left:300px;top:30px;z-index:1;visibility:hidden;" id="audio_chooser_span">

</span>

<!-- <TABLE  cellpadding=2 cellspacing=0 WIDTH=<?php echo $page_width ?> HEIGHT=15>
<TR BGCOLOR=#<?php echo "$SSmenu_background" ?>><TD ALIGN=LEFT BGCOLOR=#<?php echo "$SSmenu_background" ?>><FONT FACE="ARIAL,HELVETICA" COLOR=WHITE SIZE=2><B><a href="<?php echo $admin_home_url_LU ?>" STYLE="text-decoration:none;"><FONT FACE="ARIAL,HELVETICA" COLOR=WHITE SIZE=1><?php echo _QXZ("HOME"); ?></a> | <A HREF="../agc/timeclock.php?referrer=admin" STYLE="text-decoration:none;"><FONT FACE="ARIAL,HELVETICA" COLOR=WHITE SIZE=1> <?php echo _QXZ("Timeclock"); ?></A> | <a href="manager_chat_interface.php" STYLE="text-decoration:none;"><FONT FACE="ARIAL,HELVETICA" COLOR=WHITE SIZE=1> <?php echo _QXZ("Chat"); ?></a> | <a href="<?php echo $ADMIN ?>?force_logout=1" STYLE="text-decoration:none;"><FONT FACE="ARIAL,HELVETICA" COLOR=WHITE SIZE=1><?php echo _QXZ("Logout"); ?></a> <FONT FACE="ARIAL,HELVETICA" COLOR=WHITE SIZE=1>(<?php echo $PHP_AUTH_USER ?>)</FONT>

<?php
if ($SSenable_languages == '1')
	{
	echo " | <a href=\"$ADMIN?ADD=999989\" STYLE=\"text-decoration:none;\"><FONT FACE=\"ARIAL,HELVETICA\" COLOR=WHITE SIZE=1>"._QXZ("Change language")."</a>";
	}
?>


</TD><TD ALIGN=RIGHT><FONT FACE="ARIAL,HELVETICA" COLOR=WHITE SIZE=2><B><?php echo date("l F j, Y G:i:s A") ?> &nbsp; </B></TD></TR>

<TR BGCOLOR=#<?php echo "$SSmenu_background" ?>> -->







</TR>
	<?php
	if ( (strlen($list_sh) > 25) and (strlen($campaigns_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $subcamp_color ?>><TD ALIGN=LEFT COLSPAN=2><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=10"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Campaigns"); ?> </a> &nbsp; &nbsp; |<?php if ($add_copy_disabled < 1) { ?>
&nbsp; &nbsp; <a href="<?php echo $ADMIN ?>?ADD=11"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Campaign"); ?> </a> &nbsp; &nbsp; | &nbsp; &nbsp; <a href="<?php echo $ADMIN ?>?ADD=12"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Copy Campaign"); ?> </a> &nbsp; &nbsp; |<?php } ?> &nbsp; &nbsp; <a href="./AST_timeonVDADallSUMMARY.php"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Real-Time Campaigns Summary"); ?> </a></TD></TR>
		<?php }
	if ( (strlen($droplist_sh) > 25) and ($SSenable_drop_lists > 0) ) { 
		?>
	<TR BGCOLOR=<?php echo $subcamp_color ?>><TD ALIGN=LEFT COLSPAN=2><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=130"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Drop Lists"); ?> </a> &nbsp; &nbsp; |<?php if ($add_copy_disabled < 1) { ?>
&nbsp; &nbsp; <a href="<?php echo $ADMIN ?>?ADD=131"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Drop List"); ?> </a><?php } ?></TD></TR>
		<?php }
	if (strlen($times_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $times_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=100000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Call Times"); ?> </a> &nbsp;|<?php if ($add_copy_disabled < 1) { ?>
 <a href="<?php echo $ADMIN ?>?ADD=111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Call Time"); ?> </a> &nbsp;|<?php } ?> <a href="<?php echo $ADMIN ?>?ADD=1000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show State Call Times"); ?> </a> &nbsp;|<?php if ($add_copy_disabled < 1) { ?> <a href="<?php echo $ADMIN ?>?ADD=1111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New State Call Time"); ?> </a> &nbsp;|<?php } ?> <a href="<?php echo $ADMIN ?>?ADD=1200000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Holidays"); ?> </a> &nbsp;|<?php if ($add_copy_disabled < 1) { ?> <a href="<?php echo $ADMIN ?>?ADD=1211111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add Holiday"); ?> </a><?php } ?></TD></TR>
		<?php } 
	if (strlen($shifts_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $shifts_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=130000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Shifts"); ?> </a> &nbsp;|<?php if ($add_copy_disabled < 1) { ?> <a href="<?php echo $ADMIN ?>?ADD=131111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Shift"); ?> </a><?php } ?></TD></TR>
		<?php } 
	if (strlen($phones_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $phones_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=10000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Phones"); ?> </a>&nbsp;|<?php if ($add_copy_disabled < 1) { ?>&nbsp;<a href="<?php echo $ADMIN ?>?ADD=11111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Phone"); ?> </a>&nbsp;|<?php } ?><?php if ($add_copy_disabled < 1) { ?>&nbsp;<a href="<?php echo $ADMIN ?>?ADD=12222222222"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Copy an Existing Phone"); ?> </a>&nbsp;|<?php } ?>&nbsp;<a href="<?php echo $ADMIN ?>?ADD=12000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Phone Alias List"); ?> </a>&nbsp;|<?php if ($add_copy_disabled < 1) { ?>&nbsp;<a href="<?php echo $ADMIN ?>?ADD=12111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Phone Alias"); ?> </a>&nbsp;|<?php } ?>&nbsp;<a href="<?php echo $ADMIN ?>?ADD=13000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Group Alias List"); ?> </a>&nbsp;|<?php if ($add_copy_disabled < 1) { ?>&nbsp;<a href="<?php echo $ADMIN ?>?ADD=13111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Group Alias"); ?> </a><?php } ?></TD></TR>
		<?php }
	if (strlen($conference_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $conference_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=1000000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Conferences"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=1111111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Conference"); ?> </a> &nbsp; |<?php } ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=10000000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show VICIDIAL Conferences"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=11111111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New VICIDIAL Conference"); ?> </a><?php } ?> | &nbsp; <a href="<?php echo $ADMIN ?>?ADD=12000000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show ConfBridges"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=12111111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add ConfBridge"); ?> </a><?php } ?> </TD></TR>
		<?php }
	if ( (strlen($server_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $server_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=100000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Servers"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=111111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Server"); ?> </a><?php } ?></TD></TR>
	<?php }
	if ( (strlen($templates_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $templates_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=130000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Templates"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=131111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Template"); ?> </a><?php } ?></TD></TR>
	<?php }
	if ( (strlen($carriers_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $carriers_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=140000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Carriers"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=141111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Carrier"); ?> </a> &nbsp; | &nbsp; <a href="<?php echo $ADMIN ?>?ADD=140111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Copy A Carrier"); ?> </a><?php } ?></TD></TR>
	<?php }
	if ( (strlen($emails_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $emails_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="admin_email_accounts.php"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Email Accounts"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="admin_email_accounts.php?eact=ADD"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Account"); ?> </a> &nbsp; | &nbsp; <a href="admin_email_accounts.php?eact=COPY"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Copy An Account"); ?> </a><?php } ?></TD></TR>
	<?php }
	if ( (strlen($tts_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $tts_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=150000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show TTS Entries"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=151111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New TTS Entry"); ?> </a><?php } ?></TD></TR>
	<?php }
	if ( (strlen($cc_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $cc_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="callcard_admin.php"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("CallCard Summary"); ?> </a> &nbsp; | &nbsp; <a href="callcard_admin.php?action=CALLCARD_RUNS"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Runs"); ?> </a> &nbsp; | &nbsp; <a href="callcard_admin.php?action=CALLCARD_BATCHES"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Batches"); ?> </a> &nbsp; | &nbsp; <a href="callcard_admin.php?action=SEARCH"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("CallCard Search"); ?> </a> &nbsp; | &nbsp; <a href="callcard_report_export.php"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("CallCard Log Export"); ?> </a> &nbsp; | &nbsp; <a href="callcard_admin.php?action=GENERATE"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("CallCard Generate New Numbers"); ?> </a></TD></TR>
	<?php }
	if ( (strlen($moh_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $moh_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=160000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show MOH Entries"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=161111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New MOH Entry"); ?> </a><?php } ?></TD></TR>
	<?php }
	if ( (strlen($languages_sh) > 25) and (strlen($admin_hh) > 25) and ($SSenable_languages > 0) ) { 
		?>
	<TR BGCOLOR=<?php echo $languages_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="admin_languages.php?ADD=163000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Languages"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="admin_languages.php?ADD=163111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Language"); ?></FONT></a> &nbsp; | &nbsp; <a href="admin_languages.php?ADD=163211111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Copy A Languages Entry"); ?></FONT></a> &nbsp; | &nbsp; <a href="admin_languages.php?ADD=163311111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Import Phrases"); ?></FONT></a> &nbsp; | &nbsp; <a href="admin_languages.php?ADD=163411111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Export Phrases"); ?></FONT></a> &nbsp; <?php } ?></TD></TR>
	<?php }
	if ( (preg_match("/soundboard/",$SSactive_modules) ) or ($SSagent_soundboards > 0) )
		{
	if ( (strlen($soundboard_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $soundboard_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="admin_soundboard.php?ADD=162000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Soundboard Entries"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="admin_soundboard.php?ADD=162111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Soundboard Entry"); ?></FONT></a> &nbsp; | &nbsp; <a href="admin_soundboard.php?ADD=162211111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Copy A Soundboard Entry"); ?></FONT></a> &nbsp; <?php } ?></TD></TR>
	<?php
		}
	}
	if ( (strlen($vm_sh) > 25) and (strlen($admin_hh) > 25) ) { 
		?>
	<TR BGCOLOR=<?php echo $vm_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=170000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Show Voicemail Entries"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=171111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A New Voicemail Entry"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($settings_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $settings_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=311111111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("System Settings"); ?> </a></TD></TR>
	<?php }
	if (strlen($label_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $label_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=180000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Screen Labels"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=181111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A Screen Label"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($colors_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $colors_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=182000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Screen Colors"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=182111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A Screen Colors"); ?> </a><?php } ?> &nbsp; | &nbsp; <a href="<?php echo $ADMIN ?>?ADD=311111111111111#screen_colors"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Change Active Screen Colors"); ?> </a></TD></TR>
	<?php }
	if (strlen($cts_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $cts_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=190000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Contacts"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=191111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A Contact"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($sc_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $sc_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=192000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Settings Containers"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=192111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A Settings Container"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($ar_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $ar_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=194000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Automated Reports"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=194111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add An Automated Report"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($il_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $il_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=195000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("IP Lists"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=195111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add An IP List"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($sg_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $sg_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=193000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Status Groups"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=193111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A Status Group"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($cg_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $cg_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=196000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("CID Groups"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=196111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A CID Group"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($vmmg_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $vmmg_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=197000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("VM Message Groups"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=197111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A VM Message Group"); ?> </a><?php } ?></TD></TR>
	<?php }
	if (strlen($qg_sh) > 25) { 
		?>
	<TR BGCOLOR=<?php echo $qg_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=198000000000"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Queue Groups"); ?> </a> &nbsp; |<?php if ($add_copy_disabled < 1) { ?> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=198111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Add A Queue Group"); ?> </a><?php } ?></TD></TR>
	<?php }
	if ( (strlen($status_sh) > 25) and (!preg_match('/campaign|user/i',$hh) ) ) { 
		?>
	<TR BGCOLOR=<?php echo $status_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=321111111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("System Statuses"); ?> </a> &nbsp; | &nbsp; <a href="<?php echo $ADMIN ?>?ADD=331111111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("Status Categories"); ?> </a> &nbsp; | &nbsp; <a href="<?php echo $ADMIN ?>?ADD=341111111111111"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"> <?php echo _QXZ("QC Status Codes"); ?> </a></TD></TR>
	<?php }

	if ( ($ADD=='3') or ($ADD=='3') ) { 
		?>
	<TR BGCOLOR=<?php echo $users_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="./user_stats.php?user=<?php echo $user ?>" STYLE="text-decoration:none;"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"><?php echo _QXZ("User Stats"); ?> </a> &nbsp; | &nbsp; <a href="./user_status.php?user=<?php echo $user ?>" STYLE="text-decoration:none;"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"><?php echo _QXZ("User Status"); ?> </a> &nbsp; | &nbsp; <a href="./AST_agent_time_sheet.php?agent=<?php echo $user ?>" STYLE="text-decoration:none;"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"><?php echo _QXZ("Time Sheet"); ?> </a> &nbsp; | &nbsp; <a href="./AST_agent_days_detail.php?user=<?php echo $user ?>" STYLE="text-decoration:none;"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"><?php echo _QXZ("Days Status"); ?> </a></TD></TR>
	<?php }


if ( ($ADD=='999988') or ($ADD=='999987') or ($ADD=='999986') or ($ADD=='999985') ) 
	{ 
	?>
	<TR BGCOLOR=<?php echo $users_color ?>><TD ALIGN=LEFT COLSPAN=2> &nbsp; <a href="<?php echo $ADMIN ?>?ADD=999988" STYLE="text-decoration:none;"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"><?php echo _QXZ("Available Timezones"); ?> </a> &nbsp; | &nbsp; <a href="<?php echo $ADMIN ?>?ADD=999987" STYLE="text-decoration:none;"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"><?php echo _QXZ("Phone Codes"); ?> </a> &nbsp; | &nbsp; <a href="<?php echo $ADMIN ?>?ADD=999986" STYLE="text-decoration:none;"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"><?php echo _QXZ("Postal Codes"); ?> </a> &nbsp; | &nbsp; <a href="<?php echo $ADMIN ?>?ADD=999985" STYLE="text-decoration:none;"><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;color:BLACK;"><?php echo _QXZ("Postal Codes Cities"); ?> </a> &nbsp; </TD></TR>
	<?php 
	}
else
	{
	if (strlen($reports_hh) > 25) { 
		?>
		<TR BGCOLOR=<?php echo $reports_color ?>><TD ALIGN=LEFT COLSPAN=2><FONT STYLE="font-family:HELVETICA;font-size:<?php echo $subcamp_font_size ?>;"><B> &nbsp; </B></TD></TR>
		<?php } 
	}
?>
<TR><TD ALIGN=LEFT COLSPAN=2 HEIGHT=2 BGCOLOR=#<?php echo "$SSmenu_background" ?>></TD></TR>
<TR><TD ALIGN=LEFT COLSPAN=2>
<?php 
######################### FULL HTML HEADER END #######################################
}
