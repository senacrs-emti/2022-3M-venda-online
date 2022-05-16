<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM crud WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: read.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$Nome = validate($_POST['Nome']);
	$Email = validate($_POST['Email']);
	$id = validate($_POST['id']);

	if (empty($Nome)) {
		header("Location: ../update.php?id=$id&error=Nome é necessário");
	}else if (empty($Email)) {
		header("Location: ../update.php?id=$id&error=Email é necessário");
	}else {

       $sql = "UPDATE crud
               SET Nome='$Nome', Email='$Email'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=Atualizado com Sucesso!");
       }else {
          header("Location: ../update.php?id=$id&error=Erro desconhecido&$user_data");
       }
	}
}else {
	header("Location: read.php");
}