
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


if (!isset($_POST['judul'])) {
	header("Location: index.php");
}

$judul = $_POST['judul'];
$konten = $_POST['konten'];
$kat= $_POST['kategori'];
$link = $_POST['link'];
date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');


// mysqli_query($koneksi,"insert into surat values('','$judul','$konten', '$kat', '$link', '$waktu')");

//echo "<script>alert('Data Berhasil Ditambah!');location='index.php';</script>";

$sql = "INSERT into surat values('','$judul','$konten', '$kat', '$link', '$waktu')";
$result = mysqli_query($koneksi,$sql);
	
	if ($result) {
		echo "<script>
			Swal.fire('Sukses.', 'Data Berhasil di Tambah !', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}
	else{
		echo "<script>
			Swal.fire('Gagal.', 'Data Gagal di Tambah !', 'error').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}
?>

</body>
</html>