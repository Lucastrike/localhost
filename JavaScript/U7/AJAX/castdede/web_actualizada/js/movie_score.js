
$("document").ready(function() {

  var puntuaciones = function(datos) {
    var parrafo = datos.selector.next('p');
    parrafo.children('span').text(datos.valor);

    localStorage.setItem('score', datos.valor);

    setScore();

  };

  function setScore(){
    var movie_id = localStorage.getItem('selected_movie');
    var score = localStorage.getItem('score');

    $.ajax({
        type: 'POST',
        url: 'php/set_score.php',
        data: {
          movie_id:movie_id,
          score:score
        },
      success: function(data){
        console.log(data);
        alert(data);

      },
        error: function(jqXHR, textStatus, errorThrown){
        if (jqXHR.status === 0) {

        alert('Not connect: Verify Network.');

      } else if (jqXHR.status == 404) {

        alert('Requested page not found [404]');

      } else if (jqXHR.status == 500) {

        alert('Internal Server Error [500].');

      } else if (textStatus === 'parsererror') {

        alert('Requested JSON parse failed.');

      } else if (textStatus === 'timeout') {

        alert('Time out error.');

      } else if (textStatus === 'abort') {

        alert('Ajax request aborted.');

      } else {

        alert('Uncaught Error: ' + jqXHR.responseText);

      }
    }

  });
  }

  $(function() {
    $('#puntos').valoraciones({
      star_tot:10,
      star_max:10,
      star_size:2,
      evento:'click',
      callback:puntuaciones
    });
  });

  if (!localStorage.getItem('selected_movie') == "") {
  $("#stars").removeClass("hidden");
  }


});
