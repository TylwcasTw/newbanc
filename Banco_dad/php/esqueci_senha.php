
<?php

/* Lógica de recuperação de senha aqui
//if ($_SERVER["localhost"] == "POST") {   
    
    $email = $_POST['email'];

    // Adicione a lógica de envio de email de recuperação de senha aqui.
    // Isso pode envolver a geração de um token único, envio de e-mail e
    // armazenamento temporário do token no banco de dados.

    // Exemplo básico (substitua pela lógica real):
    echo "Um email de recuperação foi enviado para $email.";
}*/
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu Senha</title>
    <link rel="stylesheet" href="../Css/styles.css">
</head>
<body>
    <div class="container">
        <form class= "form" action="esqueceu_senha.php" method="POST">
            <h1>Esqueceu Senha</h1>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <a href="../php/senha_nova.php"> Nova Senha
    </div>
</body>
</html>