
<?php

$file = fopen("practice8.txt", "w");
$txt = "Lucas Salinas";
fwrite($file, $txt);
fclose($file);

 ?>
