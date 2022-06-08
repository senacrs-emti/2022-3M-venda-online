<?php 

include_once 'navbar.php';

?>
<h2>Notícias</h2>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="imagens/noticiagremio.jpg" alt="Imagem de capa do card">
    <div class="card-body">
    <div id="noticia1">
      <h3 class="card-title">Com gols de Diego Souza e Janderson, Grêmio vence Novorizontino na Arena</h3>
    </div>
      <p class="card-text">Com o apoio da torcida tricolor na Arena, que apoiou durante os 90 minutos, o Grêmio conquistou os três ...</p>
      <a class="noticia1" href="noticiaum.php">
          <button type="button" class="btn btn-primary btn-lg btn-block">CONTINUE LENDO</button>
        </a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="imagens/noticia2.jpg" alt="Imagem de capa do card">
    <div class="card-body">
        <div id="noticia2">
      <h3 class="card-title">Grêmio recebe autoridades públicas para cerimônia de apresentação do projeto social "Futuro Suave do Gramado ao Tatame"
</h3>
    </div>
      <p class="card-text">Familiares das crianças e adolescentes participantes também prestigiaram o evento
</p>
<a class="noticia2" href="noticiadois.php">
          <button type="button" class="btn btn-primary btn-lg btn-block">CONTINUE LENDO</button>
        </a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src=".../100px200/" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
      <p class="card-text"><small class="text-muted">Atualizados 3 minutos atrás</small></p>
    </div>
  </div>
</div>

<?php 

include_once 'footer.php';

?>
