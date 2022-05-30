<!-- HTML usado para fazer a base do Formulário de Login/Cadastro de Usuário !-->

<!DOCTYPE html>
<html>
<head>
	<title>Login Teste</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link rel="stylesheet" href="login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup"> <!-- Cadastro de Usuário!-->
				<form method="POST" action="cadastro.php">
					<label for="chk" aria-hidden="true">Cadastrar</label>
					<input type="text" name="NomeDeUsuario" placeholder="Nome de Usuário" required="">
					<input type="Email" name="Email" placeholder="Email" required="">
					<input type="password" name="Senha" placeholder="Senha" required="">
					<button href="Perfil/index.php">Cadastro</button>
				</form>
			</div>
 
			<div class="login"> <!-- Login de Usuário!-->
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="password" name="Senha" placeholder="Senha" required="">
					<button name="login" href="Perfil/index.php">Login</button>
				</form>
			</div>
	</div>
</body>
</html>