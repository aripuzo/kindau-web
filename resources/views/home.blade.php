<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Home</title>

    <link href="{{ asset('dist/app.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/pages/dashboard1.css">
</head>

<body class="theme-dark">
    <div class="grid-wrapper sidebar-bg bg1">

        <!-- Theme switcher -->
        <div id="theme-tab">
            <div class="theme-tab-item switch-theme bg-white" data-theme="theme-default" data-toggle="tooltip" title="Light"></div>
            <div class="theme-tab-item switch-theme bg-dark" data-theme="theme-dark" data-toggle="tooltip" title="Dark"></div>
        </div>

        <!-- BOF HEADER -->
        <div class="header">
            <div class="header-bar">
                <div class="brand">
                    <a href="index.html" class="logo"><span class="text-carolina">Kindau</span></a>
                    <a href="index.html" class="logo-sm text-carolina" style="display: none;">Kindau</a>
                </div>
                <div class="btn-toggle">
                    <!-- <a href="#" class="toggle-sidebar-btn"><i class="ti-arrow-circle-left"></i></a> -->
                    <a href="#" class="slide-sidebar-btn" style="display: none;"><i class="ti-menu"></i></a>
                </div>
                <div class="navigation d-flex">

                    <!-- BOF Header Search -->
                    <form class="navbar-search" role="search" method="post" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="ti-search"></i></div>
                            </div>
                            <input type="text" placeholder="Search for keywords" class="form-control" name="top-search"
                                id="top-search">
                        </div>
                    </form>
                    <!-- EOF Header Search -->

                    <!-- BOF Header Nav -->
                    <div class="navbar-menu d-flex">
                        <div class="menu-item">
                            <a href="#" class="btn" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <span class="badge badge-pill badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-alert">
                                <li class="dropdown-header text-center"><a href="#"><i class="ti-comment-alt"></i> View
                                        All Alerts <i class="ti-angle-right"></i></a></li>
                                <li><a href="#"><i class="fa fa-user"></i> New user registered <span>Just now</span></a>
                                </li>
                                <li><a href="#"><i class="fa fa-calendar-plus-o"></i> New event created <span>5 min
                                            ago</span></a></li>
                                <li><a href="#"><i class="fa fa-area-chart"></i> Report ready to download <span>1 day
                                            ago</span></a></li>
                                <li><a href="#"><i class="fa fa-bank"></i> Bill payment reminder <span>1 day
                                            ago</span></a></li>
                                <li><a href="#"><i class="fa fa-clock-o"></i> Staff meeting <span>3 days ago</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-item">
                            <a href="#" class="btn" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <span class="badge badge-pill badge-success">7</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-message">
                                <li class="dropdown-header text-center"><a href="#"><i class="ti-comments"></i> View All
                                        Messages <i class="ti-angle-right"></i></a></li>
                                <li>
                                    <img src="assets/img/profile/profile-04.jpg">
                                    <div class="message-row">
                                        <small>24h ago</small>
                                        <a href="#"><span class="message-user">Pear Appleton</span><br>
                                            Staff meeting on Tuesday at 4PM, remember to set date</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/img/profile/profile-07.jpg">
                                    <div class="message-row">
                                        <small>2h ago</small>
                                        <a href="#"><span class="message-user">siQuang Humbleman</span><br>
                                            RE: Remember to generate PNL for October</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/img/profile/profile-06.jpg">
                                    <div class="message-row">
                                        <small>3d ago</small>
                                        <a href="#"><span class="message-user">Lemony Tang</span><br>
                                            Appointment with lawyer, better call Saul!</a>
                                    </div>
                                </li>
                                <li>
                                    <img src="assets/img/profile/profile-07.jpg">
                                    <div class="message-row">
                                        <small>4d ago</small>
                                        <a href="#"><span class="message-user">siQuang Humbleman</span><br>
                                            Theme designed by siQuang for siQthemes</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-item">
                            <a href="#" class="btn right-sidebar-toggle"><i class="ti-user"></i></a>
                        </div>
                    </div>
                    <!-- EOF Header Nav -->

                </div>
            </div>
        </div>
        <!-- EOF HEADER -->

        <!-- BOF ASIDE-LEFT -->
        <div id="sidebar" class="sidebar">
            <div class="sidebar-content">
                <!-- sidebar-menu  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            Categories
                        </li>
                        <li class="<% if (htmlWebpackPlugin.options.topmenu == 'db') { %>active<% } %>">
                            <a href="index.html">
                                <i class="ti-dashboard"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="maincat <% if (htmlWebpackPlugin.options.topmenu == 'cp') { %>active<% } %>">
                            <a href="#">
                                <i class="ti-plug"></i>
                                <span class="menu-text">Components</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'cpdatetime') { %>class="active" <% } %>>
                                        <a href="cp_datetime.html">Date & Time</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'cptoggle') { %>class="active" <% } %>>
                                        <a href="cp_bstoggle.html">Bootstrap Toggle</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="maincat <% if (htmlWebpackPlugin.options.topmenu == 'ui') { %>active<% } %>">
                            <a href="#">
                                <i class="ti-palette"></i>
                                <span class="menu-text">UI Elements</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'uitypo') { %>class="active"<% } %>>
                                        <a href="ui_typography.html">Typography</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'uicolor') { %>class="active" <% } %>>
                                        <a href="ui_colors.html">Colors</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'uifa') { %>class="active"<% } %>>
                                        <a href="ui_fontawesome.html">Fontawesome Icons</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'uithemify') { %>class="active"<% } %>>
                                        <a href="ui_themify.html">Themify Icons</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'uibutton') { %>class="active"<% } %>>
                                        <a href="ui_buttons.html">Buttons</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'uicard') { %>class="active"<% } %>>
                                        <a href="ui_cards.html">Cards</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'uimodal') { %>class="active"<% } %>>
                                        <a href="ui_modals.html">Modals</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'uitoastr') { %>class="active"<% } %>>
                                        <a href="ui_toastr.html">Toastr Notifications</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="maincat <% if (htmlWebpackPlugin.options.topmenu == 'tb') { %>active<% } %>">
                            <a href="#">
                                <i class="ti-layout-grid2"></i>
                                <span class="menu-text">Tables</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'tbbasic') { %>class="active" <% } %>>
                                        <a href="tb_basic.html">Basic Tables</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'tbdatatables') { %>class="active" <% } %>>
                                        <a href="tb_datatables.html">Datatables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="maincat <% if (htmlWebpackPlugin.options.topmenu == 'fm') { %>active<% } %>">
                            <a href="#">
                                <i class="ti-write"></i>
                                <span class="menu-text">Forms</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'fmcontrol') { %>class="active" <% } %>>
                                        <a href="fm_control.html">Form Control</a>
                                    </li>
                                    <li class="tier1 <% if (htmlWebpackPlugin.options.submenu == 'fmckeditor') { %>active<% } %>">
                                        <a href="#"><span class="menu-text">CKEditor</span></a>
                                        <div class="subcat">
                                            <ul>
                                                <li <% if (htmlWebpackPlugin.options.submenu2 == 'fmckeditorinline') { %>class="active" <% } %>>
                                                    <a href="fm_ckeditor_inline.html">Inline</a>
                                                </li>
                                                <li <% if (htmlWebpackPlugin.options.submenu2 == 'fmckeditorclassic') { %>class="active" <% } %>>
                                                    <a href="fm_ckeditor_classic.html">Classic</a>
                                                </li>
                                                <li <% if (htmlWebpackPlugin.options.submenu2 == 'fmckeditorballoon') { %>class="active" <% } %>>
                                                    <a href="fm_ckeditor_balloon.html">Balloon</a>
                                                </li>
                                                <li <% if (htmlWebpackPlugin.options.submenu2 == 'fmckeditorblock') { %>class="active" <% } %>>
                                                    <a href="fm_ckeditor_block.html">Balloon Block</a>
                                                </li>
                                                <li <% if (htmlWebpackPlugin.options.submenu2 == 'fmckeditordocument') { %>class="active" <% } %>>
                                                    <a href="fm_ckeditor_document.html">Document</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="maincat <% if (htmlWebpackPlugin.options.topmenu == 'ch') { %>active<% } %>">
                            <a href="#">
                                <i class="ti-bar-chart"></i>
                                <span class="menu-text">Charts</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'chapex') { %>class="active" <% } %>>
                                        <a href="ch_apexcharts.html">Apex Charts</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'chamchart') { %>class="active" <% } %>>
                                        <a href="javascript:;">amCharts</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'chmorris') { %>class="active" <% } %>>
                                        <a href="javascript:;">Morris Charts</a>
                                    </li>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'chflot') { %>class="active" <% } %>>
                                        <a href="javascript:;">Flot Charts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="header-menu">
                            Extra
                        </li>
                        <li class="maincat <% if (htmlWebpackPlugin.options.topmenu == 'pg') { %>active<% } %>">
                            <a href="#">
                                <i class="ti-file"></i>
                                <span class="menu-text">Pages</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li <% if (htmlWebpackPlugin.options.submenu == 'pglogin') { %>class="active" <% } %>>
                                        <a href="pg_login.html" target="_blank">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="maincat">
                            <a href="#">
                                <i class="ti-layers-alt"></i>
                                <span class="menu-text">Multi-Levels Menu</span>
                            </a>
                            <div class="subcat">
                                <ul>
                                    <li class="tier1">
                                        <a href="javascript:;">Tier 1</a>
                                        <div class="subcat">
                                            <ul>
                                                <li><a href="javascript:;">Level 2</a></li>
                                                <li><a href="javascript:;">Level 2</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Submenu</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Submenu</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="<% if (htmlWebpackPlugin.options.topmenu == 'dc') { %>active<% } %>">
                            <a href="documentation.html">
                                <i class="ti-agenda"></i>
                                <span class="menu-text">Documentation</span>
                                <span class="badge badge-pill badge-primary">New</span>
                            </a>
                        </li>
                        <li class="<% if (htmlWebpackPlugin.options.topmenu == 'ca') { %>active<% } %>">
                            <a href="ex_calendar.html">
                                <i class="ti-calendar"></i>
                                <span class="menu-text">Calendar</span>
                                <span class="badge badge-pill badge-primary">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/siQuang/siqtheme" target="_blank">
                                <i class="ti-github"></i>
                                <span class="menu-text">Github/siQtheme</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </div>
        <!-- EOF ASIDE-LEFT -->

        <!-- BOF MAIN -->
        <div class="main">

            <!-- BOF Breadcrumb -->
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> Dashboard</a></li>
                    </ol>
                </div>
            </div>
            <!-- EOF Breadcrumb -->

            <!-- BOF MAIN-BODY -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-bar-chart"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Monthly Goal</h6>
                                <h3 class="card-title text-warning bold">$74,502</h3>
                            </div>
                            <div class="progress progress-bar-sm">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>$0</small></span>
                                <span class="float-right"><small>$100,000</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-receipt"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Monthly Orders</h6>
                                <h3 class="card-title text-primary bold">9,432</h3>
                            </div>
                            <div class="progress progress-bar-sm">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>Total Monthly Orders</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="icon-left text-secondary"><i class="ti-wallet"></i></div>
                            <div class="number-right text-right">
                                <h6 class="bold text-secondary">Monthly Expenses</h6>
                                <h3 class="card-title text-bubblegum bold">$2,942</h3>
                            </div>
                            <div class="progress progress-bar-sm">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-bubblegum" role="progressbar" style="width: 30%" aria-valuenow="30"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="progress-text text-secondary">
                                <span class="float-left"><small>0%</small></span>
                                <span class="float-right"><small>100%</small></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Year Comparison Chart -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-body" id="year-comparison-chart"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Employees Sales -->
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption">
                                <i class="ti-user"></i> Employees Sales
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Today</a>
                                <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Week</a>
                                <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Month</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 text-right">
                                                    <h6 class="bold text-secondary">Daily</h6>
                                                    <h5 class="card-title text-tuscany bold">$7,524</h3>
                                                </div>
                                                <div class="col-6">
                                                    <div id="sparkline-chart1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6 text-right">
                                                    <h6 class="bold text-secondary">Weekly</h6>
                                                    <h5 class="card-title text-info bold">$18,852</h3>
                                                </div>
                                                <div class="col-6">
                                                    <div id="sparkline-chart2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 scrollbox-md" data-simplebar>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Employee</th>
                                                    <th class="text-right">Daily</th>
                                                    <th class="text-right">Totals</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/profile/profile-07.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">siQuang Humbleman</a></td>
                                                    <td class="text-right">$2,546</td>
                                                    <td class="text-right">$14,587</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/profile/profile-02.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Bob OfHope</a></td>
                                                    <td class="text-right">$2,338</td>
                                                    <td class="text-right">$8,321</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/profile/profile-03.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Dana Squash</a></td>
                                                    <td class="text-right">$1,478</td>
                                                    <td class="text-right">$6,720</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/profile/profile-04.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Pear Appleton</a></td>
                                                    <td class="text-right">$2,338</td>
                                                    <td class="text-right">$8,321</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/profile/profile-06.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Lemony Tang</a></td>
                                                    <td class="text-right">$1,478</td>
                                                    <td class="text-right">$6,720</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/profile/profile-01.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Duke Turnbull</a></td>
                                                    <td class="text-right">$1,338</td>
                                                    <td class="text-right">$4,321</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row"><img src="assets/img/profile/profile-05.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Berry Cherry</a></td>
                                                    <td class="text-right">$978</td>
                                                    <td class="text-right">$3,720</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- My Tasks -->
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption">
                                <i class="ti-pencil-alt"></i> My Tasks
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Add New Task"><i class="ti-plus"></i></a>
                                <a href="javascript:;" class="btn btn-sm btn-outline-secondary" data-toggle="dropdown" aria-expanded="false">
                                    <i class="ti-settings"></i> Settings <i class="ti-arrow-circle-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:;" class="dropdown-item">Action</a>
                                    <a href="javascript:;" class="dropdown-item">Another Action</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:;" class="dropdown-item">Some Setting</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row py-3">
                                <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                                    <h2 class="text-primary bold">10</h2>
                                    Active
                                </div>
                                <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                                    <h2 class="text-success bold">2</h2>
                                    In-Progress
                                </div>
                                <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                                    <h2 class="text-warning bold">3</h2>
                                    On-Hold
                                </div>
                                <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                                    <h2 class="text-secondary bold">4</h2>
                                    Completed
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 scrollbox-md" data-simplebar>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-baseline">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox1" name="checkbox1">
                                                    <label class="custom-control-label" for="checkbox1">&nbsp;</label>
                                                </div>
                                                <div class="pl-4">
                                                    <strong>Doctor Appointment <i class="ti-hand-open text-warning"></i></strong><br>Annual checkup with doctor
                                                </div>
                                                <div class="ml-auto text-right">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                        <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-baseline">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox2" name="checkbox2">
                                                    <label class="custom-control-label" for="checkbox2">&nbsp;</label>
                                                </div>
                                                <div class="pl-4">
                                                    <strong>Write Unit Test <i class="ti-timer text-success"></i></strong><br>Unit test for dashboard widgets
                                                </div>
                                                <div class="ml-auto text-right">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                        <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-baseline">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox3" name="checkbox3">
                                                    <label class="custom-control-label" for="checkbox3">&nbsp;</label>
                                                </div>
                                                <div class="pl-4">
                                                    <strong>Annual Report <i class="ti-notepad text-primary"></i></strong><br>Design annual report cover
                                                </div>
                                                <div class="ml-auto text-right">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                        <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-baseline">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox4" name="checkbox4">
                                                    <label class="custom-control-label" for="checkbox4">&nbsp;</label>
                                                </div>
                                                <div class="pl-4">
                                                    <strong>Management Meeting <i class="ti-notepad text-primary"></i></strong><br>Coming up meeting with staffs
                                                </div>
                                                <div class="ml-auto text-right">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                        <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-baseline">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox5" name="checkbox5">
                                                    <label class="custom-control-label" for="checkbox5">&nbsp;</label>
                                                </div>
                                                <div class="pl-4">
                                                    <strong>Merge Development <i class="ti-timer text-success"></i></strong><br>Merge development branch with master
                                                </div>
                                                <div class="ml-auto text-right">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                        <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-baseline">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox6" name="checkbox6">
                                                    <label class="custom-control-label" for="checkbox6">&nbsp;</label>
                                                </div>
                                                <div class="pl-4">
                                                    <strong>Build Report <i class="ti-hand-open text-warning"></i></strong><br>Build report graph for dashboard
                                                </div>
                                                <div class="ml-auto text-right">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                        <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-baseline">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" class="custom-control-input" id="checkbox7" name="checkbox7">
                                                    <label class="custom-control-label" for="checkbox7">&nbsp;</label>
                                                </div>
                                                <div class="pl-4">
                                                    <strong>Add New Vendor <i class="ti-hand-open text-warning"></i></strong><br>Add new third-party vendor
                                                </div>
                                                <div class="ml-auto text-right">
                                                    <div class="btn-group btn-group-sm">
                                                        <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                                        <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Articles -->
            <div class="row" id="articles"></div>

            <div class="row">
                <!-- Product Sales Chart -->
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body" id="product-sales-chart"></div>
                    </div>
                </div>

                <!-- Expenses Chart -->
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body" id="expenses-chart"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Company Timeline -->
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption text-primary">
                                <i class="ti-panel"></i> Company Timeline
                            </div>
                        </div>
                        <div class="card-body scrollbox-md" data-simplebar>
                            <div class="timeline-wrapper">
                                <div class="timeline-item" data-date="04-22-2020">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quam nisi distinctio dolorum est tempora.</p>
                                    <a href="javascript:;" class="btn btn-sm btn-primary">More Info</a>
                                </div>
                                <div class="timeline-item" data-date="04-16-2020">
                                    <p>Completed dashboard layout and add all required widgets.</p>
                                </div>
                                <div class="timeline-item" data-date="04-14-2020">
                                    <p>Added new page to UI Element category. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit officiis ut natus et minima expedita.</p>
                                    <a href="javascript:;" class="btn btn-sm btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Memebers -->
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption text-primary">
                                <i class="ti-user"></i> Recent Members
                            </div>
                            <div class="tools">
                                <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="ti-import" data-toggle="tooltip" title="Download List"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card">
                                        <img src="assets/img/profile/profile-01.jpg" alt="" class="card-img-top">
                                        <div class="card-body p-2 text-center">
                                            <h5 class="card-title">Jason Crispy</h5>
                                            <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                                            <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 3.5k</a>
                                            <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 2.4k</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card">
                                        <img src="assets/img/profile/profile-02.jpg" alt="" class="card-img-top">
                                        <div class="card-body p-2 text-center">
                                            <h5 class="card-title">Bob OfHope</h5>
                                            <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                                            <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 4.1k</a>
                                            <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 7.2k</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="card">
                                        <img src="assets/img/profile/profile-03.jpg" alt="" class="card-img-top">
                                        <div class="card-body p-2 text-center">
                                            <h5 class="card-title">Dana Squash</h5>
                                            <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                                            <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 6.1k</a>
                                            <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 5.5k</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EOF MAIN-BODY -->

        </div>
        <!-- EOF MAIN -->

        <!-- BOF FOOTER -->
        <div class="footer">
            <p class="text-center">
                <a class="ml-2" href="https://opensource.org/licenses/MIT" target="_blank"><img src="https://img.shields.io/badge/License-MIT-green.svg" alt="siQtheme License"></a>
                <a class="ml-2" href="https://github.com/siQuang/siqtheme/releases" target="_blank"><img src="https://img.shields.io/github/release/siQuang/siqtheme.svg" alt="Github siQtheme"></a>
                <a class="ml-2" href="https://www.npmjs.com/package/siqtheme" target="_blank"><img src="https://img.shields.io/npm/v/siqtheme/latest.svg" alt="NPM siQtheme"></a>
            </p>

            <p class="text-center">Copyright © 2019-2020 siQtheme by <a href="https://siquang.com" target="_blank">3M Square</a>. All rights reserved.</p>
        </div>
        
        <!-- Preloader -->
        <div id="preloader"></div>
        <!-- EOF FOOTER -->

        <!-- BOF ASIDE-RIGHT -->
        <div id="sidebar-right">
            <div class="sidebar-right-container">

                <!-- BOF TABS -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#tab-1" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                    <li>
                        <a href="#tab-2" data-toggle="tab" class="nav-link">Settings</a>
                    </li>
                    <li>
                        <a href="#tab-3" data-toggle="tab" class="nav-link">Help</a>
                    </li>
                </ul>
                <!-- EOF TABS -->

                <!-- BOF TAB PANES -->
                <div class="tab-content">
                    <!-- BOF TAB-PANE #1 -->
                    <div id="tab-1" class="tab-pane show active">
                        <div class="pane-header">
                            <h3><i class="ti-user"></i> User Panel</h3>
                            <i class="fa fa-circle text-success"></i> <span class="profile-user">siQuang
                                Humbleman</span>
                            <span class="float-right"><a href="#" class="text-carolina">Log-Out</a></span>
                        </div>
                        <div class="pane-body">
                            <div class="card bg-transparent mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h5 class="mb-3">My Theme</h5>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn switch-theme btn-light" data-theme="theme-default">Light</button>
                                            <button type="button" class="btn switch-theme btn-dark" data-theme="theme-dark">Dark</button>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <h5 class="mb-3">My Profile</h5>
                                        <form class="form-update-profile">
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Firstname:</label>
                                                <div class="col">
                                                    <input type="text" name="first_name" class="form-control-plaintext"
                                                        value="siQuang">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Lastname:</label>
                                                <div class="col">
                                                    <input type="text" name="last_name" class="form-control-plaintext"
                                                        value="Humbleman">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Email:</label>
                                                <div class="col">
                                                    <input type="text" name="email" class="form-control-plaintext"
                                                        value="siquang@example.com">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Username:</label>
                                                <div class="col">
                                                    <input type="text" name="username" class="form-control-plaintext"
                                                        value="siquang">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-4">Password:</label>
                                                <div class="col">
                                                    <input type="password" name="password" class="form-control-plaintext"
                                                        value="123456789">
                                                </div>
                                            </div>
                                            <div class="col offset-md-4 pl-2">
                                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="list-group-item">
                                        <h5 class="mb-3">
                                            Messages
                                            <span class="badge badge-pill badge-info pull-right">4</span>
                                        </h5>
                                        <div class="message-group d-flex flex-row mb-3">
                                            <a href="#"><img src="assets/img/profile/profile-01.jpg" class="rounded"
                                                    alt="image"></a>
                                            <div class="message-item">
                                                <small class="text-carolina">Today 3:30 pm</small><br>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </div>
                                        </div>
                                        <div class="message-group d-flex flex-row mb-3">
                                            <a href="#"><img src="assets/img/profile/profile-03.jpg" class="rounded"
                                                    alt="image"></a>
                                            <div class="message-item">
                                                <small class="text-carolina">Today 12:45 pm</small><br>
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                ut aliquip aute irure dolor in.
                                            </div>
                                        </div>
                                        <div class="message-group d-flex flex-row mb-3">
                                            <a href="#"><img src="assets/img/profile/profile-02.jpg" class="rounded"
                                                    alt="image"></a>
                                            <div class="message-item">
                                                <small class="text-carolina">Yesterday 5:20 pm</small><br>
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                                dolore eu fugiat nulla pariatur.
                                            </div>
                                        </div>
                                        <div class="message-group d-flex flex-row">
                                            <a href="#"><img src="assets/img/profile/profile-05.jpg" class="rounded"
                                                    alt="image"></a>
                                            <div class="message-item">
                                                <small class="text-carolina">Tuesday 2:20 pm</small><br>
                                                Sunt in culpa qui officia deserunt mollit anim est laborum voluptate.
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <h5>Upcoming Events</h5>
                                        <p class="card-text">for Monday - February 25, 2019</p>
                                        <div class="profile-calendar">
                                            <table class="table table-bordered table-hover table-sm">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">Schedule</th>
                                                        <th scope="col">Events</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>All-day</td>
                                                        <td><i class="fa fa-circle text-info"></i> Project concept</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10:00 am</td>
                                                        <td><i class="fa fa-circle text-info"></i> Staff meeting</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2:50 pm</td>
                                                        <td><i class="fa fa-circle text-warning"></i> Send out report
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4:30 pm</td>
                                                        <td><i class="fa fa-circle text-danger"></i> Appointment with
                                                            Tang</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- EOF TAB-PANE #1 -->

                    <!-- BOF TAB-PANE #2 -->
                    <div id="tab-2" class="tab-pane">
                        <div class="pane-header">
                            <h3><i class="ti-settings"></i> Settings</h3>
                            Application Settings
                            <span class="float-right"><a href="#" class="text-carolina">Log-Out</a></span>
                        </div>
                        <div class="pane-body">
                            <div class="card bg-transparent mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h5 class="text-carolina"><i class="ti-user"></i> User Settings</h5>
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm">
                                        Notifications
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm"> Dashboard
                                        Graphs
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm" data-on="Yes"
                                            data-off="No"> Get Daily Feed
                                    </li>
                                    <li class="list-group-item">
                                        <h5 class="text-carolina"><i class="ti-world"></i> Global Settings</h5>
                                        Global settings are only accessible by a super administrator or admin group.
                                        These settings control the application globally.
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes" data-off="No">
                                        Show Subscription
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm"> SMTP Server
                                        <div class="row mt-3">
                                            <div class="input-group input-group-sm col">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">SMTP</span>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" checked data-toggle="toggle" data-size="sm" data-on="Yes"
                                            data-off="No"> Send Out Daily Report
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes" data-off="No">
                                        Send Daily Cron Report
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes" data-off="No">
                                        Backup Database Daily
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- EOF TAB-PANE #2 -->

                    <!-- BOF TAB-PANE #3 -->
                    <div id="tab-3" class="tab-pane">
                        <div class="pane-header">
                            <h3><i class="ti-agenda"></i> Help</h3>
                            Frequently Asked Questions
                            <span class="float-right"><a href="#" class="text-carolina">Log-Out</a></span>
                        </div>
                        <div class="pane-body">
                            <div class="accordion" id="faq-example">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#faq1">
                                                Frequently Asked Question #1
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq1" class="collapse show" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq2">
                                                Frequently Asked Question #2
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq2" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq3">
                                                Frequently Asked Question #3
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq3" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq4">
                                                Frequently Asked Question #4
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq4" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq5">
                                                Frequently Asked Question #5
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq5" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq6">
                                                Frequently Asked Question #6
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq6" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#faq7">
                                                Frequently Asked Question #7
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="faq7" class="collapse" data-parent="#faq-example">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EOF TAB-PANE #3 -->
                </div>
                <!-- EOF TAB PANES -->

            </div>
        </div>
        <!-- EOF ASIDE-RIGHT -->

        <div id="overlay"></div>

    </div> <!-- END WRAPPER -->

    <script src="{{ asset('dist/app.js') }}"></script>
    <script src="assets/scripts/pages/dashboard1.js"></script>
</body>

</html>