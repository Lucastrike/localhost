<?php

  setcookie("user", $_POST['name'], time()+3600,"/","");

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Practice 15b</title>
   </head>
   <body>

     <p>There's a new cookie stablish named <strong>user</strong> with the value:
       <strong><?php echo $_POST['name']; ?></strong> and it's valid by the next hour</p>

       <a href="practice15.php"><input type="button" value="Come back"</a>

   </body>
 </html>
