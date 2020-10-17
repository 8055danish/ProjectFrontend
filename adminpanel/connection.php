<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$db_conn = mysqli_connect($servername,$username,$password,$dbname);
if ($db_conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>