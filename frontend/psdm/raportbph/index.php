<?php
include "../../koneksi.php";
require "../../function.php";
session_start();
if (!isset($_SESSION['nim'])){
header ("location:../../landing");
}

$data = mysqli_fetch_array(data($_GET));
if ( $data['dinas'] == 'INTI') {
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
        <link href="../../assets/libs/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../assets/css/all.css" type="text/css" />

    </head>

    <body class=" " >

        <?php include "../header.php"; ?>

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
                                    <li class="breadcrumb-item"><a href="#">INTI</a></li> 
                                    <li class="breadcrumb-item active">Raport</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Raport BPH</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <h4 class="header-title">Data Raport </h4>
                            <p class="sub-header">
                                HIMSI UNSRI
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
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Sebagai</th> 
                                        <th>3 BULAN</th>
                                        <th>6 BULAN</th>
                                        <th>Akhir</th> 
                                        <th><center>Pilihan</center></th>
                                    </tr>
                                </thead>

                                <tbody> 
                               	<?php  
                               	$no = 1;
                                $data = mysqli_query($koneksi,"SELECT * FROM user"); 
                                while($d = mysqli_fetch_array($data)){
                                    ?>

                              		<tr>
                                        <td scope="row"><?php echo $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['level']; ?></td>
                                        <td>
                                            <?php 
                                                $rata1 = ($d["n1b3"] + $d["n2b3"]+ $d["n3b3"] + $d["n4b3"] + $d["n5b3"]+ $d["n6b3"] + $d["n7b3"])/7;
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
                                        </td>
                                        <td>
                                            <?php 
                                                $rata2 = ($d["n1b6"] + $d["n2b6"]+ $d["n3b6"] + $d["n4b6"] + $d["n5b6"]+ $d["n6b6"] + $d["n7b6"])/7;
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
                                                ?>
                                        </td>
                                        <td>
                                            <?php 
                                                $rata3 = ($d["n1b9"] + $d["n2b9"]+ $d["n3b9"] + $d["n4b9"] + $d["n5b9"]+ $d["n6b9"] + $d["n7b9"])/7;
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
                                                ?>
                                        </td> 
                                        <td><center> <a class="ladda-button ladda-button-demo btn btn-success" style="margin-bottom: 10px;" href="raport.php?nim=<?php echo $d['nim']; ?>" role="button" data-style="zoom-in">Raport</a></center></td>
                                    </tr>
                                    <?php } ?>




                                   <!-- <td><span class="badge badge-dark">Disabled</span></td>-->
                                
                                
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
        <!-- Bootstrap Tables js -->
        <script src="../../assets/libs/bootstrap-table/bootstrap-table.min.js"></script>

        <!-- Init js -->
        <script src="../../assets/js/pages/bootstrap-tables.init.js"></script>


        
    </body>
    
</html>