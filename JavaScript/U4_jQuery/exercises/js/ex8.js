
$("document").ready(function() {
  alert("Web page is loaded!!!");

  $("button").insertBefore("p:first");

  var text1 = $("#description").html();
  var text2 = $("#adv").html();
  $("<p>" + text1 + " " + text2 + "</p>").insertAfter("#box");

});
