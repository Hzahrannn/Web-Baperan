<?php  
require 'functions.php';

// cek tombol submit
if(isset($_POST["submit"]) ){

	//cek apakah data berhasil/ gagal diinput
	if ( tambah($_POST) > 0 ) {
		echo "
		<script>
			alert('Berhasil ditambah!');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Gagal ditambah!');
			document.location.href = 'index.php';
		</script>
		";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" autocomplete="off" required="required">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar" autocomplete="off">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>
	



	</form>

</body>
</html>
