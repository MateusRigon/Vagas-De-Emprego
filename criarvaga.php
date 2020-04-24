<?php
	require_once "PHP/cadastrarvaga.php"; 
	$cad = new NovaVaga();
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

    <link rel="stylesheet" type="text/css" href="CSS/criarvaga.css">
	<title>Nova Vaga</title>
</head>
<body>
	<?php if (isset($_SESSION['success'])) {?>
	<?php echo $_SESSION['success']; ?>
	<form method="POST">
		<input id="sair" type="submit" name="sair" value="sair">
	</form>
	<?php } ?>	

	<div id="form" class="form-group d-flex justify-content-center">
		<form method="POST">
			<input class="d-flex" type="text" placeholder="TITULO" name="titulo" required>
			<input class="d-flex" type="text" placeholder="DESCRIÇÃO" name="descricao" required>
			<input class="d-flex" type="text" placeholder="SALARIO" name="salario" required>
			<input class="d-flex" type="submit" value="CRIAR" name="criar">
			<a class="d-flex justify-content-center" href="index.php">Cancelar</a>
		</form>
	</div>

	<?php 
		if (isset($_POST['criar'])) {
			$cad->cadastrar();
		}
	 ?>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="JS/criarvaga.js"></script>
  </body>
</body>
</html>