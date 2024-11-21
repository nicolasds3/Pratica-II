<?php
include "../../banco/conexoes/conexao.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['form_data'] = $_POST;

    $nome_completo = $_SESSION['form-data']['nome_completo'];
    $nome_de_usuario = $_SESSION['form-data']['nome_de_usuario'];
    $email = $_SESSION['form-data']['email'];
    $senha = $_SESSION['form-data']['senha'];
    $telefone = $_SESSION['form-data']['telefone'];
    $tipo_usuario = $_SESSION['form-data']['tipo_usuario'];

    $sql = "INSERT INTO usuario (nome_completo, nome_de_usuario, email, senha, telefone, tipo_usuario) VALUES ('$nome_completo', '$nome_de_usuario', '$email', '$senha', '$telefone', '$tipo_usuario')";

    if ($conexao->query($sql) === TRUE) {
        echo "<div style='color: green;'>Cadastro realizado com sucesso!</div>";
        header("Localion: login.php");
        exit();
    } else {
        echo "<div style='color: red;'>Erro:" . $conexao->error . "</div>";
    }
}

$conexao->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Faça cadastro/login</title>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
        <link rel="stylesheet" href="../visual/styles/styles.css">
        <link rel="website icon" type="png" href="../visual/imagens/simbolo-cadastro.png">
        <script defer src="../scripts/cadastro.js"></script>
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="section">
    	    <div class="container">
    			<div class="row full-height justify-content-center">
    				<div class="col-12 text-center align-self-center py-5">
    					<div class="section pb-5 pt-5 pt-sm-2 text-center">
    						<h6 class="mb-0 pb-3"><span>Login </span><span>Cadastrar</span></h6>
    			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
    			          	<label for="reg-log"></label>
    						<div class="card-3d-wrap mx-auto">
    							<div class="card-3d-wrapper">
    								<div class="card-front ajuste">
    									<div class="center-wrap">
    										<div class="section text-center">
    											<h4 class="mb-4 pb-3">Login</h4>
    											<div class="form-group">
    												<input type="email" name="logemail" class="form-style" placeholder="Seu Email/Nome de Usuário" id="logemail" autocomplete="off">
    												<i class="input-icon uil uil-at"></i>
    											</div>	
    											<div class="form-group mt-2">
    												<input type="password" name="logpass" class="form-style" placeholder="Sua senha" id="logpass" autocomplete="off">
    												<i class="input-icon uil uil-lock-alt"></i>
    											</div>
    											<a href="#" class="btn mt-4">Continue</a>
                                				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Esqueceu sua senha?</a></p>
    				      					</div>
    			      					</div>
    			      				</div>
    								<div class="card-back ajuste">
    									<div class="center-wrap">
    										<div class="section text-center">
    											<h4 class="mb-4 pb-3">Cadastrar</h4>
                                                <form action="" method="POST">
    											    <div class="form-group">
    											    	<input type="text" name="nome_completo" class="form-style" placeholder="Seu nome completo" id="logname" autocomplete="off">
    											    	<i class="input-icon uil uil-user"></i>
    											    </div>	
                                                    <div class="form-group">
    											    	<input type="text" name="nome_de_usuario" class="form-style" placeholder="Seu nome de usuário" id="logname" autocomplete="off">
    											    	<i class="input-icon uil uil-user"></i>
    											    </div>	
    											    <div class="form-group mt-2">
    											    	<input type="email" name="email" class="form-style" placeholder="Seu email" id="logemail" autocomplete="off">
    											    	<i class="input-icon uil uil-at"></i>
    											    </div>	
                                                    <div class="form-group">
    											    	<input type="text" name="telefone" class="form-style" placeholder="Seu telefone/celular" id="logname" autocomplete="off">
    											    	<i class="input-icon uil uil-user"></i>
    											    </div>	
    											    <div class="form-group mt-2">
    											    	<input type="password" name="senha" class="form-style" placeholder="Sua senha" id="logpass" autocomplete="off">
    											    	<i class="input-icon uil uil-lock-alt"></i>
    											    </div>
    											    <a href="#" class="btn mt-4">Cadastrar</a>
                                                </form>
    				      					</div>
    			      					</div>
    			      				</div>
    			      			</div>
    			      		</div>
    			      	</div>
    		      	</div>
    	      	</div>
    	    </div>
    	</div>
    </body>
</html>