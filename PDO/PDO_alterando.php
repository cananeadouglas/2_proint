<?php

include('PDO_conectadb.php');

$stmt = $conn->prepare("UPDATE cliente SET usuario = :LOGIN, senha = :PASSWD WHERE id_cliente = :ID");

$login = "rejane maria";
$passwd = "oi123";
$id = "13";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWD", md5($passwd));
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "alterado OK";

?>