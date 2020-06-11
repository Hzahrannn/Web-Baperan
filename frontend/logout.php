<?php
ob_start();
session_start();
?>

 <!DOCTYPE HTML>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
<script src="assets/js/sweetalert2.js"></script>

<?php
 
session_destroy();
echo "<script>
			Swal.fire('Terimakasih.', 'Anda berhasil Logout !', 'success').then(function(){
				setTimeout(document.location.href = 'landing', 100);
				})
				</script>";

//echo "<meta http-equiv='refresh' content='1 url=landing'>";
?>

</body>
</html> 