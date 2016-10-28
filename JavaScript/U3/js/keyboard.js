
window.onload = function(){
  var text = document.getElementById('text');

  text.onkeypress = function(){
    var letter = event.keyCode;
    if (letter == 113 || letter == 81 || letter == 110 || letter == 78 || letter == 120 || letter == 88) {
      return false;
    }
  }
}
