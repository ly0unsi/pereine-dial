<!doctype html>
 <html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default"> 


<!-- Mirrored from themesbrand.com/velzon/html/master/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 12:59:51 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Pereine | CRM - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../agc/pereine/velzon/assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="../agc/pereine/velzon/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="../agc/pereine/velzon/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../agc/pereine/velzon/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../agc/pereine/velzon/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../agc/pereine/velzon/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    
        <div id="layout-wrapper">
            <header id="page-topbar" style="background: white;">
                    <div class="layout-width">
                    <div class="navbar-header">
                        <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="#" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="../agc/pereine/velzon/assets/images/pereine2white.png" alt="" height="40">
                            </span>
                            <span class="logo-lg">
                                <img src="../agc/pereine/velzon/assets/images/pereine2white.png" alt="" height="40">
                            </span>
                            </a>
                            <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="../agc/pereine/velzon/assets/images/pereine2white.png" alt="" height="40">
                            </span>
                            <span class="logo-lg">
                                <img src="../agc/pereine/velzon/assets/images/pereine2white.png" alt="" height="40">
                            </span>
                            </a>
                        </div>
                        
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


                     
                        
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <img class="rounded-circle header-profile-user" src="../agc/pereine/velzon/assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Admin Screen</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text"></span>
                                </span>
                            </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            
                            <a class="dropdown-item" href="<?php echo $admin_home_url_LU ?>">
                                <i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"> <?php echo _QXZ("Home"); ?></i>
                                
                            </a>
                            <a class="dropdown-item" href="manager_chat_interface.php">
                                <i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"> <?php echo _QXZ("Chat"); ?></i>
                            </a>
                            <a class="dropdown-item" href="../agc/timeclock.php?referrer=admin">
                                <i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"> <?php echo _QXZ("Timeclock"); ?></i>
                                
                            </a>
                            <a class="dropdown-item" href="<?php echo $ADMIN ?>?force_logout=1" ><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"> <?php echo _QXZ("Logout"); ?></i></a>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </header>
            
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                 
                <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <br>
                    <a href="http://167.86.107.229/vicidial/admin.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="../agc/pereine/velzon/assets/images/pereine2white.png" alt="" height="65">
                        </span>
                        <span class="logo-lg" >
                            <img src="../agc/pereine/velzon/assets/images/pereine2white.png" alt="" height="55">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="http://167.86.107.229/vicidial/admin.php" class="logo logo-light">
                        <span class="logo-sm ">
                            <img src="../agc/pereine/velzon/assets/images/pereine2white.png" alt="" height="65">
                        </span>
                        <span class="logo-lg">
                            <img src="../agc/pereine/velzon/assets/images/pereine2white.png" alt="" height="55">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>
                <div data-simplebar data-simplebar-auto-hide="false" data-simplebar-track="secondary" >
                    <div id="scrollbar">
                        
                            <div class="container-fluid">
                            

                                
                                <ul class="navbar-nav" id="navbar-nav">
                                    <li class="menu-title"><span data-key="t-menu">ADMINISTRATION</span></li>
                                    
                                    <li class="nav-item">
                                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                        <i class="ri-honour-line"></i> <span data-key="t-multi-level">Reports</span>
                                    </a>
                                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                        <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="realtime_report.php?report_display_type=HTML" class="nav-link" data-key="t-level-2.1">Real-Time Main Report</a>
                                                </li>
                                            <!-- <li class="nav-item">
                                                <a href="#side1" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Rapports en temps réel
                                                </a>
                                                <div class="collapse menu-dropdown" id="side1">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="../VERM/VERM_admin.php" class="nav-link" data-key="t-level-2.1"> VERM - Module de rapports amélioré </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="realtime_report.php" class="nav-link" data-key="t-level-2.1">Real-Time Main Report</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_timeonVDADallSUMMARY.php" class="nav-link" data-key="t-level-2.1"> Real-Time Campaign Summary</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_rt_whiteboard_rpt.php" class="nav-link" data-key="t-level-2.1"> Real-Time Whiteboard Report </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </li> -->
                                            <!-- <li class="nav-item">
                                                <a href="#side2" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Agent Reports
                                                </a>
                                                <div class="collapse menu-dropdown" id="side2">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="../VERM/VERM_admin.php" class="nav-link" data-key="t-level-2.1"> VERM - Module de rapports amélioré</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_agent_time_detail.php" class="nav-link" data-key="t-level-2.1">Agent Time Detail</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_agent_status_detail.php" class="nav-link" data-key="t-level-2.1"> Agent Status Detail - Inbound Summary</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_agent_performance_detail.php" class="nav-link" data-key="t-level-2.1"> Agent Performance Detail </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_team_performance_detail.php" class="nav-link" data-key="t-level-2.1"> Team Performance Detail </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_performance_comparison_report.php" class="nav-link" data-key="t-level-2.1"> Performance Comparison Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_agent_days_detail.php" class="nav-link" data-key="t-level-2.1"> Single Agent Daily - Time </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="ST_agent_days_time.php" class="nav-link" data-key="t-level-2.1"> Time </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_usergroup_login_report.php" class="nav-link" data-key="t-level-2.1"> User Group Login Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_user_group_hourly_detail.php" class="nav-link" data-key="t-level-2.1"> User Group Hourly Report - v2 </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="user_stats.php" class="nav-link" data-key="t-level-2.1"> User Stats </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_agent_time_sheet.php" class="nav-link" data-key="t-level-2.1"> User Time Sheet</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </li> -->
                                            <!-- <li class="nav-item">
                                                <a href="#side3" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Time Clock Reports
                                                </a>
                                                <div class="collapse menu-dropdown" id="side3">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="timeclock_report.php" class="nav-link" data-key="t-level-2.1">User Timeclock Report</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="timeclock_status.php" class="nav-link" data-key="t-level-2.1">User Group Timeclock Status Report</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_agent_timeclock_detail.php" class="nav-link" data-key="t-level-2.1">User Timeclock Detail Report</a>
                                                        </li>
                                                    
                                                    </ul>
                                                </div>
                                            </li> -->
                                            <!-- <li class="nav-item">
                                                <a href="#side4" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2">Other Reports and Links
                                                </a>
                                                <div class="collapse menu-dropdown" id="side4">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="AST_server_performance.php" class="nav-link" data-key="t-level-2.1">Server Performance Report</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.phpadmin.php?ADD=999992&stage=TOTAL" class="nav-link" data-key="t-level-2.1">Maximum System Stats</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link" data-key="t-level-2.1">Administration Change Log</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </li> -->
                                            <!-- <li class="nav-item">
                                                <a href="#side5" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2">Inbound and Outbound Calling Reports
                                                </a>
                                                <div class="collapse menu-dropdown" id="side5">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="../VERM/VERM_admin.php\" class="nav-link" data-key="t-level-2.1"> VERM - Module de rapports amélioré </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_CLOSERstats_v2.php" class="nav-link" data-key="t-level-2.1">Inbound Report - v2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_CLOSERstats.php?DID=Y" class="nav-link" data-key="t-level-2.1"> Inbound Report by DID</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_CLOSER_service_level.php" class="nav-link" data-key="t-level-2.1"> Inbound Service Level Report</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_CLOSERsummary_hourly.php" class="nav-link" data-key="t-level-2.1"> Inbound Summary Hourly Report</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_inbound_daily_report.php" class="nav-link" data-key="t-level-2.1"> Inbound Daily Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_DIDstats.php" class="nav-link" data-key="t-level-2.1"> Inbound DID Report - DID Summary - Agent DID</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_IVRstats.php" class="nav-link" data-key="t-level-2.1">Inbound IVR Report</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_inbound_forecasting.php" class="nav-link" data-key="t-level-2.1">Inbound Forecasting Report - Advanced</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_VDADstats.php" class="nav-link" data-key="t-level-2.1"> Outbound Calling Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_OUTBOUNDsummary_interval.php" class="nav-link" data-key="t-level-2.1"> Outbound Summary Interval Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="call_report_export.php?ivr_export=YES" class="nav-link" data-key="t-level-2.1"> Outbound IVR Report - Export - Callmenu Agent </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_source_vlc_status_report.php" class="nav-link" data-key="t-level-2.1"> Outbound Lead Source Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="fcstats.php" class="nav-link" data-key="t-level-2.1"> Fronter - Closer Report - Detail </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_LISTS_pass_report.php" class="nav-link" data-key="t-level-2.1"> Lists Pass Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_LISTS_campaign_stats.php" class="nav-link" data-key="t-level-2.1"> Lists Campaign Statuses Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="called_counts_multilist_report.php" class="nav-link" data-key="t-level-2.1"> Called Counts List IDs Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="AST_campaign_status_list_report.php" class="nav-link" data-key="t-level-2.1"> Campaign Status List Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="call_report_export.php" class="nav-link" data-key="t-level-2.1"> Export Calls Report </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="lead_report_export.php" class="nav-link" data-key="t-level-2.1"> Export Leads Report</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link menu-link"  href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                            <i class="ri-dashboard-2-line"></i> <span  data-key="t-dashboards">Users</span>
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=0A" class="nav-link" data-key="t-analytics"> Show Users</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=1" class="nav-link" data-key="t-crm">Add A New User</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=1A" class="nav-link" data-key="t-ecommerce">Copy User</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=550" class="nav-link" data-key="t-crypto">Search For A User</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="./user_stats.php?user=<?php echo $user ?>" class="nav-link" data-key="t-projects"> User Stats</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="./user_status.php?user=<?php echo $user ?>" class="nav-link" data-key="t-nft"> User Status</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="./AST_agent_time_sheet.php?agent=<?php echo $user ?>" class="nav-link" data-key="t-job"> Time Sheet</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->


                                    <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Components</span></li>

                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                                            <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui"> Campaigns</span>
                                        </a>
                                        <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                            <a href="admin.php?ADD=11" class="nav-link" data-key="t-alerts">Add A New Campaign</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=10" class="nav-link" data-key="t-alerts">Campaigns Main</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=32" class="nav-link" data-key="t-badges">Statuses</a>
                                                        </li>
                                                        <!-- <li class="nav-item">
                                                            <a href="admin.php?ADD=33" class="nav-link" data-key="t-buttons">HotKeys</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=35" class="nav-link" data-key="t-colors">Lead Recycle</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=36" class="nav-link" data-key="t-cards">Auto-Alt Dial</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=39" class="nav-link" data-key="t-carousel">List Mix</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=37" class="nav-link" data-key="t-dropdowns">Pause Codes</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=301" class="nav-link" data-key="t-grid">Presets</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=302" class="nav-link" data-key="t-grid">AC-CID</a>
                                                        </li> -->
                                                    </ul>
                                                </div>
            
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                            <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Lists</span>
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=100" class="nav-link" data-key="t-sweet-alerts">Show Lists</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=111" class="nav-link" data-key="t-nestable-list"> Add A New List</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin_search_lead.php" class="nav-link" data-key="t-scrollbar">Search For A Lead</a>
                                                </li>
                                                <!-- <li class="nav-item">
                                                    <a href="admin.php?ADD=121" class="nav-link" data-key="t-animation">Add A New Lead</a>
                                                </li> -->
                                                <!-- <li class="nav-item">
                                                    <a href="admin.php?ADD=121" class="nav-link" data-key="t-tour">Add-Delete DNC Number</a>
                                                </li> -->
                                                <li class="nav-item">
                                                    <a href="admin_listloader_fourth_gen.php" class="nav-link" data-key="t-swiper-slider"> Load New Leads</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                                            <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Scripts</span>
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarForms">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=1000000" class="nav-link" data-key="t-basic-elements">Show Scripts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=1111111" class="nav-link" data-key="t-form-select"> Add A New Script</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <!-- <li class="nav-item">
                                        <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                                            <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Filters</span>
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTables">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=10000000" class="nav-link" data-key="t-basic-tables">Show Filters</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=11111111" class="nav-link" data-key="t-grid-js">Add A New Filter</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->

                                    <!-- <li class="nav-item">
                                        <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                                            <i class="ri-pie-chart-line"></i> <span data-key="t-charts">Inbound</span>
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarCharts">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="#sidebar1" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts">Inbound-Groups1
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebar1">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1000" class="nav-link" data-key="t-line"> Show In-Groups
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1111" class="nav-link" data-key="t-area">  Add A New In-Group
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1211" class="nav-link" data-key="t-column">
                                                                    Copy In-Group </a>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebar2" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts">Inbound-Groups2
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebar2">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1300" class="nav-link" data-key="t-line"> Show DIDs
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1311" class="nav-link" data-key="t-area"> Add A New DID
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1411" class="nav-link" data-key="t-column">
                                                                    Copy DID </a>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebar3" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts">Inbound-Groups3
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebar3">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1500" class="nav-link" data-key="t-line"> Show Call Menus
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1511" class="nav-link" data-key="t-area">  Add A New Call Menu
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1611" class="nav-link" data-key="t-column">
                                                                    Copy Call Menu </a>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebar4" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts">Inbound-Groups4
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebar4">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1700" class="nav-link" data-key="t-line"> Filter Phone Groups
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=1711" class="nav-link" data-key="t-area">  Add Filter Phone Group
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="admin.php?ADD=171" class="nav-link" data-key="t-column">
                                                                    Add-Delete FPG Number </a>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->

                                    <!-- <li class="nav-item">
                                        <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                            <i class="ri-compasses-2-line"></i> <span data-key="t-icons">User Groups</span>
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarIcons">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=100000" class="nav-link"><span data-key="t-remix">Show User Groups</span> <span class="badge badge-pill bg-info">v3.6</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=111111" class="nav-link"><span data-key="t-boxicons"> Add A New User Group</span> <span class="badge badge-pill bg-info">v2.1.4</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="group_hourly_stats.php" class="nav-link"><span data-key="t-material-design">Group Hourly Report</span> <span class="badge badge-pill bg-info">v7.2.96</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="user_group_bulk_change.php" class="nav-link" data-key="t-line-awesome">Bulk Group Change</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </li> -->

                                    <!-- <li class="nav-item">
                                        <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                            <i class="ri-map-pin-line"></i> <span data-key="t-maps">Remote Agents</span>
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarMaps">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=10000" class="nav-link" data-key="t-google">
                                                        Show Remote Agents
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=11111" class="nav-link" data-key="t-vector">
                                                        Add New Remote Agents
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=12000" class="nav-link" data-key="t-leaflet">
                                                        Show Extension Groups
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="admin.php?ADD=12111" class="nav-link" data-key="t-leaflet">
                                                        Add Extension Group
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->

                                    <!-- <li class="nav-item">
                                        <a class="nav-link menu-link" href="#admin" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                            <i class="ri-share-line"></i> <span data-key="t-multi-level">Admin</span>
                                        </a>
                                            <div class="collapse menu-dropdown" id="admin">
                                                <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                            <a href="admin.php?ADD=999998" class="nav-link" data-key="t-level-2.1">Admin</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=999998" class="nav-link" data-key="t-level-2.1"> Call Times</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=130000000" class="nav-link" data-key="t-level-2.1"> Shifts </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=10000000000" class="nav-link" data-key="t-level-2.1"> Phones</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=130000000000" class="nav-link" data-key="t-level-2.1"> Templates </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=140000000000" class="nav-link" data-key="t-level-2.1"> Carriers </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=100000000000" class="nav-link" data-key="t-level-2.1"> Servers </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=1000000000000" class="nav-link" data-key="t-level-2.1"> Conférences </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=311111111111111" class="nav-link" data-key="t-level-2.1"> System Settings </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=180000000000" class="nav-link" data-key="t-level-2.1"> Screen Labels </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=182000000000" class="nav-link" data-key="t-level-2.1"> Screen Colors </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=321111111111111" class="nav-link" data-key="t-level-2.1"> System Statuses </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=193000000000" class="nav-link" data-key="t-level-2.1"> Status Groups </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=196000000000" class="nav-link" data-key="t-level-2.1"> CID Groups </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=170000000000" class="nav-link" data-key="t-level-2.1"> Boite Vocale </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="audio_store.php" class="nav-link" data-key="t-level-2.1"> Audio Store </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=160000000000" class="nav-link" data-key="t-level-2.1"> Music On Hold </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin_languages.php?ADD=163000000000" class="nav-link" data-key="t-level-2.1">  Languages</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=197000000000" class="nav-link" data-key="t-level-2.1"> VM Message Groups </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=192000000000" class="nav-link" data-key="t-level-2.1"> Settings Containers </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="admin.php?ADD=198000000000" class="nav-link" data-key="t-level-2.1"> Queue Groups </a>
                                                        </li>
                                                </ul>
                                            </div>
                                    </li> -->

                                </ul>
                            </div><!-- Sidebar -->
                    </div>
                </div>
                <div class="sidebar-background"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

        </div>
        <!-- END layout-wrapper -->
        
    <!-- JAVASCRIPT -->
    <script src="../agc/pereine/velzon/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../agc/pereine/velzon/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="../agc/pereine/velzon/assets/libs/node-waves/waves.min.js"></script>
    <script src="../agc/pereine/velzon/assets/libs/feather-icons/feather.min.js"></script>
    <script src="../agc/pereine/velzon/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="../agc/pereine/velzon/assets/js/plugins.js"></script>

    <!-- App js -->
    <script src="../agc/pereine/velzon/assets/js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/master/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Mar 2024 12:59:51 GMT -->
</html>

