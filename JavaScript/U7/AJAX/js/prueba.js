$(document).ready(function(){

  $("#container").load(
    'connection.php',
    function(){
      $("<p>Bravo campeon!</p>").insertAfter("body");
    });

});
    /*"http://localhost/alumno_solvam/JavaScript/U7/AJAX/prueba.html",
    function(){
      $("#container").html("Congrats!");
    }
  );*/
