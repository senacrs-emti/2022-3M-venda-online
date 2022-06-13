$( document ).ready(function() {
  
  $("#btCadastro").click(function(){

    var Email = $('#Email').val();
    var NomeDeUsuario = $('#NomeDeUsuario').val();
    var Senha = $('#Senha').val();


    $.ajax({
      url: "./script.php",
      type: "POST",
      data: 'Email='+Email+'&NomeDeUsuario='+NomeDeUsuario+'&Senha='+Senha,
      dataType: "html"  
    }).done(function(resposta) {
      console.log(resposta);
    
    }).fail(function(jqXHR, textStatus ) {
        console.log("Request failed: " + textStatus);
    
    }).always(function() {
        console.log("completou");
    });

  });

});



// http://devfuria.com.br/javascript/ajax-php-jquery/

  var request = $.ajax({

    url: "cadastro.php",
    type: "POST",
    data: "Email=Email&NomeDeUsuario=NomeDeUsuario&Senha=Senha",
    dataType: "html"
});






request.done(function(resposta) {
    console.log(resposta)
});

request.fail(function(jqXHR, textStatus) {
    console.log("Request failed: " + textStatus);
});

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


  function closePopupUser() {
    let popupUser = document.getElementById('popupUser');
    popupUser.style.display = "none";
  }