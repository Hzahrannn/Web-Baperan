<html>
<body>
<script src="../../assets/js/sweetalert2.js"></script>

<?php

include "db.php";
?>
<?php
$id   = $_POST['id'];
$n1b3 = $_POST['n1b3'];
$n2b3 = $_POST['n2b3'];
$n3b3 = $_POST['n3b3'];
$n4b3 = $_POST['n4b3'];
$n5b3 = $_POST['n5b3'];
$n6b3 = $_POST['n6b3'];
$n7b3 = $_POST['n7b3'];
$k8b3 = $_POST['k8b3'];




$update = "UPDATE user SET  n1b3='$n1b3', n2b3='$n2b3', n3b3='$n3b3', n4b3='$n4b3', n5b3='$n5b3', n6b3='$n6b3', n7b3='$n7b3', k8b3='$k8b3' WHERE id='$id'";




if ($conn->query($update) === TRUE) {
	echo "<script>
			Swal.fire('Sukses !', 'Data Nilai telah di Tambahkan.', 'success').then(function(){
				setTimeout(document.location.href = 'index.php', 100);
				})
				</script>";
} else {
	echo "Error: " . $update . "<br>" . $conn->error;
}
$conn->close();
 
exit;
?>
	
</body>
</html>