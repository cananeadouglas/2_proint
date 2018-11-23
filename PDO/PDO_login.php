<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" name="login" >
		<input type="text" name="user">
		<input type="text" name="pass">
		<input type="submit" name="login" value="Logar">

	</form>


</body>
</html>

<?php

session_start();

include('PDO_conectadb.php');

if(isset($_POST['user'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$query = $conn->prepare("SELECT COUNT('id_cliente') FROM cliente WHERE usuario = :LOGIN AND senha = :PASSWD");

//UPDATE cliente SET usuario = :LOGIN, senha = :PASSWD WHERE id_cliente = :ID");

	$query->bindParam(":LOGIN", $user);
	$query->bindParam(":PASSWD", md5($pass));

	$query->execute();

	$count = $query->fetchColumn();

	if ($count == 1){
		$_SESSION['user'] = $user;

		header('location: main.php');
	}
}

?>