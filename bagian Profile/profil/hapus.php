<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0) {
	echo "
		<script>
			alert('Data has been delete!');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Failed to delete!');
			document.location.href = 'index.php';
		</script>
		";
	}	




 ?>