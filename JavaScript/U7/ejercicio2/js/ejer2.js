$("document").ready(function(){

  $(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registro']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        user: "required",
        email: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          email: true
        },
        pass: {
          required: true,
          minlength: 5
        },
        conpass: {
          required: true,
          minlength: 5
        }
      },
      // Specify validation error messages
      messages: {
        user: "Please enter your username",
        email: "Please enter your email",
        pass: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        conpass: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        email: "Please enter a valid email address"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
  });

  $("#username").on("blur",function(){
    var username = $("#username").val();
    $.ajax({
      type: 'GET',
      url: "data/ejer2.php",
      data: {user:username},
      success: function(data){
        if(data=="El usuario ya existe"){
          $("#username").css("border","1px solid red");
          $("#username").focus();
          $("p").html(data);
        }
        else {
          $("#username").css("border","1px solid #A9A9A9");
          $("p").html("");
        }
      },
    });
  });

  $.get("data/region.php",function(darosamostrar){
      $("#region").html(darosamostrar);
  });

  $.get("data/ciudades.php",
  {
    valencia : "Valencia"
  },
    function(cities1){
      $("#city").html(cities1);
  });

  $("#region").on("click",function(){
    var regioncities = $("#region").val();
    $.get("data/ciudades.php",
    {
      regioncities : regioncities
    },
      function(cities){
        $("#city").html(cities);
      });
  });

});
