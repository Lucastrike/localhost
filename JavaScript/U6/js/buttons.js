
$("document").ready(function() {

  $("#btnaction").on('click', function(){
      var selectionEffect = $(".effect:checked").val();
      var selectionSpeed = $(".speed:checked").val();
      var selectionSpeedNum = parseInt(selectionSpeed);
      if (selectionEffect == "fadeTo" || selectionSpeed == "milliseconds") {
        var opacity = $("#opacity").val();
        var speed = $("#speed").val();
        if (opacity > 1) {
          $("<p class='a'>The opacity must be between 0 and 1</p>").insertAfter("#opacity");
        }else {
          $("#image")[selectionEffect](opacity, selectionSpeedNum);
        }
      }
      $("#image")[selectionEffect](3000);
  });




  $(".effect:radio").on('change', function() {
    var selection = $(".effect:radio:checked").val();
    if (selection == "fadeTo") {
      $("#opacity").removeAttr("disabled");
    }else {
      $("#opacity").attr("disabled", "true");
    }
  });

  $(".speed:radio").on('change', function() {
    var selection = $(".speed:radio:checked").val();
    if (selection == "milliseconds") {
      $("#speed").removeAttr("disabled");
    }else {
      $("#speed").attr("disabled", "true");
    }
  });

});
