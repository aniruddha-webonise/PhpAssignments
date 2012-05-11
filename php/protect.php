<?php
session_start();
$_SESSION['login_user'];
$_SESSION['login_pass'];
if($_SESSION['login_user']!=''){
echo "Welcome";
}else{
header("Location: userlogin.php");
}
?>

