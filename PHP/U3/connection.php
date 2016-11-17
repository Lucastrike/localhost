<?php

$connection = mysqli_connect ("localhost", "", "", "zapashion");
if (mysqli_connect_errno ()) {
  echo "Conection failed:".mysqli_connect_error ();
}
else {
  echo "Connection succesful";
}


 ?>
