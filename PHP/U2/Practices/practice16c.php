
<?php session_start(); ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Practice 16c</title>
   </head>
   <body>

     <?php if (isset($_SESSION['user'])){ ?>
       <p>You have signed as <strong><?php echo $_SESSION['user'];?></strong></p>
       <a href="practice16.php?close=yes"><input type="button" value="Close session"></a>
     <?php } else {
       echo "You aren't loged";
     } ?>


   </body>
 </html>
