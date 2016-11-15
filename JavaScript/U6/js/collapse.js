

$(document).ready(function() {

  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });

  $(".box1").on('click', function(){
    $(this).animate({'margin-left':'0px', 'margin-top':'0px'},2000);
  });
  $(".box2").on('click', function(){
    $(this).animate({'margin-left':'0px', 'margin-bottom':'0px'},2000);
  });
  $(".box3").on('click', function(){
    $(this).animate({'margin-left':'0px', 'margin-bottom':'0px'},2000);
  });
  $(".box4").on('click', function(){
    $(this).animate({'margin-left':'0px', 'margin-top':'0px'},2000);
  });

});
