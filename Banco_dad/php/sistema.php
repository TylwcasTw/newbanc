<?php
session_start();
if((!isset($_SESSION['email']) == true) and(!isset($_SESSION['senha'])== true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../php/login.php'); 
}else{
    
    $logado = $_SESSION ['email'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
    <link rel="stylesheet" href="../Css/Sistem.css">
</head>
<body>
   
<div class="navbar">
        <a class="activate" href="#home">Pagina Inicial</a>
        <a href="news">Minha Conta</a>
        <a href="contact">Atendimento</a>
        <a style="float:right" href="sair.php">Sair</a>
    /<div>    
     <div style="padding:20x:">
     <div class="cotent">
     <?php
         echo "<h2>Seja bem vindo ao Sistema <br> $logado </h2>";
     ?>
     </div> 

</body>
