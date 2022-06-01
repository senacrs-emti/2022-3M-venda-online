<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Base do Grêmio</title>
    <link rel="shortcut icon" type="image/x-icon" href="imagens/gremio.png">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000000">
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Para Empresa
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cadeiras.php">Cadeiras</a>
          <a class="dropdown-item" href="camarotes.php">Camarotes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="marca.php">Sua marca na Arena</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="noticias.php">Notícias</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      </form>
    <form class="form-inline my-2 my-lg-0" action="Login/login.php">
    <button class="button2" type="submit" href="login.php">👤 Entrar</button>
    </form>
  </div>
</nav>

<div class="container-fluid">
<div class="row">
    <section class="section-1">
      <div class="img-container">
        <img src="imagens\arenagremio.jpg" alt="Imagem da arena do Grêmio">
        <div class="img-shadow">
        </div>
      </div>
      <div class="text-container">
        <h4>Garanta seus ingressos para os jogos e shows na loja mais <span>original</span> e <span>profissional</span> do <span>Grêmio</span>!</h4>
      </div>
    </section>
</div>

<div class="container">
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="imagens/gremioxnovo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="card">
        <img src="imagens/gremioxsampaio.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
        <img src="imagens/gremioxnovo.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    
    <div class="col">
      <div class="card">
        <img src="imagens/gremioxsampaio.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
</div>    
</div>
</br>
</br>

    
  
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>