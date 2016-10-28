
var totalA = document.getElementsByTagName("a");
console.log(totalA.length);

var penultimatea = document.getElementsByTagName("a")[totalA.length-2];
console.log(penultimatea);

var pLink = document.getElementsByTagName('a');
var counterLink = 0;
for (var i = 0; i < pLink.length; i++) {
  if (pLink[i].href == "http://prueba/") {
    counterLink++;
  }
}
console.log(counterLink);


var totalP = document.getElementsByTagName("p");
var total_a = totalP[2].getElementsByTagName('a');

console.log(total_a.length);
