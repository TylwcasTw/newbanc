<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["loginEmail"];
    $senha = $_POST["loginSenha"];


if($email == 'usuario' && $senha =='senha'){
    echo "login bem sucedido!";
   } else {
    echo "Falha no Login. Verifeque se as credenciais foram digitadas corretamente.";
}
} */
?>



<!DOCTYPE html>
<html long="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, iitial-scale=1.0">
    <title>login</title>
    <link rel= "stylesheet" href="../Css/Styles.css"/>

    

    </style>
    <link rel="stylesheet" href="../Css/styles.css">
</head>
<body>
    <div class="container">
        <form action ="configlogin.php" method="POST">
        <h1>login<h1>
            <label for ="email">email:</label>
            <input type="email" name="email" placeholder = "Digite seu Email" autofocus ="true" requires>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" placeholder = "Digite sua Senha" requires>

            <input type="submit" name="submit" value="Acessar" class="btn" />
            <a href="esqueci_senha.php">Esqueci minha senha</a>
           
            <p> Não tem uma conta? </p>
    <a href = "../php/cadastro.php"> Então clique aqui! </a>  
        </form>
    </div>
</body>
</html>

            