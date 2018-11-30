<?php
include('PDO_conectadb.php');

session_start();

if(isset($_SESSION['user'])){
	//echo "Bem vindo ", $_SESSION['user'];
}else{
	header('location: PDO_login.php');
}

if(isset($_POST['logout'])){
	session_start();
	session_destroy();
	header('location: PDO_login.php');
}

$stmt = $conn->prepare("UPDATE cliente SET usuario = :LOGIN, senha = :PASSWD WHERE id_cliente = :ID");

$login = $_POST['user']; //"rejane maria";
$passwd = $_POST['pass']; //"oi123";
$id = $_POST['id']; //"13";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWD", md5($passwd));
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "alterado OK";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Alterando usuário</title>
</head>
<body>
	<div>
		<form method="post" name="altera">
			<input type="type" name="user">
			<input type="type" name="pass">
			<input type="type" name="id">
			<input type="submit" name="login" value="Alterar Informações">
			<input type="reset" name="limpa" value="Limpar">

		</form>

	</div>


	<form method="post" name="logout">
		<input type="submit" name="logout" value="Sair">
	</form>
</body>
</html>