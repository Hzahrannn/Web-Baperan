<?php
include "../koneksi.php";
require "../function.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>Arsip Kestari - Panel BPH HIMSI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Panel BPH HIMSI UNSRI 2019." name="Akademik" />
        <meta content="AdminPanel" name="PenulisCode" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/icon.png">

        <!-- Bootstrap Tables css -->
        <link href="../assets/libs/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" type="text/css" />

         <!-- Custom box css -->
        <link href="../assets/libs/custombox/custombox.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/css/all.css" type="text/css" />
    </head>


    <body class="" >

        <?php 
                include "header.php";
        ?>
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
                                    <li class="breadcrumb-item"><a href="#">Kestari</a></li> 
                                    <li class="breadcrumb-item active">Arsip</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Arsip Kestari</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <h4 class="header-title">Arsip Surat</h4>
                            <p class="sub-header">
                                File surat-surat silahkan di tambah / download.
                               <br><br>
                               <b>NOTE : Jika ingin menghapus File 1, silahkan tambah Data terlebih dahulu. <br>  
                                Jangan biarkan Data File Surat 0 / kosong.</b>
                            </p>
                            <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target="#tambahdata" ><i class=" mdi mdi-plus-box "></i><font color="white"> Tambah Data </font></button>  

                            

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
                                    <th data-field="judul" data-sortable="true">Judul </th>
                                    <th data-field="deskripsi" data-sortable="true">Deskripsi</th>
                                    <th data-field="kategoti" data-sortable="true">Kategori</th>
                                    <th data-field="waktu" data-sortable="true">Last Update</th>
                                    <th data-field="link" data-sortable="true"><center>Link</center></th>
                                    <th data-field="edit" data-sortable="true"><center>Edit</center></th>
                                    <th data-field="hapus" data-sortable="true"><center>Hapus</center></th>
                                </tr>
                                </thead>

                            <tbody>
                               <?php 
                                include '../koneksi.php';
                                $no = 1;
                                $data = mysqli_query($koneksi,"select * from surat");
                                while($d = mysqli_fetch_array($data))
                                {
                               ?>

                             <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['judul']; ?></td>
                                <td><?php echo $d['konten']; ?></td>
                                <td><?php echo $d['kategori']; ?></td>
                                <td> <?php echo $d['waktu']; ?> </td>
                                <td>
                                    <center>
                                    <button type="button" class="btn btn-success waves-effect waves-light" ><i class="mdi mdi-download"></i><a href="<?php echo $d['link']; ?>" target="_blank" > <font color="white"> Download</a></font></button> 
                                <td> 
                                     <center>
                                     <a href="#" type="button" class="ladda-button ladda-button-demo btn btn-info mdi mdi-square-edit-outline"  data-toggle="modal" data-target="#editdata<?php echo $d['id'];?> " data-style="zoom-in" >  EDIT </a>   
                                </td>
                                <td>
                                     <center>
                                     <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close-box"></i><a href="hapus.php?id=<?php echo $d["id"]?>" onclick =" return confirm ('Hapus?');"><font color="white"> HAPUS</a></font></button></center>
                                </td>

                                

<!-- Modal Start -->
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
                                                        <label for="field-1" class="control-label" >Judul :</label>
                                                        <input type="text" class="form-control" id="field-1" name="judul" placeholder="Judul" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="kategori" >Kategori :</label>
                                                        <select id="kategori" name="kategori" class="form-control" required="">
                                                            <option value="">Pilih</option>
                                                            <option value="LPJ">LPJ</option>
                                                            <option value="SPJ">SPJ</option>
                                                            <option value="Proposal">Proposal</option>
                                                            <option value="Undangan">Undangan</option>
                                                            <option value="Surat Keluar">Surat Keluar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">Deskripsi :</label>
                                                        <input type="text" class="form-control" name="konten" id="field-3" placeholder="Deskripsi" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-4" class="control-label">Link :</label>
                                                        <input type="text" class="form-control" id="field-4" name="link" placeholder="http://..." required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Tambah Data</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>

                            <div id="editdata<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <form action="edit.php" method="POST">
                                            <h4 class="modal-title">Edit Data</h4>
                                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    
                                                    <div class="form-group">
                                                        <label for="field-1" class="control-label" >Judul :</label>
                                                        <input type="text" class="form-control" id="field-1" name="judul" value="<?php echo $d['judul']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="kategori">Kategori :</label>

                    <select id="kategori" name="kategori" class="form-control">
                        <option value="">Pilih</option>                                        
                        <option value="LPJ" <?php if($d['kategori'] == 'LPJ'){ echo 'selected'; } ?>>LPJ</option>
                        <option value="SPJ" <?php if($d['kategori'] == 'SPJ'){ echo 'selected'; } ?>>SPJ</option>
                        <option value="Proposal" <?php if($d['kategori'] == 'Proposal'){ echo 'selected'; } ?>>Proposal</option>
                        <option value="Undangan" <?php if($d['kategori'] == 'Undangan'){ echo 'selected'; } ?>>Undangan</option>
                        <option value="Surat Keluar" <?php if($d['kategori'] == 'Surat Keluar'){ echo 'selected'; } ?>>Surat Keluar</option>
                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-3" class="control-label">Deskripsi :</label>
                                                        <input type="text" class="form-control" name="konten" id="field-3" value="<?php echo $d['konten']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="field-4" class="control-label">Link :</label>
                                                        <input type="text" class="form-control" id="field-4" name="link" value="<?php echo $d['link']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Ubah Data</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>

                            <!-- End modal -->
                                  <?php } ?>

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
        <?php 
            include "../footer.php";
         ?>
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

        <!-- Bootstrap Tables js -->
        <script src="../assets/libs/bootstrap-table/bootstrap-table.min.js"></script>

        <!-- Init js -->
        <script src="../assets/js/pages/bootstrap-tables.init.js"></script>

        <!-- Modal-Effect -->
        <script src="../assets/libs/custombox/custombox.min.js"></script>
        
    </body>
    
</html>