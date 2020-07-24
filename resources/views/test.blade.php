<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>siQtheme by 3M Square</title>

    <link href="{{ asset('dist/app.css') }}" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body class="theme-dark">
    <div class="grid-wrapper sidebar-bg bg1">

        <!-- BOF HEADER -->
        <div class="header">
            <div class="header-bar">
                <div class="brand">
                    <a href="index.html" class="logo"><span class="text-carolina">siQ</span>theme</a>
                    <a href="index.html" class="logo-sm text-carolina" style="display: none;">siQ</a>
                </div>
                <div class="btn-toggle">
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
                            <span>Categories</span>
                        </li>
                        <li class="active">
                            <a href="index.html">
                                <i class="ti-dashboard"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>
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
                                        <a href="javascript:;">Onion</a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">Router</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="documenation.html">
                                <i class="ti-agenda"></i>
                                <span class="menu-text">Documentation</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/siQuang/siqtheme" target="_blank">
                                <i class="ti-github"></i>
                                <span class="menu-text">siQtheme Github</span>
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
                        <li class="breadcrumb-item"><i class="ti-home"></i> Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- EOF Breadcrumb -->

            <!-- BOF MAIN-BODY -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="caption uppercase">
                                <i class="ti-briefcase"></i> Card Header
                            </div>
                            <div class="tools">
                                <a href="#" class="btn btn-outline-secondary"><i class="ti-pencil-alt"></i></a>
                                <a href="#" class="btn btn-outline-secondary"><i class="ti-settings"></i></a>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">list-group list-group-flush</li>
                            <li class="list-group-item">list-group list-group-flush</li>
                        </ul>
                        <div class="card-body">
                            <p class="card-text">Below the music groans the speaking ancestor. The spigot kidnaps the
                                utility postage on top of a south. A trilogy coasts across a floppy connector. The piano
                                sacks the stable socket inside the handler. The spike multiplies beside the crazy
                                scroll.</p>
                        </div>
                        <div class="card-footer text-right">
                            <a href="#" class="btn btn-primary toastr-notify"><i class="ti-face-smile"></i> Submit</a>
                            <a href="#" class="btn btn-secondary"><i class="ti-face-sad"></i> Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- EOF MAIN-BODY -->

        </div>
        <!-- EOF MAIN -->

        <!-- BOF FOOTER -->
        <div class="footer">
            <p class="text-center mt-3">Copyright © 2019-2020 siQtheme by 3M Square. All rights reserved.</p>
        </div>
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
                                            <button type="button" class="btn switch-theme btn-light"
                                                id="theme-default">Light</button>
                                            <button type="button" class="btn switch-theme btn-dark"
                                                id="theme-dark">Dark</button>
                                            <button type="button" class="btn switch-theme btn-primary"
                                                id="theme-blue">Blue</button>
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
                                                    <input type="password" name="password"
                                                        class="form-control-plaintext" value="123456789">
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
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes"
                                            data-off="No">
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
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes"
                                            data-off="No">
                                        Send Daily Cron Report
                                    </li>
                                    <li class="list-group-item">
                                        <input type="checkbox" data-toggle="toggle" data-size="sm" data-on="Yes"
                                            data-off="No">
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
</body>

</html>