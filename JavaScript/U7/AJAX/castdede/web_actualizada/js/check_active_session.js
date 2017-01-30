


$("document").ready(function() {

    $.ajax({
        type: 'GET',
        url: 'php/check_active_session.php',
      success: function(data){
        console.log(data);
        if (data != "") {
          $('<li><a class="home-icon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Hey '+data+' (^_^)</a></li>').insertBefore("#left-home");
          $("#logout").removeClass("hidden");
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
