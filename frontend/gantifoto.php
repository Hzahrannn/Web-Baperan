<?php
ob_start();
include "koneksi.php";
require "function.php";
session_start();
if (!isset($_SESSION['nim'])){
    header ("location:landing");
}
$data = mysqli_fetch_array(data($_GET));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Dashboard | BPH - HIMSI 2020 </title>
    <meta property="og:title" content="Dashboard">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/icon.png">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="assets/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="assets/stylesheets/custom.css">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <!-- .app-header -->
      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->
            <a href="index.php"><img src="assets/images/himsiunsri.png" height="42"></a>
          </div>
          <!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <div class="dropdown d-none d-md-flex">
                <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="assets/images/avatars/profile.jpg" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?=$data['nama'];?></span> <span class="account-description"><?=$data['level'];?></span></span></button> <!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                  <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"><?=$data['nama'];?></h6><a class="dropdown-item" href="profile.php"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="logout.php"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->

      </header><!-- /.app-header -->
      <!-- Asside content -->
      <?php include "header.php"; ?>
      <!-- Akhir asside content-->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-cover -->
            <header class="page-cover">
              <div class="text-center">
                <a href="assets/images/<?=$data['gambar'];?>" class="user-avatar user-avatar-xl"><img src="assets/images/<?=$data['gambar'];?>"></a>
                <h2 class="h4 mt-2 mb-0"><?=$data['nama'];?></h2>
                <div class="my-1">
                  <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
                </div>
                <p class="text-muted"><?=$data['dinas'];?></p>
                <p><?=$data['level'];?></p>
              </div><!-- .cover-controls -->
            </header><!-- /.page-cover -->


            <nav class="page-navs">
              <!-- .nav-scroller -->
              <div class="nav-scroller">
                <!-- .nav -->
                <div class="nav nav-center nav-tabs">
                  <a class="nav-link" href="profile.php">Edit Profile</a>
                  <a class="nav-link active" href="#">Ganti Password</a>
                </div><!-- /.nav -->
              </div><!-- /.nav-scroller -->
            </nav><!-- /.page-navs -->


            <!-- .page-section -->
            <div class="page-inner">
              <div class="page-section">
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-4">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Your Details </h6>
                      <div class="card-body">
                      <img src="assets/images/users/user-1.png" class="rounded-circle avatar-lg img-thumbnail"
                                alt="profile-image">

                            <h4 class="mb-0"><?php echo $data['nama']; ?></h4>
                            <p class="text-muted"><?= $data['nim']; ?></p>

                           <!-- <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                            <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>-->

                            <div class="btn btn-success btn-xs waves-effect mb-2 waves-light">Dinas <?= $data['dinas']; ?> </div>
                            <div class="btn btn-info btn-xs waves-effect mb-2 waves-light"><?= $data['level']; ?></div>

                            <div class="text-left mt-3">
                                
                                <p class="text-muted mb-2 font-13"><strong>NIM :</strong> <span class="ml-1"><?= $data['nim']; ?></span></p>

                                <p class="text-muted mb-2 font-13"><strong>Nama :</strong><span class="ml-1"><?= $data['nama']; ?></span></p>

                                <p class="text-muted mb-2 font-13"><strong>Jenis Kelamin :</strong> <span class="ml-1 "><?= $data['jk']; ?></span></p>

                                <p class="text-muted mb-1 font-13"><strong>No HP :</strong> <span class="ml-1"><?= $data['no']; ?></span></p>
                                <p class="text-muted mb-1 font-13"><strong>ID Line :</strong> <span class="ml-1"><?= $data['line']; ?></span></p>
                                <p class="text-muted mb-1 font-13"><strong>Dinas :</strong> <span class="ml-1"><?= $data['dinas']; ?></span></p>
                                <p class="text-muted mb-1 font-13"><strong>Sebagai :</strong> <span class="ml-1"><?= $data['level']; ?></span></p>
                            </div>
                      </div>
                    </div><!-- /.card -->
                  </div><!-- /grid column -->
                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header">Profile </h6><!-- .card-body -->
                      <div class="card-body">
                        <!-- form -->
                        <form method="post">

                          <div class="form-row">
                            <div class="col-md-4 mb-3">
                              <label for="dinas">Dinas</label>
                              <input type="text" name="dinas" class="form-control" disabled value="<?=$data['dinas'];?>">
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="level">Sebagai</label>
                              <input type="text" name="level" class="form-control" disabled value="<?=$data['level'];?>">
                            </div>
                          </div>
                          <!-- form row -->
                          <div class="form-row">
                            <div class="col-md-8 mb-3">
                              <label for="password">Password Lama</label>
                              <input type="password" name="password" class="form-control">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-4 mb-3">
                              <label for="password1">Password Baru</label>
                              <input type="password" name="password1" class="form-control">
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="password2">Konfirmasi Password</label>
                              <input type="password" name="password2" class="form-control">
                            </div>
                          </div>
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <button type="submit" class="btn btn-primary ml-auto" name="submit">Update Profile</button>
                          </div><!-- /.form-actions -->
                        </form><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                


                  </div><!-- /grid column -->
                </div><!-- /grid row -->
              </div><!-- /.page-section -->
            </div>


          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer">
          <div class="copyright"> Copyright &copy; 2020. All right reserved. </div>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper.js/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="assets/vendor/pace-progress/pace.min.js"></script>
    <script src="assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
    <script src="assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/vendor/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/vendor/chart.js/Chart.min.js"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>
  </body>
</html>