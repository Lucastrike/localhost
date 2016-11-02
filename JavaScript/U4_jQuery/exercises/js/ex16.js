
$("document").ready(function() {
  alert("Web page is loaded!!!");

  $("div").on("mouseover", function(){
    $(this).css("background-color", "blue");
  })
  $("div").on("mouseout", function(){
    $(this).css("background-color", "green");
  })

});
