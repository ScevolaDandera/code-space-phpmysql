<?php
$servername = $_ENV["DATABASE_HOST"];
$username = $_ENV["DATABASE_USER"];
$password = $_ENV["DATABASE_PASSWORD"];
$dbname = $_ENV["DATABASE_DB"];

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_errno) {
		throw new RuntimeException('mysqli connection error: ' . $conn->connect_error);
	} else {
		echo "Connected";
	}


?>