$(document).ready(function(){

	//Canvas stuff
	var canvas = $("#canvas")[0];
	var ctx = canvas.getContext("2d");
	var w = $("#canvas").width();
	var h = $("#canvas").height();

	//Lets save the cell width in a variable for easy control
	var cw = 10;
	var d;
	var d2;
	var food;
	var score;
	var score2;

	//Lets create the snake now
	var snake_array; //an array of cells to make up the snake

	function init()
	{
		d = "right"; //default direction
		d2 = "left";
		create_snake();
		create_snake2();
		create_food(); //Now we can see the food particle
		//finally lets display the score
		score = 0;
		score2 = 0;

		//Lets move the snake now using a timer which will trigger the paint function
		//every 60ms
		if(typeof game_loop != "undefined") clearInterval(game_loop);
		game_loop = setInterval(paint, 20);
	}
	init();

	function create_snake()
	{
		var length = 5; //Length of the snake
		snake_array = []; //Empty array to start with
		for(var i = length-1; i>=0; i--)
		{
			//This will create a horizontal snake starting from the top left
			snake_array.push({x: i, y:0});
		}
	}
	function create_snake2()
	{
		var length2 = 5; //Length of the snake
		snake_array2 = []; //Empty array to start with
		for(var i = length2-1; i>=0; i--)
		{
			//This will create a horizontal snake starting from the top left
			snake_array2.push({x: 42, y:42});
		}
	}

	//Lets create the food now
	function create_food()
	{
		food = {
			x: Math.round(Math.random()*(w-cw)/cw),
			y: Math.round(Math.random()*(h-cw)/cw),
		};
		//This will create a cell with x/y between 0-44
		//Because there are 45(450/10) positions accross the rows and columns
	}

	//Lets paint the snake now
	function paint()
	{
		//To avoid the snake trail we need to paint the BG on every frame
		//Lets paint the canvas now
		ctx.fillStyle = "white";
		ctx.fillRect(0, 0, w, h);
		ctx.strokeStyle = "black";
		ctx.strokeRect(0, 0, w, h);

		//The movement code for the snake to come here.
		//The logic is simple
		//Pop out the tail cell and place it infront of the head cell
		var nx = snake_array[0].x;
		var ny = snake_array[0].y;

		var nx2 = snake_array2[0].x;
		var ny2 = snake_array2[0].y;
		//These were the position of the head cell.
		//We will increment it to get the new head position
		//Lets add proper direction based movement now
		if(d == "right") nx++;
		else if(d == "left") nx--;
		else if(d == "up") ny--;
		else if(d == "down") ny++;

		if(d2 == "right") nx2++;
		else if(d2 == "left") nx2--;
		else if(d2 == "up") ny2--;
		else if(d2 == "down") ny2++;

		//Lets add the game over clauses now
		//This will restart the game if the snake hits the wall
		//Lets add the code for body collision
		//Now if the head of the snake bumps into its body, the game will restart
		if(check_collision(nx, ny, snake_array))
		{
			//restart game
			init();
			//Lets organize the code a bit now.
			return;
		}

		if (nx == -1) {
			nx = w/cw-1;
		} else if (nx == w/cw) {
			nx = 0;
		}

		if (ny == -1) {
			ny = w/cw-1;
		} else if (ny == w/cw) {
			ny = 0;
		}

		//Lets write the code to make the snake eat the food
		//The logic is simple
		//If the new head position matches with that of the food,
		//Create a new head instead of moving the tail
		if(nx == food.x && ny == food.y)
		{
			var tail = {x: nx, y: ny};
			score++;
			//Create new food
			create_food();
		}
		else
		{
			var tail = snake_array.pop(); //pops out the last cell
			tail.x = nx; tail.y = ny;
		}
		if(nx2 == food.x && ny2 == food.y)
		{
			var tail2 = {x: nx2, y: ny2};
			score2++;
			//Create new food
			create_food();
		}
		else
		{
			var tail2 = snake_array2.pop(); //pops out the last cell
			tail.x = nx2; tail.y = ny2;
		}
		//The snake can now eat the food.

		snake_array.unshift(tail); //puts back the tail as the first cell
		snake_array2.unshift(tail2);

		for(var i = 0; i < snake_array.length; i++)
		{
			var c = snake_array[i];
			//Lets paint 10px wide cells
			paint_cell(c.x, c.y);
		}

		//Lets paint the food
		paint_cell(food.x, food.y);
		//Lets paint the score
		var score_text = "Score: " + score;
		ctx.fillText(score_text, 5, h-5);
		//Lets paint the food
		paint_cell2(food.x, food.y);
		//Lets paint the score
		var score_text2 = "Score: " + score2;
		ctx.fillText(score_text2, 50, h-5);
	}

	//Lets first create a generic function to paint cells
	function paint_cell(x, y)
	{
		ctx.fillStyle = "green";
		ctx.fillRect(x*cw, y*cw, cw, cw);
		ctx.strokeStyle = "white";
		ctx.strokeRect(x*cw, y*cw, cw, cw);
	}
	function paint_cell2(x, y)
	{
		ctx.fillStyle = "red";
		ctx.fillRect(x*cw, y*cw, cw, cw);
		ctx.strokeStyle = "white";
		ctx.strokeRect(x*cw, y*cw, cw, cw);
	}

	function check_collision(x, y, array)
	{
		//This function will check if the provided x/y coordinates exist
		//in an array of cells or not
		for(var i = 0; i < array.length; i++)
		{
			if(array[i].x == x && array[i].y == y)
			 return true;
		}
		return false;
	}

	//Lets add the keyboard controls now
	$(document).keydown(function(e){
		var key = e.which;
		//We will add another clause to prevent reverse gear
		if(key == "37" && d != "right") d = "left";
		else if(key == "38" && d != "down") d = "up";
		else if(key == "39" && d != "left") d = "right";
		else if(key == "40" && d != "up") d = "down";
		else if(key == "87" && d2 != "down") d2 = "up";
		else if(key == "65" && d2 != "right") d2 = "left";
		else if(key == "83" && d2 != "up") d2 = "down";
		else if(key == "68" && d2 != "left") d2 = "right";
		//The snake is now keyboard controllable
	});




/*
//Canvas stuff
var canvas = $("#canvas")[0];
var ctx = canvas.getContext("2d");
var w = $("#canvas").width();
var h = $("#canvas").height();

//Lets save the cell width in a variable for easy control
var cw = 10;
var d;
var food;
var score;

//Lets create the snake now
var snake_array; //an array of cells to make up the snake

function init()
{
	d = "right"; //default direction
	create_snake();
	create_food(); //Now we can see the food particle
	//finally lets display the score
	score = 0;

	//Lets move the snake now using a timer which will trigger the paint function
	//every 60ms
	if(typeof game_loop != "undefined") clearInterval(game_loop);
	game_loop = setInterval(paint, 20);
}
init();

function create_snake()
{
	var length = 5; //Length of the snake
	snake_array = []; //Empty array to start with
	for(var i = length-1; i>=0; i--)
	{
		//This will create a horizontal snake starting from the top left
		snake_array.push({x: i, y:0});
	}
}

//Lets create the food now
function create_food()
{
	food = {
		x: Math.round(Math.random()*(w-cw)/cw),
		y: Math.round(Math.random()*(h-cw)/cw),
	};
	//This will create a cell with x/y between 0-44
	//Because there are 45(450/10) positions accross the rows and columns
}

//Lets paint the snake now
function paint()
{
	//To avoid the snake trail we need to paint the BG on every frame
	//Lets paint the canvas now
	ctx.fillStyle = "white";
	ctx.fillRect(0, 0, w, h);
	ctx.strokeStyle = "black";
	ctx.strokeRect(0, 0, w, h);

	//The movement code for the snake to come here.
	//The logic is simple
	//Pop out the tail cell and place it infront of the head cell
	var nx = snake_array[0].x;
	var ny = snake_array[0].y;
	//These were the position of the head cell.
	//We will increment it to get the new head position
	//Lets add proper direction based movement now
	if(d == "right") nx++;
	else if(d == "left") nx--;
	else if(d == "up") ny--;
	else if(d == "down") ny++;

	//Lets add the game over clauses now
	//This will restart the game if the snake hits the wall
	//Lets add the code for body collision
	//Now if the head of the snake bumps into its body, the game will restart
	if(check_collision(nx, ny, snake_array))
	{
		//restart game
		init();
		//Lets organize the code a bit now.
		return;
	}

	if (nx == -1) {
		nx = w/cw-1;
	} else if (nx == w/cw) {
		nx = 0;
	}

	if (ny == -1) {
		ny = w/cw-1;
	} else if (ny == w/cw) {
		ny = 0;
	}

	//Lets write the code to make the snake eat the food
	//The logic is simple
	//If the new head position matches with that of the food,
	//Create a new head instead of moving the tail
	if(nx == food.x && ny == food.y)
	{
		var tail = {x: nx, y: ny};
		score++;
		//Create new food
		create_food();
	}
	else
	{
		var tail = snake_array.pop(); //pops out the last cell
		tail.x = nx; tail.y = ny;
	}
	//The snake can now eat the food.

	snake_array.unshift(tail); //puts back the tail as the first cell

	for(var i = 0; i < snake_array.length; i++)
	{
		var c = snake_array[i];
		//Lets paint 10px wide cells
		paint_cell(c.x, c.y);
	}

	//Lets paint the food
	paint_cell(food.x, food.y);
	//Lets paint the score
	var score_text = "Score: " + score;
	ctx.fillText(score_text, 5, h-5);
}

//Lets first create a generic function to paint cells
function paint_cell(x, y)
{
	ctx.fillStyle = "green";
	ctx.fillRect(x*cw, y*cw, cw, cw);
	ctx.strokeStyle = "white";
	ctx.strokeRect(x*cw, y*cw, cw, cw);
}

function check_collision(x, y, array)
{
	//This function will check if the provided x/y coordinates exist
	//in an array of cells or not
	for(var i = 0; i < array.length; i++)
	{
		if(array[i].x == x && array[i].y == y)
		 return true;
	}
	return false;
}

//Lets add the keyboard controls now
$(document).keydown(function(e){
	var key = e.which;
	//We will add another clause to prevent reverse gear
	if(key == "37" && d != "right") d = "left";
	else if(key == "38" && d != "down") d = "up";
	else if(key == "39" && d != "left") d = "right";
	else if(key == "40" && d != "up") d = "down";
	//The snake is now keyboard controllable
});
*/

});
