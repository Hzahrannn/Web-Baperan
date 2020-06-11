<?php

$conn = new mysqli("localhost", "root", "", "himsi");
if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

?>