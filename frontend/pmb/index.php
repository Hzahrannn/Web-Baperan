<?php
include "../koneksi.php";
require "../function.php";
session_start();
if (!isset($_SESSION['nim'])){
header ("location:../landing");
}
$data = mysqli_fetch_array(data($_GET));
if ($data['dinas'] == 'pmb' || $data['dinas'] == 'INTI' ) {
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
        <link rel="shortcut icon" href="../assets/images/icon.png">

        <!-- Bootstrap Tables css -->
        <link href="../assets/libs/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/css/all.css" type="text/css" />

    </head>

    <body class=" " >

        <?php include "header.php"; ?>

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
                                    <li class="breadcrumb-item"><a href="#">PMB</a></li> 
                                    <li class="breadcrumb-item active">Minat Bakat</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Minat Bakat</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <h4 class="header-title">Data Minat & Bakat</h4>
                            <p class="sub-header">
                                Mahasiswa
                            </p>

                            <table data-toggle="table"
                                    data-search="true"
                                   data-show-columns="false"
                                   data-page-list="[10, 20, 30]"
                                   data-page-size="10"
                                   data-buttons-class="xs btn-light"
                                   data-pagination="true" class="table-bordered">
                                <thead class="thead-light">
                                <tr>
                                    <th data-field="no" data-switchable="false"data-sortable="true">No</th>
                                    <th data-field="nama" data-sortable="true">Nama</th>
                                    <th data-field="nim" data-sortable="true">NIM</th>
                                    <th data-field="angkatan" data-sortable="true">Angkatan</th>
                                    <th data-field="kontak" data-sortable="true">Kontak</th>
                                    <th data-field="seni" data-sortable="true">Seni</th>
                                    <th data-field="alat_musik" data-sortable="true">Alat Musik</th>
                                    <th data-field="olahraga" data-sortable="true">Olahraga</th>
                                     
                                </tr>
                                </thead>

                                <tbody>
                               <?php 

                                        $urut = (isset($_GET['id']) ? strtolower($_GET['urut']) : NULL); 

                                            if($urut){
                                                $sql = mysqli_query($koneksi, "SELECT * FROM minat WHERE status='$urut' ORDER BY id ASC");
                                            }else{
                                                $sql = mysqli_query($koneksi, "SELECT * FROM minat ORDER BY id ASC");
                                            }
                                            if(mysqli_num_rows($sql) == 0){
                                                echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
                                            }else{
                                                $no = 1;
                                                while($row = mysqli_fetch_assoc($sql)){
                                                    echo '
                                                    <tr>
                                                        <td>'.$no.'</td>
                                                        <td>'.$row['nama'].'</td>
                                                        <td>'.$row['nim'].'</td>
                                                        <td >'.$row['angkatan'].'</td>
                                                        <td >'.$row['kontak'].'</td>
                                                        <td >'.$row['seni'].'</td>
                                                        <td >'.$row['alat_musik'].'</td>
                                                        <td >'.$row['olahraga'].'</td>
                                                        
                                                    </tr>
                                                    ';
                                                    $no++;
                                                }
                                            }

                                     ?>
                                
                                
                                </tbody>
                            </table>
                                        
                                        
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
        <script src="../assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="../assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="../assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="../assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="../assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="../assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="../assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="../assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="../assets/js/pages/dashboard-1.init.js"></script>

        <!-- init js -->
        <script src="../assets/js/pages/flot.init.js"></script>

        <!-- App js-->
        <script src="../assets/js/app.min.js"></script>

        <!-- Footable js -->
        <script src="../assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="../assets/js/pages/foo-tables.init.js"></script>
        <!-- Bootstrap Tables js -->
        <script src="../assets/libs/bootstrap-table/bootstrap-table.min.js"></script>

        <!-- Init js -->
        <script src="../assets/js/pages/bootstrap-tables.init.js"></script>
        
    </body>
    
</html>