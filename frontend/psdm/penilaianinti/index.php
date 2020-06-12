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
        <link rel="shortcut icon" href="../../assets/images/icon.png">
        
        <!-- Plugins css -->
        <link href="../../assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
        <!-- Footable css -->
        <link href="../../assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item active">Penilaian</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Penilaian</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                

                <div class="row">
                    <div class="col-xl-12" >
                        <div class="card-box">

                            <center><b><font size="4">
                                DINAS PENGEMBANGAN SUMBER DAYA MAHASISWA<br>
                                HIMPUNAN MAHASISWA SISTEM INFORMASI<br>
                                PERIODE 2019/2020</font><br><br>
                            </b></center>
                            <form action="list.php" method="POST">
                                <table class="table" border="0">
                                  <tr border="0">
                                    <td width="10%">Pilih Dinas</td>
                                    <td width="40%">
                                        <select class="form-control" name="dinas">
                                            <option selected disabled hidden>Pilih Dinas</option> 
                                            <option value="PSDMINTI">Dinas PSDM</option>
                                        </select>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td width="100"></td>
                                        <td><input type="submit" class="form-control" value="Cari Data" name="submit"></td>
                                    </tr>
                                 </table>
                            </form> <br><br><br><br><br>
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
        
    </body>
    
</html>