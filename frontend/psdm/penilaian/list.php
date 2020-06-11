<?php
session_start();
include "../../koneksi.php";
require "../../function.php";
if (!isset($_SESSION['nim'])){
header ("location:../../landing");
}
if (!isset($_POST['submit'])) {
    
    header("location: index.php");
}
$data = mysqli_fetch_array(data($_GET));
if ($data['dinas'] == 'psdm' || $data['dinas'] == 'PSDMINTI') {
    echo "";
}
else {
   echo "<script>alert('Anda tidak memiliki akses ke halaman ini !');
            top.location='../index.php';</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Dashboard - Panel BPH HIMSI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Panel BPH HIMSI UNSRI 2019." name="Akademik" />
        <meta content="AdminPanel" name="PenulisCode" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/images/icon.png">
        
        <!-- Plugins css -->
        <link href="../../assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <!-- Footable css -->
        <link href="../../assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

        <!-- Loading button css -->
        <link href="../../assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../assets/css/all.css" type="text/css" />

    </head>

    <body class="" >
        <script src="../../assets/js/sweetalert2.js"></script>
 
        <?php
        if 
            ($_POST['dinas'] == 'akademik' && $data['nim'] == '09031281823048' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
            }

            elseif 
                ($_POST['dinas'] == 'psdm' && $data['nim'] == '09031281924150' ||  $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                }
            elseif 
                ($_POST['dinas'] == 'INTI' && $data['nim'] == '09031381722095' ||  $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                } 
            elseif 
                ($_POST['dinas'] == 'bistra' && $data['nim'] == '09031281823052' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                }
            elseif 
                ($_POST['dinas'] == 'kestari' && $data['nim'] == '09031181823016' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                }
            elseif 
                ($_POST['dinas'] == 'olahraga' && $data['nim'] == '09031381823075' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                }
            elseif 
                ($_POST['dinas'] == 'seni' && $data['nim'] == '09031181823131' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                }
            elseif 
                ($_POST['dinas'] == 'kastrad' && $data['nim'] == '09031281823130' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                }
            elseif 
                ($_POST['dinas'] == 'mulmed' && $data['nim'] == '09031281823045' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                }
            elseif 
                ($_POST['dinas'] == 'humas' && $data['nim'] == '09031181823001' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
                }
        
        else {
           
        echo "<script>
                    Swal.fire('Akses Gagal !', 'Silahkan Pilih Dinas yang Sesuai.', 'error').then(function(){
                        setTimeout(document.location.href = 'index.php', 100);
                        })
                        </script>";
        }


         include "../header.php"; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid"> 

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li> 
                                    <li class="breadcrumb-item"><a href="#">PSDM</a></li> 
                                    <li class="breadcrumb-item active">Penilaian</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Penilaian</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <?php
                                
                                $dinas = $_POST['dinas'];
                            ?>
                             <h3 class=" ">Dinas <b><?php echo strtoupper($dinas); ?></b></h3>
                             <p class=" ">
                                Kembali ke pemilihan Dinas :  <code> <a href="index.php">KLIK DISINI</a> </code> 
                            </p>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Sebagai</th> 
                                        <th>3 BULAN</th>
                                        <th>6 BULAN</th>
                                        <th>Akhir</th> 
                                        <th><center>Pilihan</center></th>
                                    </tr>
                                    </thead>

                                    <?php

                                        include '../../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi,"SELECT * FROM user where dinas LIKE '%".$dinas."%'");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['level']; ?></td>
                                        <td>
                                            <?php 
                                                $rata1 = ($d["n1b3"] + $d["n2b3"]+ $d["n3b3"] + $d["n4b3"] + $d["n5b3"]+ $d["n6b3"] + $d["n7b3"])/7;
                                                echo round($rata1, 2);

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
                                        </td>
                                        <td>
                                            <?php 
                                                $rata2 = ($d["n1b6"] + $d["n2b6"]+ $d["n3b6"] + $d["n4b6"] + $d["n5b6"]+ $d["n6b6"] + $d["n7b6"])/7;
                                                            echo round($rata2,2); 
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
                                                ?>
                                        </td>
                                        <td>
                                            <?php 
                                                $rata3 = ($d["n1b9"] + $d["n2b9"]+ $d["n3b9"] + $d["n4b9"] + $d["n5b9"]+ $d["n6b9"] + $d["n7b9"])/7;
                                                            echo round($rata3,2); 
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
                                                ?>
                                        </td> 
                                        <td><center><a class="ladda-button ladda-button-demo btn btn-success"style="margin-bottom: 10px;" href="eval.php?core=penilaian&id=<?php echo $d['id']; ?>" role="button" data-style="zoom-in">Penilaian</a> <a class="ladda-button ladda-button-demo btn btn-success" style="margin-bottom: 10px;" href="../raportbph/raport.php?nim=<?php echo $d['nim']; ?>" role="button" data-style="zoom-in">Raport</a></center></td>
                                    </tr>
                                    
                                    </tbody>
        <?php } ?>
                                </table>
                            </div>

                        </div> <!-- end card-box -->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

             
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                         &copy; Dinas Akademik - <a href="http://himsiunsri.org">HIMSI UNSRI</a>  
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="../../assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="../../assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="../../assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="../../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="../../assets/js/pages/dashboard-1.init.js"></script>

        <!-- init js -->
        <script src="../../assets/js/pages/flot.init.js"></script>

        <!-- App js-->
        <script src="../../assets/js/app.min.js"></script>

        <!-- Footable js -->
        <script src="../../assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="../../assets/js/pages/foo-tables.init.js"></script>
        <!-- Loading buttons js -->
        <script src="../../assets/libs/ladda/spin.js"></script>
        <script src="../../assets/libs/ladda/ladda.js"></script>
        <!-- Buttons init js-->
        <script src="../../assets/js/pages/loading-btn.init.js"></script>        
    </body>
    
</html>