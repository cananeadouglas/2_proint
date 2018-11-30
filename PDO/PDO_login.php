<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
</head>
<body>

	<?php

	session_start();
	include('PDO_conectadb.php');

	if(isset($_POST['user'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$query = $conn->prepare("SELECT COUNT('id_cliente') FROM cliente WHERE usuario = :LOGIN AND senha = :PASSWD");

		$query->bindParam(":LOGIN", $user);
		$query->bindParam(":PASSWD", md5($pass));

		$query->execute();

		$count = $query->fetchColumn();

		if ($count == 1){
			$_SESSION['user'] = $user;

			header('location: main.php');
			
		}else{
			echo "<center>Você não foi autenticado, usuário ou senha inexistente</center>";
		}
	}

	?>
	
	<div class="container">
		<div class="box">
			<form method="post" name="login">
				<label>
					<input type="text" name="user" placeholder="usuario">
				</label><br/>
				<label>
					<input type="password" name="pass" placeholder="senha">
				</label><br/>
				<input type="submit" name="login" value="Logar">
				<input type="reset" name="limpa" value="Limpar">

			</form><br/>
			<a href="PDO_inserindo.php">Cadastrar Novo Usuário</a>
		</div>
	</div>
</body>
</html>

