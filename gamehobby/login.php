<?php

//Faz a conexão com o banco de dados
require 'banco.php';
$pdo = Banco::conectar();
//Fim da chamada conexão
//Verifica a existência de uma sessão, caso haja, redireciona para o dashboard
session_start();
error_reporting(0);
$var = $_SESSION['nome'];
$var2 = $_SESSION['id'];

if ($var != null && $var2 != null) {

    header('Location: areaedicao.php');
    exit;
}
//Fim da verificação
//Inicia o post do formulário de login
if (!empty($_POST['logar'])) {
    
    

    //Captura os dados fornecidos ao post
    $email = $_POST['email'];
    $senha = hash('sha256', $_POST['senha']);
    //Fim da captura
    //Cria uma query para consultar o banco de dados com os dados fornecidos recuperados nas variáveis
    $select = $pdo->query(" SELECT * FROM `usuarios` WHERE `email` LIKE '$email' AND `senha` LIKE '$senha' ");

    //Captura o resultado da query
    $result = $select->fetch(PDO::FETCH_OBJ);
    //Fim da query e fim da captura
    //Testa se a query teve um resultado diferente de nulo
    if (!empty($result)) {

        //Caso o resultado for diferente de nulo, inicia uma sessão e redireciona para o dashboard
        session_start();
        $_SESSION['nome'] = $result->nome;
        $_SESSION['id'] = $result->id;
        header('Location: areaedicao.php');
        exit;
    
        
    } else {

        //Caso o resultado for igual a nulo, retorna um erro
        echo '<html lang="en">
					<head>
					    <meta charset="utf-8">
					    <meta http-equiv="X-UA-Compatible" content="IE=edge">
					    <meta name="viewport" content="width=device-width, initial-scale=1">

					    <title>UNIF</title>
					    <style type="text/css">
					    	.error{color:#a94442 !important;}
					    </style>

					    <!-- Styles -->
					    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
					</head>';
        echo '<div class="container">
       				<div class="row">
       					<div class="col-md-8 col-md-offset-2">
		       				<div class="alert alert-danger alert-dismissable">
								  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								  <strong>Erro! </strong>E-mail ou senha fornecidos são incorretos ou inexistentes.
								</div>
		       				</div>
		       			</div>
       			 </div>';

        exit;
    }
    
    $pdo = Banco::desconectar();

    //Fim do teste do resultado da query
}
?>
