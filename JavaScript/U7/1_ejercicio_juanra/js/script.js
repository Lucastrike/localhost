$(document).ready(function() {

            $("#enviar").on('click', function() {
                $("#form1").hide();
                $("#tablero").show();
            });

            var pato1 = false;
            var pato2 = false;
            var lobo1 = false;
            var lobo2 = false;

            var parejaPato = false;
            var parejaLobo = false;

            var contador = 0;

            $("#pato1 img").hide();
            $("#pato2 img").hide();
            $("#lobo1 img").hide();
            $("#lobo2 img").hide();

            $("#pato1").on('click', function() {
                contador++;
                pato1 = true;
                $("#pato1 img").show();
                comprobarContador();
            });
            $("#pato2").on('click', function() {
                contador++;
                pato2 = true;
                $("#pato2 img").show();
                comprobarContador();
            });
            $("#lobo1").on('click', function() {
                contador++;
                lobo1 = true;
                $("#lobo1 img").show();
                comprobarContador();
            });
            $("#lobo2").on('click', function() {
                contador++;
                lobo2 = true;
                $("#lobo2 img").show();
                comprobarContador();
            });

            function comprobarContador() {
                if (contador == 2) {
                    comprobar();
                    contador = 0;
                }
            };

            function comprobar() {
                if (pato1 == true && pato2 == true) {
                    $("#pato1").off('click');
                    $("#pato2").off('click');
                    alert("Congratulations!");
                    var parejaPato = true;
                } else
                    alert("You failed!");
                    $("#pato1 img").hide();
                    $("#pato2 img").hide();
                    $("#lobo1 img").hide();
                    $("#lobo2 img").hide();
                    var pato1 = false;
                    var pato2 = false;
                    var lobo1 = false;
                    var lobo2 = false;
                };
                if (lobo1 == true && lobo2 == true) {
                    $("#lobo1").off('click');
                    $("#lobo2").off('click');
                    alert("Congratulations!");
                    var parejaLobo = true;
                  } else {
                    alert("You failed!");
                    $("#pato1 img").hide();
                    $("#pato2 img").hide();
                    $("#lobo1 img").hide();
                    $("#lobo2 img").hide();
                    var pato1 = false;
                    var pato2 = false;
                    var lobo1 = false;
                    var lobo2 = false;
                  }
            });

        /*function comprobar(){
          if (lobo1==true && lobo2==true) {
            $("#lobo1").off('click');
            $("#lobo2").off('click');
            alert("Congratulations!");
            var parejaLobo=true;
          } else {
            alert("You failed!");
            $("#pato1 img").hide();
            $("#pato2 img").hide();
            $("#lobo1 img").hide();
            $("#lobo2 img").hide();
            var pato1 = false;
            var pato2 = false;
            var lobo1 = false;
            var lobo2 = false;
          }
        };*/



        /*if (pato1==true && lobo1==true && pato2==false && lobo2==false) {
          $("#lobo1 img").hide();
          $("#pato1 img").hide();
        }
        if (pato1==true && lobo1==false && pato2==false && lobo2==true) {
          $("#lobo2 img").hide();
          $("#pato1 img").hide();
        }
        if (pato1==false && lobo1==true && pato2==true && lobo2==false) {
          $("#lobo1 img").hide();
          $("#pato2 img").hide();
        }*/


        // $.ajax({
        //     method: "POST",
        //     url: "edit.php",
        //     data: $("#form1").serialize(),
        //     cache: "false",
        //     error: function(response) {
        //       alert("La has cagado");
        //       $("<p class='error'>Error: </p>").insertAfter("#form1");
        //       $(".error").append(response.statusText + response.responseText);
        //     },
        //     success: function(response) {
        //
        //     },
        //     beforeSend: function(response) {
        //
        //     },
        //     complete: function(response) {
        //
        //     }
        // });
