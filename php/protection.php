<?php 

$username = “webonise.com”; 
$password = “123456”; 


if($_SERVER["REQUEST_METHOD"] == "POST")
{

$myusername=$_POST['uname'];
$mypassword=$_POST['pass'];


if ($_SERVER[“PHP_AUTH_USER”] == ”” || $_SERVER[“PHP_AUTH_PW”] == ”” ||$_SERVER[“PHP_AUTH_USER”] != $username || $_SERVER[“PHP_AUTH_PW”] != $password)
{ 
header(“HTTP/1.0 401 Unauthorized”); 
header(“WWW-Authenticate: Basic realm="This is protected area"”);

echo “<h1>Authorization Required For Access.</h1>”;
 
die(); 
}
} 

?>

<html>
<head>
<title> Login</title>
</head>
<body>
<form action="protection.php" method="POST">

Username:<input type="text" name="uname"><br/>
Password:<input type="text" name="pass"><br/>

<input type="submit" value="submit">


</form> 
</body>
</html>
