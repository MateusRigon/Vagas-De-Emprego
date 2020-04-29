<?php 
			
	class Admin {
	
		public function logar(){
			require_once 'db.php';

			$login = $_POST['login'];
			$senha = $_POST['senha'];
			$isAdmin = false;
			global $msgErro;

			$verificalogin = "SELECT * FROM admin WHERE (login = '$login') AND (senha = '$senha')"; 
			$query = mysqli_query($conexao, $verificalogin);

			if ($login == "admin" && $senha == "1234") {
				$isAdmin = true;
			}

			if ($isAdmin == true) {
				session_start();
				$_SESSION['success'] = "Logado como administrador"; 
				echo"<script language='javascript' type='text/javascript'>
			    alert('Bem-vindo admin!');window.location.
	     		href='index.php'</script>";
			} 


			if (mysqli_num_rows($query) <= 0) {
				$msgErro = "login não existe";
			}else {
				session_start();
				$_SESSION['usuario'] = $login; 
				echo"<script language='javascript' type='text/javascript'>
			    alert('Logado com sucesso!');window.location.
	     		href='index.php'</script>";
			}
		}
		
 	}
 ?>