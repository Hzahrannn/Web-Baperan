<?php
include "../../koneksi.php";
require "../../function.php";
session_start();

$id = $_GET['nim'];

if (!isset($_SESSION['nim'])){ 
header ("location:../../landing");
} 
$data = mysqli_fetch_array(data($_GET));
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
                                    <li class="breadcrumb-item">PSDM</li> 
                                    <li class="breadcrumb-item">Penilaian</li>
                                    <li class="breadcrumb-item active">Raport</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Raport Evaluasi</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <?php 
					include "db.php";
					?>
					
				<?php 
					$sql = "SELECT * FROM user WHERE nim LIKE '%$id%'";
					$result = $conn->query($sql);
					$cek = $result->fetch_array();
					?>

                <div class="row">
                    <div class="col-xl-12" >
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
						<center><b>LEMBAR PENILAIAN</b></center><br>

							<div class="table-responsive">
						<table class="table m-0">
							<tr>
								<td><b>Penilaian</b></td>
								<td><center><b>Penilaian 3 Bulan</b></center></td>
								<td><center><b>Penilaian 6 Bulan</b></center></td>
								<td><center><b>Penilaian Akhir</b></center></td>
							</tr>
							<tr>
								<td>Kontribusi</td>
								<td><center>
									<?php 
									echo $cek['n1b3']; 
										
									 ?></center></td>
								<td><center>
									<?php 
									echo $cek['n1b6'];
									 ?></center></td>
								<td><center>
									<?php 
									echo $cek['n1b9'];
										 ?>
								</center></td>
							</tr>
							<tr>
								<td>Keaktifan</td>
								<td><center>
									<?php 
									echo $cek['n2b3']; ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n2b6'];
										 ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n2b9']; ?>
								</center></td>
							</tr>
							<tr>
								<td>Kerjasama</td>
								<td><center>
									<?php 
									echo $cek['n3b3']; ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n3b6']; ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n3b9']; ?>
								</center></td>

							</tr>
							<tr>
								<td>Akhlak dan Perilaku</td>
								<td><center>
									<?php 
									echo $cek['n4b3'];  ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n4b6']; ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n4b9'];  ?>
								</center></td>

							</tr>
							<tr>
								<td>Kualitas Kerja</td>
								<td><center>
									<?php 
									echo $cek['n5b3']; ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n5b6'];  ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n5b9'];  ?>
								</center></td>

							</tr>
							<tr>
								<td>Kehadiran</td>
								<td><center>
									<?php 
									echo $cek['n6b3'];  ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n6b6'];  ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n6b9']; ?>
								</center></td>

							</tr>
							<tr>
								<td>Inisiatif </td>
								<td><center>
									<?php 
									echo $cek['n7b3']; ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n7b6'];  ?>
								</center></td>
								<td><center>
									<?php 
									echo $cek['n7b9']; ?>
								</center></td>

							</tr>
							<tr>
								<td><b>Komentar</b></td>
								<td><center><?php echo $cek['k8b3']; ?></center></td>
								<td><center><?php echo $cek['k8b6']; ?></center></td>
								<td><center><?php echo $cek['k8b9']; ?></center></td>

							</tr>
							<tr>
								<td><b>Nilai Rata-Rata Akhir</b></td>
								<td><center>
									<?php 
										$rata1 = ($cek["n1b3"] + $cek["n2b3"]+ $cek["n3b3"] + $cek["n4b3"] + $cek["n5b3"]+ $cek["n6b3"] + $cek["n7b3"])/7;
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
									 ?></center></td>
								<td><center>
									<?php 
										$rata2 = ($cek["n1b6"] + $cek["n2b6"]+ $cek["n3b6"] + $cek["n4b6"] + $cek["n5b6"]+ $cek["n6b6"] + $cek["n7b6"])/7;
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
										?></center></td>
								<td><center>
									<?php 
										$rata3 = ($cek["n1b9"] + $cek["n2b9"]+ $cek["n3b9"] + $cek["n4b9"] + $cek["n5b9"]+ $cek["n6b9"] + $cek["n7b9"])/7;
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
										?></center></td>
							</tr>
							<tr>
								<td><b>Nilai Akhir</b></td>
								<td><center><b>
									<?php $nilaiakhir=($rata1+$rata2+$rata3)/3;
										echo round($nilaiakhir,2);?></b></center></td>
								<td></td>
								<td></td>
							</tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
						</table>
						</center>
						<script type="text/javascript" src="chart/Chart.js"></script>
									<style type="text/css">
										body{
											font-family: ;
										}
									</style>
							<br><br><br> 
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

	    <script>
			var ctx = document.getElementById("myChart").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: ["Bulan 3", "Bulan 6", "Bulan 9"],
					datasets: [{
						label: 'Grafik Nilai',
						data: [<?php echo round($rata1,2); ?>, <?php echo round($rata2,2); ?>, <?php echo round($rata3,2); ?>],
						backgroundColor: [
						'rgba(54, 162, 235, 1)'
						],
						borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero:true
							}
						}]
					}
				}
			});
		</script>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="../../assets/js/vendor.min.js"></script>

        <!-- Plugins js-->
        <script src="../../assets/libs/flatpickr/flatpickr.min.js"></script>
        <script src="../../assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="../../assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.js"></script>
		<script src="../../assets/libs/chart-js/Chart.bundle.min.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="../../assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- Dashboar 1 init js-->
        <script src="../../assets/js/pages/dashboard-1.init.js"></script>

        <!-- init js -->
        <script src="../../assets/js/pages/flot.init.js"></script>

		<!-- Chart JS -->
        <script type="text/javascript" src="assets/libs/chart-js/Chart.bundle.min.js"></script>
		
        <!-- App js-->
        <script src="../../assets/js/app.min.js"></script> 

        <!-- Init js -->
        <script src="../../assets/js/pages/foo-tables.init.js"></script>
        
    </body>
    
</html>