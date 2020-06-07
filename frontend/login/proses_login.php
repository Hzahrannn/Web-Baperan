<?php
 ob_start();
 session_start();
 ?>

<!DOCTYPE HTML>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Login Page</title>
</head>
<body>
 
<script src="../assets/js/sweetalert2.js"></script>

 <?php

 // menghubungkan dengan koneksi
include "koneksi.php";

// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$password = $_POST['password'];
$password2 = md5($_POST['password']);




// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * from user where nim='$nim' and password='$password' or nim='$nim' and  password='$password2' ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

	if ($cek> 0){
		$_SESSION['nim'] = $nim;
		echo "<script>
			Swal.fire('Login Sukses !', 'Selamat Datang, di Panel BPH HIMSI 2019.', 'success').then(function(){
				setTimeout(document.location.href = '../bye', 100);
				})
				</script>";
		//header("location:index.php"); 
	}
	else {
		echo "<script>
			Swal.fire('Login Gagal !', 'Username atau Password Salah.', 'error').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
	}

?>
</body>
</html>