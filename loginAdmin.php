<?php 
	include_once ("PHP/conexaologin.php");
	$u = new Admin;
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
	<title>Login</title>
</head>
<body>
	<div id="colunalogin" class="col-lg-6 col-md-6 col-sm-8 col-10">
	<div class="container">
		<section class="d-flex justify-content-center">
			<h1>Login</h1>	
		</section>
		
	<div id="formlogin" class="form-group d-flex justify-content-center">
		<form method="POST">
			<input class="d-flex mb-3 mt-2" type="text" placeholder="login" name="login" required> 
			<input class="d-flex mb-3" type="password" placeholder="senha" name="senha" required>
			<input id="entrar" class="btn btn-success d-flex" type="submit" value="ENTRAR" name="entrar">
		</form> 
	</div>
	<a id="cancelar" class="d-flex justify-content-center" href="index.php">Cancelar</a>	
	</div>
</div>	
	
<?php 
	if(isset($_POST['entrar'])){
		$u->logar();
		echo $msgErro;
	}
 ?>

</body>
</html>