var food = new Object();
food.fruits = new Object();
food.fruits.name = "Frutas";

food.fruits.apple = new Object();
food.fruits.apple.name = "apple";
food.fruits.apple.size = 10;
food.fruits.apple.price = 2;

food.fruits.orange = new Object();
food.fruits.orange.name = "orange";
food.fruits.orange.type = "valenciana";
food.fruits.orange.color = "orange";

food.fruits.pear = new Object();
food.fruits.pear.name = "pear";
food.fruits.pear.location = ["valencia, spain"];
food.fruits.pear.natural = "true";

var myString = JSON.stringify(food);
console.log(myString);

//==================================================================

var food = '{"fruits":{"name":"Frutas","apple":{"name":"apple","size":10,"price":2},"orange":{"name":"orange","type":"valenciana","color":"orange"},"pear":{"name":"pear","location":["valencia, spain"],"natural":"true"}}}';

var json = JSON.parse(food);
//console.log(json);

alert(json.fruits.orange.color + "\n" + json.fruits.apple.price + "\n" + json.fruits.pear.natural);
