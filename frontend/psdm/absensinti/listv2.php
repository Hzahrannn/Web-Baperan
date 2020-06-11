<?php
session_start();
include "../../koneksi.php";
require "../../function.php";
if (!isset($_SESSION['nim'])){
header ("location:../../landing");
}
$data = mysqli_fetch_array(data($_GET));
if ($data['dinas'] == 'psdm' || $data['dinas'] == 'INTI') {
    echo "";
}
else {
   echo "<script>alert('Anda tidak memiliki akses ke halaman ini !');
            top.location='../index.php';</script>";
}

if (!isset($_POST['submit'])) {
    
    header("location: index.php");
}

    
    $nim = $data["id"];

    $object = new absen();
    $object->dbconnect("localhost","root","","baperan");
    $tmp = $object->query("SELECT * FROM absensi WHERE id=$id");
    $mhs = $tmp[0];

    if(isset($_POST["submitt"])){

    if($object->edit_proker($_POST)>0){
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Tidak Berhasil Diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
    
}
    function multiexplode ($delimiters,$string) {

        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;
    }

    $proker = multiexplode([',','(',')'],$mhs["proker"]);
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
        <link rel="shortcut icon" href="../../assets/images/favicon.ico">
        
        <!-- Custom box css -->
        <link href="../../assets/libs/custombox/custombox.min.css" rel="stylesheet">

        <!-- Loading button css -->
        <link href="../../assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item"><a href="../../index.php">Home</a></li> 
                                    <li class="breadcrumb-item"><a href="#">PSDM</a></li> 
                                    <li class="breadcrumb-item active">Absensi Proker</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Absensi Proker</h4>
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
                             <h3 class=" ">Dinas <?php echo $dinas; ?></h3>
                             <p class=" ">
                                Kembali ke pemilihan Dinas :  <code> <a href="index.php">KLIK DISINI</a> </code> 
                            </p> 
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>  
                                        <th>Jabatan</th>
                                        <th>Proker</th>
                                        <th>Jumlah</th>
                                        <th>Pilihan</th> 
                                    </tr>
                                    </thead> 
                                        <?php
                                            $no = 1;
                                            $dataa = mysqli_query($koneksi,"select * from absensi_psdm where dinas='$dinas'");
                                            while($d = mysqli_fetch_array($dataa)){
                                        ?>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $d['nim']; ?></td>
                                        <td><?php echo $d['nama']; ?></td> 
                                        <td><?php echo $d['jabatan']; ?></td>
                                        <td><?php echo $d['proker']; ?></td>
                                        <td><center><?php echo $d['jumlah']; ?></center></td>
                                        <td><center><a href="edit.php?nim=<?php echo $d['nim'];?>" type="button" class="ladda-button ladda-button-demo btn btn-success"  data-style="zoom-in" > Ubah</a></center></td> 
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
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
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

        <!-- Modal-Effect -->
        <script src="assets/libs/custombox/custombox.min.js"></script>
        <!-- Loading buttons js -->
        <script src="../../assets/libs/ladda/spin.js"></script>
        <script src="../../assets/libs/ladda/ladda.js"></script>
        <!-- Buttons init js-->
        <script src="../../assets/js/pages/loading-btn.init.js"></script>
        <script type="text/javascript" src="rafid/js/jquery-3.3.1.min.js"></script>     
    </body>
    
</html>