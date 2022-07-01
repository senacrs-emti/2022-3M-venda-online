<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imagens/gremio.png">
    <title>Base do Grêmio</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000; width: 100%;">
  <a class="navbar-brand" href="index.php"><img src="./imagens/basegremio.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="ingressos.php">Ingressos <span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadeiras.php">Cadeiras</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Notícias</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="Login/login.php">
    <button class="button2" type="submit" href="login.php">👤 Entrar</button>
    </form>
  </div>
</nav>


<div class="container-fluid">
<div class="row">
    <section class="section-1">
      <div class="img-container">
        <br>
        <img src="imagens\arenagremio.jpg" alt="Imagem da arena do Grêmio">
        </br>
        <div class="img-shadow">
        </div>
      </div>
      <div class="text-container">
        <h4>Garanta seus ingressos para os jogos e shows na loja mais <span>original</span> e <span>profissional</span> do <span>Grêmio</span>!</h4>
      </div>
    
    </section>
</div>
<br>
<h2>Próximos Jogos</h2>
<br>
<div class="container">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="imagens/gremioxnovo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <a class="ingressocompra" href="gremioxnovo.php">
          <button type="button" class="btn btn-primary btn-lg btn-block">INGRESSOS</button>
        </a>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="card">
        <img src="imagens/gremioxsampaio.png" class="card-img-top" alt="...">
        <div class="card-body">          <a class="ingressocompra" href="gremioxsamp.php">
          <button type="button" class="btn btn-primary btn-lg btn-block">INGRESSOS</button>
        </a>
        </div>
      </div>
    </div>
  </div>
</div>    
</div>

<br>
<br>
<div class="container">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="imagens/gremioelondrina.png" class="card-img-top" alt="...">
        <div class="card-body">          <a class="ingressocompra" href="gremioxlondrina.php">
          <button type="button" class="btn btn-primary btn-lg btn-block">INGRESSOS</button>
        </a>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="card">
        <img src="imagens/gremioxnautico.png" class="card-img-top" alt="...">
        <div class="card-body">          <a class="ingressocompra" href="gremioxnaut.php">
          <button type="button" class="btn btn-primary btn-lg btn-block">INGRESSOS</button>
        </a>
        </div>
      </div>
    </div>
  </div>
</div>    
</div>
</br>
</br>


  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<footer>
  <div class="logotipo">
    <a href="https://arenapoa.com.br/" target="blank"> <img src="imagens/arena.png"></a>
  </div>
  

  <nav class="redes">
    <p>Acompanhe os canais da Arena:</p>
    

<ul>
  <li><a href="https://www.facebook.com/todosnaarena" target="blank"> <img src="imagens/facebook.png"></a></li>
  <li><a href="https://www.instagram.com/todosnaarena/?hl=pt-br" target="blank"><img src="imagens/instagram.png"></a></li>
  <li><a href="https://twitter.com/todosnaarena" target="blank"><img src="imagens/twitter.png"></a></li>
</ul>
</nav>





</footer>
</html>