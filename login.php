<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{

$myusername=$_POST['username'];
$mypassword=$_POST['password'];

$sql="select id from admin where username='$myusername' and passcode='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;

header("location: access1.php");
}
else
{
$error="Your Login Name or Password is invalid";
}
}
?>
<form action="" method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Submit "/><br />
</form>
