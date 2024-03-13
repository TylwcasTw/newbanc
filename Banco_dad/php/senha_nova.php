 <?php /*
  
 $novaSenha = $_POST['nova_senha'];

    // Adicione a lógica de envio de email de recuperação de senha aqui.
    // Isso pode envolver a geração de um token único, envio de e-mail e
    // armazenamento temporário do token no banco de dados.

    // Exemplo básico (substitua pela lógica real):
    echo "Um email de recuperação foi enviado para $email.";
*/
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Senha</title>
    <link rel="stylesheet" href="../Css/Styles.css">
</head>
<body>
    <div class="container">
        <form action="esqueceu_senha.php" method="POST">
            <h1>Nova Senha</h1>
            <label for="nova_senha">Nova Senha:</label>
            <input type="nova_senha" name="nova_senha" required>

            <label for="confi_nova_senha">Confirmar Senha</label>
            <input type="confi_nova_senha" name="confi_nova_senha" required>
            <button type="submit">Recuperar conta</button>
            <a href="../php/login.php"> Fazer Login 

        </form>
    </div>
</body>