
$(document).ready(function(){

  $.ajax({
    type: 'GET',
    url: 'array.php',
    dataType: 'json',
    success: function(data){
      console.log(data);
      $("#marca").html(data.Marca);
      $("#modelo").html(data.Modelo);
      $("#año").html(data.Año);
    }
  });

});
