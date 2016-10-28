
<?php

session_start();
if ($_GET['close'] == 'yes'){
  session_destroy();
  unset($_SESSION['user']);
  unset($_COOKIE['user']);
  echo "Session closed";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Practice 16</title>
  </head>
  <body>

    <form action="practice16b.php" method="post">
      <input type="text" name="name" value="<?php echo $_COOKIE{'user'};?>"><br />
      <input type="submit" value="Submit">
    </form>

  </body>
</html>
