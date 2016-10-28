<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>

    <form action="<?php echo(htmlentities($_SERVER['PHP_SELF']));?>" method="GET">
      <label>
        Search: <input type="text" name="HELLO" />
      </label>
    </form>

    <?php
      echo "The word to search is: " .$_GET['HELLO'];
    ?>
  </body>
</html>
