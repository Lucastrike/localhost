$(document).ready(function(){

  //Canvas stuff
  var canvas = $("#canvas")[0];
  var ctx = canvas.getContext("2d");
  var w = $("#canvas").width();
  var h = $("#canvas").height();

  //Lets save the cell width in a variable for easy control
  var cw = 10;
  var d = "right";//Default direction

  //Lets paint the canvas now
  ctx.fillStyle = "white";
  ctx.fillRect(0,0,w,h);
  ctx.strokeStyle = "black";
  ctx.strokeRect(0,0,w,h);

  //Lets create the snake now
  var snake_array;

  create_snake();
  function create_snake(){
    var length = 5;
    snake_array = [];
    for (var i=length-1; i>=0; i--){
      //This will create a horizontal snake starting from the top left
      snake_array.push({x:i,y:0});
    }
  }

  //Lets paint the snake now
  function paint(){

    //To avoid the snake trail we need to paint the BG on every frame
    //Lets paint the canvas nowctx.fillStyle = "white";
    ctx.fillStyle = "white";
    ctx.fillRect(0,0,w,h);
    ctx.strokeStyle = "black";
    ctx.strokeRect(0,0,w,h);

    //The movement code for the snake to come here
    //Pop out the tail cell and place it infront of the head cell
    var nx = snake_array[0].x;
    var ny = snake_array[0].x;

    //These were the position of the head cell//We will increment it to get the new head position
    //Lets add proper direction based movement now

    if (d=="right") nx++;
    else if (d=="left") nx--;
    else if (d=="up") ny--;
    else if (d=="down") ny++;

    var tail = snake_array.pop();//Pops out the last cell
    tail.x = nx;
    snake_array.unshift(tail);//Puts back the tail as the first cell

    for (var i=0; i<snake_array.length; i++) {
      var c = snake_array[i];
      //Lets paint 10px wide cells
      ctx.fillStyle = "blue";
      ctx.fillRect(c.x*cw,c.y*cw,cw,cw);
      ctx.strokeStyle = "white";
      ctx.strokeRect(c.x*cw,c.y*cw,cw,cw);
    }
  }

  //Lets add the keyboard controls now
  $(document).keydown(function(e){
    var key = e.which;
    if (key == "37") d = "left";
    else if (key == "38") d = "up";
    else if (key == "39") d = "right";
    else if (key == "40") d = "down";
  });

  //Lets move the snake now using a timer which will trigger the paint function
  //Every 60ms
  game_loop = setInterval(paint,60);

  paint();

});
