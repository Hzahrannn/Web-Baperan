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
if ($data['dinas'] == 'psdm' || $data['dinas'] == 'PSDINTI') {
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

        if ($_POST['proker'] == 'mengabdi' && $data['nim'] == '09031281823048' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002')  {
        }
        elseif ($_POST['proker'] == 'makrab' && $data['nim'] == '09031381722095' ||  $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        elseif ($_POST['proker'] == 'elink' && $data['nim'] == '09031281823052' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        elseif ($_POST['proker'] == 'pweb2' && $data['nim'] == '09031181823016' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        elseif ($_POST['proker'] == 'baksos' && $data['nim'] == '09031381823075' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        elseif ($_POST['proker'] == 'bukber' && $data['nim'] == '09031381823075' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        elseif ($_POST['proker'] == 'kunker' && $data['nim'] == '09031181823131' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        elseif ($_POST['proker'] == 'sigames' && $data['nim'] == '09031281823130' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        elseif ($_POST['proker'] == 'forkasi' && $data['nim'] == '09031281823045' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        elseif ($_POST['proker'] == 'inagurasi' && $data['nim'] == '09031181823001' || $data['nim'] == '09031381722095' || $data['nim'] == '09031181722082' || $data['nim'] == '09031281722032' || $data['nim'] == '09031181722002') {
        }
        
        else {
           
        echo "<script>
                    Swal.fire('Akses Gagal !', 'Silahkan Pilih Proker yang Sesuai.', 'error').then(function(){
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
                                $proker = strtoupper($_POST['proker']);
                            ?>
                             <h3 class=" ">Panitia Proker <b><?php echo $proker; ?></b></h3>
                             <p class=" ">
                                Kembali ke pemilihan Proker :  <code> <a href="index.php">KLIK DISINI</a> </code> 
                            </p>
                             <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#tambahdata" ><i class=" mdi mdi-plus-box "></i><font color="white"> Tambah Data Panitia </font></button>  <br><br>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="thead-light">
                                    <tr> 
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Proker</th> 
                                        <th>Sebagai</th>
                                        <th>Keterangan</th>
                                        <th>Penilaian</th>  
                                        <th><center>Pilihan</center></th>
                                    </tr>
                                    </thead>

                                    <?php

                                        include '../../koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($koneksi,"SELECT * FROM absensi where proker LIKE '%".$proker."%'");
                                        while($d = mysqli_fetch_array($data)){
                                    ?>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['proker']; ?></td>
                                        <td><?php echo $d['sebagai']; ?></td>
                                        <td><?php echo $d['keterangan']; ?></td>
                                        <td><?php echo $d['penilaian']; ?></td> 
                                        <!--<td><center><a class="ladda-button ladda-button-demo btn btn-success"style="margin-bottom: 10px;" href="eval.php?core=penilaian&id=<?php echo $d['id']; ?>" role="button" data-style="zoom-in">Penilaian</a> <a class="ladda-button ladda-button-demo btn btn-success" style="margin-bottom: 10px;" href="raport.php?core=penilaian&id=<?php echo $d['id']; ?>" role="button" data-style="zoom-in">Raport</a></center></td>-->

                                        <td><center><a href="#" type="button" class="ladda-button ladda-button-demo btn btn-success" id="tombol1" data-toggle="modal" data-target="#editdata<?php echo $d['id'];?> " data-style="zoom-in" > Ubah</a></center></td>
                                    </tr>
                            <!-- Modal Start -->
                            <div id="editdata<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Data</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="edit.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label" >Nama :</label>
                                                        <input type="text" class="form-control" id="field-1" name="nama" value="<?php echo $d['nama']; ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="kategori" >Proker :</label>
                                                        <select id="kategori" name="proker" class="form-control" required="">
                                                            <option value="">Pilih</option>

                                                            <?php if ($_SESSION['nim']=='09031181823016') {  ?>
                                                            <option value="PWEB2" <?php if($d['proker'] == 'PWEB2'){ echo 'selected'; } ?>>PWEB 2</option>

                                                            <?php } if ($_SESSION['nim']=='09031281823052') { ?> 
                                                            <option value="ELINK" <?php if($d['proker'] == 'ELINK'){ echo 'selected'; } ?>>E-LINK</option>

                                                            <?php } if ($_SESSION['nim']=='09031381722095') { ?>
                                                            <option value="MAKRAB" <?php if($d['proker'] == 'MAKRAB'){ echo 'selected'; } ?>>MAKRAB</option>

                                                            <?php } if ($_SESSION['nim']=='09031281823048') { ?> 
                                                            <option value="MENGABDI" <?php if($d['proker'] == 'MENGABDI'){ echo 'selected'; } ?>> HIMSI MENGABDI</option>

                                                            <?php } if ($_SESSION['nim']=='09031381823075') { ?>

                                                            <option value="BAKSOS" <?php if($d['proker'] == 'BAKSOS'){ echo 'selected'; } ?>>BAKSOS</option>

                                                            <?php } if ($_SESSION['nim']=='09031381823075') { ?>

                                                            <option value="BUKBER" <?php if($d['proker'] == 'BUKBER'){ echo 'selected'; } ?>>BUKBER</option>

                                                            <?php } if ($_SESSION['nim']=='09031281823045') { ?>

                                                            <option value="FORKASI" <?php if($d['proker'] == 'FORKASI'){ echo 'selected'; } ?>>FORKASI</option>

                                                            <?php } if ($_SESSION['nim']=='09031181823001') { ?>

                                                            <option value="INAGURASI" <?php if($d['proker'] == 'INAGURASI'){ echo 'selected'; } ?>>INAGURASI</option>
                                                           <?php }  ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">Sebagai :</label>
                                                        <input type="text" class="form-control" name="sebagai" id="field-3" value="<?php echo $d['sebagai']; ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="kategori" >Keterangan :</label>
                                                        <select id="kategori" name="keterangan" class="form-control" required="">
                                                            <option value="">Pilih</option>
                                                            <option value="Sakit" <?php if($d['keterangan'] == 'sakit'){ echo 'selected'; } ?>>Sakit</option>
                                                            <option value="Izin" <?php if($d['keterangan'] == 'izin'){ echo 'selected'; } ?>>Izin</option>
                                                            <option value="Tanpa Keterangan" <?php if($d['keterangan'] == 'Tanpa Keterangan'){ echo 'selected'; } ?>>Tanpa Keterangan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-4" class="control-label">Penilaian :</label>
                                                        <input type="text" class="form-control" id="field-4" name="penilaian" value="<?php echo $d['penilaian']; ?>" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>

                             <div id="tambahdata" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Tambah Data</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <form action="tambah.php" method="POST">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label" >Nama :</label>
                                                        <input type="text" class="form-control" id="field-1" name="nama" placeholder="Nama" required="">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">Sebagai :</label>
                                                        <input type="text" class="form-control" name="sebagai" id="field-3" placeholder="Sebagai" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="kategori" >Proker :</label>
                                                        <select id="kategori" name="proker" class="form-control" required="">
                                                            <option value="">Pilih</option>

                                                            <?php if ($_SESSION['nim']=='09031181823016') {  ?>
                                                            <option value="PWEB2">PWEB2</option>

                                                            <?php } if ($_SESSION['nim']=='09031281823052') { ?> 
                                                            <option value="ELINK">E-LINK</option>

                                                            <?php } if ($_SESSION['nim']=='09031381722095') { ?>
                                                            <option value="MAKRAB">MAKRAB</option>

                                                            <?php } if ($_SESSION['nim']=='09031281823048') { ?> 
                                                            <option value="MENGABDI"> HIMSI MENGABDI</option>

                                                            <?php } if ($_SESSION['nim']=='09031381823075') { ?>

                                                            <option value="BAKSOS">BAKSOS</option>

                                                            <?php } if ($_SESSION['nim']=='09031381823075') { ?>

                                                            <option value="BUKBER">BUKBER</option>

                                                            <?php } if ($_SESSION['nim']=='09031281823045') { ?>

                                                            <option value="FORKASI">FORKASI</option>

                                                            <?php } if ($_SESSION['nim']=='09031181823001') { ?>

                                                            <option value="INAGURASI">INAGURASI</option>
                                                           <?php }  ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Tambah Panitia</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>

                            <!-- Modal End -->
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