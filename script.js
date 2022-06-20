const popupUser = document.getElementById("popupUser");
const innerText = document.getElementById("innerText");
const closeButton = document.getElementById("close-button");

popupUser.style.display = "none";

//create cookie function
function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 60 * 1000);
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires;
}

//get cookie function
function getCookie(cname) {
  let name = cname + "=";
  let ca = document.cookie.split("=");

  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return ca[1];
}

$(document).ready(function () {
  let cookieRespostaSlice = getCookie(cookieResposta);
  var cookieResposta = cookieRespostaSlice.slice(";")[0];
  console.log(cookieResposta);
  
  if (cookieResposta == "1") {
    popupUser.style.display = "flex";
    innerText.innerHTML = "Usuário já existente.";
  } else {
    if (cookieResposta == "2") {
      popupUser.style.display = "flex";
      innerText.innerHTML = "Email já existente.";
    } else { if (cookieResposta == '3') {
      popupUser.style.display = "flex";
      innerText.innerHTML = "Cadastrado com sucesso!";
      popupUser.style.background = "green"
    } else {

    }
    }
  } 

  $("#btCadastro").click(function () {
    var Email = $("#Email").val();
    var NomeDeUsuario = $("#NomeDeUsuario").val();
    var Senha = $("#Senha").val();

    $.ajax({
      url: "./cadastro.php",
      type: "POST",
      data:
        "Email=" +
        Email +
        "&NomeDeUsuario=" +
        NomeDeUsuario +
        "&Senha=" +
        Senha,
      dataType: "html",
    })
      .done(function (resposta) {
        console.log(resposta);
        setCookie("cookieResposta", resposta, 1);

      })
      .fail(function (jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);
      })
      .always(function () {
        console.log("completou");
      });
  });
});

function transformPopUp() {
  if (chk.checked == true) {
    document.getElementById("popupUser").style.transform = "translateY(230%)";
  } else {
    document.getElementById("popupUser").style.transform = "translateY(100%)";
  }
}

function closePopupUser() {
  popupUser.style.display = "none";
}
