
$("document").ready(function() {
  alert("Web page is loaded!!!");

  $(".coche").on('click', function(event) {
    $(".dropcoche").removeClass('hidden');
    $(".dropmoto").addClass('hidden');
  });

  $(".moto").on('click', function(event) {
    $(".dropmoto").removeClass('hidden');
    $(".dropcoche").addClass('hidden');
  });

});
