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
$data = mysqli_query($koneksi,"SELECT * FROM absensi");
$d = mysqli_fetch_array($data);
 
$id = $d['id'];
$nama = $_POST['nama'];
$proker = $_POST['proker'];
$sebagai = $_POST['sebagai'];
$keterangan = $_POST['keterangan'];
$penilaian = $_POST['penilaian'];



//mysqli_query($koneksi,"UPDATE surat set waktu='$waktu', judul='$nama', konten='$alamat', kategori='$ka', link='$link' where id='$id'");

//echo "<script>alert('Data Berhasil Ubah!');top.location='index.php';</script>"

$sql = "UPDATE absensi set nama='$nama',proker='$proker',sebagai='$sebagai',keterangan='$keterangan',penilaian='$penilaian' where id='$id'";
$result = mysqli_query($koneksi,$sql);
    
    if ($result) {
        echo "<script>
            Swal.fire('Sukses.', 'Data Berhasil di Ubah !', 'success').then(function(){
                setTimeout(document.location.href = 'index.php', 100);
                })
                </script>";
    }
    else{
        echo "<script>
            Swal.fire('Gagal.', 'Data Gagal di Ubah !', 'error').then(function(){
                setTimeout(document.location.href = 'index.php', 100);
                })
                </script>";
    }
 

?>
</body>
</html>