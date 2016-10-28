<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 15</title>
  </head>
  <body>

    <form action="practice15b.php" method="post">
      <input type="text" name="name" value="<?php echo $_COOKIE{'user'};?>"><br />
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
