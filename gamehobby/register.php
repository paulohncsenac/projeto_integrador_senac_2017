<?php

//Faz a conexão com o banco de dados
require 'banco.php';
$pdo = Banco::conectar();
//Fim da conexão
//Verifica a existência de uma sessão, caso haja, redireciona para o dashboard
session_start();
error_reporting(0);
$var = $_SESSION['name'];
$var2 = $_SESSION['id'];

if ($var != null && $var2 != null) {

    header('Location: areaedicao.html');
    exit;
}

if (!empty($_POST['cadastrar'])) {
    //Acompanha os erros de validação
    $nomeErro = null;
    $emailErro = null;
    $senhaErro = null;


    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = hash('sha256', $_POST['senha']);


    //Validaçao dos campos:
    $validacao = true;
    if (empty($nome)) {
        $nomeErro = 'Por favor digite um nome!';
        $validacao = false;
    }

    if (empty($email)) {
        $telefoneErro = 'Por favor digite o endereço de email';
        $validacao = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Por favor digite um endereço de email válido!';
        $validacao = false;
    }

    if (empty($senha)) {
        $senhaErro = 'Por favor digite uma senha!';
        $validacao = false;
    }



    //Inserindo no Banco:
    if ($validacao) {
        
        //Verifica se existe um e-mail cadastrado no banco referente ao fornecido
        $verificaEmail = $pdo->query(" SELECT * FROM `usuarios` WHERE `email` LIKE '$email'");

        $resultadoVerificacao = $verificaEmail->fetch(PDO::FETCH_OBJ);

        if (!empty($resultadoVerificacao)) {

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
								  <strong>Erro! </strong>E-mail já registrado.
								</div>
		       				</div>
		       			</div>
       			 </div>';

            exit;
            
            //Fim da verificação do e-mail cadastrado no banco referente ao fornecido
            
        } else {



            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES(?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nome, $email, $senha));
            Banco::desconectar();
            header("Location: http://localhost/projeto_integrador_senac_2017/gamehobby/telaLogin.html");
        }
    }
}
?>
