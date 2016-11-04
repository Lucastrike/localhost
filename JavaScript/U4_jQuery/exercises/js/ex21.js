
$("document").ready(function() {
  alert("Web page is loaded!!!");

  var inputVal = $("#label").html();
  $("#input").val(inputVal);

  $("#input").addClass("hint");

  $("#label").remove();

  $("#input").on("focus", function(){
    if ($(this) != "") {

    } else {
      $(this).val("");
      $(this).removeClass('hint');
    }
  });

});
