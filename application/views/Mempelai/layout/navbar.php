
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