

var p = document.createElement('p');
document.getElementsByTagName('body')[0].appendChild(p);

document.onmousemove = function(event){
  var x = event.clientX;     // Get the horizontal coordinate
  var y = event.clientY;     // Get the vertical coordinate
  p.innerHTML = "X coords: " + x + ", Y coords: " + y;
}
