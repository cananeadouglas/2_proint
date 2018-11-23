<?php

include('PDO_conectadb.php');

$stmt = $conn->prepare("SELECT usuario, info FROM cliente");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//listar usuários + senha
foreach ($results as $row) {
	
	foreach ($row as $key => $value){
		echo "<strong>".$key.":</strong>".$value."<br/>";
	}

	echo "=======================<br/>";

}


?>