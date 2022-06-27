<?php

// site de ajuda https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

session_start();

/* Conexão com o DB para fazer o Login de Usuário */

// $Email = $_POST['Email'];
// $Senha = md5($_POST['Senha']);

$email = $password = "";

$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'script');

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("Login\Perfil\index.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// checar se email esta vazio
  if (empty(trim($_POST["Email"]))) {
    $email_err = "Por favor, digite um Email";
  } else {
    $email = trim($_POST["Email"]);
  }
// checar se senha esta vazia
  if (empty(trim($_POST["Senha"]))) {
    $password_err = "Por favor, digite uma senha";
  } else {
    $password = $_POST["Senha"];
  }
  
  if (empty($email_err) && empty($password_err)) {
    $sql = "SELECT IDUsuario, NomeDeUsuario, Email, Senha FROM users WHERE NomeDeUsuario = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){

      mysqli_smtm_bind_param($stmt, "s", $param_email);

      $param_email = $email;

      if (mysqli_stmt_execute($stmt)) {
        
        mysqli_stmt_store_result($stmt);
        
        if (mysqli_stmt_num_rows($stmt) == 1) {
          
          mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);

          if (mysqli_stmt_fetch($stmt)) {
            if (password_verify($password, hashed_password)) {
              
              session_start();

              $_SESSION["loggedin"] = true;
              $_SESSION["IDUsuario"] = $id;
              $_SESSION["Email"] = $email;

              header("location: Login\Perfil\index.php");
            } else {

              $login_err = "Usuário ou senha invalida";
            }
          }
        } else {
          $login_err = "Usuário ou senha invalida";
        }
      } else {
        echo "Ops! Algo deu errado, tente novamente mais tarde.";
      }

      mysqli_stmt_close($stmt);
    }
  }
  
  mysqli_close($conn);
}






































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

  

?>