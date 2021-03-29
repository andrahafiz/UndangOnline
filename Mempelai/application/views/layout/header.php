<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $judul; ?></title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url(); ?>assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- Material Icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\icon\material-design\css\material-design-iconic-font.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\icon\font-awesome\css\font-awesome.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\css\jquery.mCustomScrollbar.css">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header" heheader-theme="theme2">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="<?= base_url(); ?>assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url(); ?>assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>

                                        <li>
                                            <a href="auth-normal-sign-in.htm">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">

                            <ul class="pcoded-item pcoded-left-item">

                                <li class="active">
                                    <a href="<?= base_url(); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?= base_url("Mempelai"); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">Mempelai</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?= base_url("Acara"); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Acara</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?= base_url("Tamu"); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-user-plus"></i></span>
                                        <span class="pcoded-mtext">Tamu Undangan</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?= base_url("Hadiah"); ?>">
                                        <span class="pcoded-micon"><i class="fa fa-gift"></i></span>
                                        <span class="pcoded-mtext">Hadiah</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="<?= base_url("Galeri"); ?>">
                                        <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                                        <span class="pcoded-mtext">Galeri</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="navbar-light.htm">
                                        <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                                        <span class="pcoded-mtext">Log Out</span>
                                    </a>
                                </li>
                                <!-- <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="widget-statistic.htm">
                                                <span class="pcoded-mtext">Statistic</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-data.htm">
                                                <span class="pcoded-mtext">Data</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-chart.htm">
                                                <span class="pcoded-mtext">Chart Widget</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li> -->
                            </ul>

                        </div>
                    </nav>