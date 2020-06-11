 
<!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../assets/images/users/user-1.png" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    <?php echo $data['nama']; ?> <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome ! </h6>
                                </div>
    
                                <!-- item-->
                                <a href="../profile.php?nim=<?php echo $data['nim']; ?>" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Profile</span>
                                </a>  
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="../logout.php" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
                    </ul>
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="../index.php" class="logo text-center">
                            <span class="logo-lg">
                                <img src="../assets/images/himsiunsri.png" alt="" width="130">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                            <span class="logo-sm">
                                <!-- <span class="logo-sm-text-dark">U</span> -->
                                <img src="../assets/images/himsiunsri.png" alt="" width="100">
                            </span>
                        </a>
                    </div>  </div>
                        </li>
                    </ul>
                </div> <!-- end container-fluid-->
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="../index.php">
                                    <i class="fe-airplay"></i>Dashboards </a>                               
                            </li>

                            <?php 
                            if ($data['dinas'] == 'INTI') { ?>
                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-gitlab"></i>INTI <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="../psdm/penilaianinti">Penilaian</a>
                                    </li>
                                    <li>
                                        <a href="../psdm/raportbph"> Raport BPH</a>
                                    </li> 
                                     <li>
                                        <a href="../psdm/absensinti">Absensi Proker</a>
                                    </li> 
                                </ul>
                            </li>

                            <?php }
                            if ($data['dinas'] == 'psdm') {?>

                            <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-grid"></i>PSDM <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="../psdm/penilaian">Penilaian</a>
                                    </li> 
                                    <li>
                                        <a href="../psdm/absensi">Absensi Proker</a>
                                    </li> 
                                </ul>
                            </li>

                            <?php }
                                if ($data['dinas'] == 'kastrad' || $data['dinas'] == 'INTI') { ?>

                            <li class="has-submenu">
                                <a href="#"> <i class="fe-briefcase"></i>Kastrad <div class="arrow-down"></div></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li>
                                                <a href="../kastrad">Laporan Aspirasi</a>
                                            </li>
                                             
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>

                            <?php } 
                                if ($data['dinas'] == 'kestari' || $data['dinas'] == 'INTI') { ?>

                            <li class="has-submenu">
                                <a href="#"> <i class="fe-cpu"></i>Kestari <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="kestari">Arsip Surat</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <?php }
                            if ($data['dinas'] == 'pmb' || $data['dinas'] == 'INTI') { ?>

                            <li class="has-submenu">
                                <a href="#"> <i class="fe-award "></i>PMB <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="../pmb">Data Minat & Bakat</a>
                                    </li> 
                                    
                                </ul>
                            </li>

                            <?php } ?>

                            <li class="has-submenu">
                                <a href="#"> <i class="fe-bar-chart-2  "></i>Raport <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="../psdm/penilaian/raport.php?core=penilaian&nim=<?php echo $data['nim']; ?>">Hasil Penilaian</a>
                                    </li> 
                                    
                                </ul>
                            </li>

                           <!-- <li class="has-submenu">
                                <a href="#">
                                    <i class="fe-layers"></i>Components <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li class="has-submenu">
                                        <a href="#">Forms <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="forms-elements.html">General Elements</a>
                                            </li>
                                            <li>
                                                <a href="forms-advanced.html">Advanced</a>
                                            </li>
                                            <li>
                                                <a href="forms-validation.html">Validation</a>
                                            </li>
                                            <li>
                                                <a href="forms-pickers.html">Pickers</a>
                                            </li>
                                            <li>
                                                <a href="forms-wizard.html">Wizard</a>
                                            </li>
                                            <li>
                                                <a href="forms-masks.html">Masks</a>
                                            </li>
                                            <li>
                                                <a href="forms-summernote.html">Summernote</a>
                                            </li>
                                            <li>
                                                <a href="forms-quilljs.html">Quilljs Editor</a>
                                            </li>
                                            <li>
                                                <a href="forms-file-uploads.html">File Uploads</a>
                                            </li>
                                            <li>
                                                <a href="forms-x-editable.html">X Editable</a>
                                            </li>
                                            <li>
                                                <a href="forms-image-crop.html">Image Crop</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Tables <div class="arrow-down"></div></a>
                                        <ul class="submenu">
                                            <li>
                                                <a href="tables-basic.html">Basic Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-datatables.html">Data Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-editable.html">Editable Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-responsive.html">Responsive Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-footables.html">FooTable</a>
                                            </li>
                                            <li>
                                                <a href="tables-bootstrap.html">Bootstrap Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                            </li>
                                            <li>
                                                <a href="tables-jsgrid.html">JsGrid Tables</a>
                                            </li>
                                        </ul>
                                    </li>
                                    ..........................
                                </ul>
                            </li> -->

                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->
