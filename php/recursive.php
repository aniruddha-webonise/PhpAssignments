<?php
$players = array("Sachin","Rahul","Saurav","Zaheer"); 

$n=sizeof($players);
echo $n;
$i=0;
recursive($players,$n,$i);


function recursive($players,$a,$i)
{
  if($i<$a)
{
 print $players[$i];
 $i++;
 recursive($players,$a,$i);
}
else
return;
}
?>


