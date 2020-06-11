
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
 
<script src="../../assets/js/sweetalert2.js"></script>

<?php  

include '../../koneksi.php';


if (!isset($_POST['nama'])) {
	header("Location: index.php");
}

$nama = $_POST['nama'];
$proker = $_POST['proker'];
$sebagai= $_POST['sebagai']; 


// mysqli_query($koneksi,"insert into surat values('','$judul','$konten', '$kat', '$link', '$waktu')");

//echo "<script>alert('Data Berhasil Ditambah!');location='index.php';</script>";

 


$sql = "INSERT into absensi (`nama`,`proker`,`sebagai`)  
			VALUES('$nama','$proker', '$sebagai' )";
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