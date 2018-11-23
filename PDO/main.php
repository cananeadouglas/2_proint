<?php
session_start();

echo "Bem vindo ", $_SESSION['user'];

if(isset($_POST['logout'])){
	session_start();
	session_destroy();

	header('location: PDO_login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
</head>
<body>
	<form method="post" name="logout">
		<input type="submit" name="logout" value="Sair">
		
	</form>

</body>
</html>