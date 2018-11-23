<?php

include('PDO_conectadb.php');

$stmt = $conn->prepare("INSERT INTO cliente (usuario, senha, info) VALUES (:LOGIN, :PASSWD, :WAY)");

$login = "rejane";
$passwd = "gleice";
$way = "victor";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWD", md5($passwd));
$stmt->bindParam(":WAY", $way);

$stmt->execute();

echo "insert OK";

?>