$(document).ready(function() {

  //================ COMPROBACION ==================

  $("#submit").on('click', function(){
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var f1, f2, f3 = false;
    if (username == "") {
      $("#username").css("border","1px solid red");
    } else {
      $("#username").css("border","1px solid green");
      f1 = true;
    }

    if (email == "") {
      $("#email").css("border","1px solid red");
    } else {
      $("#email").css("border","1px solid green");
      f2 = true;
    }

    if (password == "") {
      $("#password").css("border","1px solid red");
    } else {
      $("#password").css("border","1px solid green");
      f3 = true;
    }

    //============= COMPROBACION SERVIDOR ================

    if (f1 == true && f2 == true && f3 == true) {
      $.post("insertar.php",{
        username: $("#username").val(),
        email: $("#email").val(),
        password: $("#password").val()
      }, function(response){
        alert(response);
        }
      );
    }
  });


    //============== COMPROBACION USUARIO ================

    $("#submitLogin").on('click', function(){
      var usernameLogin = $("#usernameLogin").val();
      var passwordLogin = $("#passwordLogin").val();

      var g1, g2 = false;
      if (usernameLogin == "") {
        $("#usernameLogin").css("border","1px solid red");
      } else {
        $("#usernameLogin").css("border","1px solid green");
        g1 = true;
      }

      if (passwordLogin == "") {
        $("#passwordLogin").css("border","1px solid red");
      } else {
        $("#passwordLogin").css("border","1px solid green");
        g2 = true;
      }

      //____________________

      var codigo_producto = $("#usernameLogin").attr("data");

      if (g1 == true && g2 == true) {
        $.post("login.php",{
          usernameLogin: $("#usernameLogin").val(),
          passwordLogin: $("#passwordLogin").val()
        }, function(response){
              if (!codigo_producto=="") {
              window.location.href = "product_detail.php?id="+codigo_producto;
            } else {
              window.location.href = "index.php";
            }
            alert(response);
          }
        );
      }
    });

});
