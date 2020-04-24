<?php 

	 class NovaVaga {
	 	
	 	public function cadastrar(){
	 		require_once 'db.php';

	 		$titulo = $_POST['titulo']; 
	 		$descricao = $_POST['descricao'];
	 		$salario = $_POST['salario'];

	 		$cadastrar = mysqli_query($conexao, "INSERT INTO vagas(titulo,descricao,salario) VALUES ('$titulo','$descricao','$salario')");
	 		
	 		if ($cadastrar) {
	 			 echo"<script language='javascript' type='text/javascript'>
		    	alert('Vaga cadastrada com sucesso!');</script>";	
	 		}
	 	}

	 	public function exibeVagas(){
	 		require_once 'db.php';

	 		$dado = "SELECT titulo,descricao,salario FROM vagas";
	 		$query = mysqli_query($conexao,$dado);
	 		$array = mysqli_fetch_assoc($query);
	 		// calcula quantos dados retornaram
	 		if (empty($array)) {
	 			echo "Não há vagas cadastradas!";
	 		} else{
		 		$total = count($array);

		 		if ($total > 0) {
		 			do {
		 		?>
		 				<p class="d-flex justify-content-center"><?php echo $array['titulo'];?> / <?php echo $array['descricao'];?> / <?php echo $array['salario'];?> </p>
		 		<?php
		 				
		 			} while ($array = mysqli_fetch_assoc($query));
		 		}
		 	}
	 	}

	}

 ?>