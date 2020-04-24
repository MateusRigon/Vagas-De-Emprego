<?php
	require_once 'PHP/cadastrarvaga.php'; 
	$vaga = new NovaVaga();
	session_start();
	if (isset($_POST['sair'])) {
		unset($_SESSION['success']);
		header("location: loginAdmin.php");
		session_destroy();
	}

 ?>	

<!DOCTYPE html>
<html lang="br">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="CSS/login.css">
	<title>Login Admin</title>
</head>
<body>
	<?php if (isset($_SESSION['success'])) {?>
	<?php echo $_SESSION['success']; ?>
	<form method="POST">
		<input id="sair" type="submit" name="sair" value="sair">
	</form>
	<button><a href="criarvaga.php">+NOVA VAGA</a></button>
	<?php } ?>

	<?php if (empty($_SESSION['success'])): ?>
		<button><a href="loginAdmin.php">LOGIN</a></button>
	<?php endif ?>
	
	<?php 
		$vaga->exibeVagas();
	 ?>

</body>
</html>