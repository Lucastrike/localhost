
$("document").ready(function() {
  alert("Web page is loaded!!!");

  $("li").html("Batman rules");
  $("a").attr("href", "https://es.wikipedia.org/wiki/Batman");
  $("img").attr("alt", "The Avengers");
  $("img").attr({
    src:"http://cdn.smosh.com/sites/default/files/bloguploads/worst-batman-costume-troll.jpg",
    alt:"Batman"
  });
  $("img").removeattr(alt);

});
