$(document).ready(function(){
    $("#popupUser").click(function(){
        
      $.ajax({
          type: "POST",
          url: "cadastro.php", 
          success: function(result){

            alert('ahaaaa clicou não dorme Vicenzo');
            $("#div1").html(result);
        }});
    });
  });

  $(document).ready(function(){
    $("#chk").click(function(){
      $()
    });
  });

  function transformPopUp()  {
    if (chk.checked == true){
      document.getElementById("popupUser").style.transform = "translateY(230%)"
    } else {
      document.getElementById("popupUser").style.transform = "translateY(100%)"
    }
  }

// ---------- VAI MAS NAO VOLTA -----------
  // function transformPopUp() {
  //   let popupUser = document.getElementById('popupUser');
  //     if (condition) {
  //     popupUser.style.transform = "translateY(230%)";
  //     } else {
  //       popupUser.style.transform = "translateY(-230%)";
  //     }
  // }

//   function closePopupUser() {
//     let popupUser = document.getElementById('popupUser');
//     popupUser.style.display = "none";
//   }