
var arrayDiv = document.querySelectorAll('div');

var img = document.createElement('img');
var lastdiv = arrayDiv[arrayDiv.length-1];
lastdiv.appendChild(img);

var formChildren = document.getElementsByTagName('form')[0].children.length;
alert("The number of children in the form are: " + formChildren);


var text1 = document.getElementById('text1');
var alert = document.getElementById('alert1');
alert1.style = "color: red";

function validateEmpty(){
  text1.value = text1.value.trim();
  if (text1.value == "") {
    alert1.innerHTML = "Is empty!"
  }
}


var button3 = document.createElement("button");
button3.type = 'button';
button3.innerHTML = "button3"

function addButton3() {
  document.getElementsByTagName('form')[0].appendChild(button3);
}

button3.onclick = function (){
  var style = document.createElement("style");
  var styleProp = document.createTextNode("body {background: yellow;}");
  style.appendChild(styleProp);
  document.getElementsByTagName('head')[0].appendChild(style);
}
