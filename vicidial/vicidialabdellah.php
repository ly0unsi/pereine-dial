<?php
//abdellah
// nodified by abdellah 
# admin.php - VICIDIAL administration page
# adfghfdgdh
# Copyright (C) 2024  Matt Florell <vicidial@gmail.com>    LICENSE: AGPLv2
# hgfhg



// abdellah


// modified

$startMS = microtime();
$php_script='admin.php';

// abdellah
// fffffffffffffff
// fffffffffffffff
// fffffffffffffff
require("dbconnect_mysqli.php");
require("functions.php");

######################################################################################################
######################################################################################################
#######   static variable settings for display options
######################################################################################################
######################################################################################################

$page_width='100%';
$section_width='100%';
$header_font_size='12';
$subheader_font_size='11';
$subcamp_font_size='11';
$header_selected_bold='<b>';
$header_nonselected_bold='';
$users_color =		'#FFFF99';
$campaigns_color =	'#FFCC99';
$lists_color =		'#FFCCCC';
$ingroups_color =	'#CC99FF';
$remoteagent_color ='#CCFFCC';
$usergroups_color =	'#CCFFFF';
$scripts_color =	'#99FFCC';
$filters_color =	'#CCCCCC';
$admin_color =		'#FF99FF';
$reports_color =	'#99FF33';
$times_color =		'#FF33FF';
$shifts_color =		'#FF33FF';
$phones_color =		'#FF33FF';
$conference_color =	'#FF33FF';
$server_color =		'#FF33FF';
$templates_color =	'#FF33FF';
$carriers_color =	'#FF33FF';
$settings_color = 	'#FF33FF';
$label_color =		'#FF33FF';
$status_color = 	'#FF33FF';
$moh_color = 		'#FF33FF';
$vm_color = 		'#FF33FF';
$tts_color = 		'#FF33FF';
$cc_color = 		'#FF33FF';
$cts_color = 		'#FF33FF';
$subcamp_color =	'#FF9933';
$users_font =		'BLACK';
$campaigns_font =	'BLACK';
$lists_font =		'BLACK';
$ingroups_font =	'BLACK';
$remoteagent_font =	'BLACK';
$usergroups_font =	'BLACK';
$scripts_font =		'BLACK';
$filters_font =		'BLACK';
$admin_font =		'BLACK';
$qc_font =			'BLACK';
$reports_font =		'BLACK';
	$times_font =		'BLACK';
	$phones_font =		'BLACK';
	$conference_font =	'BLACK';
	$server_font =		'BLACK';
	$settings_font = 	'BLACK';
	$label_font = 	'BLACK';
	$status_font = 	'BLACK';
	$moh_font = 	'BLACK';
	$vm_font = 		'BLACK';
	$tts_font = 	'BLACK';
	$cc_font =		'BLACK';
	$cts_font = 	'BLACK';
$subcamp_font =		'BLACK';

### comment this section out for colorful section headings
$users_color =		'#E6E6E6';
$campaigns_color =	'#E6E6E6';
$lists_color =		'#E6E6E6';
$ingroups_color =	'#E6E6E6';
$remoteagent_color ='#E6E6E6';
$usergroups_color =	'#E6E6E6';
$scripts_color =	'#E6E6E6';
$filters_color =	'#E6E6E6';
$admin_color =		'#E6E6E6';
$qc_color =			'#E6E6E6';
$reports_color =	'#E6E6E6';
	$times_color =		'#C6C6C6';
	$shifts_color =		'#C6C6C6';
	$phones_color =		'#C6C6C6';
	$conference_color =	'#C6C6C6';
	$server_color =		'#C6C6C6';
	$templates_color =	'#C6C6C6';
	$carriers_color =	'#C6C6C6';
	$settings_color = 	'#C6C6C6';
	$label_color =		'#C6C6C6';
	$colors_color =		'#C6C6C6';
	$status_color = 	'#C6C6C6';
	$moh_color = 		'#C6C6C6';
	$vm_color = 		'#C6C6C6';
	$tts_color = 		'#C6C6C6';
	$cc_color = 		'#C6C6C6';
	$cts_color = 		'#C6C6C6';
	$sc_color = 		'#C6C6C6';
	$sg_color = 		'#C6C6C6';
	$ar_color = 		'#C6C6C6';
	$il_color = 		'#C6C6C6';
	$cg_color = 		'#C6C6C6';
	$vmmg_color = 		'#C6C6C6';
$subcamp_color =	'#C6C6C6';

$Msubhead_color =	'#E6E6E6';
$Mselected_color =	'#C6C6C6';
$Mhead_color =		'#A3C3D6';
$Mmain_bgcolor =	'#015B91';

###


$PHP_AUTH_USER=$_SERVER['PHP_AUTH_USER'];
$PHP_AUTH_PW=$_SERVER['PHP_AUTH_PW'];
$PHP_SELF=$_SERVER['PHP_SELF'];
$PHP_SELF = preg_replace('/\.php.*/i','.php',$PHP_SELF);
$QUERY_STRING = getenv("QUERY_STRING");
$groups=array();

$Vreports = 'NONE, Real-Time Main Report, Real-Time Campaign Summary, Real-Time Whiteboard Report, VERM Reports, Inbound Report, Inbound Report by DID, Inbound Service Level Report, Inbound Summary Hourly Report, Inbound Daily Report, Inbound DID Report, Inbound DID Summary Report, Agent DID Report, Inbound DID Detail Report, Inbound IVR Report, Inbound Forecasting Report, Advanced Forecasting Report, Outbound Calling Report, Outbound Summary Interval Report, Outbound IVR Report, Callmenu Survey Report, Outbound Lead Source Report, Fronter - Closer Report, Fronter - Closer Detail Report, Lists Campaign Statuses Report, Lists Statuses Report, Campaign Status List Report, Export Calls Report, Export Leads Report, Agent Time Detail, Agent Status Detail, Agent Inbound Status Summary, Agent Performance Detail, Team Performance Detail, Performance Comparison Report, Single Agent Daily, Single Agent Daily Time, User Group Login Report, User Group Hourly Report, User Group Detail Hourly Report, User Timeclock Report, User Group Timeclock Status Report, User Timeclock Detail Report, Server Performance Report, Administration Change Log, List Update Stats, User Stats, User Time Sheet, Download List, Dialer Inventory Report, Maximum System Stats, Maximum Stats Detail, Search Leads Logs, Email Log Report, Carrier Log Report, Campaign Debug, Shared Debug, Asterisk Debug, Hangup Cause Report, Lists Pass Report, Called Counts List IDs Report, Agent Debug Log Report, Agent Parked Call Report, Agent-Manager Chat Log, Recording Access Log Report, API Log Report, Real-Time Monitoring Log Report, AMD Log Report, 3-Way Press Log Report, SIP Event Report, Caller ID Log Report, Quality Control Report, Settings Compare, Phone Stats, Hopper List Report, In-Group User List, Webserver-URL Report, VDAD Debug Log Report, URL Log Report, Medialog Inventory Report, Asterisk Debug, SPH Report, Shared Debug, Process Report, Group Alias Report, Hangup Cause Report, IVR Filter Report, LAGGED Agent Log Report, LAGGED Agent Log Summary Report, Agent Latency Report, Latency Gaps Report, Agent Disposition Report, Agent Performance Report, Carrier Log Report, Dial Log Report, Inbound Extension Stats, Agents Time On Calls, Callbacks Export, User Logins Report, Demographic Quotas Report';

$UGreports = 'ALL REPORTS, NONE, Real-Time Main Report, Real-Time Campaign Summary, Real-Time Whiteboard Report, VERM Reports, Inbound Report, Inbound Report by DID, Inbound Service Level Report, Inbound Summary Hourly Report, Inbound Daily Report, Inbound DID Report, Inbound DID Summary Report, Agent DID Report, Inbound DID Detail Report, Inbound Email Report, Inbound Chat Report, Inbound IVR Report, Inbound Forecasting Report, Advanced Forecasting Report, Outbound Calling Report, Outbound Summary Interval Report, Outbound IVR Report, Callmenu Survey Report, Outbound Lead Source Report, Fronter - Closer Report, Fronter - Closer Detail Report, Lists Campaign Statuses Report, Lists Statuses Report, Campaign Status List Report, Export Calls Report, Export Leads Report, Agent Time Detail, Agent Status Detail, Agent Inbound Status Summary, Agent Performance Detail, Team Performance Detail, Performance Comparison Report, Single Agent Daily, Single Agent Daily Time, User Group Login Report, User Group Hourly Report, User Group Detail Hourly Report, User Timeclock Report, User Group Timeclock Status Report, User Timeclock Detail Report, Server Performance Report, Administration Change Log, List Update Stats, User Stats, User Time Sheet, Download List, Dialer Inventory Report, Custom Reports Links, CallCard Search, Maximum System Stats, Maximum Stats Detail, Search Leads Logs, Email Log Report, Lists Pass Report, Called Counts List IDs Report, Front Page System Summary, Report Page Servers Summary, Admin Utilities Page, Agent Debug Log Report, Agent Parked Call Report, Agent-Manager Chat Log, Recording Access Log Report, API Log Report, Real-Time Monitoring Log Report, AMD Log Report, 3-Way Press Log Report, SIP Event Report, Caller ID Log Report, Quality Control Report, Settings Compare, Phone Stats, Hopper List Report, In-Group User List, Webserver-URL Report, VDAD Debug Log Report, URL Log Report, Medialog Inventory Report, Asterisk Debug, SPH Report, Shared Debug, Process Report, Group Alias Report, Hangup Cause Report, IVR Filter Report, LAGGED Agent Log Report, LAGGED Agent Log Summary Report, Agent Latency Report, Latency Gaps Report, Agent Disposition Report, Agent Performance Report, Carrier Log Report, Dial Log Report, Inbound Extension Stats, Agents Time On Calls, Callbacks Export, User Logins Report, Demographic Quotas Report, VERM QA Links';

$Vtables = 'NONE,log_noanswer,did_agent_log,contact_information';

$APIfunctions = 'ALL_FUNCTIONS add_group_alias add_lead add_list add_phone add_phone_alias add_user agent_ingroup_info agent_stats_export agent_status audio_playback blind_monitor call_agent callid_info change_ingroups check_phone_number copy_user did_log_export external_add_lead external_dial external_hangup external_pause external_status in_group_status logout moh_list ingroup_list campaigns_list callmenu_list hopper_list call_dispo_report agent_campaigns park_call pause_code preview_dial_action ra_call_control recording recording_lookup send_dtmf server_refresh set_timer_action sounds_list st_get_agent_active_lead st_login_log transfer_conference update_fields update_lead batch_update_lead update_list list_info list_custom_fields update_log_entry update_phone update_phone_alias update_user user_group_status vm_list vm_message webphone_url webserver logged_in_agents update_campaign update_alt_url update_presets add_did update_did lead_field_info lead_all_info lead_callback_info phone_number_log switch_lead ccc_lead_info lead_status_search lead_search lead_dearchive call_status_stats calls_in_queue_count force_fronter_leave_3way force_fronter_audio_stop update_cid_group_entry add_dnc_phone add_fpg_phone send_notification refresh_panel';

$browser_alert_sounds_list = 'bark_dog,beep_double,beep_five,beep_up,bell_double,bell_school,bird,blaster1,blaster2,buzz1,buzz2,cash_register,chat_alert,click_single,click_double,click_quiet,close_encounter,confirmation,ding,droplet,droplet_double,elephant,email_alert,hold_tone,horn_bike,horn_car,horn_car_triple,horn_clown,horn_double,horn_train,meow_cat,scream_wilhelm,silence_quick,siren,slide_down,slide_up,swish,teleport1,teleport2,ticking_two,ticking_four,ticking_six,whip,whistle_up,whistle_two,whistle_three,whoosh,xylophone1,xylophone2,xylophone3,xylophone4,20Hz_tone';

$HTMLcolors = 'IndianRed,CD5C5C|LightCoral,F08080|Salmon,FA8072|DarkSalmon,E9967A|LightSalmon,FFA07A|Crimson,DC143C|Red,FF0000|FireBrick,B22222|DarkRed,8B0000|Pink,FFC0CB|LightPink,FFB6C1|HotPink,FF69B4|DeepPink,FF1493|MediumVioletRed,C71585|PaleVioletRed,DB7093|LightSalmon,FFA07A|Coral,FF7F50|Tomato,FF6347|OrangeRed,FF4500|DarkOrange,FF8C00|Orange,FFA500|Gold,FFD700|Yellow,FFFF00|LightYellow,FFFFE0|LemonChiffon,FFFACD|LightGoldenrodYellow,FAFAD2|PapayaWhip,FFEFD5|Moccasin,FFE4B5|PeachPuff,FFDAB9|PaleGoldenrod,EEE8AA|Khaki,F0E68C|DarkKhaki,BDB76B|Lavender,E6E6FA|Thistle,D8BFD8|Plum,DDA0DD|Violet,EE82EE|Orchid,DA70D6|Fuchsia,FF00FF|Magenta,FF00FF|MediumOrchid,BA55D3|MediumPurple,9370DB|RebeccaPurple,663399|BlueViolet,8A2BE2|DarkViolet,9400D3|DarkOrchid,9932CC|DarkMagenta,8B008B|Purple,800080|Indigo,4B0082|SlateBlue,6A5ACD|DarkSlateBlue,483D8B|MediumSlateBlue,7B68EE|GreenYellow,ADFF2F|Chartreuse,7FFF00|LawnGreen,7CFC00|Lime,00FF00|LimeGreen,32CD32|PaleGreen,98FB98|LightGreen,90EE90|MediumSpringGreen,00FA9A|SpringGreen,00FF7F|MediumSeaGreen,3CB371|SeaGreen,2E8B57|ForestGreen,228B22|Green,008000|DarkGreen,006400|YellowGreen,9ACD32|OliveDrab,6B8E23|Olive,808000|DarkOliveGreen,556B2F|MediumAquamarine,66CDAA|DarkSeaGreen,8FBC8B|LightSeaGreen,20B2AA|DarkCyan,008B8B|Teal,008080|Aqua,00FFFF|Cyan,00FFFF|LightCyan,E0FFFF|PaleTurquoise,AFEEEE|Aquamarine,7FFFD4|Turquoise,40E0D0|MediumTurquoise,48D1CC|DarkTurquoise,00CED1|CadetBlue,5F9EA0|SteelBlue,4682B4|LightSteelBlue,B0C4DE|PowderBlue,B0E0E6|LightBlue,ADD8E6|SkyBlue,87CEEB|LightSkyBlue,87CEFA|DeepSkyBlue,00BFFF|DodgerBlue,1E90FF|CornflowerBlue,6495ED|MediumSlateBlue,7B68EE|RoyalBlue,4169E1|Blue,0000FF|MediumBlue,0000CD|DarkBlue,00008B|Navy,000080|MidnightBlue,191970|Cornsilk,FFF8DC|BlanchedAlmond,FFEBCD|Bisque,FFE4C4|NavajoWhite,FFDEAD|Wheat,F5DEB3|BurlyWood,DEB887|Tan,D2B48C|RosyBrown,BC8F8F|SandyBrown,F4A460|Goldenrod,DAA520|DarkGoldenrod,B8860B|Peru,CD853F|Chocolate,D2691E|SaddleBrown,8B4513|Sienna,A0522D|Brown,A52A2A|Maroon,800000|White,FFFFFF|Snow,FFFAFA|HoneyDew,F0FFF0|MintCream,F5FFFA|Azure,F0FFFF|AliceBlue,F0F8FF|GhostWhite,F8F8FF|WhiteSmoke,F5F5F5|SeaShell,FFF5EE|Beige,F5F5DC|OldLace,FDF5E6|FloralWhite,FFFAF0|Ivory,FFFFF0|AntiqueWhite,FAEBD7|Linen,FAF0E6|LavenderBlush,FFF0F5|MistyRose,FFE4E1|Gainsboro,DCDCDC|LightGray,D3D3D3|Silver,C0C0C0|DarkGray,A9A9A9|Gray,808080|DimGray,696969|LightSlateGray,778899|SlateGray,708090|DarkSlateGray,2F4F4F|Black,000000';

### BEGIN housecleaning of old static report files, if not done before ###
if (!file_exists('old_clear'))
	{
	array_map('unlink', glob("./*.csv"));
	array_map('unlink', glob("./*.xls"));
	array_map('unlink', glob("./ploticus/*"));
	unlink('project_auth_entries.txt');

	$clear_file=fopen('old_clear', "w");
	fwrite($clear_file, '1');
	fclose($clear_file);
	}
if (file_exists('project_auth_entries.txt'))
	{
	unlink('project_auth_entries.txt');
	}
### END housecleaning of old static report files ###


######################################################################################################
######################################################################################################
#######   Form variable declaration
######################################################################################################
######################################################################################################

if (isset($_GET["DB"]))				{$DB=$_GET["DB"];}
	elseif (isset($_POST["DB"]))	{$DB=$_POST["DB"];}
if (isset($_GET["access_recordings"]))			{$access_recordings=$_GET["access_recordings"];}
	elseif (isset($_POST["access_recordings"]))	{$access_recordings=$_POST["access_recordings"];}
if (isset($_GET["active"]))				{$active=$_GET["active"];}
	elseif (isset($_POST["active"]))	{$active=$_POST["active"];}
if (isset($_GET["adaptive_dl_diff_target"]))			{$adaptive_dl_diff_target=$_GET["adaptive_dl_diff_target"];}
	elseif (isset($_POST["adaptive_dl_diff_target"]))	{$adaptive_dl_diff_target=$_POST["adaptive_dl_diff_target"];}
if (isset($_GET["adaptive_dropped_percentage"]))		{$adaptive_dropped_percentage=$_GET["adaptive_dropped_percentage"];}
	elseif (isset($_POST["adaptive_dropped_percentage"])){$adaptive_dropped_percentage=$_POST["adaptive_dropped_percentage"];}
if (isset($_GET["adaptive_intensity"]))	{$adaptive_intensity=$_GET["adaptive_intensity"];}
	elseif (isset($_POST["adaptive_intensity"]))	{$adaptive_intensity=$_POST["adaptive_intensity"];}
if (isset($_GET["adaptive_latest_server_time"]))	{$adaptive_latest_server_time=$_GET["adaptive_latest_server_time"];}
	elseif (isset($_POST["adaptive_latest_server_time"])){$adaptive_latest_server_time=$_POST["adaptive_latest_server_time"];}
if (isset($_GET["adaptive_maximum_level"]))	{$adaptive_maximum_level=$_GET["adaptive_maximum_level"];}
	elseif (isset($_POST["adaptive_maximum_level"]))	{$adaptive_maximum_level=$_POST["adaptive_maximum_level"];}
if (isset($_GET["SUB"]))			{$SUB=$_GET["SUB"];}
	elseif (isset($_POST["SUB"]))	{$SUB=$_POST["SUB"];}
if (isset($_GET["ADD"]))			{$ADD=$_GET["ADD"];}
	elseif (isset($_POST["ADD"]))	{$ADD=$_POST["ADD"];}
if (isset($_GET["admin_hangup_enabled"]))	{$admin_hangup_enabled=$_GET["admin_hangup_enabled"];}
	elseif (isset($_POST["admin_hangup_enabled"]))	{$admin_hangup_enabled=$_POST["admin_hangup_enabled"];}
if (isset($_GET["admin_hijack_enabled"]))	{$admin_hijack_enabled=$_GET["admin_hijack_enabled"];}
	elseif (isset($_POST["admin_hijack_enabled"]))	{$admin_hijack_enabled=$_POST["admin_hijack_enabled"];}
if (isset($_GET["admin_monitor_enabled"]))	{$admin_monitor_enabled=$_GET["admin_monitor_enabled"];}
	elseif (isset($_POST["admin_monitor_enabled"]))	{$admin_monitor_enabled=$_POST["admin_monitor_enabled"];}
if (isset($_GET["AFLogging_enabled"]))	{$AFLogging_enabled=$_GET["AFLogging_enabled"];}
	elseif (isset($_POST["AFLogging_enabled"]))	{$AFLogging_enabled=$_POST["AFLogging_enabled"];}
if (isset($_GET["agent_choose_ingroups"]))	{$agent_choose_ingroups=$_GET["agent_choose_ingroups"];}
	elseif (isset($_POST["agent_choose_ingroups"]))	{$agent_choose_ingroups=$_POST["agent_choose_ingroups"];}
if (isset($_GET["agentcall_manual"]))	{$agentcall_manual=$_GET["agentcall_manual"];}
	elseif (isset($_POST["agentcall_manual"]))	{$agentcall_manual=$_POST["agentcall_manual"];}
if (isset($_GET["agentonly_callbacks"]))	{$agentonly_callbacks=$_GET["agentonly_callbacks"];}
	elseif (isset($_POST["agentonly_callbacks"]))	{$agentonly_callbacks=$_POST["agentonly_callbacks"];}
if (isset($_GET["AGI_call_logging_enabled"]))	{$AGI_call_logging_enabled=$_GET["AGI_call_logging_enabled"];}
	elseif (isset($_POST["AGI_call_logging_enabled"]))	{$AGI_call_logging_enabled=$_POST["AGI_call_logging_enabled"];}
if (isset($_GET["agi_output"]))	{$agi_output=$_GET["agi_output"];}
	elseif (isset($_POST["agi_output"]))	{$agi_output=$_POST["agi_output"];}
if (isset($_GET["allcalls_delay"]))	{$allcalls_delay=$_GET["allcalls_delay"];}
	elseif (isset($_POST["allcalls_delay"]))	{$allcalls_delay=$_POST["allcalls_delay"];}
if (isset($_GET["allow_closers"]))	{$allow_closers=$_GET["allow_closers"];}
	elseif (isset($_POST["allow_closers"]))	{$allow_closers=$_POST["allow_closers"];}
if (isset($_GET["alt_number_dialing"]))	{$alt_number_dialing=$_GET["alt_number_dialing"];}
	elseif (isset($_POST["alt_number_dialing"]))	{$alt_number_dialing=$_POST["alt_number_dialing"];}
if (isset($_GET["alter_agent_interface_options"]))	{$alter_agent_interface_options=$_GET["alter_agent_interface_options"];}
	elseif (isset($_POST["alter_agent_interface_options"]))	{$alter_agent_interface_options=$_POST["alter_agent_interface_options"];}
if (isset($_GET["am_message_exten"]))	{$am_message_exten=$_GET["am_message_exten"];}
	elseif (isset($_POST["am_message_exten"]))	{$am_message_exten=$_POST["am_message_exten"];}
if (isset($_GET["amd_send_to_vmx"]))	{$amd_send_to_vmx=$_GET["amd_send_to_vmx"];}
	elseif (isset($_POST["amd_send_to_vmx"]))	{$amd_send_to_vmx=$_POST["amd_send_to_vmx"];}
if (isset($_GET["answer_transfer_agent"]))	{$answer_transfer_agent=$_GET["answer_transfer_agent"];}
	elseif (isset($_POST["answer_transfer_agent"]))	{$answer_transfer_agent=$_POST["answer_transfer_agent"];}
if (isset($_GET["ast_admin_access"]))	{$ast_admin_access=$_GET["ast_admin_access"];}
	elseif (isset($_POST["ast_admin_access"]))	{$ast_admin_access=$_POST["ast_admin_access"];}
if (isset($_GET["ast_delete_phones"]))	{$ast_delete_phones=$_GET["ast_delete_phones"];}
	elseif (isset($_POST["ast_delete_phones"]))	{$ast_delete_phones=$_POST["ast_delete_phones"];}
if (isset($_GET["asterisk_version"]))	{$asterisk_version=$_GET["asterisk_version"];}
	elseif (isset($_POST["asterisk_version"]))	{$asterisk_version=$_POST["asterisk_version"];}
if (isset($_GET["ASTmgrSECRET"]))	{$ASTmgrSECRET=$_GET["ASTmgrSECRET"];}
	elseif (isset($_POST["ASTmgrSECRET"]))	{$ASTmgrSECRET=$_POST["ASTmgrSECRET"];}
if (isset($_GET["ASTmgrUSERNAME"]))	{$ASTmgrUSERNAME=$_GET["ASTmgrUSERNAME"];}
	elseif (isset($_POST["ASTmgrUSERNAME"]))	{$ASTmgrUSERNAME=$_POST["ASTmgrUSERNAME"];}
if (isset($_GET["ASTmgrUSERNAMElisten"]))	{$ASTmgrUSERNAMElisten=$_GET["ASTmgrUSERNAMElisten"];}
	elseif (isset($_POST["ASTmgrUSERNAMElisten"]))	{$ASTmgrUSERNAMElisten=$_POST["ASTmgrUSERNAMElisten"];}
if (isset($_GET["ASTmgrUSERNAMEsend"]))	{$ASTmgrUSERNAMEsend=$_GET["ASTmgrUSERNAMEsend"];}
	elseif (isset($_POST["ASTmgrUSERNAMEsend"]))	{$ASTmgrUSERNAMEsend=$_POST["ASTmgrUSERNAMEsend"];}
if (isset($_GET["ASTmgrUSERNAMEupdate"]))	{$ASTmgrUSERNAMEupdate=$_GET["ASTmgrUSERNAMEupdate"];}
	elseif (isset($_POST["ASTmgrUSERNAMEupdate"]))	{$ASTmgrUSERNAMEupdate=$_POST["ASTmgrUSERNAMEupdate"];}
if (isset($_GET["attempt_delay"]))	{$attempt_delay=$_GET["attempt_delay"];}
	elseif (isset($_POST["attempt_delay"]))	{$attempt_delay=$_POST["attempt_delay"];}
if (isset($_GET["attempt_maximum"]))	{$attempt_maximum=$_GET["attempt_maximum"];}
	elseif (isset($_POST["attempt_maximum"]))	{$attempt_maximum=$_POST["attempt_maximum"];}
if (isset($_GET["auto_dial_level"]))	{$auto_dial_level=$_GET["auto_dial_level"];}
	elseif (isset($_POST["auto_dial_level"]))	{$auto_dial_level=$_POST["auto_dial_level"];}
if (isset($_GET["auto_dial_next_number"]))	{$auto_dial_next_number=$_GET["auto_dial_next_number"];}
	elseif (isset($_POST["auto_dial_next_number"]))	{$auto_dial_next_number=$_POST["auto_dial_next_number"];}
if (isset($_GET["available_only_ratio_tally"]))	{$available_only_ratio_tally=$_GET["available_only_ratio_tally"];}
	elseif (isset($_POST["available_only_ratio_tally"])){$available_only_ratio_tally=$_POST["available_only_ratio_tally"];}
if (isset($_GET["call_out_number_group"]))	{$call_out_number_group=$_GET["call_out_number_group"];}
	elseif (isset($_POST["call_out_number_group"]))	{$call_out_number_group=$_POST["call_out_number_group"];}
if (isset($_GET["call_parking_enabled"]))	{$call_parking_enabled=$_GET["call_parking_enabled"];}
	elseif (isset($_POST["call_parking_enabled"]))	{$call_parking_enabled=$_POST["call_parking_enabled"];}
if (isset($_GET["call_time_comments"]))	{$call_time_comments=$_GET["call_time_comments"];}
	elseif (isset($_POST["call_time_comments"]))	{$call_time_comments=$_POST["call_time_comments"];}
if (isset($_GET["call_time_id"]))	{$call_time_id=$_GET["call_time_id"];}
	elseif (isset($_POST["call_time_id"]))	{$call_time_id=$_POST["call_time_id"];}
if (isset($_GET["call_time_name"]))	{$call_time_name=$_GET["call_time_name"];}
	elseif (isset($_POST["call_time_name"]))	{$call_time_name=$_POST["call_time_name"];}
if (isset($_GET["CallerID_popup_enabled"]))	{$CallerID_popup_enabled=$_GET["CallerID_popup_enabled"];}
	elseif (isset($_POST["CallerID_popup_enabled"]))	{$CallerID_popup_enabled=$_POST["CallerID_popup_enabled"];}
if (isset($_GET["campaign_cid"]))	{$campaign_cid=$_GET["campaign_cid"];}
	elseif (isset($_POST["campaign_cid"]))	{$campaign_cid=$_POST["campaign_cid"];}
if (isset($_GET["campaign_detail"]))	{$campaign_detail=$_GET["campaign_detail"];}
	elseif (isset($_POST["campaign_detail"]))	{$campaign_detail=$_POST["campaign_detail"];}
if (isset($_GET["campaign_id"]))	{$campaign_id=$_GET["campaign_id"];}
	elseif (isset($_POST["campaign_id"]))	{$campaign_id=$_POST["campaign_id"];}
if (isset($_GET["campaign_name"]))	{$campaign_name=$_GET["campaign_name"];}
	elseif (isset($_POST["campaign_name"]))	{$campaign_name=$_POST["campaign_name"];}
if (isset($_GET["campaign_rec_exten"]))	{$campaign_rec_exten=$_GET["campaign_rec_exten"];}
	elseif (isset($_POST["campaign_rec_exten"]))	{$campaign_rec_exten=$_POST["campaign_rec_exten"];}
if (isset($_GET["campaign_rec_filename"]))	{$campaign_rec_filename=$_GET["campaign_rec_filename"];}
	elseif (isset($_POST["campaign_rec_filename"]))	{$campaign_rec_filename=$_POST["campaign_rec_filename"];}
if (isset($_GET["ingroup_rec_filename"]))	{$ingroup_rec_filename=$_GET["ingroup_rec_filename"];}
	elseif (isset($_POST["ingroup_rec_filename"]))	{$ingroup_rec_filename=$_POST["ingroup_rec_filename"];}
if (isset($_GET["campaign_recording"]))	{$campaign_recording=$_GET["campaign_recording"];}
	elseif (isset($_POST["campaign_recording"]))	{$campaign_recording=$_POST["campaign_recording"];}
if (isset($_GET["campaign_vdad_exten"]))	{$campaign_vdad_exten=$_GET["campaign_vdad_exten"];}
	elseif (isset($_POST["campaign_vdad_exten"]))	{$campaign_vdad_exten=$_POST["campaign_vdad_exten"];}
if (isset($_GET["change_agent_campaign"]))	{$change_agent_campaign=$_GET["change_agent_campaign"];}
	elseif (isset($_POST["change_agent_campaign"]))	{$change_agent_campaign=$_POST["change_agent_campaign"];}
if (isset($_GET["client_browser"]))	{$client_browser=$_GET["client_browser"];}
	elseif (isset($_POST["client_browser"]))	{$client_browser=$_POST["client_browser"];}
if (isset($_GET["closer_default_blended"]))	{$closer_default_blended=$_GET["closer_default_blended"];}
	elseif (isset($_POST["closer_default_blended"]))	{$closer_default_blended=$_POST["closer_default_blended"];}
if (isset($_GET["company"]))	{$company=$_GET["company"];}
	elseif (isset($_POST["company"]))	{$company=$_POST["company"];}
if (isset($_GET["computer_ip"]))	{$computer_ip=$_GET["computer_ip"];}
	elseif (isset($_POST["computer_ip"]))	{$computer_ip=$_POST["computer_ip"];}
if (isset($_GET["conf_exten"]))	{$conf_exten=$_GET["conf_exten"];}
	elseif (isset($_POST["conf_exten"]))	{$conf_exten=$_POST["conf_exten"];}
if (isset($_GET["conf_on_extension"]))	{$conf_on_extension=$_GET["conf_on_extension"];}
	elseif (isset($_POST["conf_on_extension"]))	{$conf_on_extension=$_POST["conf_on_extension"];}
if (isset($_GET["conferencing_enabled"]))	{$conferencing_enabled=$_GET["conferencing_enabled"];}
	elseif (isset($_POST["conferencing_enabled"]))	{$conferencing_enabled=$_POST["conferencing_enabled"];}
if (isset($_GET["CoNfIrM"]))	{$CoNfIrM=$_GET["CoNfIrM"];}
	elseif (isset($_POST["CoNfIrM"]))	{$CoNfIrM=$_POST["CoNfIrM"];}
if (isset($_GET["ct_default_start"]))	{$ct_default_start=$_GET["ct_default_start"];}
	elseif (isset($_POST["ct_default_start"]))	{$ct_default_start=$_POST["ct_default_start"];}
if (isset($_GET["ct_default_stop"]))	{$ct_default_stop=$_GET["ct_default_stop"];}
	elseif (isset($_POST["ct_default_stop"]))	{$ct_default_stop=$_POST["ct_default_stop"];}
if (isset($_GET["ct_friday_start"]))	{$ct_friday_start=$_GET["ct_friday_start"];}
	elseif (isset($_POST["ct_friday_start"]))	{$ct_friday_start=$_POST["ct_friday_start"];}
if (isset($_GET["ct_friday_stop"]))	{$ct_friday_stop=$_GET["ct_friday_stop"];}
	elseif (isset($_POST["ct_friday_stop"]))	{$ct_friday_stop=$_POST["ct_friday_stop"];}
if (isset($_GET["ct_monday_start"]))	{$ct_monday_start=$_GET["ct_monday_start"];}
	elseif (isset($_POST["ct_monday_start"]))	{$ct_monday_start=$_POST["ct_monday_start"];}
if (isset($_GET["ct_monday_stop"]))	{$ct_monday_stop=$_GET["ct_monday_stop"];}
	elseif (isset($_POST["ct_monday_stop"]))	{$ct_monday_stop=$_POST["ct_monday_stop"];}
if (isset($_GET["ct_saturday_start"]))	{$ct_saturday_start=$_GET["ct_saturday_start"];}
	elseif (isset($_POST["ct_saturday_start"]))	{$ct_saturday_start=$_POST["ct_saturday_start"];}
if (isset($_GET["ct_saturday_stop"]))	{$ct_saturday_stop=$_GET["ct_saturday_stop"];}
	elseif (isset($_POST["ct_saturday_stop"]))	{$ct_saturday_stop=$_POST["ct_saturday_stop"];}
if (isset($_GET["ct_sunday_start"]))	{$ct_sunday_start=$_GET["ct_sunday_start"];}
	elseif (isset($_POST["ct_sunday_start"]))	{$ct_sunday_start=$_POST["ct_sunday_start"];}
if (isset($_GET["ct_sunday_stop"]))	{$ct_sunday_stop=$_GET["ct_sunday_stop"];}
	elseif (isset($_POST["ct_sunday_stop"]))	{$ct_sunday_stop=$_POST["ct_sunday_stop"];}
if (isset($_GET["ct_thursday_start"]))	{$ct_thursday_start=$_GET["ct_thursday_start"];}
	elseif (isset($_POST["ct_thursday_start"]))	{$ct_thursday_start=$_POST["ct_thursday_start"];}
if (isset($_GET["ct_thursday_stop"]))	{$ct_thursday_stop=$_GET["ct_thursday_stop"];}
	elseif (isset($_POST["ct_thursday_stop"]))	{$ct_thursday_stop=$_POST["ct_thursday_stop"];}
if (isset($_GET["ct_tuesday_start"]))	{$ct_tuesday_start=$_GET["ct_tuesday_start"];}
	elseif (isset($_POST["ct_tuesday_start"]))	{$ct_tuesday_start=$_POST["ct_tuesday_start"];}
if (isset($_GET["ct_tuesday_stop"]))	{$ct_tuesday_stop=$_GET["ct_tuesday_stop"];}
	elseif (isset($_POST["ct_tuesday_stop"]))	{$ct_tuesday_stop=$_POST["ct_tuesday_stop"];}
if (isset($_GET["ct_wednesday_start"]))	{$ct_wednesday_start=$_GET["ct_wednesday_start"];}
	elseif (isset($_POST["ct_wednesday_start"]))	{$ct_wednesday_start=$_POST["ct_wednesday_start"];}
if (isset($_GET["ct_wednesday_stop"]))	{$ct_wednesday_stop=$_GET["ct_wednesday_stop"];}
	elseif (isset($_POST["ct_wednesday_stop"]))	{$ct_wednesday_stop=$_POST["ct_wednesday_stop"];}
if (isset($_GET["DBX_database"]))	{$DBX_database=$_GET["DBX_database"];}
	elseif (isset($_POST["DBX_database"]))	{$DBX_database=$_POST["DBX_database"];}
if (isset($_GET["DBX_pass"]))	{$DBX_pass=$_GET["DBX_pass"];}
	elseif (isset($_POST["DBX_pass"]))	{$DBX_pass=$_POST["DBX_pass"];}
if (isset($_GET["DBX_port"]))	{$DBX_port=$_GET["DBX_port"];}
	elseif (isset($_POST["DBX_port"]))	{$DBX_port=$_POST["DBX_port"];}
if (isset($_GET["DBX_server"]))	{$DBX_server=$_GET["DBX_server"];}
	elseif (isset($_POST["DBX_server"]))	{$DBX_server=$_POST["DBX_server"];}
if (isset($_GET["DBX_user"]))	{$DBX_user=$_GET["DBX_user"];}
	elseif (isset($_POST["DBX_user"]))	{$DBX_user=$_POST["DBX_user"];}
if (isset($_GET["DBY_database"]))	{$DBY_database=$_GET["DBY_database"];}
	elseif (isset($_POST["DBY_database"]))	{$DBY_database=$_POST["DBY_database"];}
if (isset($_GET["DBY_pass"]))	{$DBY_pass=$_GET["DBY_pass"];}
	elseif (isset($_POST["DBY_pass"]))	{$DBY_pass=$_POST["DBY_pass"];}
if (isset($_GET["DBY_port"]))	{$DBY_port=$_GET["DBY_port"];}
	elseif (isset($_POST["DBY_port"]))	{$DBY_port=$_POST["DBY_port"];}
if (isset($_GET["DBY_server"]))	{$DBY_server=$_GET["DBY_server"];}
	elseif (isset($_POST["DBY_server"]))	{$DBY_server=$_POST["DBY_server"];}
if (isset($_GET["DBY_user"]))	{$DBY_user=$_GET["DBY_user"];}
	elseif (isset($_POST["DBY_user"]))	{$DBY_user=$_POST["DBY_user"];}
if (isset($_GET["delete_call_times"]))	{$delete_call_times=$_GET["delete_call_times"];}
	elseif (isset($_POST["delete_call_times"]))	{$delete_call_times=$_POST["delete_call_times"];}
if (isset($_GET["delete_campaigns"]))	{$delete_campaigns=$_GET["delete_campaigns"];}
	elseif (isset($_POST["delete_campaigns"]))	{$delete_campaigns=$_POST["delete_campaigns"];}
if (isset($_GET["delete_filters"]))	{$delete_filters=$_GET["delete_filters"];}
	elseif (isset($_POST["delete_filters"]))	{$delete_filters=$_POST["delete_filters"];}
if (isset($_GET["delete_ingroups"]))	{$delete_ingroups=$_GET["delete_ingroups"];}
	elseif (isset($_POST["delete_ingroups"]))	{$delete_ingroups=$_POST["delete_ingroups"];}
if (isset($_GET["delete_lists"]))	{$delete_lists=$_GET["delete_lists"];}
	elseif (isset($_POST["delete_lists"]))	{$delete_lists=$_POST["delete_lists"];}
if (isset($_GET["delete_remote_agents"]))	{$delete_remote_agents=$_GET["delete_remote_agents"];}
	elseif (isset($_POST["delete_remote_agents"]))	{$delete_remote_agents=$_POST["delete_remote_agents"];}
if (isset($_GET["delete_scripts"]))	{$delete_scripts=$_GET["delete_scripts"];}
	elseif (isset($_POST["delete_scripts"]))	{$delete_scripts=$_POST["delete_scripts"];}
if (isset($_GET["delete_user_groups"]))	{$delete_user_groups=$_GET["delete_user_groups"];}
	elseif (isset($_POST["delete_user_groups"]))	{$delete_user_groups=$_POST["delete_user_groups"];}
if (isset($_GET["delete_users"]))	{$delete_users=$_GET["delete_users"];}
	elseif (isset($_POST["delete_users"]))	{$delete_users=$_POST["delete_users"];}
if (isset($_GET["dial_method"]))	{$dial_method=$_GET["dial_method"];}
	elseif (isset($_POST["dial_method"]))	{$dial_method=$_POST["dial_method"];}
if (isset($_GET["dial_prefix"]))	{$dial_prefix=$_GET["dial_prefix"];}
	elseif (isset($_POST["dial_prefix"]))	{$dial_prefix=$_POST["dial_prefix"];}
if (isset($_GET["dial_status_a"]))	{$dial_status_a=$_GET["dial_status_a"];}
	elseif (isset($_POST["dial_status_a"]))	{$dial_status_a=$_POST["dial_status_a"];}
if (isset($_GET["dial_status_b"]))	{$dial_status_b=$_GET["dial_status_b"];}
	elseif (isset($_POST["dial_status_b"]))	{$dial_status_b=$_POST["dial_status_b"];}
if (isset($_GET["dial_status_c"]))	{$dial_status_c=$_GET["dial_status_c"];}
	elseif (isset($_POST["dial_status_c"]))	{$dial_status_c=$_POST["dial_status_c"];}
if (isset($_GET["dial_status_d"]))	{$dial_status_d=$_GET["dial_status_d"];}
	elseif (isset($_POST["dial_status_d"]))	{$dial_status_d=$_POST["dial_status_d"];}
if (isset($_GET["dial_status_e"]))	{$dial_status_e=$_GET["dial_status_e"];}
	elseif (isset($_POST["dial_status_e"]))	{$dial_status_e=$_POST["dial_status_e"];}
if (isset($_GET["dial_timeout"]))	{$dial_timeout=$_GET["dial_timeout"];}
	elseif (isset($_POST["dial_timeout"]))	{$dial_timeout=$_POST["dial_timeout"];}
if (isset($_GET["dialplan_number"]))	{$dialplan_number=$_GET["dialplan_number"];}
	elseif (isset($_POST["dialplan_number"]))	{$dialplan_number=$_POST["dialplan_number"];}
if (isset($_GET["drop_call_seconds"]))	{$drop_call_seconds=$_GET["drop_call_seconds"];}
	elseif (isset($_POST["drop_call_seconds"]))	{$drop_call_seconds=$_POST["drop_call_seconds"];}
if (isset($_GET["drop_exten"]))	{$drop_exten=$_GET["drop_exten"];}
	elseif (isset($_POST["drop_exten"]))	{$drop_exten=$_POST["drop_exten"];}
if (isset($_GET["drop_action"]))	{$drop_action=$_GET["drop_action"];}
	elseif (isset($_POST["drop_action"]))	{$drop_action=$_POST["drop_action"];}
if (isset($_GET["dtmf_send_extension"]))	{$dtmf_send_extension=$_GET["dtmf_send_extension"];}
	elseif (isset($_POST["dtmf_send_extension"]))	{$dtmf_send_extension=$_POST["dtmf_send_extension"];}
if (isset($_GET["enable_fast_refresh"]))	{$enable_fast_refresh=$_GET["enable_fast_refresh"];}
	elseif (isset($_POST["enable_fast_refresh"]))	{$enable_fast_refresh=$_POST["enable_fast_refresh"];}
if (isset($_GET["enable_persistant_mysql"]))	{$enable_persistant_mysql=$_GET["enable_persistant_mysql"];}
	elseif (isset($_POST["enable_persistant_mysql"]))	{$enable_persistant_mysql=$_POST["enable_persistant_mysql"];}
if (isset($_GET["ext_context"]))	{$ext_context=$_GET["ext_context"];}
	elseif (isset($_POST["ext_context"]))	{$ext_context=$_POST["ext_context"];}
if (isset($_GET["extension"]))	{$extension=$_GET["extension"];}
	elseif (isset($_POST["extension"]))	{$extension=$_POST["extension"];}
if (isset($_GET["fast_refresh_rate"]))	{$fast_refresh_rate=$_GET["fast_refresh_rate"];}
	elseif (isset($_POST["fast_refresh_rate"]))	{$fast_refresh_rate=$_POST["fast_refresh_rate"];}
if (isset($_GET["force_logout"]))	{$force_logout=$_GET["force_logout"];}
	elseif (isset($_POST["force_logout"]))	{$force_logout=$_POST["force_logout"];}
if (isset($_GET["fronter_display"]))	{$fronter_display=$_GET["fronter_display"];}
	elseif (isset($_POST["fronter_display"]))	{$fronter_display=$_POST["fronter_display"];}
if (isset($_GET["full_name"]))	{$full_name=$_GET["full_name"];}
	elseif (isset($_POST["full_name"]))	{$full_name=$_POST["full_name"];}
if (isset($_GET["fullname"]))	{$fullname=$_GET["fullname"];}
	elseif (isset($_POST["fullname"]))	{$fullname=$_POST["fullname"];}
if (isset($_GET["get_call_launch"]))	{$get_call_launch=$_GET["get_call_launch"];}
	elseif (isset($_POST["get_call_launch"]))	{$get_call_launch=$_POST["get_call_launch"];}
if (isset($_GET["group_color"]))	{$group_color=$_GET["group_color"];}
	elseif (isset($_POST["group_color"]))	{$group_color=$_POST["group_color"];}
if (isset($_GET["group_id"]))	{$group_id=$_GET["group_id"];}
	elseif (isset($_POST["group_id"]))	{$group_id=$_POST["group_id"];}
if (isset($_GET["group_name"]))	{$group_name=$_GET["group_name"];}
	elseif (isset($_POST["group_name"]))	{$group_name=$_POST["group_name"];}
if (isset($_GET["groups"]))	{$groups=$_GET["groups"];}
	elseif (isset($_POST["groups"]))	{$groups=$_POST["groups"];}
if (isset($_GET["XFERgroups"]))	{$XFERgroups=$_GET["XFERgroups"];}
	elseif (isset($_POST["XFERgroups"]))	{$XFERgroups=$_POST["XFERgroups"];}
if (isset($_GET["HKstatus"]))	{$HKstatus=$_GET["HKstatus"];}
	elseif (isset($_POST["HKstatus"]))	{$HKstatus=$_POST["HKstatus"];}
if (isset($_GET["hopper_level"]))	{$hopper_level=$_GET["hopper_level"];}
	elseif (isset($_POST["hopper_level"]))	{$hopper_level=$_POST["hopper_level"];}
if (isset($_GET["hotkey"]))	{$hotkey=$_GET["hotkey"];}
	elseif (isset($_POST["hotkey"]))	{$hotkey=$_POST["hotkey"];}
if (isset($_GET["hotkeys_active"]))	{$hotkeys_active=$_GET["hotkeys_active"];}
	elseif (isset($_POST["hotkeys_active"]))	{$hotkeys_active=$_POST["hotkeys_active"];}
if (isset($_GET["install_directory"]))	{$install_directory=$_GET["install_directory"];}
	elseif (isset($_POST["install_directory"]))	{$install_directory=$_POST["install_directory"];}
if (isset($_GET["lead_filter_comments"]))	{$lead_filter_comments=$_GET["lead_filter_comments"];}
	elseif (isset($_POST["lead_filter_comments"]))	{$lead_filter_comments=$_POST["lead_filter_comments"];}
if (isset($_GET["lead_filter_id"]))	{$lead_filter_id=$_GET["lead_filter_id"];}
	elseif (isset($_POST["lead_filter_id"]))	{$lead_filter_id=$_POST["lead_filter_id"];}
if (isset($_GET["lead_filter_name"]))	{$lead_filter_name=$_GET["lead_filter_name"];}
	elseif (isset($_POST["lead_filter_name"]))	{$lead_filter_name=$_POST["lead_filter_name"];}
if (isset($_GET["lead_filter_sql"]))	{$lead_filter_sql=$_GET["lead_filter_sql"];}
	elseif (isset($_POST["lead_filter_sql"]))	{$lead_filter_sql=$_POST["lead_filter_sql"];}
if (isset($_GET["lead_order"]))	{$lead_order=$_GET["lead_order"];}
	elseif (isset($_POST["lead_order"]))	{$lead_order=$_POST["lead_order"];}
if (isset($_GET["list_id"]))	{$list_id=$_GET["list_id"];}
	elseif (isset($_POST["list_id"]))	{$list_id=$_POST["list_id"];}
if (isset($_GET["list_name"]))	{$list_name=$_GET["list_name"];}
	elseif (isset($_POST["list_name"]))	{$list_name=$_POST["list_name"];}
if (isset($_GET["load_leads"]))	{$load_leads=$_GET["load_leads"];}
	elseif (isset($_POST["load_leads"]))	{$load_leads=$_POST["load_leads"];}
if (isset($_GET["local_call_time"]))	{$local_call_time=$_GET["local_call_time"];}
	elseif (isset($_POST["local_call_time"]))	{$local_call_time=$_POST["local_call_time"];}
if (isset($_GET["local_gmt"]))	{$local_gmt=$_GET["local_gmt"];}
	elseif (isset($_POST["local_gmt"]))	{$local_gmt=$_POST["local_gmt"];}
if (isset($_GET["local_web_callerID_URL"]))	{$local_web_callerID_URL=$_GET["local_web_callerID_URL"];}
	elseif (isset($_POST["local_web_callerID_URL"]))	{$local_web_callerID_URL=$_POST["local_web_callerID_URL"];}
if (isset($_GET["login"]))	{$login=$_GET["login"];}
	elseif (isset($_POST["login"]))	{$login=$_POST["login"];}
if (isset($_GET["login_campaign"]))	{$login_campaign=$_GET["login_campaign"];}
	elseif (isset($_POST["login_campaign"]))	{$login_campaign=$_POST["login_campaign"];}
if (isset($_GET["login_pass"]))	{$login_pass=$_GET["login_pass"];}
	elseif (isset($_POST["login_pass"]))	{$login_pass=$_POST["login_pass"];}
if (isset($_GET["login_user"]))	{$login_user=$_GET["login_user"];}
	elseif (isset($_POST["login_user"]))	{$login_user=$_POST["login_user"];}
if (isset($_GET["log_recording_access"]))	{$log_recording_access=$_GET["log_recording_access"];}
	elseif (isset($_POST["log_recording_access"]))	{$log_recording_access=$_POST["log_recording_access"];}
if (isset($_GET["max_vicidial_trunks"]))	{$max_vicidial_trunks=$_GET["max_vicidial_trunks"];}
	elseif (isset($_POST["max_vicidial_trunks"]))	{$max_vicidial_trunks=$_POST["max_vicidial_trunks"];}
if (isset($_GET["modify_call_times"]))	{$modify_call_times=$_GET["modify_call_times"];}
	elseif (isset($_POST["modify_call_times"]))	{$modify_call_times=$_POST["modify_call_times"];}
if (isset($_GET["modify_leads"]))	{$modify_leads=$_GET["modify_leads"];}
	elseif (isset($_POST["modify_leads"]))	{$modify_leads=$_POST["modify_leads"];}
if (isset($_GET["export_gdpr_leads"]))	{$export_gdpr_leads=$_GET["export_gdpr_leads"];}
	elseif (isset($_POST["export_gdpr_leads"]))	{$export_gdpr_leads=$_POST["export_gdpr_leads"];}
if (isset($_GET["monitor_prefix"]))	{$monitor_prefix=$_GET["monitor_prefix"];}
	elseif (isset($_POST["monitor_prefix"]))	{$monitor_prefix=$_POST["monitor_prefix"];}
if (isset($_GET["new_extension"]))	{$new_extension=$_GET["new_extension"];}
	elseif (isset($_POST["new_extension"]))	{$new_extension=$_POST["new_extension"];}
if (isset($_GET["new_dialplan_number"]))	{$new_dialplan_number=$_GET["new_dialplan_number"];}
	elseif (isset($_POST["new_dialplan_number"]))	{$new_dialplan_number=$_POST["new_dialplan_number"];}
if (isset($_GET["new_voicemail_id"]))	{$new_voicemail_id=$_GET["new_voicemail_id"];}
	elseif (isset($_POST["new_voicemail_id"]))	{$new_voicemail_id=$_POST["new_voicemail_id"];}
if (isset($_GET["new_outbound_cid"]))	{$new_outbound_cid=$_GET["new_outbound_cid"];}
	elseif (isset($_POST["new_outbound_cid"]))	{$new_outbound_cid=$_POST["new_outbound_cid"];}
if (isset($_GET["new_server_ip"]))	{$new_server_ip=$_GET["new_server_ip"];}
	elseif (isset($_POST["new_server_ip"]))	{$new_server_ip=$_POST["new_server_ip"];}
if (isset($_GET["new_login"]))	{$new_login=$_GET["new_login"];}
	elseif (isset($_POST["new_login"]))	{$new_login=$_POST["new_login"];}
if (isset($_GET["new_pass"]))	{$new_pass=$_GET["new_pass"];}
	elseif (isset($_POST["new_pass"]))	{$new_pass=$_POST["new_pass"];}
if (isset($_GET["new_conf_secret"]))	{$new_conf_secret=$_GET["new_conf_secret"];}
	elseif (isset($_POST["new_conf_secret"]))	{$new_conf_secret=$_POST["new_conf_secret"];}
if (isset($_GET["new_fullname"]))	{$new_fullname=$_GET["new_fullname"];}
	elseif (isset($_POST["new_fullname"]))	{$new_fullname=$_POST["new_fullname"];}
if (isset($_GET["next_agent_call"]))	{$next_agent_call=$_GET["next_agent_call"];}
	elseif (isset($_POST["next_agent_call"]))	{$next_agent_call=$_POST["next_agent_call"];}
if (isset($_GET["number_of_lines"]))	{$number_of_lines=$_GET["number_of_lines"];}
	elseif (isset($_POST["number_of_lines"]))	{$number_of_lines=$_POST["number_of_lines"];}
if (isset($_GET["old_campaign_id"]))	{$old_campaign_id=$_GET["old_campaign_id"];}
	elseif (isset($_POST["old_campaign_id"]))	{$old_campaign_id=$_POST["old_campaign_id"];}
if (isset($_GET["old_conf_exten"]))	{$old_conf_exten=$_GET["old_conf_exten"];}
	elseif (isset($_POST["old_conf_exten"]))	{$old_conf_exten=$_POST["old_conf_exten"];}
if (isset($_GET["old_extension"]))	{$old_extension=$_GET["old_extension"];}
	elseif (isset($_POST["old_extension"]))	{$old_extension=$_POST["old_extension"];}
if (isset($_GET["old_server_id"]))	{$old_server_id=$_GET["old_server_id"];}
	elseif (isset($_POST["old_server_id"]))	{$old_server_id=$_POST["old_server_id"];}
if (isset($_GET["old_server_ip"]))	{$old_server_ip=$_GET["old_server_ip"];}
	elseif (isset($_POST["old_server_ip"]))	{$old_server_ip=$_POST["old_server_ip"];}
if (isset($_GET["OLDuser_group"]))	{$OLDuser_group=$_GET["OLDuser_group"];}
	elseif (isset($_POST["OLDuser_group"]))	{$OLDuser_group=$_POST["OLDuser_group"];}
if (isset($_GET["omit_phone_code"]))	{$omit_phone_code=$_GET["omit_phone_code"];}
	elseif (isset($_POST["omit_phone_code"]))	{$omit_phone_code=$_POST["omit_phone_code"];}
if (isset($_GET["outbound_cid"]))	{$outbound_cid=$_GET["outbound_cid"];}
	elseif (isset($_POST["outbound_cid"]))	{$outbound_cid=$_POST["outbound_cid"];}
if (isset($_GET["park_ext"]))	{$park_ext=$_GET["park_ext"];}
	elseif (isset($_POST["park_ext"]))	{$park_ext=$_POST["park_ext"];}
if (isset($_GET["park_file_name"]))	{$park_file_name=$_GET["park_file_name"];}
	elseif (isset($_POST["park_file_name"]))	{$park_file_name=$_POST["park_file_name"];}
if (isset($_GET["park_on_extension"]))	{$park_on_extension=$_GET["park_on_extension"];}
	elseif (isset($_POST["park_on_extension"]))	{$park_on_extension=$_POST["park_on_extension"];}
if (isset($_GET["pass"]))	{$pass=$_GET["pass"];}
	elseif (isset($_POST["pass"]))	{$pass=$_POST["pass"];}
if (isset($_GET["phone_defaults_container"]))	{$phone_defaults_container=$_GET["phone_defaults_container"];}
	elseif (isset($_POST["phone_defaults_container"]))	{$phone_defaults_container=$_POST["phone_defaults_container"];}
if (isset($_GET["phone_ip"]))	{$phone_ip=$_GET["phone_ip"];}
	elseif (isset($_POST["phone_ip"]))	{$phone_ip=$_POST["phone_ip"];}
if (isset($_GET["phone_login"]))	{$phone_login=$_GET["phone_login"];}
	elseif (isset($_POST["phone_login"]))	{$phone_login=$_POST["phone_login"];}
if (isset($_GET["phone_number"]))	{$phone_number=$_GET["phone_number"];}
	elseif (isset($_POST["phone_number"]))	{$phone_number=$_POST["phone_number"];}
if (isset($_GET["phone_pass"]))	{$phone_pass=$_GET["phone_pass"];}
	elseif (isset($_POST["phone_pass"]))	{$phone_pass=$_POST["phone_pass"];}
if (isset($_GET["phone_type"]))	{$phone_type=$_GET["phone_type"];}
	elseif (isset($_POST["phone_type"]))	{$phone_type=$_POST["phone_type"];}
if (isset($_GET["picture"]))	{$picture=$_GET["picture"];}
	elseif (isset($_POST["picture"]))	{$picture=$_POST["picture"];}
if (isset($_GET["protocol"]))	{$protocol=$_GET["protocol"];}
	elseif (isset($_POST["protocol"]))	{$protocol=$_POST["protocol"];}
if (isset($_GET["QUEUE_ACTION_enabled"]))	{$QUEUE_ACTION_enabled=$_GET["QUEUE_ACTION_enabled"];}
	elseif (isset($_POST["QUEUE_ACTION_enabled"]))	{$QUEUE_ACTION_enabled=$_POST["QUEUE_ACTION_enabled"];}
if (isset($_GET["recording_exten"]))	{$recording_exten=$_GET["recording_exten"];}
	elseif (isset($_POST["recording_exten"]))	{$recording_exten=$_POST["recording_exten"];}
if (isset($_GET["remote_agent_id"]))	{$remote_agent_id=$_GET["remote_agent_id"];}
	elseif (isset($_POST["remote_agent_id"]))	{$remote_agent_id=$_POST["remote_agent_id"];}
if (isset($_GET["reset_hopper"]))	{$reset_hopper=$_GET["reset_hopper"];}
	elseif (isset($_POST["reset_hopper"]))	{$reset_hopper=$_POST["reset_hopper"];}
if (isset($_GET["reset_list"]))	{$reset_list=$_GET["reset_list"];}
	elseif (isset($_POST["reset_list"]))	{$reset_list=$_POST["reset_list"];}
if (isset($_GET["safe_harbor_exten"]))	{$safe_harbor_exten=$_GET["safe_harbor_exten"];}
	elseif (isset($_POST["safe_harbor_exten"]))	{$safe_harbor_exten=$_POST["safe_harbor_exten"];}
if (isset($_GET["scheduled_callbacks"]))	{$scheduled_callbacks=$_GET["scheduled_callbacks"];}
	elseif (isset($_POST["scheduled_callbacks"]))	{$scheduled_callbacks=$_POST["scheduled_callbacks"];}
if (isset($_GET["script_comments"]))	{$script_comments=$_GET["script_comments"];}
	elseif (isset($_POST["script_comments"]))	{$script_comments=$_POST["script_comments"];}
if (isset($_GET["script_id"]))	{$script_id=$_GET["script_id"];}
	elseif (isset($_POST["script_id"]))	{$script_id=$_POST["script_id"];}
if (isset($_GET["script_name"]))	{$script_name=$_GET["script_name"];}
	elseif (isset($_POST["script_name"]))	{$script_name=$_POST["script_name"];}
if (isset($_GET["script_text"]))	{$script_text=$_GET["script_text"];}
	elseif (isset($_POST["script_text"]))	{$script_text=$_POST["script_text"];}
if (isset($_GET["selectable"]))	{$selectable=$_GET["selectable"];}
	elseif (isset($_POST["selectable"]))	{$selectable=$_POST["selectable"];}
if (isset($_GET["server_description"]))	{$server_description=$_GET["server_description"];}
	elseif (isset($_POST["server_description"]))	{$server_description=$_POST["server_description"];}
if (isset($_GET["server_id"]))	{$server_id=$_GET["server_id"];}
	elseif (isset($_POST["server_id"]))	{$server_id=$_POST["server_id"];}
if (isset($_GET["server_ip"]))	{$server_ip=$_GET["server_ip"];}
	elseif (isset($_POST["server_ip"]))	{$server_ip=$_POST["server_ip"];}
if (isset($_GET["source_phone"]))	{$source_phone=$_GET["source_phone"];}
	elseif (isset($_POST["source_phone"]))	{$source_phone=$_POST["source_phone"];}
if (isset($_GET["stage"]))	{$stage=$_GET["stage"];}
	elseif (isset($_POST["stage"]))	{$stage=$_POST["stage"];}
if (isset($_GET["state_call_time_state"]))	{$state_call_time_state=$_GET["state_call_time_state"];}
	elseif (isset($_POST["state_call_time_state"]))	{$state_call_time_state=$_POST["state_call_time_state"];}
if (isset($_GET["state_rule"]))	{$state_rule=$_GET["state_rule"];}
	elseif (isset($_POST["state_rule"]))	{$state_rule=$_POST["state_rule"];}
if (isset($_GET["status"]))	{$status=$_GET["status"];}
	elseif (isset($_POST["status"]))	{$status=$_POST["status"];}
if (isset($_GET["status_id"]))	{$status_id=$_GET["status_id"];}
	elseif (isset($_POST["status_id"]))	{$status_id=$_POST["status_id"];}
if (isset($_GET["status_name"]))	{$status_name=$_GET["status_name"];}
	elseif (isset($_POST["status_name"]))	{$status_name=$_POST["status_name"];}
if (isset($_GET["submit"]))	{$submit=$_GET["submit"];}
	elseif (isset($_POST["submit"]))	{$submit=$_POST["submit"];}
if (isset($_GET["SUBMIT"]))	{$SUBMIT=$_GET["SUBMIT"];}
	elseif (isset($_POST["SUBMIT"]))	{$SUBMIT=$_POST["SUBMIT"];}
if (isset($_GET["sys_perf_log"]))	{$sys_perf_log=$_GET["sys_perf_log"];}
	elseif (isset($_POST["sys_perf_log"]))	{$sys_perf_log=$_POST["sys_perf_log"];}
if (isset($_GET["telnet_host"]))	{$telnet_host=$_GET["telnet_host"];}
	elseif (isset($_POST["telnet_host"]))	{$telnet_host=$_POST["telnet_host"];}
if (isset($_GET["telnet_port"]))	{$telnet_port=$_GET["telnet_port"];}
	elseif (isset($_POST["telnet_port"]))	{$telnet_port=$_POST["telnet_port"];}
if (isset($_GET["updater_check_enabled"]))	{$updater_check_enabled=$_GET["updater_check_enabled"];}
	elseif (isset($_POST["updater_check_enabled"]))	{$updater_check_enabled=$_POST["updater_check_enabled"];}
if (isset($_GET["use_internal_dnc"]))	{$use_internal_dnc=$_GET["use_internal_dnc"];}
	elseif (isset($_POST["use_internal_dnc"]))	{$use_internal_dnc=$_POST["use_internal_dnc"];}
if (isset($_GET["use_campaign_dnc"]))	{$use_campaign_dnc=$_GET["use_campaign_dnc"];}
	elseif (isset($_POST["use_campaign_dnc"]))	{$use_campaign_dnc=$_POST["use_campaign_dnc"];}
if (isset($_GET["user"]))	{$user=$_GET["user"];}
	elseif (isset($_POST["user"]))	{$user=$_POST["user"];}
if (isset($_GET["user_group"]))	{$user_group=$_GET["user_group"];}
	elseif (isset($_POST["user_group"]))	{$user_group=$_POST["user_group"];}
if (isset($_GET["user_level"]))	{$user_level=$_GET["user_level"];}
	elseif (isset($_POST["user_level"]))	{$user_level=$_POST["user_level"];}
if (isset($_GET["user_start"]))	{$user_start=$_GET["user_start"];}
	elseif (isset($_POST["user_start"]))	{$user_start=$_POST["user_start"];}
if (isset($_GET["user_switching_enabled"]))	{$user_switching_enabled=$_GET["user_switching_enabled"];}
	elseif (isset($_POST["user_switching_enabled"]))	{$user_switching_enabled=$_POST["user_switching_enabled"];}
if (isset($_GET["vd_server_logs"]))	{$vd_server_logs=$_GET["vd_server_logs"];}
	elseif (isset($_POST["vd_server_logs"]))	{$vd_server_logs=$_POST["vd_server_logs"];}
if (isset($_GET["VDstop_rec_after_each_call"]))	{$VDstop_rec_after_each_call=$_GET["VDstop_rec_after_each_call"];}
	elseif (isset($_POST["VDstop_rec_after_each_call"]))	{$VDstop_rec_after_each_call=$_POST["VDstop_rec_after_each_call"];}
if (isset($_GET["VICIDIAL_park_on_extension"]))	{$VICIDIAL_park_on_extension=$_GET["VICIDIAL_park_on_extension"];}
	elseif (isset($_POST["VICIDIAL_park_on_extension"]))	{$VICIDIAL_park_on_extension=$_POST["VICIDIAL_park_on_extension"];}
if (isset($_GET["VICIDIAL_park_on_filename"]))	{$VICIDIAL_park_on_filename=$_GET["VICIDIAL_park_on_filename"];}
	elseif (isset($_POST["VICIDIAL_park_on_filename"]))	{$VICIDIAL_park_on_filename=$_POST["VICIDIAL_park_on_filename"];}
if (isset($_GET["vicidial_recording"]))	{$vicidial_recording=$_GET["vicidial_recording"];}
	elseif (isset($_POST["vicidial_recording"]))	{$vicidial_recording=$_POST["vicidial_recording"];}
if (isset($_GET["vicidial_transfers"]))	{$vicidial_transfers=$_GET["vicidial_transfers"];}
	elseif (isset($_POST["vicidial_transfers"]))	{$vicidial_transfers=$_POST["vicidial_transfers"];}
if (isset($_GET["VICIDIAL_web_URL"]))	{$VICIDIAL_web_URL=$_GET["VICIDIAL_web_URL"];}
	elseif (isset($_POST["VICIDIAL_web_URL"]))	{$VICIDIAL_web_URL=$_POST["VICIDIAL_web_URL"];}
if (isset($_GET["voicemail_button_enabled"]))	{$voicemail_button_enabled=$_GET["voicemail_button_enabled"];}
	elseif (isset($_POST["voicemail_button_enabled"]))	{$voicemail_button_enabled=$_POST["voicemail_button_enabled"];}
if (isset($_GET["voicemail_dump_exten"]))	{$voicemail_dump_exten=$_GET["voicemail_dump_exten"];}
	elseif (isset($_POST["voicemail_dump_exten"]))	{$voicemail_dump_exten=$_POST["voicemail_dump_exten"];}
if (isset($_GET["voicemail_ext"]))	{$voicemail_ext=$_GET["voicemail_ext"];}
	elseif (isset($_POST["voicemail_ext"]))	{$voicemail_ext=$_POST["voicemail_ext"];}
if (isset($_GET["voicemail_exten"]))	{$voicemail_exten=$_GET["voicemail_exten"];}
	elseif (isset($_POST["voicemail_exten"]))	{$voicemail_exten=$_POST["voicemail_exten"];}
if (isset($_GET["voicemail_id"]))	{$voicemail_id=$_GET["voicemail_id"];}
	elseif (isset($_POST["voicemail_id"]))	{$voicemail_id=$_POST["voicemail_id"];}
if (isset($_GET["web_form_address"]))	{$web_form_address=$_GET["web_form_address"];}
	elseif (isset($_POST["web_form_address"]))	{$web_form_address=$_POST["web_form_address"];}
if (isset($_GET["wrapup_message"]))	{$wrapup_message=$_GET["wrapup_message"];}
	elseif (isset($_POST["wrapup_message"]))	{$wrapup_message=$_POST["wrapup_message"];}
if (isset($_GET["wrapup_seconds"]))	{$wrapup_seconds=$_GET["wrapup_seconds"];}
	elseif (isset($_POST["wrapup_seconds"]))	{$wrapup_seconds=$_POST["wrapup_seconds"];}
if (isset($_GET["xferconf_a_dtmf"]))	{$xferconf_a_dtmf=$_GET["xferconf_a_dtmf"];}
	elseif (isset($_POST["xferconf_a_dtmf"]))	{$xferconf_a_dtmf=$_POST["xferconf_a_dtmf"];}
if (isset($_GET["xferconf_a_number"]))	{$xferconf_a_number=$_GET["xferconf_a_number"];}
	elseif (isset($_POST["xferconf_a_number"]))	{$xferconf_a_number=$_POST["xferconf_a_number"];}
if (isset($_GET["xferconf_b_dtmf"]))	{$xferconf_b_dtmf=$_GET["xferconf_b_dtmf"];}
	elseif (isset($_POST["xferconf_b_dtmf"]))	{$xferconf_b_dtmf=$_POST["xferconf_b_dtmf"];}
if (isset($_GET["xferconf_b_number"]))	{$xferconf_b_number=$_GET["xferconf_b_number"];}
	elseif (isset($_POST["xferconf_b_number"]))	{$xferconf_b_number=$_POST["xferconf_b_number"];}
if (isset($_GET["vicidial_balance_active"]))	{$vicidial_balance_active=$_GET["vicidial_balance_active"];}
	elseif (isset($_POST["vicidial_balance_active"]))	{$vicidial_balance_active=$_POST["vicidial_balance_active"];}
if (isset($_GET["balance_trunks_offlimits"]))	{$balance_trunks_offlimits=$_GET["balance_trunks_offlimits"];}
	elseif (isset($_POST["balance_trunks_offlimits"]))	{$balance_trunks_offlimits=$_POST["balance_trunks_offlimits"];}
if (isset($_GET["dedicated_trunks"]))	{$dedicated_trunks=$_GET["dedicated_trunks"];}
	elseif (isset($_POST["dedicated_trunks"]))	{$dedicated_trunks=$_POST["dedicated_trunks"];}
if (isset($_GET["trunk_restriction"]))	{$trunk_restriction=$_GET["trunk_restriction"];}
	elseif (isset($_POST["trunk_restriction"]))	{$trunk_restriction=$_POST["trunk_restriction"];}
if (isset($_GET["campaigns"]))						{$campaigns=$_GET["campaigns"];}
	elseif (isset($_POST["campaigns"]))				{$campaigns=$_POST["campaigns"];}
if (isset($_GET["dial_level_override"]))			{$dial_level_override=$_GET["dial_level_override"];}
	elseif (isset($_POST["dial_level_override"]))	{$dial_level_override=$_POST["dial_level_override"];}
if (isset($_GET["concurrent_transfers"]))			{$concurrent_transfers=$_GET["concurrent_transfers"];}
	elseif (isset($_POST["concurrent_transfers"]))	{$concurrent_transfers=$_POST["concurrent_transfers"];}
if (isset($_GET["auto_alt_dial"]))			{$auto_alt_dial=$_GET["auto_alt_dial"];}
	elseif (isset($_POST["auto_alt_dial"]))	{$auto_alt_dial=$_POST["auto_alt_dial"];}
if (isset($_GET["modify_users"]))				{$modify_users=$_GET["modify_users"];}
	elseif (isset($_POST["modify_users"]))		{$modify_users=$_POST["modify_users"];}
if (isset($_GET["modify_campaigns"]))			{$modify_campaigns=$_GET["modify_campaigns"];}
	elseif (isset($_POST["modify_campaigns"]))	{$modify_campaigns=$_POST["modify_campaigns"];}
if (isset($_GET["modify_lists"]))				{$modify_lists=$_GET["modify_lists"];}
	elseif (isset($_POST["modify_lists"]))		{$modify_lists=$_POST["modify_lists"];}
if (isset($_GET["modify_scripts"]))				{$modify_scripts=$_GET["modify_scripts"];}
	elseif (isset($_POST["modify_scripts"]))	{$modify_scripts=$_POST["modify_scripts"];}
if (isset($_GET["modify_filters"]))				{$modify_filters=$_GET["modify_filters"];}
	elseif (isset($_POST["modify_filters"]))	{$modify_filters=$_POST["modify_filters"];}
if (isset($_GET["modify_ingroups"]))			{$modify_ingroups=$_GET["modify_ingroups"];}
	elseif (isset($_POST["modify_ingroups"]))	{$modify_ingroups=$_POST["modify_ingroups"];}
if (isset($_GET["modify_usergroups"]))			{$modify_usergroups=$_GET["modify_usergroups"];}
	elseif (isset($_POST["modify_usergroups"]))	{$modify_usergroups=$_POST["modify_usergroups"];}
if (isset($_GET["modify_remoteagents"]))			{$modify_remoteagents=$_GET["modify_remoteagents"];}
	elseif (isset($_POST["modify_remoteagents"]))	{$modify_remoteagents=$_POST["modify_remoteagents"];}
if (isset($_GET["modify_servers"]))				{$modify_servers=$_GET["modify_servers"];}
	elseif (isset($_POST["modify_servers"]))	{$modify_servers=$_POST["modify_servers"];}
if (isset($_GET["view_reports"]))				{$view_reports=$_GET["view_reports"];}
	elseif (isset($_POST["view_reports"]))		{$view_reports=$_POST["view_reports"];}
if (isset($_GET["agent_pause_codes_active"]))			{$agent_pause_codes_active=$_GET["agent_pause_codes_active"];}
	elseif (isset($_POST["agent_pause_codes_active"]))	{$agent_pause_codes_active=$_POST["agent_pause_codes_active"];}
if (isset($_GET["pause_code"]))					{$pause_code=$_GET["pause_code"];}
	elseif (isset($_POST["pause_code"]))		{$pause_code=$_POST["pause_code"];}
if (isset($_GET["pause_code_name"]))			{$pause_code_name=$_GET["pause_code_name"];}
	elseif (isset($_POST["pause_code_name"]))	{$pause_code_name=$_POST["pause_code_name"];}
if (isset($_GET["billable"]))					{$billable=$_GET["billable"];}
	elseif (isset($_POST["billable"]))			{$billable=$_POST["billable"];}
if (isset($_GET["campaign_description"]))			{$campaign_description=$_GET["campaign_description"];}
	elseif (isset($_POST["campaign_description"]))	{$campaign_description=$_POST["campaign_description"];}
if (isset($_GET["campaign_stats_refresh"]))			{$campaign_stats_refresh=$_GET["campaign_stats_refresh"];}
	elseif (isset($_POST["campaign_stats_refresh"])){$campaign_stats_refresh=$_POST["campaign_stats_refresh"];}
if (isset($_GET["list_description"]))			{$list_description=$_GET["list_description"];}
	elseif (isset($_POST["list_description"]))	{$list_description=$_POST["list_description"];}
if (isset($_GET["vicidial_recording_override"]))		{$vicidial_recording_override=$_GET["vicidial_recording_override"];}	
	elseif (isset($_POST["vicidial_recording_override"]))	{$vicidial_recording_override=$_POST["vicidial_recording_override"];}
if (isset($_GET["use_non_latin"]))				{$use_non_latin=$_GET["use_non_latin"];}
	elseif (isset($_POST["use_non_latin"]))		{$use_non_latin=$_POST["use_non_latin"];}
if (isset($_GET["webroot_writable"]))			{$webroot_writable=$_GET["webroot_writable"];}
	elseif (isset($_POST["webroot_writable"]))	{$webroot_writable=$_POST["webroot_writable"];}
if (isset($_GET["enable_queuemetrics_logging"]))	{$enable_queuemetrics_logging=$_GET["enable_queuemetrics_logging"];}
	elseif (isset($_POST["enable_queuemetrics_logging"]))	{$enable_queuemetrics_logging=$_POST["enable_queuemetrics_logging"];}
if (isset($_GET["queuemetrics_server_ip"]))				{$queuemetrics_server_ip=$_GET["queuemetrics_server_ip"];}
	elseif (isset($_POST["queuemetrics_server_ip"]))	{$queuemetrics_server_ip=$_POST["queuemetrics_server_ip"];}
if (isset($_GET["queuemetrics_dbname"]))			{$queuemetrics_dbname=$_GET["queuemetrics_dbname"];}
	elseif (isset($_POST["queuemetrics_dbname"]))	{$queuemetrics_dbname=$_POST["queuemetrics_dbname"];}
if (isset($_GET["queuemetrics_login"]))				{$queuemetrics_login=$_GET["queuemetrics_login"];}
	elseif (isset($_POST["queuemetrics_login"]))	{$queuemetrics_login=$_POST["queuemetrics_login"];}
if (isset($_GET["queuemetrics_pass"]))			{$queuemetrics_pass=$_GET["queuemetrics_pass"];}
	elseif (isset($_POST["queuemetrics_pass"]))	{$queuemetrics_pass=$_POST["queuemetrics_pass"];}
if (isset($_GET["queuemetrics_url"]))			{$queuemetrics_url=$_GET["queuemetrics_url"];}
	elseif (isset($_POST["queuemetrics_url"]))	{$queuemetrics_url=$_POST["queuemetrics_url"];}
if (isset($_GET["queuemetrics_log_id"]))			{$queuemetrics_log_id=$_GET["queuemetrics_log_id"];}
	elseif (isset($_POST["queuemetrics_log_id"]))	{$queuemetrics_log_id=$_POST["queuemetrics_log_id"];}
if (isset($_GET["dial_status"]))				{$dial_status=$_GET["dial_status"];}
	elseif (isset($_POST["dial_status"]))		{$dial_status=$_POST["dial_status"];}
if (isset($_GET["queuemetrics_eq_prepend"]))			{$queuemetrics_eq_prepend=$_GET["queuemetrics_eq_prepend"];}
	elseif (isset($_POST["queuemetrics_eq_prepend"]))	{$queuemetrics_eq_prepend=$_POST["queuemetrics_eq_prepend"];}
if (isset($_GET["vicidial_agent_disable"]))				{$vicidial_agent_disable=$_GET["vicidial_agent_disable"];}
	elseif (isset($_POST["vicidial_agent_disable"]))	{$vicidial_agent_disable=$_POST["vicidial_agent_disable"];}
if (isset($_GET["disable_alter_custdata"]))				{$disable_alter_custdata=$_GET["disable_alter_custdata"];}
	elseif (isset($_POST["disable_alter_custdata"]))	{$disable_alter_custdata=$_POST["disable_alter_custdata"];}
if (isset($_GET["alter_custdata_override"]))			{$alter_custdata_override=$_GET["alter_custdata_override"];}
	elseif (isset($_POST["alter_custdata_override"]))	{$alter_custdata_override=$_POST["alter_custdata_override"];}
if (isset($_GET["no_hopper_leads_logins"]))				{$no_hopper_leads_logins=$_GET["no_hopper_leads_logins"];}
	elseif (isset($_POST["no_hopper_leads_logins"]))	{$no_hopper_leads_logins=$_POST["no_hopper_leads_logins"];}
if (isset($_GET["enable_sipsak_messages"]))				{$enable_sipsak_messages=$_GET["enable_sipsak_messages"];}
	elseif (isset($_POST["enable_sipsak_messages"]))	{$enable_sipsak_messages=$_POST["enable_sipsak_messages"];}
if (isset($_GET["allow_sipsak_messages"]))				{$allow_sipsak_messages=$_GET["allow_sipsak_messages"];}
	elseif (isset($_POST["allow_sipsak_messages"]))		{$allow_sipsak_messages=$_POST["allow_sipsak_messages"];}
if (isset($_GET["admin_home_url"]))				{$admin_home_url=$_GET["admin_home_url"];}
	elseif (isset($_POST["admin_home_url"]))	{$admin_home_url=$_POST["admin_home_url"];}
if (isset($_GET["list_order_mix"]))				{$list_order_mix=$_GET["list_order_mix"];}
	elseif (isset($_POST["list_order_mix"]))	{$list_order_mix=$_POST["list_order_mix"];}
if (isset($_GET["vcl_id"]))						{$vcl_id=$_GET["vcl_id"];}
	elseif (isset($_POST["vcl_id"]))			{$vcl_id=$_POST["vcl_id"];}
if (isset($_GET["vcl_name"]))					{$vcl_name=$_GET["vcl_name"];}
	elseif (isset($_POST["vcl_name"]))			{$vcl_name=$_POST["vcl_name"];}
if (isset($_GET["list_mix_container"]))				{$list_mix_container=$_GET["list_mix_container"];}
	elseif (isset($_POST["list_mix_container"]))	{$list_mix_container=$_POST["list_mix_container"];}
if (isset($_GET["mix_method"]))					{$mix_method=$_GET["mix_method"];}
	elseif (isset($_POST["mix_method"]))		{$mix_method=$_POST["mix_method"];}
if (isset($_GET["human_answered"]))				{$human_answered=$_GET["human_answered"];}
	elseif (isset($_POST["human_answered"]))	{$human_answered=$_POST["human_answered"];}
if (isset($_GET["category"]))					{$category=$_GET["category"];}
	elseif (isset($_POST["category"]))			{$category=$_POST["category"];}
if (isset($_GET["vsc_id"]))						{$vsc_id=$_GET["vsc_id"];}
	elseif (isset($_POST["vsc_id"]))			{$vsc_id=$_POST["vsc_id"];}
if (isset($_GET["vsc_name"]))					{$vsc_name=$_GET["vsc_name"];}
	elseif (isset($_POST["vsc_name"]))			{$vsc_name=$_POST["vsc_name"];}
if (isset($_GET["vsc_description"]))			{$vsc_description=$_GET["vsc_description"];}
	elseif (isset($_POST["vsc_description"]))	{$vsc_description=$_POST["vsc_description"];}
if (isset($_GET["tovdad_display"]))				{$tovdad_display=$_GET["tovdad_display"];}
	elseif (isset($_POST["tovdad_display"]))	{$tovdad_display=$_POST["tovdad_display"];}
if (isset($_GET["mix_container_item"]))				{$mix_container_item=$_GET["mix_container_item"];}
	elseif (isset($_POST["mix_container_item"]))	{$mix_container_item=$_POST["mix_container_item"];}
if (isset($_GET["enable_agc_xfer_log"]))			{$enable_agc_xfer_log=$_GET["enable_agc_xfer_log"];}
	elseif (isset($_POST["enable_agc_xfer_log"]))	{$enable_agc_xfer_log=$_POST["enable_agc_xfer_log"];}
if (isset($_GET["after_hours_action"]))				{$after_hours_action=$_GET["after_hours_action"];}
	elseif (isset($_POST["after_hours_action"]))	{$after_hours_action=$_POST["after_hours_action"];}
if (isset($_GET["after_hours_message_filename"]))			{$after_hours_message_filename=$_GET["after_hours_message_filename"];}
	elseif (isset($_POST["after_hours_message_filename"]))	{$after_hours_message_filename=$_POST["after_hours_message_filename"];}
if (isset($_GET["after_hours_exten"]))				{$after_hours_exten=$_GET["after_hours_exten"];}
	elseif (isset($_POST["after_hours_exten"]))		{$after_hours_exten=$_POST["after_hours_exten"];}
if (isset($_GET["after_hours_voicemail"]))			{$after_hours_voicemail=$_GET["after_hours_voicemail"];}
	elseif (isset($_POST["after_hours_voicemail"]))	{$after_hours_voicemail=$_POST["after_hours_voicemail"];}
if (isset($_GET["welcome_message_filename"]))			{$welcome_message_filename=$_GET["welcome_message_filename"];}
	elseif (isset($_POST["welcome_message_filename"]))	{$welcome_message_filename=$_POST["welcome_message_filename"];}
if (isset($_GET["moh_context"]))					{$moh_context=$_GET["moh_context"];}
	elseif (isset($_POST["moh_context"]))			{$moh_context=$_POST["moh_context"];}
if (isset($_GET["onhold_prompt_filename"]))				{$onhold_prompt_filename=$_GET["onhold_prompt_filename"];}
	elseif (isset($_POST["onhold_prompt_filename"]))	{$onhold_prompt_filename=$_POST["onhold_prompt_filename"];}
if (isset($_GET["prompt_interval"]))				{$prompt_interval=$_GET["prompt_interval"];}
	elseif (isset($_POST["prompt_interval"]))		{$prompt_interval=$_POST["prompt_interval"];}
if (isset($_GET["agent_alert_exten"]))				{$agent_alert_exten=$_GET["agent_alert_exten"];}
	elseif (isset($_POST["agent_alert_exten"]))		{$agent_alert_exten=$_POST["agent_alert_exten"];}
if (isset($_GET["agent_alert_delay"]))				{$agent_alert_delay=$_GET["agent_alert_delay"];}
	elseif (isset($_POST["agent_alert_delay"]))		{$agent_alert_delay=$_POST["agent_alert_delay"];}
if (isset($_GET["group_rank"]))					{$group_rank=$_GET["group_rank"];}
	elseif (isset($_POST["group_rank"]))		{$group_rank=$_POST["group_rank"];}
if (isset($_GET["campaign_allow_inbound"]))				{$campaign_allow_inbound=$_GET["campaign_allow_inbound"];}
	elseif (isset($_POST["campaign_allow_inbound"]))	{$campaign_allow_inbound=$_POST["campaign_allow_inbound"];}
if (isset($_GET["old_campaign_allow_inbound"]))				{$old_campaign_allow_inbound=$_GET["old_campaign_allow_inbound"];}
	elseif (isset($_POST["old_campaign_allow_inbound"]))	{$old_campaign_allow_inbound=$_POST["old_campaign_allow_inbound"];}
if (isset($_GET["manual_dial_list_id"]))				{$manual_dial_list_id=$_GET["manual_dial_list_id"];}
	elseif (isset($_POST["manual_dial_list_id"]))		{$manual_dial_list_id=$_POST["manual_dial_list_id"];}
if (isset($_GET["campaign_rank"]))				{$campaign_rank=$_GET["campaign_rank"];}
	elseif (isset($_POST["campaign_rank"]))		{$campaign_rank=$_POST["campaign_rank"];}
if (isset($_GET["source_campaign_id"]))				{$source_campaign_id=$_GET["source_campaign_id"];}
	elseif (isset($_POST["source_campaign_id"]))	{$source_campaign_id=$_POST["source_campaign_id"];}
if (isset($_GET["source_user_id"]))				{$source_user_id=$_GET["source_user_id"];}
	elseif (isset($_POST["source_user_id"]))	{$source_user_id=$_POST["source_user_id"];}
if (isset($_GET["source_group_id"]))			{$source_group_id=$_GET["source_group_id"];}
	elseif (isset($_POST["source_group_id"]))	{$source_group_id=$_POST["source_group_id"];}
if (isset($_GET["default_xfer_group"]))				{$default_xfer_group=$_GET["default_xfer_group"];}
	elseif (isset($_POST["default_xfer_group"]))	{$default_xfer_group=$_POST["default_xfer_group"];}
if (isset($_GET["qc_enabled"]))					{$qc_enabled=$_GET["qc_enabled"];}
	elseif (isset($_POST["qc_enabled"]))		{$qc_enabled=$_POST["qc_enabled"];}
if (isset($_GET["qc_user_level"]))				{$qc_user_level=$_GET["qc_user_level"];}
	elseif (isset($_POST["qc_user_level"]))		{$qc_user_level=$_POST["qc_user_level"];}
if (isset($_GET["qc_pass"]))					{$qc_pass=$_GET["qc_pass"];}
	elseif (isset($_POST["qc_pass"]))			{$qc_pass=$_POST["qc_pass"];}
if (isset($_GET["qc_finish"]))					{$qc_finish=$_GET["qc_finish"];}
	elseif (isset($_POST["qc_finish"]))			{$qc_finish=$_POST["qc_finish"];}
if (isset($_GET["qc_commit"]))					{$qc_commit=$_GET["qc_commit"];}
	elseif (isset($_POST["qc_commit"]))			{$qc_commit=$_POST["qc_commit"];}
if (isset($_GET["qc_campaigns"]))				{$qc_campaigns=$_GET["qc_campaigns"];}
	elseif (isset($_POST["qc_campaigns"]))		{$qc_campaigns=$_POST["qc_campaigns"];}
if (isset($_GET["qc_groups"]))					{$qc_groups=$_GET["qc_groups"];}
	elseif (isset($_POST["qc_groups"]))			{$qc_groups=$_POST["qc_groups"];}
if (isset($_GET["qc_display_group_type"]))					{$qc_display_group_type=$_GET["qc_display_group_type"];}
	elseif (isset($_POST["qc_display_group_type"]))			{$qc_display_group_type=$_POST["qc_display_group_type"];}
if (isset($_GET["qc_claim_limit"]))					{$qc_claim_limit=$_GET["qc_claim_limit"];}
	elseif (isset($_POST["qc_claim_limit"]))			{$qc_claim_limit=$_POST["qc_claim_limit"];}
if (isset($_GET["qc_expire_days"]))					{$qc_expire_days=$_GET["qc_expire_days"];}
	elseif (isset($_POST["qc_expire_days"]))			{$qc_expire_days=$_POST["qc_expire_days"];}
if (isset($_GET["queue_priority"]))				{$queue_priority=$_GET["queue_priority"];}
	elseif (isset($_POST["queue_priority"]))	{$queue_priority=$_POST["queue_priority"];}
if (isset($_GET["drop_inbound_group"]))				{$drop_inbound_group=$_GET["drop_inbound_group"];}
	elseif (isset($_POST["drop_inbound_group"]))	{$drop_inbound_group=$_POST["drop_inbound_group"];}
if (isset($_GET["qc_statuses"]))			{$qc_statuses=$_GET["qc_statuses"];}
	elseif (isset($_POST["qc_statuses"]))	{$qc_statuses=$_POST["qc_statuses"];}
if (isset($_GET["qc_lists"]))				{$qc_lists=$_GET["qc_lists"];}
	elseif (isset($_POST["qc_lists"]))		{$qc_lists=$_POST["qc_lists"];}
if (isset($_GET["qc_statuses"]))			{$qc_statuses=$_GET["qc_statuses"];}
	elseif (isset($_POST["qc_statuses"]))	{$qc_statuses=$_POST["qc_statuses"];}
if (isset($_GET["qc_statuses_id"]))				{$qc_statuses_id=$_GET["qc_statuses_id"];}
	elseif (isset($_POST["qc_statuses_id"]))		{$qc_statuses_id=$_POST["qc_statuses_id"];}
if (isset($_GET["qc_get_record_launch"]))			{$qc_get_record_launch=$_GET["qc_get_record_launch"];}
	elseif (isset($_POST["qc_get_record_launch"]))	{$qc_get_record_launch=$_POST["qc_get_record_launch"];}
if (isset($_GET["qc_show_recording"]))				{$qc_show_recording=$_GET["qc_show_recording"];}
	elseif (isset($_POST["qc_show_recording"]))		{$qc_show_recording=$_POST["qc_show_recording"];}
if (isset($_GET["qc_shift_id"]))				{$qc_shift_id=$_GET["qc_shift_id"];}
	elseif (isset($_POST["qc_shift_id"]))		{$qc_shift_id=$_POST["qc_shift_id"];}
if (isset($_GET["qc_web_form_address"]))				{$qc_web_form_address=$_GET["qc_web_form_address"];}
	elseif (isset($_POST["qc_web_form_address"]))	{$qc_web_form_address=$_POST["qc_web_form_address"];}
if (isset($_GET["qc_scorecard_id"]))						{$qc_scorecard_id=$_GET["qc_scorecard_id"];}
	elseif (isset($_POST["qc_scorecard_id"]))				{$qc_scorecard_id=$_POST["qc_scorecard_id"];}
if (isset($_GET["qc_script"]))						{$qc_script=$_GET["qc_script"];}
	elseif (isset($_POST["qc_script"]))				{$qc_script=$_POST["qc_script"];}
if (isset($_GET["ingroup_recording_override"]))		{$ingroup_recording_override=$_GET["ingroup_recording_override"];}	
	elseif (isset($_POST["ingroup_recording_override"]))	{$ingroup_recording_override=$_POST["ingroup_recording_override"];}
if (isset($_GET["code"]))				{$code=$_GET["code"];}	
	elseif (isset($_POST["code"]))		{$code=$_POST["code"];}
if (isset($_GET["code_name"]))			{$code_name=$_GET["code_name"];}	
	elseif (isset($_POST["code_name"]))	{$code_name=$_POST["code_name"];}
if (isset($_GET["afterhours_xfer_group"]))			{$afterhours_xfer_group=$_GET["afterhours_xfer_group"];}	
	elseif (isset($_POST["afterhours_xfer_group"]))	{$afterhours_xfer_group=$_POST["afterhours_xfer_group"];}
if (isset($_GET["alias_id"]))				{$alias_id=$_GET["alias_id"];}	
	elseif (isset($_POST["alias_id"]))		{$alias_id=$_POST["alias_id"];}
if (isset($_GET["alias_name"]))				{$alias_name=$_GET["alias_name"];}	
	elseif (isset($_POST["alias_name"]))		{$alias_name=$_POST["alias_name"];}
if (isset($_GET["logins_list"]))				{$logins_list=$_GET["logins_list"];}	
	elseif (isset($_POST["logins_list"]))		{$logins_list=$_POST["logins_list"];}
if (isset($_GET["shift_id"]))				{$shift_id=$_GET["shift_id"];}	
	elseif (isset($_POST["shift_id"]))		{$shift_id=$_POST["shift_id"];}
if (isset($_GET["shift_name"]))				{$shift_name=$_GET["shift_name"];}	
	elseif (isset($_POST["shift_name"]))		{$shift_name=$_POST["shift_name"];}
if (isset($_GET["shift_start_time"]))			{$shift_start_time=$_GET["shift_start_time"];}	
	elseif (isset($_POST["shift_start_time"]))	{$shift_start_time=$_POST["shift_start_time"];}
if (isset($_GET["shift_length"]))				{$shift_length=$_GET["shift_length"];}	
	elseif (isset($_POST["shift_length"]))		{$shift_length=$_POST["shift_length"];}
if (isset($_GET["shift_weekdays"]))				{$shift_weekdays=$_GET["shift_weekdays"];}	
	elseif (isset($_POST["shift_weekdays"]))	{$shift_weekdays=$_POST["shift_weekdays"];}
if (isset($_GET["group_shifts"]))			{$group_shifts=$_GET["group_shifts"];}	
	elseif (isset($_POST["group_shifts"]))	{$group_shifts=$_POST["group_shifts"];}
if (isset($_GET["timeclock_end_of_day"]))			{$timeclock_end_of_day=$_GET["timeclock_end_of_day"];}	
	elseif (isset($_POST["timeclock_end_of_day"]))	{$timeclock_end_of_day=$_POST["timeclock_end_of_day"];}
if (isset($_GET["survey_first_audio_file"]))			{$survey_first_audio_file=$_GET["survey_first_audio_file"];}	
	elseif (isset($_POST["survey_first_audio_file"]))	{$survey_first_audio_file=$_POST["survey_first_audio_file"];}
if (isset($_GET["survey_dtmf_digits"]))					{$survey_dtmf_digits=$_GET["survey_dtmf_digits"];}	
	elseif (isset($_POST["survey_dtmf_digits"]))		{$survey_dtmf_digits=$_POST["survey_dtmf_digits"];}
if (isset($_GET["survey_ni_digit"]))					{$survey_ni_digit=$_GET["survey_ni_digit"];}	
	elseif (isset($_POST["survey_ni_digit"]))			{$survey_ni_digit=$_POST["survey_ni_digit"];}
if (isset($_GET["survey_opt_in_audio_file"]))			{$survey_opt_in_audio_file=$_GET["survey_opt_in_audio_file"];}	
	elseif (isset($_POST["survey_opt_in_audio_file"]))	{$survey_opt_in_audio_file=$_POST["survey_opt_in_audio_file"];}
if (isset($_GET["survey_ni_audio_file"]))				{$survey_ni_audio_file=$_GET["survey_ni_audio_file"];}	
	elseif (isset($_POST["survey_ni_audio_file"]))		{$survey_ni_audio_file=$_POST["survey_ni_audio_file"];}
if (isset($_GET["survey_method"]))						{$survey_method=$_GET["survey_method"];}	
	elseif (isset($_POST["survey_method"]))				{$survey_method=$_POST["survey_method"];}
if (isset($_GET["survey_no_response_action"]))			{$survey_no_response_action=$_GET["survey_no_response_action"];}	
	elseif (isset($_POST["survey_no_response_action"]))	{$survey_no_response_action=$_POST["survey_no_response_action"];}
if (isset($_GET["survey_ni_status"]))					{$survey_ni_status=$_GET["survey_ni_status"];}	
	elseif (isset($_POST["survey_ni_status"]))			{$survey_ni_status=$_POST["survey_ni_status"];}
if (isset($_GET["survey_response_digit_map"]))			{$survey_response_digit_map=$_GET["survey_response_digit_map"];}	
	elseif (isset($_POST["survey_response_digit_map"]))	{$survey_response_digit_map=$_POST["survey_response_digit_map"];}
if (isset($_GET["survey_xfer_exten"]))					{$survey_xfer_exten=$_GET["survey_xfer_exten"];}	
	elseif (isset($_POST["survey_xfer_exten"]))			{$survey_xfer_exten=$_POST["survey_xfer_exten"];}
if (isset($_GET["survey_camp_record_dir"]))				{$survey_camp_record_dir=$_GET["survey_camp_record_dir"];}	
	elseif (isset($_POST["survey_camp_record_dir"]))	{$survey_camp_record_dir=$_POST["survey_camp_record_dir"];}
if (isset($_GET["add_timeclock_log"]))				{$add_timeclock_log=$_GET["add_timeclock_log"];}	
	elseif (isset($_POST["add_timeclock_log"]))		{$add_timeclock_log=$_POST["add_timeclock_log"];}
if (isset($_GET["modify_timeclock_log"]))			{$modify_timeclock_log=$_GET["modify_timeclock_log"];}	
	elseif (isset($_POST["modify_timeclock_log"]))	{$modify_timeclock_log=$_POST["modify_timeclock_log"];}
if (isset($_GET["delete_timeclock_log"]))			{$delete_timeclock_log=$_GET["delete_timeclock_log"];}	
	elseif (isset($_POST["delete_timeclock_log"]))	{$delete_timeclock_log=$_POST["delete_timeclock_log"];}
if (isset($_GET["phone_numbers"]))					{$phone_numbers=$_GET["phone_numbers"];}	
	elseif (isset($_POST["phone_numbers"]))			{$phone_numbers=$_POST["phone_numbers"];}
if (isset($_GET["vdc_header_date_format"]))					{$vdc_header_date_format=$_GET["vdc_header_date_format"];}	
	elseif (isset($_POST["vdc_header_date_format"]))		{$vdc_header_date_format=$_POST["vdc_header_date_format"];}
if (isset($_GET["vdc_customer_date_format"]))				{$vdc_customer_date_format=$_GET["vdc_customer_date_format"];}	
	elseif (isset($_POST["vdc_customer_date_format"]))		{$vdc_customer_date_format=$_POST["vdc_customer_date_format"];}
if (isset($_GET["vdc_header_phone_format"]))				{$vdc_header_phone_format=$_GET["vdc_header_phone_format"];}	
	elseif (isset($_POST["vdc_header_phone_format"]))		{$vdc_header_phone_format=$_POST["vdc_header_phone_format"];}
if (isset($_GET["disable_alter_custphone"]))			{$disable_alter_custphone=$_GET["disable_alter_custphone"];}	
	elseif (isset($_POST["disable_alter_custphone"]))	{$disable_alter_custphone=$_POST["disable_alter_custphone"];}
if (isset($_GET["alter_custphone_override"]))			{$alter_custphone_override=$_GET["alter_custphone_override"];}	
	elseif (isset($_POST["alter_custphone_override"]))	{$alter_custphone_override=$_POST["alter_custphone_override"];}
if (isset($_GET["vdc_agent_api_access"]))				{$vdc_agent_api_access=$_GET["vdc_agent_api_access"];}	
	elseif (isset($_POST["vdc_agent_api_access"]))		{$vdc_agent_api_access=$_POST["vdc_agent_api_access"];}
if (isset($_GET["vdc_agent_api_active"]))				{$vdc_agent_api_active=$_GET["vdc_agent_api_active"];}	
	elseif (isset($_POST["vdc_agent_api_active"]))		{$vdc_agent_api_active=$_POST["vdc_agent_api_active"];}
if (isset($_GET["display_queue_count"]))				{$display_queue_count=$_GET["display_queue_count"];}	
	elseif (isset($_POST["display_queue_count"]))		{$display_queue_count=$_POST["display_queue_count"];}
if (isset($_GET["sale_category"]))				{$sale_category=$_GET["sale_category"];}	
	elseif (isset($_POST["sale_category"]))		{$sale_category=$_POST["sale_category"];}
if (isset($_GET["dead_lead_category"]))				{$dead_lead_category=$_GET["dead_lead_category"];}	
	elseif (isset($_POST["dead_lead_category"]))	{$dead_lead_category=$_POST["dead_lead_category"];}
if (isset($_GET["manual_dial_filter"]))				{$manual_dial_filter=$_GET["manual_dial_filter"];}	
	elseif (isset($_POST["manual_dial_filter"]))	{$manual_dial_filter=$_POST["manual_dial_filter"];}
if (isset($_GET["agent_clipboard_copy"]))			{$agent_clipboard_copy=$_GET["agent_clipboard_copy"];}	
	elseif (isset($_POST["agent_clipboard_copy"]))	{$agent_clipboard_copy=$_POST["agent_clipboard_copy"];}
if (isset($_GET["agent_extended_alt_dial"]))			{$agent_extended_alt_dial=$_GET["agent_extended_alt_dial"];}	
	elseif (isset($_POST["agent_extended_alt_dial"]))	{$agent_extended_alt_dial=$_POST["agent_extended_alt_dial"];}
if (isset($_GET["play_place_in_line"]))				{$play_place_in_line=$_GET["play_place_in_line"];}	
	elseif (isset($_POST["play_place_in_line"]))	{$play_place_in_line=$_POST["play_place_in_line"];}
if (isset($_GET["play_estimate_hold_time"]))			{$play_estimate_hold_time=$_GET["play_estimate_hold_time"];}	
	elseif (isset($_POST["play_estimate_hold_time"]))	{$play_estimate_hold_time=$_POST["play_estimate_hold_time"];}
if (isset($_GET["hold_time_option"]))				{$hold_time_option=$_GET["hold_time_option"];}	
	elseif (isset($_POST["hold_time_option"]))		{$hold_time_option=$_POST["hold_time_option"];}
if (isset($_GET["hold_time_option_seconds"]))			{$hold_time_option_seconds=$_GET["hold_time_option_seconds"];}	
	elseif (isset($_POST["hold_time_option_seconds"]))	{$hold_time_option_seconds=$_POST["hold_time_option_seconds"];}
if (isset($_GET["hold_time_option_exten"]))				{$hold_time_option_exten=$_GET["hold_time_option_exten"];}	
	elseif (isset($_POST["hold_time_option_exten"]))	{$hold_time_option_exten=$_POST["hold_time_option_exten"];}
if (isset($_GET["hold_time_option_voicemail"]))				{$hold_time_option_voicemail=$_GET["hold_time_option_voicemail"];}	
	elseif (isset($_POST["hold_time_option_voicemail"]))	{$hold_time_option_voicemail=$_POST["hold_time_option_voicemail"];}
if (isset($_GET["hold_time_option_xfer_group"]))			{$hold_time_option_xfer_group=$_GET["hold_time_option_xfer_group"];}	
	elseif (isset($_POST["hold_time_option_xfer_group"]))	{$hold_time_option_xfer_group=$_POST["hold_time_option_xfer_group"];}
if (isset($_GET["hold_time_option_callback_filename"]))				{$hold_time_option_callback_filename=$_GET["hold_time_option_callback_filename"];}	
	elseif (isset($_POST["hold_time_option_callback_filename"]))	{$hold_time_option_callback_filename=$_POST["hold_time_option_callback_filename"];}
if (isset($_GET["hold_time_option_callback_list_id"]))				{$hold_time_option_callback_list_id=$_GET["hold_time_option_callback_list_id"];}	
	elseif (isset($_POST["hold_time_option_callback_list_id"]))		{$hold_time_option_callback_list_id=$_POST["hold_time_option_callback_list_id"];}
if (isset($_GET["hold_recall_xfer_group"]))				{$hold_recall_xfer_group=$_GET["hold_recall_xfer_group"];}	
	elseif (isset($_POST["hold_recall_xfer_group"]))	{$hold_recall_xfer_group=$_POST["hold_recall_xfer_group"];}
if (isset($_GET["no_delay_call_route"]))			{$no_delay_call_route=$_GET["no_delay_call_route"];}	
	elseif (isset($_POST["no_delay_call_route"]))	{$no_delay_call_route=$_POST["no_delay_call_route"];}
if (isset($_GET["play_welcome_message"]))			{$play_welcome_message=$_GET["play_welcome_message"];}	
	elseif (isset($_POST["play_welcome_message"]))	{$play_welcome_message=$_POST["play_welcome_message"];}
if (isset($_GET["did_id"]))					{$did_id=$_GET["did_id"];}	
	elseif (isset($_POST["did_id"]))		{$did_id=$_POST["did_id"];}
if (isset($_GET["source_did"]))				{$source_did=$_GET["source_did"];}	
	elseif (isset($_POST["source_did"]))	{$source_did=$_POST["source_did"];}
if (isset($_GET["did_pattern"]))			{$did_pattern=$_GET["did_pattern"];}	
	elseif (isset($_POST["did_pattern"]))	{$did_pattern=$_POST["did_pattern"];}
if (isset($_GET["did_description"]))			{$did_description=$_GET["did_description"];}	
	elseif (isset($_POST["did_description"]))	{$did_description=$_POST["did_description"];}
if (isset($_GET["did_active"]))				{$did_active=$_GET["did_active"];}	
	elseif (isset($_POST["did_active"]))	{$did_active=$_POST["did_active"];}
if (isset($_GET["did_route"]))				{$did_route=$_GET["did_route"];}	
	elseif (isset($_POST["did_route"]))		{$did_route=$_POST["did_route"];}
if (isset($_GET["exten_context"]))			{$exten_context=$_GET["exten_context"];}	
	elseif (isset($_POST["exten_context"]))	{$exten_context=$_POST["exten_context"];}
if (isset($_GET["phone"]))					{$phone=$_GET["phone"];}	
	elseif (isset($_POST["phone"]))			{$phone=$_POST["phone"];}
if (isset($_GET["user_unavailable_action"]))			{$user_unavailable_action=$_GET["user_unavailable_action"];}	
	elseif (isset($_POST["user_unavailable_action"]))	{$user_unavailable_action=$_POST["user_unavailable_action"];}
if (isset($_GET["user_route_settings_ingroup"]))			{$user_route_settings_ingroup=$_GET["user_route_settings_ingroup"];}	
	elseif (isset($_POST["user_route_settings_ingroup"]))	{$user_route_settings_ingroup=$_POST["user_route_settings_ingroup"];}
if (isset($_GET["call_handle_method"]))				{$call_handle_method=$_GET["call_handle_method"];}	
	elseif (isset($_POST["call_handle_method"]))	{$call_handle_method=$_POST["call_handle_method"];}
if (isset($_GET["agent_search_method"]))			{$agent_search_method=$_GET["agent_search_method"];}	
	elseif (isset($_POST["agent_search_method"]))	{$agent_search_method=$_POST["agent_search_method"];}
if (isset($_GET["phone_code"]))				{$phone_code=$_GET["phone_code"];}	
	elseif (isset($_POST["phone_code"]))	{$phone_code=$_POST["phone_code"];}
if (isset($_GET["email"]))					{$email=$_GET["email"];}	
	elseif (isset($_POST["email"]))			{$email=$_POST["email"];}
if (isset($_GET["modify_inbound_dids"]))			{$modify_inbound_dids=$_GET["modify_inbound_dids"];}	
	elseif (isset($_POST["modify_inbound_dids"]))	{$modify_inbound_dids=$_POST["modify_inbound_dids"];}
if (isset($_GET["delete_inbound_dids"]))			{$delete_inbound_dids=$_GET["delete_inbound_dids"];}	
	elseif (isset($_POST["delete_inbound_dids"]))	{$delete_inbound_dids=$_POST["delete_inbound_dids"];}
if (isset($_GET["three_way_call_cid"]))				{$three_way_call_cid=$_GET["three_way_call_cid"];}	
	elseif (isset($_POST["three_way_call_cid"]))	{$three_way_call_cid=$_POST["three_way_call_cid"];}
if (isset($_GET["three_way_dial_prefix"]))			{$three_way_dial_prefix=$_GET["three_way_dial_prefix"];}
	elseif (isset($_POST["three_way_dial_prefix"]))	{$three_way_dial_prefix=$_POST["three_way_dial_prefix"];}
if (isset($_GET["forced_timeclock_login"]))				{$forced_timeclock_login=$_GET["forced_timeclock_login"];}
	elseif (isset($_POST["forced_timeclock_login"]))	{$forced_timeclock_login=$_POST["forced_timeclock_login"];}
if (isset($_GET["answer_sec_pct_rt_stat_one"]))				{$answer_sec_pct_rt_stat_one=$_GET["answer_sec_pct_rt_stat_one"];}
	elseif (isset($_POST["answer_sec_pct_rt_stat_one"]))	{$answer_sec_pct_rt_stat_one=$_POST["answer_sec_pct_rt_stat_one"];}
if (isset($_GET["answer_sec_pct_rt_stat_two"]))				{$answer_sec_pct_rt_stat_two=$_GET["answer_sec_pct_rt_stat_two"];}
	elseif (isset($_POST["answer_sec_pct_rt_stat_two"]))	{$answer_sec_pct_rt_stat_two=$_POST["answer_sec_pct_rt_stat_two"];}
if (isset($_GET["list_active_change"]))				{$list_active_change=$_GET["list_active_change"];}
	elseif (isset($_POST["list_active_change"]))	{$list_active_change=$_POST["list_active_change"];}
if (isset($_GET["web_form_target"]))			{$web_form_target=$_GET["web_form_target"];}
	elseif (isset($_POST["web_form_target"]))	{$web_form_target=$_POST["web_form_target"];}
if (isset($_GET["alt_server_ip"]))				{$alt_server_ip=$_GET["alt_server_ip"];}
	elseif (isset($_POST["alt_server_ip"]))	{$alt_server_ip=$_POST["alt_server_ip"];}
if (isset($_GET["recording_web_link"]))				{$recording_web_link=$_GET["recording_web_link"];}
	elseif (isset($_POST["recording_web_link"]))	{$recording_web_link=$_POST["recording_web_link"];}
if (isset($_GET["enable_vtiger_integration"]))			{$enable_vtiger_integration=$_GET["enable_vtiger_integration"];}
	elseif (isset($_POST["enable_vtiger_integration"]))	{$enable_vtiger_integration=$_POST["enable_vtiger_integration"];}
if (isset($_GET["vtiger_server_ip"]))			{$vtiger_server_ip=$_GET["vtiger_server_ip"];}
	elseif (isset($_POST["vtiger_server_ip"]))	{$vtiger_server_ip=$_POST["vtiger_server_ip"];}
if (isset($_GET["vtiger_dbname"]))				{$vtiger_dbname=$_GET["vtiger_dbname"];}
	elseif (isset($_POST["vtiger_dbname"]))		{$vtiger_dbname=$_POST["vtiger_dbname"];}
if (isset($_GET["vtiger_login"]))			{$vtiger_login=$_GET["vtiger_login"];}
	elseif (isset($_POST["vtiger_login"]))	{$vtiger_login=$_POST["vtiger_login"];}
if (isset($_GET["vtiger_pass"]))			{$vtiger_pass=$_GET["vtiger_pass"];}
	elseif (isset($_POST["vtiger_pass"]))	{$vtiger_pass=$_POST["vtiger_pass"];}
if (isset($_GET["vtiger_url"]))				{$vtiger_url=$_GET["vtiger_url"];}
	elseif (isset($_POST["vtiger_url"]))	{$vtiger_url=$_POST["vtiger_url"];}
if (isset($_GET["vtiger_search_category"]))				{$vtiger_search_category=$_GET["vtiger_search_category"];}
	elseif (isset($_POST["vtiger_search_category"]))	{$vtiger_search_category=$_POST["vtiger_search_category"];}
if (isset($_GET["vtiger_create_call_record"]))			{$vtiger_create_call_record=$_GET["vtiger_create_call_record"];}
	elseif (isset($_POST["vtiger_create_call_record"]))	{$vtiger_create_call_record=$_POST["vtiger_create_call_record"];}
if (isset($_GET["vtiger_create_lead_record"]))			{$vtiger_create_lead_record=$_GET["vtiger_create_lead_record"];}
	elseif (isset($_POST["vtiger_create_lead_record"]))	{$vtiger_create_lead_record=$_POST["vtiger_create_lead_record"];}
if (isset($_GET["vtiger_screen_login"]))			{$vtiger_screen_login=$_GET["vtiger_screen_login"];}
	elseif (isset($_POST["vtiger_screen_login"]))	{$vtiger_screen_login=$_POST["vtiger_screen_login"];}
if (isset($_GET["qc_features_active"]))				{$qc_features_active=$_GET["qc_features_active"];}
	elseif (isset($_POST["qc_features_active"]))	{$qc_features_active=$_POST["qc_features_active"];}
if (isset($_GET["outbound_autodial_active"]))			{$outbound_autodial_active=$_GET["outbound_autodial_active"];}
	elseif (isset($_POST["outbound_autodial_active"]))	{$outbound_autodial_active=$_POST["outbound_autodial_active"];}
if (isset($_GET["cpd_amd_action"]))				{$cpd_amd_action=$_GET["cpd_amd_action"];}
	elseif (isset($_POST["cpd_amd_action"]))	{$cpd_amd_action=$_POST["cpd_amd_action"];}
if (isset($_GET["download_lists"]))				{$download_lists=$_GET["download_lists"];}
	elseif (isset($_POST["download_lists"]))	{$download_lists=$_POST["download_lists"];}
if (isset($_GET["active_asterisk_server"]))				{$active_asterisk_server=$_GET["active_asterisk_server"];}
	elseif (isset($_POST["active_asterisk_server"]))	{$active_asterisk_server=$_POST["active_asterisk_server"];}
if (isset($_GET["generate_vicidial_conf"]))				{$generate_vicidial_conf=$_GET["generate_vicidial_conf"];}
	elseif (isset($_POST["generate_vicidial_conf"]))	{$generate_vicidial_conf=$_POST["generate_vicidial_conf"];}
if (isset($_GET["rebuild_conf_files"]))				{$rebuild_conf_files=$_GET["rebuild_conf_files"];}
	elseif (isset($_POST["rebuild_conf_files"]))	{$rebuild_conf_files=$_POST["rebuild_conf_files"];}
if (isset($_GET["template_id"]))			{$template_id=$_GET["template_id"];}
	elseif (isset($_POST["template_id"]))	{$template_id=$_POST["template_id"];}
if (isset($_GET["conf_override"]))			{$conf_override=$_GET["conf_override"];}
	elseif (isset($_POST["conf_override"]))	{$conf_override=$_POST["conf_override"];}
if (isset($_GET["template_name"]))			{$template_name=$_GET["template_name"];}
	elseif (isset($_POST["template_name"]))	{$template_name=$_POST["template_name"];}
if (isset($_GET["template_contents"]))			{$template_contents=$_GET["template_contents"];}
	elseif (isset($_POST["template_contents"]))	{$template_contents=$_POST["template_contents"];}
if (isset($_GET["carrier_id"]))			{$carrier_id=$_GET["carrier_id"];}
	elseif (isset($_POST["carrier_id"]))	{$carrier_id=$_POST["carrier_id"];}
if (isset($_GET["carrier_name"]))			{$carrier_name=$_GET["carrier_name"];}
	elseif (isset($_POST["carrier_name"]))	{$carrier_name=$_POST["carrier_name"];}
if (isset($_GET["registration_string"]))			{$registration_string=$_GET["registration_string"];}
	elseif (isset($_POST["registration_string"]))	{$registration_string=$_POST["registration_string"];}
if (isset($_GET["account_entry"]))			{$account_entry=$_GET["account_entry"];}
	elseif (isset($_POST["account_entry"]))	{$account_entry=$_POST["account_entry"];}
if (isset($_GET["globals_string"]))				{$globals_string=$_GET["globals_string"];}
	elseif (isset($_POST["globals_string"]))	{$globals_string=$_POST["globals_string"];}
if (isset($_GET["dialplan_entry"]))				{$dialplan_entry=$_GET["dialplan_entry"];}
	elseif (isset($_POST["dialplan_entry"]))	{$dialplan_entry=$_POST["dialplan_entry"];}
if (isset($_GET["group_alias_id"]))				{$group_alias_id=$_GET["group_alias_id"];}
	elseif (isset($_POST["group_alias_id"]))	{$group_alias_id=$_POST["group_alias_id"];}
if (isset($_GET["group_alias_name"]))				{$group_alias_name=$_GET["group_alias_name"];}
	elseif (isset($_POST["group_alias_name"]))	{$group_alias_name=$_POST["group_alias_name"];}
if (isset($_GET["caller_id_number"]))				{$caller_id_number=$_GET["caller_id_number"];}
	elseif (isset($_POST["caller_id_number"]))	{$caller_id_number=$_POST["caller_id_number"];}
if (isset($_GET["caller_id_name"]))				{$caller_id_name=$_GET["caller_id_name"];}
	elseif (isset($_POST["caller_id_name"]))	{$caller_id_name=$_POST["caller_id_name"];}
if (isset($_GET["agent_allow_group_alias"]))			{$agent_allow_group_alias=$_GET["agent_allow_group_alias"];}
	elseif (isset($_POST["agent_allow_group_alias"]))	{$agent_allow_group_alias=$_POST["agent_allow_group_alias"];}
if (isset($_GET["default_group_alias"]))				{$default_group_alias=$_GET["default_group_alias"];}
	elseif (isset($_POST["default_group_alias"]))		{$default_group_alias=$_POST["default_group_alias"];}
if (isset($_GET["outbound_calls_per_second"]))				{$outbound_calls_per_second=$_GET["outbound_calls_per_second"];}
	elseif (isset($_POST["outbound_calls_per_second"]))		{$outbound_calls_per_second=$_POST["outbound_calls_per_second"];}
if (isset($_GET["shift_enforcement"]))				{$shift_enforcement=$_GET["shift_enforcement"];}
	elseif (isset($_POST["shift_enforcement"]))		{$shift_enforcement=$_POST["shift_enforcement"];}
if (isset($_GET["agent_shift_enforcement_override"]))			{$agent_shift_enforcement_override=$_GET["agent_shift_enforcement_override"];}
	elseif (isset($_POST["agent_shift_enforcement_override"]))	{$agent_shift_enforcement_override=$_POST["agent_shift_enforcement_override"];}
if (isset($_GET["manager_shift_enforcement_override"]))				{$manager_shift_enforcement_override=$_GET["manager_shift_enforcement_override"];}
	elseif (isset($_POST["manager_shift_enforcement_override"]))	{$manager_shift_enforcement_override=$_POST["manager_shift_enforcement_override"];}
if (isset($_GET["export_reports"]))				{$export_reports=$_GET["export_reports"];}
	elseif (isset($_POST["export_reports"]))	{$export_reports=$_POST["export_reports"];}
if (isset($_GET["delete_from_dnc"]))			{$delete_from_dnc=$_GET["delete_from_dnc"];}
	elseif (isset($_POST["delete_from_dnc"]))	{$delete_from_dnc=$_POST["delete_from_dnc"];}
if (isset($_GET["vtiger_search_dead"]))				{$vtiger_search_dead=$_GET["vtiger_search_dead"];}
	elseif (isset($_POST["vtiger_search_dead"]))	{$vtiger_search_dead=$_POST["vtiger_search_dead"];}
if (isset($_GET["vtiger_status_call"]))				{$vtiger_status_call=$_GET["vtiger_status_call"];}
	elseif (isset($_POST["vtiger_status_call"]))	{$vtiger_status_call=$_POST["vtiger_status_call"];}
if (isset($_GET["sale"]))				{$sale=$_GET["sale"];}
	elseif (isset($_POST["sale"]))		{$sale=$_POST["sale"];}
if (isset($_GET["dnc"]))				{$dnc=$_GET["dnc"];}
	elseif (isset($_POST["dnc"]))		{$dnc=$_POST["dnc"];}
if (isset($_GET["customer_contact"]))			{$customer_contact=$_GET["customer_contact"];}
	elseif (isset($_POST["customer_contact"]))	{$customer_contact=$_POST["customer_contact"];}
if (isset($_GET["not_interested"]))				{$not_interested=$_GET["not_interested"];}
	elseif (isset($_POST["not_interested"]))	{$not_interested=$_POST["not_interested"];}
if (isset($_GET["unworkable"]))					{$unworkable=$_GET["unworkable"];}
	elseif (isset($_POST["unworkable"]))		{$unworkable=$_POST["unworkable"];}
if (isset($_GET["user_code"]))					{$user_code=$_GET["user_code"];}
	elseif (isset($_POST["user_code"]))			{$user_code=$_POST["user_code"];}
if (isset($_GET["territory"]))					{$territory=$_GET["territory"];}
	elseif (isset($_POST["territory"]))			{$territory=$_POST["territory"];}
if (isset($_GET["survey_third_digit"]))				{$survey_third_digit=$_GET["survey_third_digit"];}
	elseif (isset($_POST["survey_third_digit"]))	{$survey_third_digit=$_POST["survey_third_digit"];}
if (isset($_GET["survey_fourth_digit"]))			{$survey_fourth_digit=$_GET["survey_fourth_digit"];}
	elseif (isset($_POST["survey_fourth_digit"]))	{$survey_fourth_digit=$_POST["survey_fourth_digit"];}
if (isset($_GET["survey_third_audio_file"]))			{$survey_third_audio_file=$_GET["survey_third_audio_file"];}
	elseif (isset($_POST["survey_third_audio_file"]))	{$survey_third_audio_file=$_POST["survey_third_audio_file"];}
if (isset($_GET["survey_fourth_audio_file"]))			{$survey_fourth_audio_file=$_GET["survey_fourth_audio_file"];}
	elseif (isset($_POST["survey_fourth_audio_file"]))	{$survey_fourth_audio_file=$_POST["survey_fourth_audio_file"];}
if (isset($_GET["survey_third_status"]))				{$survey_third_status=$_GET["survey_third_status"];}
	elseif (isset($_POST["survey_third_status"]))		{$survey_third_status=$_POST["survey_third_status"];}
if (isset($_GET["survey_fourth_status"]))				{$survey_fourth_status=$_GET["survey_fourth_status"];}
	elseif (isset($_POST["survey_fourth_status"]))		{$survey_fourth_status=$_POST["survey_fourth_status"];}
if (isset($_GET["survey_third_exten"]))					{$survey_third_exten=$_GET["survey_third_exten"];}
	elseif (isset($_POST["survey_third_exten"]))		{$survey_third_exten=$_POST["survey_third_exten"];}
if (isset($_GET["survey_fourth_exten"]))				{$survey_fourth_exten=$_GET["survey_fourth_exten"];}
	elseif (isset($_POST["survey_fourth_exten"]))		{$survey_fourth_exten=$_POST["survey_fourth_exten"];}
if (isset($_GET["menu_id"]))				{$menu_id=$_GET["menu_id"];}
	elseif (isset($_POST["menu_id"]))		{$menu_id=$_POST["menu_id"];}
if (isset($_GET["menu_name"]))				{$menu_name=$_GET["menu_name"];}
	elseif (isset($_POST["menu_name"]))		{$menu_name=$_POST["menu_name"];}
if (isset($_GET["menu_prompt"]))			{$menu_prompt=$_GET["menu_prompt"];}
	elseif (isset($_POST["menu_prompt"]))	{$menu_prompt=$_POST["menu_prompt"];}
if (isset($_GET["menu_timeout"]))			{$menu_timeout=$_GET["menu_timeout"];}
	elseif (isset($_POST["menu_timeout"]))	{$menu_timeout=$_POST["menu_timeout"];}
if (isset($_GET["menu_timeout_prompt"]))			{$menu_timeout_prompt=$_GET["menu_timeout_prompt"];}
	elseif (isset($_POST["menu_timeout_prompt"]))	{$menu_timeout_prompt=$_POST["menu_timeout_prompt"];}
if (isset($_GET["menu_invalid_prompt"]))			{$menu_invalid_prompt=$_GET["menu_invalid_prompt"];}
	elseif (isset($_POST["menu_invalid_prompt"]))	{$menu_invalid_prompt=$_POST["menu_invalid_prompt"];}
if (isset($_GET["menu_repeat"]))				{$menu_repeat=$_GET["menu_repeat"];}
	elseif (isset($_POST["menu_repeat"]))		{$menu_repeat=$_POST["menu_repeat"];}
if (isset($_GET["menu_time_check"]))			{$menu_time_check=$_GET["menu_time_check"];}
	elseif (isset($_POST["menu_time_check"]))	{$menu_time_check=$_POST["menu_time_check"];}
if (isset($_GET["track_in_vdac"]))				{$track_in_vdac=$_GET["track_in_vdac"];}
	elseif (isset($_POST["track_in_vdac"]))		{$track_in_vdac=$_POST["track_in_vdac"];}
if (isset($_GET["source_menu"]))			{$source_menu=$_GET["source_menu"];}
	elseif (isset($_POST["source_menu"]))	{$source_menu=$_POST["source_menu"];}
if (isset($_GET["agentonly_callback_campaign_lock"]))			{$agentonly_callback_campaign_lock=$_GET["agentonly_callback_campaign_lock"];}
	elseif (isset($_POST["agentonly_callback_campaign_lock"]))	{$agentonly_callback_campaign_lock=$_POST["agentonly_callback_campaign_lock"];}
if (isset($_GET["sounds_central_control_active"]))			{$sounds_central_control_active=$_GET["sounds_central_control_active"];}
	elseif (isset($_POST["sounds_central_control_active"]))	{$sounds_central_control_active=$_POST["sounds_central_control_active"];}
if (isset($_GET["sounds_web_server"]))				{$sounds_web_server=$_GET["sounds_web_server"];}
	elseif (isset($_POST["sounds_web_server"]))		{$sounds_web_server=$_POST["sounds_web_server"];}
if (isset($_GET["sounds_web_directory"]))			{$sounds_web_directory=$_GET["sounds_web_directory"];}
	elseif (isset($_POST["sounds_web_directory"]))	{$sounds_web_directory=$_POST["sounds_web_directory"];}
if (isset($_GET["sounds_update"]))			{$sounds_update=$_GET["sounds_update"];}
	elseif (isset($_POST["sounds_update"]))	{$sounds_update=$_POST["sounds_update"];}
if (isset($_GET["active_voicemail_server"]))			{$active_voicemail_server=$_GET["active_voicemail_server"];}
	elseif (isset($_POST["active_voicemail_server"]))	{$active_voicemail_server=$_POST["active_voicemail_server"];}
if (isset($_GET["auto_dial_limit"]))			{$auto_dial_limit=$_GET["auto_dial_limit"];}
	elseif (isset($_POST["auto_dial_limit"]))	{$auto_dial_limit=$_POST["auto_dial_limit"];}
if (isset($_GET["user_territories_active"]))			{$user_territories_active=$_GET["user_territories_active"];}
	elseif (isset($_POST["user_territories_active"]))	{$user_territories_active=$_POST["user_territories_active"];}
if (isset($_GET["list_status_modification_confirmation"]))	{$list_status_modification_confirmation=$_GET["list_status_modification_confirmation"];}
	elseif (isset($_POST["list_status_modification_confirmation"]))	{$list_status_modification_confirmation=$_POST["list_status_modification_confirmation"];}
if (isset($_GET["vicidial_recording_limit"]))			{$vicidial_recording_limit=$_GET["vicidial_recording_limit"];}
	elseif (isset($_POST["vicidial_recording_limit"]))	{$vicidial_recording_limit=$_POST["vicidial_recording_limit"];}
if (isset($_GET["phone_context"]))				{$phone_context=$_GET["phone_context"];}
	elseif (isset($_POST["phone_context"]))		{$phone_context=$_POST["phone_context"];}
if (isset($_GET["carrier_logging_active"]))				{$carrier_logging_active=$_GET["carrier_logging_active"];}
	elseif (isset($_POST["carrier_logging_active"]))	{$carrier_logging_active=$_POST["carrier_logging_active"];}
if (isset($_GET["drop_lockout_time"]))				{$drop_lockout_time=$_GET["drop_lockout_time"];}
	elseif (isset($_POST["drop_lockout_time"]))		{$drop_lockout_time=$_POST["drop_lockout_time"];}
if (isset($_GET["allow_custom_dialplan"]))				{$allow_custom_dialplan=$_GET["allow_custom_dialplan"];}
	elseif (isset($_POST["allow_custom_dialplan"]))		{$allow_custom_dialplan=$_POST["allow_custom_dialplan"];}
if (isset($_GET["custom_dialplan_entry"]))				{$custom_dialplan_entry=$_GET["custom_dialplan_entry"];}
	elseif (isset($_POST["custom_dialplan_entry"]))		{$custom_dialplan_entry=$_POST["custom_dialplan_entry"];}
if (isset($_GET["phone_ring_timeout"]))					{$phone_ring_timeout=$_GET["phone_ring_timeout"];}
	elseif (isset($_POST["phone_ring_timeout"]))		{$phone_ring_timeout=$_POST["phone_ring_timeout"];}
if (isset($_GET["conf_secret"]))					{$conf_secret=$_GET["conf_secret"];}
	elseif (isset($_POST["conf_secret"]))			{$conf_secret=$_POST["conf_secret"];}
if (isset($_GET["tracking_group"]))					{$tracking_group=$_GET["tracking_group"];}
	elseif (isset($_POST["tracking_group"]))		{$tracking_group=$_POST["tracking_group"];}
if (isset($_GET["no_agent_no_queue"]))				{$no_agent_no_queue=$_GET["no_agent_no_queue"];}
	elseif (isset($_POST["no_agent_no_queue"]))		{$no_agent_no_queue=$_POST["no_agent_no_queue"];}
if (isset($_GET["no_agent_action"]))				{$no_agent_action=$_GET["no_agent_action"];}
	elseif (isset($_POST["no_agent_action"]))		{$no_agent_action=$_POST["no_agent_action"];}
if (isset($_GET["no_agent_action_value"]))			{$no_agent_action_value=$_GET["no_agent_action_value"];}
	elseif (isset($_POST["no_agent_action_value"]))	{$no_agent_action_value=$_POST["no_agent_action_value"];}
if (isset($_GET["quick_transfer_button"]))			{$quick_transfer_button=$_GET["quick_transfer_button"];}
	elseif (isset($_POST["quick_transfer_button"]))	{$quick_transfer_button=$_POST["quick_transfer_button"];}
if (isset($_GET["prepopulate_transfer_preset"]))			{$prepopulate_transfer_preset=$_GET["prepopulate_transfer_preset"];}
	elseif (isset($_POST["prepopulate_transfer_preset"]))	{$prepopulate_transfer_preset=$_POST["prepopulate_transfer_preset"];}
if (isset($_GET["enable_tts_integration"]))				{$enable_tts_integration=$_GET["enable_tts_integration"];}
	elseif (isset($_POST["enable_tts_integration"]))	{$enable_tts_integration=$_POST["enable_tts_integration"];}
if (isset($_GET["tts_id"]))							{$tts_id=$_GET["tts_id"];}
	elseif (isset($_POST["tts_id"]))				{$tts_id=$_POST["tts_id"];}
if (isset($_GET["tts_name"]))						{$tts_name=$_GET["tts_name"];}
	elseif (isset($_POST["tts_name"]))				{$tts_name=$_POST["tts_name"];}
if (isset($_GET["tts_text"]))						{$tts_text=$_GET["tts_text"];}
	elseif (isset($_POST["tts_text"]))				{$tts_text=$_POST["tts_text"];}
if (isset($_GET["drop_rate_group"]))				{$drop_rate_group=$_GET["drop_rate_group"];}
	elseif (isset($_POST["drop_rate_group"]))		{$drop_rate_group=$_POST["drop_rate_group"];}
if (isset($_GET["agent_status_viewable_groups"]))			{$agent_status_viewable_groups=$_GET["agent_status_viewable_groups"];}
	elseif (isset($_POST["agent_status_viewable_groups"]))	{$agent_status_viewable_groups=$_POST["agent_status_viewable_groups"];}
if (isset($_GET["agent_status_view_time"]))				{$agent_status_view_time=$_GET["agent_status_view_time"];}
	elseif (isset($_POST["agent_status_view_time"]))	{$agent_status_view_time=$_POST["agent_status_view_time"];}
if (isset($_GET["view_calls_in_queue"]))			{$view_calls_in_queue=$_GET["view_calls_in_queue"];}
	elseif (isset($_POST["view_calls_in_queue"]))	{$view_calls_in_queue=$_POST["view_calls_in_queue"];}
if (isset($_GET["view_calls_in_queue_launch"]))				{$view_calls_in_queue_launch=$_GET["view_calls_in_queue_launch"];}
	elseif (isset($_POST["view_calls_in_queue_launch"]))	{$view_calls_in_queue_launch=$_POST["view_calls_in_queue_launch"];}
if (isset($_GET["grab_calls_in_queue"]))			{$grab_calls_in_queue=$_GET["grab_calls_in_queue"];}
	elseif (isset($_POST["grab_calls_in_queue"]))	{$grab_calls_in_queue=$_POST["grab_calls_in_queue"];}
if (isset($_GET["call_requeue_button"]))			{$call_requeue_button=$_GET["call_requeue_button"];}
	elseif (isset($_POST["call_requeue_button"]))	{$call_requeue_button=$_POST["call_requeue_button"];}
if (isset($_GET["pause_after_each_call"]))			{$pause_after_each_call=$_GET["pause_after_each_call"];}
	elseif (isset($_POST["pause_after_each_call"]))	{$pause_after_each_call=$_POST["pause_after_each_call"];}
if (isset($_GET["no_hopper_dialing"]))				{$no_hopper_dialing=$_GET["no_hopper_dialing"];}
	elseif (isset($_POST["no_hopper_dialing"]))		{$no_hopper_dialing=$_POST["no_hopper_dialing"];}
if (isset($_GET["agent_dial_owner_only"]))			{$agent_dial_owner_only=$_GET["agent_dial_owner_only"];}
	elseif (isset($_POST["agent_dial_owner_only"]))	{$agent_dial_owner_only=$_POST["agent_dial_owner_only"];}
if (isset($_GET["reset_time"]))						{$reset_time=$_GET["reset_time"];}
	elseif (isset($_POST["reset_time"]))			{$reset_time=$_POST["reset_time"];}
if (isset($_GET["allow_alerts"]))					{$allow_alerts=$_GET["allow_alerts"];}
	elseif (isset($_POST["allow_alerts"]))			{$allow_alerts=$_POST["allow_alerts"];}
if (isset($_GET["agent_display_dialable_leads"]))			{$agent_display_dialable_leads=$_GET["agent_display_dialable_leads"];}
	elseif (isset($_POST["agent_display_dialable_leads"]))	{$agent_display_dialable_leads=$_POST["agent_display_dialable_leads"];}
if (isset($_GET["vicidial_balance_rank"]))			{$vicidial_balance_rank=$_GET["vicidial_balance_rank"];}
	elseif (isset($_POST["vicidial_balance_rank"]))	{$vicidial_balance_rank=$_POST["vicidial_balance_rank"];}
if (isset($_GET["agent_script_override"]))			{$agent_script_override=$_GET["agent_script_override"];}
	elseif (isset($_POST["agent_script_override"]))	{$agent_script_override=$_POST["agent_script_override"];}
if (isset($_GET["inbound_list_script_override"]))			{$inbound_list_script_override=$_GET["inbound_list_script_override"];}
	elseif (isset($_POST["inbound_list_script_override"]))	{$inbound_list_script_override=$_POST["inbound_list_script_override"];}
if (isset($_GET["moh_id"]))				{$moh_id=$_GET["moh_id"];}
	elseif (isset($_POST["moh_id"]))	{$moh_id=$_POST["moh_id"];}
if (isset($_GET["moh_name"]))			{$moh_name=$_GET["moh_name"];}
	elseif (isset($_POST["moh_name"]))	{$moh_name=$_POST["moh_name"];}
if (isset($_GET["random"]))				{$random=$_GET["random"];}
	elseif (isset($_POST["random"]))	{$random=$_POST["random"];}
if (isset($_GET["filename"]))			{$filename=$_GET["filename"];}
	elseif (isset($_POST["filename"]))	{$filename=$_POST["filename"];}
if (isset($_GET["rank"]))				{$rank=$_GET["rank"];}
	elseif (isset($_POST["rank"]))		{$rank=$_POST["rank"];}
if (isset($_GET["rebuild_music_on_hold"]))				{$rebuild_music_on_hold=$_GET["rebuild_music_on_hold"];}
	elseif (isset($_POST["rebuild_music_on_hold"]))		{$rebuild_music_on_hold=$_POST["rebuild_music_on_hold"];}
if (isset($_GET["active_agent_login_server"]))			{$active_agent_login_server=$_GET["active_agent_login_server"];}
	elseif (isset($_POST["active_agent_login_server"]))	{$active_agent_login_server=$_POST["active_agent_login_server"];}
if (isset($_GET["enable_second_webform"]))			{$enable_second_webform=$_GET["enable_second_webform"];}
	elseif (isset($_POST["enable_second_webform"]))	{$enable_second_webform=$_POST["enable_second_webform"];}
if (isset($_GET["web_form_address_two"]))			{$web_form_address_two=$_GET["web_form_address_two"];}
	elseif (isset($_POST["web_form_address_two"]))	{$web_form_address_two=$_POST["web_form_address_two"];}
if (isset($_GET["waitforsilence_options"]))			{$waitforsilence_options=$_GET["waitforsilence_options"];}
	elseif (isset($_POST["waitforsilence_options"]))	{$waitforsilence_options=$_POST["waitforsilence_options"];}
if (isset($_GET["campaign_cid_override"]))			{$campaign_cid_override=$_GET["campaign_cid_override"];}
	elseif (isset($_POST["campaign_cid_override"]))	{$campaign_cid_override=$_POST["campaign_cid_override"];}
if (isset($_GET["am_message_exten_override"]))			{$am_message_exten_override=$_GET["am_message_exten_override"];}
	elseif (isset($_POST["am_message_exten_override"]))	{$am_message_exten_override=$_POST["am_message_exten_override"];}
if (isset($_GET["drop_inbound_group_override"]))			{$drop_inbound_group_override=$_GET["drop_inbound_group_override"];}
	elseif (isset($_POST["drop_inbound_group_override"]))	{$drop_inbound_group_override=$_POST["drop_inbound_group_override"];}
if (isset($_GET["agent_select_territories"]))			{$agent_select_territories=$_GET["agent_select_territories"];}
	elseif (isset($_POST["agent_select_territories"]))	{$agent_select_territories=$_POST["agent_select_territories"];}
if (isset($_GET["agent_choose_territories"]))			{$agent_choose_territories=$_GET["agent_choose_territories"];}
	elseif (isset($_POST["agent_choose_territories"]))	{$agent_choose_territories=$_POST["agent_choose_territories"];}
if (isset($_GET["carrier_description"]))			{$carrier_description=$_GET["carrier_description"];}
	elseif (isset($_POST["carrier_description"]))	{$carrier_description=$_POST["carrier_description"];}
if (isset($_GET["delete_vm_after_email"]))			{$delete_vm_after_email=$_GET["delete_vm_after_email"];}
	elseif (isset($_POST["delete_vm_after_email"]))	{$delete_vm_after_email=$_POST["delete_vm_after_email"];}
if (isset($_GET["custom_one"]))					{$custom_one=$_GET["custom_one"];}
	elseif (isset($_POST["custom_one"]))		{$custom_one=$_POST["custom_one"];}
if (isset($_GET["custom_two"]))					{$custom_two=$_GET["custom_two"];}
	elseif (isset($_POST["custom_two"]))		{$custom_two=$_POST["custom_two"];}
if (isset($_GET["custom_three"]))				{$custom_three=$_GET["custom_three"];}
	elseif (isset($_POST["custom_three"]))		{$custom_three=$_POST["custom_three"];}
if (isset($_GET["custom_four"]))				{$custom_four=$_GET["custom_four"];}
	elseif (isset($_POST["custom_four"]))		{$custom_four=$_POST["custom_four"];}
if (isset($_GET["custom_five"]))				{$custom_five=$_GET["custom_five"];}
	elseif (isset($_POST["custom_five"]))		{$custom_five=$_POST["custom_five"];}
if (isset($_GET["crm_popup_login"]))			{$crm_popup_login=$_GET["crm_popup_login"];}
	elseif (isset($_POST["crm_popup_login"]))	{$crm_popup_login=$_POST["crm_popup_login"];}
if (isset($_GET["crm_login_address"]))			{$crm_login_address=$_GET["crm_login_address"];}
	elseif (isset($_POST["crm_login_address"]))	{$crm_login_address=$_POST["crm_login_address"];}
if (isset($_GET["timer_action"]))					{$timer_action=$_GET["timer_action"];}
	elseif (isset($_POST["timer_action"]))			{$timer_action=$_POST["timer_action"];}
if (isset($_GET["timer_action_message"]))			{$timer_action_message=$_GET["timer_action_message"];}
	elseif (isset($_POST["timer_action_message"]))	{$timer_action_message=$_POST["timer_action_message"];}
if (isset($_GET["timer_action_seconds"]))			{$timer_action_seconds=$_GET["timer_action_seconds"];}
	elseif (isset($_POST["timer_action_seconds"]))	{$timer_action_seconds=$_POST["timer_action_seconds"];}
if (isset($_GET["start_call_url"]))				{$start_call_url=$_GET["start_call_url"];}
	elseif (isset($_POST["start_call_url"]))	{$start_call_url=$_POST["start_call_url"];}
if (isset($_GET["dispo_call_url"]))				{$dispo_call_url=$_GET["dispo_call_url"];}
	elseif (isset($_POST["dispo_call_url"]))	{$dispo_call_url=$_POST["dispo_call_url"];}
if (isset($_GET["xferconf_c_number"]))			{$xferconf_c_number=$_GET["xferconf_c_number"];}
	elseif (isset($_POST["xferconf_c_number"]))	{$xferconf_c_number=$_POST["xferconf_c_number"];}
if (isset($_GET["xferconf_d_number"]))			{$xferconf_d_number=$_GET["xferconf_d_number"];}
	elseif (isset($_POST["xferconf_d_number"]))	{$xferconf_d_number=$_POST["xferconf_d_number"];}
if (isset($_GET["xferconf_e_number"]))			{$xferconf_e_number=$_GET["xferconf_e_number"];}
	elseif (isset($_POST["xferconf_e_number"]))	{$xferconf_e_number=$_POST["xferconf_e_number"];}
if (isset($_GET["record_call"]))				{$record_call=$_GET["record_call"];}
	elseif (isset($_POST["record_call"]))		{$record_call=$_POST["record_call"];}
if (isset($_GET["ignore_list_script_override"]))			{$ignore_list_script_override=$_GET["ignore_list_script_override"];}
	elseif (isset($_POST["ignore_list_script_override"]))	{$ignore_list_script_override=$_POST["ignore_list_script_override"];}
if (isset($_GET["external_server_ip"]))			{$external_server_ip=$_GET["external_server_ip"];}
	elseif (isset($_POST["external_server_ip"])){$external_server_ip=$_POST["external_server_ip"];}
if (isset($_GET["is_webphone"]))				{$is_webphone=$_GET["is_webphone"];}
	elseif (isset($_POST["is_webphone"]))		{$is_webphone=$_POST["is_webphone"];}
if (isset($_GET["use_external_server_ip"]))			{$use_external_server_ip=$_GET["use_external_server_ip"];}
	elseif (isset($_POST["use_external_server_ip"])){$use_external_server_ip=$_POST["use_external_server_ip"];}
if (isset($_GET["default_webphone"]))			{$default_webphone=$_GET["default_webphone"];}
	elseif (isset($_POST["default_webphone"]))	{$default_webphone=$_POST["default_webphone"];}
if (isset($_GET["default_external_server_ip"]))			{$default_external_server_ip=$_GET["default_external_server_ip"];}
	elseif (isset($_POST["default_external_server_ip"])){$default_external_server_ip=$_POST["default_external_server_ip"];}
if (isset($_GET["webphone_url"]))				{$webphone_url=$_GET["webphone_url"];}
	elseif (isset($_POST["webphone_url"]))		{$webphone_url=$_POST["webphone_url"];}
if (isset($_GET["enable_agc_dispo_log"]))			{$enable_agc_dispo_log=$_GET["enable_agc_dispo_log"];}
	elseif (isset($_POST["enable_agc_dispo_log"]))	{$enable_agc_dispo_log=$_POST["enable_agc_dispo_log"];}
if (isset($_GET["agent_call_log_view"]))			{$agent_call_log_view=$_GET["agent_call_log_view"];}
	elseif (isset($_POST["agent_call_log_view"]))	{$agent_call_log_view=$_POST["agent_call_log_view"];}
if (isset($_GET["agent_call_log_view_override"]))			{$agent_call_log_view_override=$_GET["agent_call_log_view_override"];}
	elseif (isset($_POST["agent_call_log_view_override"]))	{$agent_call_log_view_override=$_POST["agent_call_log_view_override"];}
if (isset($_GET["use_custom_cid"]))				{$use_custom_cid=$_GET["use_custom_cid"];}
	elseif (isset($_POST["use_custom_cid"]))	{$use_custom_cid=$_POST["use_custom_cid"];}
if (isset($_GET["scheduled_callbacks_alert"]))			{$scheduled_callbacks_alert=$_GET["scheduled_callbacks_alert"];}
	elseif (isset($_POST["scheduled_callbacks_alert"]))	{$scheduled_callbacks_alert=$_POST["scheduled_callbacks_alert"];}
if (isset($_GET["scheduled_callbacks_email_alert"]))			{$scheduled_callbacks_email_alert=$_GET["scheduled_callbacks_email_alert"];}
	elseif (isset($_POST["scheduled_callbacks_email_alert"]))	{$scheduled_callbacks_email_alert=$_POST["scheduled_callbacks_email_alert"];}
if (isset($_GET["queuemetrics_loginout"]))			{$queuemetrics_loginout=$_GET["queuemetrics_loginout"];}
	elseif (isset($_POST["queuemetrics_loginout"]))	{$queuemetrics_loginout=$_POST["queuemetrics_loginout"];}
if (isset($_GET["callcard_enabled"]))				{$callcard_enabled=$_GET["callcard_enabled"];}
	elseif (isset($_POST["callcard_enabled"]))		{$callcard_enabled=$_POST["callcard_enabled"];}
if (isset($_GET["callcard_admin"]))					{$callcard_admin=$_GET["callcard_admin"];}
	elseif (isset($_POST["callcard_admin"]))		{$callcard_admin=$_POST["callcard_admin"];}
if (isset($_GET["agent_xfer_consultative"]))				{$agent_xfer_consultative=$_GET["agent_xfer_consultative"];}
	elseif (isset($_POST["agent_xfer_consultative"]))		{$agent_xfer_consultative=$_POST["agent_xfer_consultative"];}
if (isset($_GET["agent_xfer_dial_override"]))				{$agent_xfer_dial_override=$_GET["agent_xfer_dial_override"];}
	elseif (isset($_POST["agent_xfer_dial_override"]))		{$agent_xfer_dial_override=$_POST["agent_xfer_dial_override"];}
if (isset($_GET["agent_xfer_vm_transfer"]))					{$agent_xfer_vm_transfer=$_GET["agent_xfer_vm_transfer"];}
	elseif (isset($_POST["agent_xfer_vm_transfer"]))		{$agent_xfer_vm_transfer=$_POST["agent_xfer_vm_transfer"];}
if (isset($_GET["agent_xfer_blind_transfer"]))				{$agent_xfer_blind_transfer=$_GET["agent_xfer_blind_transfer"];}
	elseif (isset($_POST["agent_xfer_blind_transfer"]))		{$agent_xfer_blind_transfer=$_POST["agent_xfer_blind_transfer"];}
if (isset($_GET["agent_xfer_dial_with_customer"]))			{$agent_xfer_dial_with_customer=$_GET["agent_xfer_dial_with_customer"];}
	elseif (isset($_POST["agent_xfer_dial_with_customer"]))	{$agent_xfer_dial_with_customer=$_POST["agent_xfer_dial_with_customer"];}
if (isset($_GET["agent_xfer_park_customer_dial"]))			{$agent_xfer_park_customer_dial=$_GET["agent_xfer_park_customer_dial"];}
	elseif (isset($_POST["agent_xfer_park_customer_dial"]))	{$agent_xfer_park_customer_dial=$_POST["agent_xfer_park_customer_dial"];}
if (isset($_GET["agent_fullscreen"]))			{$agent_fullscreen=$_GET["agent_fullscreen"];}
	elseif (isset($_POST["agent_fullscreen"]))	{$agent_fullscreen=$_POST["agent_fullscreen"];}
if (isset($_GET["extension_id"]))				{$extension_id=$_GET["extension_id"];}
	elseif (isset($_POST["extension_id"]))		{$extension_id=$_POST["extension_id"];}
if (isset($_GET["extension_group_id"]))				{$extension_group_id=$_GET["extension_group_id"];}
	elseif (isset($_POST["extension_group_id"]))	{$extension_group_id=$_POST["extension_group_id"];}
if (isset($_GET["campaign_groups"]))			{$campaign_groups=$_GET["campaign_groups"];}
	elseif (isset($_POST["campaign_groups"]))	{$campaign_groups=$_POST["campaign_groups"];}
if (isset($_GET["extension_group"]))			{$extension_group=$_GET["extension_group"];}
	elseif (isset($_POST["extension_group"]))	{$extension_group=$_POST["extension_group"];}
if (isset($_GET["agent_choose_blended"]))			{$agent_choose_blended=$_GET["agent_choose_blended"];}
	elseif (isset($_POST["agent_choose_blended"]))	{$agent_choose_blended=$_POST["agent_choose_blended"];}
if (isset($_GET["queuemetrics_callstatus"]))			{$queuemetrics_callstatus=$_GET["queuemetrics_callstatus"];}
	elseif (isset($_POST["queuemetrics_callstatus"]))	{$queuemetrics_callstatus=$_POST["queuemetrics_callstatus"];}
if (isset($_GET["extension_appended_cidname"]))				{$extension_appended_cidname=$_GET["extension_appended_cidname"];}
	elseif (isset($_POST["extension_appended_cidname"]))	{$extension_appended_cidname=$_POST["extension_appended_cidname"];}
if (isset($_GET["scheduled_callbacks_count"]))			{$scheduled_callbacks_count=$_GET["scheduled_callbacks_count"];}
	elseif (isset($_POST["scheduled_callbacks_count"]))	{$scheduled_callbacks_count=$_POST["scheduled_callbacks_count"];}
if (isset($_GET["realtime_block_user_info"]))			{$realtime_block_user_info=$_GET["realtime_block_user_info"];}
	elseif (isset($_POST["realtime_block_user_info"]))	{$realtime_block_user_info=$_POST["realtime_block_user_info"];}
if (isset($_GET["manual_dial_override"]))			{$manual_dial_override=$_GET["manual_dial_override"];}
	elseif (isset($_POST["manual_dial_override"]))	{$manual_dial_override=$_POST["manual_dial_override"];}
if (isset($_GET["blind_monitor_warning"]))			{$blind_monitor_warning=$_GET["blind_monitor_warning"];}
	elseif (isset($_POST["blind_monitor_warning"]))	{$blind_monitor_warning=$_POST["blind_monitor_warning"];}
if (isset($_GET["blind_monitor_message"]))			{$blind_monitor_message=$_GET["blind_monitor_message"];}
	elseif (isset($_POST["blind_monitor_message"]))	{$blind_monitor_message=$_POST["blind_monitor_message"];}
if (isset($_GET["blind_monitor_filename"]))				{$blind_monitor_filename=$_GET["blind_monitor_filename"];}
	elseif (isset($_POST["blind_monitor_filename"]))	{$blind_monitor_filename=$_POST["blind_monitor_filename"];}
if (isset($_GET["uniqueid_status_display"]))			{$uniqueid_status_display=$_GET["uniqueid_status_display"];}
	elseif (isset($_POST["uniqueid_status_display"]))	{$uniqueid_status_display=$_POST["uniqueid_status_display"];}
if (isset($_GET["uniqueid_status_prefix"]))				{$uniqueid_status_prefix=$_GET["uniqueid_status_prefix"];}
	elseif (isset($_POST["uniqueid_status_prefix"]))	{$uniqueid_status_prefix=$_POST["uniqueid_status_prefix"];}
if (isset($_GET["default_codecs"]))				{$default_codecs=$_GET["default_codecs"];}
	elseif (isset($_POST["default_codecs"]))	{$default_codecs=$_POST["default_codecs"];}
if (isset($_GET["codecs_list"]))			{$codecs_list=$_GET["codecs_list"];}
	elseif (isset($_POST["codecs_list"]))	{$codecs_list=$_POST["codecs_list"];}
if (isset($_GET["codecs_with_template"]))			{$codecs_with_template=$_GET["codecs_with_template"];}
	elseif (isset($_POST["codecs_with_template"]))	{$codecs_with_template=$_POST["codecs_with_template"];}
if (isset($_GET["custom_fields_modify"]))			{$custom_fields_modify=$_GET["custom_fields_modify"];}
	elseif (isset($_POST["custom_fields_modify"]))	{$custom_fields_modify=$_POST["custom_fields_modify"];}
if (isset($_GET["hold_time_option_minimum"]))			{$hold_time_option_minimum=$_GET["hold_time_option_minimum"];}
	elseif (isset($_POST["hold_time_option_minimum"]))	{$hold_time_option_minimum=$_POST["hold_time_option_minimum"];}
if (isset($_GET["source_carrier"]))				{$source_carrier=$_GET["source_carrier"];}
	elseif (isset($_POST["source_carrier"]))	{$source_carrier=$_POST["source_carrier"];}
if (isset($_GET["hold_time_option_press_filename"]))			{$hold_time_option_press_filename=$_GET["hold_time_option_press_filename"];}
	elseif (isset($_POST["hold_time_option_press_filename"]))	{$hold_time_option_press_filename=$_POST["hold_time_option_press_filename"];}
if (isset($_GET["hold_time_option_callmenu"]))			{$hold_time_option_callmenu=$_GET["hold_time_option_callmenu"];}
	elseif (isset($_POST["hold_time_option_callmenu"]))	{$hold_time_option_callmenu=$_POST["hold_time_option_callmenu"];}
if (isset($_GET["inbound_queue_no_dial"]))			{$inbound_queue_no_dial=$_GET["inbound_queue_no_dial"];}
	elseif (isset($_POST["inbound_queue_no_dial"]))	{$inbound_queue_no_dial=$_POST["inbound_queue_no_dial"];}
if (isset($_GET["default_afterhours_filename_override"]))			{$default_afterhours_filename_override=$_GET["default_afterhours_filename_override"];}
	elseif (isset($_POST["default_afterhours_filename_override"]))	{$default_afterhours_filename_override=$_POST["default_afterhours_filename_override"];}
if (isset($_GET["sunday_afterhours_filename_override"]))			{$sunday_afterhours_filename_override=$_GET["sunday_afterhours_filename_override"];}
	elseif (isset($_POST["sunday_afterhours_filename_override"]))	{$sunday_afterhours_filename_override=$_POST["sunday_afterhours_filename_override"];}
if (isset($_GET["monday_afterhours_filename_override"]))			{$monday_afterhours_filename_override=$_GET["monday_afterhours_filename_override"];}
	elseif (isset($_POST["monday_afterhours_filename_override"]))	{$monday_afterhours_filename_override=$_POST["monday_afterhours_filename_override"];}
if (isset($_GET["tuesday_afterhours_filename_override"]))			{$tuesday_afterhours_filename_override=$_GET["tuesday_afterhours_filename_override"];}
	elseif (isset($_POST["tuesday_afterhours_filename_override"]))	{$tuesday_afterhours_filename_override=$_POST["tuesday_afterhours_filename_override"];}
if (isset($_GET["wednesday_afterhours_filename_override"]))			{$wednesday_afterhours_filename_override=$_GET["wednesday_afterhours_filename_override"];}
	elseif (isset($_POST["wednesday_afterhours_filename_override"]))	{$wednesday_afterhours_filename_override=$_POST["wednesday_afterhours_filename_override"];}
if (isset($_GET["thursday_afterhours_filename_override"]))			{$thursday_afterhours_filename_override=$_GET["thursday_afterhours_filename_override"];}
	elseif (isset($_POST["thursday_afterhours_filename_override"]))	{$thursday_afterhours_filename_override=$_POST["thursday_afterhours_filename_override"];}
if (isset($_GET["friday_afterhours_filename_override"]))			{$friday_afterhours_filename_override=$_GET["friday_afterhours_filename_override"];}
	elseif (isset($_POST["friday_afterhours_filename_override"]))	{$friday_afterhours_filename_override=$_POST["friday_afterhours_filename_override"];}
if (isset($_GET["saturday_afterhours_filename_override"]))			{$saturday_afterhours_filename_override=$_GET["saturday_afterhours_filename_override"];}
	elseif (isset($_POST["saturday_afterhours_filename_override"]))	{$saturday_afterhours_filename_override=$_POST["saturday_afterhours_filename_override"];}
if (isset($_GET["onhold_prompt_no_block"]))				{$onhold_prompt_no_block=$_GET["onhold_prompt_no_block"];}
	elseif (isset($_POST["onhold_prompt_no_block"]))	{$onhold_prompt_no_block=$_POST["onhold_prompt_no_block"];}
if (isset($_GET["onhold_prompt_seconds"]))			{$onhold_prompt_seconds=$_GET["onhold_prompt_seconds"];}
	elseif (isset($_POST["onhold_prompt_seconds"]))	{$onhold_prompt_seconds=$_POST["onhold_prompt_seconds"];}
if (isset($_GET["hold_time_option_no_block"]))			{$hold_time_option_no_block=$_GET["hold_time_option_no_block"];}
	elseif (isset($_POST["hold_time_option_no_block"]))	{$hold_time_option_no_block=$_POST["hold_time_option_no_block"];}
if (isset($_GET["hold_time_option_prompt_seconds"]))			{$hold_time_option_prompt_seconds=$_GET["hold_time_option_prompt_seconds"];}
	elseif (isset($_POST["hold_time_option_prompt_seconds"]))	{$hold_time_option_prompt_seconds=$_POST["hold_time_option_prompt_seconds"];}
if (isset($_GET["admin_web_directory"]))			{$admin_web_directory=$_GET["admin_web_directory"];}
	elseif (isset($_POST["admin_web_directory"]))	{$admin_web_directory=$_POST["admin_web_directory"];}
if (isset($_GET["tts_voice"]))				{$tts_voice=$_GET["tts_voice"];}
	elseif (isset($_POST["tts_voice"]))		{$tts_voice=$_POST["tts_voice"];}
if (isset($_GET["label_title"]))					{$label_title=$_GET["label_title"];}
	elseif (isset($_POST["label_title"]))			{$label_title=$_POST["label_title"];}
if (isset($_GET["label_first_name"]))				{$label_first_name=$_GET["label_first_name"];}
	elseif (isset($_POST["label_first_name"]))		{$label_first_name=$_POST["label_first_name"];}
if (isset($_GET["label_middle_initial"]))			{$label_middle_initial=$_GET["label_middle_initial"];}
	elseif (isset($_POST["label_middle_initial"]))	{$label_middle_initial=$_POST["label_middle_initial"];}
if (isset($_GET["label_last_name"]))				{$label_last_name=$_GET["label_last_name"];}
	elseif (isset($_POST["label_last_name"]))		{$label_last_name=$_POST["label_last_name"];}
if (isset($_GET["label_address1"]))					{$label_address1=$_GET["label_address1"];}
	elseif (isset($_POST["label_address1"]))		{$label_address1=$_POST["label_address1"];}
if (isset($_GET["label_address2"]))					{$label_address2=$_GET["label_address2"];}
	elseif (isset($_POST["label_address2"]))		{$label_address2=$_POST["label_address2"];}
if (isset($_GET["label_address3"]))					{$label_address3=$_GET["label_address3"];}
	elseif (isset($_POST["label_address3"]))		{$label_address3=$_POST["label_address3"];}
if (isset($_GET["label_city"]))						{$label_city=$_GET["label_city"];}
	elseif (isset($_POST["label_city"]))			{$label_city=$_POST["label_city"];}
if (isset($_GET["label_state"]))					{$label_state=$_GET["label_state"];}
	elseif (isset($_POST["label_state"]))			{$label_state=$_POST["label_state"];}
if (isset($_GET["label_province"]))					{$label_province=$_GET["label_province"];}
	elseif (isset($_POST["label_province"]))		{$label_province=$_POST["label_province"];}
if (isset($_GET["label_postal_code"]))				{$label_postal_code=$_GET["label_postal_code"];}
	elseif (isset($_POST["label_postal_code"]))		{$label_postal_code=$_POST["label_postal_code"];}
if (isset($_GET["label_vendor_lead_code"]))			{$label_vendor_lead_code=$_GET["label_vendor_lead_code"];}
	elseif (isset($_POST["label_vendor_lead_code"])){$label_vendor_lead_code=$_POST["label_vendor_lead_code"];}
if (isset($_GET["label_gender"]))					{$label_gender=$_GET["label_gender"];}
	elseif (isset($_POST["label_gender"]))			{$label_gender=$_POST["label_gender"];}
if (isset($_GET["label_phone_number"]))				{$label_phone_number=$_GET["label_phone_number"];}
	elseif (isset($_POST["label_phone_number"]))	{$label_phone_number=$_POST["label_phone_number"];}
if (isset($_GET["label_phone_code"]))				{$label_phone_code=$_GET["label_phone_code"];}
	elseif (isset($_POST["label_phone_code"]))		{$label_phone_code=$_POST["label_phone_code"];}
if (isset($_GET["label_alt_phone"]))				{$label_alt_phone=$_GET["label_alt_phone"];}
	elseif (isset($_POST["label_alt_phone"]))		{$label_alt_phone=$_POST["label_alt_phone"];}
if (isset($_GET["label_security_phrase"]))			{$label_security_phrase=$_GET["label_security_phrase"];}
	elseif (isset($_POST["label_security_phrase"]))	{$label_security_phrase=$_POST["label_security_phrase"];}
if (isset($_GET["label_email"]))					{$label_email=$_GET["label_email"];}
	elseif (isset($_POST["label_email"]))			{$label_email=$_POST["label_email"];}
if (isset($_GET["label_comments"]))					{$label_comments=$_GET["label_comments"];}
	elseif (isset($_POST["label_comments"]))		{$label_comments=$_POST["label_comments"];}
if (isset($_GET["custom_fields_enabled"]))			{$custom_fields_enabled=$_GET["custom_fields_enabled"];}
	elseif (isset($_POST["custom_fields_enabled"]))	{$custom_fields_enabled=$_POST["custom_fields_enabled"];}
if (isset($_GET["slave_db_server"]))				{$slave_db_server=$_GET["slave_db_server"];}
	elseif (isset($_POST["slave_db_server"]))		{$slave_db_server=$_POST["slave_db_server"];}
if (isset($_GET["reports_use_slave_db"]))			{$reports_use_slave_db=$_GET["reports_use_slave_db"];}
	elseif (isset($_POST["reports_use_slave_db"]))	{$reports_use_slave_db=$_POST["reports_use_slave_db"];}
if (isset($_GET["custom_reports_use_slave_db"]))			{$custom_reports_use_slave_db=$_GET["custom_reports_use_slave_db"];}
	elseif (isset($_POST["custom_reports_use_slave_db"]))	{$custom_reports_use_slave_db=$_POST["custom_reports_use_slave_db"];}
if (isset($_GET["hold_time_second_option"]))			{$hold_time_second_option=$_GET["hold_time_second_option"];}
	elseif (isset($_POST["hold_time_second_option"]))	{$hold_time_second_option=$_POST["hold_time_second_option"];}
if (isset($_GET["hold_time_third_option"]))				{$hold_time_third_option=$_GET["hold_time_third_option"];}
	elseif (isset($_POST["hold_time_third_option"]))	{$hold_time_third_option=$_POST["hold_time_third_option"];}
if (isset($_GET["wait_hold_option_priority"]))			{$wait_hold_option_priority=$_GET["wait_hold_option_priority"];}
	elseif (isset($_POST["wait_hold_option_priority"]))	{$wait_hold_option_priority=$_POST["wait_hold_option_priority"];}
if (isset($_GET["wait_time_option"]))					{$wait_time_option=$_GET["wait_time_option"];}
	elseif (isset($_POST["wait_time_option"]))			{$wait_time_option=$_POST["wait_time_option"];}
if (isset($_GET["wait_time_second_option"]))			{$wait_time_second_option=$_GET["wait_time_second_option"];}
	elseif (isset($_POST["wait_time_second_option"]))	{$wait_time_second_option=$_POST["wait_time_second_option"];}
if (isset($_GET["wait_time_third_option"]))				{$wait_time_third_option=$_GET["wait_time_third_option"];}
	elseif (isset($_POST["wait_time_third_option"]))	{$wait_time_third_option=$_POST["wait_time_third_option"];}
if (isset($_GET["wait_time_option_seconds"]))			{$wait_time_option_seconds=$_GET["wait_time_option_seconds"];}
	elseif (isset($_POST["wait_time_option_seconds"]))	{$wait_time_option_seconds=$_POST["wait_time_option_seconds"];}
if (isset($_GET["wait_time_option_exten"]))				{$wait_time_option_exten=$_GET["wait_time_option_exten"];}
	elseif (isset($_POST["wait_time_option_exten"]))	{$wait_time_option_exten=$_POST["wait_time_option_exten"];}
if (isset($_GET["wait_time_option_voicemail"]))			{$wait_time_option_voicemail=$_GET["wait_time_option_voicemail"];}
	elseif (isset($_POST["wait_time_option_voicemail"]))	{$wait_time_option_voicemail=$_POST["wait_time_option_voicemail"];}
if (isset($_GET["wait_time_option_xfer_group"]))			{$wait_time_option_xfer_group=$_GET["wait_time_option_xfer_group"];}
	elseif (isset($_POST["wait_time_option_xfer_group"]))	{$wait_time_option_xfer_group=$_POST["wait_time_option_xfer_group"];}
if (isset($_GET["wait_time_option_callmenu"]))				{$wait_time_option_callmenu=$_GET["wait_time_option_callmenu"];}
	elseif (isset($_POST["wait_time_option_callmenu"]))		{$wait_time_option_callmenu=$_POST["wait_time_option_callmenu"];}
if (isset($_GET["wait_time_option_callback_filename"]))				{$wait_time_option_callback_filename=$_GET["wait_time_option_callback_filename"];}
	elseif (isset($_POST["wait_time_option_callback_filename"]))	{$wait_time_option_callback_filename=$_POST["wait_time_option_callback_filename"];}
if (isset($_GET["wait_time_option_callback_list_id"]))			{$wait_time_option_callback_list_id=$_GET["wait_time_option_callback_list_id"];}
	elseif (isset($_POST["wait_time_option_callback_list_id"]))	{$wait_time_option_callback_list_id=$_POST["wait_time_option_callback_list_id"];}
if (isset($_GET["wait_time_option_press_filename"]))			{$wait_time_option_press_filename=$_GET["wait_time_option_press_filename"];}
	elseif (isset($_POST["wait_time_option_press_filename"]))	{$wait_time_option_press_filename=$_POST["wait_time_option_press_filename"];}
if (isset($_GET["wait_time_option_no_block"]))			{$wait_time_option_no_block=$_GET["wait_time_option_no_block"];}
	elseif (isset($_POST["wait_time_option_no_block"]))	{$wait_time_option_no_block=$_POST["wait_time_option_no_block"];}
if (isset($_GET["wait_time_option_prompt_seconds"]))			{$wait_time_option_prompt_seconds=$_GET["wait_time_option_prompt_seconds"];}
	elseif (isset($_POST["wait_time_option_prompt_seconds"]))	{$wait_time_option_prompt_seconds=$_POST["wait_time_option_prompt_seconds"];}
if (isset($_GET["timer_action_destination"]))			{$timer_action_destination=$_GET["timer_action_destination"];}
	elseif (isset($_POST["timer_action_destination"]))	{$timer_action_destination=$_POST["timer_action_destination"];}
if (isset($_GET["allowed_reports"]))			{$allowed_reports=$_GET["allowed_reports"];}
	elseif (isset($_POST["allowed_reports"]))	{$allowed_reports=$_POST["allowed_reports"];}
if (isset($_GET["allowed_custom_reports"]))			{$allowed_custom_reports=$_GET["allowed_custom_reports"];}
	elseif (isset($_POST["allowed_custom_reports"]))	{$allowed_custom_reports=$_POST["allowed_custom_reports"];}
if (isset($_GET["filter_phone_group_id"]))			{$filter_phone_group_id=$_GET["filter_phone_group_id"];}
	elseif (isset($_POST["filter_phone_group_id"]))	{$filter_phone_group_id=$_POST["filter_phone_group_id"];}
if (isset($_GET["filter_phone_group_name"]))			{$filter_phone_group_name=$_GET["filter_phone_group_name"];}
	elseif (isset($_POST["filter_phone_group_name"]))	{$filter_phone_group_name=$_POST["filter_phone_group_name"];}
if (isset($_GET["filter_phone_group_description"]))				{$filter_phone_group_description=$_GET["filter_phone_group_description"];}
	elseif (isset($_POST["filter_phone_group_description"]))	{$filter_phone_group_description=$_POST["filter_phone_group_description"];}
if (isset($_GET["filter_inbound_number"]))			{$filter_inbound_number=$_GET["filter_inbound_number"];}
	elseif (isset($_POST["filter_inbound_number"]))	{$filter_inbound_number=$_POST["filter_inbound_number"];}
if (isset($_GET["filter_url"]))				{$filter_url=$_GET["filter_url"];}
	elseif (isset($_POST["filter_url"]))	{$filter_url=$_POST["filter_url"];}
if (isset($_GET["filter_action"]))			{$filter_action=$_GET["filter_action"];}
	elseif (isset($_POST["filter_action"]))	{$filter_action=$_POST["filter_action"];}
if (isset($_GET["filter_extension"]))			{$filter_extension=$_GET["filter_extension"];}
	elseif (isset($_POST["filter_extension"]))	{$filter_extension=$_POST["filter_extension"];}
if (isset($_GET["filter_exten_context"]))			{$filter_exten_context=$_GET["filter_exten_context"];}
	elseif (isset($_POST["filter_exten_context"]))	{$filter_exten_context=$_POST["filter_exten_context"];}
if (isset($_GET["filter_voicemail_ext"]))			{$filter_voicemail_ext=$_GET["filter_voicemail_ext"];}
	elseif (isset($_POST["filter_voicemail_ext"]))	{$filter_voicemail_ext=$_POST["filter_voicemail_ext"];}
if (isset($_GET["filter_phone"]))			{$filter_phone=$_GET["filter_phone"];}
	elseif (isset($_POST["filter_phone"]))	{$filter_phone=$_POST["filter_phone"];}
if (isset($_GET["filter_server_ip"]))			{$filter_server_ip=$_GET["filter_server_ip"];}
	elseif (isset($_POST["filter_server_ip"]))	{$filter_server_ip=$_POST["filter_server_ip"];}
if (isset($_GET["filter_user"]))			{$filter_user=$_GET["filter_user"];}
	elseif (isset($_POST["filter_user"]))	{$filter_user=$_POST["filter_user"];}
if (isset($_GET["filter_user_unavailable_action"]))				{$filter_user_unavailable_action=$_GET["filter_user_unavailable_action"];}
	elseif (isset($_POST["filter_user_unavailable_action"]))	{$filter_user_unavailable_action=$_POST["filter_user_unavailable_action"];}
if (isset($_GET["filter_user_route_settings_ingroup"]))				{$filter_user_route_settings_ingroup=$_GET["filter_user_route_settings_ingroup"];}
	elseif (isset($_POST["filter_user_route_settings_ingroup"]))	{$filter_user_route_settings_ingroup=$_POST["filter_user_route_settings_ingroup"];}
if (isset($_GET["filter_group_id"]))			{$filter_group_id=$_GET["filter_group_id"];}
	elseif (isset($_POST["filter_group_id"]))	{$filter_group_id=$_POST["filter_group_id"];}
if (isset($_GET["filter_call_handle_method"]))			{$filter_call_handle_method=$_GET["filter_call_handle_method"];}
	elseif (isset($_POST["filter_call_handle_method"]))	{$filter_call_handle_method=$_POST["filter_call_handle_method"];}
if (isset($_GET["filter_agent_search_method"]))				{$filter_agent_search_method=$_GET["filter_agent_search_method"];}
	elseif (isset($_POST["filter_agent_search_method"]))	{$filter_agent_search_method=$_POST["filter_agent_search_method"];}
if (isset($_GET["filter_list_id"]))				{$filter_list_id=$_GET["filter_list_id"];}
	elseif (isset($_POST["filter_list_id"]))	{$filter_list_id=$_POST["filter_list_id"];}
if (isset($_GET["filter_campaign_id"]))				{$filter_campaign_id=$_GET["filter_campaign_id"];}
	elseif (isset($_POST["filter_campaign_id"]))	{$filter_campaign_id=$_POST["filter_campaign_id"];}
if (isset($_GET["filter_phone_code"]))			{$filter_phone_code=$_GET["filter_phone_code"];}
	elseif (isset($_POST["filter_phone_code"]))	{$filter_phone_code=$_POST["filter_phone_code"];}
if (isset($_GET["filter_menu_id"]))				{$filter_menu_id=$_GET["filter_menu_id"];}
	elseif (isset($_POST["filter_menu_id"]))	{$filter_menu_id=$_POST["filter_menu_id"];}
if (isset($_GET["filter_clean_cid_number"]))			{$filter_clean_cid_number=$_GET["filter_clean_cid_number"];}
	elseif (isset($_POST["filter_clean_cid_number"]))	{$filter_clean_cid_number=$_POST["filter_clean_cid_number"];}
if (isset($_GET["webphone_url_override"]))			{$webphone_url_override=$_GET["webphone_url_override"];}
	elseif (isset($_POST["webphone_url_override"]))	{$webphone_url_override=$_POST["webphone_url_override"];}
if (isset($_GET["calculate_estimated_hold_seconds"]))			{$calculate_estimated_hold_seconds=$_GET["calculate_estimated_hold_seconds"];}
	elseif (isset($_POST["calculate_estimated_hold_seconds"]))	{$calculate_estimated_hold_seconds=$_POST["calculate_estimated_hold_seconds"];}
if (isset($_GET["enable_xfer_presets"]))			{$enable_xfer_presets=$_GET["enable_xfer_presets"];}
	elseif (isset($_POST["enable_xfer_presets"]))	{$enable_xfer_presets=$_POST["enable_xfer_presets"];}
if (isset($_GET["hide_xfer_number_to_dial"]))			{$hide_xfer_number_to_dial=$_GET["hide_xfer_number_to_dial"];}
	elseif (isset($_POST["hide_xfer_number_to_dial"]))	{$hide_xfer_number_to_dial=$_POST["hide_xfer_number_to_dial"];}
if (isset($_GET["preset_name"]))			{$preset_name=$_GET["preset_name"];}
	elseif (isset($_POST["preset_name"]))	{$preset_name=$_POST["preset_name"];}
if (isset($_GET["preset_number"]))			{$preset_number=$_GET["preset_number"];}
	elseif (isset($_POST["preset_number"]))	{$preset_number=$_POST["preset_number"];}
if (isset($_GET["preset_dtmf"]))			{$preset_dtmf=$_GET["preset_dtmf"];}
	elseif (isset($_POST["preset_dtmf"]))	{$preset_dtmf=$_POST["preset_dtmf"];}
if (isset($_GET["preset_hide_number"]))				{$preset_hide_number=$_GET["preset_hide_number"];}
	elseif (isset($_POST["preset_hide_number"]))	{$preset_hide_number=$_POST["preset_hide_number"];}
if (isset($_GET["manual_dial_prefix"]))				{$manual_dial_prefix=$_GET["manual_dial_prefix"];}
	elseif (isset($_POST["manual_dial_prefix"]))	{$manual_dial_prefix=$_POST["manual_dial_prefix"];}
if (isset($_GET["webphone_systemkey"]))				{$webphone_systemkey=$_GET["webphone_systemkey"];}
	elseif (isset($_POST["webphone_systemkey"]))	{$webphone_systemkey=$_POST["webphone_systemkey"];}
if (isset($_GET["webphone_dialpad"]))			{$webphone_dialpad=$_GET["webphone_dialpad"];}
	elseif (isset($_POST["webphone_dialpad"]))	{$webphone_dialpad=$_POST["webphone_dialpad"];}
if (isset($_GET["webphone_systemkey_override"]))			{$webphone_systemkey_override=$_GET["webphone_systemkey_override"];}
	elseif (isset($_POST["webphone_systemkey_override"]))	{$webphone_systemkey_override=$_POST["webphone_systemkey_override"];}
if (isset($_GET["webphone_dialpad_override"]))			{$webphone_dialpad_override=$_GET["webphone_dialpad_override"];}
	elseif (isset($_POST["webphone_dialpad_override"]))	{$webphone_dialpad_override=$_POST["webphone_dialpad_override"];}
if (isset($_GET["force_change_password"]))			{$force_change_password=$_GET["force_change_password"];}
	elseif (isset($_POST["force_change_password"]))	{$force_change_password=$_POST["force_change_password"];}
if (isset($_GET["first_login_trigger"]))			{$first_login_trigger=$_GET["first_login_trigger"];}
	elseif (isset($_POST["first_login_trigger"]))	{$first_login_trigger=$_POST["first_login_trigger"];}
if (isset($_GET["default_phone_registration_password"]))			{$default_phone_registration_password=$_GET["default_phone_registration_password"];}
	elseif (isset($_POST["default_phone_registration_password"]))	{$default_phone_registration_password=$_POST["default_phone_registration_password"];}
if (isset($_GET["default_phone_login_password"]))			{$default_phone_login_password=$_GET["default_phone_login_password"];}
	elseif (isset($_POST["default_phone_login_password"]))	{$default_phone_login_password=$_POST["default_phone_login_password"];}
if (isset($_GET["default_server_password"]))			{$default_server_password=$_GET["default_server_password"];}
	elseif (isset($_POST["default_server_password"]))	{$default_server_password=$_POST["default_server_password"];}
if (isset($_GET["customer_3way_hangup_logging"]))			{$customer_3way_hangup_logging=$_GET["customer_3way_hangup_logging"];}
	elseif (isset($_POST["customer_3way_hangup_logging"]))	{$customer_3way_hangup_logging=$_POST["customer_3way_hangup_logging"];}
if (isset($_GET["customer_3way_hangup_seconds"]))			{$customer_3way_hangup_seconds=$_GET["customer_3way_hangup_seconds"];}
	elseif (isset($_POST["customer_3way_hangup_seconds"]))	{$customer_3way_hangup_seconds=$_POST["customer_3way_hangup_seconds"];}
if (isset($_GET["customer_3way_hangup_action"]))			{$customer_3way_hangup_action=$_GET["customer_3way_hangup_action"];}
	elseif (isset($_POST["customer_3way_hangup_action"]))	{$customer_3way_hangup_action=$_POST["customer_3way_hangup_action"];}
if (isset($_GET["add_lead_url"]))			{$add_lead_url=$_GET["add_lead_url"];}
	elseif (isset($_POST["add_lead_url"]))	{$add_lead_url=$_POST["add_lead_url"];}
if (isset($_GET["ivr_park_call"]))			{$ivr_park_call=$_GET["ivr_park_call"];}
	elseif (isset($_POST["ivr_park_call"]))	{$ivr_park_call=$_POST["ivr_park_call"];}
if (isset($_GET["ivr_park_call_agi"]))			{$ivr_park_call_agi=$_GET["ivr_park_call_agi"];}
	elseif (isset($_POST["ivr_park_call_agi"]))	{$ivr_park_call_agi=$_POST["ivr_park_call_agi"];}
if (isset($_GET["manual_preview_dial"]))			{$manual_preview_dial=$_GET["manual_preview_dial"];}
	elseif (isset($_POST["manual_preview_dial"]))	{$manual_preview_dial=$_POST["manual_preview_dial"];}
if (isset($_GET["eht_minimum_prompt_filename"]))			{$eht_minimum_prompt_filename=$_GET["eht_minimum_prompt_filename"];}
	elseif (isset($_POST["eht_minimum_prompt_filename"]))	{$eht_minimum_prompt_filename=$_POST["eht_minimum_prompt_filename"];}
if (isset($_GET["eht_minimum_prompt_no_block"]))			{$eht_minimum_prompt_no_block=$_GET["eht_minimum_prompt_no_block"];}
	elseif (isset($_POST["eht_minimum_prompt_no_block"]))	{$eht_minimum_prompt_no_block=$_POST["eht_minimum_prompt_no_block"];}
if (isset($_GET["eht_minimum_prompt_seconds"]))				{$eht_minimum_prompt_seconds=$_GET["eht_minimum_prompt_seconds"];}
	elseif (isset($_POST["eht_minimum_prompt_seconds"]))	{$eht_minimum_prompt_seconds=$_POST["eht_minimum_prompt_seconds"];}
if (isset($_GET["realtime_agent_time_stats"]))				{$realtime_agent_time_stats=$_GET["realtime_agent_time_stats"];}
	elseif (isset($_POST["realtime_agent_time_stats"]))		{$realtime_agent_time_stats=$_POST["realtime_agent_time_stats"];}
if (isset($_GET["admin_modify_refresh"]))			{$admin_modify_refresh=$_GET["admin_modify_refresh"];}
	elseif (isset($_POST["admin_modify_refresh"]))	{$admin_modify_refresh=$_POST["admin_modify_refresh"];}
if (isset($_GET["nocache_admin"]))			{$nocache_admin=$_GET["nocache_admin"];}
	elseif (isset($_POST["nocache_admin"]))	{$nocache_admin=$_POST["nocache_admin"];}
if (isset($_GET["generate_cross_server_exten"]))			{$generate_cross_server_exten=$_GET["generate_cross_server_exten"];}
	elseif (isset($_POST["generate_cross_server_exten"]))	{$generate_cross_server_exten=$_POST["generate_cross_server_exten"];}
if (isset($_GET["queuemetrics_addmember_enabled"]))				{$queuemetrics_addmember_enabled=$_GET["queuemetrics_addmember_enabled"];}
	elseif (isset($_POST["queuemetrics_addmember_enabled"]))	{$queuemetrics_addmember_enabled=$_POST["queuemetrics_addmember_enabled"];}
if (isset($_GET["modify_page"]))			{$modify_page=$_GET["modify_page"];}
	elseif (isset($_POST["modify_page"]))	{$modify_page=$_POST["modify_page"];}
if (isset($_GET["modify_url"]))				{$modify_url=$_GET["modify_url"];}
	elseif (isset($_POST["modify_url"]))	{$modify_url=$_POST["modify_url"];}
if (isset($_GET["use_auto_hopper"]))			{$use_auto_hopper=$_GET["use_auto_hopper"];}
	elseif (isset($_POST["use_auto_hopper"]))	{$use_auto_hopper=$_POST["use_auto_hopper"];}
if (isset($_GET["auto_hopper_multi"]))			{$auto_hopper_multi=$_GET["auto_hopper_multi"];}
	elseif (isset($_POST["auto_hopper_multi"]))	{$auto_hopper_multi=$_POST["auto_hopper_multi"];}
if (isset($_GET["auto_trim_hopper"]))			{$auto_trim_hopper=$_GET["auto_trim_hopper"];}
	elseif (isset($_POST["auto_trim_hopper"]))	{$auto_trim_hopper=$_POST["auto_trim_hopper"];}
if (isset($_GET["api_manual_dial"]))			{$api_manual_dial=$_GET["api_manual_dial"];}
	elseif (isset($_POST["api_manual_dial"]))	{$api_manual_dial=$_POST["api_manual_dial"];}
if (isset($_GET["manual_dial_call_time_check"]))			{$manual_dial_call_time_check=$_GET["manual_dial_call_time_check"];}
	elseif (isset($_POST["manual_dial_call_time_check"]))	{$manual_dial_call_time_check=$_POST["manual_dial_call_time_check"];}
if (isset($_GET["queuemetrics_dispo_pause"]))			{$queuemetrics_dispo_pause=$_GET["queuemetrics_dispo_pause"];}
	elseif (isset($_POST["queuemetrics_dispo_pause"]))	{$queuemetrics_dispo_pause=$_POST["queuemetrics_dispo_pause"];}
if (isset($_GET["lead_order_randomize"]))			{$lead_order_randomize=$_GET["lead_order_randomize"];}
	elseif (isset($_POST["lead_order_randomize"]))	{$lead_order_randomize=$_POST["lead_order_randomize"];}
if (isset($_GET["lead_order_secondary"]))			{$lead_order_secondary=$_GET["lead_order_secondary"];}
	elseif (isset($_POST["lead_order_secondary"]))	{$lead_order_secondary=$_POST["lead_order_secondary"];}
if (isset($_GET["per_call_notes"]))				{$per_call_notes=$_GET["per_call_notes"];}
	elseif (isset($_POST["per_call_notes"]))	{$per_call_notes=$_POST["per_call_notes"];}
if (isset($_GET["my_callback_option"]))				{$my_callback_option=$_GET["my_callback_option"];}
	elseif (isset($_POST["my_callback_option"]))	{$my_callback_option=$_POST["my_callback_option"];}
if (isset($_GET["agent_lead_search"]))			{$agent_lead_search=$_GET["agent_lead_search"];}
	elseif (isset($_POST["agent_lead_search"]))	{$agent_lead_search=$_POST["agent_lead_search"];}
if (isset($_GET["agent_lead_search_method"]))			{$agent_lead_search_method=$_GET["agent_lead_search_method"];}
	elseif (isset($_POST["agent_lead_search_method"]))	{$agent_lead_search_method=$_POST["agent_lead_search_method"];}
if (isset($_GET["queuemetrics_phone_environment"]))				{$queuemetrics_phone_environment=$_GET["queuemetrics_phone_environment"];}
	elseif (isset($_POST["queuemetrics_phone_environment"]))	{$queuemetrics_phone_environment=$_POST["queuemetrics_phone_environment"];}
if (isset($_GET["active_twin_server_ip"]))			{$active_twin_server_ip=$_GET["active_twin_server_ip"];}
	elseif (isset($_POST["active_twin_server_ip"]))	{$active_twin_server_ip=$_POST["active_twin_server_ip"];}
if (isset($_GET["on_hook_agent"]))			{$on_hook_agent=$_GET["on_hook_agent"];}
	elseif (isset($_POST["on_hook_agent"]))	{$on_hook_agent=$_POST["on_hook_agent"];}
if (isset($_GET["on_hook_ring_time"]))			{$on_hook_ring_time=$_GET["on_hook_ring_time"];}
	elseif (isset($_POST["on_hook_ring_time"]))	{$on_hook_ring_time=$_POST["on_hook_ring_time"];}
if (isset($_GET["auto_pause_precall"]))			{$auto_pause_precall=$_GET["auto_pause_precall"];}
	elseif (isset($_POST["auto_pause_precall"]))	{$auto_pause_precall=$_POST["auto_pause_precall"];}
if (isset($_GET["auto_resume_precall"]))			{$auto_resume_precall=$_GET["auto_resume_precall"];}
	elseif (isset($_POST["auto_resume_precall"]))	{$auto_resume_precall=$_POST["auto_resume_precall"];}
if (isset($_GET["auto_pause_precall_code"]))			{$auto_pause_precall_code=$_GET["auto_pause_precall_code"];}
	elseif (isset($_POST["auto_pause_precall_code"]))	{$auto_pause_precall_code=$_POST["auto_pause_precall_code"];}
if (isset($_GET["audit_comments"]))                    {$audit_comments=$_GET["audit_comments"];}
	elseif (isset($_POST["audit_comments"]))        {$audit_comments=$_POST["audit_comments"];}
if (isset($_GET["reload_dialplan_on_servers"]))				{$reload_dialplan_on_servers=$_GET["reload_dialplan_on_servers"];}
	elseif (isset($_POST["reload_dialplan_on_servers"]))	{$reload_dialplan_on_servers=$_POST["reload_dialplan_on_servers"];}
if (isset($_GET["manual_dial_cid"]))			{$manual_dial_cid=$_GET["manual_dial_cid"];}
	elseif (isset($_POST["manual_dial_cid"]))	{$manual_dial_cid=$_POST["manual_dial_cid"];}
if (isset($_GET["post_phone_time_diff_alert"]))				{$post_phone_time_diff_alert=$_GET["post_phone_time_diff_alert"];}
	elseif (isset($_POST["post_phone_time_diff_alert"]))	{$post_phone_time_diff_alert=$_POST["post_phone_time_diff_alert"];}
if (isset($_GET["custom_3way_button_transfer"]))			{$custom_3way_button_transfer=$_GET["custom_3way_button_transfer"];}
	elseif (isset($_POST["custom_3way_button_transfer"]))	{$custom_3way_button_transfer=$_POST["custom_3way_button_transfer"];}
if (isset($_GET["available_only_tally_threshold"]))				{$available_only_tally_threshold=$_GET["available_only_tally_threshold"];}
	elseif (isset($_POST["available_only_tally_threshold"]))	{$available_only_tally_threshold=$_POST["available_only_tally_threshold"];}
if (isset($_GET["available_only_tally_threshold_agents"]))			{$available_only_tally_threshold_agents=$_GET["available_only_tally_threshold_agents"];}
	elseif (isset($_POST["available_only_tally_threshold_agents"]))	{$available_only_tally_threshold_agents=$_POST["available_only_tally_threshold_agents"];}
if (isset($_GET["dial_level_threshold"]))			{$dial_level_threshold=$_GET["dial_level_threshold"];}
	elseif (isset($_POST["dial_level_threshold"]))	{$dial_level_threshold=$_POST["dial_level_threshold"];}
if (isset($_GET["dial_level_threshold_agents"]))			{$dial_level_threshold_agents=$_GET["dial_level_threshold_agents"];}
	elseif (isset($_POST["dial_level_threshold_agents"]))	{$dial_level_threshold_agents=$_POST["dial_level_threshold_agents"];}
if (isset($_GET["time_zone_setting"]))			{$time_zone_setting=$_GET["time_zone_setting"];}
	elseif (isset($_POST["time_zone_setting"]))	{$time_zone_setting=$_POST["time_zone_setting"];}
if (isset($_GET["safe_harbor_audio"]))			{$safe_harbor_audio=$_GET["safe_harbor_audio"];}
	elseif (isset($_POST["safe_harbor_audio"]))	{$safe_harbor_audio=$_POST["safe_harbor_audio"];}
if (isset($_GET["safe_harbor_menu_id"]))			{$safe_harbor_menu_id=$_GET["safe_harbor_menu_id"];}
	elseif (isset($_POST["safe_harbor_menu_id"]))	{$safe_harbor_menu_id=$_POST["safe_harbor_menu_id"];}
if (isset($_GET["dtmf_log"]))			{$dtmf_log=$_GET["dtmf_log"];}
	elseif (isset($_POST["dtmf_log"]))	{$dtmf_log=$_POST["dtmf_log"];}
if (isset($_GET["webphone_auto_answer"]))			{$webphone_auto_answer=$_GET["webphone_auto_answer"];}
	elseif (isset($_POST["webphone_auto_answer"]))	{$webphone_auto_answer=$_POST["webphone_auto_answer"];}
if (isset($_GET["survey_menu_id"]))				{$survey_menu_id=$_GET["survey_menu_id"];}
	elseif (isset($_POST["survey_menu_id"]))	{$survey_menu_id=$_POST["survey_menu_id"];}
if (isset($_GET["callback_days_limit"]))			{$callback_days_limit=$_GET["callback_days_limit"];}
	elseif (isset($_POST["callback_days_limit"]))	{$callback_days_limit=$_POST["callback_days_limit"];}
if (isset($_GET["dl_diff_target_method"]))			{$dl_diff_target_method=$_GET["dl_diff_target_method"];}
	elseif (isset($_POST["dl_diff_target_method"]))	{$dl_diff_target_method=$_POST["dl_diff_target_method"];}
if (isset($_GET["disable_dispo_screen"]))			{$disable_dispo_screen=$_GET["disable_dispo_screen"];}
	elseif (isset($_POST["disable_dispo_screen"]))	{$disable_dispo_screen=$_POST["disable_dispo_screen"];}
if (isset($_GET["disable_dispo_status"]))			{$disable_dispo_status=$_GET["disable_dispo_status"];}
	elseif (isset($_POST["disable_dispo_status"]))	{$disable_dispo_status=$_POST["disable_dispo_status"];}
if (isset($_GET["screen_labels"]))			{$screen_labels=$_GET["screen_labels"];}
	elseif (isset($_POST["screen_labels"]))	{$screen_labels=$_POST["screen_labels"];}
if (isset($_GET["label_hide_field_logs"]))			{$label_hide_field_logs=$_GET["label_hide_field_logs"];}
	elseif (isset($_POST["label_hide_field_logs"]))	{$label_hide_field_logs=$_POST["label_hide_field_logs"];}
if (isset($_GET["label_id"]))			{$label_id=$_GET["label_id"];}
	elseif (isset($_POST["label_id"]))	{$label_id=$_POST["label_id"];}
if (isset($_GET["label_name"]))				{$label_name=$_GET["label_name"];}
	elseif (isset($_POST["label_name"]))	{$label_name=$_POST["label_name"];}
if (isset($_GET["status_display_fields"]))			{$status_display_fields=$_GET["status_display_fields"];}
	elseif (isset($_POST["status_display_fields"]))	{$status_display_fields=$_POST["status_display_fields"];}
if (isset($_GET["queuemetrics_pe_phone_append"]))			{$queuemetrics_pe_phone_append=$_GET["queuemetrics_pe_phone_append"];}
	elseif (isset($_POST["queuemetrics_pe_phone_append"]))	{$queuemetrics_pe_phone_append=$_POST["queuemetrics_pe_phone_append"];}
if (isset($_GET["test_campaign_calls"]))			{$test_campaign_calls=$_GET["test_campaign_calls"];}
	elseif (isset($_POST["test_campaign_calls"]))	{$test_campaign_calls=$_POST["test_campaign_calls"];}
if (isset($_GET["agents_calls_reset"]))				{$agents_calls_reset=$_GET["agents_calls_reset"];}
	elseif (isset($_POST["agents_calls_reset"]))	{$agents_calls_reset=$_POST["agents_calls_reset"];}
if (isset($_GET["voicemail_timezone"]))				{$voicemail_timezone=$_GET["voicemail_timezone"];}
	elseif (isset($_POST["voicemail_timezone"]))	{$voicemail_timezone=$_POST["voicemail_timezone"];}
if (isset($_GET["voicemail_options"]))			{$voicemail_options=$_GET["voicemail_options"];}
	elseif (isset($_POST["voicemail_options"]))	{$voicemail_options=$_POST["voicemail_options"];}
if (isset($_GET["default_voicemail_timezone"]))				{$default_voicemail_timezone=$_GET["default_voicemail_timezone"];}
	elseif (isset($_POST["default_voicemail_timezone"]))	{$default_voicemail_timezone=$_POST["default_voicemail_timezone"];}
if (isset($_GET["default_local_gmt"]))			{$default_local_gmt=$_GET["default_local_gmt"];}
	elseif (isset($_POST["default_local_gmt"]))	{$default_local_gmt=$_POST["default_local_gmt"];}
if (isset($_GET["na_call_url"]))			{$na_call_url=$_GET["na_call_url"];}
	elseif (isset($_POST["na_call_url"]))	{$na_call_url=$_POST["na_call_url"];}
if (isset($_GET["on_hook_cid"]))			{$on_hook_cid=$_GET["on_hook_cid"];}
	elseif (isset($_POST["on_hook_cid"]))	{$on_hook_cid=$_POST["on_hook_cid"];}
if (isset($_GET["form_end"]))			{$form_end=$_GET["form_end"];}
	elseif (isset($_POST["form_end"]))	{$form_end=$_POST["form_end"];}
if (isset($_GET["noanswer_log"]))			{$noanswer_log=$_GET["noanswer_log"];}
	elseif (isset($_POST["noanswer_log"]))	{$noanswer_log=$_POST["noanswer_log"];}
if (isset($_GET["alt_log_server_ip"]))			{$alt_log_server_ip=$_GET["alt_log_server_ip"];}
	elseif (isset($_POST["alt_log_server_ip"]))	{$alt_log_server_ip=$_POST["alt_log_server_ip"];}
if (isset($_GET["alt_log_dbname"]))			{$alt_log_dbname=$_GET["alt_log_dbname"];}
	elseif (isset($_POST["alt_log_dbname"]))	{$alt_log_dbname=$_POST["alt_log_dbname"];}
if (isset($_GET["alt_log_login"]))			{$alt_log_login=$_GET["alt_log_login"];}
	elseif (isset($_POST["alt_log_login"]))	{$alt_log_login=$_POST["alt_log_login"];}
if (isset($_GET["alt_log_pass"]))			{$alt_log_pass=$_GET["alt_log_pass"];}
	elseif (isset($_POST["alt_log_pass"]))	{$alt_log_pass=$_POST["alt_log_pass"];}
if (isset($_GET["tables_use_alt_log_db"]))			{$tables_use_alt_log_db=$_GET["tables_use_alt_log_db"];}
	elseif (isset($_POST["tables_use_alt_log_db"]))	{$tables_use_alt_log_db=$_POST["tables_use_alt_log_db"];}
if (isset($_GET["did_agent_log"]))			{$did_agent_log=$_GET["did_agent_log"];}
	elseif (isset($_POST["did_agent_log"]))	{$did_agent_log=$_POST["did_agent_log"];}
if (isset($_GET["survey_recording"]))			{$survey_recording=$_GET["survey_recording"];}
	elseif (isset($_POST["survey_recording"]))	{$survey_recording=$_POST["survey_recording"];}
if (isset($_GET["campaign_cid_areacodes_enabled"]))				{$campaign_cid_areacodes_enabled=$_GET["campaign_cid_areacodes_enabled"];}
	elseif (isset($_POST["campaign_cid_areacodes_enabled"]))	{$campaign_cid_areacodes_enabled=$_POST["campaign_cid_areacodes_enabled"];}
if (isset($_GET["areacode"]))			{$areacode=$_GET["areacode"];}
	elseif (isset($_POST["areacode"]))	{$areacode=$_POST["areacode"];}
if (isset($_GET["cid_description"]))			{$cid_description=$_GET["cid_description"];}
	elseif (isset($_POST["cid_description"]))	{$cid_description=$_POST["cid_description"];}
if (isset($_GET["pllb_grouping"]))			{$pllb_grouping=$_GET["pllb_grouping"];}
	elseif (isset($_POST["pllb_grouping"]))	{$pllb_grouping=$_POST["pllb_grouping"];}
if (isset($_GET["pllb_grouping_limit"]))			{$pllb_grouping_limit=$_GET["pllb_grouping_limit"];}
	elseif (isset($_POST["pllb_grouping_limit"]))	{$pllb_grouping_limit=$_POST["pllb_grouping_limit"];}
if (isset($_GET["description"]))			{$description=$_GET["description"];}
	elseif (isset($_POST["description"]))	{$description=$_POST["description"];}
if (isset($_GET["did_ra_extensions_enabled"]))			{$did_ra_extensions_enabled=$_GET["did_ra_extensions_enabled"];}
	elseif (isset($_POST["did_ra_extensions_enabled"]))	{$did_ra_extensions_enabled=$_POST["did_ra_extensions_enabled"];}
if (isset($_GET["modify_shifts"]))			{$modify_shifts=$_GET["modify_shifts"];}
	elseif (isset($_POST["modify_shifts"]))	{$modify_shifts=$_POST["modify_shifts"];}
if (isset($_GET["modify_phones"]))			{$modify_phones=$_GET["modify_phones"];}
	elseif (isset($_POST["modify_phones"]))	{$modify_phones=$_POST["modify_phones"];}
if (isset($_GET["modify_carriers"]))			{$modify_carriers=$_GET["modify_carriers"];}
	elseif (isset($_POST["modify_carriers"]))	{$modify_carriers=$_POST["modify_carriers"];}
if (isset($_GET["modify_labels"]))			{$modify_labels=$_GET["modify_labels"];}
	elseif (isset($_POST["modify_labels"]))	{$modify_labels=$_POST["modify_labels"];}
if (isset($_GET["modify_statuses"]))			{$modify_statuses=$_GET["modify_statuses"];}
	elseif (isset($_POST["modify_statuses"]))	{$modify_statuses=$_POST["modify_statuses"];}
if (isset($_GET["modify_voicemail"]))			{$modify_voicemail=$_GET["modify_voicemail"];}
	elseif (isset($_POST["modify_voicemail"]))	{$modify_voicemail=$_POST["modify_voicemail"];}
if (isset($_GET["modify_audiostore"]))			{$modify_audiostore=$_GET["modify_audiostore"];}
	elseif (isset($_POST["modify_audiostore"]))	{$modify_audiostore=$_POST["modify_audiostore"];}
if (isset($_GET["modify_moh"]))				{$modify_moh=$_GET["modify_moh"];}
	elseif (isset($_POST["modify_moh"]))	{$modify_moh=$_POST["modify_moh"];}
if (isset($_GET["modify_tts"]))				{$modify_tts=$_GET["modify_tts"];}
	elseif (isset($_POST["modify_tts"]))	{$modify_tts=$_POST["modify_tts"];}
if (isset($_GET["action_xfer_cid"]))			{$action_xfer_cid=$_GET["action_xfer_cid"];}
	elseif (isset($_POST["action_xfer_cid"]))	{$action_xfer_cid=$_POST["action_xfer_cid"];}
if (isset($_GET["drop_callmenu"]))			{$drop_callmenu=$_GET["drop_callmenu"];}
	elseif (isset($_POST["drop_callmenu"]))	{$drop_callmenu=$_POST["drop_callmenu"];}
if (isset($_GET["after_hours_callmenu"]))			{$after_hours_callmenu=$_GET["after_hours_callmenu"];}
	elseif (isset($_POST["after_hours_callmenu"]))	{$after_hours_callmenu=$_POST["after_hours_callmenu"];}
if (isset($_GET["dtmf_field"]))			{$dtmf_field=$_GET["dtmf_field"];}
	elseif (isset($_POST["dtmf_field"]))	{$dtmf_field=$_POST["dtmf_field"];}
if (isset($_GET["call_count_limit"]))			{$call_count_limit=$_GET["call_count_limit"];}
	elseif (isset($_POST["call_count_limit"]))	{$call_count_limit=$_POST["call_count_limit"];}
if (isset($_GET["call_count_target"]))			{$call_count_target=$_GET["call_count_target"];}
	elseif (isset($_POST["call_count_target"]))	{$call_count_target=$_POST["call_count_target"];}
if (isset($_GET["completed"]))			{$completed=$_GET["completed"];}
	elseif (isset($_POST["completed"]))	{$completed=$_POST["completed"];}
if (isset($_GET["expanded_list_stats"]))			{$expanded_list_stats=$_GET["expanded_list_stats"];}
	elseif (isset($_POST["expanded_list_stats"]))	{$expanded_list_stats=$_POST["expanded_list_stats"];}
if (isset($_GET["report_option"]))			{$report_option=$_GET["report_option"];}
	elseif (isset($_POST["report_option"]))	{$report_option=$_POST["report_option"];}
if (isset($_GET["preset_contact_search"]))			{$preset_contact_search=$_GET["preset_contact_search"];}
	elseif (isset($_POST["preset_contact_search"]))	{$preset_contact_search=$_POST["preset_contact_search"];}
if (isset($_GET["contacts_enabled"]))			{$contacts_enabled=$_GET["contacts_enabled"];}
	elseif (isset($_POST["contacts_enabled"]))	{$contacts_enabled=$_POST["contacts_enabled"];}
if (isset($_GET["contact_id"]))				{$contact_id=$_GET["contact_id"];}
	elseif (isset($_POST["contact_id"]))	{$contact_id=$_POST["contact_id"];}
if (isset($_GET["first_name"]))				{$first_name=$_GET["first_name"];}
	elseif (isset($_POST["first_name"]))	{$first_name=$_POST["first_name"];}
if (isset($_GET["last_name"]))				{$last_name=$_GET["last_name"];}
	elseif (isset($_POST["last_name"]))		{$last_name=$_POST["last_name"];}
if (isset($_GET["office_num"]))				{$office_num=$_GET["office_num"];}
	elseif (isset($_POST["office_num"]))	{$office_num=$_POST["office_num"];}
if (isset($_GET["cell_num"]))				{$cell_num=$_GET["cell_num"];}
	elseif (isset($_POST["cell_num"]))		{$cell_num=$_POST["cell_num"];}
if (isset($_GET["other_num1"]))				{$other_num1=$_GET["other_num1"];}
	elseif (isset($_POST["other_num1"]))	{$other_num1=$_POST["other_num1"];}
if (isset($_GET["other_num2"]))				{$other_num2=$_GET["other_num2"];}
	elseif (isset($_POST["other_num2"]))	{$other_num2=$_POST["other_num2"];}
if (isset($_GET["modify_contacts"]))			{$modify_contacts=$_GET["modify_contacts"];}
	elseif (isset($_POST["modify_contacts"]))	{$modify_contacts=$_POST["modify_contacts"];}
if (isset($_GET["bu_name"]))			{$bu_name=$_GET["bu_name"];}
	elseif (isset($_POST["bu_name"]))	{$bu_name=$_POST["bu_name"];}
if (isset($_GET["department"]))				{$department=$_GET["department"];}
	elseif (isset($_POST["department"]))	{$department=$_POST["department"];}
if (isset($_GET["job_title"]))			{$job_title=$_GET["job_title"];}
	elseif (isset($_POST["job_title"]))	{$job_title=$_POST["job_title"];}
if (isset($_GET["location"]))			{$location=$_GET["location"];}
	elseif (isset($_POST["location"]))	{$location=$_POST["location"];}
if (isset($_GET["callback_hours_block"]))			{$callback_hours_block=$_GET["callback_hours_block"];}
	elseif (isset($_POST["callback_hours_block"]))	{$callback_hours_block=$_POST["callback_hours_block"];}
if (isset($_GET["callback_list_calltime"]))				{$callback_list_calltime=$_GET["callback_list_calltime"];}
	elseif (isset($_POST["callback_list_calltime"]))	{$callback_list_calltime=$_POST["callback_list_calltime"];}
if (isset($_GET["modify_same_user_level"]))				{$modify_same_user_level=$_GET["modify_same_user_level"];}
	elseif (isset($_POST["modify_same_user_level"]))	{$modify_same_user_level=$_POST["modify_same_user_level"];}
if (isset($_GET["admin_hide_lead_data"]))			{$admin_hide_lead_data=$_GET["admin_hide_lead_data"];}
	elseif (isset($_POST["admin_hide_lead_data"]))	{$admin_hide_lead_data=$_POST["admin_hide_lead_data"];}
if (isset($_GET["admin_hide_phone_data"]))			{$admin_hide_phone_data=$_GET["admin_hide_phone_data"];}
	elseif (isset($_POST["admin_hide_phone_data"]))	{$admin_hide_phone_data=$_POST["admin_hide_phone_data"];}
if (isset($_GET["admin_viewable_groups"]))			{$admin_viewable_groups=$_GET["admin_viewable_groups"];}
	elseif (isset($_POST["admin_viewable_groups"]))	{$admin_viewable_groups=$_POST["admin_viewable_groups"];}
if (isset($_GET["admin_viewable_call_times"]))			{$admin_viewable_call_times=$_GET["admin_viewable_call_times"];}
	elseif (isset($_POST["admin_viewable_call_times"]))	{$admin_viewable_call_times=$_POST["admin_viewable_call_times"];}
if (isset($_GET["max_calls_method"]))			{$max_calls_method=$_GET["max_calls_method"];}
	elseif (isset($_POST["max_calls_method"]))	{$max_calls_method=$_POST["max_calls_method"];}
if (isset($_GET["max_calls_count"]))			{$max_calls_count=$_GET["max_calls_count"];}
	elseif (isset($_POST["max_calls_count"]))	{$max_calls_count=$_POST["max_calls_count"];}
if (isset($_GET["max_calls_action"]))			{$max_calls_action=$_GET["max_calls_action"];}
	elseif (isset($_POST["max_calls_action"]))	{$max_calls_action=$_POST["max_calls_action"];}
if (isset($_GET["territory_reset"]))			{$territory_reset=$_GET["territory_reset"];}
	elseif (isset($_POST["territory_reset"]))	{$territory_reset=$_POST["territory_reset"];}
if (isset($_GET["hopper_vlc_dup_check"]))			{$hopper_vlc_dup_check=$_GET["hopper_vlc_dup_check"];}
	elseif (isset($_POST["hopper_vlc_dup_check"]))	{$hopper_vlc_dup_check=$_POST["hopper_vlc_dup_check"];}
if (isset($_GET["download_max_system_stats_metric"]))			{$download_max_system_stats_metric=$_GET["download_max_system_stats_metric"];}
	elseif (isset($_POST["download_max_system_stats_metric"]))	{$download_max_system_stats_metric=$_POST["download_max_system_stats_metric"];}
if (isset($_GET["download_max_system_stats_metric_name"]))			{$download_max_system_stats_metric_name=$_GET["download_max_system_stats_metric_name"];}
	elseif (isset($_POST["download_max_system_stats_metric_name"]))	{$download_max_system_stats_metric_name=$_POST["download_max_system_stats_metric_name"];}
if (isset($_GET["inventory_report"]))			{$inventory_report=$_GET["inventory_report"];}
	elseif (isset($_POST["inventory_report"]))	{$inventory_report=$_POST["inventory_report"];}
if (isset($_GET["report_rank"]))			{$report_rank=$_GET["report_rank"];}
	elseif (isset($_POST["report_rank"]))	{$report_rank=$_POST["report_rank"];}
if (isset($_GET["in_group_dial"]))			{$in_group_dial=$_GET["in_group_dial"];}
	elseif (isset($_POST["in_group_dial"]))	{$in_group_dial=$_POST["in_group_dial"];}
if (isset($_GET["in_group_dial_select"]))			{$in_group_dial_select=$_GET["in_group_dial_select"];}
	elseif (isset($_POST["in_group_dial_select"]))	{$in_group_dial_select=$_POST["in_group_dial_select"];}
if (isset($_GET["dial_ingroup_cid"]))			{$dial_ingroup_cid=$_GET["dial_ingroup_cid"];}
	elseif (isset($_POST["dial_ingroup_cid"]))	{$dial_ingroup_cid=$_POST["dial_ingroup_cid"];}
if (isset($_GET["allow_emails"]))			{$allow_emails=$_GET["allow_emails"];}
	elseif (isset($_POST["allow_emails"]))	{$allow_emails=$_POST["allow_emails"];}
if (isset($_GET["allow_chats"]))			{$allow_chats=$_GET["allow_chats"];}
	elseif (isset($_POST["allow_chats"]))	{$allow_chats=$_POST["allow_chats"];}
if (isset($_GET["chat_url"]))			{$chat_url=$_GET["chat_url"];}
	elseif (isset($_POST["chat_url"]))	{$chat_url=$_POST["chat_url"];}
if (isset($_GET["chat_timeout"]))			{$chat_timeout=$_GET["chat_timeout"];}
	elseif (isset($_POST["chat_timeout"]))	{$chat_timeout=$_POST["chat_timeout"];}
if (isset($_GET["manager_chat_id"]))			{$manager_chat_id=$_GET["manager_chat_id"];}
	elseif (isset($_POST["manager_chat_id"]))	{$manager_chat_id=$_POST["manager_chat_id"];}
if (isset($_GET["group_handling"]))			{$group_handling=$_GET["group_handling"];}
	elseif (isset($_POST["group_handling"]))	{$group_handling=$_POST["group_handling"];}
if (isset($_GET["agentcall_email"]))			{$agentcall_email=$_GET["agentcall_email"];}
	elseif (isset($_POST["agentcall_email"]))	{$agentcall_email=$_POST["agentcall_email"];}
if (isset($_GET["agentcall_chat"]))			{$agentcall_chat=$_GET["agentcall_chat"];}
	elseif (isset($_POST["agentcall_chat"]))	{$agentcall_chat=$_POST["agentcall_chat"];}
if (isset($_GET["modify_email_accounts"]))			{$modify_email_accounts=$_GET["modify_email_accounts"];}
	elseif (isset($_POST["modify_email_accounts"]))	{$modify_email_accounts=$_POST["modify_email_accounts"];}
if (isset($_GET["safe_harbor_audio_field"]))			{$safe_harbor_audio_field=$_GET["safe_harbor_audio_field"];}
	elseif (isset($_POST["safe_harbor_audio_field"]))	{$safe_harbor_audio_field=$_POST["safe_harbor_audio_field"];}
if (isset($_GET["query_date"]))			{$query_date=$_GET["query_date"];}
	elseif (isset($_POST["query_date"]))	{$query_date=$_POST["query_date"];}
if (isset($_GET["end_date"]))			{$end_date=$_GET["end_date"];}
	elseif (isset($_POST["end_date"]))	{$end_date=$_POST["end_date"];}
if (isset($_GET["call_menu_qualify_enabled"]))			{$call_menu_qualify_enabled=$_GET["call_menu_qualify_enabled"];}
	elseif (isset($_POST["call_menu_qualify_enabled"]))	{$call_menu_qualify_enabled=$_POST["call_menu_qualify_enabled"];}
if (isset($_GET["qualify_sql"]))			{$qualify_sql=$_GET["qualify_sql"];}
	elseif (isset($_POST["qualify_sql"]))	{$qualify_sql=$_POST["qualify_sql"];}
if (isset($_GET["admin_list_counts"]))			{$admin_list_counts=$_GET["admin_list_counts"];}
	elseif (isset($_POST["admin_list_counts"]))	{$admin_list_counts=$_POST["admin_list_counts"];}
if (isset($_GET["voicemail_greeting"]))				{$voicemail_greeting=$_GET["voicemail_greeting"];}
	elseif (isset($_POST["voicemail_greeting"]))	{$voicemail_greeting=$_POST["voicemail_greeting"];}
if (isset($_GET["old_voicemail_greeting"]))				{$old_voicemail_greeting=$_GET["old_voicemail_greeting"];}
	elseif (isset($_POST["old_voicemail_greeting"]))	{$old_voicemail_greeting=$_POST["old_voicemail_greeting"];}
if (isset($_GET["allow_voicemail_greeting"]))			{$allow_voicemail_greeting=$_GET["allow_voicemail_greeting"];}
	elseif (isset($_POST["allow_voicemail_greeting"]))	{$allow_voicemail_greeting=$_POST["allow_voicemail_greeting"];}
if (isset($_GET["show_vm_on_summary"]))			{$show_vm_on_summary=$_GET["show_vm_on_summary"];}
	elseif (isset($_POST["show_vm_on_summary"]))	{$show_vm_on_summary=$_POST["show_vm_on_summary"];}
if (isset($_GET["pause_after_next_call"]))			{$pause_after_next_call=$_GET["pause_after_next_call"];}
	elseif (isset($_POST["pause_after_next_call"]))	{$pause_after_next_call=$_POST["pause_after_next_call"];}
if (isset($_GET["owner_populate"]))				{$owner_populate=$_GET["owner_populate"];}
	elseif (isset($_POST["owner_populate"]))	{$owner_populate=$_POST["owner_populate"];}
if (isset($_GET["queuemetrics_socket"]))			{$queuemetrics_socket=$_GET["queuemetrics_socket"];}
	elseif (isset($_POST["queuemetrics_socket"]))	{$queuemetrics_socket=$_POST["queuemetrics_socket"];}
if (isset($_GET["queuemetrics_socket_url"]))			{$queuemetrics_socket_url=$_GET["queuemetrics_socket_url"];}
	elseif (isset($_POST["queuemetrics_socket_url"]))	{$queuemetrics_socket_url=$_POST["queuemetrics_socket_url"];}
if (isset($_GET["holiday_id"]))					{$holiday_id=$_GET["holiday_id"];}
	elseif (isset($_POST["holiday_id"]))		{$holiday_id=$_POST["holiday_id"];}
if (isset($_GET["holiday_name"]))				{$holiday_name=$_GET["holiday_name"];}
	elseif (isset($_POST["holiday_name"]))		{$holiday_name=$_POST["holiday_name"];}
if (isset($_GET["holiday_comments"]))			{$holiday_comments=$_GET["holiday_comments"];}
	elseif (isset($_POST["holiday_comments"]))	{$holiday_comments=$_POST["holiday_comments"];}
if (isset($_GET["holiday_date"]))				{$holiday_date=$_GET["holiday_date"];}
	elseif (isset($_POST["holiday_date"]))		{$holiday_date=$_POST["holiday_date"];}
if (isset($_GET["holiday_status"]))				{$holiday_status=$_GET["holiday_status"];}
	elseif (isset($_POST["holiday_status"]))	{$holiday_status=$_POST["holiday_status"];}
if (isset($_GET["holiday_rule"]))				{$holiday_rule=$_GET["holiday_rule"];}
	elseif (isset($_POST["holiday_rule"]))		{$holiday_rule=$_POST["holiday_rule"];}
if (isset($_GET["expiration_date"]))			{$expiration_date=$_GET["expiration_date"];}
	elseif (isset($_POST["expiration_date"]))	{$expiration_date=$_POST["expiration_date"];}
if (isset($_GET["use_other_campaign_dnc"]))				{$use_other_campaign_dnc=$_GET["use_other_campaign_dnc"];}
	elseif (isset($_POST["use_other_campaign_dnc"]))	{$use_other_campaign_dnc=$_POST["use_other_campaign_dnc"];}
if (isset($_GET["enhanced_disconnect_logging"]))			{$enhanced_disconnect_logging=$_GET["enhanced_disconnect_logging"];}
	elseif (isset($_POST["enhanced_disconnect_logging"]))	{$enhanced_disconnect_logging=$_POST["enhanced_disconnect_logging"];}
if (isset($_GET["amd_inbound_group"]))			{$amd_inbound_group=$_GET["amd_inbound_group"];}
	elseif (isset($_POST["amd_inbound_group"]))	{$amd_inbound_group=$_POST["amd_inbound_group"];}
if (isset($_GET["amd_callmenu"]))				{$amd_callmenu=$_GET["amd_callmenu"];}
	elseif (isset($_POST["amd_callmenu"]))		{$amd_callmenu=$_POST["amd_callmenu"];}
if (isset($_GET["level_8_disable_add"]))			{$level_8_disable_add=$_GET["level_8_disable_add"];}
	elseif (isset($_POST["level_8_disable_add"]))	{$level_8_disable_add=$_POST["level_8_disable_add"];}
if (isset($_GET["survey_wait_sec"]))			{$survey_wait_sec=$_GET["survey_wait_sec"];}
	elseif (isset($_POST["survey_wait_sec"]))	{$survey_wait_sec=$_POST["survey_wait_sec"];}
if (isset($_GET["queuemetrics_record_hold"]))			{$queuemetrics_record_hold=$_GET["queuemetrics_record_hold"];}
	elseif (isset($_POST["queuemetrics_record_hold"]))	{$queuemetrics_record_hold=$_POST["queuemetrics_record_hold"];}
if (isset($_GET["country_code_list_stats"]))			{$country_code_list_stats=$_GET["country_code_list_stats"];}
	elseif (isset($_POST["country_code_list_stats"]))	{$country_code_list_stats=$_POST["country_code_list_stats"];}
if (isset($_GET["manual_dial_lead_id"]))			{$manual_dial_lead_id=$_GET["manual_dial_lead_id"];}
	elseif (isset($_POST["manual_dial_lead_id"]))	{$manual_dial_lead_id=$_POST["manual_dial_lead_id"];}
if (isset($_GET["auto_restart_asterisk"]))			{$auto_restart_asterisk=$_GET["auto_restart_asterisk"];}
	elseif (isset($_POST["auto_restart_asterisk"]))	{$auto_restart_asterisk=$_POST["auto_restart_asterisk"];}
if (isset($_GET["asterisk_temp_no_restart"]))			{$asterisk_temp_no_restart=$_GET["asterisk_temp_no_restart"];}
	elseif (isset($_POST["asterisk_temp_no_restart"]))	{$asterisk_temp_no_restart=$_POST["asterisk_temp_no_restart"];}
if (isset($_GET["dead_max"]))					{$dead_max=$_GET["dead_max"];}
	elseif (isset($_POST["dead_max"]))			{$dead_max=$_POST["dead_max"];}
if (isset($_GET["dispo_max"]))					{$dispo_max=$_GET["dispo_max"];}
	elseif (isset($_POST["dispo_max"]))			{$dispo_max=$_POST["dispo_max"];}
if (isset($_GET["pause_max"]))					{$pause_max=$_GET["pause_max"];}
	elseif (isset($_POST["pause_max"]))			{$pause_max=$_POST["pause_max"];}
if (isset($_GET["dead_max_dispo"]))				{$dead_max_dispo=$_GET["dead_max_dispo"];}
	elseif (isset($_POST["dead_max_dispo"]))	{$dead_max_dispo=$_POST["dead_max_dispo"];}
if (isset($_GET["dispo_max_dispo"]))			{$dispo_max_dispo=$_GET["dispo_max_dispo"];}
	elseif (isset($_POST["dispo_max_dispo"]))	{$dispo_max_dispo=$_POST["dispo_max_dispo"];}
if (isset($_GET["voicemail_dump_exten_no_inst"]))			{$voicemail_dump_exten_no_inst=$_GET["voicemail_dump_exten_no_inst"];}
	elseif (isset($_POST["voicemail_dump_exten_no_inst"]))	{$voicemail_dump_exten_no_inst=$_POST["voicemail_dump_exten_no_inst"];}
if (isset($_GET["voicemail_instructions"]))				{$voicemail_instructions=$_GET["voicemail_instructions"];}
	elseif (isset($_POST["voicemail_instructions"]))	{$voicemail_instructions=$_POST["voicemail_instructions"];}
if (isset($_GET["alter_admin_interface_options"]))			{$alter_admin_interface_options=$_GET["alter_admin_interface_options"];}
	elseif (isset($_POST["alter_admin_interface_options"]))	{$alter_admin_interface_options=$_POST["alter_admin_interface_options"];}
if (isset($_GET["filter_dnc_campaign"]))			{$filter_dnc_campaign=$_GET["filter_dnc_campaign"];}
	elseif (isset($_POST["filter_dnc_campaign"]))	{$filter_dnc_campaign=$_POST["filter_dnc_campaign"];}
if (isset($_GET["filter_url_did_redirect"]))			{$filter_url_did_redirect=$_GET["filter_url_did_redirect"];}
	elseif (isset($_POST["filter_url_did_redirect"]))	{$filter_url_did_redirect=$_POST["filter_url_did_redirect"];}
if (isset($_GET["max_inbound_calls"]))			{$max_inbound_calls=$_GET["max_inbound_calls"];}
	elseif (isset($_POST["max_inbound_calls"]))	{$max_inbound_calls=$_POST["max_inbound_calls"];}
if (isset($_GET["manual_dial_search_checkbox"]))			{$manual_dial_search_checkbox=$_GET["manual_dial_search_checkbox"];}
	elseif (isset($_POST["manual_dial_search_checkbox"]))	{$manual_dial_search_checkbox=$_POST["manual_dial_search_checkbox"];}
if (isset($_GET["hide_call_log_info"]))				{$hide_call_log_info=$_GET["hide_call_log_info"];}
	elseif (isset($_POST["hide_call_log_info"]))	{$hide_call_log_info=$_POST["hide_call_log_info"];}
if (isset($_GET["modify_custom_dialplans"]))			{$modify_custom_dialplans=$_GET["modify_custom_dialplans"];}
	elseif (isset($_POST["modify_custom_dialplans"]))	{$modify_custom_dialplans=$_POST["modify_custom_dialplans"];}
if (isset($_GET["queuemetrics_pause_type"]))			{$queuemetrics_pause_type=$_GET["queuemetrics_pause_type"];}
	elseif (isset($_POST["queuemetrics_pause_type"]))	{$queuemetrics_pause_type=$_POST["queuemetrics_pause_type"];}
if (isset($_GET["frozen_server_call_clear"]))			{$frozen_server_call_clear=$_GET["frozen_server_call_clear"];}
	elseif (isset($_POST["frozen_server_call_clear"]))	{$frozen_server_call_clear=$_POST["frozen_server_call_clear"];}
if (isset($_GET["timer_alt_seconds"]))			{$timer_alt_seconds=$_GET["timer_alt_seconds"];}
	elseif (isset($_POST["timer_alt_seconds"]))	{$timer_alt_seconds=$_POST["timer_alt_seconds"];}
if (isset($_GET["wrapup_seconds_override"]))			{$wrapup_seconds_override=$_GET["wrapup_seconds_override"];}
	elseif (isset($_POST["wrapup_seconds_override"]))	{$wrapup_seconds_override=$_POST["wrapup_seconds_override"];}
if (isset($_GET["no_agent_ingroup_redirect"]))			{$no_agent_ingroup_redirect=$_GET["no_agent_ingroup_redirect"];}
	elseif (isset($_POST["no_agent_ingroup_redirect"]))	{$no_agent_ingroup_redirect=$_POST["no_agent_ingroup_redirect"];}
if (isset($_GET["no_agent_ingroup_id"]))			{$no_agent_ingroup_id=$_GET["no_agent_ingroup_id"];}
	elseif (isset($_POST["no_agent_ingroup_id"]))	{$no_agent_ingroup_id=$_POST["no_agent_ingroup_id"];}
if (isset($_GET["no_agent_ingroup_extension"]))			{$no_agent_ingroup_extension=$_GET["no_agent_ingroup_extension"];}
	elseif (isset($_POST["no_agent_ingroup_extension"]))	{$no_agent_ingroup_extension=$_POST["no_agent_ingroup_extension"];}
if (isset($_GET["pre_filter_phone_group_id"]))			{$pre_filter_phone_group_id=$_GET["pre_filter_phone_group_id"];}
	elseif (isset($_POST["pre_filter_phone_group_id"]))	{$pre_filter_phone_group_id=$_POST["pre_filter_phone_group_id"];}
if (isset($_GET["pre_filter_extension"]))			{$pre_filter_extension=$_GET["pre_filter_extension"];}
	elseif (isset($_POST["pre_filter_extension"]))	{$pre_filter_extension=$_POST["pre_filter_extension"];}
if (isset($_GET["wrapup_bypass"]))			{$wrapup_bypass=$_GET["wrapup_bypass"];}
	elseif (isset($_POST["wrapup_bypass"]))	{$wrapup_bypass=$_POST["wrapup_bypass"];}
if (isset($_GET["wrapup_after_hotkey"]))			{$wrapup_after_hotkey=$_GET["wrapup_after_hotkey"];}
	elseif (isset($_POST["wrapup_after_hotkey"]))	{$wrapup_after_hotkey=$_POST["wrapup_after_hotkey"];}
if (isset($_GET["callback_time_24hour"]))			{$callback_time_24hour=$_GET["callback_time_24hour"];}
	elseif (isset($_POST["callback_time_24hour"]))	{$callback_time_24hour=$_POST["callback_time_24hour"];}
if (isset($_GET["callback_active_limit"]))			{$callback_active_limit=$_GET["callback_active_limit"];}
	elseif (isset($_POST["callback_active_limit"]))	{$callback_active_limit=$_POST["callback_active_limit"];}
if (isset($_GET["callback_active_limit_override"]))				{$callback_active_limit_override=$_GET["callback_active_limit_override"];}
	elseif (isset($_POST["callback_active_limit_override"]))	{$callback_active_limit_override=$_POST["callback_active_limit_override"];}
if (isset($_GET["comments_all_tabs"]))			{$comments_all_tabs=$_GET["comments_all_tabs"];}
	elseif (isset($_POST["comments_all_tabs"]))	{$comments_all_tabs=$_POST["comments_all_tabs"];}
if (isset($_GET["comments_dispo_screen"]))			{$comments_dispo_screen=$_GET["comments_dispo_screen"];}
	elseif (isset($_POST["comments_dispo_screen"]))	{$comments_dispo_screen=$_POST["comments_dispo_screen"];}
if (isset($_GET["comments_callback_screen"]))			{$comments_callback_screen=$_GET["comments_callback_screen"];}
	elseif (isset($_POST["comments_callback_screen"]))	{$comments_callback_screen=$_POST["comments_callback_screen"];}
if (isset($_GET["qc_comment_history"]))				{$qc_comment_history=$_GET["qc_comment_history"];}
	elseif (isset($_POST["qc_comment_history"]))	{$qc_comment_history=$_POST["qc_comment_history"];}
if (isset($_GET["show_previous_callback"]))				{$show_previous_callback=$_GET["show_previous_callback"];}
	elseif (isset($_POST["show_previous_callback"]))	{$show_previous_callback=$_POST["show_previous_callback"];}
if (isset($_GET["clear_script"]))				{$clear_script=$_GET["clear_script"];}
	elseif (isset($_POST["clear_script"]))	{$clear_script=$_POST["clear_script"];}
if (isset($_GET["modify_languages"]))			{$modify_languages=$_GET["modify_languages"];}
	elseif (isset($_POST["modify_languages"]))	{$modify_languages=$_POST["modify_languages"];}
if (isset($_GET["enable_languages"]))			{$enable_languages=$_GET["enable_languages"];}
	elseif (isset($_POST["enable_languages"]))	{$enable_languages=$_POST["enable_languages"];}
if (isset($_GET["cpd_unknown_action"]))				{$cpd_unknown_action=$_GET["cpd_unknown_action"];}
	elseif (isset($_POST["cpd_unknown_action"]))	{$cpd_unknown_action=$_POST["cpd_unknown_action"];}
if (isset($_GET["selected_language"]))			{$selected_language=$_GET["selected_language"];}
	elseif (isset($_POST["selected_language"]))	{$selected_language=$_POST["selected_language"];}
if (isset($_GET["user_choose_language"]))			{$user_choose_language=$_GET["user_choose_language"];}
	elseif (isset($_POST["user_choose_language"]))	{$user_choose_language=$_POST["user_choose_language"];}
if (isset($_GET["language_method"]))			{$language_method=$_GET["language_method"];}
	elseif (isset($_POST["language_method"]))	{$language_method=$_POST["language_method"];}
if (isset($_GET["ignore_group_on_search"]))				{$ignore_group_on_search=$_GET["ignore_group_on_search"];}
	elseif (isset($_POST["ignore_group_on_search"]))	{$ignore_group_on_search=$_POST["ignore_group_on_search"];}
if (isset($_GET["manual_dial_search_filter"]))			{$manual_dial_search_filter=$_GET["manual_dial_search_filter"];}
	elseif (isset($_POST["manual_dial_search_filter"]))	{$manual_dial_search_filter=$_POST["manual_dial_search_filter"];}
if (isset($_GET["meetme_enter_login_filename"]))			{$meetme_enter_login_filename=$_GET["meetme_enter_login_filename"];}
	elseif (isset($_POST["meetme_enter_login_filename"]))	{$meetme_enter_login_filename=$_POST["meetme_enter_login_filename"];}
if (isset($_GET["meetme_enter_leave3way_filename"]))			{$meetme_enter_leave3way_filename=$_GET["meetme_enter_leave3way_filename"];}
	elseif (isset($_POST["meetme_enter_leave3way_filename"]))	{$meetme_enter_leave3way_filename=$_POST["meetme_enter_leave3way_filename"];}
if (isset($_GET["enable_did_entry_list_id"]))			{$enable_did_entry_list_id=$_GET["enable_did_entry_list_id"];}
	elseif (isset($_POST["enable_did_entry_list_id"]))	{$enable_did_entry_list_id=$_POST["enable_did_entry_list_id"];}
if (isset($_GET["entry_list_id"]))			{$entry_list_id=$_GET["entry_list_id"];}
	elseif (isset($_POST["entry_list_id"]))	{$entry_list_id=$_POST["entry_list_id"];}
if (isset($_GET["filter_entry_list_id"]))			{$filter_entry_list_id=$_GET["filter_entry_list_id"];}
	elseif (isset($_POST["filter_entry_list_id"]))	{$filter_entry_list_id=$_POST["filter_entry_list_id"];}
if (isset($_GET["allow_chats"]))			{$allow_chats=$_GET["allow_chats"];}
	elseif (isset($_POST["allow_chats"]))	{$allow_chats=$_POST["allow_chats"];}
if (isset($_GET["enable_third_webform"]))			{$enable_third_webform=$_GET["enable_third_webform"];}
	elseif (isset($_POST["enable_third_webform"]))	{$enable_third_webform=$_POST["enable_third_webform"];}
if (isset($_GET["web_form_address_three"]))			{$web_form_address_three=$_GET["web_form_address_three"];}
	elseif (isset($_POST["web_form_address_three"]))	{$web_form_address_three=$_POST["web_form_address_three"];}
if (isset($_GET["enable_international_dncs"]))			{$enable_international_dncs=$_GET["enable_international_dncs"];}
	elseif (isset($_POST["enable_international_dncs"]))	{$enable_international_dncs=$_POST["enable_international_dncs"];}
if (isset($_GET["api_list_restrict"]))			{$api_list_restrict=$_GET["api_list_restrict"];}
	elseif (isset($_POST["api_list_restrict"]))	{$api_list_restrict=$_POST["api_list_restrict"];}
if (isset($_GET["api_allowed_functions"]))			{$api_allowed_functions=$_GET["api_allowed_functions"];}
	elseif (isset($_POST["api_allowed_functions"]))	{$api_allowed_functions=$_POST["api_allowed_functions"];}
if (isset($_GET["manual_dial_override_field"]))			{$manual_dial_override_field=$_GET["manual_dial_override_field"];}
	elseif (isset($_POST["manual_dial_override_field"]))	{$manual_dial_override_field=$_POST["manual_dial_override_field"];}
if (isset($_GET["status_display_ingroup"]))			{$status_display_ingroup=$_GET["status_display_ingroup"];}
	elseif (isset($_POST["status_display_ingroup"]))	{$status_display_ingroup=$_POST["status_display_ingroup"];}
if (isset($_GET["populate_lead_ingroup"]))			{$populate_lead_ingroup=$_GET["populate_lead_ingroup"];}
	elseif (isset($_POST["populate_lead_ingroup"]))	{$populate_lead_ingroup=$_POST["populate_lead_ingroup"];}
if (isset($_GET["script_color"]))			{$script_color=$_GET["script_color"];}
	elseif (isset($_POST["script_color"]))	{$script_color=$_POST["script_color"];}
if (isset($_GET["customer_gone_seconds"]))			{$customer_gone_seconds=$_GET["customer_gone_seconds"];}
	elseif (isset($_POST["customer_gone_seconds"]))	{$customer_gone_seconds=$_POST["customer_gone_seconds"];}
if (isset($_GET["max_queue_ingroup_calls"]))			{$max_queue_ingroup_calls=$_GET["max_queue_ingroup_calls"];}
	elseif (isset($_POST["max_queue_ingroup_calls"]))	{$max_queue_ingroup_calls=$_POST["max_queue_ingroup_calls"];}
if (isset($_GET["max_queue_ingroup_id"]))			{$max_queue_ingroup_id=$_GET["max_queue_ingroup_id"];}
	elseif (isset($_POST["max_queue_ingroup_id"]))	{$max_queue_ingroup_id=$_POST["max_queue_ingroup_id"];}
if (isset($_GET["max_queue_ingroup_extension"]))			{$max_queue_ingroup_extension=$_GET["max_queue_ingroup_extension"];}
	elseif (isset($_POST["max_queue_ingroup_extension"]))	{$max_queue_ingroup_extension=$_POST["max_queue_ingroup_extension"];}
if (isset($_GET["agent_debug_logging"]))			{$agent_debug_logging=$_GET["agent_debug_logging"];}
	elseif (isset($_POST["agent_debug_logging"]))	{$agent_debug_logging=$_POST["agent_debug_logging"];}
if (isset($_GET["agent_display_fields"]))			{$agent_display_fields=$_GET["agent_display_fields"];}
	elseif (isset($_POST["agent_display_fields"]))	{$agent_display_fields=$_POST["agent_display_fields"];}
if (isset($_GET["default_language"]))			{$default_language=$_GET["default_language"];}
	elseif (isset($_POST["default_language"]))	{$default_language=$_POST["default_language"];}
if (isset($_GET["agent_whisper_enabled"]))			{$agent_whisper_enabled=$_GET["agent_whisper_enabled"];}
	elseif (isset($_POST["agent_whisper_enabled"]))	{$agent_whisper_enabled=$_POST["agent_whisper_enabled"];}
if (isset($_GET["drop_lead_reset"]))			{$drop_lead_reset=$_GET["drop_lead_reset"];}
	elseif (isset($_POST["drop_lead_reset"]))	{$drop_lead_reset=$_POST["drop_lead_reset"];}
if (isset($_GET["after_hours_lead_reset"]))				{$after_hours_lead_reset=$_GET["after_hours_lead_reset"];}
	elseif (isset($_POST["after_hours_lead_reset"]))	{$after_hours_lead_reset=$_POST["after_hours_lead_reset"];}
if (isset($_GET["nanq_lead_reset"]))			{$nanq_lead_reset=$_GET["nanq_lead_reset"];}
	elseif (isset($_POST["nanq_lead_reset"]))	{$nanq_lead_reset=$_POST["nanq_lead_reset"];}
if (isset($_GET["wait_time_lead_reset"]))			{$wait_time_lead_reset=$_GET["wait_time_lead_reset"];}
	elseif (isset($_POST["wait_time_lead_reset"]))	{$wait_time_lead_reset=$_POST["wait_time_lead_reset"];}
if (isset($_GET["hold_time_lead_reset"]))			{$hold_time_lead_reset=$_GET["hold_time_lead_reset"];}
	elseif (isset($_POST["hold_time_lead_reset"]))	{$hold_time_lead_reset=$_POST["hold_time_lead_reset"];}
if (isset($_GET["container_id"]))			{$container_id=$_GET["container_id"];}
	elseif (isset($_POST["container_id"]))	{$container_id=$_POST["container_id"];}
if (isset($_GET["container_notes"]))			{$container_notes=$_GET["container_notes"];}
	elseif (isset($_POST["container_notes"]))	{$container_notes=$_POST["container_notes"];}
if (isset($_GET["container_type"]))				{$container_type=$_GET["container_type"];}
	elseif (isset($_POST["container_type"]))	{$container_type=$_POST["container_type"];}
if (isset($_GET["container_entry"]))			{$container_entry=$_GET["container_entry"];}
	elseif (isset($_POST["container_entry"]))	{$container_entry=$_POST["container_entry"];}
if (isset($_GET["admin_cf_show_hidden"]))			{$admin_cf_show_hidden=$_GET["admin_cf_show_hidden"];}
	elseif (isset($_POST["admin_cf_show_hidden"]))	{$admin_cf_show_hidden=$_POST["admin_cf_show_hidden"];}
if (isset($_GET["user_hide_realtime_enabled"]))				{$user_hide_realtime_enabled=$_GET["user_hide_realtime_enabled"];}
	elseif (isset($_POST["user_hide_realtime_enabled"]))	{$user_hide_realtime_enabled=$_POST["user_hide_realtime_enabled"];}
if (isset($_GET["user_hide_realtime"]))				{$user_hide_realtime=$_GET["user_hide_realtime"];}
	elseif (isset($_POST["user_hide_realtime"]))	{$user_hide_realtime=$_POST["user_hide_realtime"];}
if (isset($_GET["did_carrier_description"]))			{$did_carrier_description=$_GET["did_carrier_description"];}
	elseif (isset($_POST["did_carrier_description"]))	{$did_carrier_description=$_POST["did_carrier_description"];}
if (isset($_GET["status_group_id"]))			{$status_group_id=$_GET["status_group_id"];}
	elseif (isset($_POST["status_group_id"]))	{$status_group_id=$_POST["status_group_id"];}
if (isset($_GET["status_group_notes"]))				{$status_group_notes=$_GET["status_group_notes"];}
	elseif (isset($_POST["status_group_notes"]))	{$status_group_notes=$_POST["status_group_notes"];}
if (isset($_GET["min_sec"]))				{$min_sec=$_GET["min_sec"];}
	elseif (isset($_POST["min_sec"]))		{$min_sec=$_POST["min_sec"];}
if (isset($_GET["max_sec"]))				{$max_sec=$_GET["max_sec"];}
	elseif (isset($_POST["max_sec"]))		{$max_sec=$_POST["max_sec"];}
if (isset($_GET["usacan_phone_dialcode_fix"]))				{$usacan_phone_dialcode_fix=$_GET["usacan_phone_dialcode_fix"];}
	elseif (isset($_POST["usacan_phone_dialcode_fix"]))		{$usacan_phone_dialcode_fix=$_POST["usacan_phone_dialcode_fix"];}
if (isset($_GET["am_message_wildcards"]))				{$am_message_wildcards=$_GET["am_message_wildcards"];}
	elseif (isset($_POST["am_message_wildcards"]))		{$am_message_wildcards=$_POST["am_message_wildcards"];}
if (isset($_GET["cache_carrier_stats_realtime"]))				{$cache_carrier_stats_realtime=$_GET["cache_carrier_stats_realtime"];}
	elseif (isset($_POST["cache_carrier_stats_realtime"]))		{$cache_carrier_stats_realtime=$_POST["cache_carrier_stats_realtime"];}
if (isset($_GET["unavail_dialplan_fwd_exten"]))					{$unavail_dialplan_fwd_exten=$_GET["unavail_dialplan_fwd_exten"];}
	elseif (isset($_POST["unavail_dialplan_fwd_exten"]))		{$unavail_dialplan_fwd_exten=$_POST["unavail_dialplan_fwd_exten"];}
if (isset($_GET["unavail_dialplan_fwd_context"]))				{$unavail_dialplan_fwd_context=$_GET["unavail_dialplan_fwd_context"];}
	elseif (isset($_POST["unavail_dialplan_fwd_context"]))		{$unavail_dialplan_fwd_context=$_POST["unavail_dialplan_fwd_context"];}
if (isset($_GET["nva_call_url"]))				{$nva_call_url=$_GET["nva_call_url"];}
	elseif (isset($_POST["nva_call_url"]))		{$nva_call_url=$_POST["nva_call_url"];}
if (isset($_GET["nva_search_method"]))				{$nva_search_method=$_GET["nva_search_method"];}
	elseif (isset($_POST["nva_search_method"]))		{$nva_search_method=$_POST["nva_search_method"];}
if (isset($_GET["nva_error_filename"]))				{$nva_error_filename=$_GET["nva_error_filename"];}
	elseif (isset($_POST["nva_error_filename"]))	{$nva_error_filename=$_POST["nva_error_filename"];}
if (isset($_GET["nva_new_list_id"]))				{$nva_new_list_id=$_GET["nva_new_list_id"];}
	elseif (isset($_POST["nva_new_list_id"]))		{$nva_new_list_id=$_POST["nva_new_list_id"];}
if (isset($_GET["nva_new_phone_code"]))				{$nva_new_phone_code=$_GET["nva_new_phone_code"];}
	elseif (isset($_POST["nva_new_phone_code"]))	{$nva_new_phone_code=$_POST["nva_new_phone_code"];}
if (isset($_GET["nva_new_status"]))					{$nva_new_status=$_GET["nva_new_status"];}
	elseif (isset($_POST["nva_new_status"]))		{$nva_new_status=$_POST["nva_new_status"];}
if (isset($_GET["gather_asterisk_output"]))				{$gather_asterisk_output=$_GET["gather_asterisk_output"];}
	elseif (isset($_POST["gather_asterisk_output"]))	{$gather_asterisk_output=$_POST["gather_asterisk_output"];}
if (isset($_GET["manual_dial_timeout"]))			{$manual_dial_timeout=$_GET["manual_dial_timeout"];}
	elseif (isset($_POST["manual_dial_timeout"]))	{$manual_dial_timeout=$_POST["manual_dial_timeout"];}
if (isset($_GET["agent_allowed_chat_groups"]))			{$agent_allowed_chat_groups=$_GET["agent_allowed_chat_groups"];}
	elseif (isset($_POST["agent_allowed_chat_groups"]))	{$agent_allowed_chat_groups=$_POST["agent_allowed_chat_groups"];}
if (isset($_GET["routing_initiated_recordings"]))			{$routing_initiated_recordings=$_GET["routing_initiated_recordings"];}
	elseif (isset($_POST["routing_initiated_recordings"]))	{$routing_initiated_recordings=$_POST["routing_initiated_recordings"];}
if (isset($_GET["on_hook_cid_number"]))				{$on_hook_cid_number=$_GET["on_hook_cid_number"];}
	elseif (isset($_POST["on_hook_cid_number"]))	{$on_hook_cid_number=$_POST["on_hook_cid_number"];}
if (isset($_GET["manual_dial_hopper_check"]))			{$manual_dial_hopper_check=$_GET["manual_dial_hopper_check"];}
	elseif (isset($_POST["manual_dial_hopper_check"]))	{$manual_dial_hopper_check=$_POST["manual_dial_hopper_check"];}
if (isset($_GET["report_default_format"]))			{$report_default_format=$_GET["report_default_format"];}
	elseif (isset($_POST["report_default_format"]))	{$report_default_format=$_POST["report_default_format"];}
if (isset($_GET["alt_ivr_logging"]))				{$alt_ivr_logging=$_GET["alt_ivr_logging"];}
	elseif (isset($_POST["alt_ivr_logging"]))		{$alt_ivr_logging=$_POST["alt_ivr_logging"];}
if (isset($_GET["question"]))						{$question=$_GET["question"];}
	elseif (isset($_POST["question"]))				{$question=$_POST["question"];}
if (isset($_GET["alt_dtmf_log"]))					{$alt_dtmf_log=$_GET["alt_dtmf_log"];}
	elseif (isset($_POST["alt_dtmf_log"]))			{$alt_dtmf_log=$_POST["alt_dtmf_log"];}
if (isset($_GET["web_socket_url"]))					{$web_socket_url=$_GET["web_socket_url"];}
	elseif (isset($_POST["web_socket_url"]))		{$web_socket_url=$_POST["web_socket_url"];}
if (isset($_GET["webphone_dialbox"]))				{$webphone_dialbox=$_GET["webphone_dialbox"];}
	elseif (isset($_POST["webphone_dialbox"]))		{$webphone_dialbox=$_POST["webphone_dialbox"];}
if (isset($_GET["webphone_mute"]))					{$webphone_mute=$_GET["webphone_mute"];}
	elseif (isset($_POST["webphone_mute"]))			{$webphone_mute=$_POST["webphone_mute"];}
if (isset($_GET["webphone_volume"]))				{$webphone_volume=$_GET["webphone_volume"];}
	elseif (isset($_POST["webphone_volume"]))		{$webphone_volume=$_POST["webphone_volume"];}
if (isset($_GET["webphone_debug"]))					{$webphone_debug=$_GET["webphone_debug"];}
	elseif (isset($_POST["webphone_debug"]))		{$webphone_debug=$_POST["webphone_debug"];}
if (isset($_GET["callback_useronly_move_minutes"]))				{$callback_useronly_move_minutes=$_GET["callback_useronly_move_minutes"];}
	elseif (isset($_POST["callback_useronly_move_minutes"]))	{$callback_useronly_move_minutes=$_POST["callback_useronly_move_minutes"];}
if (isset($_GET["default_phone_code"]))				{$default_phone_code=$_GET["default_phone_code"];}
	elseif (isset($_POST["default_phone_code"]))	{$default_phone_code=$_POST["default_phone_code"];}
if (isset($_GET["admin_row_click"]))			{$admin_row_click=$_GET["admin_row_click"];}
	elseif (isset($_POST["admin_row_click"]))	{$admin_row_click=$_POST["admin_row_click"];}
if (isset($_GET["colors_id"]))			{$colors_id=$_GET["colors_id"];}
	elseif (isset($_POST["colors_id"]))	{$colors_id=$_POST["colors_id"];}
if (isset($_GET["colors_name"]))			{$colors_name=$_GET["colors_name"];}
	elseif (isset($_POST["colors_name"]))	{$colors_name=$_POST["colors_name"];}
if (isset($_GET["menu_background"]))			{$menu_background=$_GET["menu_background"];}
	elseif (isset($_POST["menu_background"]))	{$menu_background=$_POST["menu_background"];}
if (isset($_GET["frame_background"]))			{$frame_background=$_GET["frame_background"];}
	elseif (isset($_POST["frame_background"]))	{$frame_background=$_POST["frame_background"];}
if (isset($_GET["std_row1_background"]))			{$std_row1_background=$_GET["std_row1_background"];}
	elseif (isset($_POST["std_row1_background"]))	{$std_row1_background=$_POST["std_row1_background"];}
if (isset($_GET["std_row2_background"]))			{$std_row2_background=$_GET["std_row2_background"];}
	elseif (isset($_POST["std_row2_background"]))	{$std_row2_background=$_POST["std_row2_background"];}
if (isset($_GET["std_row3_background"]))			{$std_row3_background=$_GET["std_row3_background"];}
	elseif (isset($_POST["std_row3_background"]))	{$std_row3_background=$_POST["std_row3_background"];}
if (isset($_GET["std_row4_background"]))			{$std_row4_background=$_GET["std_row4_background"];}
	elseif (isset($_POST["std_row4_background"]))	{$std_row4_background=$_POST["std_row4_background"];}
if (isset($_GET["std_row5_background"]))			{$std_row5_background=$_GET["std_row5_background"];}
	elseif (isset($_POST["std_row5_background"]))	{$std_row5_background=$_POST["std_row5_background"];}
if (isset($_GET["alt_row1_background"]))			{$alt_row1_background=$_GET["alt_row1_background"];}
	elseif (isset($_POST["alt_row1_background"]))	{$alt_row1_background=$_POST["alt_row1_background"];}
if (isset($_GET["alt_row2_background"]))			{$alt_row2_background=$_GET["alt_row2_background"];}
	elseif (isset($_POST["alt_row2_background"]))	{$alt_row2_background=$_POST["alt_row2_background"];}
if (isset($_GET["alt_row3_background"]))			{$alt_row3_background=$_GET["alt_row3_background"];}
	elseif (isset($_POST["alt_row3_background"]))	{$alt_row3_background=$_POST["alt_row3_background"];}
if (isset($_GET["button_color"]))			{$button_color=$_GET["button_color"];}
	elseif (isset($_POST["button_color"]))	{$button_color=$_POST["button_color"];}
if (isset($_GET["modify_colors"]))			{$modify_colors=$_GET["modify_colors"];}
	elseif (isset($_POST["modify_colors"]))	{$modify_colors=$_POST["modify_colors"];}
if (isset($_GET["admin_screen_colors"]))			{$admin_screen_colors=$_GET["admin_screen_colors"];}
	elseif (isset($_POST["admin_screen_colors"]))	{$admin_screen_colors=$_POST["admin_screen_colors"];}
if (isset($_GET["web_logo"]))			{$web_logo=$_GET["web_logo"];}
	elseif (isset($_POST["web_logo"]))	{$web_logo=$_POST["web_logo"];}
if (isset($_GET["ofcom_uk_drop_calc"]))				{$ofcom_uk_drop_calc=$_GET["ofcom_uk_drop_calc"];}
	elseif (isset($_POST["ofcom_uk_drop_calc"]))	{$ofcom_uk_drop_calc=$_POST["ofcom_uk_drop_calc"];}
if (isset($_GET["answering_machine"]))				{$answering_machine=$_GET["answering_machine"];}
	elseif (isset($_POST["answering_machine"]))		{$answering_machine=$_POST["answering_machine"];}
if (isset($_GET["outbound_alt_cid"]))				{$outbound_alt_cid=$_GET["outbound_alt_cid"];}
	elseif (isset($_POST["outbound_alt_cid"]))		{$outbound_alt_cid=$_POST["outbound_alt_cid"];}
if (isset($_GET["agent_screen_colors"]))			{$agent_screen_colors=$_GET["agent_screen_colors"];}
	elseif (isset($_POST["agent_screen_colors"]))	{$agent_screen_colors=$_POST["agent_screen_colors"];}
if (isset($_GET["script_remove_js"]))			{$script_remove_js=$_GET["script_remove_js"];}
	elseif (isset($_POST["script_remove_js"]))	{$script_remove_js=$_POST["script_remove_js"];}
if (isset($_GET["user_nickname"]))			{$user_nickname=$_GET["user_nickname"];}
	elseif (isset($_POST["user_nickname"]))	{$user_nickname=$_POST["user_nickname"];}
if (isset($_GET["manual_auto_next"]))			{$manual_auto_next=$_GET["manual_auto_next"];}
	elseif (isset($_POST["manual_auto_next"]))	{$manual_auto_next=$_POST["manual_auto_next"];}
if (isset($_GET["manual_auto_show"]))			{$manual_auto_show=$_GET["manual_auto_show"];}
	elseif (isset($_POST["manual_auto_show"]))	{$manual_auto_show=$_POST["manual_auto_show"];}
if (isset($_GET["customer_chat_screen_colors"]))			{$customer_chat_screen_colors=$_GET["customer_chat_screen_colors"];}
	elseif (isset($_POST["customer_chat_screen_colors"]))	{$customer_chat_screen_colors=$_POST["customer_chat_screen_colors"];}
if (isset($_GET["customer_chat_survey_link"]))			{$customer_chat_survey_link=$_GET["customer_chat_survey_link"];}
	elseif (isset($_POST["customer_chat_survey_link"]))	{$customer_chat_survey_link=$_POST["customer_chat_survey_link"];}
if (isset($_GET["customer_chat_survey_text"]))			{$customer_chat_survey_text=$_GET["customer_chat_survey_text"];}
	elseif (isset($_POST["customer_chat_survey_text"]))	{$customer_chat_survey_text=$_POST["customer_chat_survey_text"];}
if (isset($_GET["user_new_lead_limit"]))			{$user_new_lead_limit=$_GET["user_new_lead_limit"];}
	elseif (isset($_POST["user_new_lead_limit"]))	{$user_new_lead_limit=$_POST["user_new_lead_limit"];}
if (isset($_GET["allow_required_fields"]))			{$allow_required_fields=$_GET["allow_required_fields"];}
	elseif (isset($_POST["allow_required_fields"]))	{$allow_required_fields=$_POST["allow_required_fields"];}
if (isset($_GET["agent_xfer_park_3way"]))			{$agent_xfer_park_3way=$_GET["agent_xfer_park_3way"];}
	elseif (isset($_POST["agent_xfer_park_3way"]))	{$agent_xfer_park_3way=$_POST["agent_xfer_park_3way"];}
if (isset($_GET["agent_soundboards"]))			{$agent_soundboards=$_GET["agent_soundboards"];}
	elseif (isset($_POST["agent_soundboards"]))	{$agent_soundboards=$_POST["agent_soundboards"];}
if (isset($_GET["web_loader_phone_length"]))			{$web_loader_phone_length=$_GET["web_loader_phone_length"];}
	elseif (isset($_POST["web_loader_phone_length"]))	{$web_loader_phone_length=$_POST["web_loader_phone_length"];}
if (isset($_GET["agent_script"]))				{$agent_script=$_GET["agent_script"];}
	elseif (isset($_POST["agent_script"]))		{$agent_script=$_POST["agent_script"];}
if (isset($_GET["agent_chat_screen_colors"]))			{$agent_chat_screen_colors=$_GET["agent_chat_screen_colors"];}
	elseif (isset($_POST["agent_chat_screen_colors"]))	{$agent_chat_screen_colors=$_POST["agent_chat_screen_colors"];}
if (isset($_GET["conf_qualify"]))			{$conf_qualify=$_GET["conf_qualify"];}
	elseif (isset($_POST["conf_qualify"]))	{$conf_qualify=$_POST["conf_qualify"];}
if (isset($_GET["populate_lead_province"]))				{$populate_lead_province=$_GET["populate_lead_province"];}
	elseif (isset($_POST["populate_lead_province"]))	{$populate_lead_province=$_POST["populate_lead_province"];}
if (isset($_GET["api_only_user"]))				{$api_only_user=$_GET["api_only_user"];}
	elseif (isset($_POST["api_only_user"]))		{$api_only_user=$_POST["api_only_user"];}
if (isset($_GET["dead_to_dispo"]))				{$dead_to_dispo=$_GET["dead_to_dispo"];}
	elseif (isset($_POST["dead_to_dispo"]))		{$dead_to_dispo=$_POST["dead_to_dispo"];}
if (isset($_GET["areacode_filter"]))				{$areacode_filter=$_GET["areacode_filter"];}
	elseif (isset($_POST["areacode_filter"]))		{$areacode_filter=$_POST["areacode_filter"];}
if (isset($_GET["areacode_filter_seconds"]))			{$areacode_filter_seconds=$_GET["areacode_filter_seconds"];}
	elseif (isset($_POST["areacode_filter_seconds"]))	{$areacode_filter_seconds=$_POST["areacode_filter_seconds"];}
if (isset($_GET["areacode_filter_action"]))				{$areacode_filter_action=$_GET["areacode_filter_action"];}
	elseif (isset($_POST["areacode_filter_action"]))	{$areacode_filter_action=$_POST["areacode_filter_action"];}
if (isset($_GET["areacode_list"]))			{$areacode_list=$_GET["areacode_list"];}
	elseif (isset($_POST["areacode_list"]))	{$areacode_list=$_POST["areacode_list"];}
if (isset($_GET["areacode_filter_action_value"]))			{$areacode_filter_action_value=$_GET["areacode_filter_action_value"];}
	elseif (isset($_POST["areacode_filter_action_value"]))	{$areacode_filter_action_value=$_POST["areacode_filter_action_value"];}
if (isset($_GET["enable_auto_reports"]))			{$enable_auto_reports=$_GET["enable_auto_reports"];}
	elseif (isset($_POST["enable_auto_reports"]))	{$enable_auto_reports=$_POST["enable_auto_reports"];}
if (isset($_GET["modify_auto_reports"]))			{$modify_auto_reports=$_GET["modify_auto_reports"];}
	elseif (isset($_POST["modify_auto_reports"]))	{$modify_auto_reports=$_POST["modify_auto_reports"];}
if (isset($_GET["report_id"]))			{$report_id=$_GET["report_id"];}
	elseif (isset($_POST["report_id"]))	{$report_id=$_POST["report_id"];}
if (isset($_GET["report_name"]))			{$report_name=$_GET["report_name"];}
	elseif (isset($_POST["report_name"]))	{$report_name=$_POST["report_name"];}
if (isset($_GET["report_server"]))			{$report_server=$_GET["report_server"];}
	elseif (isset($_POST["report_server"]))	{$report_server=$_POST["report_server"];}
if (isset($_GET["report_times"]))			{$report_times=$_GET["report_times"];}
	elseif (isset($_POST["report_times"]))	{$report_times=$_POST["report_times"];}
if (isset($_GET["report_weekdays"]))			{$report_weekdays=$_GET["report_weekdays"];}
	elseif (isset($_POST["report_weekdays"]))	{$report_weekdays=$_POST["report_weekdays"];}
if (isset($_GET["report_monthdays"]))			{$report_monthdays=$_GET["report_monthdays"];}
	elseif (isset($_POST["report_monthdays"]))	{$report_monthdays=$_POST["report_monthdays"];}
if (isset($_GET["report_destination"]))			{$report_destination=$_GET["report_destination"];}
	elseif (isset($_POST["report_destination"]))	{$report_destination=$_POST["report_destination"];}
if (isset($_GET["email_from"]))			{$email_from=$_GET["email_from"];}
	elseif (isset($_POST["email_from"]))	{$email_from=$_POST["email_from"];}
if (isset($_GET["email_to"]))			{$email_to=$_GET["email_to"];}
	elseif (isset($_POST["email_to"]))	{$email_to=$_POST["email_to"];}
if (isset($_GET["email_subject"]))			{$email_subject=$_GET["email_subject"];}
	elseif (isset($_POST["email_subject"]))	{$email_subject=$_POST["email_subject"];}
if (isset($_GET["ftp_server"]))				{$ftp_server=$_GET["ftp_server"];}
	elseif (isset($_POST["ftp_server"]))	{$ftp_server=$_POST["ftp_server"];}
if (isset($_GET["ftp_user"]))			{$ftp_user=$_GET["ftp_user"];}
	elseif (isset($_POST["ftp_user"]))	{$ftp_user=$_POST["ftp_user"];}
if (isset($_GET["ftp_pass"]))			{$ftp_pass=$_GET["ftp_pass"];}
	elseif (isset($_POST["ftp_pass"]))	{$ftp_pass=$_POST["ftp_pass"];}
if (isset($_GET["ftp_directory"]))			{$ftp_directory=$_GET["ftp_directory"];}
	elseif (isset($_POST["ftp_directory"]))	{$ftp_directory=$_POST["ftp_directory"];}
if (isset($_GET["report_url"]))				{$report_url=$_GET["report_url"];}
	elseif (isset($_POST["report_url"]))	{$report_url=$_POST["report_url"];}
if (isset($_GET["run_now_trigger"]))			{$run_now_trigger=$_GET["run_now_trigger"];}
	elseif (isset($_POST["run_now_trigger"]))	{$run_now_trigger=$_POST["run_now_trigger"];}
if (isset($_GET["agent_xfer_validation"]))			{$agent_xfer_validation=$_GET["agent_xfer_validation"];}
	elseif (isset($_POST["agent_xfer_validation"]))	{$agent_xfer_validation=$_POST["agent_xfer_validation"];}
if (isset($_GET["populate_state_areacode"]))			{$populate_state_areacode=$_GET["populate_state_areacode"];}
	elseif (isset($_POST["populate_state_areacode"]))	{$populate_state_areacode=$_POST["populate_state_areacode"];}
if (isset($_GET["enable_pause_code_limits"]))			{$enable_pause_code_limits=$_GET["enable_pause_code_limits"];}
	elseif (isset($_POST["enable_pause_code_limits"]))	{$enable_pause_code_limits=$_POST["enable_pause_code_limits"];}
if (isset($_GET["time_limit"]))				{$time_limit=$_GET["time_limit"];}
	elseif (isset($_POST["time_limit"]))	{$time_limit=$_POST["time_limit"];}
if (isset($_GET["enable_drop_lists"]))			{$enable_drop_lists=$_GET["enable_drop_lists"];}
	elseif (isset($_POST["enable_drop_lists"]))	{$enable_drop_lists=$_POST["enable_drop_lists"];}
if (isset($_GET["dl_id"]))			{$dl_id=$_GET["dl_id"];}
	elseif (isset($_POST["dl_id"]))	{$dl_id=$_POST["dl_id"];}
if (isset($_GET["dl_name"]))			{$dl_name=$_GET["dl_name"];}
	elseif (isset($_POST["dl_name"]))	{$dl_name=$_POST["dl_name"];}
if (isset($_GET["last_run"]))			{$last_run=$_GET["last_run"];}
	elseif (isset($_POST["last_run"]))	{$last_run=$_POST["last_run"];}
if (isset($_GET["dl_server"]))			{$dl_server=$_GET["dl_server"];}
	elseif (isset($_POST["dl_server"]))	{$dl_server=$_POST["dl_server"];}
if (isset($_GET["dl_times"]))			{$dl_times=$_GET["dl_times"];}
	elseif (isset($_POST["dl_times"]))	{$dl_times=$_POST["dl_times"];}
if (isset($_GET["dl_weekdays"]))			{$dl_weekdays=$_GET["dl_weekdays"];}
	elseif (isset($_POST["dl_weekdays"]))	{$dl_weekdays=$_POST["dl_weekdays"];}
if (isset($_GET["dl_monthdays"]))			{$dl_monthdays=$_GET["dl_monthdays"];}
	elseif (isset($_POST["dl_monthdays"]))	{$dl_monthdays=$_POST["dl_monthdays"];}
if (isset($_GET["drop_status"]))			{$drop_status=$_GET["drop_status"];}
	elseif (isset($_POST["drop_status"]))	{$drop_status=$_POST["drop_status"];}
if (isset($_GET["duplicate_check"]))			{$duplicate_check=$_GET["duplicate_check"];}
	elseif (isset($_POST["duplicate_check"]))	{$duplicate_check=$_POST["duplicate_check"];}
if (isset($_GET["allow_ip_lists"]))				{$allow_ip_lists=$_GET["allow_ip_lists"];}
	elseif (isset($_POST["allow_ip_lists"]))	{$allow_ip_lists=$_POST["allow_ip_lists"];}
if (isset($_GET["system_ip_blacklist"]))			{$system_ip_blacklist=$_GET["system_ip_blacklist"];}
	elseif (isset($_POST["system_ip_blacklist"]))	{$system_ip_blacklist=$_POST["system_ip_blacklist"];}
if (isset($_GET["modify_ip_lists"]))			{$modify_ip_lists=$_GET["modify_ip_lists"];}
	elseif (isset($_POST["modify_ip_lists"]))	{$modify_ip_lists=$_POST["modify_ip_lists"];}
if (isset($_GET["ignore_ip_list"]))			{$ignore_ip_list=$_GET["ignore_ip_list"];}
	elseif (isset($_POST["ignore_ip_list"]))	{$ignore_ip_list=$_POST["ignore_ip_list"];}
if (isset($_GET["admin_ip_list"]))			{$admin_ip_list=$_GET["admin_ip_list"];}
	elseif (isset($_POST["admin_ip_list"]))	{$admin_ip_list=$_POST["admin_ip_list"];}
if (isset($_GET["agent_ip_list"]))			{$agent_ip_list=$_GET["agent_ip_list"];}
	elseif (isset($_POST["agent_ip_list"]))	{$agent_ip_list=$_POST["agent_ip_list"];}
if (isset($_GET["api_ip_list"]))			{$api_ip_list=$_GET["api_ip_list"];}
	elseif (isset($_POST["api_ip_list"]))	{$api_ip_list=$_POST["api_ip_list"];}
if (isset($_GET["ip_list_id"]))			{$ip_list_id=$_GET["ip_list_id"];}
	elseif (isset($_POST["ip_list_id"]))	{$ip_list_id=$_POST["ip_list_id"];}
if (isset($_GET["ip_list_name"]))			{$ip_list_name=$_GET["ip_list_name"];}
	elseif (isset($_POST["ip_list_name"]))	{$ip_list_name=$_POST["ip_list_name"];}
if (isset($_GET["ip_address"]))				{$ip_address=$_GET["ip_address"];}
	elseif (isset($_POST["ip_address"]))	{$ip_address=$_POST["ip_address"];}
if (isset($_GET["dl_minutes"]))				{$dl_minutes=$_GET["dl_minutes"];}
	elseif (isset($_POST["dl_minutes"]))	{$dl_minutes=$_POST["dl_minutes"];}
if (isset($_GET["ready_max_logout"]))			{$ready_max_logout=$_GET["ready_max_logout"];}
	elseif (isset($_POST["ready_max_logout"]))	{$ready_max_logout=$_POST["ready_max_logout"];}
if (isset($_GET["routing_prefix"]))				{$routing_prefix=$_GET["routing_prefix"];}
	elseif (isset($_POST["routing_prefix"]))	{$routing_prefix=$_POST["routing_prefix"];}
if (isset($_GET["callback_display_days"]))			{$callback_display_days=$_GET["callback_display_days"];}
	elseif (isset($_POST["callback_display_days"]))	{$callback_display_days=$_POST["callback_display_days"];}
if (isset($_GET["three_way_record_stop"]))			{$three_way_record_stop=$_GET["three_way_record_stop"];}
	elseif (isset($_POST["three_way_record_stop"]))	{$three_way_record_stop=$_POST["three_way_record_stop"];}
if (isset($_GET["hangup_xfer_record_start"]))			{$hangup_xfer_record_start=$_GET["hangup_xfer_record_start"];}
	elseif (isset($_POST["hangup_xfer_record_start"]))	{$hangup_xfer_record_start=$_POST["hangup_xfer_record_start"];}
if (isset($_GET["agent_push_events"]))			{$agent_push_events=$_GET["agent_push_events"];}
	elseif (isset($_POST["agent_push_events"]))	{$agent_push_events=$_POST["agent_push_events"];}
if (isset($_GET["agent_push_url"]))				{$agent_push_url=$_GET["agent_push_url"];}
	elseif (isset($_POST["agent_push_url"]))	{$agent_push_url=$_POST["agent_push_url"];}
if (isset($_GET["hide_inactive_lists"]))			{$hide_inactive_lists=$_GET["hide_inactive_lists"];}
	elseif (isset($_POST["hide_inactive_lists"]))	{$hide_inactive_lists=$_POST["hide_inactive_lists"];}
if (isset($_GET["inbound_survey"]))			{$inbound_survey=$_GET["inbound_survey"];}
	elseif (isset($_POST["inbound_survey"]))	{$inbound_survey=$_POST["inbound_survey"];}
if (isset($_GET["inbound_survey_filename"]))			{$inbound_survey_filename=$_GET["inbound_survey_filename"];}
	elseif (isset($_POST["inbound_survey_filename"]))	{$inbound_survey_filename=$_POST["inbound_survey_filename"];}
if (isset($_GET["inbound_survey_accept_digit"]))			{$inbound_survey_accept_digit=$_GET["inbound_survey_accept_digit"];}
	elseif (isset($_POST["inbound_survey_accept_digit"]))	{$inbound_survey_accept_digit=$_POST["inbound_survey_accept_digit"];}
if (isset($_GET["inbound_survey_question_filename"]))			{$inbound_survey_question_filename=$_GET["inbound_survey_question_filename"];}
	elseif (isset($_POST["inbound_survey_question_filename"]))	{$inbound_survey_question_filename=$_POST["inbound_survey_question_filename"];}
if (isset($_GET["inbound_survey_callmenu"]))			{$inbound_survey_callmenu=$_GET["inbound_survey_callmenu"];}
	elseif (isset($_POST["inbound_survey_callmenu"]))	{$inbound_survey_callmenu=$_POST["inbound_survey_callmenu"];}
if (isset($_GET["allow_manage_active_lists"]))			{$allow_manage_active_lists=$_GET["allow_manage_active_lists"];}
	elseif (isset($_POST["allow_manage_active_lists"]))	{$allow_manage_active_lists=$_POST["allow_manage_active_lists"];}
if (isset($_GET["filename_override"]))			{$filename_override=$_GET["filename_override"];}
	elseif (isset($_POST["filename_override"]))	{$filename_override=$_POST["filename_override"];}
if (isset($_GET["expired_lists_inactive"]))				{$expired_lists_inactive=$_GET["expired_lists_inactive"];}
	elseif (isset($_POST["expired_lists_inactive"]))	{$expired_lists_inactive=$_POST["expired_lists_inactive"];}
if (isset($_GET["enable_gdpr_download_deletion"]))				{$enable_gdpr_download_deletion=$_GET["enable_gdpr_download_deletion"];}
	elseif (isset($_POST["enable_gdpr_download_deletion"]))	{$enable_gdpr_download_deletion=$_POST["enable_gdpr_download_deletion"];}
if (isset($_GET["did_system_filter"]))			{$did_system_filter=$_GET["did_system_filter"];}
	elseif (isset($_POST["did_system_filter"]))	{$did_system_filter=$_POST["did_system_filter"];}
if (isset($_GET["webphone_layout"]))			{$webphone_layout=$_GET["webphone_layout"];}
	elseif (isset($_POST["webphone_layout"]))	{$webphone_layout=$_POST["webphone_layout"];}
if (isset($_GET["max_inbound_calls_outcome"]))			{$max_inbound_calls_outcome=$_GET["max_inbound_calls_outcome"];}
	elseif (isset($_POST["max_inbound_calls_outcome"]))	{$max_inbound_calls_outcome=$_POST["max_inbound_calls_outcome"];}
if (isset($_GET["manual_auto_next_options"]))			{$manual_auto_next_options=$_GET["manual_auto_next_options"];}
	elseif (isset($_POST["manual_auto_next_options"]))	{$manual_auto_next_options=$_POST["manual_auto_next_options"];}
if (isset($_GET["agent_screen_time_display"]))			{$agent_screen_time_display=$_GET["agent_screen_time_display"];}
	elseif (isset($_POST["agent_screen_time_display"]))	{$agent_screen_time_display=$_POST["agent_screen_time_display"];}
if (isset($_GET["next_dial_my_callbacks"]))				{$next_dial_my_callbacks=$_GET["next_dial_my_callbacks"];}
	elseif (isset($_POST["next_dial_my_callbacks"]))	{$next_dial_my_callbacks=$_POST["next_dial_my_callbacks"];}
if (isset($_GET["anyone_callback_inactive_lists"]))				{$anyone_callback_inactive_lists=$_GET["anyone_callback_inactive_lists"];}
	elseif (isset($_POST["anyone_callback_inactive_lists"]))	{$anyone_callback_inactive_lists=$_POST["anyone_callback_inactive_lists"];}
if (isset($_GET["inbound_no_agents_no_dial_container"]))			{$inbound_no_agents_no_dial_container=$_GET["inbound_no_agents_no_dial_container"];}
	elseif (isset($_POST["inbound_no_agents_no_dial_container"]))	{$inbound_no_agents_no_dial_container=$_POST["inbound_no_agents_no_dial_container"];}
if (isset($_GET["inbound_no_agents_no_dial_threshold"]))			{$inbound_no_agents_no_dial_threshold=$_GET["inbound_no_agents_no_dial_threshold"];}
	elseif (isset($_POST["inbound_no_agents_no_dial_threshold"]))	{$inbound_no_agents_no_dial_threshold=$_POST["inbound_no_agents_no_dial_threshold"];}
if (isset($_GET["icbq_expiration_hours"]))			{$icbq_expiration_hours=$_GET["icbq_expiration_hours"];}
	elseif (isset($_POST["icbq_expiration_hours"]))	{$icbq_expiration_hours=$_POST["icbq_expiration_hours"];}
if (isset($_GET["closing_time_action"]))			{$closing_time_action=$_GET["closing_time_action"];}
	elseif (isset($_POST["closing_time_action"]))	{$closing_time_action=$_POST["closing_time_action"];}
if (isset($_GET["closing_time_now_trigger"]))			{$closing_time_now_trigger=$_GET["closing_time_now_trigger"];}
	elseif (isset($_POST["closing_time_now_trigger"]))	{$closing_time_now_trigger=$_POST["closing_time_now_trigger"];}
if (isset($_GET["closing_time_filename"]))			{$closing_time_filename=$_GET["closing_time_filename"];}
	elseif (isset($_POST["closing_time_filename"]))	{$closing_time_filename=$_POST["closing_time_filename"];}
if (isset($_GET["closing_time_end_filename"]))			{$closing_time_end_filename=$_GET["closing_time_end_filename"];}
	elseif (isset($_POST["closing_time_end_filename"]))	{$closing_time_end_filename=$_POST["closing_time_end_filename"];}
if (isset($_GET["closing_time_lead_reset"]))			{$closing_time_lead_reset=$_GET["closing_time_lead_reset"];}
	elseif (isset($_POST["closing_time_lead_reset"]))	{$closing_time_lead_reset=$_POST["closing_time_lead_reset"];}
if (isset($_GET["closing_time_option_exten"]))			{$closing_time_option_exten=$_GET["closing_time_option_exten"];}
	elseif (isset($_POST["closing_time_option_exten"]))	{$closing_time_option_exten=$_POST["closing_time_option_exten"];}
if (isset($_GET["closing_time_option_callmenu"]))			{$closing_time_option_callmenu=$_GET["closing_time_option_callmenu"];}
	elseif (isset($_POST["closing_time_option_callmenu"]))	{$closing_time_option_callmenu=$_POST["closing_time_option_callmenu"];}
if (isset($_GET["closing_time_option_voicemail"]))			{$closing_time_option_voicemail=$_GET["closing_time_option_voicemail"];}
	elseif (isset($_POST["closing_time_option_voicemail"]))	{$closing_time_option_voicemail=$_POST["closing_time_option_voicemail"];}
if (isset($_GET["closing_time_option_xfer_group"]))				{$closing_time_option_xfer_group=$_GET["closing_time_option_xfer_group"];}
	elseif (isset($_POST["closing_time_option_xfer_group"]))	{$closing_time_option_xfer_group=$_POST["closing_time_option_xfer_group"];}
if (isset($_GET["closing_time_option_callback_list_id"]))			{$closing_time_option_callback_list_id=$_GET["closing_time_option_callback_list_id"];}
	elseif (isset($_POST["closing_time_option_callback_list_id"]))	{$closing_time_option_callback_list_id=$_POST["closing_time_option_callback_list_id"];}
if (isset($_GET["icbq_call_time_id"]))			{$icbq_call_time_id=$_GET["icbq_call_time_id"];}
	elseif (isset($_POST["icbq_call_time_id"]))	{$icbq_call_time_id=$_POST["icbq_call_time_id"];}
if (isset($_GET["add_lead_timezone"]))			{$add_lead_timezone=$_GET["add_lead_timezone"];}
	elseif (isset($_POST["add_lead_timezone"]))	{$add_lead_timezone=$_POST["add_lead_timezone"];}
if (isset($_GET["icbq_dial_filter"]))			{$icbq_dial_filter=$_GET["icbq_dial_filter"];}
	elseif (isset($_POST["icbq_dial_filter"]))	{$icbq_dial_filter=$_POST["icbq_dial_filter"];}
if (isset($_GET["cid_group_id"]))			{$cid_group_id=$_GET["cid_group_id"];}
	elseif (isset($_POST["cid_group_id"]))	{$cid_group_id=$_POST["cid_group_id"];}
if (isset($_GET["cid_group_notes"]))			{$cid_group_notes=$_GET["cid_group_notes"];}
	elseif (isset($_POST["cid_group_notes"]))	{$cid_group_notes=$_POST["cid_group_notes"];}
if (isset($_GET["cid_group_type"]))				{$cid_group_type=$_GET["cid_group_type"];}
	elseif (isset($_POST["cid_group_type"]))	{$cid_group_type=$_POST["cid_group_type"];}
if (isset($_GET["pause_max_dispo"]))			{$pause_max_dispo=$_GET["pause_max_dispo"];}
	elseif (isset($_POST["pause_max_dispo"]))	{$pause_max_dispo=$_POST["pause_max_dispo"];}
if (isset($_GET["script_top_dispo"]))			{$script_top_dispo=$_GET["script_top_dispo"];}
	elseif (isset($_POST["script_top_dispo"]))	{$script_top_dispo=$_POST["script_top_dispo"];}
if (isset($_GET["source_id_display"]))			{$source_id_display=$_GET["source_id_display"];}
	elseif (isset($_POST["source_id_display"]))	{$source_id_display=$_POST["source_id_display"];}
if (isset($_GET["require_mgr_approval"]))			{$require_mgr_approval=$_GET["require_mgr_approval"];}
	elseif (isset($_POST["require_mgr_approval"]))	{$require_mgr_approval=$_POST["require_mgr_approval"];}
if (isset($_GET["pause_code_approval"]))			{$pause_code_approval=$_GET["pause_code_approval"];}
	elseif (isset($_POST["pause_code_approval"]))	{$pause_code_approval=$_POST["pause_code_approval"];}
if (isset($_GET["populate_lead_source"]))			{$populate_lead_source=$_GET["populate_lead_source"];}
	elseif (isset($_POST["populate_lead_source"]))	{$populate_lead_source=$_POST["populate_lead_source"];}
if (isset($_GET["populate_lead_vendor"]))			{$populate_lead_vendor=$_GET["populate_lead_vendor"];}
	elseif (isset($_POST["populate_lead_vendor"]))	{$populate_lead_vendor=$_POST["populate_lead_vendor"];}
if (isset($_GET["max_hopper_calls"]))			{$max_hopper_calls=$_GET["max_hopper_calls"];}
	elseif (isset($_POST["max_hopper_calls"]))	{$max_hopper_calls=$_POST["max_hopper_calls"];}
if (isset($_GET["max_hopper_calls_hour"]))			{$max_hopper_calls_hour=$_GET["max_hopper_calls_hour"];}
	elseif (isset($_POST["max_hopper_calls_hour"]))	{$max_hopper_calls_hour=$_POST["max_hopper_calls_hour"];}
if (isset($_GET["waiting_call_url_on"]))			{$waiting_call_url_on=$_GET["waiting_call_url_on"];}
	elseif (isset($_POST["waiting_call_url_on"]))	{$waiting_call_url_on=$_POST["waiting_call_url_on"];}
if (isset($_GET["waiting_call_url_off"]))			{$waiting_call_url_off=$_GET["waiting_call_url_off"];}
	elseif (isset($_POST["waiting_call_url_off"]))	{$waiting_call_url_off=$_POST["waiting_call_url_off"];}
if (isset($_GET["enter_ingroup_url"]))			{$enter_ingroup_url=$_GET["enter_ingroup_url"];}
	elseif (isset($_POST["enter_ingroup_url"]))	{$enter_ingroup_url=$_POST["enter_ingroup_url"];}
if (isset($_GET["dead_trigger_seconds"]))			{$dead_trigger_seconds=$_GET["dead_trigger_seconds"];}
	elseif (isset($_POST["dead_trigger_seconds"]))	{$dead_trigger_seconds=$_POST["dead_trigger_seconds"];}
if (isset($_GET["dead_trigger_action"]))			{$dead_trigger_action=$_GET["dead_trigger_action"];}
	elseif (isset($_POST["dead_trigger_action"]))	{$dead_trigger_action=$_POST["dead_trigger_action"];}
if (isset($_GET["dead_trigger_repeat"]))			{$dead_trigger_repeat=$_GET["dead_trigger_repeat"];}
	elseif (isset($_POST["dead_trigger_repeat"]))	{$dead_trigger_repeat=$_POST["dead_trigger_repeat"];}
if (isset($_GET["dead_trigger_filename"]))			{$dead_trigger_filename=$_GET["dead_trigger_filename"];}
	elseif (isset($_POST["dead_trigger_filename"]))	{$dead_trigger_filename=$_POST["dead_trigger_filename"];}
if (isset($_GET["dead_trigger_url"]))			{$dead_trigger_url=$_GET["dead_trigger_url"];}
	elseif (isset($_POST["dead_trigger_url"]))	{$dead_trigger_url=$_POST["dead_trigger_url"];}
if (isset($_GET["cid_cb_confirm_number"]))			{$cid_cb_confirm_number=$_GET["cid_cb_confirm_number"];}
	elseif (isset($_POST["cid_cb_confirm_number"]))	{$cid_cb_confirm_number=$_POST["cid_cb_confirm_number"];}
if (isset($_GET["cid_cb_invalid_filter_phone_group"]))			{$cid_cb_invalid_filter_phone_group=$_GET["cid_cb_invalid_filter_phone_group"];}
	elseif (isset($_POST["cid_cb_invalid_filter_phone_group"]))	{$cid_cb_invalid_filter_phone_group=$_POST["cid_cb_invalid_filter_phone_group"];}
if (isset($_GET["cid_cb_valid_length"]))			{$cid_cb_valid_length=$_GET["cid_cb_valid_length"];}
	elseif (isset($_POST["cid_cb_valid_length"]))	{$cid_cb_valid_length=$_POST["cid_cb_valid_length"];}
if (isset($_GET["cid_cb_valid_filename"]))			{$cid_cb_valid_filename=$_GET["cid_cb_valid_filename"];}
	elseif (isset($_POST["cid_cb_valid_filename"]))	{$cid_cb_valid_filename=$_POST["cid_cb_valid_filename"];}
if (isset($_GET["cid_cb_confirmed_filename"]))			{$cid_cb_confirmed_filename=$_GET["cid_cb_confirmed_filename"];}
	elseif (isset($_POST["cid_cb_confirmed_filename"]))	{$cid_cb_confirmed_filename=$_POST["cid_cb_confirmed_filename"];}
if (isset($_GET["cid_cb_enter_filename"]))			{$cid_cb_enter_filename=$_GET["cid_cb_enter_filename"];}
	elseif (isset($_POST["cid_cb_enter_filename"]))	{$cid_cb_enter_filename=$_POST["cid_cb_enter_filename"];}
if (isset($_GET["cid_cb_you_entered_filename"]))			{$cid_cb_you_entered_filename=$_GET["cid_cb_you_entered_filename"];}
	elseif (isset($_POST["cid_cb_you_entered_filename"]))	{$cid_cb_you_entered_filename=$_POST["cid_cb_you_entered_filename"];}
if (isset($_GET["cid_cb_press_to_confirm_filename"]))			{$cid_cb_press_to_confirm_filename=$_GET["cid_cb_press_to_confirm_filename"];}
	elseif (isset($_POST["cid_cb_press_to_confirm_filename"]))	{$cid_cb_press_to_confirm_filename=$_POST["cid_cb_press_to_confirm_filename"];}
if (isset($_GET["cid_cb_invalid_filename"]))			{$cid_cb_invalid_filename=$_GET["cid_cb_invalid_filename"];}
	elseif (isset($_POST["cid_cb_invalid_filename"]))	{$cid_cb_invalid_filename=$_POST["cid_cb_invalid_filename"];}
if (isset($_GET["cid_cb_reenter_filename"]))			{$cid_cb_reenter_filename=$_GET["cid_cb_reenter_filename"];}
	elseif (isset($_POST["cid_cb_reenter_filename"]))	{$cid_cb_reenter_filename=$_POST["cid_cb_reenter_filename"];}
if (isset($_GET["cid_cb_error_filename"]))			{$cid_cb_error_filename=$_GET["cid_cb_error_filename"];}
	elseif (isset($_POST["cid_cb_error_filename"]))	{$cid_cb_error_filename=$_POST["cid_cb_error_filename"];}
if (isset($_GET["agent_logout_link"]))			{$agent_logout_link=$_GET["agent_logout_link"];}
	elseif (isset($_POST["agent_logout_link"]))	{$agent_logout_link=$_POST["agent_logout_link"];}
if (isset($_GET["scheduled_callbacks_force_dial"]))				{$scheduled_callbacks_force_dial=$_GET["scheduled_callbacks_force_dial"];}
	elseif (isset($_POST["scheduled_callbacks_force_dial"]))	{$scheduled_callbacks_force_dial=$_POST["scheduled_callbacks_force_dial"];}
if (isset($_GET["scheduled_callbacks_auto_reschedule"]))			{$scheduled_callbacks_auto_reschedule=$_GET["scheduled_callbacks_auto_reschedule"];}
	elseif (isset($_POST["scheduled_callbacks_auto_reschedule"]))	{$scheduled_callbacks_auto_reschedule=$_POST["scheduled_callbacks_auto_reschedule"];}
if (isset($_GET["scheduled_callbacks_timezones_container"]))			{$scheduled_callbacks_timezones_container=$_GET["scheduled_callbacks_timezones_container"];}
	elseif (isset($_POST["scheduled_callbacks_timezones_container"]))	{$scheduled_callbacks_timezones_container=$_POST["scheduled_callbacks_timezones_container"];}
if (isset($_GET["daily_reset_limit"]))			{$daily_reset_limit=$_GET["daily_reset_limit"];}
	elseif (isset($_POST["daily_reset_limit"]))	{$daily_reset_limit=$_POST["daily_reset_limit"];}
if (isset($_GET["three_way_volume_buttons"]))			{$three_way_volume_buttons=$_GET["three_way_volume_buttons"];}
	elseif (isset($_POST["three_way_volume_buttons"]))	{$three_way_volume_buttons=$_POST["three_way_volume_buttons"];}
if (isset($_GET["callback_dnc"]))			{$callback_dnc=$_GET["callback_dnc"];}
	elseif (isset($_POST["callback_dnc"]))	{$callback_dnc=$_POST["callback_dnc"];}
if (isset($_GET["external_web_socket_url"]))			{$external_web_socket_url=$_GET["external_web_socket_url"];}
	elseif (isset($_POST["external_web_socket_url"]))	{$external_web_socket_url=$_POST["external_web_socket_url"];}
if (isset($_GET["manual_dial_validation"]))			{$manual_dial_validation=$_GET["manual_dial_validation"];}
	elseif (isset($_POST["manual_dial_validation"]))	{$manual_dial_validation=$_POST["manual_dial_validation"];}
if (isset($_GET["place_in_line_caller_number_filename"]))			{$place_in_line_caller_number_filename=$_GET["place_in_line_caller_number_filename"];}
	elseif (isset($_POST["place_in_line_caller_number_filename"]))	{$place_in_line_caller_number_filename=$_POST["place_in_line_caller_number_filename"];}
if (isset($_GET["place_in_line_you_next_filename"]))			{$place_in_line_you_next_filename=$_GET["place_in_line_you_next_filename"];}
	elseif (isset($_POST["place_in_line_you_next_filename"]))	{$place_in_line_you_next_filename=$_POST["place_in_line_you_next_filename"];}
if (isset($_GET["mute_recordings"]))			{$mute_recordings=$_GET["mute_recordings"];}
	elseif (isset($_POST["mute_recordings"]))	{$mute_recordings=$_POST["mute_recordings"];}
if (isset($_GET["user_admin_redirect"]))			{$user_admin_redirect=$_GET["user_admin_redirect"];}
	elseif (isset($_POST["user_admin_redirect"]))	{$user_admin_redirect=$_POST["user_admin_redirect"];}
if (isset($_GET["user_admin_redirect_url"]))			{$user_admin_redirect_url=$_GET["user_admin_redirect_url"];}
	elseif (isset($_POST["user_admin_redirect_url"]))	{$user_admin_redirect_url=$_POST["user_admin_redirect_url"];}
if (isset($_GET["sip_event_logging"]))			{$sip_event_logging=$_GET["sip_event_logging"];}
	elseif (isset($_POST["sip_event_logging"]))	{$sip_event_logging=$_POST["sip_event_logging"];}
if (isset($_GET["call_quota_lead_ranking"]))			{$call_quota_lead_ranking=$_GET["call_quota_lead_ranking"];}
	elseif (isset($_POST["call_quota_lead_ranking"]))	{$call_quota_lead_ranking=$_POST["call_quota_lead_ranking"];}
if (isset($_GET["auto_active_list_new"]))			{$auto_active_list_new=$_GET["auto_active_list_new"];}
	elseif (isset($_POST["auto_active_list_new"]))	{$auto_active_list_new=$_POST["auto_active_list_new"];}
if (isset($_GET["auto_active_list_rank"]))			{$auto_active_list_rank=$_GET["auto_active_list_rank"];}
	elseif (isset($_POST["auto_active_list_rank"]))	{$auto_active_list_rank=$_POST["auto_active_list_rank"];}
if (isset($_GET["max_inbound_filter_enabled"]))				{$max_inbound_filter_enabled=$_GET["max_inbound_filter_enabled"];}
	elseif (isset($_POST["max_inbound_filter_enabled"]))	{$max_inbound_filter_enabled=$_POST["max_inbound_filter_enabled"];}
if (isset($_GET["max_inbound_filter_statuses"]))			{$max_inbound_filter_statuses=$_GET["max_inbound_filter_statuses"];}
	elseif (isset($_POST["max_inbound_filter_statuses"]))	{$max_inbound_filter_statuses=$_POST["max_inbound_filter_statuses"];}
if (isset($_GET["max_inbound_filter_ingroups"]))			{$max_inbound_filter_ingroups=$_GET["max_inbound_filter_ingroups"];}
	elseif (isset($_POST["max_inbound_filter_ingroups"]))	{$max_inbound_filter_ingroups=$_POST["max_inbound_filter_ingroups"];}
if (isset($_GET["max_inbound_filter_min_sec"]))				{$max_inbound_filter_min_sec=$_GET["max_inbound_filter_min_sec"];}
	elseif (isset($_POST["max_inbound_filter_min_sec"]))	{$max_inbound_filter_min_sec=$_POST["max_inbound_filter_min_sec"];}
if (isset($_GET["enable_second_script"]))			{$enable_second_script=$_GET["enable_second_script"];}
	elseif (isset($_POST["enable_second_script"]))	{$enable_second_script=$_POST["enable_second_script"];}
if (isset($_GET["ingroup_script_two"]))				{$ingroup_script_two=$_GET["ingroup_script_two"];}
	elseif (isset($_POST["ingroup_script_two"]))	{$ingroup_script_two=$_POST["ingroup_script_two"];}
if (isset($_GET["campaign_script_two"]))			{$campaign_script_two=$_GET["campaign_script_two"];}
	elseif (isset($_POST["campaign_script_two"]))	{$campaign_script_two=$_POST["campaign_script_two"];}
if (isset($_GET["leave_vm_message_group_id"]))			{$leave_vm_message_group_id=$_GET["leave_vm_message_group_id"];}
	elseif (isset($_POST["leave_vm_message_group_id"]))	{$leave_vm_message_group_id=$_POST["leave_vm_message_group_id"];}
if (isset($_GET["leave_vm_message_group_notes"]))			{$leave_vm_message_group_notes=$_GET["leave_vm_message_group_notes"];}
	elseif (isset($_POST["leave_vm_message_group_notes"]))	{$leave_vm_message_group_notes=$_POST["leave_vm_message_group_notes"];}
if (isset($_GET["audio_filename"]))			{$audio_filename=$_GET["audio_filename"];}
	elseif (isset($_POST["audio_filename"]))	{$audio_filename=$_POST["audio_filename"];}
if (isset($_GET["audio_name"]))			{$audio_name=$_GET["audio_name"];}
	elseif (isset($_POST["audio_name"]))	{$audio_name=$_POST["audio_name"];}
if (isset($_GET["time_start"]))			{$time_start=$_GET["time_start"];}
	elseif (isset($_POST["time_start"]))	{$time_start=$_POST["time_start"];}
if (isset($_GET["time_end"]))			{$time_end=$_GET["time_end"];}
	elseif (isset($_POST["time_end"]))	{$time_end=$_POST["time_end"];}
if (isset($_GET["leave_vm_no_dispo"]))			{$leave_vm_no_dispo=$_GET["leave_vm_no_dispo"];}
	elseif (isset($_POST["leave_vm_no_dispo"]))	{$leave_vm_no_dispo=$_POST["leave_vm_no_dispo"];}
if (isset($_GET["leave_vm_message_group_id"]))			{$leave_vm_message_group_id=$_GET["leave_vm_message_group_id"];}
	elseif (isset($_POST["leave_vm_message_group_id"]))	{$leave_vm_message_group_id=$_POST["leave_vm_message_group_id"];}
if (isset($_GET["dial_timeout_lead_container"]))			{$dial_timeout_lead_container=$_GET["dial_timeout_lead_container"];}
	elseif (isset($_POST["dial_timeout_lead_container"]))	{$dial_timeout_lead_container=$_POST["dial_timeout_lead_container"];}
if (isset($_GET["amd_type"]))			{$amd_type=$_GET["amd_type"];}
	elseif (isset($_POST["amd_type"]))	{$amd_type=$_POST["amd_type"];}
if (isset($_GET["recording_buttons"]))			{$recording_buttons=$_GET["recording_buttons"];}
	elseif (isset($_POST["recording_buttons"]))	{$recording_buttons=$_POST["recording_buttons"];}
if (isset($_GET["enable_first_webform"]))			{$enable_first_webform=$_GET["enable_first_webform"];}
	elseif (isset($_POST["enable_first_webform"]))	{$enable_first_webform=$_POST["enable_first_webform"];}
if (isset($_GET["vmm_daily_limit"]))			{$vmm_daily_limit=$_GET["vmm_daily_limit"];}
	elseif (isset($_POST["vmm_daily_limit"]))	{$vmm_daily_limit=$_POST["vmm_daily_limit"];}
if (isset($_GET["cid_auto_rotate_minutes"]))			{$cid_auto_rotate_minutes=$_GET["cid_auto_rotate_minutes"];}
	elseif (isset($_POST["cid_auto_rotate_minutes"]))	{$cid_auto_rotate_minutes=$_POST["cid_auto_rotate_minutes"];}
if (isset($_GET["cid_auto_rotate_minimum"]))			{$cid_auto_rotate_minimum=$_GET["cid_auto_rotate_minimum"];}
	elseif (isset($_POST["cid_auto_rotate_minimum"]))	{$cid_auto_rotate_minimum=$_POST["cid_auto_rotate_minimum"];}
if (isset($_GET["opensips_cid_name"]))			{$opensips_cid_name=$_GET["opensips_cid_name"];}
	elseif (isset($_POST["opensips_cid_name"]))	{$opensips_cid_name=$_POST["opensips_cid_name"];}
if (isset($_GET["require_password_length"]))			{$require_password_length=$_GET["require_password_length"];}
	elseif (isset($_POST["require_password_length"]))	{$require_password_length=$_POST["require_password_length"];}
if (isset($_GET["amd_agent_route_options"]))			{$amd_agent_route_options=$_GET["amd_agent_route_options"];}
	elseif (isset($_POST["amd_agent_route_options"]))	{$amd_agent_route_options=$_POST["amd_agent_route_options"];}
if (isset($_GET["user_account_emails"]))			{$user_account_emails=$_GET["user_account_emails"];}
	elseif (isset($_POST["user_account_emails"]))	{$user_account_emails=$_POST["user_account_emails"];}
if (isset($_GET["outbound_cid_any"]))			{$outbound_cid_any=$_GET["outbound_cid_any"];}
	elseif (isset($_POST["outbound_cid_any"]))	{$outbound_cid_any=$_POST["outbound_cid_any"];}
if (isset($_GET["entries_per_page"]))			{$entries_per_page=$_GET["entries_per_page"];}
	elseif (isset($_POST["entries_per_page"]))	{$entries_per_page=$_POST["entries_per_page"];}
if (isset($_GET["start_count"]))			{$start_count=$_GET["start_count"];}
	elseif (isset($_POST["start_count"]))	{$start_count=$_POST["start_count"];}
if (isset($_GET["browser_call_alerts"]))			{$browser_call_alerts=$_GET["browser_call_alerts"];}
	elseif (isset($_POST["browser_call_alerts"]))	{$browser_call_alerts=$_POST["browser_call_alerts"];}
if (isset($_GET["browser_alert_sound"]))			{$browser_alert_sound=$_GET["browser_alert_sound"];}
	elseif (isset($_POST["browser_alert_sound"]))	{$browser_alert_sound=$_POST["browser_alert_sound"];}
if (isset($_GET["browser_alert_volume"]))			{$browser_alert_volume=$_GET["browser_alert_volume"];}
	elseif (isset($_POST["browser_alert_volume"]))	{$browser_alert_volume=$_POST["browser_alert_volume"];}
if (isset($_GET["three_way_record_stop_exception"]))			{$three_way_record_stop_exception=$_GET["three_way_record_stop_exception"];}
	elseif (isset($_POST["three_way_record_stop_exception"]))	{$three_way_record_stop_exception=$_POST["three_way_record_stop_exception"];}
if (isset($_GET["queuemetrics_pausereason"]))			{$queuemetrics_pausereason=$_GET["queuemetrics_pausereason"];}
	elseif (isset($_POST["queuemetrics_pausereason"]))	{$queuemetrics_pausereason=$_POST["queuemetrics_pausereason"];}
if (isset($_GET["inbound_answer_config"]))			{$inbound_answer_config=$_GET["inbound_answer_config"];}
	elseif (isset($_POST["inbound_answer_config"]))	{$inbound_answer_config=$_POST["inbound_answer_config"];}
if (isset($_GET["inbound_route_answer"]))			{$inbound_route_answer=$_GET["inbound_route_answer"];}
	elseif (isset($_POST["inbound_route_answer"]))	{$inbound_route_answer=$_POST["inbound_route_answer"];}
if (isset($_GET["answer_signal"]))			{$answer_signal=$_GET["answer_signal"];}
	elseif (isset($_POST["answer_signal"]))	{$answer_signal=$_POST["answer_signal"];}
if (isset($_GET["inbound_drop_voicemail"]))				{$inbound_drop_voicemail=$_GET["inbound_drop_voicemail"];}
	elseif (isset($_POST["inbound_drop_voicemail"]))	{$inbound_drop_voicemail=$_POST["inbound_drop_voicemail"];}
if (isset($_GET["inbound_after_hours_voicemail"]))			{$inbound_after_hours_voicemail=$_GET["inbound_after_hours_voicemail"];}
	elseif (isset($_POST["inbound_after_hours_voicemail"]))	{$inbound_after_hours_voicemail=$_POST["inbound_after_hours_voicemail"];}
if (isset($_GET["web_loader_phone_strip"]))				{$web_loader_phone_strip=$_GET["web_loader_phone_strip"];}
	elseif (isset($_POST["web_loader_phone_strip"]))	{$web_loader_phone_strip=$_POST["web_loader_phone_strip"];}
if (isset($_GET["manual_dial_phone_strip"]))			{$manual_dial_phone_strip=$_GET["manual_dial_phone_strip"];}
	elseif (isset($_POST["manual_dial_phone_strip"]))	{$manual_dial_phone_strip=$_POST["manual_dial_phone_strip"];}
if (isset($_GET["pause_max_exceptions"]))			{$pause_max_exceptions=$_GET["pause_max_exceptions"];}
	elseif (isset($_POST["pause_max_exceptions"]))	{$pause_max_exceptions=$_POST["pause_max_exceptions"];}
if (isset($_GET["no_agent_delay"]))				{$no_agent_delay=$_GET["no_agent_delay"];}
	elseif (isset($_POST["no_agent_delay"]))	{$no_agent_delay=$_POST["no_agent_delay"];}
if (isset($_GET["hopper_drop_run_trigger"]))			{$hopper_drop_run_trigger=$_GET["hopper_drop_run_trigger"];}
	elseif (isset($_POST["hopper_drop_run_trigger"]))	{$hopper_drop_run_trigger=$_POST["hopper_drop_run_trigger"];}
if (isset($_GET["hopper_drop_run_trigger_all"]))			{$hopper_drop_run_trigger_all=$_GET["hopper_drop_run_trigger_all"];}
	elseif (isset($_POST["hopper_drop_run_trigger_all"]))	{$hopper_drop_run_trigger_all=$_POST["hopper_drop_run_trigger_all"];}
if (isset($_GET["daily_call_count_limit"]))				{$daily_call_count_limit=$_GET["daily_call_count_limit"];}
	elseif (isset($_POST["daily_call_count_limit"]))	{$daily_call_count_limit=$_POST["daily_call_count_limit"];}
if (isset($_GET["daily_limit_manual"]))				{$daily_limit_manual=$_GET["daily_limit_manual"];}
	elseif (isset($_POST["daily_limit_manual"]))	{$daily_limit_manual=$_POST["daily_limit_manual"];}
if (isset($_GET["transfer_button_launch"]))				{$transfer_button_launch=$_GET["transfer_button_launch"];}
	elseif (isset($_POST["transfer_button_launch"]))	{$transfer_button_launch=$_POST["transfer_button_launch"];}
if (isset($_GET["allow_shared_dial"]))			{$allow_shared_dial=$_GET["allow_shared_dial"];}
	elseif (isset($_POST["allow_shared_dial"]))	{$allow_shared_dial=$_POST["allow_shared_dial"];}
if (isset($_GET["shared_dial_rank"]))			{$shared_dial_rank=$_GET["shared_dial_rank"];}
	elseif (isset($_POST["shared_dial_rank"]))	{$shared_dial_rank=$_POST["shared_dial_rank"];}
if (isset($_GET["mobile_number"]))			{$mobile_number=$_GET["mobile_number"];}
	elseif (isset($_POST["mobile_number"]))	{$mobile_number=$_POST["mobile_number"];}
if (isset($_GET["two_factor_auth_hours"]))			{$two_factor_auth_hours=$_GET["two_factor_auth_hours"];}
	elseif (isset($_POST["two_factor_auth_hours"]))	{$two_factor_auth_hours=$_POST["two_factor_auth_hours"];}
if (isset($_GET["two_factor_auth_agent_hours"]))			{$two_factor_auth_agent_hours=$_GET["two_factor_auth_agent_hours"];}
	elseif (isset($_POST["two_factor_auth_agent_hours"]))	{$two_factor_auth_agent_hours=$_POST["two_factor_auth_agent_hours"];}
if (isset($_GET["two_factor_container"]))			{$two_factor_container=$_GET["two_factor_container"];}
	elseif (isset($_POST["two_factor_container"]))	{$two_factor_container=$_POST["two_factor_container"];}
if (isset($_GET["two_factor_override"]))			{$two_factor_override=$_GET["two_factor_override"];}
	elseif (isset($_POST["two_factor_override"]))	{$two_factor_override=$_POST["two_factor_override"];}
if (isset($_GET["auth_entry"]))				{$auth_entry=$_GET["auth_entry"];}
	elseif (isset($_POST["auth_entry"]))	{$auth_entry=$_POST["auth_entry"];}
if (isset($_GET["clear_form"]))				{$clear_form=$_GET["clear_form"];}
	elseif (isset($_POST["clear_form"]))	{$clear_form=$_POST["clear_form"];}
if (isset($_GET["agent_hidden_sound"]))				{$agent_hidden_sound=$_GET["agent_hidden_sound"];}
	elseif (isset($_POST["agent_hidden_sound"]))	{$agent_hidden_sound=$_POST["agent_hidden_sound"];}
if (isset($_GET["agent_hidden_sound_volume"]))			{$agent_hidden_sound_volume=$_GET["agent_hidden_sound_volume"];}
	elseif (isset($_POST["agent_hidden_sound_volume"]))	{$agent_hidden_sound_volume=$_POST["agent_hidden_sound_volume"];}
if (isset($_GET["agent_hidden_sound_seconds"]))				{$agent_hidden_sound_seconds=$_GET["agent_hidden_sound_seconds"];}
	elseif (isset($_POST["agent_hidden_sound_seconds"]))	{$agent_hidden_sound_seconds=$_POST["agent_hidden_sound_seconds"];}
if (isset($_GET["leave_3way_start_recording"]))				{$leave_3way_start_recording=$_GET["leave_3way_start_recording"];}
	elseif (isset($_POST["leave_3way_start_recording"]))	{$leave_3way_start_recording=$_POST["leave_3way_start_recording"];}
if (isset($_GET["leave_3way_start_recording_exception"]))			{$leave_3way_start_recording_exception=$_GET["leave_3way_start_recording_exception"];}
	elseif (isset($_POST["leave_3way_start_recording_exception"]))	{$leave_3way_start_recording_exception=$_POST["leave_3way_start_recording_exception"];}
if (isset($_GET["populate_lead_comments"]))				{$populate_lead_comments=$_GET["populate_lead_comments"];}
	elseif (isset($_POST["populate_lead_comments"]))	{$populate_lead_comments=$_POST["populate_lead_comments"];}
if (isset($_GET["agent_screen_timer"]))				{$agent_screen_timer=$_GET["agent_screen_timer"];}
	elseif (isset($_POST["agent_screen_timer"]))	{$agent_screen_timer=$_POST["agent_screen_timer"];}
if (isset($_GET["calls_waiting_vl_one"]))				{$calls_waiting_vl_one=$_GET["calls_waiting_vl_one"];}
	elseif (isset($_POST["calls_waiting_vl_one"]))	{$calls_waiting_vl_one=$_POST["calls_waiting_vl_one"];}
if (isset($_GET["calls_waiting_vl_two"]))				{$calls_waiting_vl_two=$_GET["calls_waiting_vl_two"];}
	elseif (isset($_POST["calls_waiting_vl_two"]))	{$calls_waiting_vl_two=$_POST["calls_waiting_vl_two"];}
if (isset($_GET["label_lead_id"]))				{$label_lead_id=$_GET["label_lead_id"];}
	elseif (isset($_POST["label_lead_id"]))		{$label_lead_id=$_POST["label_lead_id"];}
if (isset($_GET["label_list_id"]))				{$label_list_id=$_GET["label_list_id"];}
	elseif (isset($_POST["label_list_id"]))		{$label_list_id=$_POST["label_list_id"];}
if (isset($_GET["label_entry_date"]))			{$label_entry_date=$_GET["label_entry_date"];}
	elseif (isset($_POST["label_entry_date"]))	{$label_entry_date=$_POST["label_entry_date"];}
if (isset($_GET["label_gmt_offset_now"]))			{$label_gmt_offset_now=$_GET["label_gmt_offset_now"];}
	elseif (isset($_POST["label_gmt_offset_now"]))	{$label_gmt_offset_now=$_POST["label_gmt_offset_now"];}
if (isset($_GET["label_source_id"]))				{$label_source_id=$_GET["label_source_id"];}
	elseif (isset($_POST["label_source_id"]))		{$label_source_id=$_POST["label_source_id"];}
if (isset($_GET["label_called_since_last_reset"]))			{$label_called_since_last_reset=$_GET["label_called_since_last_reset"];}
	elseif (isset($_POST["label_called_since_last_reset"]))	{$label_called_since_last_reset=$_POST["label_called_since_last_reset"];}
if (isset($_GET["label_status"]))			{$label_status=$_GET["label_status"];}
	elseif (isset($_POST["label_status"]))	{$label_status=$_POST["label_status"];}
if (isset($_GET["label_user"]))				{$label_user=$_GET["label_user"];}
	elseif (isset($_POST["label_user"]))	{$label_user=$_POST["label_user"];}
if (isset($_GET["label_date_of_birth"]))			{$label_date_of_birth=$_GET["label_date_of_birth"];}
	elseif (isset($_POST["label_date_of_birth"]))	{$label_date_of_birth=$_POST["label_date_of_birth"];}
if (isset($_GET["label_country_code"]))				{$label_country_code=$_GET["label_country_code"];}
	elseif (isset($_POST["label_country_code"]))	{$label_country_code=$_POST["label_country_code"];}
if (isset($_GET["label_last_local_call_time"]))				{$label_last_local_call_time=$_GET["label_last_local_call_time"];}
	elseif (isset($_POST["label_last_local_call_time"]))	{$label_last_local_call_time=$_POST["label_last_local_call_time"];}
if (isset($_GET["label_called_count"]))				{$label_called_count=$_GET["label_called_count"];}
	elseif (isset($_POST["label_called_count"]))	{$label_called_count=$_POST["label_called_count"];}
if (isset($_GET["label_rank"]))				{$label_rank=$_GET["label_rank"];}
	elseif (isset($_POST["label_rank"]))	{$label_rank=$_POST["label_rank"];}
if (isset($_GET["label_owner"]))			{$label_owner=$_GET["label_owner"];}
	elseif (isset($_POST["label_owner"]))	{$label_owner=$_POST["label_owner"];}
if (isset($_GET["label_entry_list_id"]))			{$label_entry_list_id=$_GET["label_entry_list_id"];}
	elseif (isset($_POST["label_entry_list_id"]))	{$label_entry_list_id=$_POST["label_entry_list_id"];}
if (isset($_GET["calls_inqueue_count_one"]))			{$calls_inqueue_count_one=$_GET["calls_inqueue_count_one"];}
	elseif (isset($_POST["calls_inqueue_count_one"]))	{$calls_inqueue_count_one=$_POST["calls_inqueue_count_one"];}
if (isset($_GET["calls_inqueue_count_two"]))			{$calls_inqueue_count_two=$_GET["calls_inqueue_count_two"];}
	elseif (isset($_POST["calls_inqueue_count_two"]))	{$calls_inqueue_count_two=$_POST["calls_inqueue_count_two"];}
if (isset($_GET["mohsuggest"]))				{$mohsuggest=$_GET["mohsuggest"];}
	elseif (isset($_POST["mohsuggest"]))	{$mohsuggest=$_POST["mohsuggest"];}
if (isset($_GET["drop_call_seconds_override"]))				{$drop_call_seconds_override=$_GET["drop_call_seconds_override"];}
	elseif (isset($_POST["drop_call_seconds_override"]))	{$drop_call_seconds_override=$_POST["drop_call_seconds_override"];}
if (isset($_GET["in_man_dial_next_ready_seconds"]))				{$in_man_dial_next_ready_seconds=$_GET["in_man_dial_next_ready_seconds"];}
	elseif (isset($_POST["in_man_dial_next_ready_seconds"]))	{$in_man_dial_next_ready_seconds=$_POST["in_man_dial_next_ready_seconds"];}
if (isset($_GET["in_man_dial_next_ready_seconds_override"]))			{$in_man_dial_next_ready_seconds_override=$_GET["in_man_dial_next_ready_seconds_override"];}
	elseif (isset($_POST["in_man_dial_next_ready_seconds_override"]))	{$in_man_dial_next_ready_seconds_override=$_POST["in_man_dial_next_ready_seconds_override"];}
if (isset($_GET["transfer_no_dispo"]))			{$transfer_no_dispo=$_GET["transfer_no_dispo"];}
	elseif (isset($_POST["transfer_no_dispo"]))	{$transfer_no_dispo=$_POST["transfer_no_dispo"];}
if (isset($_GET["call_limit_24hour_method"]))			{$call_limit_24hour_method=$_GET["call_limit_24hour_method"];}
	elseif (isset($_POST["call_limit_24hour_method"]))	{$call_limit_24hour_method=$_POST["call_limit_24hour_method"];}
if (isset($_GET["call_limit_24hour_scope"]))			{$call_limit_24hour_scope=$_GET["call_limit_24hour_scope"];}
	elseif (isset($_POST["call_limit_24hour_scope"]))	{$call_limit_24hour_scope=$_POST["call_limit_24hour_scope"];}
if (isset($_GET["call_limit_24hour"]))			{$call_limit_24hour=$_GET["call_limit_24hour"];}
	elseif (isset($_POST["call_limit_24hour"]))	{$call_limit_24hour=$_POST["call_limit_24hour"];}
if (isset($_GET["call_limit_24hour_override"]))			{$call_limit_24hour_override=$_GET["call_limit_24hour_override"];}
	elseif (isset($_POST["call_limit_24hour_override"]))	{$call_limit_24hour_override=$_POST["call_limit_24hour_override"];}
if (isset($_GET["cid_group_id_two"]))			{$cid_group_id_two=$_GET["cid_group_id_two"];}
	elseif (isset($_POST["cid_group_id_two"]))	{$cid_group_id_two=$_POST["cid_group_id_two"];}
if (isset($_GET["allowed_sip_stacks"]))				{$allowed_sip_stacks=$_GET["allowed_sip_stacks"];}
	elseif (isset($_POST["allowed_sip_stacks"]))	{$allowed_sip_stacks=$_POST["allowed_sip_stacks"];}
if (isset($_GET["populate_lead_owner"]))			{$populate_lead_owner=$_GET["populate_lead_owner"];}
	elseif (isset($_POST["populate_lead_owner"]))	{$populate_lead_owner=$_POST["populate_lead_owner"];}
if (isset($_GET["incall_tally_threshold_seconds"]))				{$incall_tally_threshold_seconds=$_GET["incall_tally_threshold_seconds"];}
	elseif (isset($_POST["incall_tally_threshold_seconds"]))	{$incall_tally_threshold_seconds=$_POST["incall_tally_threshold_seconds"];}
if (isset($_GET["in_queue_nanque"]))			{$in_queue_nanque=$_GET["in_queue_nanque"];}
	elseif (isset($_POST["in_queue_nanque"]))	{$in_queue_nanque=$_POST["in_queue_nanque"];}
if (isset($_GET["in_queue_nanque_exceptions"]))				{$in_queue_nanque_exceptions=$_GET["in_queue_nanque_exceptions"];}
	elseif (isset($_POST["in_queue_nanque_exceptions"]))	{$in_queue_nanque_exceptions=$_POST["in_queue_nanque_exceptions"];}
if (isset($_GET["user_location"]))			{$user_location=$_GET["user_location"];}
	elseif (isset($_POST["user_location"]))	{$user_location=$_POST["user_location"];}
if (isset($_GET["queue_group"]))			{$queue_group=$_GET["queue_group"];}
	elseif (isset($_POST["queue_group"]))	{$queue_group=$_POST["queue_group"];}
if (isset($_GET["queue_group_name"]))			{$queue_group_name=$_GET["queue_group_name"];}
	elseif (isset($_POST["queue_group_name"]))	{$queue_group_name=$_POST["queue_group_name"];}
if (isset($_GET["included_campaigns"]))				{$included_campaigns=$_GET["included_campaigns"];}
	elseif (isset($_POST["included_campaigns"]))	{$included_campaigns=$_POST["included_campaigns"];}
if (isset($_GET["included_inbound_groups"]))			{$included_inbound_groups=$_GET["included_inbound_groups"];}
	elseif (isset($_POST["included_inbound_groups"]))	{$included_inbound_groups=$_POST["included_inbound_groups"];}
if (isset($_GET["allowed_queue_groups"]))			{$allowed_queue_groups=$_GET["allowed_queue_groups"];}
	elseif (isset($_POST["allowed_queue_groups"]))	{$allowed_queue_groups=$_POST["allowed_queue_groups"];}
if (isset($_GET["reports_header_override"]))			{$reports_header_override=$_GET["reports_header_override"];}
	elseif (isset($_POST["reports_header_override"]))	{$reports_header_override=$_POST["reports_header_override"];}
if (isset($_GET["queue_groups"]))			{$queue_groups=$_GET["queue_groups"];}
	elseif (isset($_POST["queue_groups"]))	{$queue_groups=$_POST["queue_groups"];}
if (isset($_GET["auto_alt_threshold"]))				{$auto_alt_threshold=$_GET["auto_alt_threshold"];}
	elseif (isset($_POST["auto_alt_threshold"]))	{$auto_alt_threshold=$_POST["auto_alt_threshold"];}
if (isset($_GET["download_invalid_files"]))				{$download_invalid_files=$_GET["download_invalid_files"];}
	elseif (isset($_POST["download_invalid_files"]))	{$download_invalid_files=$_POST["download_invalid_files"];}
if (isset($_GET["pause_max_url"]))			{$pause_max_url=$_GET["pause_max_url"];}
	elseif (isset($_POST["pause_max_url"]))	{$pause_max_url=$_POST["pause_max_url"];}
if (isset($_GET["agent_hide_hangup"]))			{$agent_hide_hangup=$_GET["agent_hide_hangup"];}
	elseif (isset($_POST["agent_hide_hangup"]))	{$agent_hide_hangup=$_POST["agent_hide_hangup"];}
if (isset($_GET["allow_web_debug"]))			{$allow_web_debug=$_GET["allow_web_debug"];}
	elseif (isset($_POST["allow_web_debug"]))	{$allow_web_debug=$_POST["allow_web_debug"];}
if (isset($_GET["ig_xfer_list_sort"]))			{$ig_xfer_list_sort=$_GET["ig_xfer_list_sort"];}
	elseif (isset($_POST["ig_xfer_list_sort"]))	{$ig_xfer_list_sort=$_POST["ig_xfer_list_sort"];}
if (isset($_GET["pre_filter_recent_call"]))				{$pre_filter_recent_call=$_GET["pre_filter_recent_call"];}
	elseif (isset($_POST["pre_filter_recent_call"]))	{$pre_filter_recent_call=$_POST["pre_filter_recent_call"];}
if (isset($_GET["pre_filter_recent_extension"]))			{$pre_filter_recent_extension=$_GET["pre_filter_recent_extension"];}
	elseif (isset($_POST["pre_filter_recent_extension"]))	{$pre_filter_recent_extension=$_POST["pre_filter_recent_extension"];}
if (isset($_GET["script_tab_frame_size"]))			{$script_tab_frame_size=$_GET["script_tab_frame_size"];}
	elseif (isset($_POST["script_tab_frame_size"]))	{$script_tab_frame_size=$_POST["script_tab_frame_size"];}
if (isset($_GET["user_group_two"]))				{$user_group_two=$_GET["user_group_two"];}
	elseif (isset($_POST["user_group_two"]))	{$user_group_two=$_POST["user_group_two"];}
if (isset($_GET["max_logged_in_agents"]))				{$max_logged_in_agents=$_GET["max_logged_in_agents"];}
	elseif (isset($_POST["max_logged_in_agents"]))	{$max_logged_in_agents=$_POST["max_logged_in_agents"];}
if (isset($_GET["user_codes_admin"]))				{$user_codes_admin=$_GET["user_codes_admin"];}
	elseif (isset($_POST["user_codes_admin"]))	{$user_codes_admin=$_POST["user_codes_admin"];}
if (isset($_GET["conf_engine"]))			{$conf_engine=$_GET["conf_engine"];}
	elseif (isset($_POST["conf_engine"]))	{$conf_engine=$_POST["conf_engine"];}
if (isset($_GET["conf_update_interval"]))			{$conf_update_interval=$_GET["conf_update_interval"];}
	elseif (isset($_POST["conf_update_interval"]))	{$conf_update_interval=$_POST["conf_update_interval"];}
if (isset($_GET["user_group_script"]))			{$user_group_script=$_GET["user_group_script"];}
	elseif (isset($_POST["user_group_script"]))	{$user_group_script=$_POST["user_group_script"];}
if (isset($_GET["login_kickall"]))			{$login_kickall=$_GET["login_kickall"];}
	elseif (isset($_POST["login_kickall"]))	{$login_kickall=$_POST["login_kickall"];}
if (isset($_GET["city_rule"]))			{$city_rule=$_GET["city_rule"];}
	elseif (isset($_POST["city_rule"]))	{$city_rule=$_POST["city_rule"];}
if (isset($_GET["county_rule"]))			{$county_rule=$_GET["county_rule"];}
	elseif (isset($_POST["county_rule"]))	{$county_rule=$_POST["county_rule"];}
if (isset($_GET["ac_rule"]))			{$ac_rule=$_GET["ac_rule"];}
	elseif (isset($_POST["ac_rule"]))	{$ac_rule=$_POST["ac_rule"];}
if (isset($_GET["agent_hangup_route"]))				{$agent_hangup_route=$_GET["agent_hangup_route"];}
	elseif (isset($_POST["agent_hangup_route"]))	{$agent_hangup_route=$_POST["agent_hangup_route"];}
if (isset($_GET["agent_hangup_value"]))				{$agent_hangup_value=$_GET["agent_hangup_value"];}
	elseif (isset($_POST["agent_hangup_value"]))	{$agent_hangup_value=$_POST["agent_hangup_value"];}
if (isset($_GET["agent_hangup_ig_override"]))			{$agent_hangup_ig_override=$_GET["agent_hangup_ig_override"];}
	elseif (isset($_POST["agent_hangup_ig_override"]))	{$agent_hangup_ig_override=$_POST["agent_hangup_ig_override"];}
if (isset($_GET["abandon_check_queue"]))			{$abandon_check_queue=$_GET["abandon_check_queue"];}
	elseif (isset($_POST["abandon_check_queue"]))	{$abandon_check_queue=$_POST["abandon_check_queue"];}
if (isset($_GET["ara_url"]))			{$ara_url=$_GET["ara_url"];}
	elseif (isset($_POST["ara_url"]))	{$ara_url=$_POST["ara_url"];}
if (isset($_GET["show_confetti"]))			{$show_confetti=$_GET["show_confetti"];}
	elseif (isset($_POST["show_confetti"]))	{$show_confetti=$_POST["show_confetti"];}
if (isset($_GET["webphone_settings"]))			{$webphone_settings=$_GET["webphone_settings"];}
	elseif (isset($_POST["webphone_settings"]))	{$webphone_settings=$_POST["webphone_settings"];}
if (isset($_GET["agent_notifications"]))			{$agent_notifications=$_GET["agent_notifications"];}
	elseif (isset($_POST["agent_notifications"]))	{$agent_notifications=$_POST["agent_notifications"];}
if (isset($_GET["demographic_quotas"]))				{$demographic_quotas=$_GET["demographic_quotas"];}
	elseif (isset($_POST["demographic_quotas"]))	{$demographic_quotas=$_POST["demographic_quotas"];}
if (isset($_GET["demographic_quotas_container"]))			{$demographic_quotas_container=$_GET["demographic_quotas_container"];}
	elseif (isset($_POST["demographic_quotas_container"]))	{$demographic_quotas_container=$_POST["demographic_quotas_container"];}
if (isset($_GET["demographic_quotas_rerank"]))			{$demographic_quotas_rerank=$_GET["demographic_quotas_rerank"];}
	elseif (isset($_POST["demographic_quotas_rerank"]))	{$demographic_quotas_rerank=$_POST["demographic_quotas_rerank"];}
if (isset($_GET["demographic_quotas_list_resets"]))			{$demographic_quotas_list_resets=$_GET["demographic_quotas_list_resets"];}
	elseif (isset($_POST["demographic_quotas_list_resets"]))	{$demographic_quotas_list_resets=$_POST["demographic_quotas_list_resets"];}
if (isset($_GET["log_latency_gaps"]))			{$log_latency_gaps=$_GET["log_latency_gaps"];}
	elseif (isset($_POST["log_latency_gaps"]))	{$log_latency_gaps=$_POST["log_latency_gaps"];}
if (isset($_GET["modify_dial_prefix"]))				{$modify_dial_prefix=$_GET["modify_dial_prefix"];}
	elseif (isset($_POST["modify_dial_prefix"]))	{$modify_dial_prefix=$_POST["modify_dial_prefix"];}
if (isset($_GET["inbound_credits"]))			{$inbound_credits=$_GET["inbound_credits"];}
	elseif (isset($_POST["inbound_credits"]))	{$inbound_credits=$_POST["inbound_credits"];}
if (isset($_GET["weekday_resets"]))				{$weekday_resets=$_GET["weekday_resets"];}
	elseif (isset($_POST["weekday_resets"]))	{$weekday_resets=$_POST["weekday_resets"];}
if (isset($_GET["weekday_resets_container"]))			{$weekday_resets_container=$_GET["weekday_resets_container"];}
	elseif (isset($_POST["weekday_resets_container"]))	{$weekday_resets_container=$_POST["weekday_resets_container"];}
if (isset($_GET["second_alert_trigger"]))			{$second_alert_trigger=$_GET["second_alert_trigger"];}
	elseif (isset($_POST["second_alert_trigger"]))	{$second_alert_trigger=$_POST["second_alert_trigger"];}
if (isset($_GET["second_alert_trigger_seconds"]))			{$second_alert_trigger_seconds=$_GET["second_alert_trigger_seconds"];}
	elseif (isset($_POST["second_alert_trigger_seconds"]))	{$second_alert_trigger_seconds=$_POST["second_alert_trigger_seconds"];}
if (isset($_GET["second_alert_filename"]))			{$second_alert_filename=$_GET["second_alert_filename"];}
	elseif (isset($_POST["second_alert_filename"]))	{$second_alert_filename=$_POST["second_alert_filename"];}
if (isset($_GET["second_alert_delay"]))				{$second_alert_delay=$_GET["second_alert_delay"];}
	elseif (isset($_POST["second_alert_delay"]))	{$second_alert_delay=$_POST["second_alert_delay"];}
if (isset($_GET["second_alert_container"]))				{$second_alert_container=$_GET["second_alert_container"];}
	elseif (isset($_POST["second_alert_container"]))	{$second_alert_container=$_POST["second_alert_container"];}
if (isset($_GET["second_alert_only"]))			{$second_alert_only=$_GET["second_alert_only"];}
	elseif (isset($_POST["second_alert_only"]))	{$second_alert_only=$_POST["second_alert_only"];}
if (isset($_GET["dead_stop_recording"]))			{$dead_stop_recording=$_GET["dead_stop_recording"];}
	elseif (isset($_POST["dead_stop_recording"]))	{$dead_stop_recording=$_POST["dead_stop_recording"];}
if (isset($_GET["manual_vm_status_updates"]))			{$manual_vm_status_updates=$_GET["manual_vm_status_updates"];}
	elseif (isset($_POST["manual_vm_status_updates"]))	{$manual_vm_status_updates=$_POST["manual_vm_status_updates"];}
if (isset($_GET["force_per_call_notes"]))			{$force_per_call_notes=$_GET["force_per_call_notes"];}
	elseif (isset($_POST["force_per_call_notes"]))	{$force_per_call_notes=$_POST["force_per_call_notes"];}
if (isset($_GET["third_alert_trigger"]))			{$third_alert_trigger=$_GET["third_alert_trigger"];}
	elseif (isset($_POST["third_alert_trigger"]))	{$third_alert_trigger=$_POST["third_alert_trigger"];}
if (isset($_GET["third_alert_trigger_seconds"]))			{$third_alert_trigger_seconds=$_GET["third_alert_trigger_seconds"];}
	elseif (isset($_POST["third_alert_trigger_seconds"]))	{$third_alert_trigger_seconds=$_POST["third_alert_trigger_seconds"];}
if (isset($_GET["third_alert_filename"]))			{$third_alert_filename=$_GET["third_alert_filename"];}
	elseif (isset($_POST["third_alert_filename"]))	{$third_alert_filename=$_POST["third_alert_filename"];}
if (isset($_GET["third_alert_delay"]))			{$third_alert_delay=$_GET["third_alert_delay"];}
	elseif (isset($_POST["third_alert_delay"]))	{$third_alert_delay=$_POST["third_alert_delay"];}
if (isset($_GET["third_alert_container"]))			{$third_alert_container=$_GET["third_alert_container"];}
	elseif (isset($_POST["third_alert_container"]))	{$third_alert_container=$_POST["third_alert_container"];}
if (isset($_GET["third_alert_only"]))			{$third_alert_only=$_GET["third_alert_only"];}
	elseif (isset($_POST["third_alert_only"]))	{$third_alert_only=$_POST["third_alert_only"];}
if (isset($_GET["agent_search_ingroup_list"]))			{$agent_search_ingroup_list=$_GET["agent_search_ingroup_list"];}
	elseif (isset($_POST["agent_search_ingroup_list"]))	{$agent_search_ingroup_list=$_POST["agent_search_ingroup_list"];}
if (isset($_GET["agent_search_list"]))			{$agent_search_list=$_GET["agent_search_list"];}
	elseif (isset($_POST["agent_search_list"]))	{$agent_search_list=$_POST["agent_search_list"];}
if (isset($_GET["hopper_hold_inserts"]))			{$hopper_hold_inserts=$_GET["hopper_hold_inserts"];}
	elseif (isset($_POST["hopper_hold_inserts"]))	{$hopper_hold_inserts=$_POST["hopper_hold_inserts"];}
if (isset($_GET["hci_enabled"]))			{$hci_enabled=$_GET["hci_enabled"];}
	elseif (isset($_POST["hci_enabled"]))	{$hci_enabled=$_POST["hci_enabled"];}
if (isset($_GET["daily_phone_number_call_limit"]))			{$daily_phone_number_call_limit=$_GET["daily_phone_number_call_limit"];}
	elseif (isset($_POST["daily_phone_number_call_limit"]))	{$daily_phone_number_call_limit=$_POST["daily_phone_number_call_limit"];}
if (isset($_GET["state_descriptions"]))				{$state_descriptions=$_GET["state_descriptions"];}
	elseif (isset($_POST["state_descriptions"]))	{$state_descriptions=$_POST["state_descriptions"];}
if (isset($_GET["holiday_method"]))				{$holiday_method=$_GET["holiday_method"];}
	elseif (isset($_POST["holiday_method"]))	{$holiday_method=$_POST["holiday_method"];}

$DB=preg_replace("/[^0-9a-zA-Z]/","",$DB);

if (isset($script_id)) {$script_id= mb_strtoupper($script_id,'utf-8');}
if (isset($lead_filter_id)) {$lead_filter_id = mb_strtoupper($lead_filter_id,'utf-8');}

if (strlen($dial_status) > 0) 
	{
	$ADD='28';
	$status = $dial_status;
	}


#############################################
##### START SYSTEM_SETTINGS LOOKUP #####
$stmt = "SELECT use_non_latin,enable_queuemetrics_logging,enable_vtiger_integration,qc_features_active,outbound_autodial_active,sounds_central_control_active,enable_second_webform,user_territories_active,custom_fields_enabled,admin_web_directory,webphone_url,first_login_trigger,hosted_settings,default_phone_registration_password,default_phone_login_password,default_server_password,test_campaign_calls,active_voicemail_server,voicemail_timezones,default_voicemail_timezone,default_local_gmt,campaign_cid_areacodes_enabled,pllb_grouping_limit,did_ra_extensions_enabled,expanded_list_stats,contacts_enabled,alt_log_server_ip,alt_log_dbname,alt_log_login,alt_log_pass,tables_use_alt_log_db,call_menu_qualify_enabled,admin_list_counts,allow_voicemail_greeting,svn_revision,allow_emails,level_8_disable_add,pass_key,pass_hash_enabled,disable_auto_dial,country_code_list_stats,frozen_server_call_clear,active_modules,allow_chats,enable_languages,language_method,meetme_enter_login_filename,meetme_enter_leave3way_filename,enable_did_entry_list_id,enable_third_webform,default_language,user_hide_realtime_enabled,log_recording_access,alt_ivr_logging,admin_row_click,admin_screen_colors,ofcom_uk_drop_calc,agent_screen_colors,script_remove_js,manual_auto_next,user_new_lead_limit,agent_xfer_park_3way,agent_soundboards,web_loader_phone_length,agent_script,enable_auto_reports,enable_pause_code_limits,enable_drop_lists,allow_ip_lists,system_ip_blacklist,hide_inactive_lists,allow_manage_active_lists,expired_lists_inactive,did_system_filter,enable_gdpr_download_deletion,mute_recordings,user_admin_redirect,list_status_modification_confirmation,sip_event_logging,call_quota_lead_ranking,enable_second_script,enable_first_webform,recording_buttons,opensips_cid_name,require_password_length,user_account_emails,outbound_cid_any,entries_per_page,browser_call_alerts,inbound_answer_config,enable_international_dncs,daily_call_count_limit,allow_shared_dial,agent_search_method,admin_home_url,qc_claim_limit,qc_expire_days,two_factor_auth_hours,two_factor_container,call_limit_24hour,allowed_sip_stacks,agent_hide_hangup,allow_web_debug,max_logged_in_agents,user_codes_admin,abandon_check_queue,agent_notifications,demographic_quotas,inbound_credits,weekday_resets,two_factor_auth_agent_hours,hopper_hold_inserts FROM system_settings;";
$rslt=mysql_to_mysqli($stmt, $link);
#if ($DB) {echo "$stmt\n";}
$qm_conf_ct = mysqli_num_rows($rslt);
if ($qm_conf_ct > 0)
	{
	$row=mysqli_fetch_row($rslt);
	$non_latin =							$row[0];
	$SSenable_queuemetrics_logging =		$row[1];
	$SSenable_vtiger_integration =			$row[2];
	$SSqc_features_active =					$row[3];
	$SSoutbound_autodial_active =			$row[4];
	$SSsounds_central_control_active =		$row[5];
	$SSenable_second_webform =				$row[6];
	$SSuser_territories_active =			$row[7];
	$SScustom_fields_enabled =				$row[8];
	$SSadmin_web_directory =				$row[9];
	$SSwebphone_url =						$row[10];
	$SSfirst_login_trigger =				$row[11];
	$SShosted_settings =					$row[12];
	$SSdefault_phone_registration_password =$row[13];
	$SSdefault_phone_login_password =		$row[14];
	$SSdefault_server_password =			$row[15];
	$SStest_campaign_calls =				$row[16];
	$SSactive_voicemail_server =			$row[17];
	$SSvoicemail_timezones =				$row[18];
	$SSdefault_voicemail_timezone =			$row[19];
	$SSdefault_local_gmt =					$row[20];
	$SScampaign_cid_areacodes_enabled =		$row[21];
	$SSpllb_grouping_limit =				$row[22];
	$SSdid_ra_extensions_enabled =			$row[23];
	$SSexpanded_list_stats =				$row[24];
	$SScontacts_enabled =					$row[25];
	$SSalt_log_server_ip =					$row[26];
	$SSalt_log_dbname =						$row[27];
	$SSalt_log_login =						$row[28];
	$SSalt_log_pass =						$row[29];
	$SStables_use_alt_log_db =				$row[30];
	$SScall_menu_qualify_enabled =			$row[31];
	$SSadmin_list_counts =					$row[32];
	$SSallow_voicemail_greeting =			$row[33];
	$SSsvn_revision =						$row[34];
	$SSallow_emails =						$row[35];
	$SSlevel_8_disable_add =				$row[36];
	$SSpass_key =							$row[37];
	$SSpass_hash_enabled =					$row[38];
	$SSdisable_auto_dial =					$row[39];
	$SScountry_code_list_stats =			$row[40];
	$SSfrozen_server_call_clear =			$row[41];
	$SSactive_modules =						$row[42];
	$SSallow_chats =						$row[43];
	$SSenable_languages =					$row[44];
	$SSlanguage_method =					$row[45];
	$SSmeetme_enter_login_filename =		$row[46];
	$SSmeetme_enter_leave3way_filename =	$row[47];
	$SSenable_did_entry_list_id =			$row[48];
	$SSenable_third_webform =				$row[49];
	$SSdefault_language =					$row[50];
	$SSuser_hide_realtime_enabled =			$row[51];
	$SSlog_recording_access =				$row[52];
	$SSalt_ivr_logging =					$row[53];
	$SSadmin_row_click =					$row[54];
	$SSadmin_screen_colors =				$row[55];
	$SSofcom_uk_drop_calc =					$row[56];
	$SSagent_screen_colors =				$row[57];
	$SSscript_remove_js =					$row[58];
	$SSmanual_auto_next =					$row[59];
	$SSuser_new_lead_limit =				$row[60];
	$SSagent_xfer_park_3way =				$row[61];
	$SSagent_soundboards =					$row[62];
	$SSweb_loader_phone_length =			$row[63];
	$SSagent_script =						$row[64];
	$SSenable_auto_reports =				$row[65];
	$SSenable_pause_code_limits =			$row[66];
	$SSenable_drop_lists =					$row[67];
	$SSallow_ip_lists =						$row[68];
	$SSsystem_ip_blacklist =				$row[69];
	$SShide_inactive_lists =				$row[70];
	$SSallow_manage_active_lists =			$row[71];
	$SSexpired_lists_inactive =				$row[72];
	$SSdid_system_filter =					$row[73];
	$SSenable_gdpr_download_deletion =		$row[74];
	$SSmute_recordings =					$row[75];
	$SSuser_admin_redirect =				$row[76];
	$SSlist_status_modification_confirmation =	$row[77];
	$SSsip_event_logging =					$row[78];
	$SScall_quota_lead_ranking =			$row[79];
	$SSenable_second_script =				$row[80];
	$SSenable_first_webform =				$row[81];
	$SSrecording_buttons =					$row[82];
	$SSopensips_cid_name =					$row[83];
	$SSrequire_password_length =			$row[84];
	$SSuser_account_emails =				$row[85];
	$SSoutbound_cid_any =					$row[86];
	$SSentries_per_page =					$row[87];
	$SSbrowser_call_alerts =				$row[88];
	$SSinbound_answer_config =				$row[89];
	$SSenable_international_dncs =			$row[90];
	$SSdaily_call_count_limit =				$row[91];
	$SSallow_shared_dial =					$row[92];
	$SSagent_search_method =				$row[93];
	$SSadmin_home_url =						$row[94];
	$SSqc_claim_limit =						$row[95];
	$SSqc_expire_days =						$row[96];
	$SStwo_factor_auth_hours =				$row[97];
	$SStwo_factor_container =				$row[98];
	$SScall_limit_24hour =					$row[99];
	$SSallowed_sip_stacks =					$row[100];
	$SSagent_hide_hangup =					$row[101];
	$SSallow_web_debug =					$row[102];
	$SSmax_logged_in_agents =				$row[103];
	$SSuser_codes_admin =					$row[104];
	$SSabandon_check_queue =				$row[105];
	$SSagent_notifications =				$row[106];
	$SSdemographic_quotas =					$row[107];
	$SSinbound_credits =					$row[108];
	$SSweekday_resets =						$row[109];
	$SStwo_factor_auth_agent_hours =		$row[110];
	$SShopper_hold_inserts =				$row[111];
	}
if ($SSallow_web_debug < 1) {$DB=0;}
##### END SETTINGS LOOKUP #####
###########################################

### populate pass_key if not set
if ( ($qm_conf_ct > 0) and (strlen($SSpass_key)<16) )
	{
	$SSpass_key = '';
	$possible = "0123456789abcdefghijklmnpqrstvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ";  
	$i = 0; 
	$length = 16;
	while ($i < $length) 
		{ 
		$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
		$SSpass_key .= $char;
		$i++;
		}
	$stmt="UPDATE system_settings set pass_key='$SSpass_key' where ( (pass_key is NULL) or (pass_key='') );";
	if ($DB) {echo "|$stmt|\n";}
	$rslt=mysql_to_mysqli($stmt, $link);
	}
if ($non_latin > 0)
	{
	if (!mysqli_set_charset($link,"utf8")) {printf("Error loading character set utf8: %s\n", mysqli_error());}
#	else {printf("Current character set: %s\n", mysqli_character_set_name($link));}
	$rslt=mysql_to_mysqli("SET NAMES 'UTF8'", $link);
	}

######################################################################################################
######################################################################################################
#######   Form variable filtering for security and data integrity
######################################################################################################
######################################################################################################

### DIGITS ONLY ###
$adaptive_latest_server_time = preg_replace('/[^0-9]/','',$adaptive_latest_server_time);
$admin_hangup_enabled = preg_replace('/[^0-9]/','',$admin_hangup_enabled);
$admin_hijack_enabled = preg_replace('/[^0-9]/','',$admin_hijack_enabled);
$admin_monitor_enabled = preg_replace('/[^0-9]/','',$admin_monitor_enabled);
$AFLogging_enabled = preg_replace('/[^0-9]/','',$AFLogging_enabled);
$agent_choose_ingroups = preg_replace('/[^0-9]/','',$agent_choose_ingroups);
$agentcall_manual = preg_replace('/[^0-9]/','',$agentcall_manual);
$agentonly_callbacks = preg_replace('/[^0-9]/','',$agentonly_callbacks);
$AGI_call_logging_enabled = preg_replace('/[^0-9]/','',$AGI_call_logging_enabled);
$allcalls_delay = preg_replace('/[^0-9]/','',$allcalls_delay);
$alter_agent_interface_options = preg_replace('/[^0-9]/','',$alter_agent_interface_options);
$answer_transfer_agent = preg_replace('/[^0-9]/','',$answer_transfer_agent);
$ast_admin_access = preg_replace('/[^0-9]/','',$ast_admin_access);
$ast_delete_phones = preg_replace('/[^0-9]/','',$ast_delete_phones);
$attempt_delay = preg_replace('/[^0-9]/','',$attempt_delay);
$attempt_maximum = preg_replace('/[^0-9]/','',$attempt_maximum);
$auto_dial_next_number = preg_replace('/[^0-9]/','',$auto_dial_next_number);
$balance_trunks_offlimits = preg_replace('/[^0-9]/','',$balance_trunks_offlimits);
$call_parking_enabled = preg_replace('/[^0-9]/','',$call_parking_enabled);
$CallerID_popup_enabled = preg_replace('/[^0-9]/','',$CallerID_popup_enabled);
$campaign_detail = preg_replace('/[^0-9]/','',$campaign_detail);
$campaign_rec_exten = preg_replace('/[^0-9]/','',$campaign_rec_exten);
$campaign_vdad_exten = preg_replace('/[^0-9]/','',$campaign_vdad_exten);
$change_agent_campaign = preg_replace('/[^0-9]/','',$change_agent_campaign);
$closer_default_blended = preg_replace('/[^0-9]/','',$closer_default_blended);
$conf_exten = preg_replace('/[^0-9]/','',$conf_exten);
$conf_on_extension = preg_replace('/[^0-9]/','',$conf_on_extension);
$conferencing_enabled = preg_replace('/[^0-9]/','',$conferencing_enabled);
$ct_default_start = preg_replace('/[^0-9]/','',$ct_default_start);
$ct_default_stop = preg_replace('/[^0-9]/','',$ct_default_stop);
$ct_friday_start = preg_replace('/[^0-9]/','',$ct_friday_start);
$ct_friday_stop = preg_replace('/[^0-9]/','',$ct_friday_stop);
$ct_monday_start = preg_replace('/[^0-9]/','',$ct_monday_start);
$ct_monday_stop = preg_replace('/[^0-9]/','',$ct_monday_stop);
$ct_saturday_start = preg_replace('/[^0-9]/','',$ct_saturday_start);
$ct_saturday_stop = preg_replace('/[^0-9]/','',$ct_saturday_stop);
$ct_sunday_start = preg_replace('/[^0-9]/','',$ct_sunday_start);
$ct_sunday_stop = preg_replace('/[^0-9]/','',$ct_sunday_stop);
$ct_thursday_start = preg_replace('/[^0-9]/','',$ct_thursday_start);
$ct_thursday_stop = preg_replace('/[^0-9]/','',$ct_thursday_stop);
$ct_tuesday_start = preg_replace('/[^0-9]/','',$ct_tuesday_start);
$ct_tuesday_stop = preg_replace('/[^0-9]/','',$ct_tuesday_stop);
$ct_wednesday_start = preg_replace('/[^0-9]/','',$ct_wednesday_start);
$ct_wednesday_stop = preg_replace('/[^0-9]/','',$ct_wednesday_stop);
$DBX_port = preg_replace('/[^0-9]/','',$DBX_port);
$DBY_port = preg_replace('/[^0-9]/','',$DBY_port);
$dedicated_trunks = preg_replace('/[^0-9]/','',$dedicated_trunks);
$delete_call_times = preg_replace('/[^0-9]/','',$delete_call_times);
$delete_campaigns = preg_replace('/[^0-9]/','',$delete_campaigns);
$delete_filters = preg_replace('/[^0-9]/','',$delete_filters);
$delete_ingroups = preg_replace('/[^0-9]/','',$delete_ingroups);
$delete_lists = preg_replace('/[^0-9]/','',$delete_lists);
$delete_remote_agents = preg_replace('/[^0-9]/','',$delete_remote_agents);
$delete_scripts = preg_replace('/[^0-9]/','',$delete_scripts);
$delete_user_groups = preg_replace('/[^0-9]/','',$delete_user_groups);
$delete_users = preg_replace('/[^0-9]/','',$delete_users);
$dial_timeout = preg_replace('/[^0-9]/','',$dial_timeout);
$dialplan_number = preg_replace('/[^0-9]/','',$dialplan_number);
$enable_fast_refresh = preg_replace('/[^0-9]/','',$enable_fast_refresh);
$enable_persistant_mysql = preg_replace('/[^0-9]/','',$enable_persistant_mysql);
$fast_refresh_rate = preg_replace('/[^0-9]/','',$fast_refresh_rate);
$hopper_level = preg_replace('/[^0-9]/','',$hopper_level);
$hotkey = preg_replace('/[^0-9]/','',$hotkey);
$hotkeys_active = preg_replace('/[^0-9]/','',$hotkeys_active);
$list_id = preg_replace('/[^0-9]/','',$list_id);
$load_leads = preg_replace('/[^0-9]/','',$load_leads);
$max_vicidial_trunks = preg_replace('/[^0-9]/','',$max_vicidial_trunks);
$modify_call_times = preg_replace('/[^0-9]/','',$modify_call_times);
$modify_users = preg_replace('/[^0-9]/','',$modify_users);
$modify_campaigns = preg_replace('/[^0-9]/','',$modify_campaigns);
$modify_lists = preg_replace('/[^0-9]/','',$modify_lists);
$modify_scripts = preg_replace('/[^0-9]/','',$modify_scripts);
$modify_filters = preg_replace('/[^0-9]/','',$modify_filters);
$modify_ingroups = preg_replace('/[^0-9]/','',$modify_ingroups);
$modify_usergroups = preg_replace('/[^0-9]/','',$modify_usergroups);
$modify_remoteagents = preg_replace('/[^0-9]/','',$modify_remoteagents);
$modify_servers = preg_replace('/[^0-9]/','',$modify_servers);
$view_reports = preg_replace('/[^0-9]/','',$view_reports);
$modify_leads = preg_replace('/[^0-9]/','',$modify_leads);
$export_gdpr_leads = preg_replace('/[^0-9]/','',$export_gdpr_leads);
$monitor_prefix = preg_replace('/[^0-9]/','',$monitor_prefix);
$new_dialplan_number = preg_replace('/[^0-9]/','',$new_dialplan_number);
$new_outbound_cid = preg_replace('/[^0-9]/','',$new_outbound_cid);
$number_of_lines = preg_replace('/[^0-9]/','',$number_of_lines);
$old_conf_exten = preg_replace('/[^0-9]/','',$old_conf_exten);
$outbound_cid = preg_replace('/[^0-9]/','',$outbound_cid);
$park_ext = preg_replace('/[^0-9]/','',$park_ext);
$park_on_extension = preg_replace('/[^0-9]/','',$park_on_extension);
$phone_number = preg_replace('/[^0-9]/','',$phone_number);
$QUEUE_ACTION_enabled = preg_replace('/[^0-9]/','',$QUEUE_ACTION_enabled);
$recording_exten = preg_replace('/[^0-9]/','',$recording_exten);
$remote_agent_id = preg_replace('/[^0-9]/','',$remote_agent_id);
$telnet_port = preg_replace('/[^0-9]/','',$telnet_port);
$updater_check_enabled = preg_replace('/[^0-9]/','',$updater_check_enabled);
$user_level = preg_replace('/[^0-9]/','',$user_level);
$user_switching_enabled = preg_replace('/[^0-9]/','',$user_switching_enabled);
$VDstop_rec_after_each_call = preg_replace('/[^0-9]/','',$VDstop_rec_after_each_call);
$VICIDIAL_park_on_extension = preg_replace('/[^0-9]/','',$VICIDIAL_park_on_extension);
$vicidial_recording = preg_replace('/[^0-9]/','',$vicidial_recording);
$vicidial_transfers = preg_replace('/[^0-9]/','',$vicidial_transfers);
$voicemail_button_enabled = preg_replace('/[^0-9]/','',$voicemail_button_enabled);
$voicemail_dump_exten = preg_replace('/[^0-9]/','',$voicemail_dump_exten);
$voicemail_dump_exten_no_inst = preg_replace('/[^0-9]/','',$voicemail_dump_exten_no_inst);
$voicemail_exten = preg_replace('/[^0-9]/','',$voicemail_exten);
$wrapup_seconds = preg_replace('/[^0-9]/','',$wrapup_seconds);
$use_non_latin = preg_replace('/[^0-9]/','',$use_non_latin);
$webroot_writable = preg_replace('/[^0-9]/','',$webroot_writable);
$enable_queuemetrics_logging = preg_replace('/[^0-9]/','',$enable_queuemetrics_logging);
$enable_sipsak_messages = preg_replace('/[^0-9]/','',$enable_sipsak_messages);
$allow_sipsak_messages = preg_replace('/[^0-9]/','',$allow_sipsak_messages);
$mix_container_item = preg_replace('/[^0-9]/','',$mix_container_item);
$prompt_interval = preg_replace('/[^0-9]/','',$prompt_interval);
$agent_alert_delay = preg_replace('/[^0-9]/','',$agent_alert_delay);
$manual_dial_list_id = preg_replace('/[^0-9]/','',$manual_dial_list_id);
$qc_user_level = preg_replace('/[^0-9]/','',$qc_user_level);
$qc_pass = preg_replace('/[^0-9]/','',$qc_pass);
$qc_finish = preg_replace('/[^0-9]/','',$qc_finish);
$qc_commit = preg_replace('/[^0-9]/','',$qc_commit);
$shift_start_time = preg_replace('/[^0-9]/','',$shift_start_time);
$timeclock_end_of_day = preg_replace('/[^0-9]/','',$timeclock_end_of_day);
$survey_xfer_exten = preg_replace('/[^0-9]/','',$survey_xfer_exten);
$add_timeclock_log = preg_replace('/[^0-9]/','',$add_timeclock_log);
$modify_timeclock_log = preg_replace('/[^0-9]/','',$modify_timeclock_log);
$delete_timeclock_log = preg_replace('/[^0-9]/','',$delete_timeclock_log);
$vdc_agent_api_access = preg_replace('/[^0-9]/','',$vdc_agent_api_access);
$vdc_agent_api_active = preg_replace('/[^0-9]/','',$vdc_agent_api_active);
$hold_time_option_seconds = preg_replace('/[^0-9]/','',$hold_time_option_seconds);
$hold_time_option_callback_list_id = preg_replace('/[^0-9]/','',$hold_time_option_callback_list_id);
$source_did = preg_replace('/[^0-9]/','',$source_did);
$modify_inbound_dids = preg_replace('/[^0-9]/','',$modify_inbound_dids);
$delete_inbound_dids = preg_replace('/[^0-9]/','',$delete_inbound_dids);
$answer_sec_pct_rt_stat_one = preg_replace('/[^0-9]/','',$answer_sec_pct_rt_stat_one);
$answer_sec_pct_rt_stat_two = preg_replace('/[^0-9]/','',$answer_sec_pct_rt_stat_two);
$enable_vtiger_integration = preg_replace('/[^0-9]/','',$enable_vtiger_integration);
$qc_features_active = preg_replace('/[^0-9]/','',$qc_features_active);
$outbound_autodial_active = preg_replace('/[^0-9]/','',$outbound_autodial_active);
$download_lists = preg_replace('/[^0-9]/','',$download_lists);
$caller_id_number = preg_replace('/[^0-9]/','',$caller_id_number);
$outbound_calls_per_second = preg_replace('/[^0-9]/','',$outbound_calls_per_second);
$manager_shift_enforcement_override = preg_replace('/[^0-9]/','',$manager_shift_enforcement_override);
$export_reports = preg_replace('/[^0-9]/','',$export_reports);
$delete_from_dnc = preg_replace('/[^0-9]/','',$delete_from_dnc);
$menu_timeout = preg_replace('/[^0-9]/','',$menu_timeout);
$menu_time_check = preg_replace('/[^0-9]/','',$menu_time_check);
$track_in_vdac = preg_replace('/[^0-9]/','',$track_in_vdac);
$menu_repeat = preg_replace('/[^0-9]/','',$menu_repeat);
$agentonly_callback_campaign_lock = preg_replace('/[^0-9]/','',$agentonly_callback_campaign_lock);
$sounds_central_control_active = preg_replace('/[^0-9]/','',$sounds_central_control_active);
$user_territories_active = preg_replace('/[^0-9]/','',$user_territories_active);
$vicidial_recording_limit = preg_replace('/[^0-9]/','',$vicidial_recording_limit);
$allow_custom_dialplan = preg_replace('/[^0-9]/','',$allow_custom_dialplan);
$phone_ring_timeout = preg_replace('/[^0-9]/','',$phone_ring_timeout);
$enable_tts_integration = preg_replace('/[^0-9]/','',$enable_tts_integration);
$allow_alerts = preg_replace('/[^0-9]/','',$allow_alerts);
$vicidial_balance_rank = preg_replace('/[^0-9]/','',$vicidial_balance_rank);
$rank = preg_replace('/[^0-9]/','',$rank);
$enable_second_webform = preg_replace('/[^0-9]/','',$enable_second_webform);
$campaign_cid_override = preg_replace('/[^0-9]/','',$campaign_cid_override);
$agent_choose_territories = preg_replace('/[^0-9]/','',$agent_choose_territories);
$timer_action_seconds = preg_replace('/[^0-9]/','',$timer_action_seconds);
$default_webphone = preg_replace('/[^0-9]/','',$default_webphone);
$default_external_server_ip = preg_replace('/[^0-9]/','',$default_external_server_ip);
$enable_agc_xfer_log = preg_replace('/[^0-9]/','',$enable_agc_xfer_log);
$enable_agc_dispo_log = preg_replace('/[^0-9]/','',$enable_agc_dispo_log);
$callcard_enabled = preg_replace('/[^0-9]/','',$callcard_enabled);
$callcard_admin = preg_replace('/[^0-9]/','',$callcard_admin);
$extension_id = preg_replace('/[^0-9]/','',$extension_id);
$agent_choose_blended = preg_replace('/[^0-9]/','',$agent_choose_blended);
$realtime_block_user_info = preg_replace('/[^0-9]/','',$realtime_block_user_info);
$codecs_with_template = preg_replace('/[^0-9]/','',$codecs_with_template);
$custom_fields_modify = preg_replace('/[^0-9]/','',$custom_fields_modify);
$hold_time_option_minimum = preg_replace('/[^0-9]/','',$hold_time_option_minimum);
$onhold_prompt_seconds = preg_replace('/[^0-9]/','',$onhold_prompt_seconds);
$hold_time_option_prompt_seconds = preg_replace('/[^0-9]/','',$hold_time_option_prompt_seconds);
$custom_fields_enabled = preg_replace('/[^0-9]/','',$custom_fields_enabled);
$wait_time_option_seconds = preg_replace('/[^0-9]/','',$wait_time_option_seconds);
$wait_time_option_callback_list_id = preg_replace('/[^0-9]/','',$wait_time_option_callback_list_id);
$wait_time_option_prompt_seconds = preg_replace('/[^0-9]/','',$wait_time_option_prompt_seconds);
$filter_list_id = preg_replace('/[^0-9]/','',$filter_list_id);
$calculate_estimated_hold_seconds = preg_replace('/[^0-9]/','',$calculate_estimated_hold_seconds);
$customer_3way_hangup_seconds = preg_replace('/[^0-9]/','',$customer_3way_hangup_seconds);
$eht_minimum_prompt_seconds = preg_replace('/[^0-9]/','',$eht_minimum_prompt_seconds);
$admin_modify_refresh = preg_replace('/[^0-9]/','',$admin_modify_refresh);
$nocache_admin = preg_replace('/[^0-9]/','',$nocache_admin);
$generate_cross_server_exten = preg_replace('/[^0-9]/','',$generate_cross_server_exten);
$queuemetrics_addmember_enabled = preg_replace('/[^0-9]/','',$queuemetrics_addmember_enabled);
$modify_page = preg_replace('/[^0-9]/','',$modify_page);
$on_hook_ring_time = preg_replace('/[^0-9]/','',$on_hook_ring_time);
$reload_dialplan_on_servers = preg_replace('/[^0-9]/','',$reload_dialplan_on_servers);
$available_only_tally_threshold_agents = preg_replace('/[^0-9]/','',$available_only_tally_threshold_agents);
$incall_tally_threshold_seconds = preg_replace('/[^0-9]/','',$incall_tally_threshold_seconds);
$dial_level_threshold_agents = preg_replace('/[^0-9]/','',$dial_level_threshold_agents);
$dtmf_log = preg_replace('/[^0-9]/','',$dtmf_log);
$callback_days_limit = preg_replace('/[^0-9]/','',$callback_days_limit);
$queuemetrics_pe_phone_append = preg_replace('/[^0-9]/','',$queuemetrics_pe_phone_append);
$test_campaign_calls = preg_replace('/[^0-9]/','',$test_campaign_calls);
$agents_calls_reset = preg_replace('/[^0-9]/','',$agents_calls_reset);
$campaign_cid_areacodes_enabled = preg_replace('/[^0-9]/','',$campaign_cid_areacodes_enabled);
$pllb_grouping_limit = preg_replace('/[^0-9]/','',$pllb_grouping_limit);
$did_ra_extensions_enabled = preg_replace('/[^0-9]/','',$did_ra_extensions_enabled);
$modify_shifts = preg_replace('/[^0-9]/','',$modify_shifts);
$modify_phones = preg_replace('/[^0-9]/','',$modify_phones);
$modify_carriers = preg_replace('/[^0-9]/','',$modify_carriers);
$modify_labels = preg_replace('/[^0-9]/','',$modify_labels);
$modify_colors = preg_replace('/[^0-9]/','',$modify_colors);
$modify_statuses = preg_replace('/[^0-9]/','',$modify_statuses);
$modify_voicemail = preg_replace('/[^0-9]/','',$modify_voicemail);
$modify_audiostore = preg_replace('/[^0-9]/','',$modify_audiostore);
$modify_moh = preg_replace('/[^0-9]/','',$modify_moh);
$modify_tts = preg_replace('/[^0-9]/','',$modify_tts);
$call_count_limit = preg_replace('/[^0-9]/','',$call_count_limit);
$call_count_target = preg_replace('/[^0-9]/','',$call_count_target);
$expanded_list_stats = preg_replace('/[^0-9]/','',$expanded_list_stats);
$contacts_enabled = preg_replace('/[^0-9]/','',$contacts_enabled);
$contact_id = preg_replace('/[^0-9]/','',$contact_id);
$office_num = preg_replace('/[^0-9]/','',$office_num);
$cell_num = preg_replace('/[^0-9]/','',$cell_num);
$other_num1 = preg_replace('/[^0-9]/','',$other_num1);
$other_num2 = preg_replace('/[^0-9]/','',$other_num2);
$modify_contacts = preg_replace('/[^0-9]/','',$modify_contacts);
$callback_hours_block = preg_replace('/[^0-9]/','',$callback_hours_block);
$modify_same_user_level = preg_replace('/[^0-9]/','',$modify_same_user_level);
$admin_hide_lead_data = preg_replace('/[^0-9]/','',$admin_hide_lead_data);
$max_calls_count = preg_replace('/[^0-9]/','',$max_calls_count);
$report_rank = preg_replace('/[^0-9]/','',$report_rank);
$dial_ingroup_cid = preg_replace('/[^0-9]/','',$dial_ingroup_cid);
$call_menu_qualify_enabled = preg_replace('/[^0-9]/','',$call_menu_qualify_enabled);
$admin_list_counts = preg_replace('/[^0-9]/','',$admin_list_counts);
$allow_voicemail_greeting = preg_replace('/[^0-9]/','',$allow_voicemail_greeting);
$enhanced_disconnect_logging = preg_replace('/[^0-9]/','',$enhanced_disconnect_logging);
$level_8_disable_add = preg_replace('/[^0-9]/','',$level_8_disable_add);
$survey_wait_sec = preg_replace('/[^0-9]/','',$survey_wait_sec);
$queuemetrics_record_hold = preg_replace('/[^0-9]/','',$queuemetrics_record_hold);
$country_code_list_stats = preg_replace('/[^0-9]/','',$country_code_list_stats);
$dead_max = preg_replace('/[^0-9]/','',$dead_max);
$dispo_max = preg_replace('/[^0-9]/','',$dispo_max);
$pause_max = preg_replace('/[^0-9]/','',$pause_max);
$alter_admin_interface_options = preg_replace('/[^0-9]/','',$alter_admin_interface_options);
$max_inbound_calls = preg_replace('/[^0-9]/','',$max_inbound_calls);
$modify_custom_dialplans = preg_replace('/[^0-9]/','',$modify_custom_dialplans);
$queuemetrics_pause_type = preg_replace('/[^0-9]/','',$queuemetrics_pause_type);
$frozen_server_call_clear = preg_replace('/[^0-9]/','',$frozen_server_call_clear);
$callback_time_24hour = preg_replace('/[^0-9]/','',$callback_time_24hour);
$callback_active_limit = preg_replace('/[^0-9]/','',$callback_active_limit);
$modify_languages = preg_replace('/[^0-9]/','',$modify_languages);
$enable_languages = preg_replace('/[^0-9]/','',$enable_languages);
$user_choose_language = preg_replace('/[^0-9]/','',$user_choose_language);
$ignore_group_on_search = preg_replace('/[^0-9]/','',$ignore_group_on_search);
$enable_did_entry_list_id = preg_replace('/[^0-9]/','',$enable_did_entry_list_id);
$entry_list_id = preg_replace('/[^0-9]/','',$entry_list_id);
$filter_entry_list_id = preg_replace('/[^0-9]/','',$filter_entry_list_id);
$enable_third_webform = preg_replace('/[^0-9]/','',$enable_third_webform);
$api_list_restrict = preg_replace('/[^0-9]/','',$api_list_restrict);
$customer_gone_seconds = preg_replace('/[^0-9]/','',$customer_gone_seconds);
$agent_whisper_enabled = preg_replace('/[^0-9]/','',$agent_whisper_enabled);
$admin_cf_show_hidden = preg_replace('/[^0-9]/','',$admin_cf_show_hidden);
$agentcall_chat = preg_replace('/[^0-9]/','',$agentcall_chat);
$user_hide_realtime_enabled = preg_replace('/[^0-9]/','',$user_hide_realtime_enabled);
$user_hide_realtime = preg_replace('/[^0-9]/','',$user_hide_realtime);
$min_sec = preg_replace('/[^0-9]/','',$min_sec);
$max_sec = preg_replace('/[^0-9]/','',$max_sec);
$usacan_phone_dialcode_fix = preg_replace('/[^0-9]/','',$usacan_phone_dialcode_fix);
$cache_carrier_stats_realtime = preg_replace('/[^0-9]/','',$cache_carrier_stats_realtime);
$nva_new_list_id = preg_replace('/[^0-9]/','',$nva_new_list_id);
$nva_new_phone_code = preg_replace('/[^0-9]/','',$nva_new_phone_code);
$manual_dial_timeout = preg_replace('/[^0-9]/','',$manual_dial_timeout);
$alt_ivr_logging = preg_replace('/[^0-9]/','',$alt_ivr_logging);
$question = preg_replace('/[^0-9]/','',$question);
$alt_dtmf_log = preg_replace('/[^0-9]/','',$alt_dtmf_log);
$callback_useronly_move_minutes = preg_replace('/[^0-9]/','',$callback_useronly_move_minutes);
$default_phone_code = preg_replace('/[^0-9]/','',$default_phone_code);
$admin_row_click = preg_replace('/[^0-9]/','',$admin_row_click);
$outbound_alt_cid = preg_replace('/[^0-9]/','',$outbound_alt_cid);
$script_remove_js = preg_replace('/[^0-9]/','',$script_remove_js);
$manual_auto_next = preg_replace('/[^0-9]/','',$manual_auto_next);
$agent_soundboards = preg_replace('/[^0-9]/','',$agent_soundboards);
$api_only_user = preg_replace('/[^0-9]/','',$api_only_user);
$areacode_filter_seconds = preg_replace('/[^0-9]/','',$areacode_filter_seconds);
$enable_auto_reports = preg_replace('/[^0-9]/','',$enable_auto_reports);
$modify_auto_reports = preg_replace('/[^0-9]/','',$modify_auto_reports);
$report_weekdays = preg_replace('/[^0-9]/','',$report_weekdays);
$enable_pause_code_limits = preg_replace('/[^0-9]/','',$enable_pause_code_limits);
$time_limit = preg_replace('/[^0-9]/','',$time_limit);
$enable_drop_lists = preg_replace('/[^0-9]/','',$enable_drop_lists);
$dl_weekdays = preg_replace('/[^0-9]/','',$dl_weekdays);
$allow_ip_lists = preg_replace('/[^0-9]/','',$allow_ip_lists);
$modify_ip_lists = preg_replace('/[^0-9]/','',$modify_ip_lists);
$ignore_ip_list = preg_replace('/[^0-9]/','',$ignore_ip_list);
$dl_minutes = preg_replace('/[^0-9]/','',$dl_minutes);
$callback_display_days = preg_replace('/[^0-9]/','',$callback_display_days);
$agent_push_events = preg_replace('/[^0-9]/','',$agent_push_events);
$hide_inactive_lists = preg_replace('/[^0-9]/','',$hide_inactive_lists);
$inbound_survey_accept_digit = preg_replace('/[^0-9]/','',$inbound_survey_accept_digit);
$allow_manage_active_lists = preg_replace('/[^0-9]/','',$allow_manage_active_lists);
$expired_lists_inactive = preg_replace('/[^0-9]/','',$expired_lists_inactive);
$enable_gdpr_download_deletion = preg_replace('/[^0-9]/','',$enable_gdpr_download_deletion);
$did_system_filter = preg_replace('/[^0-9]/','',$did_system_filter);
$icbq_expiration_hours = preg_replace('/[^0-9]/','',$icbq_expiration_hours);
$source_id_display = preg_replace('/[^0-9]/','',$source_id_display);
$pause_code_approval = preg_replace('/[^0-9]/','',$pause_code_approval);
$max_hopper_calls = preg_replace('/[^0-9]/','',$max_hopper_calls);
$max_hopper_calls_hour = preg_replace('/[^0-9]/','',$max_hopper_calls_hour);
$agent_logout_link = preg_replace('/[^0-9]/','',$agent_logout_link);
$user_admin_redirect = preg_replace('/[^0-9]/','',$user_admin_redirect);
$list_status_modification_confirmation = preg_replace('/[^0-9]/','',$list_status_modification_confirmation);
$max_inbound_filter_enabled = preg_replace('/[^0-9]/','',$max_inbound_filter_enabled);
$enable_second_script = preg_replace('/[^0-9]/','',$enable_second_script);
$time_start = preg_replace('/[^0-9]/','',$time_start);
$time_end = preg_replace('/[^0-9]/','',$time_end);
$enable_first_webform = preg_replace('/[^0-9]/','',$enable_first_webform);
$vmm_daily_limit = preg_replace('/[^0-9]/','',$vmm_daily_limit);
$cid_auto_rotate_minutes = preg_replace('/[^0-9]/','',$cid_auto_rotate_minutes);
$cid_auto_rotate_minimum = preg_replace('/[^0-9]/','',$cid_auto_rotate_minimum);
$require_password_length = preg_replace('/[^0-9]/','',$require_password_length);
$entries_per_page = preg_replace('/[^0-9]/','',$entries_per_page);
$start_count = preg_replace('/[^0-9]/','',$start_count);
$browser_call_alerts = preg_replace('/[^0-9]/','',$browser_call_alerts);
$browser_alert_volume = preg_replace('/[^0-9]/','',$browser_alert_volume);
$inbound_answer_config = preg_replace('/[^0-9]/','',$inbound_answer_config);
$enable_international_dncs = preg_replace('/[^0-9]/','',$enable_international_dncs);
$daily_call_count_limit = preg_replace('/[^0-9]/','',$daily_call_count_limit);
$allow_shared_dial = preg_replace('/[^0-9]/','',$allow_shared_dial);
$shared_dial_rank = preg_replace('/[^0-9]/','',$shared_dial_rank);
$qc_claim_limit = preg_replace('/[^0-9]/','',$qc_claim_limit);
$qc_expire_days = preg_replace('/[^0-9]/','',$qc_expire_days);
$auth_entry = preg_replace('/[^0-9]/','',$auth_entry);
$agent_hidden_sound_volume = preg_replace('/[^0-9]/','',$agent_hidden_sound_volume);
$agent_hidden_sound_seconds = preg_replace('/[^0-9]/','',$agent_hidden_sound_seconds);
$in_man_dial_next_ready_seconds = preg_replace('/[^0-9]/','',$in_man_dial_next_ready_seconds);
$call_limit_24hour = preg_replace('/[^0-9]/','',$call_limit_24hour);
$download_invalid_files = preg_replace('/[^0-9]/','',$download_invalid_files);
$modify_email_accounts = preg_replace('/[^0-9]/','',$modify_email_accounts);
$access_recordings = preg_replace('/[^0-9]/','',$access_recordings);
$agentcall_email = preg_replace('/[^0-9]/','',$agentcall_email);
$allow_web_debug = preg_replace('/[^0-9]/','',$allow_web_debug);
$force_logout = preg_replace('/[^0-9]/','',$force_logout);
$log_recording_access = preg_replace('/[^0-9]/','',$log_recording_access);
$dial_level_override = preg_replace('/[^0-9]/','',$dial_level_override);
$conf_update_interval = preg_replace('/[^0-9]/','',$conf_update_interval);
$login_kickall = preg_replace('/[^0-9]/','',$login_kickall);
$agent_notifications = preg_replace('/[^0-9]/','',$agent_notifications);
$modify_dial_prefix = preg_replace('/[^0-9]/','',$modify_dial_prefix);
$weekday_resets = preg_replace('/[^0-9]/','',$weekday_resets);
$second_alert_trigger_seconds = preg_replace('/[^0-9]/','',$second_alert_trigger_seconds);
$second_alert_delay = preg_replace('/[^0-9]/','',$second_alert_delay);
$third_alert_trigger_seconds = preg_replace('/[^0-9]/','',$third_alert_trigger_seconds);
$third_alert_delay = preg_replace('/[^0-9]/','',$third_alert_delay);
$agent_search_list = preg_replace('/[^0-9]/','',$agent_search_list);
$hci_enabled = preg_replace('/[^0-9]/','',$hci_enabled);
$daily_phone_number_call_limit = preg_replace('/[^0-9]/','',$daily_phone_number_call_limit);

$user_new_lead_limit = preg_replace('/[^-0-9]/','',$user_new_lead_limit);
$drop_call_seconds = preg_replace('/[^-0-9]/','',$drop_call_seconds);
$timer_alt_seconds = preg_replace('/[^-0-9]/','',$timer_alt_seconds);
$wrapup_seconds_override = preg_replace('/[^-0-9]/','',$wrapup_seconds_override);
$max_queue_ingroup_calls = preg_replace('/[^-0-9]/','',$max_queue_ingroup_calls);
$ready_max_logout = preg_replace('/[^-0-9]/','',$ready_max_logout);
$inbound_no_agents_no_dial_threshold = preg_replace('/[^-0-9]/','',$inbound_no_agents_no_dial_threshold);
$dead_trigger_seconds = preg_replace('/[^-0-9]/','',$dead_trigger_seconds);
$cid_cb_valid_length = preg_replace('/[^-0-9]/','',$cid_cb_valid_length);
$daily_reset_limit = preg_replace('/[^-0-9]/','',$daily_reset_limit);
$auto_active_list_rank = preg_replace('/[^-0-9]/','',$auto_active_list_rank);
$max_inbound_filter_min_sec = preg_replace('/[^-0-9]/','',$max_inbound_filter_min_sec);
$no_agent_delay = preg_replace('/[^-0-9]/','',$no_agent_delay);
$two_factor_auth_hours = preg_replace('/[^-0-9]/','',$two_factor_auth_hours);
$two_factor_auth_agent_hours = preg_replace('/[^-0-9]/','',$two_factor_auth_agent_hours);
$auto_alt_threshold = preg_replace('/[^-0-9]/','',$auto_alt_threshold);
$inbound_credits = preg_replace('/[^-0-9]/','',$inbound_credits);

### DIGITS and COLONS
$shift_length = preg_replace('/[^\:0-9]/','',$shift_length);

### DIGITS and HASHES and STARS
$survey_dtmf_digits = preg_replace('/[^\#\*0-9]/','',$survey_dtmf_digits);
$survey_ni_digit = preg_replace('/[^\#\*0-9]/','',$survey_ni_digit);

### DIGITS and DASHES
$group_rank = preg_replace('/[^-0-9]/','',$group_rank);
$campaign_rank = preg_replace('/[^-0-9]/','',$campaign_rank);
$queue_priority = preg_replace('/[^-0-9]/','',$queue_priority);

### Y or N ONLY ###
$allow_closers = preg_replace('/[^NY]/','',$allow_closers);
$reset_hopper = preg_replace('/[^NY]/','',$reset_hopper);
$amd_send_to_vmx = preg_replace('/[^NY]/','',$amd_send_to_vmx);
$selectable = preg_replace('/[^NY]/','',$selectable);
$reset_list = preg_replace('/[^NY]/','',$reset_list);
$fronter_display = preg_replace('/[^NY]/','',$fronter_display);
$omit_phone_code = preg_replace('/[^NY]/','',$omit_phone_code);
$available_only_ratio_tally = preg_replace('/[^NY]/','',$available_only_ratio_tally);
$sys_perf_log = preg_replace('/[^NY]/','',$sys_perf_log);
$vicidial_balance_active = preg_replace('/[^NY]/','',$vicidial_balance_active);
$vd_server_logs = preg_replace('/[^NY]/','',$vd_server_logs);
$campaign_stats_refresh = preg_replace('/[^NY]/','',$campaign_stats_refresh);
$disable_alter_custdata = preg_replace('/[^NY]/','',$disable_alter_custdata);
$no_hopper_leads_logins = preg_replace('/[^NY]/','',$no_hopper_leads_logins);
$human_answered = preg_replace('/[^NY]/','',$human_answered);
$tovdad_display = preg_replace('/[^NY]/','',$tovdad_display);
$campaign_allow_inbound = preg_replace('/[^NY]/','',$campaign_allow_inbound);
$old_campaign_allow_inbound = preg_replace('/[^NY]/','',$old_campaign_allow_inbound);
$display_queue_count = preg_replace('/[^NY]/','',$display_queue_count);
$qc_show_recording = preg_replace('/[^NY]/','',$qc_show_recording);
$sale_category = preg_replace('/[^NY]/','',$sale_category);
$dead_lead_category = preg_replace('/[^NY]/','',$dead_lead_category);
$agent_extended_alt_dial  = preg_replace('/[^NY]/','',$agent_extended_alt_dial);
$play_place_in_line  = preg_replace('/[^NY]/','',$play_place_in_line);
$play_estimate_hold_time  = preg_replace('/[^NY]/','',$play_estimate_hold_time);
$no_delay_call_route  = preg_replace('/[^NY]/','',$no_delay_call_route);
$did_active  = preg_replace('/[^NY]/','',$did_active);
$active_asterisk_server = preg_replace('/[^NY]/','',$active_asterisk_server);
$generate_vicidial_conf = preg_replace('/[^NY]/','',$generate_vicidial_conf);
$rebuild_conf_files = preg_replace('/[^NY]/','',$rebuild_conf_files);
$agent_allow_group_alias = preg_replace('/[^NY]/','',$agent_allow_group_alias);
$vtiger_status_call = preg_replace('/[^NY]/','',$vtiger_status_call);
$sale = preg_replace('/[^NY]/','',$sale);
$dnc = preg_replace('/[^NY]/','',$dnc);
$customer_contact = preg_replace('/[^NY]/','',$customer_contact);
$not_interested = preg_replace('/[^NY]/','',$not_interested);
$unworkable = preg_replace('/[^NY]/','',$unworkable);
$sounds_update = preg_replace('/[^NY]/','',$sounds_update);
$carrier_logging_active = preg_replace('/[^NY]/','',$carrier_logging_active);
$agent_status_view_time = preg_replace('/[^NY]/','',$agent_status_view_time);
$no_hopper_dialing = preg_replace('/[^NY]/','',$no_hopper_dialing);
$agent_display_dialable_leads = preg_replace('/[^NY]/','',$agent_display_dialable_leads);
$random = preg_replace('/[^NY]/','',$random);
$rebuild_music_on_hold = preg_replace('/[^NY]/','',$rebuild_music_on_hold);
$active_agent_login_server = preg_replace('/[^NY]/','',$active_agent_login_server);
$agent_select_territories = preg_replace('/[^NY]/','',$agent_select_territories);
$delete_vm_after_email = preg_replace('/[^NY]/','',$delete_vm_after_email);
$crm_popup_login = preg_replace('/[^NY]/','',$crm_popup_login);
$ignore_list_script_override = preg_replace('/[^NY]/','',$ignore_list_script_override);
$use_external_server_ip = preg_replace('/[^NY]/','',$use_external_server_ip);
$agent_xfer_consultative = preg_replace('/[^NY]/','',$agent_xfer_consultative);
$agent_xfer_dial_override = preg_replace('/[^NY]/','',$agent_xfer_dial_override);
$agent_xfer_vm_transfer = preg_replace('/[^NY]/','',$agent_xfer_vm_transfer);
$agent_xfer_blind_transfer = preg_replace('/[^NY]/','',$agent_xfer_blind_transfer);
$agent_xfer_dial_with_customer = preg_replace('/[^NY]/','',$agent_xfer_dial_with_customer);
$agent_xfer_park_customer_dial = preg_replace('/[^NY]/','',$agent_xfer_park_customer_dial);
$agent_fullscreen = preg_replace('/[^NY]/','',$agent_fullscreen);
$onhold_prompt_no_block = preg_replace('/[^NY]/','',$onhold_prompt_no_block);
$hold_time_option_no_block = preg_replace('/[^NY]/','',$hold_time_option_no_block);
$wait_time_option_no_block = preg_replace('/[^NY]/','',$wait_time_option_no_block);
$preset_hide_number = preg_replace('/[^NY]/','',$preset_hide_number);
$use_auto_hopper = preg_replace('/[^NY]/','',$use_auto_hopper);
$auto_trim_hopper = preg_replace('/[^NY]/','',$auto_trim_hopper);
$force_change_password = preg_replace('/[^NY]/','',$force_change_password);
$first_login_trigger = preg_replace('/[^NY]/','',$first_login_trigger);
$eht_minimum_prompt_no_block = preg_replace('/[^NY]/','',$eht_minimum_prompt_no_block);
$lead_order_randomize = preg_replace('/[^NY]/','',$lead_order_randomize);
$on_hook_agent = preg_replace('/[^NY]/','',$on_hook_agent);
$auto_pause_precall = preg_replace('/[^NY]/','',$auto_pause_precall);
$auto_resume_precall = preg_replace('/[^NY]/','',$auto_resume_precall);
$webphone_auto_answer = preg_replace('/[^NY]/','',$webphone_auto_answer);
$noanswer_log = preg_replace('/[^NY]/','',$noanswer_log);
$did_agent_log = preg_replace('/[^NY]/','',$did_agent_log);
$completed = preg_replace('/[^NY]/','',$completed);
$report_option = preg_replace('/[^NY]/','',$report_option);
$hopper_vlc_dup_check = preg_replace('/[^NY]/','',$hopper_vlc_dup_check);
$inventory_report = preg_replace('/[^NY]/','',$inventory_report);
$manual_dial_lead_id = preg_replace('/[^NY]/','',$manual_dial_lead_id);
$auto_restart_asterisk = preg_replace('/[^NY]/','',$auto_restart_asterisk);
$asterisk_temp_no_restart = preg_replace('/[^NY]/','',$asterisk_temp_no_restart);
$voicemail_instructions = preg_replace('/[^NY]/','',$voicemail_instructions);
$filter_url_did_redirect = preg_replace('/[^NY]/','',$filter_url_did_redirect);
$callback_active_limit_override = preg_replace('/[^NY]/','',$callback_active_limit_override);
$drop_lead_reset = preg_replace('/[^NY]/','',$drop_lead_reset);
$after_hours_lead_reset = preg_replace('/[^NY]/','',$after_hours_lead_reset);
$nanq_lead_reset = preg_replace('/[^NY]/','',$nanq_lead_reset);
$wait_time_lead_reset = preg_replace('/[^NY]/','',$wait_time_lead_reset);
$hold_time_lead_reset = preg_replace('/[^NY]/','',$hold_time_lead_reset);
$am_message_wildcards = preg_replace('/[^NY]/','',$am_message_wildcards);
$gather_asterisk_output = preg_replace('/[^NY]/','',$gather_asterisk_output);
$routing_initiated_recordings = preg_replace('/[^NY]/','',$routing_initiated_recordings);
$manual_dial_hopper_check = preg_replace('/[^NY]/','',$manual_dial_hopper_check);
$webphone_dialbox = preg_replace('/[^NY]/','',$webphone_dialbox);
$webphone_mute = preg_replace('/[^NY]/','',$webphone_mute);
$webphone_volume = preg_replace('/[^NY]/','',$webphone_volume);
$webphone_debug = preg_replace('/[^NY]/','',$webphone_debug);
$answering_machine = preg_replace('/[^NY]/','',$answering_machine);
$manual_auto_show = preg_replace('/[^NY]/','',$manual_auto_show);
$allow_required_fields = preg_replace('/[^NY]/','',$allow_required_fields);
$conf_qualify = preg_replace('/[^NY]/','',$conf_qualify);
$run_now_trigger = preg_replace('/[^NY]/','',$run_now_trigger);
$agent_xfer_validation = preg_replace('/[^NY]/','',$agent_xfer_validation);
$three_way_record_stop = preg_replace('/[^NY]/','',$three_way_record_stop);
$hangup_xfer_record_start = preg_replace('/[^NY]/','',$hangup_xfer_record_start);
$scheduled_callbacks_email_alert = preg_replace('/[^NY]/','',$scheduled_callbacks_email_alert);
$closing_time_now_trigger = preg_replace('/[^NY]/','',$closing_time_now_trigger);
$closing_time_lead_reset = preg_replace('/[^NY]/','',$closing_time_lead_reset);
$script_top_dispo = preg_replace('/[^NY]/','',$script_top_dispo);
$scheduled_callbacks_force_dial = preg_replace('/[^NY]/','',$scheduled_callbacks_force_dial);
$inbound_route_answer = preg_replace('/[^NY]/','',$inbound_route_answer);
$agent_hangup_ig_override = preg_replace('/[^NY]/','',$agent_hangup_ig_override);

$qc_enabled = preg_replace('/[^0-9NY]/','',$qc_enabled);
$active = preg_replace('/[^0-9NY]/','',$active);
$ofcom_uk_drop_calc = preg_replace('/[^0-9NY]/','',$ofcom_uk_drop_calc);
$agent_xfer_park_3way = preg_replace('/[^0-9NY]/','',$agent_xfer_park_3way);
$manual_dial_validation = preg_replace('/[^0-9NY]/','',$manual_dial_validation);

### ALPHACAPS-NUMERIC
$xferconf_a_number = preg_replace('/[^0-9A-Z]/','',$xferconf_a_number);
$xferconf_b_number = preg_replace('/[^0-9A-Z]/','',$xferconf_b_number);
$xferconf_c_number = preg_replace('/[^0-9A-Z]/','',$xferconf_c_number);
$xferconf_d_number = preg_replace('/[^0-9A-Z]/','',$xferconf_d_number);
$xferconf_e_number = preg_replace('/[^0-9A-Z]/','',$xferconf_e_number);

### DIGITS and Dots
$new_server_ip = preg_replace('/[^\.0-9]/','',$new_server_ip);
$server_ip = preg_replace('/[^\.0-9]/','',$server_ip);
$auto_dial_level = preg_replace('/[^\.0-9]/','',$auto_dial_level);
$adaptive_maximum_level = preg_replace('/[^\.0-9]/','',$adaptive_maximum_level);
$phone_ip = preg_replace('/[^\.0-9]/','',$phone_ip);
$old_server_ip = preg_replace('/[^\.0-9]/','',$old_server_ip);
$computer_ip = preg_replace('/[^\.0-9]/','',$computer_ip);
$queuemetrics_server_ip = preg_replace('/[^\.0-9]/','',$queuemetrics_server_ip);
$vtiger_server_ip = preg_replace('/[^\.0-9]/','',$vtiger_server_ip);
$active_voicemail_server = preg_replace('/[^\.0-9]/','',$active_voicemail_server);
$auto_dial_limit = preg_replace('/[^\.0-9]/','',$auto_dial_limit);
$adaptive_dropped_percentage = preg_replace('/[^\.0-9]/','',$adaptive_dropped_percentage);
$drop_lockout_time = preg_replace('/[^\.0-9]/','',$drop_lockout_time);
$filter_server_ip = preg_replace('/[^\.0-9]/','',$filter_server_ip);
$auto_hopper_multi = preg_replace('/[^\.0-9]/','',$auto_hopper_multi);

# Settings alphanumeric, dash, underscore
$daily_limit_manual = preg_replace('/[^-_0-9a-zA-Z]/','',$daily_limit_manual);
$transfer_button_launch = preg_replace('/[^-_0-9a-zA-Z]/','',$transfer_button_launch);
$two_factor_override = preg_replace('/[^-_0-9a-zA-Z]/','',$two_factor_override);
$clear_form = preg_replace('/[^-_0-9a-zA-Z]/','',$clear_form);
$agent_hidden_sound = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_hidden_sound);
$leave_3way_start_recording = preg_replace('/[^-_0-9a-zA-Z]/','',$leave_3way_start_recording);
$leave_3way_start_recording_exception = preg_replace('/[^-_0-9a-zA-Z]/','',$leave_3way_start_recording_exception);
$agent_screen_timer = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_screen_timer);
$hopper_drop_run_trigger = preg_replace('/[^0-9a-zA-Z]/','',$hopper_drop_run_trigger);
$hopper_drop_run_trigger_all = preg_replace('/[^0-9a-zA-Z]/','',$hopper_drop_run_trigger_all);
$calls_waiting_vl_one = preg_replace('/[^-_0-9a-zA-Z]/','',$calls_waiting_vl_one);
$calls_waiting_vl_two = preg_replace('/[^-_0-9a-zA-Z]/','',$calls_waiting_vl_two);
$transfer_no_dispo = preg_replace('/[^-_0-9a-zA-Z]/','',$transfer_no_dispo);
$allowed_sip_stacks = preg_replace('/[^-_0-9a-zA-Z]/','',$allowed_sip_stacks);
$in_queue_nanque = preg_replace('/[^-_0-9a-zA-Z]/','',$in_queue_nanque);
$reports_header_override = preg_replace('/[^-_0-9a-zA-Z]/','',$reports_header_override);
$agent_hide_hangup = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_hide_hangup);
$SUB = preg_replace('/[^-_0-9a-zA-Z]/','',$SUB);
$SUBMIT = preg_replace('/[^-_0-9a-zA-Z]/','',$SUBMIT);
$qc_display_group_type = preg_replace('/[^-_0-9a-zA-Z]/','',$qc_display_group_type);
$available_only_tally_threshold = preg_replace('/[^-_0-9a-zA-Z]/','',$available_only_tally_threshold);
$dial_level_threshold = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_level_threshold);
$form_end = preg_replace('/[^-_0-9a-zA-Z]/','',$form_end);
$download_max_system_stats_metric = preg_replace('/[^- \+_0-9a-zA-Z]/','',$download_max_system_stats_metric);
$download_max_system_stats_metric_name = preg_replace('/[^- \+_0-9a-zA-Z]/','',$download_max_system_stats_metric_name);
$chat_timeout = preg_replace('/[^-_0-9a-zA-Z]/','',$chat_timeout);
$manager_chat_id = preg_replace('/[^-\._0-9a-zA-Z]/','',$manager_chat_id);
$group_handling = preg_replace('/[^-_0-9a-zA-Z]/','',$group_handling);
$query_date = preg_replace('/[^-_0-9a-zA-Z]/','',$query_date);
$end_date = preg_replace('/[^-_0-9a-zA-Z]/','',$end_date);
$show_vm_on_summary = preg_replace('/[^-_0-9a-zA-Z]/','',$show_vm_on_summary);
$admin_screen_colors = preg_replace('/[^-_0-9a-zA-Z]/','',$admin_screen_colors);
$last_run = preg_replace('/[^-_0-9a-zA-Z]/','',$last_run);
$closing_time_option_xfer_group = preg_replace('/[^-_0-9a-zA-Z]/','',$closing_time_option_xfer_group);
$user_account_emails = preg_replace('/[^-_0-9a-zA-Z]/','',$user_account_emails);
$outbound_cid_any = preg_replace('/[^-_0-9a-zA-Z]/','',$outbound_cid_any);
$enable_xfer_presets = preg_replace('/[^0-9a-zA-Z]/','',$enable_xfer_presets);
$ig_xfer_list_sort = preg_replace('/[^-_0-9a-zA-Z]/','',$ig_xfer_list_sort);
$script_tab_frame_size = preg_replace('/[^-_0-9a-zA-Z]/','',$script_tab_frame_size);
$max_logged_in_agents = preg_replace('/[^-_0-9a-zA-Z]/','',$max_logged_in_agents);
$user_codes_admin = preg_replace('/[^-_0-9a-zA-Z]/','',$user_codes_admin);
$conf_engine = preg_replace('/[^-_0-9a-zA-Z]/','',$conf_engine);
$user_group_script = preg_replace('/[^-_0-9a-zA-Z]/','',$user_group_script);
$abandon_check_queue = preg_replace('/[^-_0-9a-zA-Z]/','',$abandon_check_queue);
$demographic_quotas_rerank = preg_replace('/[^-_0-9a-zA-Z]/','',$demographic_quotas_rerank);
$demographic_quotas_list_resets = preg_replace('/[^-_0-9a-zA-Z]/','',$demographic_quotas_list_resets);
$log_latency_gaps = preg_replace('/[^-_0-9a-zA-Z]/','',$log_latency_gaps);
$second_alert_trigger = preg_replace('/[^-_0-9a-zA-Z]/','',$second_alert_trigger);
$dead_stop_recording = preg_replace('/[^-_0-9a-zA-Z]/','',$dead_stop_recording);
$manual_vm_status_updates = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_vm_status_updates);
$force_per_call_notes = preg_replace('/[^-_0-9a-zA-Z]/','',$force_per_call_notes);
$third_alert_trigger = preg_replace('/[^-_0-9a-zA-Z]/','',$third_alert_trigger);
$agent_search_ingroup_list = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_search_ingroup_list);
$hopper_hold_inserts = preg_replace('/[^-_0-9a-zA-Z]/','',$hopper_hold_inserts);
$holiday_method = preg_replace('/[^-_0-9a-zA-Z]/','',$holiday_method);

if ($non_latin < 1)
	{
	### ALPHA-NUMERIC ONLY ###
	$is_webphone = preg_replace('/[^-_0-9a-zA-Z]/','',$is_webphone);
	$campaign_script = preg_replace('/[^0-9a-zA-Z]/','',$campaign_script);
	$submit = preg_replace('/[^0-9a-zA-Z]/','',$submit);
	$campaign_cid = preg_replace('/[^0-9a-zA-Z]/','',$campaign_cid);
	$campaign_recording = preg_replace('/[^0-9a-zA-Z]/','',$campaign_recording);
	$ADD = preg_replace('/[^0-9a-zA-Z]/','',$ADD);
	$dial_prefix = preg_replace('/[^0-9a-zA-Z]/','',$dial_prefix);
	$state_call_time_state = preg_replace('/[^0-9a-zA-Z]/','',$state_call_time_state);
	$scheduled_callbacks = preg_replace('/[^0-9a-zA-Z]/','',$scheduled_callbacks);
	$concurrent_transfers = preg_replace('/[^0-9a-zA-Z]/','',$concurrent_transfers);
	$billable = preg_replace('/[^0-9a-zA-Z]/','',$billable);
	$pause_code = preg_replace('/[^0-9a-zA-Z]/','',$pause_code);
	$vicidial_recording_override = preg_replace('/[^0-9a-zA-Z]/','',$vicidial_recording_override);
	$ingroup_recording_override = preg_replace('/[^0-9a-zA-Z]/','',$ingroup_recording_override);
	$queuemetrics_log_id = preg_replace('/[^0-9a-zA-Z]/','',$queuemetrics_log_id);
	$after_hours_exten = preg_replace('/[^0-9a-zA-Z]/','',$after_hours_exten);
	$after_hours_voicemail = preg_replace('/[^0-9a-zA-Z]/','',$after_hours_voicemail);
	$qc_script = preg_replace('/[^0-9a-zA-Z]/','',$qc_script);
	$code = preg_replace('/[^0-9a-zA-Z]/','',$code);
	$survey_no_response_action = preg_replace('/[^0-9a-zA-Z]/','',$survey_no_response_action);
	$survey_ni_status = preg_replace('/[^0-9a-zA-Z]/','',$survey_ni_status);
	$qc_get_record_launch = preg_replace('/[^0-9a-zA-Z]/','',$qc_get_record_launch);
	$agent_pause_codes_active = preg_replace('/[^0-9a-zA-Z]/','',$agent_pause_codes_active);
	$three_way_dial_prefix = preg_replace('/[^0-9a-zA-Z]/','',$three_way_dial_prefix);
	$agent_shift_enforcement_override = preg_replace('/[^0-9a-zA-Z]/','',$agent_shift_enforcement_override);
	$survey_third_status = preg_replace('/[^0-9a-zA-Z]/','',$survey_third_status);
	$survey_fourth_status = preg_replace('/[^0-9a-zA-Z]/','',$survey_fourth_status);
	$sounds_web_directory = preg_replace('/[^0-9a-zA-Z]/','',$sounds_web_directory);
	$disable_alter_custphone = preg_replace('/[^0-9a-zA-Z]/','',$disable_alter_custphone);
	$view_calls_in_queue = preg_replace('/[^0-9a-zA-Z]/','',$view_calls_in_queue);
	$view_calls_in_queue_launch = preg_replace('/[^0-9a-zA-Z]/','',$view_calls_in_queue_launch);
	$grab_calls_in_queue = preg_replace('/[^0-9a-zA-Z]/','',$grab_calls_in_queue);
	$call_requeue_button = preg_replace('/[^0-9a-zA-Z]/','',$call_requeue_button);
	$pause_after_each_call = preg_replace('/[^0-9a-zA-Z]/','',$pause_after_each_call);
	$use_internal_dnc = preg_replace('/[^0-9a-zA-Z]/','',$use_internal_dnc);
	$use_campaign_dnc = preg_replace('/[^0-9a-zA-Z]/','',$use_campaign_dnc);
	$voicemail_id = preg_replace('/[^0-9a-zA-Z]/','',$voicemail_id);
	$new_voicemail_id = preg_replace('/[^0-9a-zA-Z]/','',$new_voicemail_id);
	$status_id = preg_replace('/[^0-9a-zA-Z]/','',$status_id);
	$agent_call_log_view = preg_replace('/[^0-9a-zA-Z]/','',$agent_call_log_view);
	$agent_call_log_view_override = preg_replace('/[^0-9a-zA-Z]/','',$agent_call_log_view_override);
	$queuemetrics_loginout = preg_replace('/[^0-9a-zA-Z]/','',$queuemetrics_loginout);
	$queuemetrics_callstatus = preg_replace('/[^0-9a-zA-Z]/','',$queuemetrics_callstatus);
	$hide_xfer_number_to_dial = preg_replace('/[^0-9a-zA-Z]/','',$hide_xfer_number_to_dial);
	$manual_dial_prefix = preg_replace('/[^0-9a-zA-Z]/','',$manual_dial_prefix);
	$customer_3way_hangup_logging = preg_replace('/[^0-9a-zA-Z]/','',$customer_3way_hangup_logging);
	$customer_3way_hangup_action = preg_replace('/[^0-9a-zA-Z]/','',$customer_3way_hangup_action);
	$queuemetrics_dispo_pause = preg_replace('/[^0-9a-zA-Z]/','',$queuemetrics_dispo_pause);
	$per_call_notes = preg_replace('/[^0-9a-zA-Z]/','',$per_call_notes);
	$my_callback_option = preg_replace('/[^0-9a-zA-Z]/','',$my_callback_option);
	$auto_pause_precall_code = preg_replace('/[^0-9a-zA-Z]/','',$auto_pause_precall_code);
	$disable_dispo_status = preg_replace('/[^0-9a-zA-Z]/','',$disable_dispo_status);
	$action_xfer_cid = preg_replace('/[^0-9a-zA-Z]/','',$action_xfer_cid);
	$callback_list_calltime = preg_replace('/[^0-9a-zA-Z]/','',$callback_list_calltime);
	$pause_after_next_call = preg_replace('/[^0-9a-zA-Z]/','',$pause_after_next_call);
	$owner_populate = preg_replace('/[^0-9a-zA-Z]/','',$owner_populate);
	$dead_max_dispo = preg_replace('/[^0-9a-zA-Z]/','',$dead_max_dispo);
	$dispo_max_dispo = preg_replace('/[^0-9a-zA-Z]/','',$dispo_max_dispo);
	$wrapup_bypass = preg_replace('/[^0-9a-zA-Z]/','',$wrapup_bypass);
	$wrapup_after_hotkey = preg_replace('/[^0-9a-zA-Z]/','',$wrapup_after_hotkey);
	$show_previous_callback = preg_replace('/[^0-9a-zA-Z]/','',$show_previous_callback);
	$clear_script = preg_replace('/[^0-9a-zA-Z]/','',$clear_script);
	$allow_chats = preg_replace('/[^0-9a-zA-Z]/','',$allow_chats);
	$allow_emails = preg_replace('/[^0-9a-zA-Z]/','',$allow_emails);
	$status_display_ingroup = preg_replace('/[^0-9a-zA-Z]/','',$status_display_ingroup);
	$populate_lead_ingroup = preg_replace('/[^0-9a-zA-Z]/','',$populate_lead_ingroup);
	$nva_new_status = preg_replace('/[^0-9a-zA-Z]/','',$nva_new_status);
	$report_default_format = preg_replace('/[^0-9a-zA-Z]/','',$report_default_format);
	$menu_background = preg_replace('/[^0-9a-zA-Z]/','',$menu_background);
	$frame_background = preg_replace('/[^0-9a-zA-Z]/','',$frame_background);
	$std_row1_background = preg_replace('/[^0-9a-zA-Z]/','',$std_row1_background);
	$std_row2_background = preg_replace('/[^0-9a-zA-Z]/','',$std_row2_background);
	$std_row3_background = preg_replace('/[^0-9a-zA-Z]/','',$std_row3_background);
	$std_row4_background = preg_replace('/[^0-9a-zA-Z]/','',$std_row4_background);
	$std_row5_background = preg_replace('/[^0-9a-zA-Z]/','',$std_row5_background);
	$alt_row1_background = preg_replace('/[^0-9a-zA-Z]/','',$alt_row1_background);
	$alt_row2_background = preg_replace('/[^0-9a-zA-Z]/','',$alt_row2_background);
	$alt_row3_background = preg_replace('/[^0-9a-zA-Z]/','',$alt_row3_background);
	$button_color = preg_replace('/[^0-9a-zA-Z]/','',$button_color);
	$dead_to_dispo = preg_replace('/[^0-9a-zA-Z]/','',$dead_to_dispo);
	$routing_prefix = preg_replace('/[^0-9a-zA-Z]/','',$routing_prefix);
	$inbound_survey = preg_replace('/[^0-9a-zA-Z]/','',$inbound_survey);
	$pause_max_dispo = preg_replace('/[^0-9a-zA-Z]/','',$pause_max_dispo);
	$areacode = preg_replace('/[^0-9a-zA-Z]/','',$areacode);
	$require_mgr_approval = preg_replace('/[^0-9a-zA-Z]/','',$require_mgr_approval);
	$mute_recordings = preg_replace('/[^0-9a-zA-Z]/','',$mute_recordings);
	$leave_vm_no_dispo = preg_replace('/[^0-9a-zA-Z]/','',$leave_vm_no_dispo);
	$amd_agent_route_options = preg_replace('/[^0-9a-zA-Z]/','',$amd_agent_route_options);

	### ALPHA-NUMERIC and spaces and hash and star and comma
	$xferconf_a_dtmf = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',trim($xferconf_a_dtmf));
	$xferconf_b_dtmf = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',trim($xferconf_b_dtmf));
	$xferconf_c_dtmf = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',trim($xferconf_c_dtmf));
	$xferconf_d_dtmf = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',trim($xferconf_d_dtmf));
	$xferconf_e_dtmf = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',trim($xferconf_e_dtmf));
	$survey_third_digit = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',$survey_third_digit);
	$survey_fourth_digit = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',$survey_fourth_digit);
	$survey_third_exten = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',$survey_third_exten);
	$survey_fourth_exten = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',$survey_fourth_exten);
	$preset_dtmf = preg_replace('/[^ \,\*\#0-9a-zA-Z]/','',$preset_dtmf);

	### ALPHA-NUMERIC and underscore and dash
	$agi_output = preg_replace('/[^-_0-9a-zA-Z]/','',$agi_output);
	$ASTmgrSECRET = preg_replace('/[^-_0-9a-zA-Z]/','',$ASTmgrSECRET);
	$ASTmgrUSERNAME = preg_replace('/[^-_0-9a-zA-Z]/','',$ASTmgrUSERNAME);
	$ASTmgrUSERNAMElisten = preg_replace('/[^-_0-9a-zA-Z]/','',$ASTmgrUSERNAMElisten);
	$ASTmgrUSERNAMEsend = preg_replace('/[^-_0-9a-zA-Z]/','',$ASTmgrUSERNAMEsend);
	$ASTmgrUSERNAMEupdate = preg_replace('/[^-_0-9a-zA-Z]/','',$ASTmgrUSERNAMEupdate);
	$call_time_id = preg_replace('/[^-_0-9a-zA-Z]/','',$call_time_id);
	$campaign_id = preg_replace('/[^-_0-9a-zA-Z]/','',$campaign_id);
	$CoNfIrM = preg_replace('/[^-_0-9a-zA-Z]/','',$CoNfIrM);
	$DBX_database = preg_replace('/[^-_0-9a-zA-Z]/','',$DBX_database);
	$DBX_pass = preg_replace('/[^-_0-9a-zA-Z]/','',$DBX_pass);
	$DBX_user = preg_replace('/[^-_0-9a-zA-Z]/','',$DBX_user);
	$DBY_database = preg_replace('/[^-_0-9a-zA-Z]/','',$DBY_database);
	$DBY_pass = preg_replace('/[^-_0-9a-zA-Z]/','',$DBY_pass);
	$DBY_user = preg_replace('/[^-_0-9a-zA-Z]/','',$DBY_user);
	$dial_method = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_method);
	$dial_status_a = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_status_a);
	$dial_status_b = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_status_b);
	$dial_status_c = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_status_c);
	$dial_status_d = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_status_d);
	$dial_status_e = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_status_e);
	$ext_context = preg_replace('/[^-_0-9a-zA-Z]/','',$ext_context);
	$group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$group_id);
	$lead_filter_id = preg_replace('/[^-_0-9a-zA-Z]/','',$lead_filter_id);
	$local_call_time = preg_replace('/[^-_0-9a-zA-Z]/','',$local_call_time);
	$login = preg_replace('/[^-_0-9a-zA-Z]/','',$login);
	$login_campaign = preg_replace('/[^-_0-9a-zA-Z]/','',$login_campaign);
	$login_pass = preg_replace('/[^-_0-9a-zA-Z]/','',$login_pass);
	$login_user = preg_replace('/[^-_0-9a-zA-Z]/','',$login_user);
	$new_login = preg_replace('/[^-_0-9a-zA-Z]/','',$new_login);
	$new_pass = preg_replace('/[^-_0-9a-zA-Z]/','',$new_pass);
	$next_agent_call = preg_replace('/[^-_0-9a-zA-Z]/','',$next_agent_call);
	$old_campaign_id = preg_replace('/[^-_0-9a-zA-Z]/','',$old_campaign_id);
	$old_server_id = preg_replace('/[^-_0-9a-zA-Z]/','',$old_server_id);
	$OLDuser_group = preg_replace('/[^-_0-9a-zA-Z]/','',$OLDuser_group);
	$park_file_name = preg_replace('/[^-_0-9a-zA-Z]/','',$park_file_name);
	$pass = preg_replace('/[^-_0-9a-zA-Z]/','',$pass);
	$phone_login = preg_replace('/[^-_0-9a-zA-Z]/','',$phone_login);
	$phone_pass = preg_replace('/[^-_0-9a-zA-Z]/','',$phone_pass);
	$PHP_AUTH_PW = preg_replace('/[^-_0-9a-zA-Z]/','',$PHP_AUTH_PW);
	$PHP_AUTH_USER = preg_replace('/[^-_0-9a-zA-Z]/','',$PHP_AUTH_USER);
	$protocol = preg_replace('/[^-_0-9a-zA-Z]/','',$protocol);
	$server_id = preg_replace('/[^-_0-9a-zA-Z]/','',$server_id);
	$stage = preg_replace('/[^-_0-9a-zA-Z]/','',$stage);
	$state_rule = preg_replace('/[^-_0-9a-zA-Z]/','',$state_rule);
	$holiday_rule = preg_replace('/[^-_0-9a-zA-Z]/','',$holiday_rule);
	$trunk_restriction = preg_replace('/[^-_0-9a-zA-Z]/','',$trunk_restriction);
	$user = preg_replace('/[^-_0-9a-zA-Z]/','',$user);
	$user_group = preg_replace('/[^-_0-9a-zA-Z]/','',$user_group);
	$VICIDIAL_park_on_filename = preg_replace('/[^-_0-9a-zA-Z]/','',$VICIDIAL_park_on_filename);
	$auto_alt_dial = preg_replace('/[^-_0-9a-zA-Z]/','',$auto_alt_dial);
	$dial_status = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_status);
	$queuemetrics_eq_prepend = preg_replace('/[^-_0-9a-zA-Z]/','',$queuemetrics_eq_prepend);
	$vicidial_agent_disable = preg_replace('/[^-_0-9a-zA-Z]/','',$vicidial_agent_disable);
	$alter_custdata_override = preg_replace('/[^-_0-9a-zA-Z]/','',$alter_custdata_override);
	$list_order_mix = preg_replace('/[^-_0-9a-zA-Z]/','',$list_order_mix);
	$vcl_id = preg_replace('/[^-_0-9a-zA-Z]/','',$vcl_id);
	$mix_method = preg_replace('/[^-_0-9a-zA-Z]/','',$mix_method);
	$category = preg_replace('/[^-_0-9a-zA-Z]/','',$category);
	$vsc_id = preg_replace('/[^-_0-9a-zA-Z]/','',$vsc_id);
	$moh_context = preg_replace('/[^-_0-9a-zA-Z]/','',$moh_context);
	$source_campaign_id = preg_replace('/[^-_0-9a-zA-Z]/','',$source_campaign_id);
	$source_user_id = preg_replace('/[^-_0-9a-zA-Z]/','',$source_user_id);
	$source_group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$source_group_id);
	$default_xfer_group = preg_replace('/[^-_0-9a-zA-Z]/','',$default_xfer_group);
	$drop_exten = preg_replace('/[^-_0-9a-zA-Z]/','',$drop_exten);
	$safe_harbor_exten = preg_replace('/[^-_0-9a-zA-Z]/','',$safe_harbor_exten);
	$drop_action = preg_replace('/[^-_0-9a-zA-Z]/','',$drop_action);
	$drop_inbound_group = preg_replace('/[^-_0-9a-zA-Z]/','',$drop_inbound_group);
	$afterhours_xfer_group = preg_replace('/[^-_0-9a-zA-Z]/','',$afterhours_xfer_group);
	$after_hours_action = preg_replace('/[^-_0-9a-zA-Z]/','',$after_hours_action);
	$alias_id = preg_replace('/[^-_0-9a-zA-Z]/','',$alias_id);
	$shift_id = preg_replace('/[^-_0-9a-zA-Z]/','',$shift_id);
	$qc_shift_id = preg_replace('/[^-_0-9a-zA-Z]/','',$qc_shift_id);
	$survey_method = preg_replace('/[^-_0-9a-zA-Z]/','',$survey_method);
	$alter_custphone_override = preg_replace('/[^-_0-9a-zA-Z]/','',$alter_custphone_override);
	$manual_dial_filter = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_dial_filter);
	$manual_dial_search_filter = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_dial_search_filter);
	$agent_clipboard_copy = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_clipboard_copy);
	$hold_time_option = preg_replace('/[^-_0-9a-zA-Z]/','',$hold_time_option);
	$hold_time_option_xfer_group = preg_replace('/[^-_0-9a-zA-Z]/','',$hold_time_option_xfer_group);
	$hold_recall_xfer_group = preg_replace('/[^-_0-9a-zA-Z]/','',$hold_recall_xfer_group);
	$play_welcome_message = preg_replace('/[^-_0-9a-zA-Z]/','',$play_welcome_message);
	$did_route = preg_replace('/[^-_0-9a-zA-Z]/','',$did_route);
	$user_unavailable_action = preg_replace('/[^-_0-9a-zA-Z]/','',$user_unavailable_action);
	$user_route_settings_ingroup = preg_replace('/[^-_0-9a-zA-Z]/','',$user_route_settings_ingroup);
	$call_handle_method = preg_replace('/[^-_0-9a-zA-Z]/','',$call_handle_method);
	$agent_search_method = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_search_method);
	$hold_time_option_voicemail = preg_replace('/[^-_0-9a-zA-Z]/','',$hold_time_option_voicemail);
	$exten_context = preg_replace('/[^-_0-9a-zA-Z]/','',$exten_context);
	$three_way_call_cid = preg_replace('/[^-_0-9a-zA-Z]/','',$three_way_call_cid);
	$web_form_target = preg_replace('/[^-_0-9a-zA-Z]/','',$web_form_target);
	$recording_web_link = preg_replace('/[^-_0-9a-zA-Z]/','',$recording_web_link);
	$vtiger_search_category = preg_replace('/[^-_0-9a-zA-Z]/','',$vtiger_search_category);
	$vtiger_create_call_record = preg_replace('/[^-_0-9a-zA-Z]/','',$vtiger_create_call_record);
	$vtiger_create_lead_record = preg_replace('/[^-_0-9a-zA-Z]/','',$vtiger_create_lead_record);
	$vtiger_screen_login = preg_replace('/[^-_0-9a-zA-Z]/','',$vtiger_screen_login);
	$cpd_amd_action = preg_replace('/[^-_0-9a-zA-Z]/','',$cpd_amd_action);
	$cpd_unknown_action = preg_replace('/[^-_0-9a-zA-Z]/','',$cpd_unknown_action);
	$template_id = preg_replace('/[^-_0-9a-zA-Z]/','',$template_id);
	$carrier_id = preg_replace('/[^-_0-9a-zA-Z]/','',$carrier_id);
	$source_carrier = preg_replace('/[^-_0-9a-zA-Z]/','',$source_carrier);
	$group_alias_id = preg_replace('/[^-_0-9a-zA-Z]/','',$group_alias_id);
	$default_group_alias = preg_replace('/[^-_0-9a-zA-Z]/','',$default_group_alias);
	$vtiger_search_dead = preg_replace('/[^-_0-9a-zA-Z]/','',$vtiger_search_dead);
	$menu_id = preg_replace('/[^-_0-9a-zA-Z]/','',$menu_id);
	$source_menu = preg_replace('/[^-_0-9a-zA-Z]/','',$source_menu);
	$call_time_id = preg_replace('/[^-_0-9a-zA-Z]/','',$call_time_id);
	$phone_context = preg_replace('/[^-_0-9a-zA-Z]/','',$phone_context);
	$new_conf_secret = preg_replace('/[^-_0-9a-zA-Z]/','',$new_conf_secret);
	$conf_secret = preg_replace('/[^-_0-9a-zA-Z]/','',$conf_secret);
	$tracking_group = preg_replace('/[^-_0-9a-zA-Z]/','',$tracking_group);
	$no_agent_no_queue = preg_replace('/[^-_0-9a-zA-Z]/','',$no_agent_no_queue);
	$no_agent_action = preg_replace('/[^-_0-9a-zA-Z]/','',$no_agent_action);
	$quick_transfer_button = preg_replace('/[^-_0-9a-zA-Z]/','',$quick_transfer_button);
	$prepopulate_transfer_preset = preg_replace('/[^-_0-9a-zA-Z]/','',$prepopulate_transfer_preset);
	$tts_id = preg_replace('/[^-_0-9a-zA-Z]/','',$tts_id);
	$drop_rate_group = preg_replace('/[^-_0-9a-zA-Z]/','',$drop_rate_group);
	$agent_dial_owner_only = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_dial_owner_only);
	$reset_time = preg_replace('/[^-_0-9a-zA-Z]/','',$reset_time);
	$moh_id = preg_replace('/[^-_0-9a-zA-Z]/','',$moh_id);
	$mohsuggest = preg_replace('/[^-_0-9a-zA-Z]/','',$mohsuggest);
	$drop_inbound_group_override = preg_replace('/[^-_0-9a-zA-Z]/','',$drop_inbound_group_override);
	$timer_action = preg_replace('/[^-_0-9a-zA-Z]/','',$timer_action);
	$record_call = preg_replace('/[^-_0-9a-zA-Z]/','',$record_call);
	$scheduled_callbacks_alert = preg_replace('/[^-_0-9a-zA-Z]/','',$scheduled_callbacks_alert);
	$extension_group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$extension_group_id);
	$extension_group = preg_replace('/[^-_0-9a-zA-Z]/','',$extension_group);
	$scheduled_callbacks_count = preg_replace('/[^-_0-9a-zA-Z]/','',$scheduled_callbacks_count);
	$manual_dial_override = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_dial_override);
	$blind_monitor_warning = preg_replace('/[^-_0-9a-zA-Z]/','',$blind_monitor_warning);
	$uniqueid_status_display = preg_replace('/[^-_0-9a-zA-Z]/','',$uniqueid_status_display);
	$hold_time_option_callmenu = preg_replace('/[^-_0-9a-zA-Z]/','',$hold_time_option_callmenu);
	$inbound_queue_no_dial = preg_replace('/[^-_0-9a-zA-Z]/','',$inbound_queue_no_dial);
	$hold_time_second_option = preg_replace('/[^-_0-9a-zA-Z]/','',$hold_time_second_option);
	$hold_time_third_option = preg_replace('/[^-_0-9a-zA-Z]/','',$hold_time_third_option);
	$wait_hold_option_priority = preg_replace('/[^-_0-9a-zA-Z]/','',$wait_hold_option_priority);
	$wait_time_option = preg_replace('/[^-_0-9a-zA-Z]/','',$wait_time_option);
	$wait_time_second_option = preg_replace('/[^-_0-9a-zA-Z]/','',$wait_time_second_option);
	$wait_time_third_option = preg_replace('/[^-_0-9a-zA-Z]/','',$wait_time_third_option);
	$wait_time_option_xfer_group = preg_replace('/[^-_0-9a-zA-Z]/','',$wait_time_option_xfer_group);
	$wait_time_option_callmenu = preg_replace('/[^-_0-9a-zA-Z]/','',$wait_time_option_callmenu);
	$wait_time_option_voicemail = preg_replace('/[^-_0-9a-zA-Z]/','',$wait_time_option_voicemail);
	$filter_phone_group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_phone_group_id);
	$filter_action = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_action);
	$filter_user_unavailable_action = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_user_unavailable_action);
	$filter_user_route_settings_ingroup = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_user_route_settings_ingroup);
	$filter_agent_search_method = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_agent_search_method);
	$filter_campaign_id = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_campaign_id);
	$filter_group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_group_id);
	$filter_menu_id = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_menu_id);
	$filter_call_handle_method = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_call_handle_method);
	$filter_user = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_user);
	$filter_exten_context = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_exten_context);
	$webphone_systemkey = preg_replace('/[^-_0-9a-zA-Z]/','',$webphone_systemkey);
	$webphone_dialpad = preg_replace('/[^-_0-9a-zA-Z]/','',$webphone_dialpad);
	$webphone_systemkey_override = preg_replace('/[^-_0-9a-zA-Z]/','',$webphone_systemkey_override);
	$webphone_dialpad_override = preg_replace('/[^-_0-9a-zA-Z]/','',$webphone_dialpad_override);
	$default_phone_registration_password = preg_replace('/[^-_0-9a-zA-Z]/','',$default_phone_registration_password);
	$default_phone_login_password = preg_replace('/[^-_0-9a-zA-Z]/','',$default_phone_login_password);
	$default_server_password = preg_replace('/[^-_0-9a-zA-Z]/','',$default_server_password);
	$ivr_park_call = preg_replace('/[^-_0-9a-zA-Z]/','',$ivr_park_call);
	$manual_preview_dial = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_preview_dial);
	$realtime_agent_time_stats = preg_replace('/[^-_0-9a-zA-Z]/','',$realtime_agent_time_stats);
	$api_manual_dial = preg_replace('/[^-_0-9a-zA-Z]/','',$api_manual_dial);
	$manual_dial_call_time_check = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_dial_call_time_check);
	$lead_order_secondary = preg_replace('/[^-_0-9a-zA-Z]/','',$lead_order_secondary);
	$agent_lead_search = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_lead_search);
	$agent_lead_search_method = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_lead_search_method);
	$manual_dial_cid = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_dial_cid);
	$post_phone_time_diff_alert = preg_replace('/[^-_0-9a-zA-Z]/','',$post_phone_time_diff_alert);
	$custom_3way_button_transfer = preg_replace('/[^-_0-9a-zA-Z]/','',$custom_3way_button_transfer);
	$available_only_tally_threshold_agents = preg_replace('/[^-_0-9a-zA-Z]/','',$available_only_tally_threshold_agents);
	$dial_level_threshold_agents = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_level_threshold_agents);
	$time_zone_setting = preg_replace('/[^-_0-9a-zA-Z]/','',$time_zone_setting);
	$safe_harbor_menu_id = preg_replace('/[^-_0-9a-zA-Z]/','',$safe_harbor_menu_id);
	$survey_menu_id = preg_replace('/[^-_0-9a-zA-Z]/','',$survey_menu_id);
	$dl_diff_target_method = preg_replace('/[^-_0-9a-zA-Z]/','',$dl_diff_target_method);
	$disable_dispo_screen = preg_replace('/[^-_0-9a-zA-Z]/','',$disable_dispo_screen);
	$screen_labels = preg_replace('/[^-_0-9a-zA-Z]/','',$screen_labels);
	$label_hide_field_logs = preg_replace('/[^-_0-9a-zA-Z]/','',$label_hide_field_logs);
	$label_id = preg_replace('/[^-_0-9a-zA-Z]/','',$label_id);
	$status_display_fields = preg_replace('/[^-_0-9a-zA-Z]/','',$status_display_fields);
	$voicemail_timezone = preg_replace('/[^-_0-9a-zA-Z]/','',$voicemail_timezone);
	$default_voicemail_timezone = preg_replace('/[^-_0-9a-zA-Z]/','',$default_voicemail_timezone);
	$on_hook_cid = preg_replace('/[^-_0-9a-zA-Z]/','',$on_hook_cid);
	$pllb_grouping = preg_replace('/[^-_0-9a-zA-Z]/','',$pllb_grouping);
	$user_start = preg_replace('/[^-_0-9a-zA-Z]/','',$user_start);
	$drop_callmenu = preg_replace('/[^-_0-9a-zA-Z]/','',$drop_callmenu);
	$after_hours_callmenu = preg_replace('/[^-_0-9a-zA-Z]/','',$after_hours_callmenu);
	$survey_recording = preg_replace('/[^-_0-9a-zA-Z]/','',$survey_recording);
	$dtmf_field = preg_replace('/[^-_0-9a-zA-Z]/','',$dtmf_field);
	$preset_contact_search = preg_replace('/[^-_0-9a-zA-Z]/','',$preset_contact_search);
	$admin_hide_phone_data = preg_replace('/[^-_0-9a-zA-Z]/','',$admin_hide_phone_data);
	$max_calls_method = preg_replace('/[^-_0-9a-zA-Z]/','',$max_calls_method);
	$max_calls_action = preg_replace('/[^-_0-9a-zA-Z]/','',$max_calls_action);
	$in_group_dial = preg_replace('/[^-_0-9a-zA-Z]/','',$in_group_dial);
	$in_group_dial_select = preg_replace('/[^-_0-9a-zA-Z]/','',$in_group_dial_select);
	$queuemetrics_socket = preg_replace('/[^-_0-9a-zA-Z]/','',$queuemetrics_socket);
	$holiday_id = preg_replace('/[^-_0-9a-zA-Z]/','',$holiday_id);
	$holiday_date = preg_replace('/[^-_0-9a-zA-Z]/','',$holiday_date);
	$holiday_status = preg_replace('/[^-_0-9a-zA-Z]/','',$holiday_status);
	$expiration_date = preg_replace('/[^-_0-9a-zA-Z]/','',$expiration_date);
	$amd_inbound_group = preg_replace('/[^-_0-9a-zA-Z]/','',$amd_inbound_group);
	$amd_callmenu = preg_replace('/[^-_0-9a-zA-Z]/','',$amd_callmenu);
	$filter_inbound_number = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_inbound_number);
	$filter_dnc_campaign = preg_replace('/[^-_0-9a-zA-Z]/','',$filter_dnc_campaign);
	$manual_dial_search_checkbox = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_dial_search_checkbox);
	$alt_number_dialing = preg_replace('/[^-_0-9a-zA-Z]/','',$alt_number_dialing);
	$no_agent_ingroup_redirect = preg_replace('/[^-_0-9a-zA-Z]/','',$no_agent_ingroup_redirect);
	$no_agent_ingroup_id = preg_replace('/[^-_0-9a-zA-Z]/','',$no_agent_ingroup_id);
	$pre_filter_phone_group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$pre_filter_phone_group_id);
	$shift_enforcement = preg_replace('/[^-_0-9a-zA-Z]/','',$shift_enforcement);
	$comments_all_tabs = preg_replace('/[^-_0-9a-zA-Z]/','',$comments_all_tabs);
	$comments_dispo_screen = preg_replace('/[^-_0-9a-zA-Z]/','',$comments_dispo_screen);
	$comments_callback_screen = preg_replace('/[^-_0-9a-zA-Z]/','',$comments_callback_screen);
	$qc_comment_history = preg_replace('/[^-_0-9a-zA-Z]/','',$qc_comment_history);
	$language_method = preg_replace('/[^-_0-9a-zA-Z]/','',$language_method);
	$manual_dial_override_field = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_dial_override_field);
	$max_queue_ingroup_id = preg_replace('/[^-_0-9a-zA-Z]/','',$max_queue_ingroup_id);
	$agent_debug_logging = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_debug_logging);
	$container_id = preg_replace('/[^-_0-9a-zA-Z]/','',$container_id);
	$phone_defaults_container = preg_replace('/[^-_0-9a-zA-Z]/','',$phone_defaults_container);
	$container_type = preg_replace('/[^-_0-9a-zA-Z]/','',$container_type);
	$status_group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$status_group_id);
	$unavail_dialplan_fwd_exten = preg_replace('/[^-_0-9a-zA-Z]/','',$unavail_dialplan_fwd_exten);
	$unavail_dialplan_fwd_context = preg_replace('/[^-_0-9a-zA-Z]/','',$unavail_dialplan_fwd_context);
	$nva_search_method = preg_replace('/[^-_0-9a-zA-Z]/','',$nva_search_method);
	$on_hook_cid_number = preg_replace('/[^-_0-9a-zA-Z]/','',$on_hook_cid_number);
	$colors_id = preg_replace('/[^-_0-9a-zA-Z]/','',$colors_id);
	$agent_screen_colors = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_screen_colors);
	$customer_chat_screen_colors = preg_replace('/[^-_0-9a-zA-Z]/','',$customer_chat_screen_colors);
	$web_loader_phone_length = preg_replace('/[^-_0-9a-zA-Z]/','',$web_loader_phone_length);
	$agent_chat_screen_colors = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_chat_screen_colors);
	$populate_lead_province = preg_replace('/[^-_0-9a-zA-Z]/','',$populate_lead_province);
	$populate_lead_owner = preg_replace('/[^-_0-9a-zA-Z]/','',$populate_lead_owner);
	$areacode_filter = preg_replace('/[^-_0-9a-zA-Z]/','',$areacode_filter);
	$areacode_filter_action = preg_replace('/[^-_0-9a-zA-Z]/','',$areacode_filter_action);
	$report_id = preg_replace('/[^-_0-9a-zA-Z]/','',$report_id);
	$report_destination = preg_replace('/[^-_0-9a-zA-Z]/','',$report_destination);
	$report_times = preg_replace('/[^-_0-9a-zA-Z]/','',$report_times);
	$report_monthdays = preg_replace('/[^-_0-9a-zA-Z]/','',$report_monthdays);
	$populate_state_areacode = preg_replace('/[^-_0-9a-zA-Z]/','',$populate_state_areacode);
	$dl_id = preg_replace('/[^-_0-9a-zA-Z]/','',$dl_id);
	$duplicate_check = preg_replace('/[^-_0-9a-zA-Z]/','',$duplicate_check);
	$dl_times = preg_replace('/[^-_0-9a-zA-Z]/','',$dl_times);
	$dl_monthdays = preg_replace('/[^-_0-9a-zA-Z]/','',$dl_monthdays);
	$use_custom_cid = preg_replace('/[^-_0-9a-zA-Z]/','',$use_custom_cid);
	$system_ip_blacklist = preg_replace('/[^-_0-9a-zA-Z]/','',$system_ip_blacklist);
	$admin_ip_list = preg_replace('/[^-_0-9a-zA-Z]/','',$admin_ip_list);
	$agent_ip_list = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_ip_list);
	$api_ip_list = preg_replace('/[^-_0-9a-zA-Z]/','',$api_ip_list);
	$ip_list_id = preg_replace('/[^-_0-9a-zA-Z]/','',$ip_list_id);
	$inbound_survey_callmenu = preg_replace('/[^-_0-9a-zA-Z]/','',$inbound_survey_callmenu);
	$filename_override = preg_replace('/[^-_0-9a-zA-Z]/','',$filename_override);
	$did_id = preg_replace('/[^-_0-9a-zA-Z]/','',$did_id);
	$extension_appended_cidname = preg_replace('/[^-_0-9a-zA-Z]/','',$extension_appended_cidname);
	$max_inbound_calls_outcome = preg_replace('/[^-_0-9a-zA-Z]/','',$max_inbound_calls_outcome);
	$manual_auto_next_options = preg_replace('/[^-_0-9a-zA-Z]/','',$manual_auto_next_options);
	$agent_screen_time_display = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_screen_time_display);
	$get_call_launch = preg_replace('/[^-_0-9a-zA-Z]/','',$get_call_launch);
	$next_dial_my_callbacks = preg_replace('/[^-_0-9a-zA-Z]/','',$next_dial_my_callbacks);
	$anyone_callback_inactive_lists = preg_replace('/[^-_0-9a-zA-Z]/','',$anyone_callback_inactive_lists);
	$inbound_no_agents_no_dial_container = preg_replace('/[^-_0-9a-zA-Z]/','',$inbound_no_agents_no_dial_container);
	$closing_time_action = preg_replace('/[^-_0-9a-zA-Z]/','',$closing_time_action);
	$closing_time_option_exten = preg_replace('/[^-_0-9a-zA-Z]/','',$closing_time_option_exten);
	$closing_time_option_callmenu = preg_replace('/[^-_0-9a-zA-Z]/','',$closing_time_option_callmenu);
	$closing_time_option_voicemail = preg_replace('/[^-_0-9a-zA-Z]/','',$closing_time_option_voicemail);
	$closing_time_option_callback_list_id = preg_replace('/[^-_0-9a-zA-Z]/','',$closing_time_option_callback_list_id);
	$icbq_call_time_id = preg_replace('/[^-_0-9a-zA-Z]/','',$icbq_call_time_id);
	$add_lead_timezone = preg_replace('/[^-_0-9a-zA-Z]/','',$add_lead_timezone);
	$icbq_dial_filter = preg_replace('/[^-_0-9a-zA-Z]/','',$icbq_dial_filter);
	$cid_group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$cid_group_id);
	$cid_group_id_two = preg_replace('/[^-_0-9a-zA-Z]/','',$cid_group_id_two);
	$cid_group_type = preg_replace('/[^-_0-9a-zA-Z]/','',$cid_group_type);
	$populate_lead_source = preg_replace('/[^-_0-9a-zA-Z]/','',$populate_lead_source);
	$dead_trigger_action = preg_replace('/[^-_0-9a-zA-Z]/','',$dead_trigger_action);
	$dead_trigger_repeat = preg_replace('/[^-_0-9a-zA-Z]/','',$dead_trigger_repeat);
	$cid_cb_confirm_number = preg_replace('/[^-_0-9a-zA-Z]/','',$cid_cb_confirm_number);
	$cid_cb_invalid_filter_phone_group = preg_replace('/[^-_0-9a-zA-Z]/','',$cid_cb_invalid_filter_phone_group);
	$scheduled_callbacks_auto_reschedule = preg_replace('/[^-_0-9a-zA-Z]/','',$scheduled_callbacks_auto_reschedule);
	$scheduled_callbacks_timezones_container = preg_replace('/[^-_0-9a-zA-Z]/','',$scheduled_callbacks_timezones_container);
	$three_way_volume_buttons = preg_replace('/[^-_0-9a-zA-Z]/','',$three_way_volume_buttons);
	$callback_dnc = preg_replace('/[^-_0-9a-zA-Z]/','',$callback_dnc);
	$hide_call_log_info = preg_replace('/[^-_0-9a-zA-Z]/','',$hide_call_log_info);
	$call_quota_lead_ranking = preg_replace('/[^-_0-9a-zA-Z]/','',$call_quota_lead_ranking);
	$sip_event_logging = preg_replace('/[^-_0-9a-zA-Z]/','',$sip_event_logging);
	$auto_active_list_new = preg_replace('/[^-_0-9a-zA-Z]/','',$auto_active_list_new);
	$script_id = preg_replace('/[^-_0-9a-zA-Z]/','',$script_id);
	$ingroup_script = preg_replace('/[^-_0-9a-zA-Z]/','',$ingroup_script);
	$ingroup_script_two = preg_replace('/[^-_0-9a-zA-Z]/','',$ingroup_script_two);
	$campaign_script = preg_replace('/[^-_0-9a-zA-Z]/','',$campaign_script);
	$campaign_script_two = preg_replace('/[^-_0-9a-zA-Z]/','',$campaign_script_two);
	$leave_vm_message_group_id = preg_replace('/[^-_0-9a-zA-Z]/','',$leave_vm_message_group_id);
	$dial_timeout_lead_container = preg_replace('/[^-_0-9a-zA-Z]/','',$dial_timeout_lead_container);
	$amd_type = preg_replace('/[^-_0-9a-zA-Z]/','',$amd_type);
	$recording_buttons = preg_replace('/[^-_0-9a-zA-Z]/','',$recording_buttons);
	$use_other_campaign_dnc = preg_replace('/[^-_0-9a-zA-Z]/','',$use_other_campaign_dnc);
	$browser_alert_sound = preg_replace('/[^-_0-9a-zA-Z]/','',$browser_alert_sound);
	$three_way_record_stop_exception = preg_replace('/[^-_0-9a-zA-Z]/','',$three_way_record_stop_exception);
	$queuemetrics_pausereason = preg_replace('/[^-_0-9a-zA-Z]/','',$queuemetrics_pausereason);
	$answer_signal = preg_replace('/[^-_0-9a-zA-Z]/','',$answer_signal);
	$inbound_drop_voicemail = preg_replace('/[^-_0-9a-zA-Z]/','',$inbound_drop_voicemail);
	$inbound_after_hours_voicemail = preg_replace('/[^-_0-9a-zA-Z]/','',$inbound_after_hours_voicemail);
	$pause_max_exceptions = preg_replace('/[^-_0-9a-zA-Z]/','',$pause_max_exceptions);
	$two_factor_container = preg_replace('/[^-_0-9a-zA-Z]/','',$two_factor_container);
	$calls_inqueue_count_one = preg_replace('/[^-_0-9a-zA-Z]/','',$calls_inqueue_count_one);
	$calls_inqueue_count_two = preg_replace('/[^-_0-9a-zA-Z]/','',$calls_inqueue_count_two);
	$drop_call_seconds_override = preg_replace('/[^-_0-9a-zA-Z]/','',$drop_call_seconds_override);
	$in_man_dial_next_ready_seconds_override = preg_replace('/[^-_0-9a-zA-Z]/','',$in_man_dial_next_ready_seconds_override);
	$call_limit_24hour_method = preg_replace('/[^-_0-9a-zA-Z]/','',$call_limit_24hour_method);
	$call_limit_24hour_scope = preg_replace('/[^-_0-9a-zA-Z]/','',$call_limit_24hour_scope);
	$call_limit_24hour_override = preg_replace('/[^-_0-9a-zA-Z]/','',$call_limit_24hour_override);
	$in_queue_nanque_exceptions = preg_replace('/[^-_0-9a-zA-Z]/','',$in_queue_nanque_exceptions);
	$queue_group = preg_replace('/[^-_0-9a-zA-Z]/','',$queue_group);
	$pre_filter_recent_call = preg_replace('/[^-_0-9a-zA-Z]/','',$pre_filter_recent_call);
	$pre_filter_recent_extension = preg_replace('/[^-_0-9a-zA-Z]/','',$pre_filter_recent_extension);
	$user_group_two = preg_replace('/[^-_0-9a-zA-Z]/','',$user_group_two);
	$agent_script_override = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_script_override);
	$inbound_list_script_override = preg_replace('/[^-_0-9a-zA-Z]/','',$inbound_list_script_override);
	$agent_hangup_route = preg_replace('/[^-_0-9a-zA-Z]/','',$agent_hangup_route);
	$show_confetti = preg_replace('/[^-_0-9a-zA-Z]/','',$show_confetti);
	$webphone_settings = preg_replace('/[^-_0-9a-zA-Z]/','',$webphone_settings);
	$demographic_quotas = preg_replace('/[^-_0-9a-zA-Z]/','',$demographic_quotas);
	$demographic_quotas_container = preg_replace('/[^-_0-9a-zA-Z]/','',$demographic_quotas_container);
	$weekday_resets_container = preg_replace('/[^-_0-9a-zA-Z]/','',$weekday_resets_container);
	$second_alert_container = preg_replace('/[^-_0-9a-zA-Z]/','',$second_alert_container);
	$second_alert_only = preg_replace('/[^-_0-9a-zA-Z]/','',$second_alert_only);
	$third_alert_container = preg_replace('/[^-_0-9a-zA-Z]/','',$third_alert_container);
	$third_alert_only = preg_replace('/[^-_0-9a-zA-Z]/','',$third_alert_only);
	$state_descriptions = preg_replace('/[^-_0-9a-zA-Z]/','',$state_descriptions);

	### ALPHA-NUMERIC and underscore 
	$qc_statuses_id = preg_replace('/[^_0-9a-zA-Z]/','',$qc_statuses_id);

	### ALPHA-NUMERIC and underscore and dash and slash and dot
	$menu_timeout_prompt = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$menu_timeout_prompt);
	$menu_invalid_prompt = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$menu_invalid_prompt);
	$after_hours_message_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$after_hours_message_filename);
	$welcome_message_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$welcome_message_filename);
	$onhold_prompt_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$onhold_prompt_filename);
	$hold_time_option_callback_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$hold_time_option_callback_filename);
	$agent_alert_exten = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$agent_alert_exten);
	$filename = preg_replace('/[^-\/\._0-9a-zA-Z]/','',$filename);
	$am_message_exten = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$am_message_exten);
	$am_message_exten_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$am_message_exten_override);
	$campaign_groups = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$campaign_groups);
	$blind_monitor_filename = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$blind_monitor_filename);
	$hold_time_option_press_filename = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$hold_time_option_press_filename);
	$default_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$default_afterhours_filename_override);
	$sunday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$sunday_afterhours_filename_override);
	$monday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$monday_afterhours_filename_override);
	$tuesday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$tuesday_afterhours_filename_override);
	$wednesday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$wednesday_afterhours_filename_override);
	$thursday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$thursday_afterhours_filename_override);
	$friday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$friday_afterhours_filename_override);
	$saturday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$saturday_afterhours_filename_override);
	$admin_web_directory = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$admin_web_directory);
	$tts_voice = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$tts_voice);
	$wait_time_option_callback_filename = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$wait_time_option_callback_filename);
	$wait_time_option_press_filename = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$wait_time_option_press_filename);
	$eht_minimum_prompt_filename = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$eht_minimum_prompt_filename);
	$queuemetrics_phone_environment = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$queuemetrics_phone_environment);
	$active_twin_server_ip = preg_replace('/[^-\|\/\._0-9a-zA-Z]/','',$active_twin_server_ip);
	$safe_harbor_audio = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$safe_harbor_audio);
	$alt_log_server_ip = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$alt_log_server_ip);
	$alt_log_dbname = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$alt_log_dbname);
	$alt_log_login = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$alt_log_login);
	$alt_log_pass = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$alt_log_pass);
	$survey_first_audio_file = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$survey_first_audio_file);
	$survey_opt_in_audio_file = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$survey_opt_in_audio_file);
	$survey_ni_audio_file = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$survey_ni_audio_file);
	$survey_third_audio_file = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$survey_third_audio_file);
	$survey_fourth_audio_file = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$survey_fourth_audio_file);
	$safe_harbor_audio_field = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$safe_harbor_audio_field);
	$voicemail_greeting = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$voicemail_greeting);
	$old_voicemail_greeting = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$old_voicemail_greeting);
	$meetme_enter_login_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$meetme_enter_login_filename);
	$meetme_enter_leave3way_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$meetme_enter_leave3way_filename);
	$nva_error_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$nva_error_filename);
	$inbound_survey_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$inbound_survey_filename);
	$inbound_survey_question_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$inbound_survey_question_filename);
	$closing_time_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$closing_time_filename);
	$closing_time_end_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$closing_time_end_filename);
	$dead_trigger_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$dead_trigger_filename);
	$cid_cb_valid_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$cid_cb_valid_filename);
	$cid_cb_confirmed_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$cid_cb_confirmed_filename);
	$cid_cb_enter_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$cid_cb_enter_filename);
	$cid_cb_you_entered_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$cid_cb_you_entered_filename);
	$cid_cb_press_to_confirm_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$cid_cb_press_to_confirm_filename);
	$cid_cb_invalid_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$cid_cb_invalid_filename);
	$cid_cb_reenter_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$cid_cb_reenter_filename);
	$cid_cb_error_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$cid_cb_error_filename);
	$place_in_line_caller_number_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$place_in_line_caller_number_filename);
	$place_in_line_you_next_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$place_in_line_you_next_filename);
	$audio_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$audio_filename);
	$agent_hangup_value = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$agent_hangup_value);
	$second_alert_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$second_alert_filename);
	$third_alert_filename = preg_replace('/[^-\/\|\._0-9a-zA-Z]/','',$third_alert_filename);

	### ALPHA-NUMERIC and underscore and dash and slash and dot and comma
	$menu_prompt = preg_replace('/[^-\/\|\,\._0-9a-zA-Z]/','',$menu_prompt);

	### ALPHA-NUMERIC and underscore and dash and comma
	$logins_list = preg_replace('/[^-\,\_0-9a-zA-Z]/','',$logins_list);
	$forced_timeclock_login = preg_replace('/[^-\,\_0-9a-zA-Z]/','',$forced_timeclock_login);
	$uniqueid_status_prefix = preg_replace('/[^-\,\_0-9a-zA-Z]/','',$uniqueid_status_prefix);

	### ALPHA-NUMERIC and spaces
	$lead_order = preg_replace('/[^ 0-9a-zA-Z]/','',$lead_order);
	### ALPHA-NUMERIC and spaces and dashes and underscores
	$preset_name = preg_replace('/[^- \_0-9a-zA-Z]/','',$preset_name);
	$selected_language = preg_replace('/[^- \_0-9a-zA-Z]/','',$selected_language);
	$default_language = preg_replace('/[^- \_0-9a-zA-Z]/','',$default_language);
	$opensips_cid_name = preg_replace('/[^- \_0-9a-zA-Z]/','',$opensips_cid_name);

	### ALPHA-NUMERIC and hash
	$group_color = preg_replace('/[^\#0-9a-zA-Z]/','',$group_color);
	$script_color = preg_replace('/[^\#0-9a-zA-Z]/','',$script_color);
	### ALPHA-NUMERIC and hash and star and dot and underscore
	$hold_time_option_exten = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$hold_time_option_exten);
	$voicemail_ext = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$voicemail_ext);
	$phone = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$phone);
	$phone_code = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$phone_code);
	$wait_time_option_exten = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$wait_time_option_exten);
	$filter_voicemail_ext = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$filter_voicemail_ext);
	$filter_phone_code = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$filter_phone_code);
	$filter_phone = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$filter_phone);
	$preset_number = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$preset_number);
	$no_agent_ingroup_extension = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$no_agent_ingroup_extension);
	$pre_filter_extension = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$pre_filter_extension);
	$max_queue_ingroup_extension = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$max_queue_ingroup_extension);
	$report_server = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$report_server);
	$dl_server = preg_replace('/[^\*\#\.\_0-9a-zA-Z]/','',$dl_server);

	### ALPHA-NUMERIC and hash and star and dot and underscore and colon and plus sign
	$did_pattern = preg_replace('/[^:\+\*\#\.\_0-9a-zA-Z]/','',$did_pattern);
	$web_loader_phone_strip = preg_replace('/[^:\+\*\#\.\_0-9a-zA-Z]/','',$web_loader_phone_strip);
	$manual_dial_phone_strip = preg_replace('/[^:\+\*\#\.\_0-9a-zA-Z]/','',$manual_dial_phone_strip);
	$mobile_number = preg_replace('/[^:\+\*\#\.\_0-9a-zA-Z]/','',$mobile_number);

	### ALPHA-NUMERIC and spaces dots, commas, dashes, underscores
	$adaptive_dl_diff_target = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$adaptive_dl_diff_target);
	$adaptive_intensity = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$adaptive_intensity);
	$asterisk_version = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$asterisk_version);
	$call_time_comments = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$call_time_comments);
	$call_time_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$call_time_name);
	$campaign_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$campaign_name);
	$campaign_rec_filename = preg_replace('/[^-\.\_0-9a-zA-Z]/','',$campaign_rec_filename);
	$ingroup_rec_filename = preg_replace('/[^-\.\_0-9a-zA-Z]/','',$ingroup_rec_filename);
	$company = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$company);
	$full_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$full_name);
	$fullname = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$fullname);
	$group_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$group_name);
	$HKstatus = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$HKstatus);
	$lead_filter_comments = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$lead_filter_comments);
	$lead_filter_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$lead_filter_name);
	$list_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$list_name);
	$local_gmt = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$local_gmt);
	$new_fullname = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$new_fullname);
	$phone_type = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$phone_type);
	$picture = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$picture);
	$script_comments = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$script_comments);
	$script_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$script_name);
	$server_description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$server_description);
	$status = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$status);
	$status_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$status_name);
	$wrapup_message = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$wrapup_message);
	$pause_code_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$pause_code_name);
	$campaign_description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$campaign_description);
	$list_description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$list_description);
	$vcl_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$vcl_name);
	$vsc_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$vsc_name);
	$vsc_description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$vsc_description);
	$code_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$code_name);
	$alias_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$alias_name);
	$shift_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$shift_name);
	$did_description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$did_description);
	$template_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$template_name);
	$carrier_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$carrier_name);
	$group_alias_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$group_alias_name);
	$caller_id_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$caller_id_name);
	$user_code = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$user_code);
	$territory = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$territory);
	$tts_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$tts_name);
	$moh_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$moh_name);
	$timer_action_message = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$timer_action_message);
	$default_codecs = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$default_codecs);
	$codecs_list = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$codecs_list);
	$label_title = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_title);
	$label_first_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_first_name);
	$label_middle_initial = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_middle_initial);
	$label_last_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_last_name);
	$label_address1 = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_address1);
	$label_address2 = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_address2);
	$label_address3 = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_address3);
	$label_city = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_city);
	$label_state = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_state);
	$label_province = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_province);
	$label_postal_code = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_postal_code);
	$label_vendor_lead_code = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_vendor_lead_code);
	$label_gender = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_gender);
	$label_phone_number = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_phone_number);
	$label_phone_code = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_phone_code);
	$label_alt_phone = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_alt_phone);
	$label_security_phrase = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_security_phrase);
	$label_email = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_email);
	$label_comments = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_comments);
	$slave_db_server = preg_replace('/[^- \.\,\:\_0-9a-zA-Z]/','',$slave_db_server);
	$filter_phone_group_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$filter_phone_group_name);
	$filter_phone_group_description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$filter_phone_group_description);
	$filter_clean_cid_number = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$filter_clean_cid_number);
	$label_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_name);
	$default_local_gmt = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$default_local_gmt);
	$cid_description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$cid_description);
	$description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$description);
	$first_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$first_name);
	$last_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$last_name);
	$bu_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$bu_name);
	$department = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$department);
	$group = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$group);
	$job_title = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$job_title);
	$location = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$location);
	$holiday_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$holiday_name);
	$holiday_comments = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$holiday_comments);
	$api_allowed_functions = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$api_allowed_functions);
	$agent_display_fields = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$agent_display_fields);
	$container_notes = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$container_notes);
	$did_carrier_description = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$did_carrier_description);
	$status_group_notes = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$status_group_notes);
	$colors_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$colors_name);
	$web_logo = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$web_logo);
	$user_nickname = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$user_nickname);
	$customer_chat_survey_text = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$customer_chat_survey_text);
	$agent_script = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$agent_script);
	$report_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$report_name);
	$dl_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$dl_name);
	$drop_status = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$drop_status);
	$ip_list_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$ip_list_name);
	$cid_group_notes = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$cid_group_notes);
	$populate_lead_vendor = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$populate_lead_vendor);
	$leave_vm_message_group_notes = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$leave_vm_message_group_notes);
	$audio_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$audio_name);
	$populate_lead_comments = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$populate_lead_comments);
	$label_lead_id = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_lead_id);
	$label_list_id = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_list_id);
	$label_entry_date = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_entry_date);
	$label_gmt_offset_now = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_gmt_offset_now);
	$label_source_id = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_source_id);
	$label_called_since_last_reset = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_called_since_last_reset);
	$label_status = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_status);
	$label_user = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_user);
	$label_date_of_birth = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_date_of_birth);
	$label_country_code = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_country_code);
	$label_last_local_call_time = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_last_local_call_time);
	$label_called_count = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_called_count);
	$label_rank = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_rank);
	$label_owner = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_owner);
	$label_entry_list_id = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$label_entry_list_id);
	$user_location = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$user_location);
	$queue_group_name = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$queue_group_name);
	$qc_scorecard_id = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$qc_scorecard_id);
	$city_rule = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$city_rule);
	$county_rule = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$county_rule);
	$ac_rule = preg_replace('/[^- \.\,\_0-9a-zA-Z]/','',$ac_rule);

	### ALPHA-NUMERIC and underscore and dash and slash and at and dot
	$call_out_number_group = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$call_out_number_group);
	$client_browser = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$client_browser);
	$DBX_server = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$DBX_server);
	$DBY_server = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$DBY_server);
	$dtmf_send_extension = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$dtmf_send_extension);
	$install_directory = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$install_directory);
	$old_extension = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$old_extension);
	$telnet_host = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$telnet_host);
	$queuemetrics_dbname = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$queuemetrics_dbname);
	$queuemetrics_login = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$queuemetrics_login);
	$queuemetrics_pass = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$queuemetrics_pass);
	$email = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$email);
	$vtiger_dbname = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$vtiger_dbname);
	$vtiger_login = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$vtiger_login);
	$vtiger_pass = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$vtiger_pass);
	$external_server_ip = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$external_server_ip);
	$alt_server_ip = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$alt_server_ip);
	$email_from = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$email_from);
	$email_to = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$email_to);
	$ftp_server = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$ftp_server);
	$ftp_directory = preg_replace('/[^-\.\:\/\@\_0-9a-zA-Z]/','',$ftp_directory);

	### ALPHA-NUMERIC and underscore and dash and slash and at and dot and space
	$custom_one = preg_replace('/[^- \.\:\/\@\_0-9a-zA-Z]/','',$custom_one);
	$custom_two = preg_replace('/[^- \.\:\/\@\_0-9a-zA-Z]/','',$custom_two);
	$custom_three = preg_replace('/[^- \.\:\/\@\_0-9a-zA-Z]/','',$custom_three);
	$custom_four = preg_replace('/[^- \.\:\/\@\_0-9a-zA-Z]/','',$custom_four);
	$custom_five = preg_replace('/[^- \.\:\/\@\_0-9a-zA-Z]/','',$custom_five);
	$email_subject = preg_replace('/[^- \.\:\/\@\_0-9a-zA-Z]/','',$email_subject);

	### ALPHA-NUMERIC and underscore and dash and slash and at and dot and pound and star
	$extension = preg_replace('/[^-\*\#\.\:\/\@\_0-9a-zA-Z]/','',$extension);
	$new_extension = preg_replace('/[^-\*\#\.\:\/\@\_0-9a-zA-Z]/','',$new_extension);
	$timer_action_destination = preg_replace('/[^-\*\#\.\:\/\@\_0-9a-zA-Z]/','',$timer_action_destination);
	$filter_extension = preg_replace('/[^-\*\#\.\:\/\@\_0-9a-zA-Z]/','',$filter_extension);

	### ALPHA-NUMERIC and space and underscore and dash and slash and at and dot and pound and star and pipe and comma
	$ivr_park_call_agi = preg_replace('/[^- \*\#\.\,\:\/\|\@\_0-9a-zA-Z]/','',$ivr_park_call_agi);
	$source_phone = preg_replace('/[^- \*\#\.\,\:\/\|\@\_0-9a-zA-Z]/','',$source_phone);

	### ALPHA-NUMERIC and space and underscore and dash and slash and at and dot and pound and star and pipe and comma and equal
	$voicemail_options = preg_replace('/[^- \=\*\#\.\,\:\/\|\@\_0-9a-zA-Z]/','',$voicemail_options);

	### NUMERIC and comma and pipe
	$waitforsilence_options = preg_replace('/[^\|\,0-9a-zA-Z]/','',$waitforsilence_options);

	### value cleaning
	$no_agent_action_value = preg_replace('/[^-\/\|\_\#\*\,\.\_0-9a-zA-Z]/','',$no_agent_action_value);
	$areacode_filter_action_value = preg_replace('/[^-\/\|\_\#\*\,\.\_0-9a-zA-Z]/','',$areacode_filter_action_value);

	### ALPHA-NUMERIC and underscore and dash and slash and at and space and colon
	$vdc_header_date_format = preg_replace('/[^- \:\/\_0-9a-zA-Z]/','',$vdc_header_date_format);
	$vdc_customer_date_format = preg_replace('/[^- \:\/\_0-9a-zA-Z]/','',$vdc_customer_date_format);
	$menu_name = preg_replace('/[^- \:\/\_0-9a-zA-Z]/','',$menu_name);

	### ALPHA-NUMERIC and underscore and dash and at and space and parantheses
	$vdc_header_phone_format = preg_replace('/[^- \(\)\_0-9a-zA-Z]/', '',$vdc_header_phone_format);

	### ALPHA-NUMERIC and newlines
	$areacode_list = preg_replace('/[^\n0-9a-zA-Z]/', '',$areacode_list);

	### ALPHA-NUMERIC and newlines and period and colon
	$ip_address = preg_replace('/[^\n\.\:\0-9a-zA-Z]/', '',$ip_address);
	}
else
	{
	### ALPHA-NUMERIC ONLY ###
	$is_webphone = preg_replace('/[^-_0-9\p{L}]/u','',$is_webphone);
	$campaign_script = preg_replace('/[^0-9\p{L}]/u','',$campaign_script);
	$submit = preg_replace('/[^0-9\p{L}]/u','',$submit);
	$campaign_cid = preg_replace('/[^0-9\p{L}]/u','',$campaign_cid);
	$campaign_recording = preg_replace('/[^0-9\p{L}]/u','',$campaign_recording);
	$ADD = preg_replace('/[^0-9\p{L}]/u','',$ADD);
	$dial_prefix = preg_replace('/[^0-9\p{L}]/u','',$dial_prefix);
	$state_call_time_state = preg_replace('/[^0-9\p{L}]/u','',$state_call_time_state);
	$scheduled_callbacks = preg_replace('/[^0-9\p{L}]/u','',$scheduled_callbacks);
	$concurrent_transfers = preg_replace('/[^0-9\p{L}]/u','',$concurrent_transfers);
	$billable = preg_replace('/[^0-9\p{L}]/u','',$billable);
	$pause_code = preg_replace('/[^0-9\p{L}]/u','',$pause_code);
	$vicidial_recording_override = preg_replace('/[^0-9\p{L}]/u','',$vicidial_recording_override);
	$ingroup_recording_override = preg_replace('/[^0-9\p{L}]/u','',$ingroup_recording_override);
	$queuemetrics_log_id = preg_replace('/[^0-9\p{L}]/u','',$queuemetrics_log_id);
	$after_hours_exten = preg_replace('/[^0-9\p{L}]/u','',$after_hours_exten);
	$after_hours_voicemail = preg_replace('/[^0-9\p{L}]/u','',$after_hours_voicemail);
	$qc_script = preg_replace('/[^0-9\p{L}]/u','',$qc_script);
	$code = preg_replace('/[^0-9\p{L}]/u','',$code);
	$survey_no_response_action = preg_replace('/[^0-9\p{L}]/u','',$survey_no_response_action);
	$survey_ni_status = preg_replace('/[^0-9\p{L}]/u','',$survey_ni_status);
	$qc_get_record_launch = preg_replace('/[^0-9\p{L}]/u','',$qc_get_record_launch);
	$agent_pause_codes_active = preg_replace('/[^0-9\p{L}]/u','',$agent_pause_codes_active);
	$three_way_dial_prefix = preg_replace('/[^0-9\p{L}]/u','',$three_way_dial_prefix);
	$agent_shift_enforcement_override = preg_replace('/[^0-9\p{L}]/u','',$agent_shift_enforcement_override);
	$survey_third_status = preg_replace('/[^0-9\p{L}]/u','',$survey_third_status);
	$survey_fourth_status = preg_replace('/[^0-9\p{L}]/u','',$survey_fourth_status);
	$sounds_web_directory = preg_replace('/[^0-9\p{L}]/u','',$sounds_web_directory);
	$disable_alter_custphone = preg_replace('/[^0-9\p{L}]/u','',$disable_alter_custphone);
	$view_calls_in_queue = preg_replace('/[^0-9\p{L}]/u','',$view_calls_in_queue);
	$view_calls_in_queue_launch = preg_replace('/[^0-9\p{L}]/u','',$view_calls_in_queue_launch);
	$grab_calls_in_queue = preg_replace('/[^0-9\p{L}]/u','',$grab_calls_in_queue);
	$call_requeue_button = preg_replace('/[^0-9\p{L}]/u','',$call_requeue_button);
	$pause_after_each_call = preg_replace('/[^0-9\p{L}]/u','',$pause_after_each_call);
	$use_internal_dnc = preg_replace('/[^0-9\p{L}]/u','',$use_internal_dnc);
	$use_campaign_dnc = preg_replace('/[^0-9\p{L}]/u','',$use_campaign_dnc);
	$new_voicemail_id = preg_replace('/[^0-9\p{L}]/u','',$new_voicemail_id);
	$voicemail_id = preg_replace('/[^0-9a-zA-Z]/','',$voicemail_id);
	$status_id = preg_replace('/[^0-9\p{L}]/u','',$status_id);
	$agent_call_log_view = preg_replace('/[^0-9\p{L}]/u','',$agent_call_log_view);
	$agent_call_log_view_override = preg_replace('/[^0-9\p{L}]/u','',$agent_call_log_view_override);
	$queuemetrics_loginout = preg_replace('/[^0-9\p{L}]/u','',$queuemetrics_loginout);
	$queuemetrics_callstatus = preg_replace('/[^0-9\p{L}]/u','',$queuemetrics_callstatus);
	$hide_xfer_number_to_dial = preg_replace('/[^0-9\p{L}]/u','',$hide_xfer_number_to_dial);
	$manual_dial_prefix = preg_replace('/[^0-9\p{L}]/u','',$manual_dial_prefix);
	$customer_3way_hangup_logging = preg_replace('/[^0-9\p{L}]/u','',$customer_3way_hangup_logging);
	$customer_3way_hangup_action = preg_replace('/[^0-9\p{L}]/u','',$customer_3way_hangup_action);
	$queuemetrics_dispo_pause = preg_replace('/[^0-9\p{L}]/u','',$queuemetrics_dispo_pause);
	$per_call_notes = preg_replace('/[^0-9\p{L}]/u','',$per_call_notes);
	$my_callback_option = preg_replace('/[^0-9\p{L}]/u','',$my_callback_option);
	$auto_pause_precall_code = preg_replace('/[^0-9\p{L}]/u','',$auto_pause_precall_code);
	$disable_dispo_status = preg_replace('/[^0-9\p{L}]/u','',$disable_dispo_status);
	$action_xfer_cid = preg_replace('/[^0-9\p{L}]/u','',$action_xfer_cid);
	$callback_list_calltime = preg_replace('/[^0-9\p{L}]/u','',$callback_list_calltime);
	$pause_after_next_call = preg_replace('/[^0-9\p{L}]/u','',$pause_after_next_call);
	$owner_populate = preg_replace('/[^0-9\p{L}]/u','',$owner_populate);
	$dead_max_dispo = preg_replace('/[^0-9\p{L}]/u','',$dead_max_dispo);
	$dispo_max_dispo = preg_replace('/[^0-9\p{L}]/u','',$dispo_max_dispo);
	$wrapup_bypass = preg_replace('/[^0-9\p{L}]/u','',$wrapup_bypass);
	$wrapup_after_hotkey = preg_replace('/[^0-9\p{L}]/u','',$wrapup_after_hotkey);
	$show_previous_callback = preg_replace('/[^0-9\p{L}]/u','',$show_previous_callback);
	$clear_script = preg_replace('/[^0-9\p{L}]/u','',$clear_script);
	$allow_chats = preg_replace('/[^0-9\p{L}]/u','',$allow_chats);
	$allow_emails = preg_replace('/[^0-9\p{L}]/u','',$allow_emails);
	$status_display_ingroup = preg_replace('/[^0-9\p{L}]/u','',$status_display_ingroup);
	$populate_lead_ingroup = preg_replace('/[^0-9\p{L}]/u','',$populate_lead_ingroup);
	$nva_new_status = preg_replace('/[^0-9\p{L}]/u','',$nva_new_status);
	$report_default_format = preg_replace('/[^0-9\p{L}]/u','',$report_default_format);
	$menu_background = preg_replace('/[^0-9\p{L}]/u','',$menu_background);
	$frame_background = preg_replace('/[^0-9\p{L}]/u','',$frame_background);
	$std_row1_background = preg_replace('/[^0-9\p{L}]/u','',$std_row1_background);
	$std_row2_background = preg_replace('/[^0-9\p{L}]/u','',$std_row2_background);
	$std_row3_background = preg_replace('/[^0-9\p{L}]/u','',$std_row3_background);
	$std_row4_background = preg_replace('/[^0-9\p{L}]/u','',$std_row4_background);
	$std_row5_background = preg_replace('/[^0-9\p{L}]/u','',$std_row5_background);
	$alt_row1_background = preg_replace('/[^0-9\p{L}]/u','',$alt_row1_background);
	$alt_row2_background = preg_replace('/[^0-9\p{L}]/u','',$alt_row2_background);
	$alt_row3_background = preg_replace('/[^0-9\p{L}]/u','',$alt_row3_background);
	$button_color = preg_replace('/[^0-9\p{L}]/u','',$button_color);
	$dead_to_dispo = preg_replace('/[^0-9\p{L}]/u','',$dead_to_dispo);
	$routing_prefix = preg_replace('/[^0-9\p{L}]/u','',$routing_prefix);
	$inbound_survey = preg_replace('/[^0-9\p{L}]/u','',$inbound_survey);
	$pause_max_dispo = preg_replace('/[^0-9\p{L}]/u','',$pause_max_dispo);
	$areacode = preg_replace('/[^0-9\p{L}]/u','',$areacode);
	$require_mgr_approval = preg_replace('/[^0-9\p{L}]/u','',$require_mgr_approval);
	$mute_recordings = preg_replace('/[^0-9\p{L}]/u','',$mute_recordings);
	$leave_vm_no_dispo = preg_replace('/[^0-9\p{L}]/u','',$leave_vm_no_dispo);
	$amd_agent_route_options = preg_replace('/[^0-9\p{L}]/u','',$amd_agent_route_options);

	### ALPHA-NUMERIC and spaces and hash and star and comma
	$xferconf_a_dtmf = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',trim($xferconf_a_dtmf));
	$xferconf_b_dtmf = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',trim($xferconf_b_dtmf));
	$xferconf_c_dtmf = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',trim($xferconf_c_dtmf));
	$xferconf_d_dtmf = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',trim($xferconf_d_dtmf));
	$xferconf_e_dtmf = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',trim($xferconf_e_dtmf));
	$survey_third_digit = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',$survey_third_digit);
	$survey_fourth_digit = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',$survey_fourth_digit);
	$survey_third_exten = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',$survey_third_exten);
	$survey_fourth_exten = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',$survey_fourth_exten);
	$preset_dtmf = preg_replace('/[^ \,\*\#0-9\p{L}]/u','',$preset_dtmf);

	### ALPHA-NUMERIC and underscore and dash
	$agi_output = preg_replace('/[^-_0-9\p{L}]/u','',$agi_output);
	$ASTmgrSECRET = preg_replace('/[^-_0-9\p{L}]/u','',$ASTmgrSECRET);
	$ASTmgrUSERNAME = preg_replace('/[^-_0-9\p{L}]/u','',$ASTmgrUSERNAME);
	$ASTmgrUSERNAMElisten = preg_replace('/[^-_0-9\p{L}]/u','',$ASTmgrUSERNAMElisten);
	$ASTmgrUSERNAMEsend = preg_replace('/[^-_0-9\p{L}]/u','',$ASTmgrUSERNAMEsend);
	$ASTmgrUSERNAMEupdate = preg_replace('/[^-_0-9\p{L}]/u','',$ASTmgrUSERNAMEupdate);
	$call_time_id = preg_replace('/[^-_0-9\p{L}]/u','',$call_time_id);
	$campaign_id = preg_replace('/[^-_0-9\p{L}]/u','',$campaign_id);
	$CoNfIrM = preg_replace('/[^-_0-9\p{L}]/u','',$CoNfIrM);
	$DBX_database = preg_replace('/[^-_0-9\p{L}]/u','',$DBX_database);
	$DBX_pass = preg_replace('/[^-_0-9\p{L}]/u','',$DBX_pass);
	$DBX_user = preg_replace('/[^-_0-9\p{L}]/u','',$DBX_user);
	$DBY_database = preg_replace('/[^-_0-9\p{L}]/u','',$DBY_database);
	$DBY_pass = preg_replace('/[^-_0-9\p{L}]/u','',$DBY_pass);
	$DBY_user = preg_replace('/[^-_0-9\p{L}]/u','',$DBY_user);
	$dial_method = preg_replace('/[^-_0-9\p{L}]/u','',$dial_method);
	$dial_status_a = preg_replace('/[^-_0-9\p{L}]/u','',$dial_status_a);
	$dial_status_b = preg_replace('/[^-_0-9\p{L}]/u','',$dial_status_b);
	$dial_status_c = preg_replace('/[^-_0-9\p{L}]/u','',$dial_status_c);
	$dial_status_d = preg_replace('/[^-_0-9\p{L}]/u','',$dial_status_d);
	$dial_status_e = preg_replace('/[^-_0-9\p{L}]/u','',$dial_status_e);
	$ext_context = preg_replace('/[^-_0-9\p{L}]/u','',$ext_context);
	$group_id = preg_replace('/[^-_0-9\p{L}]/u','',$group_id);
	$lead_filter_id = preg_replace('/[^-_0-9\p{L}]/u','',$lead_filter_id);
	$local_call_time = preg_replace('/[^-_0-9\p{L}]/u','',$local_call_time);
	$login = preg_replace('/[^-_0-9\p{L}]/u','',$login);
	$login_campaign = preg_replace('/[^-_0-9\p{L}]/u','',$login_campaign);
	$login_pass = preg_replace('/[^-_0-9\p{L}]/u','',$login_pass);
	$login_user = preg_replace('/[^-_0-9\p{L}]/u','',$login_user);
	$new_login = preg_replace('/[^-_0-9\p{L}]/u','',$new_login);
	$new_pass = preg_replace('/[^-_0-9\p{L}]/u','',$new_pass);
	$next_agent_call = preg_replace('/[^-_0-9\p{L}]/u','',$next_agent_call);
	$old_campaign_id = preg_replace('/[^-_0-9\p{L}]/u','',$old_campaign_id);
	$old_server_id = preg_replace('/[^-_0-9\p{L}]/u','',$old_server_id);
	$OLDuser_group = preg_replace('/[^-_0-9\p{L}]/u','',$OLDuser_group);
	$park_file_name = preg_replace('/[^-_0-9\p{L}]/u','',$park_file_name);
	$pass = preg_replace('/[^-_0-9\p{L}]/u','',$pass);
	$phone_login = preg_replace('/[^-_0-9\p{L}]/u','',$phone_login);
	$phone_pass = preg_replace('/[^-_0-9\p{L}]/u','',$phone_pass);
	$PHP_AUTH_PW = preg_replace('/[^-_0-9\p{L}]/u','',$PHP_AUTH_PW);
	$PHP_AUTH_USER = preg_replace('/[^-_0-9\p{L}]/u','',$PHP_AUTH_USER);
	$protocol = preg_replace('/[^-_0-9\p{L}]/u','',$protocol);
	$server_id = preg_replace('/[^-_0-9\p{L}]/u','',$server_id);
	$stage = preg_replace('/[^-_0-9\p{L}]/u','',$stage);
	$state_rule = preg_replace('/[^-_0-9\p{L}]/u','',$state_rule);
	$holiday_rule = preg_replace('/[^-_0-9\p{L}]/u','',$holiday_rule);
	$trunk_restriction = preg_replace('/[^-_0-9\p{L}]/u','',$trunk_restriction);
	$user = preg_replace('/[^-_0-9\p{L}]/u','',$user);
	$user_group = preg_replace('/[^-_0-9\p{L}]/u','',$user_group);
	$VICIDIAL_park_on_filename = preg_replace('/[^-_0-9\p{L}]/u','',$VICIDIAL_park_on_filename);
	$auto_alt_dial = preg_replace('/[^-_0-9\p{L}]/u','',$auto_alt_dial);
	$dial_status = preg_replace('/[^-_0-9\p{L}]/u','',$dial_status);
	$queuemetrics_eq_prepend = preg_replace('/[^-_0-9\p{L}]/u','',$queuemetrics_eq_prepend);
	$vicidial_agent_disable = preg_replace('/[^-_0-9\p{L}]/u','',$vicidial_agent_disable);
	$alter_custdata_override = preg_replace('/[^-_0-9\p{L}]/u','',$alter_custdata_override);
	$list_order_mix = preg_replace('/[^-_0-9\p{L}]/u','',$list_order_mix);
	$vcl_id = preg_replace('/[^-_0-9\p{L}]/u','',$vcl_id);
	$mix_method = preg_replace('/[^-_0-9\p{L}]/u','',$mix_method);
	$category = preg_replace('/[^-_0-9\p{L}]/u','',$category);
	$vsc_id = preg_replace('/[^-_0-9\p{L}]/u','',$vsc_id);
	$moh_context = preg_replace('/[^-_0-9\p{L}]/u','',$moh_context);
	$source_campaign_id = preg_replace('/[^-_0-9\p{L}]/u','',$source_campaign_id);
	$source_user_id = preg_replace('/[^-_0-9\p{L}]/u','',$source_user_id);
	$source_group_id = preg_replace('/[^-_0-9\p{L}]/u','',$source_group_id);
	$default_xfer_group = preg_replace('/[^-_0-9\p{L}]/u','',$default_xfer_group);
	$drop_exten = preg_replace('/[^-_0-9\p{L}]/u','',$drop_exten);
	$safe_harbor_exten = preg_replace('/[^-_0-9\p{L}]/u','',$safe_harbor_exten);
	$drop_action = preg_replace('/[^-_0-9\p{L}]/u','',$drop_action);
	$drop_inbound_group = preg_replace('/[^-_0-9\p{L}]/u','',$drop_inbound_group);
	$afterhours_xfer_group = preg_replace('/[^-_0-9\p{L}]/u','',$afterhours_xfer_group);
	$after_hours_action = preg_replace('/[^-_0-9\p{L}]/u','',$after_hours_action);
	$alias_id = preg_replace('/[^-_0-9\p{L}]/u','',$alias_id);
	$shift_id = preg_replace('/[^-_0-9\p{L}]/u','',$shift_id);
	$qc_shift_id = preg_replace('/[^-_0-9\p{L}]/u','',$qc_shift_id);
	$survey_method = preg_replace('/[^-_0-9\p{L}]/u','',$survey_method);
	$alter_custphone_override = preg_replace('/[^-_0-9\p{L}]/u','',$alter_custphone_override);
	$manual_dial_filter = preg_replace('/[^-_0-9\p{L}]/u','',$manual_dial_filter);
	$manual_dial_search_filter = preg_replace('/[^-_0-9\p{L}]/u','',$manual_dial_search_filter);
	$agent_clipboard_copy = preg_replace('/[^-_0-9\p{L}]/u','',$agent_clipboard_copy);
	$hold_time_option = preg_replace('/[^-_0-9\p{L}]/u','',$hold_time_option);
	$hold_time_option_xfer_group = preg_replace('/[^-_0-9\p{L}]/u','',$hold_time_option_xfer_group);
	$hold_recall_xfer_group = preg_replace('/[^-_0-9\p{L}]/u','',$hold_recall_xfer_group);
	$play_welcome_message = preg_replace('/[^-_0-9\p{L}]/u','',$play_welcome_message);
	$did_route = preg_replace('/[^-_0-9\p{L}]/u','',$did_route);
	$user_unavailable_action = preg_replace('/[^-_0-9\p{L}]/u','',$user_unavailable_action);
	$user_route_settings_ingroup = preg_replace('/[^-_0-9\p{L}]/u','',$user_route_settings_ingroup);
	$call_handle_method = preg_replace('/[^-_0-9\p{L}]/u','',$call_handle_method);
	$agent_search_method = preg_replace('/[^-_0-9\p{L}]/u','',$agent_search_method);
	$hold_time_option_voicemail = preg_replace('/[^-_0-9\p{L}]/u','',$hold_time_option_voicemail);
	$exten_context = preg_replace('/[^-_0-9\p{L}]/u','',$exten_context);
	$three_way_call_cid = preg_replace('/[^-_0-9\p{L}]/u','',$three_way_call_cid);
	$web_form_target = preg_replace('/[^-_0-9\p{L}]/u','',$web_form_target);
	$recording_web_link = preg_replace('/[^-_0-9\p{L}]/u','',$recording_web_link);
	$vtiger_search_category = preg_replace('/[^-_0-9\p{L}]/u','',$vtiger_search_category);
	$vtiger_create_call_record = preg_replace('/[^-_0-9\p{L}]/u','',$vtiger_create_call_record);
	$vtiger_create_lead_record = preg_replace('/[^-_0-9\p{L}]/u','',$vtiger_create_lead_record);
	$vtiger_screen_login = preg_replace('/[^-_0-9\p{L}]/u','',$vtiger_screen_login);
	$cpd_amd_action = preg_replace('/[^-_0-9\p{L}]/u','',$cpd_amd_action);
	$cpd_unknown_action = preg_replace('/[^-_0-9\p{L}]/u','',$cpd_unknown_action);
	$template_id = preg_replace('/[^-_0-9\p{L}]/u','',$template_id);
	$carrier_id = preg_replace('/[^-_0-9\p{L}]/u','',$carrier_id);
	$source_carrier = preg_replace('/[^-_0-9\p{L}]/u','',$source_carrier);
	$group_alias_id = preg_replace('/[^-_0-9\p{L}]/u','',$group_alias_id);
	$default_group_alias = preg_replace('/[^-_0-9\p{L}]/u','',$default_group_alias);
	$vtiger_search_dead = preg_replace('/[^-_0-9\p{L}]/u','',$vtiger_search_dead);
	$menu_id = preg_replace('/[^-_0-9\p{L}]/u','',$menu_id);
	$source_menu = preg_replace('/[^-_0-9\p{L}]/u','',$source_menu);
	$call_time_id = preg_replace('/[^-_0-9\p{L}]/u','',$call_time_id);
	$phone_context = preg_replace('/[^-_0-9\p{L}]/u','',$phone_context);
	$new_conf_secret = preg_replace('/[^-_0-9\p{L}]/u','',$new_conf_secret);
	$conf_secret = preg_replace('/[^-_0-9\p{L}]/u','',$conf_secret);
	$tracking_group = preg_replace('/[^-_0-9\p{L}]/u','',$tracking_group);
	$no_agent_no_queue = preg_replace('/[^-_0-9\p{L}]/u','',$no_agent_no_queue);
	$no_agent_action = preg_replace('/[^-_0-9\p{L}]/u','',$no_agent_action);
	$quick_transfer_button = preg_replace('/[^-_0-9\p{L}]/u','',$quick_transfer_button);
	$prepopulate_transfer_preset = preg_replace('/[^-_0-9\p{L}]/u','',$prepopulate_transfer_preset);
	$tts_id = preg_replace('/[^-_0-9\p{L}]/u','',$tts_id);
	$drop_rate_group = preg_replace('/[^-_0-9\p{L}]/u','',$drop_rate_group);
	$agent_dial_owner_only = preg_replace('/[^-_0-9\p{L}]/u','',$agent_dial_owner_only);
	$reset_time = preg_replace('/[^-_0-9\p{L}]/u','',$reset_time);
	$moh_id = preg_replace('/[^-_0-9\p{L}]/u','',$moh_id);
	$mohsuggest = preg_replace('/[^-_0-9\p{L}]/u','',$mohsuggest);
	$drop_inbound_group_override = preg_replace('/[^-_0-9\p{L}]/u','',$drop_inbound_group_override);
	$timer_action = preg_replace('/[^-_0-9\p{L}]/u','',$timer_action);
	$record_call = preg_replace('/[^-_0-9\p{L}]/u','',$record_call);
	$scheduled_callbacks_alert = preg_replace('/[^-_0-9\p{L}]/u','',$scheduled_callbacks_alert);
	$extension_group_id = preg_replace('/[^-_0-9\p{L}]/u','',$extension_group_id);
	$extension_group = preg_replace('/[^-_0-9\p{L}]/u','',$extension_group);
	$scheduled_callbacks_count = preg_replace('/[^-_0-9\p{L}]/u','',$scheduled_callbacks_count);
	$manual_dial_override = preg_replace('/[^-_0-9\p{L}]/u','',$manual_dial_override);
	$blind_monitor_warning = preg_replace('/[^-_0-9\p{L}]/u','',$blind_monitor_warning);
	$uniqueid_status_display = preg_replace('/[^-_0-9\p{L}]/u','',$uniqueid_status_display);
	$hold_time_option_callmenu = preg_replace('/[^-_0-9\p{L}]/u','',$hold_time_option_callmenu);
	$inbound_queue_no_dial = preg_replace('/[^-_0-9\p{L}]/u','',$inbound_queue_no_dial);
	$hold_time_second_option = preg_replace('/[^-_0-9\p{L}]/u','',$hold_time_second_option);
	$hold_time_third_option = preg_replace('/[^-_0-9\p{L}]/u','',$hold_time_third_option);
	$wait_hold_option_priority = preg_replace('/[^-_0-9\p{L}]/u','',$wait_hold_option_priority);
	$wait_time_option = preg_replace('/[^-_0-9\p{L}]/u','',$wait_time_option);
	$wait_time_second_option = preg_replace('/[^-_0-9\p{L}]/u','',$wait_time_second_option);
	$wait_time_third_option = preg_replace('/[^-_0-9\p{L}]/u','',$wait_time_third_option);
	$wait_time_option_xfer_group = preg_replace('/[^-_0-9\p{L}]/u','',$wait_time_option_xfer_group);
	$wait_time_option_callmenu = preg_replace('/[^-_0-9\p{L}]/u','',$wait_time_option_callmenu);
	$wait_time_option_voicemail = preg_replace('/[^-_0-9\p{L}]/u','',$wait_time_option_voicemail);
	$filter_phone_group_id = preg_replace('/[^-_0-9\p{L}]/u','',$filter_phone_group_id);
	$filter_action = preg_replace('/[^-_0-9\p{L}]/u','',$filter_action);
	$filter_user_unavailable_action = preg_replace('/[^-_0-9\p{L}]/u','',$filter_user_unavailable_action);
	$filter_user_route_settings_ingroup = preg_replace('/[^-_0-9\p{L}]/u','',$filter_user_route_settings_ingroup);
	$filter_agent_search_method = preg_replace('/[^-_0-9\p{L}]/u','',$filter_agent_search_method);
	$filter_campaign_id = preg_replace('/[^-_0-9\p{L}]/u','',$filter_campaign_id);
	$filter_group_id = preg_replace('/[^-_0-9\p{L}]/u','',$filter_group_id);
	$filter_menu_id = preg_replace('/[^-_0-9\p{L}]/u','',$filter_menu_id);
	$filter_call_handle_method = preg_replace('/[^-_0-9\p{L}]/u','',$filter_call_handle_method);
	$filter_user = preg_replace('/[^-_0-9\p{L}]/u','',$filter_user);
	$filter_exten_context = preg_replace('/[^-_0-9\p{L}]/u','',$filter_exten_context);
	$webphone_systemkey = preg_replace('/[^-_0-9\p{L}]/u','',$webphone_systemkey);
	$webphone_dialpad = preg_replace('/[^-_0-9\p{L}]/u','',$webphone_dialpad);
	$webphone_systemkey_override = preg_replace('/[^-_0-9\p{L}]/u','',$webphone_systemkey_override);
	$webphone_dialpad_override = preg_replace('/[^-_0-9\p{L}]/u','',$webphone_dialpad_override);
	$default_phone_registration_password = preg_replace('/[^-_0-9\p{L}]/u','',$default_phone_registration_password);
	$default_phone_login_password = preg_replace('/[^-_0-9\p{L}]/u','',$default_phone_login_password);
	$default_server_password = preg_replace('/[^-_0-9\p{L}]/u','',$default_server_password);
	$ivr_park_call = preg_replace('/[^-_0-9\p{L}]/u','',$ivr_park_call);
	$manual_preview_dial = preg_replace('/[^-_0-9\p{L}]/u','',$manual_preview_dial);
	$realtime_agent_time_stats = preg_replace('/[^-_0-9\p{L}]/u','',$realtime_agent_time_stats);
	$api_manual_dial = preg_replace('/[^-_0-9\p{L}]/u','',$api_manual_dial);
	$manual_dial_call_time_check = preg_replace('/[^-_0-9\p{L}]/u','',$manual_dial_call_time_check);
	$lead_order_secondary = preg_replace('/[^-_0-9\p{L}]/u','',$lead_order_secondary);
	$agent_lead_search = preg_replace('/[^-_0-9\p{L}]/u','',$agent_lead_search);
	$agent_lead_search_method = preg_replace('/[^-_0-9\p{L}]/u','',$agent_lead_search_method);
	$manual_dial_cid = preg_replace('/[^-_0-9\p{L}]/u','',$manual_dial_cid);
	$post_phone_time_diff_alert = preg_replace('/[^-_0-9\p{L}]/u','',$post_phone_time_diff_alert);
	$custom_3way_button_transfer = preg_replace('/[^-_0-9\p{L}]/u','',$custom_3way_button_transfer);
	$available_only_tally_threshold_agents = preg_replace('/[^-_0-9\p{L}]/u','',$available_only_tally_threshold_agents);
	$dial_level_threshold_agents = preg_replace('/[^-_0-9\p{L}]/u','',$dial_level_threshold_agents);
	$time_zone_setting = preg_replace('/[^-_0-9\p{L}]/u','',$time_zone_setting);
	$safe_harbor_menu_id = preg_replace('/[^-_0-9\p{L}]/u','',$safe_harbor_menu_id);
	$survey_menu_id = preg_replace('/[^-_0-9\p{L}]/u','',$survey_menu_id);
	$dl_diff_target_method = preg_replace('/[^-_0-9\p{L}]/u','',$dl_diff_target_method);
	$disable_dispo_screen = preg_replace('/[^-_0-9\p{L}]/u','',$disable_dispo_screen);
	$screen_labels = preg_replace('/[^-_0-9\p{L}]/u','',$screen_labels);
	$label_hide_field_logs = preg_replace('/[^-_0-9\p{L}]/u','',$label_hide_field_logs);
	$label_id = preg_replace('/[^-_0-9\p{L}]/u','',$label_id);
	$status_display_fields = preg_replace('/[^-_0-9\p{L}]/u','',$status_display_fields);
	$voicemail_timezone = preg_replace('/[^-_0-9\p{L}]/u','',$voicemail_timezone);
	$default_voicemail_timezone = preg_replace('/[^-_0-9\p{L}]/u','',$default_voicemail_timezone);
	$on_hook_cid = preg_replace('/[^-_0-9\p{L}]/u','',$on_hook_cid);
	$pllb_grouping = preg_replace('/[^-_0-9\p{L}]/u','',$pllb_grouping);
	$user_start = preg_replace('/[^-_0-9\p{L}]/u','',$user_start);
	$drop_callmenu = preg_replace('/[^-_0-9\p{L}]/u','',$drop_callmenu);
	$after_hours_callmenu = preg_replace('/[^-_0-9\p{L}]/u','',$after_hours_callmenu);
	$survey_recording = preg_replace('/[^-_0-9\p{L}]/u','',$survey_recording);
	$dtmf_field = preg_replace('/[^-_0-9\p{L}]/u','',$dtmf_field);
	$preset_contact_search = preg_replace('/[^-_0-9\p{L}]/u','',$preset_contact_search);
	$admin_hide_phone_data = preg_replace('/[^-_0-9\p{L}]/u','',$admin_hide_phone_data);
	$max_calls_method = preg_replace('/[^-_0-9\p{L}]/u','',$max_calls_method);
	$max_calls_action = preg_replace('/[^-_0-9\p{L}]/u','',$max_calls_action);
	$in_group_dial = preg_replace('/[^-_0-9\p{L}]/u','',$in_group_dial);
	$in_group_dial_select = preg_replace('/[^-_0-9\p{L}]/u','',$in_group_dial_select);
	$queuemetrics_socket = preg_replace('/[^-_0-9\p{L}]/u','',$queuemetrics_socket);
	$holiday_id = preg_replace('/[^-_0-9\p{L}]/u','',$holiday_id);
	$holiday_date = preg_replace('/[^-_0-9\p{L}]/u','',$holiday_date);
	$holiday_status = preg_replace('/[^-_0-9\p{L}]/u','',$holiday_status);
	$expiration_date = preg_replace('/[^-_0-9\p{L}]/u','',$expiration_date);
	$amd_inbound_group = preg_replace('/[^-_0-9\p{L}]/u','',$amd_inbound_group);
	$amd_callmenu = preg_replace('/[^-_0-9\p{L}]/u','',$amd_callmenu);
	$filter_inbound_number = preg_replace('/[^-_0-9\p{L}]/u','',$filter_inbound_number);
	$filter_dnc_campaign = preg_replace('/[^-_0-9\p{L}]/u','',$filter_dnc_campaign);
	$manual_dial_search_checkbox = preg_replace('/[^-_0-9\p{L}]/u','',$manual_dial_search_checkbox);
	$alt_number_dialing = preg_replace('/[^-_0-9\p{L}]/u','',$alt_number_dialing);
	$no_agent_ingroup_redirect = preg_replace('/[^-_0-9\p{L}]/u','',$no_agent_ingroup_redirect);
	$no_agent_ingroup_id = preg_replace('/[^-_0-9\p{L}]/u','',$no_agent_ingroup_id);
	$pre_filter_phone_group_id = preg_replace('/[^-_0-9\p{L}]/u','',$pre_filter_phone_group_id);
	$shift_enforcement = preg_replace('/[^-_0-9\p{L}]/u','',$shift_enforcement);
	$comments_all_tabs = preg_replace('/[^-_0-9\p{L}]/u','',$comments_all_tabs);
	$comments_dispo_screen = preg_replace('/[^-_0-9\p{L}]/u','',$comments_dispo_screen);
	$comments_callback_screen = preg_replace('/[^-_0-9\p{L}]/u','',$comments_callback_screen);
	$qc_comment_history = preg_replace('/[^-_0-9\p{L}]/u','',$qc_comment_history);
	$language_method = preg_replace('/[^-_0-9\p{L}]/u','',$language_method);
	$manual_dial_override_field = preg_replace('/[^-_0-9\p{L}]/u','',$manual_dial_override_field);
	$max_queue_ingroup_id = preg_replace('/[^-_0-9\p{L}]/u','',$max_queue_ingroup_id);
	$agent_debug_logging = preg_replace('/[^-_0-9\p{L}]/u','',$agent_debug_logging);
	$container_id = preg_replace('/[^-_0-9\p{L}]/u','',$container_id);
	$phone_defaults_container = preg_replace('/[^-_0-9\p{L}]/u','',$phone_defaults_container);
	$container_type = preg_replace('/[^-_0-9\p{L}]/u','',$container_type);
	$status_group_id = preg_replace('/[^-_0-9\p{L}]/u','',$status_group_id);
	$unavail_dialplan_fwd_exten = preg_replace('/[^-_0-9\p{L}]/u','',$unavail_dialplan_fwd_exten);
	$unavail_dialplan_fwd_context = preg_replace('/[^-_0-9\p{L}]/u','',$unavail_dialplan_fwd_context);
	$nva_search_method = preg_replace('/[^-_0-9\p{L}]/u','',$nva_search_method);
	$on_hook_cid_number = preg_replace('/[^-_0-9\p{L}]/u','',$on_hook_cid_number);
	$colors_id = preg_replace('/[^-_0-9\p{L}]/u','',$colors_id);
	$agent_screen_colors = preg_replace('/[^-_0-9\p{L}]/u','',$agent_screen_colors);
	$customer_chat_screen_colors = preg_replace('/[^-_0-9\p{L}]/u','',$customer_chat_screen_colors);
	$web_loader_phone_length = preg_replace('/[^-_0-9\p{L}]/u','',$web_loader_phone_length);
	$agent_chat_screen_colors = preg_replace('/[^-_0-9\p{L}]/u','',$agent_chat_screen_colors);
	$populate_lead_province = preg_replace('/[^-_0-9\p{L}]/u','',$populate_lead_province);
	$populate_lead_owner = preg_replace('/[^-_0-9\p{L}]/u','',$populate_lead_owner);
	$areacode_filter = preg_replace('/[^-_0-9\p{L}]/u','',$areacode_filter);
	$areacode_filter_action = preg_replace('/[^-_0-9\p{L}]/u','',$areacode_filter_action);
	$report_id = preg_replace('/[^-_0-9\p{L}]/u','',$report_id);
	$report_destination = preg_replace('/[^-_0-9\p{L}]/u','',$report_destination);
	$report_times = preg_replace('/[^-_0-9\p{L}]/u','',$report_times);
	$report_monthdays = preg_replace('/[^-_0-9\p{L}]/u','',$report_monthdays);
	$populate_state_areacode = preg_replace('/[^-_0-9\p{L}]/u','',$populate_state_areacode);
	$dl_id = preg_replace('/[^-_0-9\p{L}]/u','',$dl_id);
	$duplicate_check = preg_replace('/[^-_0-9\p{L}]/u','',$duplicate_check);
	$dl_times = preg_replace('/[^-_0-9\p{L}]/u','',$dl_times);
	$dl_monthdays = preg_replace('/[^-_0-9\p{L}]/u','',$dl_monthdays);
	$use_custom_cid = preg_replace('/[^-_0-9\p{L}]/u','',$use_custom_cid);
	$system_ip_blacklist = preg_replace('/[^-_0-9\p{L}]/u','',$system_ip_blacklist);
	$admin_ip_list = preg_replace('/[^-_0-9\p{L}]/u','',$admin_ip_list);
	$agent_ip_list = preg_replace('/[^-_0-9\p{L}]/u','',$agent_ip_list);
	$api_ip_list = preg_replace('/[^-_0-9\p{L}]/u','',$api_ip_list);
	$ip_list_id = preg_replace('/[^-_0-9\p{L}]/u','',$ip_list_id);
	$inbound_survey_callmenu = preg_replace('/[^-_0-9\p{L}]/u','',$inbound_survey_callmenu);
	$filename_override = preg_replace('/[^-_0-9\p{L}]/u','',$filename_override);
	$did_id = preg_replace('/[^-_0-9\p{L}]/u','',$did_id);
	$extension_appended_cidname = preg_replace('/[^-_0-9\p{L}]/u','',$extension_appended_cidname);
	$max_inbound_calls_outcome = preg_replace('/[^-_0-9\p{L}]/u','',$max_inbound_calls_outcome);
	$manual_auto_next_options = preg_replace('/[^-_0-9\p{L}]/u','',$manual_auto_next_options);
	$agent_screen_time_display = preg_replace('/[^-_0-9\p{L}]/u','',$agent_screen_time_display);
	$get_call_launch = preg_replace('/[^-_0-9\p{L}]/u','',$get_call_launch);
	$next_dial_my_callbacks = preg_replace('/[^-_0-9\p{L}]/u','',$next_dial_my_callbacks);
	$anyone_callback_inactive_lists = preg_replace('/[^-_0-9\p{L}]/u','',$anyone_callback_inactive_lists);
	$inbound_no_agents_no_dial_container = preg_replace('/[^-_0-9\p{L}]/u','',$inbound_no_agents_no_dial_container);
	$closing_time_action = preg_replace('/[^-_0-9\p{L}]/u','',$closing_time_action);
	$closing_time_option_exten = preg_replace('/[^-_0-9\p{L}]/u','',$closing_time_option_exten);
	$closing_time_option_callmenu = preg_replace('/[^-_0-9\p{L}]/u','',$closing_time_option_callmenu);
	$closing_time_option_voicemail = preg_replace('/[^-_0-9\p{L}]/u','',$closing_time_option_voicemail);
	$closing_time_option_callback_list_id = preg_replace('/[^-_0-9\p{L}]/u','',$closing_time_option_callback_list_id);
	$icbq_call_time_id = preg_replace('/[^-_0-9\p{L}]/u','',$icbq_call_time_id);
	$add_lead_timezone = preg_replace('/[^-_0-9\p{L}]/u','',$add_lead_timezone);
	$icbq_dial_filter = preg_replace('/[^-_0-9\p{L}]/u','',$icbq_dial_filter);
	$cid_group_id = preg_replace('/[^-_0-9\p{L}]/u','',$cid_group_id);
	$cid_group_id_two = preg_replace('/[^-_0-9\p{L}]/u','',$cid_group_id_two);
	$cid_group_type = preg_replace('/[^-_0-9\p{L}]/u','',$cid_group_type);
	$populate_lead_source = preg_replace('/[^-_0-9\p{L}]/u','',$populate_lead_source);
	$dead_trigger_action = preg_replace('/[^-_0-9\p{L}]/u','',$dead_trigger_action);
	$dead_trigger_repeat = preg_replace('/[^-_0-9\p{L}]/u','',$dead_trigger_repeat);
	$cid_cb_confirm_number = preg_replace('/[^-_0-9\p{L}]/u','',$cid_cb_confirm_number);
	$cid_cb_invalid_filter_phone_group = preg_replace('/[^-_0-9\p{L}]/u','',$cid_cb_invalid_filter_phone_group);
	$scheduled_callbacks_auto_reschedule = preg_replace('/[^-_0-9\p{L}]/u','',$scheduled_callbacks_auto_reschedule);
	$scheduled_callbacks_timezones_container = preg_replace('/[^-_0-9\p{L}]/u','',$scheduled_callbacks_timezones_container);
	$three_way_volume_buttons = preg_replace('/[^-_0-9\p{L}]/u','',$three_way_volume_buttons);
	$callback_dnc = preg_replace('/[^-_0-9\p{L}]/u','',$callback_dnc);
	$hide_call_log_info = preg_replace('/[^-_0-9\p{L}]/u','',$hide_call_log_info);
	$call_quota_lead_ranking = preg_replace('/[^-_0-9\p{L}]/u','',$call_quota_lead_ranking);
	$sip_event_logging = preg_replace('/[^-_0-9\p{L}]/u','',$sip_event_logging);
	$auto_active_list_new = preg_replace('/[^-_0-9\p{L}]/u','',$auto_active_list_new);
	$script_id = preg_replace('/[^-_0-9\p{L}]/u','',$script_id);
	$ingroup_script = preg_replace('/[^-_0-9\p{L}]/u','',$ingroup_script);
	$ingroup_script_two = preg_replace('/[^-_0-9\p{L}]/u','',$ingroup_script_two);
	$campaign_script = preg_replace('/[^-_0-9\p{L}]/u','',$campaign_script);
	$campaign_script_two = preg_replace('/[^-_0-9\p{L}]/u','',$campaign_script_two);
	$leave_vm_message_group_id = preg_replace('/[^-_0-9\p{L}]/u','',$leave_vm_message_group_id);
	$dial_timeout_lead_container = preg_replace('/[^-_0-9\p{L}]/u','',$dial_timeout_lead_container);
	$amd_type = preg_replace('/[^-_0-9\p{L}]/u','',$amd_type);
	$recording_buttons = preg_replace('/[^-_0-9\p{L}]/u','',$recording_buttons);
	$use_other_campaign_dnc = preg_replace('/[^-_0-9\p{L}]/u','',$use_other_campaign_dnc);
	$browser_alert_sound = preg_replace('/[^-_0-9\p{L}]/u','',$browser_alert_sound);
	$three_way_record_stop_exception = preg_replace('/[^-_0-9\p{L}]/u','',$three_way_record_stop_exception);
	$queuemetrics_pausereason = preg_replace('/[^-_0-9\p{L}]/u','',$queuemetrics_pausereason);
	$answer_signal = preg_replace('/[^-_0-9\p{L}]/u','',$answer_signal);
	$inbound_drop_voicemail = preg_replace('/[^-_0-9\p{L}]/u','',$inbound_drop_voicemail);
	$inbound_after_hours_voicemail = preg_replace('/[^-_0-9\p{L}]/u','',$inbound_after_hours_voicemail);
	$pause_max_exceptions = preg_replace('/[^-_0-9\p{L}]/u','',$pause_max_exceptions);
	$two_factor_container = preg_replace('/[^-_0-9\p{L}]/u','',$two_factor_container);
	$calls_inqueue_count_one = preg_replace('/[^-_0-9\p{L}]/u','',$calls_inqueue_count_one);
	$calls_inqueue_count_two = preg_replace('/[^-_0-9\p{L}]/u','',$calls_inqueue_count_two);
	$drop_call_seconds_override = preg_replace('/[^-_0-9\p{L}]/u','',$drop_call_seconds_override);
	$in_man_dial_next_ready_seconds_override = preg_replace('/[^-_0-9\p{L}]/u','',$in_man_dial_next_ready_seconds_override);
	$call_limit_24hour_method = preg_replace('/[^-_0-9\p{L}]/u','',$call_limit_24hour_method);
	$call_limit_24hour_scope = preg_replace('/[^-_0-9\p{L}]/u','',$call_limit_24hour_scope);
	$call_limit_24hour_override = preg_replace('/[^-_0-9\p{L}]/u','',$call_limit_24hour_override);
	$in_queue_nanque_exceptions = preg_replace('/[^-_0-9\p{L}]/u','',$in_queue_nanque_exceptions);
	$queue_group = preg_replace('/[^-_0-9\p{L}]/u','',$queue_group);
	$pre_filter_recent_call = preg_replace('/[^-_0-9\p{L}]/u','',$pre_filter_recent_call);
	$pre_filter_recent_extension = preg_replace('/[^-_0-9\p{L}]/u','',$pre_filter_recent_extension);
	$agent_script_override = preg_replace('/[^-_0-9\p{L}]/u','',$agent_script_override);
	$inbound_list_script_override = preg_replace('/[^-_0-9\p{L}]/u','',$inbound_list_script_override);
	$user_group_two = preg_replace('/[^-_0-9\p{L}]/u','',$user_group_two);
	$agent_hangup_route = preg_replace('/[^-_0-9\p{L}]/u','',$agent_hangup_route);
	$show_confetti = preg_replace('/[^-_0-9\p{L}]/u','',$show_confetti);
	$webphone_settings = preg_replace('/[^-_0-9\p{L}]/u','',$webphone_settings);
	$demographic_quotas = preg_replace('/[^-_0-9\p{L}]/u','',$demographic_quotas);
	$demographic_quotas_container = preg_replace('/[^-_0-9\p{L}]/u','',$demographic_quotas_container);
	$weekday_resets_container = preg_replace('/[^-_0-9\p{L}]/u','',$weekday_resets_container);
	$second_alert_container = preg_replace('/[^-_0-9\p{L}]/u','',$second_alert_container);
	$second_alert_only = preg_replace('/[^-_0-9\p{L}]/u','',$second_alert_only);
	$third_alert_container = preg_replace('/[^-_0-9\p{L}]/u','',$third_alert_container);
	$third_alert_only = preg_replace('/[^-_0-9\p{L}]/u','',$third_alert_only);
	$state_descriptions = preg_replace('/[^-_0-9\p{L}]/u','',$state_descriptions);

	### ALPHA-NUMERIC and underscore and dash and slash and dot
	$menu_timeout_prompt = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$menu_timeout_prompt);
	$menu_invalid_prompt = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$menu_invalid_prompt);
	$after_hours_message_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$after_hours_message_filename);
	$welcome_message_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$welcome_message_filename);
	$onhold_prompt_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$onhold_prompt_filename);
	$hold_time_option_callback_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$hold_time_option_callback_filename);
	$agent_alert_exten = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$agent_alert_exten);
	$filename = preg_replace('/[^-\/\._0-9\p{L}]/u','',$filename);
	$am_message_exten = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$am_message_exten);
	$am_message_exten_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$am_message_exten_override);
	$campaign_groups = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$campaign_groups);
	$blind_monitor_filename = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$blind_monitor_filename);
	$hold_time_option_press_filename = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$hold_time_option_press_filename);
	$default_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$default_afterhours_filename_override);
	$sunday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$sunday_afterhours_filename_override);
	$monday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$monday_afterhours_filename_override);
	$tuesday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$tuesday_afterhours_filename_override);
	$wednesday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$wednesday_afterhours_filename_override);
	$thursday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$thursday_afterhours_filename_override);
	$friday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$friday_afterhours_filename_override);
	$saturday_afterhours_filename_override = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$saturday_afterhours_filename_override);
	$admin_web_directory = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$admin_web_directory);
	$tts_voice = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$tts_voice);
	$wait_time_option_callback_filename = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$wait_time_option_callback_filename);
	$wait_time_option_press_filename = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$wait_time_option_press_filename);
	$eht_minimum_prompt_filename = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$eht_minimum_prompt_filename);
	$queuemetrics_phone_environment = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$queuemetrics_phone_environment);
	$active_twin_server_ip = preg_replace('/[^-\|\/\._0-9\p{L}]/u','',$active_twin_server_ip);
	$safe_harbor_audio = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$safe_harbor_audio);
	$alt_log_server_ip = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$alt_log_server_ip);
	$alt_log_dbname = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$alt_log_dbname);
	$alt_log_login = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$alt_log_login);
	$alt_log_pass = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$alt_log_pass);
	$survey_first_audio_file = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$survey_first_audio_file);
	$survey_opt_in_audio_file = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$survey_opt_in_audio_file);
	$survey_ni_audio_file = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$survey_ni_audio_file);
	$survey_third_audio_file = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$survey_third_audio_file);
	$survey_fourth_audio_file = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$survey_fourth_audio_file);
	$safe_harbor_audio_field = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$safe_harbor_audio_field);
	$voicemail_greeting = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$voicemail_greeting);
	$old_voicemail_greeting = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$old_voicemail_greeting);
	$meetme_enter_login_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$meetme_enter_login_filename);
	$meetme_enter_leave3way_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$meetme_enter_leave3way_filename);
	$nva_error_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$nva_error_filename);
	$inbound_survey_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$inbound_survey_filename);
	$inbound_survey_question_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$inbound_survey_question_filename);
	$closing_time_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$closing_time_filename);
	$closing_time_end_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$closing_time_end_filename);
	$dead_trigger_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$dead_trigger_filename);
	$cid_cb_valid_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$cid_cb_valid_filename);
	$cid_cb_confirmed_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$cid_cb_confirmed_filename);
	$cid_cb_enter_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$cid_cb_enter_filename);
	$cid_cb_you_entered_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$cid_cb_you_entered_filename);
	$cid_cb_press_to_confirm_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$cid_cb_press_to_confirm_filename);
	$cid_cb_invalid_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$cid_cb_invalid_filename);
	$cid_cb_reenter_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$cid_cb_reenter_filename);
	$cid_cb_error_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$cid_cb_error_filename);
	$place_in_line_caller_number_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$place_in_line_caller_number_filename);
	$place_in_line_you_next_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$place_in_line_you_next_filename);
	$audio_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$audio_filename);
	$agent_hangup_value = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$agent_hangup_value);
	$second_alert_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$second_alert_filename);
	$third_alert_filename = preg_replace('/[^-\/\|\._0-9\p{L}]/u','',$third_alert_filename);

	### ALPHA-NUMERIC and underscore and dash and slash and dot and comma
	$menu_prompt = preg_replace('/[^-\/\|\,\._0-9\p{L}]/u','',$menu_prompt);

	### ALPHA-NUMERIC and underscore and dash and comma
	$logins_list = preg_replace('/[^-\,\_0-9\p{L}]/u','',$logins_list);
	$forced_timeclock_login = preg_replace('/[^-\,\_0-9\p{L}]/u','',$forced_timeclock_login);
	$uniqueid_status_prefix = preg_replace('/[^-\,\_0-9\p{L}]/u','',$uniqueid_status_prefix);

	### ALPHA-NUMERIC and spaces
	$lead_order = preg_replace('/[^ 0-9\p{L}]/u','',$lead_order);
	### ALPHA-NUMERIC and spaces and dashes and underscores
	$preset_name = preg_replace('/[^- \_0-9\p{L}]/u','',$preset_name);
	$selected_language = preg_replace('/[^- \_0-9\p{L}]/u','',$selected_language);
	$default_language = preg_replace('/[^- \_0-9\p{L}]/u','',$default_language);
	$opensips_cid_name = preg_replace('/[^- \_0-9\p{L}]/u','',$opensips_cid_name);

	### ALPHA-NUMERIC and hash
	$group_color = preg_replace('/[^\#0-9\p{L}]/u','',$group_color);
	$script_color = preg_replace('/[^\#0-9\p{L}]/u','',$script_color);
	### ALPHA-NUMERIC and hash and star and dot and underscore
	$hold_time_option_exten = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$hold_time_option_exten);
	$voicemail_ext = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$voicemail_ext);
	$phone = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$phone);
	$phone_code = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$phone_code);
	$wait_time_option_exten = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$wait_time_option_exten);
	$filter_voicemail_ext = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$filter_voicemail_ext);
	$filter_phone_code = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$filter_phone_code);
	$filter_phone = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$filter_phone);
	$preset_number = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$preset_number);
	$no_agent_ingroup_extension = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$no_agent_ingroup_extension);
	$pre_filter_extension = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$pre_filter_extension);
	$max_queue_ingroup_extension = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$max_queue_ingroup_extension);
	$report_server = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$report_server);
	$dl_server = preg_replace('/[^\*\#\.\_0-9\p{L}]/u','',$dl_server);

	### ALPHA-NUMERIC and hash and star and dot and underscore and colon and plus sign
	$did_pattern = preg_replace('/[^:\+\*\#\.\_0-9\p{L}]/u','',$did_pattern);
	$web_loader_phone_strip = preg_replace('/[^:\+\*\#\.\_0-9\p{L}]/u','',$web_loader_phone_strip);
	$manual_dial_phone_strip = preg_replace('/[^:\+\*\#\.\_0-9\p{L}]/u','',$manual_dial_phone_strip);
	$mobile_number = preg_replace('/[^:\+\*\#\.\_0-9\p{L}]/u','',$mobile_number);

	### ALPHA-NUMERIC and spaces dots, commas, dashes, underscores
	$adaptive_dl_diff_target = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$adaptive_dl_diff_target);
	$adaptive_intensity = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$adaptive_intensity);
	$asterisk_version = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$asterisk_version);
	$call_time_comments = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$call_time_comments);
	$call_time_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$call_time_name);
	$campaign_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$campaign_name);
	$campaign_rec_filename = preg_replace('/[^-\.\_0-9\p{L}]/u','',$campaign_rec_filename);
	$ingroup_rec_filename = preg_replace('/[^-\.\_0-9\p{L}]/u','',$ingroup_rec_filename);
	$company = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$company);
	$full_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$full_name);
	$fullname = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$fullname);
	$group_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$group_name);
	$HKstatus = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$HKstatus);
	$lead_filter_comments = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$lead_filter_comments);
	$lead_filter_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$lead_filter_name);
	$list_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$list_name);
	$local_gmt = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$local_gmt);
	$new_fullname = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$new_fullname);
	$phone_type = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$phone_type);
	$picture = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$picture);
	$script_comments = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$script_comments);
	$script_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$script_name);
	$server_description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$server_description);
	$status = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$status);
	$status_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$status_name);
	$wrapup_message = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$wrapup_message);
	$pause_code_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$pause_code_name);
	$campaign_description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$campaign_description);
	$list_description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$list_description);
	$vcl_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$vcl_name);
	$vsc_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$vsc_name);
	$vsc_description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$vsc_description);
	$code_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$code_name);
	$alias_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$alias_name);
	$shift_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$shift_name);
	$did_description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$did_description);
	$template_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$template_name);
	$carrier_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$carrier_name);
	$group_alias_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$group_alias_name);
	$caller_id_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$caller_id_name);
	$user_code = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$user_code);
	$territory = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$territory);
	$tts_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$tts_name);
	$moh_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$moh_name);
	$timer_action_message = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$timer_action_message);
	$default_codecs = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$default_codecs);
	$codecs_list = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$codecs_list);
	$label_title = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_title);
	$label_first_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_first_name);
	$label_middle_initial = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_middle_initial);
	$label_last_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_last_name);
	$label_address1 = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_address1);
	$label_address2 = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_address2);
	$label_address3 = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_address3);
	$label_city = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_city);
	$label_state = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_state);
	$label_province = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_province);
	$label_postal_code = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_postal_code);
	$label_vendor_lead_code = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_vendor_lead_code);
	$label_gender = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_gender);
	$label_phone_number = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_phone_number);
	$label_phone_code = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_phone_code);
	$label_alt_phone = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_alt_phone);
	$label_security_phrase = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_security_phrase);
	$label_email = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_email);
	$label_comments = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_comments);
	$slave_db_server = preg_replace('/[^- \.\,\:\_0-9\p{L}]/u','',$slave_db_server);
	$filter_phone_group_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$filter_phone_group_name);
	$filter_phone_group_description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$filter_phone_group_description);
	$filter_clean_cid_number = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$filter_clean_cid_number);
	$label_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_name);
	$default_local_gmt = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$default_local_gmt);
	$cid_description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$cid_description);
	$description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$description);
	$first_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$first_name);
	$last_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$last_name);
	$bu_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$bu_name);
	$department = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$department);
	$group = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$group);
	$job_title = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$job_title);
	$location = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$location);
	$holiday_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$holiday_name);
	$holiday_comments = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$holiday_comments);
	$api_allowed_functions = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$api_allowed_functions);
	$agent_display_fields = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$agent_display_fields);
	$container_notes = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$container_notes);
	$did_carrier_description = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$did_carrier_description);
	$status_group_notes = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$status_group_notes);
	$colors_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$colors_name);
	$web_logo = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$web_logo);
	$user_nickname = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$user_nickname);
	$customer_chat_survey_text = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$customer_chat_survey_text);
	$agent_script = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$agent_script);
	$report_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$report_name);
	$dl_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$dl_name);
	$drop_status = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$drop_status);
	$ip_list_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$ip_list_name);
	$cid_group_notes = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$cid_group_notes);
	$populate_lead_vendor = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$populate_lead_vendor);
	$leave_vm_message_group_notes = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$leave_vm_message_group_notes);
	$audio_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$audio_name);
	$populate_lead_comments = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$populate_lead_comments);
	$label_lead_id = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_lead_id);
	$label_list_id = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_list_id);
	$label_entry_date = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_entry_date);
	$label_gmt_offset_now = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_gmt_offset_now);
	$label_source_id = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_source_id);
	$label_called_since_last_reset = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_called_since_last_reset);
	$label_status = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_status);
	$label_user = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_user);
	$label_date_of_birth = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_date_of_birth);
	$label_country_code = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_country_code);
	$label_last_local_call_time = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_last_local_call_time);
	$label_called_count = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_called_count);
	$label_rank = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_rank);
	$label_owner = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_owner);
	$label_entry_list_id = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$label_entry_list_id);
	$user_location = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$user_location);
	$queue_group_name = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$queue_group_name);
	$qc_scorecard_id = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$qc_scorecard_id);
	$city_rule = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$city_rule);
	$county_rule = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$county_rule);
	$ac_rule = preg_replace('/[^- \.\,\_0-9\p{L}]/u','',$ac_rule);

	### ALPHA-NUMERIC and underscore and dash and slash and at and dot
	$call_out_number_group = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$call_out_number_group);
	$client_browser = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$client_browser);
	$DBX_server = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$DBX_server);
	$DBY_server = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$DBY_server);
	$dtmf_send_extension = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$dtmf_send_extension);
	$install_directory = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$install_directory);
	$old_extension = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$old_extension);
	$telnet_host = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$telnet_host);
	$queuemetrics_dbname = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$queuemetrics_dbname);
	$queuemetrics_login = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$queuemetrics_login);
	$queuemetrics_pass = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$queuemetrics_pass);
	$email = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$email);
	$vtiger_dbname = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$vtiger_dbname);
	$vtiger_login = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$vtiger_login);
	$vtiger_pass = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$vtiger_pass);
	$external_server_ip = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$external_server_ip);
	$alt_server_ip = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$alt_server_ip);
	$email_from = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$email_from);
	$email_to = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$email_to);
	$ftp_server = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$ftp_server);
	$ftp_directory = preg_replace('/[^-\.\:\/\@\_0-9\p{L}]/u','',$ftp_directory);

	### ALPHA-NUMERIC and underscore and dash and slash and at and dot and space
	$custom_one = preg_replace('/[^- \.\:\/\@\_0-9\p{L}]/u','',$custom_one);
	$custom_two = preg_replace('/[^- \.\:\/\@\_0-9\p{L}]/u','',$custom_two);
	$custom_three = preg_replace('/[^- \.\:\/\@\_0-9\p{L}]/u','',$custom_three);
	$custom_four = preg_replace('/[^- \.\:\/\@\_0-9\p{L}]/u','',$custom_four);
	$custom_five = preg_replace('/[^- \.\:\/\@\_0-9\p{L}]/u','',$custom_five);
	$email_subject = preg_replace('/[^- \.\:\/\@\_0-9\p{L}]/u','',$email_subject);

	### ALPHA-NUMERIC and underscore and dash and slash and at and dot and pound and star
	$extension = preg_replace('/[^-\*\#\.\:\/\@\_0-9\p{L}]/u','',$extension);
	$new_extension = preg_replace('/[^-\*\#\.\:\/\@\_0-9\p{L}]/u','',$new_extension);
	$timer_action_destination = preg_replace('/[^-\*\#\.\:\/\@\_0-9\p{L}]/u','',$timer_action_destination);
	$filter_extension = preg_replace('/[^-\*\#\.\:\/\@\_0-9\p{L}]/u','',$filter_extension);

	### ALPHA-NUMERIC and space and underscore and dash and slash and at and dot and pound and star and pipe and comma
	$ivr_park_call_agi = preg_replace('/[^- \*\#\.\,\:\/\|\@\_0-9\p{L}]/u','',$ivr_park_call_agi);
	$source_phone = preg_replace('/[^- \*\#\.\,\:\/\|\@\_0-9\p{L}]/u','',$source_phone);

	### ALPHA-NUMERIC and space and underscore and dash and slash and at and dot and pound and star and pipe and comma and equal
	$voicemail_options = preg_replace('/[^- \=\*\#\.\,\:\/\|\@\_0-9\p{L}]/u','',$voicemail_options);

	### NUMERIC and comma and pipe
	$waitforsilence_options = preg_replace('/[^\|\,0-9\p{L}]/u','',$waitforsilence_options);

	### value cleaning
	$no_agent_action_value = preg_replace('/[^-\/\|\_\#\*\,\.\_0-9\p{L}]/u','',$no_agent_action_value);
	$areacode_filter_action_value = preg_replace('/[^-\/\|\_\#\*\,\.\_0-9\p{L}]/u','',$areacode_filter_action_value);

	### ALPHA-NUMERIC and underscore and dash and slash and at and space and colon
	$vdc_header_date_format = preg_replace('/[^- \:\/\_0-9\p{L}]/u','',$vdc_header_date_format);
	$vdc_customer_date_format = preg_replace('/[^- \:\/\_0-9\p{L}]/u','',$vdc_customer_date_format);
	$menu_name = preg_replace('/[^- \:\/\_0-9\p{L}]/u','',$menu_name);

	### ALPHA-NUMERIC and underscore and dash and at and space and parantheses
	$vdc_header_phone_format = preg_replace('/[^- \(\)\_0-9\p{L}]/u', '',$vdc_header_phone_format);

	### ALPHA-NUMERIC and newlines
	$areacode_list = preg_replace('/[^\n0-9\p{L}]/u', '',$areacode_list);

	### ALPHA-NUMERIC and newlines and period and colon
	$ip_address = preg_replace('/[^\n\.\:\0-9\p{L}]/u', '',$ip_address);
	}

### remove semi-colons and other special characters ###
$lead_filter_sql = preg_replace('/;/','',$lead_filter_sql);
$list_mix_container = preg_replace('/;/','',$list_mix_container);
$survey_response_digit_map = preg_replace('/;/','',$survey_response_digit_map);
$survey_camp_record_dir = preg_replace('/;/','',$survey_camp_record_dir);
$conf_override = preg_replace('/;/','',$conf_override);
$template_contents = preg_replace('/;/','',$template_contents);
$registration_string = preg_replace('/;/','',$registration_string);
$account_entry = preg_replace('/;/','',$account_entry);
$account_entry = preg_replace('/\r/', '',$account_entry);
$globals_string = preg_replace('/;/','',$globals_string);
$dialplan_entry = preg_replace('/\\\\/', '',$dialplan_entry);
$dialplan_entry = preg_replace('/\'/', '',$dialplan_entry);
$dialplan_entry = preg_replace('/\r/', '',$dialplan_entry);
$custom_dialplan_entry = preg_replace('/\\\\/', '',$custom_dialplan_entry);
$custom_dialplan_entry = preg_replace('/\'/', '',$custom_dialplan_entry);
$custom_dialplan_entry = preg_replace('/\r/', '',$custom_dialplan_entry);
$tts_text = preg_replace('/\\\\/', '',$tts_text);
$tts_text = preg_replace('/;/','',$tts_text);
$tts_text = preg_replace('/\r/', '',$tts_text);
$tts_text = preg_replace('/\"/', '',$tts_text);
$carrier_description = preg_replace('/\\\\/', '',$carrier_description);
$carrier_description = preg_replace('/;/','',$carrier_description);
$carrier_description = preg_replace('/\r/', '',$carrier_description);
$carrier_description = preg_replace('/\"/', '',$carrier_description);
$blind_monitor_message = preg_replace('/\\\\/', '',$blind_monitor_message);
$blind_monitor_message = preg_replace('/;/','',$blind_monitor_message);
$blind_monitor_message = preg_replace('/\r/', '',$blind_monitor_message);
$blind_monitor_message = preg_replace('/\"/', '',$blind_monitor_message);
$modify_url = preg_replace('/\\\\/', '',$modify_url);
$modify_url = preg_replace('/;/','',$modify_url);
$modify_url = preg_replace('/\r/', '',$modify_url);
$modify_url = preg_replace('/\"/', '',$modify_url);
$qualify_sql = preg_replace('/\\\\/', '',$qualify_sql);
$qualify_sql = preg_replace('/;/','',$qualify_sql);
$qualify_sql = preg_replace('/\r/', '',$qualify_sql);
$qualify_sql = preg_replace('/\'/', "\"",$qualify_sql);
$queuemetrics_socket_url = preg_replace('/\\\\/', '',$queuemetrics_socket_url);
$queuemetrics_socket_url = preg_replace('/;/','',$queuemetrics_socket_url);
$queuemetrics_socket_url = preg_replace('/\r/', '',$queuemetrics_socket_url);
$queuemetrics_socket_url = preg_replace('/\'/', "\"",$queuemetrics_socket_url);
$agent_status_viewable_groups = preg_replace('/\\\\/', '',$agent_status_viewable_groups);
$agent_status_viewable_groups = preg_replace('/\\\\/', '',$agent_status_viewable_groups);
$agent_allowed_chat_groups = preg_replace('/\\\\/', '',$agent_allowed_chat_groups);
$agent_allowed_chat_groups = preg_replace('/\\\\/', '',$agent_allowed_chat_groups);
$report_url = preg_replace('/\\\\/', '',$report_url);
$report_url = preg_replace('/;/','',$report_url);
$report_url = preg_replace('/\r|\n/', '',$report_url);
$report_url = preg_replace('/\'/', '',$report_url);
$agent_push_url = preg_replace('/\\\\/', '',$agent_push_url);
$agent_push_url = preg_replace('/;/','',$agent_push_url);
$agent_push_url = preg_replace('/\r|\n/', '',$agent_push_url);
$agent_push_url = preg_replace('/\'/', '',$agent_push_url);
$waiting_call_url_on = preg_replace('/\\\\/', '',$waiting_call_url_on);
$waiting_call_url_on = preg_replace('/;/','',$waiting_call_url_on);
$waiting_call_url_on = preg_replace('/\r|\n/', '',$waiting_call_url_on);
$waiting_call_url_on = preg_replace('/\'/', '',$waiting_call_url_on);
$waiting_call_url_off = preg_replace('/\\\\/', '',$waiting_call_url_off);
$waiting_call_url_off = preg_replace('/;/','',$waiting_call_url_off);
$waiting_call_url_off = preg_replace('/\r|\n/', '',$waiting_call_url_off);
$waiting_call_url_off = preg_replace('/\'/', '',$waiting_call_url_off);
$sounds_web_server = preg_replace('/\\\\/', '',$sounds_web_server);
$sounds_web_server = preg_replace('/;/','',$sounds_web_server);
$sounds_web_server = preg_replace('/\r|\n/', '',$sounds_web_server);
$sounds_web_server = preg_replace('/\'/', '',$sounds_web_server);
$pause_max_url = preg_replace('/\\\\/', '',$pause_max_url);
$pause_max_url = preg_replace('/;/','',$pause_max_url);
$pause_max_url = preg_replace('/\r|\n/', '',$pause_max_url);
$pause_max_url = preg_replace('/\'/', '',$pause_max_url);

### VARIABLES TO BE mysqli_real_escape_string ###
# $web_form_address
# $queuemetrics_url
# $admin_home_url
# $qc_web_form_address
# $vtiger_url
# $web_form_address_two
# $crm_login_address
# $start_call_url
# $dispo_call_url
# $add_lead_url
# $webphone_url
# $webphone_url_override
# $filter_url
# $na_call_url
# $web_form_address_three
# $container_entry
# $nva_call_url
# $web_socket_url
# $external_web_socket_url
# $customer_chat_survey_link
# $ftp_user
# $ftp_pass
# $webphone_layout
# $enter_ingroup_url
# $dead_trigger_url
# $user_admin_redirect_url
# $local_web_callerID_URL
# $VICIDIAL_web_URL
# $audit_comments
# $chat_url
# $ara_url

# filtered further down in the code
# $groups
# $XFERgroups
# $campaigns
# $qc_campaigns
# $qc_groups
# $qc_statuses
# $qc_lists
# $shift_weekdays
# $group_shifts
# $phone_numbers
# $list_active_change
# $reports_use_slave_db
# $custom_reports_use_slave_db
# $allowed_reports
# $allowed_custom_reports
# $tables_use_alt_log_db
# $admin_viewable_groups
# $admin_viewable_call_times
# $territory_reset
# $max_inbound_filter_statuses
# $max_inbound_filter_ingroups
# $included_campaigns
# $included_inbound_groups
# $allowed_queue_groups
# $queue_groups

### VARIABLES optionally filtered: ###

# $script_text JS filtering
$rjs_debug='';
if ($SSscript_remove_js > 0)
	{
	$rjs=0;   $rjs_ct=0;
	$temp_length_a = strlen($script_text);
	if ($temp_length_a > 7)
		{
		while ( ($rjs < 10000000000) and (preg_match("/<script\b[^>]*>/is",$script_text)) )
			{
			$temp_length_a = strlen($script_text);
			$script_text = preg_replace('/<script\b[^>]*>(.*?)<\/script\s*>/is','',$script_text);
			$temp_length_b = strlen($script_text);
			if ($temp_length_a != $temp_length_b) {$rjs_ct++;}
			else {$rjs=99999999999;}
			$rjs++;
			}
		$rjsb=0;
		while ( ($rjsb < 10000000000) and (preg_match("/<script\b[^>]*>/is",$script_text)) )
			{
			$temp_length_a = strlen($script_text);
			$script_text = preg_replace('/<script\b[^>]*>/is','',$script_text);
			$temp_length_b = strlen($script_text);
			if ($temp_length_a != $temp_length_b) {$rjs_ct++;}
			else {$rjsb=99999999999;}
			$rjsb++;
			}
		$rjsc=0;
		while ( ($rjsc < 10000000000) and (preg_match("/javascript:|onabort|onactivate|onafterprint|onafterupdate|onbeforeactivate|onbeforecopy|onbeforecut|onbeforedeactivate|onbeforeeditfocus|onbeforepaste|onbeforeprint|onbeforeunload|onbeforeupdate|onblur|onbounce|oncellchange|onchange|onclick|oncontextmenu|oncontrolselect|oncopy|oncut|ondataavaible|ondatasetchanged|ondatasetcomplete|ondblclick|ondeactivate|ondrag|ondragdrop|ondragend|ondragenter|ondragleave|ondragover|ondragstart|ondrop|onerror|onerrorupdate|onfilterupdate|onfinish|onfocus|onfocusin|onfocusout|onhelp|onkeydown|onkeypress|onkeyup|onlayoutcomplete|onload|onlosecapture|onmousedown|onmouseenter|onmouseleave|onmousemove|onmoveout|onmouseover|onmouseup|onmousewheel|onmove|onmoveend|onmovestart|onpaste|onpropertychange|onreadystatechange|onreset|onresize|onresizeend|onresizestart|onrowexit|onrowsdelete|onrowsinserted|onscroll|onselect|onselectionchange|onselectstart|onstart|onstop|onsubmit|onunload/is",$script_text)) )
			{
			$temp_length_a = strlen($script_text);
			$script_text = preg_replace('/javascript:|onabort|onactivate|onafterprint|onafterupdate|onbeforeactivate|onbeforecopy|onbeforecut|onbeforedeactivate|onbeforeeditfocus|onbeforepaste|onbeforeprint|onbeforeunload|onbeforeupdate|onblur|onbounce|oncellchange|onchange|onclick|oncontextmenu|oncontrolselect|oncopy|oncut|ondataavaible|ondatasetchanged|ondatasetcomplete|ondblclick|ondeactivate|ondrag|ondragdrop|ondragend|ondragenter|ondragleave|ondragover|ondragstart|ondrop|onerror|onerrorupdate|onfilterupdate|onfinish|onfocus|onfocusin|onfocusout|onhelp|onkeydown|onkeypress|onkeyup|onlayoutcomplete|onload|onlosecapture|onmousedown|onmouseenter|onmouseleave|onmousemove|onmoveout|onmouseover|onmouseup|onmousewheel|onmove|onmoveend|onmovestart|onpaste|onpropertychange|onreadystatechange|onreset|onresize|onresizeend|onresizestart|onrowexit|onrowsdelete|onrowsinserted|onscroll|onselect|onselectionchange|onselectstart|onstart|onstop|onsubmit|onunload/is','',$script_text);
			$temp_length_b = strlen($script_text);
			if ($temp_length_a != $temp_length_b) {$rjs_ct++;}
			else {$rjsc=99999999999;}
			$rjsc++;
			}
		if ($rjs_ct > 0) {$rjs_debug = "\n<BR><BR>Script Text JS Filtered: $rjs_ct<BR>\n";}
	#	$script_text = "PROCESSED:".date("U")."\n".$script_text;
		}
	}
##### END VARIABLE FILTERING FOR SECURITY #####


# ViciDial database administration
# admin.php
# 
# CHANGELOG:
# 50315-1110 - Added Custom Campaign Statuses
# 50317-1438 - Added Fronter Display var to inbound groups
# 50322-1355 - Added custom callerID per campaign
# 50517-1356 - Added user_groups sections and user_group to vicidial_users
# 50517-1440 - Added ability to logout (must click OK with empty user/pass)
# 50602-1622 - Added lead loader pages to load new files into vicidial_list
# 50620-1351 - Added custom vdad transfer AGI extension per campaign
# 50810-1414 - modified in groups to kick out spaces and dashes
# 50908-2136 - Added Custom Campaign HotKeys
# 50914-0950 - Fixed user search by user_group
# 50926-1358 - Modified to allow for language translation
# 50926-1615 - Added WeBRooTWritablE write controls
# 51020-1008 - Added editable web address and park ext - NEW dial campaigns
# 51020-1056 - Added fields and help for campaign recording control
# 51123-1335 - Altered code to function in php globals=off
# 51208-1038 - Added user_level changes, function controls and default user phones
# 51208-1556 - Added deletion of users/lists/campaigns/in groups/remote agents
# 51213-1706 - Added add/delete/modify vicidial scripts
# 51214-1737 - Added preview of vicidial script in popup window
# 51219-1225 - Added campaign and ingroups script selector and get_call_launch field
# 51222-1055 - Added am_message_exten to campaigns to allow for AM Message button
# 51222-1125 - Fixed new vicidial_campaigns default values not being assigned bug
# 51222-1156 - Added LOG OUT ALL AGENTS ON THIS CAMPAIGN button to campaign screen
# 60204-0659 - Fixed hopper reset bug
# 60207-1413 - Added AMD send to voicemail extension and xfer-conf dtmf presets
# 60213-1100 - Added several vicidial_users permissions fields
# 60215-1319 - Added On-hold CallBacks display and links
# 60227-1226 - Fixed vicidial_inbound_groups insert bug
# 60413-1308 - Fixed list display to have 1 row/status: count and time zone tables
#            - Added status name in selected dial statuses in campaign screen
# 60417-1416 - Added vicidial_lead_filters sections
#            - Changed the header links to color-coded sectional with sublinks below
#            - Added filter name and script name to campaign and in-group modify sections
#            - Added callback and alt dial options to campaigns section
#            - Added callback, alt dial and other options to users section
# 60419-1628 - Alter Callbacks display to include status and LIVE listings, reordered
# 60421-1441 - check GET/POST vars lines with isset to not trigger PHP NOTICES
# 60425-2355 - Added agent options to vicidial_users, reformatted user page
# 60502-1627 - Added drop_call_seconds and safe_harbor_ fields to campaign screen
# 60503-1228 - Added drop_call_seconds and drop_ fields to inbound groups screen
# 60505-1117 - Added initial framework for new local_call_times tables and definitions
# 60506-1033 - More revisions to the local_call_time section
# 60508-1354 - Finished call_times and state_call_times sections
#            - Added modify/delete options for call_times
# 60509-1311 - Functionalize campaign dialable leads calculation
#            - Change state_call_times selection from call_times to only allow one per state
#            - Added dialable leads count popup to campaign screen if auto-calc is disabled
#            - Added test dialable leads count popup to filter screen 
# 60510-1050 - Added Wrapup seconds and Wrapup message to campaigns screen
# 60608-1401 - Added allowable inbound_groups checkboxes to CLOSER campaign detail screen
# 60609-1051 - Added add-to-dnc in LISTS section
# 60613-1415 - Added lead recycling options to campaign detail screen
# 60619-1523 - Added variable filtering to eliminate SQL injection attack threat
# 60622-1216 - Fixed HotKey addition form issues and variable filtering
# 60623-1159 - Fixed Scheduled Callbacks over-filtering bug and filter_sql bug
# 60808-1147 - Changed filtering for and added instructions for consutative transfers
# 60816-1552 - Added allcalls_delay start delay for recordings in vicidial.php
# 60817-2226 - Fixed bug that would not allow lead recycling of non-selectable statuses
# 60821-1543 - Added option to Omit Phone Code while dialing in vicidial
# 60821-1625 - Added ALLFORCE recording option for campaign_recording
# 60823-1154 - Added fields for adaptive dialing
# 60824-1326 - Added adaptive_latest_target_gmt for ADAPT_TAPERED dial method
# 60825-1205 - Added adaptive_intensity for ADAPT_ dial methods
# 60828-1019 - Changed adaptive_latest_target_gmt to adaptive_latest_server_time
# 60828-1115 - Added adaptive_dl_diff_target and changed intensity dropdown
# 60927-1246 - Added astguiclient/admin.php functions under SERVERS tab
# 61002-1402 - Added fields for vicidial balance trunk controls
# 61003-1123 - Added functions for vicidial_server_trunks records
# 61109-1022 - Added Emergency VDAC Jam Clear function to Campaign Detail screen
# 61110-1502 - Add ability to select NONE in dial statuses, new list_id must not be < 100
# 61122-1228 - Added user group campaign restrictions
# 61122-1535 - Changed script_text to unfiltered and added more variables to SCRIPTS
# 61129-1028 - Added headers to Users and Phones with clickable order-by titles
# 70108-1405 - Added ADAPT OVERRIDE to allow for forced dial_level changes in ADAPT dial methods
#            - Screen width definable at top of script, merged server_stats into this script
# 70109-1638 - Added ALTPH2 and ADDR3 hotkey options for alt number dialing with HotKeys
# 70109-1716 - Added concurrent_transfers option to vicidial_campaigns
# 70115-1152 - Aded (CLOSER|BLEND|INBND|_C$|_B$|_I$) options for CLOSER-type campaigns
# 70115-1532 - Added auto_alt_dial field to campaign screen for auto-dialing of alt numbers
# 70116-1200 - Added auto_alt_dial_status functionality to campaign screen
# 70117-1235 - Added header formatting variables at top of script
#            - Moved Call Times and Phones/Server functions to Admin section
# 70118-1706 - Added new user group displays and links
# 70123-1519 - Added user permission settings for all sections
# 70124-1346 - Fixed spelling errors and formatting consistency
# 70202-1120 - Added agent_pause_codes section to campaigns
# 70205-1204 - Added memo, last dialed, timestamp and stats-refresh fields to vicidial_campaigns/lists
# 70206-1323 - Added user setting for vicidial_recording_override
# 70212-1412 - Added system settings section
# 70214-1226 - Added QueueMetrics Log ID field to system settings section
# 70219-1102 - Changed campaign dial statuses to be one string allowing for high limit
# 70223-0957 - Added queuemetrics_eq_prepend for custom ENTERQUEUE prepending of a field
# 70302-1111 - Fixed small bug in dialable leads calculation
# 70314-1133 - Added insert selection on script forms
# 70319-1423 - Added Alter Customer Data and agent disable display functions
# 70319-1625 - Added option to allow agents to login to outbound campaigns with no leads in the hopper
# 70322-1455 - Added sipsak messages parameters
# 70402-1157 - Added HOME link and entry to system_settings table, added QM link on reports section
# 70516-1628 - Started reformatting campaigns to use submenus to break up options
# 70529-1653 - Added help for list mix
# 70530-1354 - Added human_answered field to statuses, added system status modification
# 70530-1714 - Added lists for all campaign subsections
# 70531-1631 - Development on List mix admin interface
# 70601-1629 - More development on List mix admin interface, formatting, and added some javascript
# 70602-1300 - More development on List mix admin interface, more javascript
# 70608-1459 - Added option to set LIVE Callbacks to INACTIVE after one month
# 70612-1451 - Added Callback INACTIVE link for after one week, sort by user/group/entrydate
# 70614-0231 - Added Status Categories, ability to Modify Statuses, moved system statuses to sub-section
# 70623-1008 - List Mix section now allows modification of list mix entries
# 70629-1721 - List Mix section adding and removing of list entries active
# 70706-1636 - List Mix section cleanup and more error-checking
# 70908-0941 - Added agc logile enable system_settings
# 71020-1934 - Added inbound groups options: on-hold music, messages, call_times
# 71022-1343 - Added inbound group ranks for users
# 71029-1710 - Added option for campaign to be inbound and/or blended with no restrictions on the campaign_id name
#            - Added 5th NEW and 6th NEW to the dial order options
# 71030-2010 - Added Manual Dial List ID field to campaigns table
# 71103-2207 - Added inbound_group_rank and fewest_calls to the inbound groups call order options
# 71113-1521 - Added campaign_rank to agent options
#            - Added ability to Copy a campaign's setting to a new campaign
# 71113-2225 - Added ability to copy user and in-group settings to new users and in-groups
# 71116-0942 - Added campaign_rank and fewest_calls as methods for agent call routing
# 71122-1135 - Added default transfer group for campaigns and inbound groups
# 71125-1751 - Added allowable transfer groups to campaign detail screen
# 80107-1204 - Started framework for new QC section
# 80112-0242 - Added more options for lead order
# 80211-1901 - Added DB Schema Version to system settings display
# 80224-1334 - Added Queue Priority to in-groups and campaigns
# 80302-0232 - added drop_action and transfer to in-group for both in-groups and outbound
# 80310-1504 - added QC settings section to campaign screen
# 80317-2037 - Added Recording override settings to in-groups
# 80414-1505 - More work on QC, added vicidial_qc_codes
# 80424-0442 - Added non_latin system_settings lookup at top to override dbconnect setting
# 80505-0333 - Added phones_alias sections to allow for load-balanced-phone-logins
# 80512-1529 - Added auto-generate of User ID feature
# 80515-1345 - Added Shifts sub-section to Admin section
# 80528-0001 - Added campaign survey sub-section
# 80528-1102 - Added user timeclock edit options
# 80608-1304 - Changed add-to-DNC to allow for multiple entries per submission
# 80625-0032 - Added time/phone display format options to system settings
# 80703-0124 - Added alter cust phone and api settings
# 80715-1130 - Added Recycle leads limit count
# 80719-1351 - Changed QC settings in campaigns and In-Groups
# 80809-2305 - Added Sale and Dead Lead categories to status categories page
# 80815-1036 - Added manual dial filter to capaigns
# 80823-2124 - Added copy to clipboard campaign option
# 80829-2359 - Added EXTENDED auto_alt_dial options
# 80831-0406 - Added agent screen extended alt-dial option to campaigns
# 80909-0553 - Added campaign-specific DNC list option and add
# 81002-1101 - Added more in-group options and new DID section and user options
# 81007-0936 - Added three_way_call_cid option to campaigns
# 81012-1725 - Added INBOUND_MAN dial method allowing for manual list dialing with inbound calls
# 81030-0348 - Added campaign pause code force option
# 81030-2228 - Fixed DIDs creation issue
# 81103-1408 - Added 3way call dial prefix option
# 81107-1551 - Added Stats Percent of Calls Answered Within X seconds fields to in-groups
# 81118-0933 - Changed lists listing with links and more options
# 81119-0715 - Added ability to bulk enable/disable lists from modify campaign screen
# 81209-1538 - Added web_form_target to campaign screen
# 81210-1430 - Added http server IP and recording link options to servers
# 81222-0500 - Reformatted all listings to same format changed to field selects instead of *
# 81228-2300 - Added fields for vtiger integration and active vicidial_user display
# 90101-1216 - Added options for user synchronization with vtiger
# 90112-0335 - Added vtiger_create_lead_record and vtiger_create_lead_record options
# 90115-0502 - Activated AGENT DID routing option
# 90126-2256 - Added vtiger_screen_login campaign option and user agent alert option
# 90201-1503 - Added option to disable the viewing of inactive QC features
# 90202-0112 - Added option to disable outbound autodialing(or list dialing)
# 90202-0444 - Added cpd_amd_action option for processing of AMD messages
# 90209-1339 - Added download_lists option to allow downloading of lists
# 90210-1042 - Added options for auto-generation of asterisk conf files
# 90301-2026 - Added Vtiger group synchronization
# 90302-2046 - Changed Section heading to be on the left side of the screen
# 90303-0631 - Added web vars to agent campaign and in-group settings
# 90303-2047 - Added group aliases and default group aliases
# 90306-1214 - Added shift enforcement and server/system calls per second options
# 90308-0956 - Added server statistics
# 90309-0059 - Changed logging to admin_server_log
# 90310-2203 - Added export_reports option for call activity report data exports
# 90315-1010 - Changed revision for new trunk 2.2.0
# 90320-0424 - Fixed several small bugs conf records group alias and permissions
# 90322-0122 - Added ability to delete from the DNC lists
# 90322-1105 - Added new status settings and vtiger options
# 90409-2133 - Fixed special characters in SCRIPTS
# 90413-0755 - Fixed filter and script slashes issues
# 90417-0211 - Fixed filter and script slashes issues
# 90422-0613 - Added user_code, territory and email to vicidial_users
# 90429-0542 - Added 3rd&4th options to SURVEY campaigns
# 90430-0154 - Added RANDOM and LAST CALL TIME options to lead order for campaigns
# 90504-0901 - Added Call Menu feature, changed script to use long PHP tags
# 90511-0910 - Added agentonly_callback_campaign_lock to system_settings
# 90512-0440 - Added sounds settings to system_settings table
# 90514-0607 - Added select prompts from list in call menu and in-group screens
# 90521-0029 - Added user territories enable option
# 90522-0506 - Security fix for logins when using non-latin setting
# 90524-2307 - Changed Reports screen layout
# 90528-2055 - Added ViciDial recording limit field in servers and phone_context to phones
# 90530-1206 - Changed List Mix to allow for 40 mixes
# 90531-1802 - Added auto-generated options for users, campaigns, in-groups, etc..., added option to HIDE custphone
# 90531-2339 - Added Dynamic options for Call Menu
# 90605-0248 - Added carrier_logging_active servers option
# 90607-1716 - Changed drop percent limit to allow for 0.1 steps under 3%
# 90608-0944 - Added Drop Lockout Time feature to Campaign Detail Modification screen
# 90612-0909 - Added audio prompt selection feature to survey screen
# 90614-0827 - Added In-Group routing to Call Menu screen, Added pull-down Call Menu option to DID screen
# 90617-0733 - Added phone ring timeout and call menu custom dialplan entries
# 90621-0821 - Added phone Conf File Secret field to use a separate password from the user interface for a phone
# 90621-1220 - Added Call Menu logging tracking_group
# 90627-0547 - Added no-agent-no-queue options
# 90627-2333 - Added default transfer button and prepopulate preset options
# 90628-0924 - Added Text To Speech(TTS) fields
# 90628-2213 - Added Multi-campaign drop rate groups
# 90705-0926 - Added User Group agent view options
# 90710-1528 - Added Agent view and grab queue calls and every call pause options
# 90717-0646 - Added dialed_label and dialed_number to script variables
# 90721-1350 - Added RANK and OWNER as list order options and list screen display tables
# 90722-1235 - Added list reset time and campaign no hopper dialing, agent dial owner only options
# 90726-0153 - Added allow_alerts for users to disable agent browser alerts
# 90729-0555 - Added agent_display_dialable_leads and vicidial_balance_rank options
# 90808-0300 - Added longest_wait_time option for agent call routing
# 90827-1552 - Added agent_script_override option for lists
# 90830-2217 - Added Music On Hold section
# 90904-1536 - Added moh chooser option, timezone list ordering
# 90908-1207 - Added cross-listing linking for DIDs, CallMenus and In-groups
# 90916-1105 - Added second web form to ingroups and campaigns and added audio choose for answering machine message and waitforsilence_options
# 90917-1108 - Added Extra Voicemail boxes config in Admin section
# 90919-2251 - Removed all SELECT STAR instances in the code, code cleanup to conform to standard
# 90924-1645 - Added list_id overrides for cid, am_message and drop in-group
# 90930-2107 - Added agent territory selection options for ViciDial agents
# 91026-1050 - Added AREACODE DNC option for campaigns
# 91031-1232 - Added carrier_description field, campaigns links from in-group screen, server links on reports page, agent ranks listing active only
# 91121-0334 - Limited list called count display to 100+
# 91125-0628 - Added conf_secret for servers
# 91204-1652 - Added recording_filename and recording_id as script variables
# 91205-2231 - Added delete_vm_after_email voicemail option to phones and extra voicemail sections
# 91210-2038 - Added better logging of Campaign emergency logout
# 91211-1359 - Added custom user fields and campaign CRM login fields
# 91219-0719 - Changed some field backgrounds in the Campaign Modification screens
# 91223-1031 - Added VIDPROMPT options for in-group routing in DIDs
# 91228-1837 - Added timer action settings to in-groups and campaigns
# 100103-0727 - Added Start/Dispo call url, 3/4/5 conf number presets, Lists conf-number overrides
# 100104-1454 - Fixed in-group/campaign copy duplication issue
# 100116-0718 - Added presets to script select list
# 100122-0747 - Added NOT-LOGGED-IN-AGENTS option for User Groups
# 100123-1301 - Added DID record call option
# 100127-0601 - Added Vtiger ViciDial user_level role lookup
# 100127-1546 - Added ignore_list_script_override option for ingroups
# 100219-1309 - Added agent dispo log system settings option and user call_log options
# 100220-1411 - Added system settings and servers custom_dialplan_entry
# 100221-0924 - Added Custom CallerID capability in Campaign settings
# 100302-2133 - Added Scheduled Callbacks Alert option
# 100309-0510 - Added queuemetrics_loginout option
# 100311-2348 - Added CallCard links and settings
# 100313-0020 - Added User Group agent screen transfer-conf button display options
# 100317-1244 - Added User Group agent_fullscreen option
# 100401-0014 - Added agent_choose_blended option
# 100405-1425 - Added queuemetrics_callstatus option and full logging of user campaign/in-group settings
# 100414-1603 - Added extension_appended_cidname option to campaigns
# 100420-1010 - Added scheduled_callbacks_count campaign option
# 100423-1030 - Added realtime_block_user_info, manual dial campaign, blind monitor warnings, in-group callid, phones codecs features
# 100506-1807 - Added hidden settings for lists custom fields
# 100507-1102 - Added hold_time_option_minimum option to in-groups and copy carrier function
# 100512-1615 - Added more hold time press-1 options
# 100518-0643 - Added inbound_queue_no_dial and call time after hours override features
# 100523-0840 - Added inbound prompt and no-block options
# 100616-2232 - Added VIDPROMPT call menu options
# 100621-1010 - Added admin_web_directory system setting
# 100622-1700 - Added custom agent field names for default fields
# 100702-1142 - Added FORM get_call_launch option for custom list fields tab in agent interface
# 100703-1322 - Added LEADS ability to admin log display
# 100709-1025 - Added option for slave DB server to be used for selected reports
# 100718-2318 - Added Wait Time options to in-groups
# 100720-1332 - Small changes to Phone addition and modification pages
# 100723-1519 - Added LOCKED options for Quick Transfer Button in campaigns
# 100726-1017 - Added HANGUP, CALLMENU, EXTENSION and IN_GROUP timer actions to campaigns and in-groups
# 100802-2130 - Changed Admin links to point to links page instead of Phones listings, changed Remote Agents to allow 9-digit IDs
# 100803-1412 - Added allowed_reports option to User Groups, added CAMPLISTS_ALL for manual_dial_filter(issue #369)
#             - Added allowed_campaigns enforcement for Campaign listings
# 100804-2313 - Added filter phone groups section for inbound call filtering by incoming phone number when it comes into a DID
# 100805-1539 - Added option to clean up cid numbers when calls come into DIDs
# 100806-0607 - Added validation for remote agents settings, user_start must be valid user, number of lines must not overlap
# 100811-0827 - Added webphone_url_override to User Groups and calculate_estimated_hold_seconds to In-Groups
# 100813-0544 - Added campaign presets and option to hide xfer number to dial
# 100815-0802 - Added manual_dial_prefix campaign option
# 100817-1243 - Added checking for reserved menu_id on creation of Call Menus
# 100823-1501 - Added CallCard search as an available User Group report option
# 100827-1535 - Added webphone options for dialpad and systemkey
# 100901-2055 - Added password strength grading, force password change, password default settings and first login screen
# 100908-0926 - Added 3way hangup logging options to campaigns
# 100912-0842 - Several small changes, removed Emergency VDAC clear since it does not do anything anymore
# 100927-2321 - Added entry_list_id as a script, webform, dispo_call_url variable
# 100928-1634 - Moved Realtime Block User Info user setting into the new ADMIN REPORT OPTIONS section
# 100929-1203 - Added add_lead_url feature to In-Groups
# 101008-0349 - Added Estimated Hold Time Minimum options, Manual Dial Preview settings and two new variables for recording filenames
# 101022-1427 - Added ability to change user in-group prefs from in-group mod screen, added realtime_agent_time_stats campaign option
# 101106-1850 - Added admin refrech, no-cache, cross-server-exten, QM-addmember op 