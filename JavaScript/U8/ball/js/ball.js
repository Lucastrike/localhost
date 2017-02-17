$(document).ready(function(){
  var canvas=$('#canasta').get(0);
	var ctx =  canvas.getContext('2d');
	//ctx.fillStyle = "#000";

//Lanzar la pelota desde el ratón y que rebote en las
  // 60 frames per second
   var dt = 1/60;
   var x = 0, y = 390;
   var vx = 80, vy = -400;
   var ax = 0, ay = 300;

   var clicked = false;

   ctx.fillStyle = "rgb(36, 45, 128)";
   ctx.fillRect(200,300,100,10);


   function animLoop() {
     // Clear the canvas
     ctx.clearRect(0,0,canvas.width,canvas.height);

     ctx.fillStyle = "rgb(36, 45, 128)";
     ctx.fillRect(200,300,100,10);

     // Update the position and velocity
     vx += ax * dt;
     vy += ay * dt;
     x += vx * dt;
     y += vy * dt;

     if(x < 10) { x = 10; vx *= -0.8; }
     else if(x > canvas.width - 10) { x = canvas.width - 10; vx *= -0.8; }

     if(y < 10) { y = 10; vy *= -0.8; }
     else if(y > canvas.height - 10) { y = canvas.height - 10; vy *= -0.8; }

     if(x >= 200  && x <= 300 ){
       if(y >= 300 && y <= 310){
         vx *= -0.8;
       }
     }


     // Set the alpha based on the velocity
     //ctx.globalAlpha = Math.sqrt(vx * vx + vy * vy) / 400;
     // Draw a ball

     ctx.fillStyle="rgb(219, 119, 36)";
     ctx.beginPath();
     ctx.arc(x,y,10,0,260);
     ctx.fill();

     // Call set timeout for the next frame
     setTimeout(animLoop,dt * 1000);
 }
 var flag, flag2;
 $("#canasta").on({
     mousedown : function(){
        flag = new Date().getTime();
     },
     mouseup: function(){
        flag2 = new Date().getTime();
        var passed = flag2 - flag;
       x = 0, y = 450;
        vy = -400;
        vx = passed;

        if(!clicked) {
          clicked = true;
          animLoop();
        }
     }
 });

 /*setInterval(function(){
  if (x>400 && x<500) {
    if(y > 380 && y < 480){
      x=10;
      y=450;
      score ++;
      $("#score").html("Score: "+score);
    }
  }
},800);*/

});
