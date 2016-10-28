
/*function scoreValidation(score){
  score = prompt("Enter the score and finish the serie with '999'");
  while (isNaN(score) || score == ""){
    score = prompt("Let's try again \n\n Enter the score");
  }
  if (score >= 0 && score <= 100) {
    contador++;
  } else if (score != 999){
    score = prompt("Please type a score between 0 and 100");
  }
  return parseInt(score);
}

<!--__________________________________________________-->

alert("Welcome to the score application!");

var score = 0;
var contador = 0;
var sumScore = 0;

do {
  score = scoreValidation(score);
  sumScore += score;
}
while (score != 999) {
  var result = alert("Your avarage score is: " + sumScore/contador);
}*/



alert("Welcome to the score application!");

var score = 0;
var contador = 0;
var sumScore = 0;

do {
  console.log("Entra do");
  score = prompt("Enter the score and finish the serie with '999'");
  score = scoreValidation(score);
  console.log("score vale: "+score);
  sumScore += score;
}
while (score != 999) {
  console.log("Entra while");
  alert("The average score is: " + (sumScore - 999) / (contador - 1)); //Disculpame esta CHAPUZA que me he vuelto loco con la tonteria...pero funciona!
}

function scoreValidation(score){
  while (isNaN(score) || score == "" || score < 0 || score > 100 && score != 999){
      score = prompt("Please type a score between 0 and 100");
    }
    contador++;
  return parseInt(score);
}
