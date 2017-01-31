
//You can also use sessionStorage instead of localStorage if you want the data to be maintained only until the browser window closes.
//localStorage.setItem('_NSCaseId', nsId);
//localStorage.getItem('_NSCaseId');
//localStorage.removeItem('favoriteflavor');

$("document").ready(function() {

// Primero carga el DOM y luego generamos el contenido correspondiente

if (localStorage.getItem('option_name')=="All") {
  $.ajax({
      type: 'GET',
      url: 'php/json_all_movies.php',
      dataType: 'json',
    success: function(data){
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        $('<div data="'+data[i].id+'" class="col-md-3 movie-selected resent-grid recommended-grid movie-video-grid"><div class="resent-grid-img recommended-grid-img"><a href="single.php"><img src="'+data[i].picture+'" alt="" /></a><div class="time small-time show-time movie-time"><p>'+data[i].length+'</p></div><div class="clck movie-clock"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div></div><div class="resent-grid-info recommended-grid-info recommended-grid-movie-info"><h5><a href="single.php" class="title">'+data[i].title+'</a></h5><ul><li id="star"></li><li class="right-list"><p class="glyphicon glyphicon-heart makefav"></p>&nbsp<p class="glyphicon glyphicon-bookmark"></p>&nbsp<p class="views views-info">'+data[i].year+'</p></li></ul></div></div>').insertAfter("#info");
      }


      $("<h3>"+localStorage.getItem('option_name')+"</h3>").prependTo("#selection");
      movieVariable();
      ajaxScore(data[i].id);

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
else if (localStorage.getItem('option_name')=="Favorites") {
  $.ajax({
      type: 'GET',
      url: 'php/json_get_favorite_movies.php',
      dataType: 'json',
    success: function(data){
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        $('<div data="'+data[i].id+'" class="col-md-3 movie-selected resent-grid recommended-grid movie-video-grid"><div class="resent-grid-img recommended-grid-img"><a href="single.php"><img src="'+data[i].picture+'" alt="" /></a><div class="time small-time show-time movie-time"><p>'+data[i].length+'</p></div><div class="clck movie-clock"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div></div><div class="resent-grid-info recommended-grid-info recommended-grid-movie-info"><h5><a href="single.php" class="title">'+data[i].title+'</a></h5><ul><li><p class="glyphicon glyphicon-star"></p></li><li class="right-list"><p class="glyphicon glyphicon-heart"></p>&nbsp<p class="glyphicon glyphicon-bookmark"></p>&nbsp<p class="views views-info">'+data[i].year+'</p></li></ul></div></div>').insertAfter("#info");
      }


      $("<h3>"+localStorage.getItem('option_name')+"</h3>").prependTo("#selection");
      movieVariable();
      ajaxScore();

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
else if (localStorage.getItem('option_name')=="Watch-list") {
  $.ajax({
      type: 'GET',
      url: 'php/json_get_watch_list_movies.php',
      dataType: 'json',
    success: function(data){
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        $('<div data="'+data[i].id+'" class="col-md-3 movie-selected resent-grid recommended-grid movie-video-grid"><div class="resent-grid-img recommended-grid-img"><a href="single.php"><img src="'+data[i].picture+'" alt="" /></a><div class="time small-time show-time movie-time"><p>'+data[i].length+'</p></div><div class="clck movie-clock"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></div></div><div class="resent-grid-info recommended-grid-info recommended-grid-movie-info"><h5><a href="single.php" class="title">'+data[i].title+'</a></h5><ul><li><p class="glyphicon glyphicon-star"></p></li><li class="right-list"><p class="glyphicon glyphicon-heart"></p>&nbsp<p class="glyphicon glyphicon-bookmark"></p>&nbsp<p class="views views-info">'+data[i].year+'</p></li></ul></div></div>').insertAfter("#info");
      }


      $("<h3>"+localStorage.getItem('option_name')+"</h3>").prependTo("#selection");
      movieVariable();
      ajaxScore();

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


  // Seleccionamos una pelicula y almacenamos su id

function movieVariable(){

  $(".movie-selected").on('click', function(){
    var movie_id = $(this).attr("data");
    localStorage.setItem('selected_movie', movie_id);
  });
}


  // Añadimos a favoritos

  $(".makefav").on('click', function(){
    console.log($(this).parent().parent().parent().parent().attr('data'));
  });


  // score

  function ajaxScore(id_movie){
    $.ajax({
        type: 'GET',
        url: 'php/get_score.php',
        data: {
          id:id_movie
        },
        dataType: 'json',
      success: function(data){
        console.log(data);
        for (var i = 0; i < data.length; i++) {
          $('<p class="glyphicon glyphicon-star"></p>').insertAfter("#star");
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
  }

});
