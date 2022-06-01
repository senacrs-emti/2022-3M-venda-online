<?php 

include 'conexao.php';

$d = $_POST['IDUsuario']

SESSION_START();

$l = isset($_SESSION["login_user"])?$_SESSION["login_user"]:""; 

$s = isset($_SESSION["senha_user"])?$_SESSION["senha_user"]:"";

if ($l != "" && $s != "") {
    $dados = mysqli_query($link, "SELECT * FROM logindeusuario WHERE Email - '$l'");
    while ($d = mysqli_fetch_array($dados)) {
        $nome_log = $d['NomeDeUsuario'];
        $email_log = $d['Email'];
        $senha_log = $d['Senha'];
        $capa_log = $d['']
    }
}


?>