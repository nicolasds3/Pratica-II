<?php
include "../../banco/conexoes/conexao.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['form_data'] = $_POST;

    $nome_completo = $_SESSION['form-data']['nome_completo'];
    $nome_de_usuario = $_SESSION['form-data']['nome_de_usuario'];
    $email = $_SESSION['form-data']['email'];
    $senha = $_SESSION['form-data']['senha'];
    $telefone = $_SESSION['form-data']['email'];
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
    <title>Faça cadastro</title>
    <link rel="stylesheet" href="../visual/styles/styles.css">
    <link rel="website icon" type="png" href="../visual/imagens/simbolo-cadastro.png">
    <script defer src="../scripts/cadastro.js"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    
</body>
</html>