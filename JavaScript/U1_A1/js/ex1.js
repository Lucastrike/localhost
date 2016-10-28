
alert("Welcome to the gasoline application!");

var kilometers = prompt("Enter the kilometers driven");
while(isNaN(kilometers) || kilometers == "" || kilometers == 0){
  kilometers = prompt("Let's try again \n\n Enter the kilometers driven");
}
var liters = prompt("How many gasoline liters have you consumed?");
while(isNaN(liters) || liters == "" || liters == 0){
  liters = prompt("Let's try again \n\n How many gasoline liters have you consumed?");
}

var result = kilometers/liters;
alert(result + " Km/l");
