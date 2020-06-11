<html>
<body>
<script src="../../assets/js/sweetalert2.js"></script>

<?php

include "db.php";
?>
<?php
$id = $_POST['id'];
$n1b9 = $_POST['n1b9'];
$n2b9 = $_POST['n2b9'];
$n3b9 = $_POST['n3b9'];
$n4b9 = $_POST['n4b9'];
$n5b9 = $_POST['n5b9'];
$n6b9 = $_POST['n6b9'];
$n7b9 = $_POST['n7b9'];
$k8b9 = $_POST['k8b9'];




$update = "UPDATE user SET  n1b9='$n1b9', n2b9='$n2b9', n3b9='$n3b9', n4b9='$n4b9', n5b9='$n5b9', n6b9='$n6b9', n7b9='$n7b9', k8b9='$k8b9' WHERE id='$id'";




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