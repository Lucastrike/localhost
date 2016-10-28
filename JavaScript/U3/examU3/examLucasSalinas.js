
var text1 = document.getElementById('text1');
var text2 = document.getElementById('text2');

text1.focus();

var imgElement = document.createElement('img');
imgElement.src = "http://i.imgur.com/EKDHu9k.gif";

var divsArray = document.querySelectorAll('div');
var lastdiv = divsArray[divsArray.length-1];
lastdiv.appendChild(imgElement);

var button3 = document.createElement("button");
button3.type = 'button';
button3.innerHTML = "button3"

function addButton3() {
  document.getElementsByTagName('form')[0].appendChild(button3);
}

button3.onclick = function (){
  var style = document.createElement("style");
  var styleProp = document.createTextNode("body {background-color: yellow;}");
  style.appendChild(styleProp);
  document.getElementsByTagName('head')[0].appendChild(style);
}






text1.onblur=function(){
  text1.value = text1.value.trim();
  if(text1.value == "") {
      alert1.innerHTML = "It can't be empty.";
      text1.focus();
  } else if (!text1.value == "") {
      alert1.innerHTML = "";
  }
}

text2.onblur=function(){
  text2.value = text2.value.trim();
  if(text2.value == "") {
      alert1.innerHTML = "It can't be empty.";
      text2.focus();
  } else if (!text2.value == "") {
      alert1.innerHTML = "";
  }
}


/////////////////// PASSWORD ///////////////////

text2.onkeypress = function(){
  var letter = event.keyCode;
  if (letter>64 && letter<=90 || letter> 96 && letter<123) {
    alert1.innerHTML = "Low";
  } else if (letter>47 && letter<=57 || letter==41 || letter==45 || letter==95) {
    alert1.innerHTML = "Medium";
  } else if (true) {
    
  }
}
