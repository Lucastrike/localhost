
$("document").ready(function() {
  alert("Web page is loaded!!!");

  $("input").each(function(){
    var inputVal = $(this).attr('placeholder');
    $(this).val(inputVal);
  });

});
