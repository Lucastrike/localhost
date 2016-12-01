$(document).ready(function() {

    $(".word").draggable();
    $(".pdf").draggable();
    $(".trash").droppable({
      drop: function(event, ui) {
            ui.draggable.remove();
            $(".trash").css("background-image", "url(img/trash_full.png)");
        }
    });

    $("#yes").on('click', function(){
      $(".word, .pdf").animate({'margin-left':'100px', 'margin-top':'50px'});
      $(".word, .pdf").animate({'margin-left':'200px'});
      $(".word, .pdf").animate({'margin-top':'100px'});
      $(".word, .pdf").animate({'margin-left':'300px'});
      $(".word, .pdf").animate({'margin-top':'200px'});
      $(".word, .pdf").animate({'margin-left':'350px'});
      $(".word, .pdf").animate({'margin-top':'50px', 'margin-left':'450px'});
      $(".word, .pdf").animate({'margin-left':'500px', 'margin-top':'200px'}, function(){
        $(".word, .pdf").fadeTo("slow" , 0);
        $(".trash").css("background-image", "url(img/trash_full.png)");
      });
    });

});
