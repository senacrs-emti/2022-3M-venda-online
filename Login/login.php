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
              echo "erro";
              exit("4");
            }
          }
        } else {
          echo "erro";
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

?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="login.css">
  <link rel="icon" href="images/gremio.png">
</head>

<body>

  <div class="main">

    <input type="checkbox" id="chk" aria-hidden="true" onchange="transformPopUp(this)">

    <div class="signup">
      <!-- Cadastro de Usuário!-->
      <div for="chk" class="popup-user" id="popupUser">
        <span class="close-button material-symbols-outlined" onclick="closePopupUser()">close</span>
        <span id="innerText"></span>
      </div>
      <form method="POST" action="javascript:void(0);">

        <label for="chk" aria-hidden="true">Cadastrar</label>
        <input type="text" id="NomeDeUsuario" name="NomeDeUsuario" placeholder="Nome de Usuário" required>
        <input type="Email" id="Email" name="Email" placeholder="Email" required>
        <input type="password" id="Senha" name="Senha" placeholder="Senha" required>
        <button id="btCadastro">Cadastro</button>
      </form>
    </div>

    <div class="login">
      <!-- Login de Usuário!-->
      <form method="POST" action="entrar.php">
        <label for="chk" aria-hidden="true">Login</label>
        <input type="email" id="EmailL" name="Email" placeholder="Email" required>
        <input type="password" id="SenhaL" name="Senha" placeholder="Senha" required>
        <button id="login" name="login">Login</button>
      </form>
    </div>
  </div>
  <script>
  </script>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="../script.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  
</body>

</html>