
/*
1.Using JS
  a. Use	querySelectorAll	function	at	least	once	in	your	code. (1,5 pt)
  b. Add	a	img	element in	the	last	container	(div) (1,5 pt)
*/

var imgElement = document.createElement('img');
imgElement.src = "https://media.giphy.com/media/ASd0Ukj0y3qMM/giphy.gif";

var divsArray = document.querySelectorAll('div');
var lastdiv = divsArray[divsArray.length-1];
lastdiv.appendChild(imgElement);

/*
c. Show	a	message	with	the	numbers	of	childs	of	the	form. (1,5	pt)
*/
var numberChilds = document.getElementsByTagName('form')[0].children.length;
//alert("Form has " + numberChilds + " childs."); //Also correct
document.getElementById("numberOfChilds").innerHTML = ("The form has " + numberChilds + " childs");

/*
2- By	pressing	button	1:
  a. If	the	input	text	is	empty:	show	a	error	message	in	red	at	the	right	of
  the	input. (you	can	create	what	you	think necessary) (2 pt)
*/
var button1 = document.getElementById('button1'),
    text1 = document.getElementById('text1'),
    alert1 = document.getElementById('alert1');

    alert1.style="color: red";

function validateEmpty() {
    text1.value = text1.value.trim(); //deleting spaces

    if(text1.value == "") {
        alert1.innerHTML = "You can not be empty.";
    } else {
        alert1.innerHTML = ""; //Not to show the message if it's OK
    }
}



/*
3- By	pressing	button	2:
a. Create	a	new	button	at	its	right	with	the	following	functionality: (1,5
pt)
*/
var button3 = document.createElement('button');
button3.type="button";
button3.innerHTML="Button 3";

function addButton3(){
  document.getElementsByTagName('form')[0].appendChild(button3);
}

/*
b. Include	in	the	html	the	given	css using	the	tag <style>.	You
can	find	it	in	128.1.32.100/juanra (1,5 pt)
*/
button3.onclick = function() {
    var styleElement = document.createElement('style');
    styleElement.appendChild(document.createTextNode("body {background: yellow;}"));
    document.getElementsByTagName('head')[0].appendChild(styleElement);
}

/*button3.onclick = function() {
    var linkElement = document.createElement('link');
    linkElement.rel="stylesheet";
    linkElement.type="text/css";
    linkElement.href="u2a2.css";
    document.getElementsByTagName('head')[0].appendChild(linkElement);
}*/
