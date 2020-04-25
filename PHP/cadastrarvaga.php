<?php 

	 class NovaVaga {
	 	
	 	public function cadastrar(){
	 		require_once 'db.php';

	 		$titulo = $_POST['titulo']; 
	 		$descricao = $_POST['descricao'];
	 		$salario = $_POST['salario'];
	 		global $msgDeSucesso;

	 		$cadastrar = "INSERT INTO vagas(titulo,descricao,salario) VALUES ('$titulo','$descricao','$salario')";
	 		$query = mysqli_query($conexao, $cadastrar);

	 		if ($query) {
	 			$msgDeSucesso = "Vaga cadastrada com sucesso!";	
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
		 				<div id="vagas" class="mb-5">
		 					<div class="col-lg-12 col-md-12">
		 						<div class="mt-5 mb-5">
		 							<h3><?php echo $array['titulo'];?></h3>
		 							<hr>
		 							<p><?php echo $array['descricao'];?> <a href=""></a></p>
		 							<hr>
		 							<h5>Salário: R$ <?php echo $array['salario'];?></h5>
		 						</div>
		 					</div>
		 				</div>


		 			
		 		<?php
		 				
		 			} while ($array = mysqli_fetch_assoc($query));
		 		}
		 	}
	 	}

	}

 ?>