<?php
$host = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "shopings";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
