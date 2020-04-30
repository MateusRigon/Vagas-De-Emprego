<?php 

	 class NovaVaga {
	 	
	 	public function cadastrar(){
	 		require_once 'db.php';

	 		$titulo = $_POST['titulo']; 
	 		$descricao = $_POST['descricao'];
	 		$salario = $_POST['salario'];
	 		$cidade = $_POST['cidade'];
	 		global $msgDeSucesso;

	 		$cadastrar = "INSERT INTO vagas(titulo,descricao,salario,cidade) VALUES ('$titulo','$descricao','$salario','$cidade')";
	 		$query = mysqli_query($conexao, $cadastrar);

	 		if ($query) {
	 			$msgDeSucesso = "Vaga cadastrada com sucesso!";	
	 		}else{
	 			echo "erro ao cadastrar";
	 		}
	 	}

	 	public function exibeVagas(){
	 		require_once 'db.php';

	 		$dado = "SELECT titulo,descricao,salario,cidade FROM vagas";
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
		 				<div id="coluna" class="col-lg-4 col-md-6 col-sm-10 col-12">		
		 					<div id="vagas" class="">
		 							<button class="btn btn-outline-success active" id="titulo"><?php echo $array['titulo'];?></button>
		 						
									<div id="descricao"><li><?php echo $array['descricao'];?></li></div>
		 							<hr>
		 							<div id="salario">R$ <?php echo $array['salario'];?> - <?php echo $array['cidade'];?></div>

		 					</div>
		 				</div>


		 			
		 		<?php
		 				
		 			} while ($array = mysqli_fetch_assoc($query));
		 		}
		 	}
	 	}

	}

 ?>