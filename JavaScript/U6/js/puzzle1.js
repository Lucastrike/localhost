

 $(document).ready(function() {

   $("#tablero").sortable({
   }).disableSelection();

    $("#tablero").on("sortout", function( event, ui ) {
      var pos1=$("#uno").position();
      var pos2=$("#dos").position();
      var pos3=$("#tres").position();
      var pos4=$("#cuatro").position();

     if((pos1.left==48 && pos1.top==16) && (pos2.left==448 && pos2.top==16) && (pos3.left==48 && pos3.top==266) && (pos4.left==448 && pos4.top==266)){
       alert("Well Done!");
     }
    });

 });
