
$("document").ready(function() {
  alert("Web page is loaded!!!");

  /*$("#btnshow").on('click', function(){
    $("#image").show(1000);
  });

  $("#btnhide").on('click', function(){
    $("#image").hide(1000);
  });

  $("#btntoggle").on('click', function(){
    $("#image").toggle(1000, function(){
      alert("Callback");
    });
  });*/


  $("#btnaction").on('click', function(){
      $("#image")[$("input:checked").val()]();
  });

});
