

document.body.style.backgroundImage="url('img/bckg_image.jpg')";

//========================================================================

var bulbasur = document.createElement('img');
bulbasur.src = "img/bulbasur.png";
bulbasur.style.width = "150px";
bulbasur.style.height = "150px";

var charmander = document.createElement('img');
charmander.src = "img/charmander.png";
charmander.style.width = "150px";
charmander.style.height = "150px";

var pikachu = document.createElement('img');
pikachu.src = "img/pikachu.png";
pikachu.style.width = "150px";
pikachu.style.height = "150px";

var fcol = document.getElementById("fcol");
fcol.style.width = "150px";
fcol.appendChild(bulbasur);
fcol.appendChild(charmander);
fcol.appendChild(pikachu);

//=========================================================================

var bulb = 0;
var charm = 0;
var pika = 0;

bulbasur.onclick = function() {
  if (bulbasur.style.marginLeft == "1000px") {
    bulbasur.style.marginLeft = "-0px";
    bulb = 0;
  }else {
    bulbasur.style.marginLeft = "1000px";
    bulb = 1;
  }
}

charmander.onclick = function() {
  if (charmander.style.marginLeft == "1000px") {
    charmander.style.marginLeft = "-0px";
    charm = 0;
  }else {
    charmander.style.marginLeft = "1000px";
    charm = 1;
  }
}

pikachu.onclick = function() {
  if (pikachu.style.marginLeft == "1000px") {
    pikachu.style.marginLeft = "-0px";
    pika = 0;
  }else {
    pikachu.style.marginLeft = "1000px";
    pika = 1;
  }
}

//=======================================================================

bulbasur.onmouseover = function() {
  if (bulb == 1) {
    bulbasur.style.width = "200px";
    bulbasur.style.height = "200px";
  }
}
bulbasur.onmouseout = function() {
  bulbasur.style.width = "150px";
  bulbasur.style.height = "150px";
}

charmander.onmouseover = function() {
  if (charm == 1) {
    charmander.style.width = "200px";
    charmander.style.height = "200px";
  }
}
charmander.onmouseout = function() {
  charmander.style.width = "150px";
  charmander.style.height = "150px";
}

pikachu.onmouseover = function() {
  if (pika == 1) {
    pikachu.style.width = "200px";
    pikachu.style.height = "200px";
  }
}
pikachu.onmouseout = function() {
  pikachu.style.width = "150px";
  pikachu.style.height = "150px";
}

//========================================================================

var button = document.createElement('button');
button.type="button";
button.innerHTML="Call my pokemons";

if (bulb == 1 && charm == 1 && pika == 1) {
  document.getElementsByTagName('body')[0].appendChild(button);
}
