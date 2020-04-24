<?php 
	// conexão MySQL
	$hostname = "localhost";
	$password = "";
	$user = "root";
	$db = "siteVagas"; 
	$conexao = mysqli_connect($hostname,$user,$password,$db);

	if (!$conexao) {
		echo "erro ao conectar com banco de dados";
	}
 ?>