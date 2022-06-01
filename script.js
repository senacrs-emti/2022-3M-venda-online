$(document).ready(function(){
    $("#popupUser").click(function(){
        
      $.ajax({
          type: "POST",
          data: ,
          url: "cadastro.php", 
          success: function(result){

            alert('ahaaaa clicou não dorme Vicenzo');
            $("#div1").html(result);
        }});
    });
  });


//   function closePopupUser() {
//     let popupUser = document.getElementById('popupUser');
//     popupUser.style.display = "none";
//   }