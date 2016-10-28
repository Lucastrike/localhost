
<?php

$file = fopen("practice7.txt", "r");

while (!feof($file)) {
  echo fgets($file);
}

fclose($file);

 ?>
