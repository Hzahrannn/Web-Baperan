<?php 
//koneksi ke database
require 'functions.php';
$statuss = query("SELECT * FROM statuss");
$komentar = query("SELECT * FROM komentar");
?>

<?php  

// cek tombol submit
if(isset($_POST["submit"]) ){

	//cek apakah data berhasil/ gagal diinput
	if ( tambah($_POST) > 0 ) {
		echo "
		<script>
			document.location.href = 'index.php';
		</script>";
	}
}

if(isset($_POST["send"]) ){
	if(send($_POST) > 0) {
		echo "
		<script>
			document.location.href = 'index.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update status</title>
	<style type="text/css">
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			padding : 40px 20px 20px 20px;
			width: 30%;
			margin: 10px;
		}
	</style>
</head>
<body>
	<h1>Status</h1>

	<div>
		<form action="" method="post">
			<textarea type="text" cols="55" rows="5" name="isi" id="isi" autocomplete="off" required="required" placeholder="update status.."></textarea>
			<button type="submit" name="submit">kirim</button>
		</form>
	</div>

	<h2>status anda</h2>

	<?php foreach ($statuss as $row) : ?>
			<div class="card">
				<p><?= $row["isi"]; ?></p>
				<textarea cols="30" rows="1" placeholder="komen disini.."></textarea>
				<?php foreach ($komentar as $row) : ?>
					<textarea disabled=""><?= $row["komen"]; ?></textarea>
				<?php endforeach; ?>
				<button type="submit" name="send">kirim</button>
			</div>
			<button><a href="hapus.php?id=<?= $row["id"]; ?>">hapus</a></button>
	<?php endforeach; ?>
</body>
</html>