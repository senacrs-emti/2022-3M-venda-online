<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$NomeDeUsuario = validate($_POST['Nome']);
	$Email = validate($_POST['Email']);

	$user_data = 'Nome='.$NomeDeUsuario. '&Email='.$Email;

	if (empty($NomeDeUsuario)) {
		header("Location: ../index.php?error=Nome é necessário&$user_data");
	}else if (empty($Email)) {
		header("Location: ../index.php?error=Email é necessário&$user_data");
	}else {

       $sql = "INSERT INTO logindeusuario(NomeDeUsuario, Email) 
               VALUES('$NomeDeUsuario', '$Email')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=Criado com Sucesso!");
       }else {
          header("Location: ../index.php?error=unknown error occurred&$user_data");
       }
	}

}