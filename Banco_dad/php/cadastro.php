<?php
if (isset($_POST['submit'])){ 
include_once('config.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$confi_senha = $_POST['confi_senha'];

$result = mysqli_query($conexao, "INSERT INTO cad_usuarios(nome,email,telefone,senha,confi_senha) VALUES ('$nome','$email','$telefone','$senha','$confi_senha')");
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Cadastro</title>
  <link rel="stylesheet" href="../Css/styles.css">
</head>

<body>

  <form action  = "cadastro.php" method = "post">
  <h1 for="cadastro">cadastro</h1>
   
  <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>


    <label for="telefone">Telefone:</label>
    <input type="texto" id="telefone" name="telefone" required>


    <label for="senha">Senha:</label>
    <input type="texto" id="senha" name="senha" required>

    <label for="confi_senha">Confirmar Senha:</label>
    <input type="texto" id="conf_senha" name="confi_senha" required>

    <button type="submit" name="submit" class="submit">Enviar</button>
    <!-- botão/link -->  
    <p> Já tem uma conta? </p>
    <a href = "login.php"> Então clique aqui! </a>  

  </form>

</body>

</html>