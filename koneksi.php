<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_ujikom";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
	# code...
}
echo "connected successfully";

?>

