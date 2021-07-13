<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get Married </title>
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
    <link rel="icon" href="<?= base_url(); ?>assets\Mempelai\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\icon\icofont\css\icofont.css">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\icon\font-awesome\css\font-awesome.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\icon\feather\css\feather.css">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\bower_components\switchery\css\switchery.min.css">
    <!-- Tags css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap-tagsinput\css\bootstrap-tagsinput.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\css\style.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\css\jquery.mCustomScrollbar.css">
</head>

<body class="fix-menu">
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

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="index-1.htm">
                            <img class="img-fluid" src="<?= base_url(); ?>\assets\images\logo.png" alt="Theme-Logo">
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
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?= base_url(); ?>\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?= base_url(); ?>\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="d-flex align-self-center img-radius" src="<?= base_url(); ?>\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer
                                                        elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url(); ?>\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                                <i class="feather icon-settings"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.htm">
                                                <i class="feather icon-mail"></i> My Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.htm">
                                                <i class="feather icon-lock"></i> Lock Screen
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

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="<?= base_url(); ?>\assets\images\avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?= base_url(); ?>\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?= base_url(); ?>\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?= base_url(); ?>\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="<?= base_url(); ?>\assets\images\avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="feather icon-chevron-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="<?= base_url(); ?>\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="<?= base_url(); ?>\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="feather icon-navigation"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="index-1.htm">
                                                <span class="pcoded-mtext">Default</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-crm.htm">
                                                <span class="pcoded-mtext">CRM</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-analytics.htm">
                                                <span class="pcoded-mtext">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                        <span class="pcoded-mtext">Page layouts</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Vertical</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-static.htm">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-header-fixed.htm">
                                                        <span class="pcoded-mtext">Header Fixed</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-compact.htm">
                                                        <span class="pcoded-mtext">Compact</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-sidebar.htm">
                                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Horizontal</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-horizontal-static.htm" target="_blank">
                                                        <span class="pcoded-mtext">Static Layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-fixed.htm" target="_blank">
                                                        <span class="pcoded-mtext">Fixed layout</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon.htm" target="_blank">
                                                        <span class="pcoded-mtext">Static With Icon</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon-fixed.htm" target="_blank">
                                                        <span class="pcoded-mtext">Fixed With Icon</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-bottom.htm">
                                                <span class="pcoded-mtext">Bottom Menu</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-layout.htm" target="_blank">
                                                <span class="pcoded-mtext">Box Layout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-rtl.htm" target="_blank">
                                                <span class="pcoded-mtext">RTL</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="navbar-light.htm">
                                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                                        <span class="pcoded-mtext">Navigation</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-layers"></i></span>
                                        <span class="pcoded-mtext">Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="widget-statistic.htm">
                                                <span class="pcoded-mtext">Statistic</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-data.htm">
                                                <span class="pcoded-mtext">Data</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="widget-chart.htm">
                                                <span class="pcoded-mtext">Chart Widget</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                                        <span class="pcoded-mtext">Basic Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="alert.htm">
                                                <span class="pcoded-mtext">Alert</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="breadcrumb.htm">
                                                <span class="pcoded-mtext">Breadcrumbs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.htm">
                                                <span class="pcoded-mtext">Button</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-shadow.htm">
                                                <span class="pcoded-mtext">Box-Shadow</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="accordion.htm">
                                                <span class="pcoded-mtext">Accordion</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="generic-class.htm">
                                                <span class="pcoded-mtext">Generic Class</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.htm">
                                                <span class="pcoded-mtext">Tabs</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.htm">
                                                <span class="pcoded-mtext">Color</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.htm">
                                                <span class="pcoded-mtext">Label Badge</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="progress-bar.htm">
                                                <span class="pcoded-mtext">Progress Bar</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="preloader.htm">
                                                <span class="pcoded-mtext">Pre-Loader</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="list.htm">
                                                <span class="pcoded-mtext">List</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.htm">
                                                <span class="pcoded-mtext">Tooltip And Popover</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.htm">
                                                <span class="pcoded-mtext">Typography</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="other.htm">
                                                <span class="pcoded-mtext">Other</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-gitlab"></i></span>
                                        <span class="pcoded-mtext">Advance Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="draggable.htm">
                                                <span class="pcoded-mtext">Draggable</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-grid.htm">
                                                <span class="pcoded-mtext">Grid Stack</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="light-box.htm">
                                                <span class="pcoded-mtext">Light Box</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="modal.htm">
                                                <span class="pcoded-mtext">Modal</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notification.htm">
                                                <span class="pcoded-mtext">Notifications</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notify.htm">
                                                <span class="pcoded-mtext">PNOTIFY</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rating.htm">
                                                <span class="pcoded-mtext">Rating</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="range-slider.htm">
                                                <span class="pcoded-mtext">Range Slider</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="slider.htm">
                                                <span class="pcoded-mtext">Slider</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="syntax-highlighter.htm">
                                                <span class="pcoded-mtext">Syntax Highlighter</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tour.htm">
                                                <span class="pcoded-mtext">Tour</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="treeview.htm">
                                                <span class="pcoded-mtext">Tree View</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="nestable.htm">
                                                <span class="pcoded-mtext">Nestable</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="toolbar.htm">
                                                <span class="pcoded-mtext">Toolbar</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="x-editable.htm">
                                                <span class="pcoded-mtext">X-Editable</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-package"></i></span>
                                        <span class="pcoded-mtext">Extra Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="session-timeout.htm">
                                                <span class="pcoded-mtext">Session Timeout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="session-idle-timeout.htm">
                                                <span class="pcoded-mtext">Session Idle Timeout</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="offline.htm">
                                                <span class="pcoded-mtext">Offline</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="animation.htm">
                                        <span class="pcoded-micon"><i class="feather icon-aperture rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext">Animations</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="sticky.htm">
                                        <span class="pcoded-micon"><i class="feather icon-cpu"></i></span>
                                        <span class="pcoded-mtext">Sticky Notes</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-command"></i></span>
                                        <span class="pcoded-mtext">Icons</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="icon-font-awesome.htm">
                                                <span class="pcoded-mtext">Font Awesome</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-themify.htm">
                                                <span class="pcoded-mtext">Themify</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-simple-line.htm">
                                                <span class="pcoded-mtext">Simple Line Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-ion.htm">
                                                <span class="pcoded-mtext">Ion Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-material-design.htm">
                                                <span class="pcoded-mtext">Material Design</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-icofonts.htm">
                                                <span class="pcoded-mtext">Ico Fonts</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-weather.htm">
                                                <span class="pcoded-mtext">Weather Icon</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-typicons.htm">
                                                <span class="pcoded-mtext">Typicons</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-flags.htm">
                                                <span class="pcoded-mtext">Flags</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                                        <span class="pcoded-mtext">Form Components</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="form-elements-component.htm">
                                                <span class="pcoded-mtext">Form Components</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-add-on.htm">
                                                <span class="pcoded-mtext">Form-Elements-Add-On</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="form-elements-advance.htm">
                                                <span class="pcoded-mtext">Form-Elements-Advance</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-validation.htm">
                                                <span class="pcoded-mtext">Form Validation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="form-picker.htm">
                                        <span class="pcoded-micon"><i class="feather icon-edit-1"></i></span>
                                        <span class="pcoded-mtext">Form Picker</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-select.htm">
                                        <span class="pcoded-micon"><i class="feather icon-feather"></i></span>
                                        <span class="pcoded-mtext">Form Select</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-masking.htm">
                                        <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                                        <span class="pcoded-mtext">Form Masking</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-wizard.htm">
                                        <span class="pcoded-micon"><i class="feather icon-tv"></i></span>
                                        <span class="pcoded-mtext">Form Wizard</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                                        <span class="pcoded-mtext">Ready To Use</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="ready-cloned-elements-form.htm">
                                                <span class="pcoded-mtext">Cloned Elements Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-currency-form.htm">
                                                <span class="pcoded-mtext">Currency Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-booking.htm">
                                                <span class="pcoded-mtext">Booking Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-booking-multi-steps.htm">
                                                <span class="pcoded-mtext">Booking Multi Steps Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-comment.htm">
                                                <span class="pcoded-mtext">Comment Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-contact.htm">
                                                <span class="pcoded-mtext">Contact Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-job-application-form.htm">
                                                <span class="pcoded-mtext">Job Application Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-js-addition-form.htm">
                                                <span class="pcoded-mtext">JS Addition Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-login-form.htm">
                                                <span class="pcoded-mtext">Login Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-popup-modal-form.htm" target="_blank">
                                                <span class="pcoded-mtext">Popup Modal Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-registration-form.htm">
                                                <span class="pcoded-mtext">Registration Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-review-form.htm">
                                                <span class="pcoded-mtext">Review Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-subscribe-form.htm">
                                                <span class="pcoded-mtext">Subscribe Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-suggestion-form.htm">
                                                <span class="pcoded-mtext">Suggestion Form</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-tabs-form.htm">
                                                <span class="pcoded-mtext">Tabs Form</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                                        <span class="pcoded-mtext">Bootstrap Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="bs-basic-table.htm">
                                                <span class="pcoded-mtext">Basic Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-sizing.htm">
                                                <span class="pcoded-mtext">Sizing Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-border.htm">
                                                <span class="pcoded-mtext">Border Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-styling.htm">
                                                <span class="pcoded-mtext">Styling Table</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-inbox"></i></span>
                                        <span class="pcoded-mtext">Data Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-basic.htm">
                                                <span class="pcoded-mtext">Basic Initialization</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-advance.htm">
                                                <span class="pcoded-mtext">Advance Initialization</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-styling.htm">
                                                <span class="pcoded-mtext">Styling</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-api.htm">
                                                <span class="pcoded-mtext">API</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ajax.htm">
                                                <span class="pcoded-mtext">Ajax</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-server-side.htm">
                                                <span class="pcoded-mtext">Server Side</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-plugin.htm">
                                                <span class="pcoded-mtext">Plug-In</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-data-sources.htm">
                                                <span class="pcoded-mtext">Data Sources</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-server"></i></span>
                                        <span class="pcoded-mtext">Data Table Extensions</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-ext-autofill.htm">
                                                <span class="pcoded-mtext">AutoFill</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Button</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="dt-ext-basic-buttons.htm">
                                                        <span class="pcoded-mtext">Basic Button</span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="dt-ext-buttons-html-5-data-export.htm">
                                                        <span class="pcoded-mtext">Html-5 Data Export</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-col-reorder.htm">
                                                <span class="pcoded-mtext">Col Reorder</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-columns.htm">
                                                <span class="pcoded-mtext">Fixed Columns</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-header.htm">
                                                <span class="pcoded-mtext">Fixed Header</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-key-table.htm">
                                                <span class="pcoded-mtext">Key Table</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-responsive.htm">
                                                <span class="pcoded-mtext">Responsive</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-row-reorder.htm">
                                                <span class="pcoded-mtext">Row Reorder</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-scroller.htm">
                                                <span class="pcoded-mtext">Scroller</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-select.htm">
                                                <span class="pcoded-mtext">Select Table</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="foo-table.htm">
                                        <span class="pcoded-micon"><i class="feather icon-hash"></i></span>
                                        <span class="pcoded-mtext">FooTable</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
                                        <span class="pcoded-mtext">Handson Table</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="handson-appearance.htm">
                                                <span class="pcoded-mtext">Appearance</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-data-operation.htm">
                                                <span class="pcoded-mtext">Data Operation</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-cols.htm">
                                                <span class="pcoded-mtext">Rows Columns</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-columns-only.htm">
                                                <span class="pcoded-mtext">Columns Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-features.htm">
                                                <span class="pcoded-mtext">Cell Features</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-types.htm">
                                                <span class="pcoded-mtext">Cell Types</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-integrations.htm">
                                                <span class="pcoded-mtext">Integrations</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-only.htm">
                                                <span class="pcoded-mtext">Rows Only</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-utilities.htm">
                                                <span class="pcoded-mtext">Utilities</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="editable-table.htm">
                                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                        <span class="pcoded-mtext">Editable Table</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span>
                                        <span class="pcoded-mtext">Charts</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="chart-google.htm">
                                                <span class="pcoded-mtext">Google Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-echart.htm">
                                                <span class="pcoded-mtext">Echarts</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-chartjs.htm">
                                                <span class="pcoded-mtext">ChartJs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-list.htm">
                                                <span class="pcoded-mtext">List Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-float.htm">
                                                <span class="pcoded-mtext">Float Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-knob.htm">
                                                <span class="pcoded-mtext">Knob chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-morris.htm">
                                                <span class="pcoded-mtext">Morris Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-nvd3.htm">
                                                <span class="pcoded-mtext">Nvd3 Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-peity.htm">
                                                <span class="pcoded-mtext">Peity Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-radial.htm">
                                                <span class="pcoded-mtext">Radial Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-rickshaw.htm">
                                                <span class="pcoded-mtext">Rickshaw Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-sparkline.htm">
                                                <span class="pcoded-mtext">Sparkline Chart</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-c3.htm">
                                                <span class="pcoded-mtext">C3 Chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                                        <span class="pcoded-mtext">Maps</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="map-google.htm">
                                                <span class="pcoded-mtext">Google Maps</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="map-vector.htm">
                                                <span class="pcoded-mtext">Vector Maps</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="map-api.htm">
                                                <span class="pcoded-mtext">Google Map Search API</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="location.htm">
                                                <span class="pcoded-mtext">Location</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="<?= base_url(); ?>\extra-pages\landingpage\index.htm" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-navigation-2"></i></span>
                                        <span class="pcoded-mtext">Landing Page</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-unlock"></i></span>
                                        <span class="pcoded-mtext">Authentication</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="auth-normal-sign-in.htm" target="_blank">
                                                <span class="pcoded-mtext">Login With BG Image</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-in-social.htm" target="_blank">
                                                <span class="pcoded-mtext">Login With Social Icon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-in-social-header-footer.htm" target="_blank">
                                                <span class="pcoded-mtext">Login Social With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-normal-sign-in-header-footer.htm" target="_blank">
                                                <span class="pcoded-mtext">Login With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.htm" target="_blank">
                                                <span class="pcoded-mtext">Registration BG Image</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social.htm" target="_blank">
                                                <span class="pcoded-mtext">Registration Social Icon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social-header-footer.htm" target="_blank">
                                                <span class="pcoded-mtext">Registration Social With Header And
                                                    Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-header-footer.htm" target="_blank">
                                                <span class="pcoded-mtext">Registration With Header And Footer</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-multi-step-sign-up.htm" target="_blank">
                                                <span class="pcoded-mtext">Multi Step Registration</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-reset-password.htm" target="_blank">
                                                <span class="pcoded-mtext">Forgot Password</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-lock-screen.htm" target="_blank">
                                                <span class="pcoded-mtext">Lock Screen</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-modal.htm" target="_blank">
                                                <span class="pcoded-mtext">Modal</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-sliders"></i></span>
                                        <span class="pcoded-mtext">Maintenance</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="error.htm">
                                                <span class="pcoded-mtext">Error</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="comming-soon.htm">
                                                <span class="pcoded-mtext">Comming Soon</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="offline-ui.htm">
                                                <span class="pcoded-mtext">Offline UI</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">User Profile</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="timeline.htm">
                                                <span class="pcoded-mtext">Timeline</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="timeline-social.htm">
                                                <span class="pcoded-mtext">Timeline Social</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="user-profile.htm">
                                                <span class="pcoded-mtext">User Profile</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="user-card.htm">
                                                <span class="pcoded-mtext">User Card</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span>
                                        <span class="pcoded-mtext">E-Commerce</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="product.htm">
                                                <span class="pcoded-mtext">Product</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-list.htm">
                                                <span class="pcoded-mtext">Product List</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-edit.htm">
                                                <span class="pcoded-mtext">Product Edit</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-detail.htm">
                                                <span class="pcoded-mtext">Product Detail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-cart.htm">
                                                <span class="pcoded-mtext">Product Card</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-payment.htm">
                                                <span class="pcoded-mtext">Credit Card Form</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-mail"></i></span>
                                        <span class="pcoded-mtext">Email</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="email-compose.htm">
                                                <span class="pcoded-mtext">Compose Email</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-inbox.htm">
                                                <span class="pcoded-mtext">Inbox</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-read.htm">
                                                <span class="pcoded-mtext">Read Mail</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Email Template</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="<?= base_url(); ?>\extra-pages\email-templates\email-welcome.htm">
                                                        <span class="pcoded-mtext">Welcome Email</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?= base_url(); ?>\extra-pages\email-templates\email-password.htm">
                                                        <span class="pcoded-mtext">Reset Password</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?= base_url(); ?>\extra-pages\email-templates\email-newsletter.htm">
                                                        <span class="pcoded-mtext">Newsletter Email</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?= base_url(); ?>\extra-pages\email-templates\email-launch.htm">
                                                        <span class="pcoded-mtext">App Launch</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="<?= base_url(); ?>\extra-pages\email-templates\email-activation.htm">
                                                        <span class="pcoded-mtext">Activation Code</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">App</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" ">
                                    <a href="chat.htm">
                                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                                        <span class="pcoded-mtext">Chat</span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-globe"></i></span>
                                        <span class="pcoded-mtext">Social</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="fb-wall.htm">
                                                <span class="pcoded-mtext">Wall</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="message.htm">
                                                <span class="pcoded-mtext">Messages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                                        <span class="pcoded-mtext">Task</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="task-list.htm">
                                                <span class="pcoded-mtext">Task List</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="task-board.htm">
                                                <span class="pcoded-mtext">Task Board</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="task-detail.htm">
                                                <span class="pcoded-mtext">Task Detail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="issue-list.htm">
                                                <span class="pcoded-mtext">Issue List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-bookmark"></i></span>
                                        <span class="pcoded-mtext">To-Do</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="todo.htm">
                                                <span class="pcoded-mtext">To-Do</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="notes.htm">
                                                <span class="pcoded-mtext">Notes</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-image"></i></span>
                                        <span class="pcoded-mtext">Gallery</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="gallery-grid.htm">
                                                <span class="pcoded-mtext">Gallery-Grid</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="gallery-masonry.htm">
                                                <span class="pcoded-mtext">Masonry Gallery</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="gallery-advance.htm">
                                                <span class="pcoded-mtext">Advance Gallery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-search"></i><b>S</b></span>
                                        <span class="pcoded-mtext">Search</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="search-result.htm">
                                                <span class="pcoded-mtext">Simple Search</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="search-result2.htm">
                                                <span class="pcoded-mtext">Grouping Search</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-award"></i></span>
                                        <span class="pcoded-mtext">Job Search</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="job-card-view.htm">
                                                <span class="pcoded-mtext">Card View</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-details.htm">
                                                <span class="pcoded-mtext">Job Detailed</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-find.htm">
                                                <span class="pcoded-mtext">Job Find</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-panel-view.htm">
                                                <span class="pcoded-mtext">Job Panel View</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Extension</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file-plus"></i></span>
                                        <span class="pcoded-mtext">Editor</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="ck-editor.htm">
                                                <span class="pcoded-mtext">CK-Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="wysiwyg-editor.htm">
                                                <span class="pcoded-mtext">WYSIWYG Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ace-editor.htm">
                                                <span class="pcoded-mtext">Ace Editor</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="long-press-editor.htm">
                                                <span class="pcoded-mtext">Long Press Editor</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-file-minus"></i></span>
                                        <span class="pcoded-mtext">Invoice</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="invoice.htm">
                                                <span class="pcoded-mtext">Invoice</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="invoice-summary.htm">
                                                <span class="pcoded-mtext">Invoice Summary</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="invoice-list.htm">
                                                <span class="pcoded-mtext">Invoice List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-calendar"></i></span>
                                        <span class="pcoded-mtext">Event Calendar</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="event-full-calender.htm">
                                                <span class="pcoded-mtext">Full Calendar</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="event-clndr.htm">
                                                <span class="pcoded-mtext">CLNDER</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="image-crop.htm">
                                        <span class="pcoded-micon"><i class="feather icon-scissors"></i></span>
                                        <span class="pcoded-mtext">Image Cropper</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="file-upload.htm">
                                        <span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span>
                                        <span class="pcoded-mtext">File Upload</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="change-loges.htm">
                                        <span class="pcoded-micon"><i class="feather icon-briefcase"></i><b>CL</b></span>
                                        <span class="pcoded-mtext">Change Loges</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                        <span class="pcoded-mtext">Menu Levels</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Menu Level 2.1</span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Menu Level 2.2</span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="javascript:void(0)">
                                                        <span class="pcoded-mtext">Menu Level 3.1</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-mtext">Menu Level 2.3</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="disabled">
                                        <span class="pcoded-micon"><i class="feather icon-power"></i></span>
                                        <span class="pcoded-mtext">Disabled Menu</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="sample-page.htm">
                                        <span class="pcoded-micon"><i class="feather icon-watch"></i></span>
                                        <span class="pcoded-mtext">Sample Page</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel">Support</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="http://html.codedthemes.com/Adminty/doc" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-monitor"></i></span>
                                        <span class="pcoded-mtext">Documentation</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" target="_blank">
                                        <span class="pcoded-micon"><i class="feather icon-help-circle"></i></span>
                                        <span class="pcoded-mtext">Submit Issue</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>Basic Form Inputs</h4>
                                                        <span>Lorem ipsum dolor sit <code>amet</code>, consectetur
                                                            adipisicing elit</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index-1.htm"> <i class="feather icon-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Form-Components</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Form-Elements-Advance</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Switches card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Switches</h5>
                                                        <span>Add class of <code>.form-control</code> with
                                                            <code>&lt;input&gt;</code> tag</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Single Switche</h4>
                                                                <input type="checkbox" class="js-single" checked="">
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Multiple Switches</h4>
                                                                <input type="checkbox" class="js-switch" checked="">
                                                                <input type="checkbox" class="js-switch" checked="">
                                                                <input type="checkbox" class="js-switch" checked="">
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Enable Disable Switches</h4>
                                                                <input type="checkbox" class="js-dynamic-state" checked="">
                                                                <button class="btn btn-primary js-dynamic-enable">Enable</button>
                                                                <button class="btn btn-inverse js-dynamic-disable m-t-10">Disable</button>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <h4 class="sub-title">Color Switches</h4>
                                                                <input type="checkbox" class="js-default" checked="">
                                                                <input type="checkbox" class="js-primary" checked="">
                                                                <input type="checkbox" class="js-success" checked="">
                                                                <input type="checkbox" class="js-info" checked="">
                                                                <input type="checkbox" class="js-warning" checked="">
                                                                <input type="checkbox" class="js-danger" checked="">
                                                                <input type="checkbox" class="js-inverse" checked="">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4 class="sub-title">Switch Sizes</h4>
                                                                <input type="checkbox" class="js-large" checked="">
                                                                <input type="checkbox" class="js-medium" checked="">
                                                                <input type="checkbox" class="js-small" checked="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Switches card end -->
                                                <!-- Radio card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Radio</h5>
                                                        <span>Add class of <code>.form-control</code> with
                                                            <code>&lt;input&gt;</code> tag</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Radio Fill Button</h4>
                                                                <div class="form-radio">
                                                                    <form>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio" checked="checked">
                                                                                <i class="helper"></i>Radio 1
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio">
                                                                                <i class="helper"></i>Radio 2
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-inline radio-disable">
                                                                            <label>
                                                                                <input type="radio" disabled="" name="radio">
                                                                                <i class="helper"></i>Radio Disable
                                                                            </label>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Radio outline Button</h4>
                                                                <div class="form-radio">
                                                                    <form>
                                                                        <div class="radio radio-outline radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio" checked="checked">
                                                                                <i class="helper"></i>Radio 1
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-outline radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio">
                                                                                <i class="helper"></i>Radio 2
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radio-inline radio-disable">
                                                                            <label>
                                                                                <input type="radio" disabled="" name="radio">
                                                                                <i class="helper"></i>Radio Disable
                                                                            </label>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-md-6 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Radio Button</h4>
                                                                <div class="form-radio">
                                                                    <form>
                                                                        <div class="radio radiofill radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio" checked="checked">
                                                                                <i class="helper"></i>Radio-fill 1
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radiofill radio-inline">
                                                                            <label>
                                                                                <input type="radio" name="radio">
                                                                                <i class="helper"></i>Radio-fill 2
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio radiofill radio-inline radio-disable">
                                                                            <label>
                                                                                <input type="radio" disabled="" name="radio">
                                                                                <i class="helper"></i>Radio-fill Disable
                                                                            </label>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="sub-title">Color Radio Button</h4>
                                                        <div class="form-radio m-b-30">
                                                            <form>
                                                                <div class="radio radiofill radio-default radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Default Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radiofill radio-primary radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Primary Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radiofill radio-success radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Success Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radiofill radio-info radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Info Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radiofill radio-warning radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Warning Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radiofill radio-danger radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Danger Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radiofill radio-inverse radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Inverse Color
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <h4 class="sub-title">Color Radio material Button</h4>
                                                        <div class="form-radio m-b-30">
                                                            <form>
                                                                <div class="radio radio-matrial radio-default radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Default Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-matrial radio-primary radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Primary Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-matrial radio-success radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Success Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-matrial radio-info radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Info Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-matrial radio-warning radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Warning Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-matrial radio-danger radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Danger Color
                                                                    </label>
                                                                </div>
                                                                <div class="radio radio-matrial radio-inverse radio-inline">
                                                                    <label>
                                                                        <input type="radio" name="radio" checked="checked">
                                                                        <i class="helper"></i>Inverse Color
                                                                    </label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Radio card end -->
                                                <!-- Checkbox card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Checkbox</h5>
                                                        <span>Add class of <code>.form-control</code> with
                                                            <code>&lt;input&gt;</code> tag</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-6 m-b-30">
                                                                <h4 class="sub-title">Border Checkbox</h4>
                                                                <div class="border-checkbox-section">
                                                                    <div class="border-checkbox-group border-checkbox-group-default">
                                                                        <input class="border-checkbox" type="checkbox" id="checkbox0">
                                                                        <label class="border-checkbox-label" for="checkbox0">Do you like it?</label>
                                                                    </div>
                                                                    <div class="border-checkbox-group border-checkbox-group-primary">
                                                                        <input class="border-checkbox" type="checkbox" id="checkbox1">
                                                                        <label class="border-checkbox-label" for="checkbox1">Primary</label>
                                                                    </div>
                                                                    <div class="border-checkbox-group border-checkbox-group-success">
                                                                        <input class="border-checkbox" type="checkbox" id="checkbox2">
                                                                        <label class="border-checkbox-label" for="checkbox2">Success</label>
                                                                    </div>
                                                                    <div class="border-checkbox-group border-checkbox-group-info">
                                                                        <input class="border-checkbox" type="checkbox" id="checkbox3">
                                                                        <label class="border-checkbox-label" for="checkbox3">Info</label>
                                                                    </div>
                                                                    <div class="border-checkbox-group border-checkbox-group-warning">
                                                                        <input class="border-checkbox" type="checkbox" id="checkbox4">
                                                                        <label class="border-checkbox-label" for="checkbox4">Warning</label>
                                                                    </div>
                                                                    <div class="border-checkbox-group border-checkbox-group-danger">
                                                                        <input class="border-checkbox" type="checkbox" id="checkbox5">
                                                                        <label class="border-checkbox-label" for="checkbox5">Danger</label>
                                                                    </div>
                                                                    <div class="border-checkbox-group">
                                                                        <input class="border-checkbox" type="checkbox" id="checkbox6" disabled="">
                                                                        <label class="border-checkbox-label" for="checkbox6">Disabled</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-6 m-b-30">
                                                                <h4 class="sub-title">Fade-in Checkbox</h4>
                                                                <div class="checkbox-fade fade-in-default">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                        </span>
                                                                        <span>Default</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-primary">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                        </span>
                                                                        <span>Primary</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-warning">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-warning"></i>
                                                                        </span>
                                                                        <span> Warning</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                                                                        </span>
                                                                        <span>Success</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-info">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-info"></i>
                                                                        </span>
                                                                        <span> Info</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-danger">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-danger"></i>
                                                                        </span>
                                                                        <span> Danger</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-fade fade-in-disable">
                                                                    <label>
                                                                        <input type="checkbox" value="" disabled="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check text-default"></i>
                                                                        </span>
                                                                        <span>Disabled</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-6 m-b-30">
                                                                <h4 class="sub-title">Color Checkbox</h4>
                                                                <div class="checkbox-color checkbox-default">
                                                                    <input id="checkbox12" type="checkbox" checked="">
                                                                    <label for="checkbox12">
                                                                        Default
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-color checkbox-primary">
                                                                    <input id="checkbox18" type="checkbox" checked="">
                                                                    <label for="checkbox18">
                                                                        Primary
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-color checkbox-success">
                                                                    <input id="checkbox13" type="checkbox" checked="">
                                                                    <label for="checkbox13">
                                                                        Success
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-color checkbox-info">
                                                                    <input id="checkbox14" type="checkbox" checked="">
                                                                    <label for="checkbox14">
                                                                        Info
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-color checkbox-warning">
                                                                    <input id="checkbox15" type="checkbox" checked="">
                                                                    <label for="checkbox15">
                                                                        Warning
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-color checkbox-danger">
                                                                    <input id="checkbox16" type="checkbox" checked="">
                                                                    <label for="checkbox16">
                                                                        Danger
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-color checkbox-default">
                                                                    <input id="checkbox17" type="checkbox" disabled="">
                                                                    <label for="checkbox17">
                                                                        Disabled
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-6 m-b-30">
                                                                <h4 class="sub-title">zoom Checkbox</h4>
                                                                <div class="checkbox-zoom zoom-default">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                        </span>
                                                                        <span>Default</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-zoom zoom-primary">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                        </span>
                                                                        <span>Primary</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-zoom zoom-warning">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-warning"></i>
                                                                        </span>
                                                                        <span> Warning</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-zoom zoom-success">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-success"></i>
                                                                        </span>
                                                                        <span>Success</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-zoom zoom-info">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-info"></i>
                                                                        </span>
                                                                        <span> Info</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-zoom zoom-danger">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-danger"></i>
                                                                        </span>
                                                                        <span> Danger</span>
                                                                    </label>
                                                                </div>
                                                                <div class="checkbox-zoom zoom-disable">
                                                                    <label>
                                                                        <input type="checkbox" value="" disabled="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check text-default"></i>
                                                                        </span>
                                                                        <span>Disabled</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Checkbox card end -->
                                                <!-- Tags section start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Tags Input</h5>
                                                        <span>Add class of <code>.form-control</code> with
                                                            <code>&lt;input&gt;</code> tag</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Markup</h4>
                                                                <p>Just add <code>data-role="tagsinput"</code> to your
                                                                    input field to automatically change it to a tags
                                                                    input field.</p>
                                                                <div class="tags_add">
                                                                    <input type="text" class="form-control" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Colors</h4>
                                                                <p>You can set a fixed css class for your tags, or
                                                                    determine dynamically by providing a custom
                                                                    function.</p>
                                                                <div class="color-tags">
                                                                    <input class="" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Max-Tags</h4>
                                                                <p>Just add <code>"tags_max"</code> to your input field
                                                                    to automatically change it to a tags input field.
                                                                </p>
                                                                <div class="tags_max">
                                                                    <input class="" type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Max-Characters</h4>
                                                                <p>Just add <code>"tags_max_char"</code> to your input
                                                                    field to automatically change it to a tags input
                                                                    field.</p>
                                                                <div class="tags_max_char">
                                                                    <input class="" type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4">
                                                                <h4 class="sub-title">Multiple</h4>
                                                                <p>Just add <code>"tags_add_multiple"</code> to your
                                                                    input field to automatically change it to a tags
                                                                    input field.</p>
                                                                <div class="tags_add_multiple">
                                                                    <input class="" type="text" value="Amsterdam,Washington,Sydney" data-role="tagsinput">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Tags section ends -->
                                                <!-- Max Length Section Start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Max Length</h5>
                                                        <span>Add class of <code>.form-control</code> with
                                                            <code>&lt;input&gt;</code> tag</span>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Default</h4>
                                                                <p>The badge will show up by default when the remaining
                                                                    chars are <code>10</code> or <code>less</code>:</p>
                                                                <input type="text" class="form-control" placeholder="Type your keywords..." maxlength="10">
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Threshold</h4>
                                                                <p>Do you want the badge to show up when there are
                                                                    <code>20 chars</code> or less? Use the
                                                                    <code>threshold</code> option:
                                                                </p>
                                                                <input type="text" class="form-control thresold-i" placeholder="Type your keywords..." maxlength="20">
                                                            </div>
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Color-lables</h4>
                                                                <p>Just add <code>color-class</code>with
                                                                    <code>input</code>
                                                                </p>
                                                                <input type="text" class="form-control color-class" placeholder="Type your keywords..." maxlength="25">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 col-xl-4 m-b-30">
                                                                <h4 class="sub-title">Play With Positions</h4>
                                                                <p>All you need to do is specify the <code>placement
                                                                        option</code>, with one of those strings. If
                                                                    none is specified, the positioning will be defauted
                                                                    to <code>'top-left'</code>.
                                                                </p>
                                                                <input type="text" class="form-control position-class" placeholder="Type your keywords..." maxlength="25">
                                                            </div>
                                                            <div class="col-sm-12 col-xl-8">
                                                                <h4 class="sub-title">Also Working With Textarea</h4>
                                                                <p>Bootstrap maxlength supports textarea as well as
                                                                    inputs. Even on old IE.</p>
                                                                <textarea class="form-control max-textarea" maxlength="255" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Max Length Section end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Warning Section Starts -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery\js\jquery.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\modernizr\js\css-scrollbars.js"></script>

    <!-- Switch component js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\switchery\js\switchery.min.js"></script>
    <!-- Tags js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap-tagsinput\js\bootstrap-tagsinput.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>
    <!-- Max-length js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap-maxlength\js\bootstrap-maxlength.js">
    </script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js">
    </script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js">
    </script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <!-- Custom js -->

    <script type="text/javascript" src="<?= base_url(); ?>\assets\pages\advance-elements\swithces.js"></script>
    <script src="<?= base_url(); ?>\assets\js\pcoded.min.js"></script>
    <script src="<?= base_url(); ?>\assets\js\vartical-layout.min.js"></script>
    <script src="<?= base_url(); ?>\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>\assets\js\script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>