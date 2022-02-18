<?php
$servername = $_ENV["DATABASE_HOST"];
$username = $_ENV["DATABASE_USER"];
$password = $_ENV["DATABASE_PASSWORD"];
$dbname = $_ENV["DATABASE_DB"];

echo " " .$servername . $username . $password . $dbname;
$conn	= new mysqli($servername,$username,$password,$dbname);
if (!$conn-> connect_error) {
	die("Connection failed #: ".$conn->connect_error);
}
else
	echo "connected"

?>