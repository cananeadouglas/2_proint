<?php

include('PDO_conectadb.php');

session_start();

$stmt = $conn->prepare("INSERT INTO cliente (usuario, senha, info) VALUES (:LOGIN, :PASSWD, :WAY)");

$login = $_POST['user']; // "rejane";
$passwd = $_POST['pass']; // "gleice";
$way = "cliente";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWD", md5($passwd));
$stmt->bindParam(":WAY", $way);

$stmt->execute();

//echo "<center>Cadastrado com Sucesso! Volte para a tela de login!</center>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando novo usuário</title>
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
</head>
<body>

	
<div class="container">
<div class="box">
			<form method="post" name="inserir">
				<label>
					<input type="text" name="user" placeholder="digite aqui">
				</label><br/>
				<label>
					<input type="password" name="pass" placeholder="sua senha aqui">
				</label><br/>
				<input type="submit" name="login" value="Cadastrar Usuário">
				<input type="reset" name="limpa" value="Limpar">

			</form>
			<a href="PDO_login.php">Tela de Login</a>
</div>
</div>

</body>
</html>