<?php  
require 'functions.php';

// ambil data di url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM bio WHERE id =$id")[0]; 

// cek tombol submit
if(isset($_POST["submit"]) ){

	//cek apakah data berhasil/ gagal diubah
	if ( ubah($_POST) > 0 ) {
		echo "
		<script>
			alert('Data berhasil diubah!');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Gagal diubah :( ');
			document.location.href = 'index.php';
		</script>
		";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" autocomplete="off" required="required"value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar :</label><br>
				<img src="gambar/<?= $mhs['gambar']; ?>"><br>
				<input type="file" name="gambar" id="gambar" autocomplete="off">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>
	



	</form>

</body>
</html>
