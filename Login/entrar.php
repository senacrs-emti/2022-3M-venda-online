<?php

/* Conexão com o DB para fazer o Login de Usuário */

$Email = $_POST['Email'];
$Senha = md5($_POST['Senha']);
$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'script');
  // if (isset($entrar)) {

  //   $verifica = mysqli_query("SELECT * FROM logindeusuario WHERE Email =
  //   '$Email' AND Senha = '$Senha'") or die("erro ao selecionar");
  //     if (mysql_num_rows($verifica)<=0){
  //       echo"<script language='javascript' type='text/javascript'>
  //       alert('Login e/ou senha incorretos');window.location
  //       .href='login.php';</script>";
  //       die();
  //     }else{
  //       setcookie("Login",$Email);
  //       header("Location:index.php");
  //     }
  // }

  // header("location: ../Login/Perfil/index.php")

$verifyEmail = mysqli_query($conn ,"SELECT * FROM logindeusuario WHERE Email = '$Email'");
$verifyPassworld = mysqli_query($conn, "SELECT * FROM logindeusuario WHERE Senha = '$Senha'");



  if (mysqli_num_rows($verifyEmail)) {
    exit("4");
} else {
   if (mysqli_num_rows($verifyPassworld)) {
       exit("5");
   } else {
    // setcookie("Login",$Email);
    // header("location: ../Login/Perfil/index.php");
    exit("Teste");
   }
  }

?>