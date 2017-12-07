<?php
     
    session_start();
    error_reporting(0);
    
    session_start();
    $sucesso = $_SESSION['sucesso'];

    
 ?>
 <!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Atomic Hub</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Link para CSS Bootstrap -->
		<link rel="stylesheet" href="css2/bootstrap.min.css">

		
	</head>
	<body>
		<?php 

			if($sucesso != null ){


		?>

			<div class="alert alert-success">
			  <strong>Parabéns!</strong> Cadastrado com sucesso.
			<a href="cadastrar.php"><button type="button" class="btn btn-info">Voltar para Cadastro de Elementos </button> </a><a href="cadastrar3.php"><button type="button" class="btn btn-info">Voltar para Cadastro de Informações</button></a>
			</div>

		<?php  

			} 

		?>
	</body>
</html>
