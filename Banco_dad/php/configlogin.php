<?php
session_start();

//print_r($_REQUEST); //confirmar se envia dados
if(isset($_POST['submit']) && !empty($_POST['email'])&& !empty($_POST['senha']))

{
    //ACESSAR O SISTEMA

include_once('config.php');
$email= $_POST['email'];
$senha= $_POST['senha'];

/*print_r('email:'. $email);
print_r('<br>');
print_r('senha' .$senha);*/
$sql= "SELECT * FROM cad_usuarios WHERE email= '$email' and senha = '$senha'";
$result= $conexao-> query($sql);

   if (mysqli_num_rows($result)<1){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: ../php/login.php');

    }else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: ../php/sistema.php');
    }

}else{
    //não acessa
header('location: ../php/login.php'); 

}
?>