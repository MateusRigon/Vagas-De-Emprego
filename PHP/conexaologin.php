<?php 
			
	class Admin {
	
		public function logar(){
			require_once 'db.php';

			$login = $_POST['login'];
			$senha = $_POST['senha'];

			$verificalogin = mysqli_query($conexao,"SELECT * FROM admin WHERE (login = '$login') AND (senha = '$senha')"); 

			if (mysqli_num_rows($verificalogin) <= 0) {
				echo "login não existe";
			}else{
				session_start();
				$_SESSION['success'] = "logado como administrador"; 
				echo"<script language='javascript' type='text/javascript'>
			    alert('Usuário logado com sucesso!');window.location.
	     		href='index.php'</script>";
			}
			
		}
		
 	}
 ?>