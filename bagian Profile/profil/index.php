<?php 
//koneksi ke database
require 'functions.php';
$mahasiswa = query("SELECT * FROM bio");
?>
<!DOCTYPE html>
<html>
<head>
	<title>profil</title>
	<style type="text/css">
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			padding : 40px 20px 20px 20px;
			overflow: auto;
			width: 50%;
			text-align: center;
		}

		section {
			text-align: center;
		}

		img {
			width: 150px;
		}
	</style>
</head>
<body>

<a href="tambah.php">Tambah Data</a>
<br><br>
<?php foreach ($mahasiswa as $row) : ?>
<div class="card">
	
	<img src="gambar/<?= $row["gambar"]; ?>">
		<section>
			<table>
				<tr>
					<th>Nama</th>
					<td>:</td>
					<td><?= $row["nama"]; ?></td>
				</tr>
			</table>	
		</section>
		<button><a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a></button>

</div>
<br>
	<?php endforeach; ?>
</body>
</html>