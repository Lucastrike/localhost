<?php

  session_start();
  $_SESSION['user'] = $_POST['name'];
  setcookie("user", $_POST['name'], time()+3600,"/","");

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Practice 16b</title>
   </head>
   <body>

     <?php if (isset($_SESSION['user'])){ ?>
       <p>There's a new cookie stablish named <strong>user</strong> with the value:
       <strong><?php echo $_POST['name'];?></strong> and it's valid by the next hour</p>
       <a href="practice16c.php"><input type="button" value="Go ahead"</a>
     <?php } else {
       echo "You aren't loged";
          } ?>

   </body>
 </html>
