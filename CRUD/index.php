<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/create.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Criar</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="Nome">Nome</label>
		     <input type="name" 
		           class="form-control" 
		           id="Nome" 
		           name="Nome" 
		           value="<?php if(isset($_GET['Nome']))
		                           echo($_GET['Nome']); ?>" 
		           placeholder="Digite seu Nome">
		   </div>

		   <div class="form-group">
		     <label for="Email">Email</label>
		     <input type="Email" 
		           class="form-control" 
		           id="Email" 
		           name="Email" 
		           value="<?php if(isset($_GET['Email']))
		                           echo($_GET['Email']); ?>"
		           placeholder="Digite seu Email">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Criar</button>
		    <a href="read.php" class="link-primary">Ver</a>
	    </form>
	</div>
</body>
</html>