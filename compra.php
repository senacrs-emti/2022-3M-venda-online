<?php include_once 'compratopo.php'; ?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compra.css">

</head>

<body>

<div class="container-fluid">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">Seu endereço</h3>

                <div class="inputBox">
                    <span>Nome completo :</span>
                    <input type="text" placeholder="Seu nome">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="exemplo@exemplo.com">
                </div>
                <div class="inputBox">
                    <span>Endereço :</span>
                    <input type="text" placeholder="Localização">
                </div>
                <div class="inputBox">
                    <span>Cidade :</span>
                    <input type="text" placeholder="Porto Alegre">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Estado :</span>
                        <input type="text" placeholder="RS">
                    </div>
                    <div class="inputBox">
                        <span>CEP :</span>
                        <input type="text" placeholder="000000-000">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Pagamento</h3>

                <div class="inputBox">
                    <span>Cartões aceitos :</span>
                    <img src="imagens/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nome no cartão :</span>
                    <input type="text" placeholder="Seu nome">
                </div>
                <div class="inputBox">
                    <span>Número no cartão :</span>
                    <input type="number" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>Data de vencimento :</span>
                    <input type="month" placeholder="Mês">
                </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
            <button type="submit" class="cssbuttons-io-button"> Continuar com a compra
  <div class="icon">
    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path></svg>
  </div>
</button>
        </div>

    </form>

</div>    
<script src="compra.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal({
  title: "Compra feita!",
  text: "Seus dados foram surrupiados!",
  icon: "success",
});
</script>

</body>

<?php include 'footer.php'; ?> 