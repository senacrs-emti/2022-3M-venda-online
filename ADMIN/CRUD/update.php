<?php 
include "db_conn.php";
$id = $_GET['id'];
$sql = "SELECT * FROM logindeusuario WHERE IDUsuario = {$id}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Atualizar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Atualizar</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="Nome">Nome</label>
		     <input type="Nome" 
		           class="form-control" 
		           id="Nome" 
		           name="Nome" 
		           value="<?php echo $row['Nome'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="Email">Email</label>
		     <input type="Email" 
		           class="form-control" 
		           id="Email" 
		           name="Email" 
		           value="<?=$row['Email'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Atualizar</button>
		    <a href="read.php" class="link-primary">Ver</a>
	    </form>
	</div>
</body>
</html>