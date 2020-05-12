<?php 
$koneksi = mysqli_connect("localhost", "root", "", "profil");

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

	$nama = htmlspecialchars($data["nama"]);

	// upload gambar
	$gambar = upload();
	if ( !$gambar ) {
		return false;
	}

	$query = "INSERT INTO bio VALUES ('', '$nama', '$gambar')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function upload() {

	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek gambar
	if( $error === 4 ) {
		echo "<script>
			alert('pilih gambarnya dulu!');
			</script>";
		return false;
	}

	// cek file yang diupload
	$ekstensivalidfile = ['jpg', 'jpeg', 'png'];
	$ekstensifile = explode('.', $namafile);
	$ekstensifile = strtolower(end($ekstensifile));
	if( !in_array($ekstensifile, $ekstensivalidfile) ) {
		echo "<script>
			alert('Yang Anda Upload Bukan Gambar!!');
			</script>";
		return false;
	}

	// cek ukuran file
	if ( $ukuranfile > 100000000 ){
		echo "<script>
			alert('Ukuran terlalu besar!!');
			</script>";
		return false;

	}

	//lolos pengecekan
	//generate nama gambar baru
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ekstensifile;
	move_uploaded_file($tmpName, 'gambar/' . $namafilebaru);

	return $namafilebaru;

}

function ubah($data){
	global $koneksi;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);

	// cek user pilih gambar baru atau tidak
	if ( $_FILES['gambar']['error'] === 4 ) {
	 	$gambar = $gambarlama;
	 } else {
		$gambar = upload(); 	
	 }
	

	$query = "UPDATE bio SET nama='$nama', 
								   gambar='$gambar'
								WHERE id = $id
			";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

?>