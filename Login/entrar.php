<?php

// site de ajuda https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php

session_start();

/* Conexão com o DB para fazer o Login de Usuário */

// $Email = $_POST['Email'];
// $Senha = md5($_POST['Senha']);

$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn,'script');

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("Login\Perfil\index.php");
  exit;
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT IDUsuario, Senha, NomeDeUsuario FROM logindeusuario WHERE Email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['Email']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password, $username);
    $stmt->fetch();
    // Account exists, now we verify the password.
    // Note: remember to use password_hash in your registration file to store the hashed passwords.
    if (password_verify($_POST['Senha'], $password)) {
      // Verification success! User has logged-in!
      // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
      session_regenerate_id();
      $_SESSION['loggedin'] = true;
      $_SESSION['name'] = $username;
      $_SESSION['email'] = $_POST['Email'];
      $_SESSION['id'] = $id;
      echo 'Welcome ' . $_SESSION['name'] . '!';
      header("location: Perfil\index.php");
    } else {
      // Incorrect password
      echo 'Incorrect username and/or password!';
      echo 'email: ' . $_POST['Email'] . '<br>password: ' . $_POST['Senha'];   
    }
  } else {
    // Incorrect username
    echo 'Incorrect username and/or password!';
  }
	$stmt->close();
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