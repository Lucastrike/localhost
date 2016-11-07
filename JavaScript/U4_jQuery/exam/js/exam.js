
$("document").ready(function() {
  alert("Web page is loaded!!!");

  $("#text").keypress(function(key){
    if (key.charCode == 81 || key.charCode == 113 || key.charCode == 110 || key.charCode == 88 || key.charCode == 120 || key.charCode == 78) {
      return false;
    }
  });

});
