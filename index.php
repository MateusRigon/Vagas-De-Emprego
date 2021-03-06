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

    <link rel="stylesheet" type="text/css" href="CSS/home.css">
	<title>Página Inicial</title>
</head>
<body>		
	<!-- Logado como admin -->
	<?php if (isset($_SESSION['success'])) {?>
		<div class="container-fluid">
			<div class="row">
				<div id="col-principal" class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  			<h2 id="logo" href="#">VagasOnline.com</h2>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
		 			  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul id="successmsg" class="navbar-nav mr-auto">
						      		<?php echo $_SESSION['success']; ?>
						    </ul>
					    	  <section class="nav-item dropdown">
						     	 <button onclick="location.href='criarvaga.php'" class="btn btn-outline-success my-2 my-sm-0" id="novavaga">+ NOVA VAGA</button>
						      </section>
						    <form method="POST" class="form-inline my-2 my-lg-0">
						      <button id="sair" class="btn btn-outline-success my-2 my-sm-0" id="sair" type="submit" name="sair">Sair</button>
						    </form>
					  </div>
				</nav>
				<form method="POST">
					<label>Excluir vaga: </label> <input id="codigo" placeholder="Ex: 91,92" type="text" name="codigo">
					<input type="submit" name="excluir" value="X">
				</form>
				<div id="h1vagas">
					<h1>Encontre as melhores vagas do mercado</h1>
				</div>
			</div>
	       </div>
	   </div>
	<?php } ?>
		


	<!-- Logado como usuario -->
	<?php if (isset($_SESSION['usuario']) && empty($_SESSION['success'])) { ?>
		<div class="container-fluid">
			<div class="row">
				<div id="col-principal" class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  	<h2 id="logo" href="#">VagasOnline.com</h2>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon"></span>
					 	  </button>
						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul id="loginmsg" class="navbar-nav mr-auto">
								<?php echo "Bem-vindo! "; echo $_SESSION['usuario'];?>
							</ul>
								<form method="POST" class="form-inline my-2 my-lg-0">
						      		<button class="btn btn-outline-success my-2 my-sm-0" id="sair" type="submit" name="sair">Sair</button>
						   		 </form>
						   </div>
					</nav>

					<div id="h1vagas">
						<h1>Encontre as melhores vagas do mercado</h1>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<!-- Não há ninguém logado -->
	<?php if (empty($_SESSION['success']) && empty($_SESSION['usuario'])) { ?>
		<div class="container-fluid">
			<div class="row">
				<div id="col-principal" class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
					  	<h2 id="logo" href="#">VagasOnline.com</h2>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon"></span>
					 	  </button>
						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto"></ul>
								<button onclick="location.href='loginAdmin.php'" class="btn btn-outline-success my-2 my-sm-0" id="sair" type="submit" name="sair">Login</button>
						   </div>
					</nav>

					<div id="h1vagas">
						<h1>Encontre as melhores vagas do mercado</h1>
					</div>
				</div>
			</div>
		</div>
			<!-- Mostra todas as vagas -->
			<?php } ?>
				
			<?php 
				$vaga->exibeVagas();
				$vaga->excluirVaga();
			 ?> 	
			 



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>