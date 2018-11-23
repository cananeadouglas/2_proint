<?php

include('PDO_conectadb.php');

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM cliente WHERE id_cliente = :ID");

$id = "7";

$stmt->bindParam(":ID", $id);

$stmt->execute();
echo "OK <br>";

//cancela o delete
$conn->rollback();


//confirma o delete
//$conn->commit();


echo "DELETADO OK";

?>