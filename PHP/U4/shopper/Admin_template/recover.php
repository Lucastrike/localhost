
<?php
	include('connection.php');
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Zapashion</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="css/style.css">

        <style media="screen">
        body{
          background-color: #26363e;
        }
          .box{
            margin-top: 100px;
            background-color: #1cb48c;
            padding-top: 15px;
            padding-bottom: 15px;
          }
          input{
            background-color: white;
            color: #26363e;
          }
        </style>

    </head>

    <body>

      <div class="col-xs-4 col-xs-offset-4 box">
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="field-wrap">
                <input type="password" placeholder="New password" name="pass"/>
            </div>
            <div class="field-wrap">
                <input type="password" placeholder="Confirm password" name="confpass"/>
            </div>
            <button type="submit" class="button button-block"/>Submit</button>
            <?php

              $newpass = mysqli_real_escape_string($connection, $_POST['pass']);
              $passcif = md5($newpass);
              $user = $_GET['user'];
              mysqli_query($connection, "UPDATE usuarios SET password='$passcif' WHERE usuario='$user'");
              header('location: index.php');

             ?>
          </form>
      </div>

      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
