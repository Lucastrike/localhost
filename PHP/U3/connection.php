<?php

$connection = mysqli_connect ("localhost", "user", "pass", "database_name");
if (mysqli_connect_errno ()) {
  echo "Conection failed:".mysqli_connect_error ();
}
else {
  echo "Connection succesful";
}


 ?>
