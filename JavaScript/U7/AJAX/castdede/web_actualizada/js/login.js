$("document").ready(function() {


  //===================================================================//
  //                             SingUp                                //
  //===================================================================//

  $("#form-singup").validate({
      rules: {
          name: "required",
          email: "required",
          password: {
            required: true,
            minlength: 5
          },
          repasswordup: {
            required: true,
            equalTo: '#passwordup'
          }
      },
      messages: {
        name: "Please enter your name",
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        email: "Please enter a valid email address"
      },
      submitHandler: function() {
        singup();
      }
  });

function singup(){
    var nameup = $("#nameup").val();
    var emailup = $("#emailup").val();
    var passwordup = $("#passwordup").val();
    //alert("email: " + emailup + " " + "password: " + passwordup);

    $.ajax({
        type: 'POST',
        url: 'php/insert_user.php',
        data: {
          name:nameup,
          email:emailup,
          password:passwordup
        },
        success: function(response){
          //alert("Welcome "+nameup);
          alert(response);
          $("#nameup").val("");
          $("#emailup").val("");
          $("#passwordup").val("");
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


//===================================================================//
//                             SingIn                                //
//===================================================================//

$("#form-singin").validate({
    rules: {
        email: "required",
        password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      email: "Please enter a valid email address",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      }
    },
    submitHandler: function() {
      singin();
    }
});

function singin(){

  var emailin = $("#emailin").val();
  var passwordin = $("#passwordin").val();
  alert("email: " + emailin + " " + "password: " + passwordin);

  $.ajax({
      type: 'POST',
      url: 'php/login.php',
      data: {
        email:emailin,
        password:passwordin
      },
      success: function(response){
        if (response==0) {
          alert("The email doesn't match our database");
        } else {
          alert("Welcome " + response);
          $('<li><a class="home-icon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Hey '+response+' (^_^)</a></li>').insertBefore("#left-home");
          $("#logout").removeClass("hidden");
          $.magnificPopup.close();
        }
        $("#emailin").val("");
        $("#passwordin").val("");
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
