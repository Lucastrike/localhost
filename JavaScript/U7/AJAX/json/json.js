
$(document).ready(function(){
console.log("llamamos");
  $.ajax({
    type: 'GET',
    url: 'array.php',
    dataType: 'json',
    success: function(data){
      console.log(data);
      //console.log("bvg" + data[0].descripcion);
      
      //$("#marca").html(data[0].descripcion);
      //$("#modelo").html(data[1].Marca + " " + data[1].Modelo);
      //$("#año").html(data[2].Marca + " " + data[2].Modelo);
    },
    completed: function(){
      console.log("completed");
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
