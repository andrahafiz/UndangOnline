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

          <nav class="navbar header-navbar pcoded-header iscollapsed" header-theme="theme2" pcoded-header-position="fixed">
              <div class="navbar-wrapper">

                  <div class="navbar-logo">
                      <a class="mobile-menu" id="mobile-collapse" href="#!">
                          <i class="feather icon-menu"></i>
                      </a>
                      <a href="index-1.htm">
                          <img class="img-fluid" src="<?= base_url(); ?>assets\Admin\images\logo.png" alt="Theme-Logo">
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
                      <!-- <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?= base_url(); ?>assets\Admin\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span><?= $this->session->userdata('Username_akun'); ?></span>
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
                        </ul> -->
                  </div>
              </div>
          </nav>

          <!-- Sidebar inner chat end-->
          <div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                  <nav class="pcoded-navbar">
                      <div class="pcoded-inner-navbar main-menu">
                          <ul class="pcoded-item pcoded-left-item">
                              <?php
                                for ($start = 0; $start < count($menu[0]); $start++) {
                                    if ($judul == $menu[0][$start]) {
                                        echo  '<li class="active">';
                                    } else {
                                        echo  '<li class="">';
                                    };
                                    echo '
                                    <a href="' . base_url($menu[2][$start]) . '">
                                        <span class="pcoded-micon"><i class="' . $menu[1][$start] . '"></i></span>
                                        <span class="pcoded-mtext">' . $menu[0][$start] . '</span>
                                    </a>
                                </li>
                                    ';
                                };
                                ?>


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