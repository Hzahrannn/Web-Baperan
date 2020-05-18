<?php 
$koneksi = mysqli_connect("localhost", "root", "", "status");

function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row; 
	}
	return $rows;
}

function tambah($data) {
	global $koneksi;

	$isi = htmlspecialchars($data["isi"]);

	$query = "INSERT INTO statuss VALUES ('', '$isi')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

/*function comment($x) {
	global $koneksi;

	$komen = htmlspecialchars($x["komen"]);

	$query = "INSERT INTO komentar VALUES ('','$komen')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}*/


function hapus($id){
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM statuss WHERE id = $id");
	return mysqli_affected_rows($koneksi);
}

?>  