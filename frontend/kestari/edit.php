<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 
<script src="../assets/js/sweetalert2.js"></script>

<?php 

include '../koneksi.php';

 
$id = $_POST['id'];
$nama = $_POST['judul'];
$alamat = $_POST['konten'];
$ka = $_POST['kategori'];
$link = $_POST['link'];
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');


//mysqli_query($koneksi,"UPDATE surat set waktu='$waktu', judul='$nama', konten='$alamat', kategori='$ka', link='$link' where id='$id'");

//echo "<script>alert('Data Berhasil Ubah!');top.location='index.php';</script>"

$sql = "UPDATE surat set waktu='$waktu', judul='$nama', konten='$alamat', kategori='$ka', link='$link' where id='$id'";
$result = mysqli_query($koneksi,$sql);
	
	if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Data Berhasil di Ubah !', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}
	else{
		echo "<script>
			Swal.fire('Gagal.', 'Data Gagal di Ubah !', 'error').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}
 

?>
</body>
</html>