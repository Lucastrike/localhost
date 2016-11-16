

$(document).ready(function() {

  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });



    $(".box2").draggable();
    $(".box1").droppable({
      drop: function(event, ui) {
        $(this).css("background-color","orange");
      },
      out: function(event, ui) {
        $(this).css("background-color","green");
      }
    });

  $(".box3").on('click', function(){
    $(this).animate({'margin-left':'0px', 'margin-bottom':'0px'},2000);
  });
  $(".box4").on('click', function(){
    $(this).animate({'margin-left':'0px', 'margin-top':'0px'},2000);
  });

});
