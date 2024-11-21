<?php
include "../../banco/conexoes/conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome_completo = $_POST['nome_completo'];
    $nome_de_usuario = $_POST['nome_de_usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO usuario (nome_completo, nome_de_usuario, email, senha, telefone, tipo_usuario) VALUES ('$nome_completo', '$nome_de_usuario', '$email', '$senha', '$telefone', 'Cliente')";

    if ($conexao->query($sql) === TRUE) {
        echo "<div style='color: green;'>Cadastro realizado com sucesso!</div>";
        header("Location: criar-solicitacao.php");
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
    <link rel="stylesheet" href="../visual/styles/styles.css">
    <link rel="website icon" type="png" href="../visual/imagens/simbolo-cadastro.png">
    <script defer src="../scripts/cadastro.js"></script>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <section>
        <form method="POST" class="block">
            <div>
                <label for="nome_completo">Nome completo:</label>
                <input type="text" name="nome_completo">
            </div>
            <div>
                <label for="nome_de_usuario">Nome de usuário:</label>
                <input type="text" name="nome_de_usuario">
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="telefone">Telefone:</label>
                <input type="number" name="telefone">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha">
            </div>
            <div>
                <input type="Submit" value="enviar">
            </div>
        </form>
    </section>
</body>
</html>