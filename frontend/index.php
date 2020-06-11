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
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> Beni Arisandi </h6><a class="dropdown-item" href="profile.php"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="logout.php"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->

      </header><!-- /.app-header -->

      <!-- App asside -->
      <?php include "header.php"; ?>
      <!-- Akhir Asside -->

      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <div class="d-flex flex-column flex-md-row">
                  <p class="lead">
                    <span class="font-weight-bold">Hi, <?=$data['nama'];?>.</span> <span class="d-block text-muted">Welcome to Dashboard</span>
                  </p>
                </div>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- metric row -->
                  <div class="metric-row">
                    <div class="col-lg-12">
                      <div class="metric-row metric-flush">
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-teams.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label">Anggota BPH</h2>
                            <p class="metric-value h3">
                              <sub><i class="oi oi-people"></i></sub> <span class="value"><?php totalanggota($_POST);?></span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-projects.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label">File Surat</h2>
                            <p class="metric-value h3">
                              <sub><i class="fa fa-envelope"></i></sub> <span class="value"><?php totalsurat($_POST); ?></span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                        <!-- metric column -->
                        <div class="col">
                          <!-- .metric -->
                          <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                            <h2 class="metric-label">Laporan Aspirasi</h2>
                            <p class="metric-value h3">
                              <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?php totalaspirasi($_POST); ?></span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->
                      </div>
                    </div><!-- metric column -->
                  </div><!-- /metric row -->
                </div><!-- /.section-block -->
                


                <!-- Content -->

                <div class="row">
                    <?php 
                    include "psdm/penilaian/db.php";
                    ?>
                    
                <?php
                    $id=$_SESSION["nim"];
                    $sql = "SELECT * FROM user WHERE nim LIKE '%$id%'";
                    $result = $conn->query($sql);
                    $cek = $result->fetch_array();
                    ?>

                    <div class="col-xl-12">
                        <div class="card-box">
                            <center><b> 
                            <h4 class="panel-title">&nbsp;&nbsp;<b>RAPORT HASIL EVALUASI</b></h4><br>
                            </b><br></center>
                            <center>
                            <table class="table" border="0">
                                <tr>
                                    <td width="30%">Nama </td>
                                    <td width="1%">:</td>
                                    <td width="150"><?php echo $cek["nama"]; ?></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><?php echo $cek["nim"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Dinas</td>
                                    <td>:</td>
                                    <td><?php echo $cek['dinas']; ?></td>
                                </tr>
                            </table>
                            <center>
                            <div class="table-responsive">
                            <table class="table m-0">
                                <tr>
                                    <center><b>GRAFIK KEMAJUAN</b></center>
                            <div style="width: 500;margin:  ;">
                                    <canvas id="myChart"></canvas>
                                </tr>
                            </div>
                            </tr>
                            </table>
                                    <br/>
                                    <br/>
                            <br>
                            <center><b>TABEL PENILAIAN</b></center><br>

                                <div class="table-responsive">
                            <table class="table m-0">
                                <tr>
                                    <td><center><b>NRT 3 BULAN</b></center></td>
                                    <td><center><b>NRT 6 BULAN</b></center></td>
                                    <td><center><b>NRT Akhir</b></center></td>
                                    <td><center><b>NRT AKHIR</b></center> </td>
                                </tr>
                                <tr>
                                    <td><center>
                                        <?php 
                                            $rata1 = ($cek["n1b3"] + $cek["n2b3"]+ $cek["n3b3"] + $cek["n4b3"] + $cek["n5b3"]+ $cek["n6b3"] + $cek["n7b3"])/7;
                                                         echo round($rata1, 0); 

                                                if ($rata1 >= 90) {
                                                    echo " (Amat Baik)";
                                                }
                                                elseif ($rata1 >= 80) {
                                                    echo " (Baik)";
                                                }
                                                elseif ($rata1 >= 70) {
                                                    echo " (Sedang)";
                                                }
                                                elseif ($rata1 >= 60) {
                                                    echo " (Cukup)";
                                                }
                                                elseif ($rata1 >= 50) {
                                                    echo " (Kurang)";
                                                }
                                                elseif ($rata1 >= 1) {
                                                    echo " (Tidak Aktif)";
                                                }
                                                ?>
                                                    
                                                </center></td>
                                    <td><center>
                                        <?php 
                                            $rata2 = ($cek["n1b6"] + $cek["n2b6"]+ $cek["n3b6"] + $cek["n4b6"] + $cek["n5b6"]+ $cek["n6b6"] + $cek["n7b6"])/7;
                                                        echo round($rata2,0); 
                                                if ($rata2 >= 90) {
                                                    echo " (Amat Baik)";
                                                }
                                                elseif ($rata2 >= 80) {
                                                    echo " (Baik)";
                                                }
                                                elseif ($rata2 >= 70) {
                                                    echo " (Sedang)";
                                                }
                                                elseif ($rata2 >= 60) {
                                                    echo " (Cukup)";
                                                }
                                                elseif ($rata2 >= 50) {
                                                    echo " (Kurang)";
                                                }
                                                elseif ($rata2 >= 1) {
                                                    echo " (Tidak Aktif)";
                                                }
                                                ?></center></td>
                                    <td><center>
                                        <?php 
                                            $rata3 = ($cek["n1b9"] + $cek["n2b9"]+ $cek["n3b9"] + $cek["n4b9"] + $cek["n5b9"]+ $cek["n6b9"] + $cek["n7b9"])/7;
                                                        echo round($rata3,0); 
                                                if ($rata3 >= 90) {
                                                    echo " (Amat Baik)";
                                                }
                                                elseif ($rata3 >= 80) {
                                                    echo " (Baik)";
                                                }
                                                elseif ($rata3 >= 70) {
                                                    echo " (Sedang)";
                                                }
                                                elseif ($rata3 >= 60) {
                                                    echo " (Cukup)";
                                                }
                                                elseif ($rata3 >= 50) {
                                                    echo " (Kurang)";
                                                }
                                                elseif ($rata3 >= 1) {
                                                    echo " (Tidak Aktif)";
                                                }
                                                ?></center></td>
                                    <td><center><b>
                                        <?php $nilaiakhir=($rata1+$rata2+$rata3)/3;
                                            echo round($nilaiakhir,0);?></b></center></td></center></td>
                                </tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                            </table>
                            </center><br>
                            <b><i><p style="text-align: center;">KETERANGAN : <br>
                            * NRT : Nilai Rata - Rata <br>
                            * Untuk melihat detail Penilaian silahkan pilih menu "Raport".</i></b></p>
                                    <script type="text/javascript" src="psdm/penilaian/chart/Chart.js"></script>
                                                <style type="text/css">
                                                    body{
                                                        font-family: ;
                                                    }
                                     </style>
                            <br> 
                        </div> <!-- end card-box -->
                    </div> <!-- end col-->
                </div>
                <!-- end row --> 














                <!-- Akhir Content -->



              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
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