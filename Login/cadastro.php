<?php
/* Conexão com o DB para fazer o cadastro de Usuário */


$NomeDeUsuario = $_POST['NomeDeUsuario'];
$Email = $_POST['Email'];
$Senha = ($_POST['Senha']);
$conn = mysqli_connect("localhost", "root", "");
$dbname = "script";    
$passwordHashed = password_hash($Senha, PASSWORD_DEFAULT);

$db = mysqli_select_db($conn, $dbname);

$sql = "SELECT Email FROM logindeusuario WHERE Email = '$Email'";
$result = mysqli_query($conn,$sql);
$array = mysqli_fetch_array($result);

$verifyUser = mysqli_query($conn, "SELECT * FROM logindeusuario WHERE NomeDeUsuario = '$NomeDeUsuario'");
$verifyEmail = mysqli_query($conn ,"SELECT * FROM logindeusuario WHERE Email = '$Email'");

if ($NomeDeUsuario == "") {
    exit("4");
} else {
    if ($Email == "") {
        exit("5");
    } else {
        if ($Senha == "") {
            exit("6");
        } else {
            if (mysqli_num_rows($verifyUser) > 0) {
                exit("1");
           } else {
               if (mysqli_num_rows($verifyEmail) > 0) {
                   exit("2");
               } else {
                   $query = "INSERT INTO logindeusuario (NomeDeUsuario,Email,Senha) VALUES ('$NomeDeUsuario','$Email','$passwordHashed')";
                   $insert = mysqli_query($conn,$query);
                   exit("3");
               }    
           }
        }
        
    }
    
}

?>

