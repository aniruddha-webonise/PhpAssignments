<?php
$date1 = new DateTime("12-5-2011");
 
$date2 = new DateTime("12-4-2010");
 
$difference = $date1->diff($date2);
echo $difference->days;
?>


