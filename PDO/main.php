<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="css/css.css"/>
	<?php include('menu.php'); ?>
</head>
<body>
	<form method="post" name="logout">
		<input type="submit" name="logout" value="Sair">
	</form>


</body>
</html>

<?php
session_start();

if(isset($_SESSION['user'])){
	echo "Bem vindo ", $_SESSION['user'];
}else{
	header('location: PDO_login.php');
}

if(isset($_POST['logout'])){
	session_start();
	session_destroy();
	header('location: PDO_login.php');
}

?>