<html>
<body>
<script src="../../assets/js/sweetalert2.js"></script>

<?php

include "db.php";
?>
<?php
$id = $_POST['id'];
$n1b6 = $_POST['n1b6'];
$n2b6 = $_POST['n2b6'];
$n3b6 = $_POST['n3b6'];
$n4b6 = $_POST['n4b6'];
$n5b6 = $_POST['n5b6'];
$n6b6 = $_POST['n6b6'];
$n7b6 = $_POST['n7b6'];
$k8b6 = $_POST['k8b6'];




$update = "UPDATE user SET  n1b6='$n1b6', n2b6='$n2b6', n3b6='$n3b6', n4b6='$n4b6', n5b6='$n5b6', n6b6='$n6b6', n7b6='$n7b6', k8b6='$k8b6' WHERE id='$id'";




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