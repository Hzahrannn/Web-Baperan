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

$id = $_GET['id'];

//mysqli_query($koneksi,"delete from surat where id='$id'");

//header("location:index.php");

$sql = "DELETE from surat where id='$id'";
$result = mysqli_query($koneksi,$sql);
	
	if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Data Berhasil di Hapus !', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}
	else{
		echo "<script>
			Swal.fire('Gagal.', 'Data Gagal di Hapus !', 'error').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}
 

?>
</body>
</html>