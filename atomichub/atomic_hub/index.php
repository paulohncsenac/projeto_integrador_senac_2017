<!-- Conexão com Banco de Dados -->
<?php 

include 'banco.php';
 $pdo = Banco::conectar();

?>
<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Atomic Hub</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Link para CSS Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Link para CSS -->    
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<header>
			<!-- Logo do Site -->
			<a href="#"><img src="imagens/logo.png" width="230" height="30"></a>
			<!-- Caixa de Pesquisa -->
			<input class="pesquisa" name="pesquisa" id="pesquisa" type="search">
			<span class="texto">Procure seu elemento:</span>

		</header>


		<section>
			
		<center><h2>Tabela Periódica</h2></center><br><br>

		<div class="container">

			<!-- Começo da Tabela Periódica -->
			<!-- Inicio de Linha de Elementos -->
			<div class="row">

					
				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                          $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` = 1";
		                             
		                           foreach($pdo->query($sqlElementos) as $rowElemento)
		                           {

		                    ?>



			<div class="col-md-1 col-xs-18">
			<article data-toggle="modal" data-target="#exampleModal" data-name="nao-metais" class="nao-metais"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>

			</div>

				<?php 
					
				       }

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->

		                    <!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                           $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` = 2";
		                             
		                           foreach($pdo->query($sqlElementos) as $rowElemento)
		                           {

		                    ?>
					
			<div class="col-md-1 col-xs-18 col-md-offset-16">
			<article data-toggle="modal" data-target="#exampleModal" data-name="gases-nobres" data-target="#<?php echo $rowElemento['id_elemento']; ?>" class="gases-nobres"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>

				<?php 
					
				       }

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
		                        
			</div>
			<!-- Fim de Linha de Elementos -->

			<!-- Inicio de Linha de Elementos -->
			<div class="row">

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                         $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 3  AND  `elementos`.`id_elemento` <= 4 ";
		                             
		                         foreach($pdo->query($sqlElementos) as $rowElemento)
		                         {

		                    ?>


			<div class="col-md-1 col-xs-18">
			<article data-toggle="modal" data-target="#exampleModal" class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
									
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
									
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
									
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
									
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
									
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
									
					}else{

						echo"actinidios";

					       }

				?>" 

				<?php

				 $condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	 foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	 {
				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php

				 	 }

				  ?>

			><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>

				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
					
					<!-- Offset para ajustar-->
			<div class="col-md-1 col-xs-18 col-md-offset-10">
					<!-- Foreach(PHP) do offset precisa ser isolado -->

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php


		                       $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 3  AND  `elementos`.`id_elemento` = 5 ";
		                             
		                       foreach($pdo->query($sqlElementos) as $rowElemento)
		                       {

		                       

				?>


			<article data-toggle="modal" data-target="#exampleModal" data-name="semi-metais" class="semi-metais"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>

						

				<?php 

					}

				?>
				<!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
			</div>

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

					$sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 6  AND  `elementos`.`id_elemento` <= 10 ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {


				?>

			<div class="col-md-1 col-xs-18">

			<article data-toggle="modal" data-target="#exampleModal" 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{
				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>
			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>
						
				<?php 

					}

				?>
				<!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
			</div>
			<!-- Fim de Linha de Elementos -->

			<!-- Inicio de Linha de Elementos -->
			<div class="row">

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

					$sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 11 AND `elementos`.`id_elemento` <= 12";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {


				?>

			<div class="col-md-1 col-xs-18">
			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{

				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php

					}

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>
					
				<?php 

					}

				?>
				<!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
					
			<!-- Foreach do offset novamente isolado  -->
			<div class="col-md-1 col-xs-18 col-md-offset-10">

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

					$sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` = 13";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {


				?>

			<article data-name="metais-representativos" class="metais-representativos"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>

				<?php 

					}

				?>
				<!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->

			</div>

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

					$sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 14 AND  `elementos`.`id_elemento` <= 18";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {


				?>


			<div class="col-md-1 col-xs-18">

			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{

				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="
				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>

				<?php 

					}

				?>
				<!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
					
			</div>
			<!-- Fim de Linha de Elementos -->

				
			<!-- Inicio de Linha de Elementos -->
			<div class="row">

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 19 AND  `elementos`.`id_elemento` <=36  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                    ?>

			<div class=" col-md-1 col-xs-18">

			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            		foreach($pdo->query($sqlTipos) as $rowTipo)
		                            		{

				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>
					
				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
		          </div>
		          <!-- Fim de Linha de Elementos -->

			<!-- Inicio de Linha de Elementos -->
			<div class="row">

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 37 AND  `elementos`.`id_elemento` <= 54  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                    ?>


			<div class="col-md-1 col-xs-18">
			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{

				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>

				<?php 
					
					}

		                    ?>
		                    	<!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
		                        
			</div>
			<!-- Fim de Linha de Elementos -->

			<!-- Inicio de Linha de Elementos -->
			<div class="row"> 

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 55 AND  `elementos`.`id_elemento` <= 56  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                    ?>


			<div class="col-md-1 col-xs-18">
			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{
				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>
					
				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->

			<div class="col-md-1 col-xs-18">

			<article data-name="lantanidios" class="lantanidios"><small class="numero">57-71</small><br><br><b class="principal">*</b></article>
			</div>

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 57 AND  `elementos`.`id_elemento` <= 71  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                    	?>

			<div class="col-md-1 col-xs-18">

			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{

				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>
					
				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
			</div>
			<!-- Fim de Linha de Elementos -->

			<!-- Inicio de Linha de Elementos -->
			<div class="row">

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 72 AND  `elementos`.`id_elemento` <= 73  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                    	?>

			<div class="col-md-1 col-xs-18">
			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{

				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>

				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->


			<div class="col-md-1 col-xs-18">
			<article data-name="actinidios" class="actinidios"><small class="numero">89-103</small><br><br><b class="principal">**</b><br></article>
			</div>

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 74 AND  `elementos`.`id_elemento` <= 88  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                    	?>
					
			<div class="col-md-1 col-xs-18">
			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{
				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>

				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
				
			</div>
			<!-- Fim de Linha de Elementos -->
		<br>

			<!-- Inicio de Linha de Elementos -->
			<div class="row">
			<div class="col-md-1 col-xs-18 col-md-offset-3">

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

					$sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` = 89";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {


				?>

			<article data-name="lantanidios" class="lantanidios"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>

				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->		

			</div>

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
		                    <?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 90 AND  `elementos`.`id_elemento` <= 103  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                    	?>

			<div class="col-md-1 col-xs-18">
			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{

				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>

				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
		                    	
			</div>
			<!-- Fim de Linha de Elementos -->

			<!-- Inicio de Linha de Elementos -->
			<div class="row">
			<div class="col-md-1 col-xs-18 col-md-offset-3">

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
				<?php 

					$sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` = 104";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {


				?>

			<article data-name="actinidios" class="actinidios"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>


				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
		                    		
			</div>

				<!-- Select do Banco de Dados para deixar os elementos dinâmicos -->
		                    <?php 

		                             $sqlElementos = " SELECT * FROM `elementos` WHERE `elementos`.`id_elemento` >= 105 AND  `elementos`.`id_elemento` <= 118  ";
		                             
		                             foreach($pdo->query($sqlElementos) as $rowElemento)
		                             {

		                    	?>

		                    	
			<div class="col-md-1 col-xs-18">
			<article 

				<?php

					$condicao = $rowElemento['id_tipo' ];

					$sqlTipos = " SELECT * FROM `tipos_de_elementos` WHERE `tipos_de_elementos`.`id_tipo` = $condicao";

		                            	foreach($pdo->query($sqlTipos) as $rowTipo)
		                            	{
						 
				?>

			data-name="<?php echo $rowTipo['tipo']; ?>"
						 
				<?php 

					} 

				?>

			class="

				<?php

					if ($rowElemento['id_tipo' ] == 1 ){

						echo"nao-metais";

					}elseif($rowElemento['id_tipo' ] == 2 ){

						echo"semi-metais";

					}elseif($rowElemento['id_tipo' ] == 3){

						echo"gases-nobres";

					}elseif($rowElemento['id_tipo' ] == 4){

						echo"halogenios";
						
					}elseif($rowElemento['id_tipo' ] == 5){

						echo"metais-alcalinos";
						
					}elseif($rowElemento['id_tipo' ] == 6){

						echo"metais-representativos";
						
					}elseif($rowElemento['id_tipo' ] == 7){

						echo"metais-alcalino-terrosos";
						
					}elseif($rowElemento['id_tipo' ] == 8){

						echo"metais-de-transicao";
						
					}elseif($rowElemento['id_tipo' ] == 9){

						echo"lantanidios";
						
					}else{

						echo"actinidios";

					}

				?>

			"><small class="numero"><?php  echo  $rowElemento['numero']; ?></small><br><b class="principal"><?php  echo  $rowElemento['label']; ?></b><br><small class="nome"><?php  echo  $rowElemento['nome']; ?></small></article>
			</div>

				<?php 
					
					}

		                    ?>
		                    <!-- Fim do Select do Banco de Dados para deixar os elementos dinâmicos -->
					
			</div>
			<!-- Fim de Linha de Elementos -->

			<!-- Fim da Tabela Periódica -->
		<br>


			<div class="hub">
				<ul>
					<li id="nao-metais"><img src="imagens/verde.png" width="20" height="20">Não-metais</li>
					<li id="semi-metais"><img src="imagens/verde-escuro.png" width="20" height="20">Semi-metais</li>
						
				</ul>
				<ul class="ul-margin-left">
					<li id="gases-nobres"><img src="imagens/azul.png" width="20" height="20">Gases Nobres</li>
					<li id="halogenios"><img src="imagens/azul-claro.png" width="20" height="20">Halogênios</li>
						
				</ul>
				<ul class="ul-margin-left">
					<li id="metais-alcalinos"><img src="imagens/laranja.png" width="20" height="20">Metais alcalinos</li>
					<li id="metais-representativos"><img src="imagens/cinza.png" width="20" height="20">Metais representativos</li>
						
				</ul>
				<ul class="ul-margin-left">
					<li id="metais-alcalino-terrosos"><img src="imagens/amarelo.png" width="20" height="20">Metais alcalino-terrosos</li>
					<li id="metais-de-transicao"><img src="imagens/rosa.png" width="20" height="20">Metais de transição</li>
				</ul>
				<ul class="ul-margin-left">
					<li id="lantanidios"><img src="imagens/roxo.png" width="20" height="20">Lantanídeos</li>
					<li id="actinidios"><img src="imagens/marrom.png" width="20" height="20">Actinídeos</li>

				</ul>

			</div>
		</div>

		</section><br>
		
		<!-- Modais Dinâmicos -->

		<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color: black;">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">BISCOITO</h5>
					          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
					          </button>
					</div>
					<div class="modal-body">
			
					        BOLINHO

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" data-dismiss="modal">Back</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Fim dos Modais -->

		<footer>
			<h2 class="footer">CopyRight | Guilherme,Thiago & Miguel</h2>
		</footer>

		<!-- Scripts para Bootstrap -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    		<script src="js/bootstrap.min.js"></script>

    		<script src="js/script.js"></script>

	    	<script>

	    		$('#myModal').on('shown.bs.modal', function () {
			  $('#myInput').trigger('focus')
			})

		</script>

	</body>
</html>
