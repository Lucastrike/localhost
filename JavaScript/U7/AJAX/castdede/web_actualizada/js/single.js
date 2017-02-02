$("document").ready(function() {

// Primero carga el DOM y recuperamos la variable id

  var movie_id = localStorage.getItem('selected_movie');
  console.log(movie_id);

    $.ajax({
        type: 'GET',
        url: 'php/json_single.php',
        data: {
          movie_id:movie_id
        },
        dataType: 'json',
      success: function(data){
        console.log(data);
        for (var i = 0; i < data.length; i++) {
          $('<div class="song-info" id="movie"><h3>'+data[i].title+'</h3></div><div class="video-grid"><iframe src="'+data[i].trailer+'" allowfullscreen></iframe></div>').prependTo("#movie");
          $('<p>'+data[i].synopsis+'</p><button class="btn btn-info"><a href="'+data[i].link+'" target="_blank">WATCH MOVIE</a></button>').insertAfter("#stars");
        }

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

});
