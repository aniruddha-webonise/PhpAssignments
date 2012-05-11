<html>
<?php
session_start();
$username="anirudh";
$password="anirudh456";
if(isset($_POST['submit'])){
	$username1=$_POST['username'];
	$password1=$_POST['password'];
	if($username1==$username && $password==$password1){
		$_SESSION['login_user']=$username1;
		$_SESSION['login_pass']=$password1;
		header("Location: protect.php");	
	}
}
?>
<body>
<form name="myform" method="post">
Username<input type="text" name="username">
Password<input type="password" name="password">
<input type="submit" name="submit" value="submit">
<body>
</html>
