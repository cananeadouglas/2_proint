<?php

include('PDO_conectadb.php');

$stmt = $conn->prepare("DELETE FROM cliente WHERE id_cliente = :ID");

$id = "10";

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "DELETADO OK";

?>