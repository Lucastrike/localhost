
<?php

$data1 = "2015.10.20";
echo date("d/m/Y h:i:s a").strtotime($data1), "<br />";


//========================================================

$date_start = strtotime("3rd September 2014");
$date_end = strtotime("+4 month", $date_start);

while ($date_start <= $date_end) {
  echo date("d M", $date_start), "<br />";
  $date_start = strtotime("+2 week", $date_start);
}

?>
