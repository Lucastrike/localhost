
$("document").ready(function() {

  var puntuaciones = function(datos) {
    $parrafo=datos.selector.next('p');
    $parrafo.children('span').text(datos.valor);

    localStorage.setItem('score', datos.valor);
  };

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
