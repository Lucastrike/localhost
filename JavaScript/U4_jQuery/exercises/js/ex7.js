
$("document").ready(function() {
  alert("Web page is loaded!!!");

  $("<li>Black Widow</li>").appendTo("ul li:last");
  $("<li>Red Widow</li>").insertBefore("ul li:first");
  $("ul li:first").insertAfter("ul li:eq(3)");
  $("<h1>PAGE TITLE</h1>").insertBefore("ul");
  $("<li>Lucas</li>").insertBefore("ul li:eq(1)");

});
