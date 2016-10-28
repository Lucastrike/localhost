<?php

  $file = fopen("file.txt", "w");
  $txt = "Lucas Salinas \t";
  fwrite($file,$txt);

  if (fread($file, filesize("file.txt"))) {
    echo "entra if";
  }
  else {
    echo "else";
  }

  fclose($file);

 ?>
