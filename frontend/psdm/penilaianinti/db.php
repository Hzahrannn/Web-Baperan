<?php

$conn = new mysqli("localhost", "himsiuns_baperan", "Qwerty12345", "himsiuns_baperan");
if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

?>