<?php
/* Conexão com o DB para fazer o cadastro de Usuário */

$NomeDeUsuario = $_POST['NomeDeUsuario'];
$Email = $_POST['Email'];
$Senha = MD5($_POST['Senha']);
$conn = mysqli_connect("localhost", "root", "");
$dbname = "script";

$db = mysqli_select_db($conn, $dbname);

$sql = "SELECT Email FROM logindeusuario WHERE Email = '$Email'";
$result = mysqli_query($conn,$sql);
$array = mysqli_fetch_array($result);
$logarray = $array['Email'];

$verifyUser = mysqli_query($conn, "SELECT * FROM logindeusuario WHERE NomeDeUsuario = '$NomeDeUsuario'");
$verifyEmail = mysqli_query($conn ,"SELECT * FROM logindeusuario WHERE Email = '$Email'");


if (mysqli_num_rows($verifyUser) !=0) {
     exit("1");
} else {
    if (mysqli_num_rows($verifyEmail) !=0) {
        exit("2");
    } else {
        $query = "INSERT INTO logindeusuario (NomeDeUsuario,Email,Senha) VALUES ('$NomeDeUsuario','$Email','$Senha')";
        $insert = mysqli_query($conn,$query);
        exit("3");
    }    
}



?>

