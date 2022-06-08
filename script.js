  // http://devfuria.com.br/javascript/ajax-php-jquery/

  var request = $.ajax({

    //
    // A propriedade `url` é local, arquivo, script, alvo de sua requisição.
    //
    url: "cadastro.php",

    //
    // A propriedade `type` é o verbo HTTP (GET, POST, HEAD, etc...)
    //
    type: "POST",

    //
    // A propriedade `data` são os dados de sua aplicação.
    //
    data: "campo1=dado1&campo2=dado2&campo3=dado3",

    //
    // A propriedade `dataType` refere-se ao tipo de dado que o servidor deve retornar a requisição.
    //
    dataType: "html"
});

//
// O método `done()` recebe uma função de callback
// que será executada caso a requisição tenha sucesso.
//
request.done(function(resposta) {
    console.log(resposta)
});

//
// O método `fail()`recebe uma função de callback
// que será executada caso a requisição falhe.
//
request.fail(function(jqXHR, textStatus) {
    console.log("Request failed: " + textStatus);
});

//
// O método `always()` recebe uma função de callback
// que será executada quando a requisição de sucesso estiver completa.
//
request.always(function() {
    console.log("completou");
});
  
  function transformPopUp()  {
    if (chk.checked == true){
      document.getElementById("popupUser").style.transform = "translateY(230%)"
    } else {
      document.getElementById("popupUser").style.transform = "translateY(100%)"
    }
  }


//   function closePopupUser() {
//     let popupUser = document.getElementById('popupUser');
//     popupUser.style.display = "none";
//   }