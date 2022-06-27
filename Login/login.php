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
      <form method="POST" action="">
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