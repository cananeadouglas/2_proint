<?php
session_start();
include('PDO_conectadb.php');

$stmt->conectar();

$stmt = $conn->query("SELECT usuario, senha FROM cliente WHERE usuario = :USUARIO and 
	senha = :PASSWD");

$login = "rejane maria";
$passwd = "oi123";

$stmt->bindValue(":USUARIO", $_POST['$login']);
$stmt->bindValue(":PASSWD", md5($_POST['$passwd']));
$stmt->execute();

if($stmt->rowCount() == 1){

	while($ln = $stmt->fetch(PDO::FETCH_ASSOC)){

		$_SESSION['usuario'] = $ln['USUARIO'];
        $_SESSION['senha'] = $ln['PASSWD'];

        echo "<script>alert('Logado Com Sucesso'</script>";
        echo session_id();

	};
}else{
		echo "<script>alert('Usuarios Ou Senha Incorretos!');
            top.location.href='PDO_inserindo.php';
            </script>";
            echo session_id();
}

//echo "logado OK";

var_dump($_SESSION);
//https://www.youtube.com/watch?v=etcYlWwHAn0
//https://www.youtube.com/watch?v=OQjESSU4Azw - baixado
?>