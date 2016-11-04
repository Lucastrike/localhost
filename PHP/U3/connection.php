<?php

$connection = mysqli_connect ("localhost", "user", "pass", "solvam_lucassalinas");
if (mysqli_connect_errno ()) {
  echo "Conection failed:".mysqli_connect_error ();
}
else {
  echo "Connection succesful";
}


 ?>
