<?php

/* Conexão com o DB para fazer o Login de Usuário */

$Email = $_POST['Email'];
$login = $_POST['login'];
$Senha = md5($_POST['Senha']);
$conn = mysqli_connect('script','root','');
$db = mysqli_select_db('script');
  if (isset($entrar)) {

    $verifica = mysqli_query("SELECT * FROM logindeusuario WHERE Email =
    '$Email' AND Senha = '$Senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.php';</script>";
        die();
      }else{
        setcookie("Login",$Email);
        header("Location:login.php");
      }
  }

  header('location: ../Login/Perfil/index.php');

?>