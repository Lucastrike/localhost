
$("document").ready(function() {
  alert("Web page is loaded!!!");

  $("body").attr("style","font-family: Arial, sans-serif;");

  $("#nickname").html("Lucas");
  $("#favorites").html("Bringing down the house, The wolf of wall street, superinvestors of graham and doddsville");
  $("#hometown").html("Godella");

  $("li").addClass("listItem");

  $("<style>.listItem {color:red;}</style>").insertAfter("ul");

  $("<img src='http://hitcolors.com/wp-content/uploads/2016/08/Black-7.jpg' width='300' alt='picture'></img>").insertAfter("ul");

  $("<h1>My Book List</h1>").insertAfter("head");

  var books = $("#favorites").html();
  books = books.split(",");

  books[2] = $("<p>Title: <a href='http://gdsinvestments.com/wp-content/uploads/2015/07/The-Superinvestors-of-Graham-and-Doddsville-by-Warren-Buffett.pdf' target='_blank'>Superinvestors of Graham and Doddsville</a></p><p>Author: Warren E. Buffett</p>").insertAfter("img");
  books[1] = $("<p>Title: <a href='https://www.amazon.es/Wolf-Wall-Street-Jordan-Belfort/dp/1444778129/ref=sr_1_1/252-3385282-9990548?ie=UTF8&qid=1477304213&sr=8-1&keywords=the+wolf+of+wall+street+book' target='_blank'>The wolf of wall street</a></p><p>Author: Jordan Belfort</p>").insertAfter("img");
  books[0] = $("<p>Title: <a href='https://www.amazon.es/Bringing-Down-House-Students-Millions/dp/0099468239/ref=sr_1_1?ie=UTF8&qid=1477304251&sr=8-1&keywords=bringing+down+the+house' target='_blank'>Bringing down the house</a></p><p>Author: Ben Mezrich</p>").insertAfter("img");

  //Exercise 12

  $("img[alt]").each(function(){
    $(this).replaceWith("<span>" + $(this).getAttr('alt') + "</span>");
  })

});
