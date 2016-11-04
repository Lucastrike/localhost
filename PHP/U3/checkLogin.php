<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  session_start();

  include('connection.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($connection, $_POST['Username']);
    $password = mysqli_real_escape_string($connection, $_POST['Password']);
    $pass = md5($password);

    $query = mysqli_query($connection, "SELECT * FROM usuarios");
    while ($row = mysqli_fetch_array($query)) {
      if ($username == $row['usuario']) {
        if ($pass == $row['password']) {
          $_SESSION['usuario'] = $username;
          header('location: profile.php');
        }
      }
    }
  }

  mysqli_close($connection);

 ?>
