$(document).ready(function(){

  $("#albums").click(function(){
    $("#albumsMenu, #upload").removeClass("hidden");
    $("#welcome, #serverContainer").addClass(" hidden");

  })

  $("#home").click(function(){
    $("#albumsMenu, #upload, .galleryContainer, #serverContainer").addClass(" hidden");
    $("#welcome").removeClass("hidden");
  })

  $("#server").click(function(){
    $("#upload, #welcome, .galleryContainer, #albumsMenu").addClass(" hidden");
    $("#serverContainer").removeClass("hidden");
  })

  $(".btn-album").click(function(){
    //Activacion boton
    $('.btn-album').removeClass('active');
    $(this).addClass(" active");

    var myAlbum = $(this).text();

    $(".galleryContainer").addClass(' hidden');

    $("#Container"+myAlbum).removeClass('hidden');

    

  })



});
