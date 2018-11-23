<?php

$conn = new mysqli("localhost", "douglas", "123qwe!@#QWE", "proint");

if($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO cliente (usuario, senha, info) VALUES (?,?,?)");

$stmt->bind_param("sss", $login, md5($senha), $info);

$login = "select";
$senha = "12345";
$info = "festa";

$stmt->execute();

?>