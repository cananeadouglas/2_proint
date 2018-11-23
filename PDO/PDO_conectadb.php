<?php

$conn = new PDO("mysql:dbname=proint;host=localhost", "douglas", "123qwe!@#QWE");

if($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

?>