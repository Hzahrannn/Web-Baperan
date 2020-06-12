      <!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name">Beni Arisandi</span> <span class="account-description">Marketing Manager</span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item has-active">
                  <a href="index.php" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
                <!-- .menu-item -->

                <?php 
                if ($data['dinas'] == 'INTI') { ?>

                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fas fa-rocket"></span> <span class="menu-text">INTI</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="psdm/penilaianinti/index.php" class="menu-link">Penilaian</a>
                    </li>
                    <li class="menu-item">
                      <a href="auth-comingsoon-v2.html" class="menu-link">Raport BPH</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <?php }?>


                <!-- Menu Item -->
                <?php
                            if ($data['dinas'] == 'psdm' || $data['dinas'] == 'PSDMINTI') { ?>
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fas fa-check-square"></span> <span class="menu-text">PSDM</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="user-profile.html" class="menu-link">Penilaian</a>
                    </li>
                  </ul><!-- /child menu -->
                </li>
                <?php } ?>
                <!-- /.menu-item -->
                
                <!-- .menu-item -->
                <?php 
                                if($data['dinas'] == 'kastrad' || $data['dinas'] == 'INTI') { ?>
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fas fa-cogs"></span> <span class="menu-text">Kastrad</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="user-profile.html" class="menu-link">Laporan Aspirasi</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <?php }?>
                <!-- .menu-item -->
                 <?php 
                                if ($data['dinas'] == 'kestari' || $data['dinas'] == 'INTI') { ?>
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fa fa-envelope"></span> <span class="menu-text">Kestari</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="layout-blank.html" class="menu-link">Arsip Surat</a>
                    </li>
                  </ul><!-- /child menu -->
                </li>
                <?php }?>
                <!-- /.menu-item -->
                <!-- .menu-item -->
                <?php  
                                if ($data['dinas'] == 'pmb' || $data['dinas'] == 'INTI') { ?>
                <li class="menu-item has-child">
                  <a href="landing-page.html" class="menu-link"><span class="menu-icon fa fa-star"></span> <span class="menu-text">PMB</span></a>
                  <ul class="menu">
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            Data Minat & Bakat
                        </a>                        
                    </li>
                  </ul>
                </li>
                <?php }?>
                <!-- /.menu-item -->
                <!-- .menu-header -->
                <!-- <li class="menu-header"></li>/.menu-header -->
                <hr>
                <!-- .menu-item -->
                <li class="menu-item has-child">
                  <a href="#" class="menu-link"><span class="menu-icon fa fa-book"></span> <span class="menu-text">Raport</span></a> <!-- child menu -->
                  <ul class="menu">
                    <li class="menu-item">
                      <a href="component-general.html" class="menu-link">Hasil Penilaian</a>
                    </li>
                  </ul><!-- /child menu -->
                </li><!-- /.menu-item -->
                <!-- .menu-item -->
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-2">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->