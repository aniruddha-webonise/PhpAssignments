<?php
$str1="Welcome to PHP";
$file = fopen("test.txt","w");
echo fwrite($file,$str1);
fclose($file);
?>


