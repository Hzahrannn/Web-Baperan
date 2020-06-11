<?php
include "../../koneksi.php";
require "../../function.php";
session_start();
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
                                    <li class="breadcrumb-item"><a href="#">PSDM</a></li> 
                                    <li class="breadcrumb-item active">Penilaian</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Penilaian</h4>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <?php 
					include "db.php";
					?>
					
				<?php
					$id=$_GET["id"];
					$sql = "SELECT * FROM user WHERE id LIKE '%$id%'";
					$result = $conn->query($sql);
					$cek = $result->fetch_array();
					?>

                <div class="row">
                    <div class="col-xl-12" >
                        <div class="card-box">
<div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">&nbsp;&nbsp;<b>RAPOT HASIL EVALUASI</b></h3>
							
							<table border="0">
											<tr>
											
											<td></br></td>
											</tr>
											
											<tr>
											<td></td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;Nama  </td>
											<td> &nbsp;:<b>&nbsp;&nbsp;<?php echo $cek["nama"]; ?><b></td>
											</tr>
											
											<tr>
											<td></td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;NIM  </td>
											<td> &nbsp;:<b>&nbsp;&nbsp;<?php echo $cek["nim"]; ?></b></td>
											</tr>
											
											<tr>
											<td></td>
											<td>&nbsp;&nbsp;&nbsp;&nbsp;Dinas  </td>
											<td> &nbsp;:<b>&nbsp;&nbsp;<?php echo $cek["dinas"]; ?></b></td>
											</tr>
								
								
							</table>
							
							
                        </div>
                        <div class="panel-body">
						<br><br><br>
                            <table id="demo-dt-basic" class="table table-striped table-bordered"  >
                                <thead>
                                    <tr>
                                        
                                        <th>Penilaian</th>
                                        <th>Bulan 3</th>
                                        <th>Buan 6</th>
                                        <th >Bulan 9</th>
										
										
                                    </tr>
                                </thead>
                                <tbody>
								
									<tr>
									<td><b>Ahlak Dan Prilaku</td>
									<td><?php echo $cek["n1b3"]; ?></td>
									<td><?php echo $cek["n1b6"]; ?></td>
									<td><?php echo $cek["n1b9"]; ?></td>									
                                </tbody>
								<tbody>
								
									<tr>
									<td><b>Keaktifan Dalam Organisasi</td>
									<td><?php echo $cek["n2b3"]; ?></td>
									<td><?php echo $cek["n2b6"]; ?></td>
									<td><?php echo $cek["n2b9"]; ?></td>									
                                </tbody>
								<tbody>
								
									<tr>
									<td><b>Kedisiplinan</td>
									<td><?php echo $cek["n3b3"]; ?></td>
									<td><?php echo $cek["n3b6"]; ?></td>
									<td><?php echo $cek["n3b9"]; ?></td>									
                                </tbody>
								<tbody>
								
									<tr>
									<td><b>Kerjasama Tim</td>
									<td><?php echo $cek["n4b3"]; ?></td>
									<td><?php echo $cek["n4b6"]; ?></td>
									<td><?php echo $cek["n4b9"]; ?></td>									
                                </tbody>
								<tbody>
								
									<tr>
									<td><b>Komunikasi</td>
									<td><?php echo $cek["n5b3"]; ?></td>
									<td><?php echo $cek["n5b6"]; ?></td>
									<td><?php echo $cek["n5b9"]; ?></td>									
                                </tbody>
								<tbody>
								
									<tr>
									<td><b>Kreatifitas dan Inovasi</td>
									<td><?php echo $cek["n6b3"]; ?></td>
									<td><?php echo $cek["n6b6"]; ?></td>
									<td><?php echo $cek["n6b9"]; ?></td>									
                                </tbody>
								<tbody>
								
									<tr>
									<td><b>Tanggung Jawab</td>
									<td><?php echo $cek["n7b3"]; ?></td>
									<td><?php echo $cek["n7b6"]; ?></td>
									<td><?php echo $cek["n7b9"]; ?></td>									
                                </tbody>
								<tbody>
								
									<tr>
									<td><b>Komentar</td>
									<td><?php echo $cek["k8b3"]; ?></td>
									<td><?php echo $cek["k8b6"]; ?></td>
									<td><?php echo $cek["k8b9"]; ?></td>									
                                </tbody>
								
								
							<tbody>
								
									<tr>
									<td><b>Rata Rata</td>
									<td><?php 
$rata1 = ($cek["n1b3"] + $cek["n2b3"]+ $cek["n3b3"] + $cek["n4b3"] + $cek["n5b3"]+ $cek["n6b3"] + $cek["n7b3"])/7;
									 echo round($rata1, 2) ;?></td>
									<td><?php 
$rata2 = ($cek["n1b6"] + $cek["n2b6"]+ $cek["n3b6"] + $cek["n4b6"] + $cek["n5b6"]+ $cek["n6b6"] + $cek["n7b6"])/7;
									 echo $rata2; ?></td> </td>
									<td><?php 
$rata3 = ($cek["n1b9"] + $cek["n2b9"]+ $cek["n3b9"] + $cek["n4b9"] + $cek["n5b9"]+ $cek["n6b9"] + $cek["n7b9"])/7;
									 echo $rata3; ?></td> </td>									
                                </tbody>
								
								<tbody>
								
									<tr>
									<td><b>Nilai Akhir</td>
									<td><?php $nilaiakhir=($rata1+$rata2+$rata3)/3;
												echo round($nilaiakhir,2);?></td>
																		
                                </tbody>
								
                            </table>
                        </div>
                    </div> 
					
					
					<script type="text/javascript" src="chart/Chart.js"></script>
					 <style type="text/css">
		body{
			font-family: roboto;
		}
	</style>
 
	<br><br><br>
 
 
 
	<div style="width: 500px;height: 500px">
		<canvas id="myChart"></canvas>
	</div>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Bulan 3", "Bulan 6", "Bulan 9"],
				datasets: [{
					label: 'Grafis Nilai',
					data: [<?php echo $rata1; ?>, <?php echo $rata2; ?>, <?php echo $rata3; ?>],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
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
		<script src="assets/libs/chart-js/Chart.bundle.min.js"></script>
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

        <!-- Footable js -->
        <script src="../../assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="../../assets/js/pages/foo-tables.init.js"></script>
        
    </body>
    
</html>