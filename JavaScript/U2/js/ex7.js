
document.getElementsByTagName("body")[0].style.fontFamily = "Arial, sans-serif";

document.getElementById("nickname").innerHTML = "LordStrike";
document.getElementById("favourites").innerHTML = "Bringing down the house","The wolf of wall street","superinvestors of graham and doddsville";
document.getElementById("hometown").innerHTML = "Godella";

var style = document.getElementsByTagName('li');
console.log(style);
for (var i=0; i<style.length; i++) {
  style[i].className = "listitem";
  style[i].style.color = "red";
}

var img = document.createElement('img');
img.setAttribute('src', './img/doit.jpg');
document.getElementsByTagName('body')[0].appendChild(img);


// Exercise 8

var h1 = document.createElement('h1');
h1.appendChild(document.createTextNode("My Book List"));
document.getElementsByTagName("body")[0].appendChild(h1);

var favBook = favourites.innerHTML;
var bookArray = favBook.split(',');
var ul = document.createElement('ul');

for (var i=0; i<bookArray.length; i++) {
  var li = document.createElement('li');
  li.appendChild(document.createTextNode(bookArray[i]));
  ul.appendChild(li);

  var a = document.createElement('a');
  var img2 = document.createElement('img');
  if (i==0) {
    a.setAttribute("href", "http://www.publishersweekly.com/978-0-7432-2570-0");
    a.appendChild(document.createTextNode(bookArray[i]));
    img2.setAttribute("src", "./img/21.jpeg");
    img2.style.width="150px";
    img2.style.height="150px";
    li.style.border="2px solid green";
    li.appendChild(a);
    li.appendChild(img2);
  }
  else if (i==1) {
    a.setAttribute("href", "https://es.wikipedia.org/wiki/Jordan_Belfort");
    a.appendChild(document.createTextNode(bookArray[i]));
    img2.setAttribute("src", "./img/wolf.jpg");
    img2.style.width="150px";
    img2.style.height="150px";
    li.style.border="2px solid green";
    li.appendChild(a);
    li.appendChild(img2);
  }
  else {
    a.setAttribute("href", "https://en.wikipedia.org/wiki/The_Superinvestors_of_Graham-and-Doddsville");
    a.appendChild(document.createTextNode(bookArray[i]));
    img2.setAttribute("src", "./img/warren.jpeg");
    img2.style.width="150px";
    img2.style.height="150px";
    li.style.border="2px solid green";
    li.appendChild(a);
    li.appendChild(img2);
  }
}
document.getElementsByTagName("body")[0].appendChild(ul);
