
$("document").ready(function() {
  alert("Web page is loaded!!!");

  //$("p").wrapAll("<div style='border:3px solid red'></div>");
  //$("p").wrap("<div style='border:2px solid blue'></div>");
  //$("li:first").replaceWith("<li>Lucas</li>");

  //$("p:first").replaceAll("li:first");
  //$("a").replaceWith("<a target='_blank' href='...'></a>");

  //Exercise 13
  $("li[value='Ironman']").clone().appendTo("li:last");
  $("p:first").css({"border": "1px solid blue", "background-color": "red"});
  $("li:first").remove();
  $(".avengers").each(function(){
    $(this).empty().html("vengadores");
  });


});
