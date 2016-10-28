

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>email</title>
  </head>
  <body>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <label for="from">From:</label>
      <input type="text" name="from" value"" id="from" ?>
      <br />
      <label for="subject">Subject:</label>
      <input type="text" name="subject" value"" id="subject">
      <br />
      <label for="message">Message:</label>
      <input type="text" name="message" value"" id="message">
      <br />
      <input type="submit" name="send" value"send">
    </form>


    <?php

    $from = $_POST["from"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    mail ("lucastrike1@gmail.com", $subject, $message, "From: $from");
    echo "E-mail sent correctly";

     ?>

  </body>
</html>
