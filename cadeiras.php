<?php include 'compratopo.php'  
?>
<br>
<br>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Alguma ação</a>
    <a class="dropdown-item" href="#">Outra ação</a>
    <a class="dropdown-item" href="#">Alguma coisa aqui</a>
  </div>

    <div class="movie-container">
      <label> Selecione um Assento:</label>
      <select id="movie">
        <option value="220">Grêmio x Novorizontino</option>
        <option value="320">Grêmio x Sampaio Corrêa</option>
        <option value="250">Grêmio x Londrina</option>
        <option value="260">Grêmio x Náutico</option>
      </select>
    </div>
  
    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small class="letra" >Disponível</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small class="letra" >Selecionada</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small class="letra" >Vendidas</small>
      </li>
    </ul>
    <div class="container">
      <div class="row">
        <div class="seat" style="margin-right: 10px; margin-left: 390px;"
        ></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>

      <div class="row">
        <div class="seat" style="margin-right: 10px; margin-left: 390px;"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat" style="margin-right: 10px; margin-left: 390px;"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat" style="margin-right: 10px; margin-left: 390px;"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat" style="margin-right: 10px; margin-left: 390px;"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat" style="margin-right: 10px; margin-left: 390px;"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
      </div>
    </div>

    <p class="text">
      Você selecionou <span id="count">0</span> assentos por R$ <span
        id="total"
        >0</span
      >
    </p>

    <a class="fancy" href="compra.php">
  <span class="top-key"></span>
  <span class="text">Comprar</span>
  <span class="bottom-key-1"></span>
  <span class="bottom-key-2"></span>
</a>

    <script src="cadeiras.js"></script>
  </body>
  

  
  
  
  
  
<?php include './includes/footer.php' ?>