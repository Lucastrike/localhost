$(document).ready(function(){
  var canvas=$('#canasta').get(0);
	var ctx =  canvas.getContext('2d');
	ctx.fillStyle = "#000";
  var score = 0;
  var penguin = new Image();
  penguin.src = 'images/bin.png';
   penguin.onload = function() {
     ctx.drawImage(penguin,400,380,100,100);
   };
//Lanzar la pelota desde el ratón y que rebote en las
  // 60 frames per second
   var dt = 1/60;
   var x = 0, y = 390;
   var vx = 80, vy = -400;
   var ax = 0, ay = 200;

   var clicked = false;



   function animLoop() {
     // Clear the canvas
     ctx.clearRect(0,0,canvas.width,canvas.height);
     ctx.drawImage(penguin,400,380,100,100);
     // Update the position and velocity
     vx += ax * dt;
     vy += ay * dt;
     x += vx * dt;
     y += vy * dt;

     if(x < 10) { x = 10; vx *= -0.8; }
     else if(x > canvas.width - 10) { x = canvas.width - 10; vx *= -0.8; }

     if(y < 10) { y = 10; vy *= -0.8; }
     else if(y > canvas.height - 10) { y = canvas.height - 10; vy *= -0.8; }

     if(x > 395  && x < 402 ){
       if(y > 380 && y < 480){
         vx *= -0.8;
       }
     }


     // Set the alpha based on the velocity
     //ctx.globalAlpha = Math.sqrt(vx * vx + vy * vy) / 400;
     // Draw a ball
     ctx.beginPath();
     ctx.arc(x,y,10,0,260);
     ctx.fill();
     ctx.fillStyle="rgb(219, 119, 36)";

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
        vy = -200;
        vx = passed;

        if(!clicked) {
          clicked = true;
          animLoop();
        }
     }
 });

 setInterval(function(){
  if (x>400 && x<500) {
    if(y > 380 && y < 480){
      x=10;
      y=450;
      score ++;
      $("#score").html("Score: "+score);
      comprobarScore();
    }
  }
},800);


function comprobarScore(){
  $.ajax({
    type: 'GET',
    url: 'php/getScore.php',
    dataType: 'json',
    success: function(data){
      console.log(data);
      for (var i = 0; i < data.length; i++) {
        if (score > data[i].maxScore) {
          alert("New record!");
          $( function() {
            $( "#dialog" ).dialog();
          });
          $("<div id='dialog' title='Basic dialog'>\
            <p>Congratulations!</p>\
            <p>New record!</p>\
            <input type='text' name='name' value='' id='username' placeholder='Name'>\
            <input type='button' id='send' name='name' value='Send'>\
          </div>").insertAfter("#score");
        }
      }
    },
    completed: function(){
      console.log("completed");
    },
    error: function(jqXHR, textStatus, errorThrown){
      if (jqXHR.status === 0) {

    alert('Not connect: Verify Network.');

  } else if (jqXHR.status == 404) {

    alert('Requested page not found [404]');

  } else if (jqXHR.status == 500) {

    alert('Internal Server Error [500].');

  } else if (textStatus === 'parsererror') {

    alert('Requested JSON parse failed.');

  } else if (textStatus === 'timeout') {

    alert('Time out error.');

  } else if (textStatus === 'abort') {

    alert('Ajax request aborted.');

  } else {

    alert('Uncaught Error: ' + jqXHR.responseText);

  }
    }
  });
}

$(document).on('click', function(){

  var username = $("#username").val();
  $.ajax({
            type: 'POST',
            url: 'php/setScore.php',
            data: {
              username:username,
              score:score
            },
            success: function(data) {
                console.log(data);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                if (jqXHR.status === 0) {

                    alert('Not connect: Verify Network.');

                } else if (jqXHR.status == 404) {

                    alert('Requested page not found [404]');

                } else if (jqXHR.status == 500) {

                    alert('Internal Server Error [500].');

                } else if (textStatus === 'parsererror') {

                    alert('Requested JSON parse failed.');

                } else if (textStatus === 'timeout') {

                    alert('Time out error.');

                } else if (textStatus === 'abort') {

                    alert('Ajax request aborted.');

                } else {

                    alert('Uncaught Error: ' + jqXHR.responseText);

                }
            }
        });
});

});
