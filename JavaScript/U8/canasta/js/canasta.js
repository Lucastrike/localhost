$(document).ready(function(){

  var canvas = $("#canvas")[0];
  var ctx = canvas.getContext("2d");
  // var w = $("#canvas").width();
  // var h = $("#canvas").height();

  //Poner imagen normal
  var bin = new Image();
    bin.src = 'images/bin.png';
    bin.onload = function() {
      console.log(bin.width + " " + bin.height);
      ctx.drawImage(bin,600,400);
    };

//Lanzar la pelota desde el ratón y que rebote en las
  //60 frames per second
  var dt = 1/60;
  var x = 0, y = 390;
  var vx = 80, vy = -400;
  var ax = 0, ay = 200;

  var clicked = false;

  //Poner imagen normal
  var bin = new Image();
    bin.src = 'images/bin.png';
  function animLoop() {

    // Clear the canvas
    ctx.clearRect(0,0,canvas.width,canvas.height);
    ctx.drawImage(bin,600,400);

    // Update the position and velocity
    vx += ax * dt;
    vy += ay * dt;
    x += vx * dt;
    y += vy * dt;

    if(x < 10) { x = 10; vx *= -0.8; }
    else if(x > canvas.width - 10) { x = canvas.width - 10; vx *= -0.8; }

    if(y < 10) { y = 10; vy *= -0.8; }
    else if(y > canvas.height - 10) { y = canvas.height - 10; vy *= -0.8; }

    // Set the alpha based on the velocity
    //ctx.globalAlpha = Math.sqrt(vx * vx + vy * vy) / 400;

    // Draw a ball
    ctx.beginPath();
    ctx.arc(x,y,10,0,260);
    ctx.fill();
    ctx.fillStyle="rgb(227, 105, 16)";

    // Call set timeout for the next frame
    setTimeout(animLoop,dt * 1000);
}

var flag, flag2;
$(canvas).on({
    mousedown : function(){
       flag = new Date().getTime();
    },
    mouseup: function(){
       flag2 = new Date().getTime();
       var passed = flag2 - flag;
       console.log(passed); //time passed in milliseconds

      //x = e.offsetX;
     	//y = e.offsetY;
       x=0;
       y=700;
     	vy = -400;
     	vx = passed;

     	if(!clicked) {
     		clicked = true;
     		animLoop();
     	}
     }
   });

   console.log("x= " + x + "y= " + y);
   if (y<=425 && (x>=620 && x<=680)) {
     console.log("Well done");
   }
});
