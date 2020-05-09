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
	<div class="container-fluid">
		<div class="row">
			<div id="col-principal" class="col-lg-12">
				<?php if (isset($_SESSION['success'])) {?>
							<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  			<h2 id="logo" href="#">VagasOnline.com</h2>
								  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								    <span class="navbar-toggler-icon"></span>
					 			  </button>

									  <div class="collapse navbar-collapse" id="navbarSupportedContent">
									    <ul id="successmsg" class="navbar-nav mr-auto">
									      		<?php echo $_SESSION['success']; ?>
									    </ul>
									    <form method="POST" class="form-inline my-2 my-lg-0">
									      <button class="btn btn-outline-success my-2 my-sm-0" id="sair" type="submit" name="sair">Sair</button>
									    </form>
								  </div>
							</nav>
		

	   		<div id="form" class="form-group">
				<form method="POST">
					<input class="d-flex mb-3" type="text" placeholder="TÍTULO" name="titulo" required>
					<input id="descricao" class="mb-3" type="text" placeholder="DESCRIÇÃO" name="descricao" required></input>
					<input class="d-flex mb-3" type="text" placeholder="SALÁRIO" name="salario" required>
					<input class="d-flex mb-3" type="text" placeholder="CIDADE" name="cidade" required>
					<input id="criar" class="d-flex mb-3 btn-success" type="submit" value="CRIAR" name="criar">
					<a id="cancelar" href="index.php">Cancelar</a>
				</form>
			</div>
	<?php } ?>	

			

		<?php 
			if (isset($_POST['criar'])) {
				$cad->cadastrar();
				?>
				<div class="d-flex" id="msgDeSucesso"><?php  echo $msgDeSucesso; ?></div>
				<?php
			}
		 ?>
			</div>
		</div>
	</div>
	

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="JS/criarvaga.js"></script>
  </body>
</body>
</html>