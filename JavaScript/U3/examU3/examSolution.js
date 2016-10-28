/*
a. Create	a	form	with	2 text	fields (Username	and	password)
and	1	button (Register). (2	pts)
*/

var inputUsername = document.createElement("input");
inputUsername.type = "text";
inputUsername.id = "username";
document.body.appendChild(inputUsername);

var userNameMessage = document.createElement("span");
document.body.appendChild(userNameMessage);

var br1 = document.createElement("br");
document.body.appendChild(br1);


var inputPass = document.createElement("input");
inputPass.type = "text";
inputPass.id = "password";
document.body.appendChild(inputPass);

var passwordMessage = document.createElement("span");
document.body.appendChild(passwordMessage);

var br2 = document.createElement("br");
document.body.appendChild(br2);

var button = document.createElement("input");
button.type = "submit";
button.value = "Register";
document.body.appendChild(button);


/*
b. Both	fields	are	required	so	if	the	user	tries	to	move	to
another	element	without	write	something,	it	has	to	show	a
message	and	get	the	focus	again.	(2,5)
*/


inputUsername.onblur = function(){

    if(inputUsername.value === "" || inputUsername.value === null){
		userNameMessage.innerHTML = "Username is mandatory";
        username.focus();
    }else{
    	userNameMessage.innerHTML = "";
    }
};

inputPass.onblur = function(){

    if(inputPass.value === "" || inputPass.value === null){
		passwordMessage.innerHTML = "Password is mandatory";
        inputPass.focus();
    }else{
    	passwordMessage.innerHTML = "";
    }
};


/*
c. Text	field	1	is used	for the username	and	has	to	be	focused
once	the	webpage	is	loaded.	 (2	pts)
*/
window.onload = function(){
    inputUsername.focus();
};


/*
d. Text	field	2 is	used	for	password	and	you	need	to	show	(on
live)	how	strong	is	the	password	depending	on	what	the
user	is	writing. Show	the	strength	of	the	password	at	the
right	of	the	password	and	following	these	rules: (3,5	pts)
	i.Contains	only	letters (Codes	65-90	and	97-122)	=
	Low
	ii. Contains	a	number (Codes	48-57) or	a	symbol
	(41,45,95)	=	Medium
	iii. Contains	a	number	and	a	symbol	=	Hard
*/

	var hasLetters, hasNumbers, hasSymbols = false;

    inputPass.onkeypress = function(event) {
        if((event.charCode>=65 && event.charCode<=90) || (event.charCode>=97 && event.charCode<=122)){
        	hasLetters=true;
    	}

    	if((event.charCode>=48 && event.charCode<=57)){
        	hasNumbers = true;
    	}

    	if(event.charCode==41 || event.charCode==45 || event.charCode==95){
        	hasSymbols = true;
    	}

    	if(hasLetters && !hasNumbers && !hasSymbols){
    		passwordMessage.innerHTML = "Your password strength is LOW";
    	}else if((hasLetters && hasNumbers && !hasSymbols) || (hasLetters && !hasNumbers && hasSymbols)){
    		passwordMessage.innerHTML = "Your password strength is MEDIUM";
    	}else if(hasLetters && hasNumbers && hasSymbols){
    		passwordMessage.innerHTML = "Your password strength is HARD";

    	}
    };
