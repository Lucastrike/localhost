


window.onload = function(){

  var img = document.createElement('img');
  document.getElementsByTagName('body')[0].appendChild(img);
  img.setAttribute('src', './img/doit.jpg');
  img.style.width="400px";
  img.style.height="400px";

  var h1 = document.createElement('h1');
  h1.appendChild(document.createTextNode("welcome"));
  document.getElementsByTagName('body')[0].appendChild(h1);

  img.onmouseover = function(){
    img.src="./img/doit2.jpg";
  }

  img.onmouseout = function(){
    img.setAttribute('src', './img/doit.jpg');
  }

  img.onclick = function(){
    alert(" JUST \nDO IT !!!");
  }

}
