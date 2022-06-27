const popupUser = document.getElementById('popupUser')
const innerText = document.getElementById('innerText')
const closeButton = document.getElementById('close-button')

popupUser.style.display = 'none'

//create cookie function
function setCookie(cname,cvalue,exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*30*1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires
}
console.log(getCookie('cookieResposta'))
//get cookie function
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
} 
// console.log(cookieResposta);

// var cookieResposta = '1'
// console.log(cookieResposta);

function msg() {
  let cookieRespostaSlice = getCookie('cookieResposta');

  var cookieResposta = cookieRespostaSlice.slice(';')[0];
  if (cookieResposta == '1') {
    popupUser.style.display = 'flex';
    innerText.innerHTML = 'Usuário já existente.';
    document.getElementById('NomeDeUsuario').style.borderBottom = "0.2rem solid #ff0000";
    popupUser.style.backgroundColor = '#ff0038';
    document.getElementById('Email').style.borderBottom = "none";
    document.getElementById('Senha').style.borderBottom = "none"; 
  } else {
    if (cookieResposta == '2') {
      popupUser.style.display = 'flex';
      innerText.innerHTML = 'Email já existente.';
      document.getElementById('Email').style.borderBottom = "0.2rem solid #ff0000";
      popupUser.style.backgroundColor = '#ff0038';
      document.getElementById('NomeDeUsuario').style.borderBottom = "none";
      document.getElementById('Senha').style.borderBottom = "none"; 
    } else {
      if (cookieResposta == '3') {
        popupUser.style.display = 'flex';
        innerText.innerHTML = 'Cadastrado com sucesso.';
        popupUser.style.backgroundColor = '#07f582';
        document.getElementById('NomeDeUsuario').style.borderBottom = "0.2rem solid #07d582";
        document.getElementById('Email').style.borderBottom = "0.2rem solid #07d582";
        document.getElementById('Senha').style.borderBottom = "0.2rem solid #07d582";       

        console.log(cookieResposta)
        setTimeout(function() {
          popupUser.style.display = 'none'
        },4000)
      }
    }
  }
}

$(document).ready(function () {




  // if (cookieResposta == '4') {
  //   popupUser.style.display = 'flex'
  //   innerText.innerHTML = 'Usuário incorreto.'
  //   document.getElementById('EmailL').style.borderBottom = "0.2rem solid #ff0000"
  // } else {
  //   if (cookieResposta == '5') {
  //     popupUser.style.display = 'flex'
  //     innerText.innerHTML = 'Email incorreto.'
  //     document.getElementById('SenhaL').style.borderBottom = "0.2rem solid #ff0000"
  //   } else {
   
  //   }
  // }

  $('#btCadastro').click(function () {
    var Email = $('#Email').val();
    var NomeDeUsuario = $('#NomeDeUsuario').val();
    var Senha = $('#Senha').val();

    $.ajax({
      url: './cadastro.php',
      type: 'POST',
      data: 'Email='+Email+'&NomeDeUsuario='+NomeDeUsuario+'&Senha='+Senha,
      dataType: 'html'
    })
      .done(function (resposta) {
        console.log(resposta);
        setCookie('cookieResposta', resposta, 1);
        msg();

      })
      .fail(function (jqXHR, textStatus) {
        console.log('Request failed: ' + textStatus);
      })
      .always(function () {
        console.log('completou');
        msg();

        
      })
  })
  // console.log(cookieResposta)
})

// $('#login').click(function () {
//   var EmailL = $('#EmailL').val();
//   var SenhaL = $('#SenhaL').val();
  
//   $.ajax({
//     url: './entrar.php',
//     type: 'POST',
//     data: 'Email='+EmailL+'&Senha='+SenhaL,
//     dataType: 'html'
//   })
//   .done(function (resposta) {
//     console.log(resposta)
//     setCookie('cookieResposta', resposta, 1)    
//   })
//   .fail(function (jqXHR, textStatus) {
//     console.log('Request failed: ' + textStatus)
//   })
//   .always(function (){
//     console.log('completou')
//   })
// })


function transformPopUp() {
  if (chk.checked == true) {
    document.getElementById('popupUser').style.transform = 'translateY(230%)'
  } else {
    document.getElementById('popupUser').style.transform = 'translateY(100%)'
  }
}


function closePopupUser() {
  popupUser.style.display = 'none'
}
