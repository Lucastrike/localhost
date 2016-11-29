<?php
  error_reporting(E_ALL);
  ini_set("display_errors", "1");

  session_start();

  include('connection.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = mysqli_real_escape_string($connection, $_POST['user']);
    $password = mysqli_real_escape_string($connection, $_POST['pass']);
    $pass = md5($password);

    $query = mysqli_query($connection, "SELECT * FROM usuari");
    while ($row = mysqli_fetch_array($query)) {
      if ($user == $row['user']) {
        if ($pass == $row['password'] && $user == $row['user']) {
          $_SESSION['user'] = $user;
          header('location: gestion.php');
        }else {
          header('location: index.php');
        }
      }
    }
  }

  mysqli_close($connection);

 ?>
