<?php
$a=3;
while($a>1)
{
 echo $a;
  $a--;
if($a==2)
{
header( 'Location: http://www.google.com' ) ;
}
}
?>


