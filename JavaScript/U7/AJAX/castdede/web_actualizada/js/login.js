$("document").ready(function() {

  $("#submitup").on('click', function(){
    var emailup = $("#emailup").val();
    var passwordup = $("#passwordup").val();
    alert("email: " + emailup + " " + "password: " + passwordup);
  });




  $("#submitin").on('click', function(){
    var emailin = $("#emailin").val();
    var passwordin = $("#passwordin").val();
    alert("email: " + emailin + " " + "password: " + passwordin);
  });
});
