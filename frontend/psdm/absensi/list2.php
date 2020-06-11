<?php
session_start();
include "../../koneksi.php";
require "rafid/functions.php";
require "../../function.php";
if (!isset($_SESSION['nim'])){
header ("location:../../landing");
}
$data = mysqli_fetch_array(data($_GET));
if ($data['dinas'] == 'psdm') {
    echo "";
}
else {
   echo "<script>alert('Anda tidak memiliki akses ke halaman ini !');
            top.location='../index.php';</script>";
}

if (!isset($_POST['submit'])) {
    
    header("location: index.php");
}

    
    $nim = $data["nim"];

    $object = new absen();
    $object->dbconnect("localhost","root","","bph2");
    $tmp = $object->query("SELECT * FROM absensi_psdm WHERE nim=$nim");
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
                                        <th>Pilihan2</th>
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
                                        <!--<td><center><a class="ladda-button ladda-button-demo btn btn-success" href="#" role="button" data-style="zoom-in">Ubah</a></center></td>
                                        <td> <center><button type="button" class="ladda-button ladda-button-demo btn btn-success" data-toggle="modal" data-target="#con-close-modal" data-style="zoom-in">UBAH</button></center> </td> -->
                                        <td><center><a href="#" type="button" class="ladda-button ladda-button-demo btn btn-success" id="tombol1" data-toggle="modal" data-target="#con-close-modal<?php echo $d['nim'];?> " data-style="zoom-in" > Ubah</a></center></td>
                                        <td><center><a href="edit.php?nim=<?php echo $d['nim'];?>" type="button" class="ladda-button ladda-button-demo btn btn-success"  data-style="zoom-in" > Ubah</a></center></td>


                                    </tr>
                                    
                                    <!-- MODAL START -->            
                                <div id="con-close-modal<?php echo $d['nim'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Absensi Proker</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                               <!-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label">NIM</label>
                                                        <input type="text" class="form-control" name="nim" id="field-1" placeholder="John" value="<?php $d['nim']; ?>" >
                                                    </div>
                                                </div>-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <form action="" method="POST">
                                                        <label for="field-2" class="control-label">Nama</label>
                                                        <input type="text" class="form-control" id="field-2" value="<?php echo $d['nama']; ?> ">
                                                    </div>
                                                </div>
                                            </div>
                                          <!--  <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group"> <br>
                                                        <div class="checkbox form-check-inline">
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label for="inlineCheckbox1"> PWEB 2 </label>
                                                        </div>
                                                        <div class="checkbox checkbox-success form-check-inline">
                                                            <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                            <label for="inlineCheckbox2"> E-LINK </label>
                                                        </div>
                                                        <div class="checkbox checkbox-pink form-check-inline">
                                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                            <label for="inlineCheckbox3"> FORKASI </label>
                                                        </div>
                                                        <div class="checkbox checkbox-info form-check-inline">
                                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                            <label for="inlineCheckbox"> BAKTI SOSIAL </label><br>
                                                        </div>
                                                        <div class="checkbox form-check-inline">
                                                            <input type="checkbox" id="inlineCheckbox1" value="option1">
                                                            <label for="inlineCheckbox"> BUKBER </label>
                                                        </div>
                                                        <div class="checkbox checkbox-success form-check-inline">
                                                            <input type="checkbox" id="inlineCheckbox2" value="option1" >
                                                            <label for="inlineCheckbox"> SHOCKER </label>
                                                        </div>
                                                        <div class="checkbox checkbox-pink form-check-inline">
                                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                            <label for="inlineCheckbox"> SI GAMES </label>
                                                        </div>
                                                        <div class="checkbox checkbox-info form-check-inline">
                                                            <input type="checkbox" id="inlineCheckbox3" value="option1">
                                                            <label for="inlineCheckbox"> SI FEST </label><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Pweb" name="check_list[]" <?php if(in_array("Pweb",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > PWEB </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="pweb" value="<?php if(in_array("Pweb",$proker)) { $index = array_search("Pweb", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="E-Link" name="check_list[]" <?php if(in_array("E-Link",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > E-LINK </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="e_link" value="<?php if(in_array("E-Link",$proker)) { $index = array_search("E-Link", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Si Fest" name="check_list[]" <?php if(in_array("Si Fest",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > SI FEST </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="si_fest" value="<?php if(in_array("Si Fest",$proker)) { $index = array_search("Si Fest", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Bukber" name="check_list[]" <?php if(in_array("Bukber",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > BUKBER </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="bukber" value="<?php if(in_array("Bukber",$proker)) { $index = array_search("Bukber", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Baksos" name="check_list[]" <?php if(in_array("Baksos",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > BAKSOS </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="baksos" value="<?php if(in_array("Baksos",$proker)) { $index = array_search("Baksos", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Shocker" name="check_list[]" <?php if(in_array("Shocker",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > SHOCKER </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="shocker" value="<?php if(in_array("Shocker",$proker)) { $index = array_search("Shocker", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Si Games" name="check_list[]" <?php if(in_array("Si Games",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > SI GAMES </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="si_games" value="<?php if(in_array("Si Games",$proker)) { $index = array_search("Si Games", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Foraksi" name="check_list[]" <?php if(in_array("Foraksi",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > FORAKSI </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="foraksi" value="<?php if(in_array("Foraksi",$proker)) { $index = array_search("Foraksi", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Rakorwil" name="check_list[]" <?php if(in_array("Rakorwil",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > RAKORWIL </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="rakorwil" value="<?php if(in_array("Rakorwil",$proker)) { $index = array_search("Rakorwil", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="Mubes" name="check_list[]" <?php if(in_array("Mubes",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > MUBES </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="mubes" value="<?php if(in_array("Mubes",$proker)) { $index = array_search("Mubes", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="HIMSI Mengabdi" name="check_list[]" <?php if(in_array("HIMSI Mengabdi",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > HIMSI MENGABDI </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="himsi_mengabdi" value="<?php if(in_array("HIMSI Mengabdi",$proker)) { $index = array_search("HIMSI Mengabdi", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="checkbox checkbox-circle form-check-inline">
                        
                                                            <input type="checkbox" id="inlineCheckbox1" value="HIMSI Goes To Campus" name="check_list[]" <?php if(in_array("HIMSI Goes To Campus",$proker)) { echo 'checked';} ?>>
                                                            <label for="inlineCheckbox1" style="margin-bottom: 10px; margin-left: 5px" > HIMSI GOES TO CAMPUS </label>
                                                        </div>
                                                         
                                                        <input type="text" class="form-control" id="field-4" placeholder="Sebagai.." name="himsi_goes_to_campus" value="<?php if(in_array("HIMSI Goes To Campus",$proker)) { $index = array_search("HIMSI Goes To Campus", $proker); echo $proker[$index+1]; } else { echo ""; } ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submitt" class="btn btn-info waves-effect waves-light">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                <!-- /.modal -->

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