<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "webonise";
$mysql_database = "reshma";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password);
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

class A{

function xss(){

//if you want to display result of perticular user and for that you fire select query with getting (id, username etc.) from url. here hacker can hack with putting any number of id, he can get all information of that user. so we should not use url parameters directly in query

echo "<a href='xss1.php?id=1'>display</a>";

$sql="select * from admin where id=".$_GET['id'];
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){
		echo "<pre>";	
		print_r($row);
		}
}
function sql_injection(){
	//if you want to display result of perticular user and for that you fire select query with getting (id, username etc.) from url. here hacker can hack with putting any number of id, he can get all information of that user. so we should not use url parameters directly in query
echo "<a href='xss1.php?id=1'>display</a>";
	$sql="select * from admin where id=".$_GET['id'];
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){
	echo "<pre>";	
	print_r($row);
	}
}
function spoofed_csrf(){
	//if you want to display result of perticular user and for that you fire select query with getting (id, username etc.) from url. here hacker can hack with putting any number of id, he can get all information of that user. so we should not use url parameters directly in query
echo "<html>    

    <form action='http://assignment.webonise.com/spike2/spoofedform.php' method='POST'>
<input type='text' name='name' /><br>
<input type='text' name='address' /><br>
<input type='text' name='username' /><br>
<input type='text' name='phone' /><br>
	    <input type='submit' />
    </form>
</html>
";
echo "<br>";
echo "hacker can hack with absolute url.
<br>";
echo "<html>    

    <form action='http://assignment.webonise.com/spike2/spoofedform.php' method='POST'>
<input type='text' name='name' value='<script>alert(document.cookie)</script>'/><br>
	    <input type='submit' />
    </form>
</html>
";
} 
function including_files(){

	
echo "<a href='http://assignment.webonise.com/spike2/including_files.php?link=/etc/passwd'>display</a>";
	// check with "http://assignment.webonise.com/spike2/including_files.php?link=/etc/passwd"
	$link=$_GET['link'];
	include $link;
}
function eval_attack(){

	$name="reshma";	
	$sql='delete * from admin where username=$name';
	echo $sql;
	echo "<br>";
	$str=eval("\$sql = \"$sql\";");
	echo $sql;

}
function register_globals(){
//A common security problem with PHP is the register_globals setting in PHP's configuration file (php.ini). This setting (which can be either On or Off)
//if register_globals is on, the url http://www.example.com/test.php?admin=3 will declare $id as a global variable with no code required.
	//sets $admin to FALSE so that the user cannot get administrative privileges except via the conditional statement:
echo "No execution for this ..see code";
	//best way:- 
	 $admin = FALSE;
	 if (isset($_POST["password"]) && $_POST["password"] == "12345") {
	     $admin = TRUE;
	 }
}
function magic_quotes(){

		//checking for magic quotes setting on OR off.
		if(get_magic_quotes_gpc())
			echo "Magic quotes are enabled";
		else
			echo "Magic quotes are disabled";
		echo "<br>";
		echo "Removed Slashes: "; 

		echo stripslashes($_POST['question']);
		echo "<form method='post'>
		Question: <input type='text' name='question'/><br />
		<input type='submit'>

		</form>";
	}
function plain_text_password(){

		$username = 'reshma';
		$password = 'reshma12345';
		
		// mt_rand() generate a random number
		// sha256 is hash algorithm, its convert password text into binary format, we can use here md5 also
		$salt = hash('sha256', uniqid(mt_rand(), true) . 'something random' . strtolower($username));
		 
		// Prefix the password with the salt
		$hash = $salt . $password;

		// Hash the salted password a bunch of times
		for ( $i = 0; $i < 100000; $i ++ )
		{
		    $hash = hash('sha256', $hash);
		}
		 
		// Prefix the hash with the salt so we can find it back later
		$hash = $salt . $hash;
 
	}
}
echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php'>refresh</a>";
echo "<br>";
$obj=new A();
echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=xss'>xss</a>";
if($_GET['num']=="xss"){
	$obj->xss();
}
echo "<br>";
echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=sql_injection'>sql_injection</a>";
if($_GET['num']=="sql_injection"){
	$obj->sql_injection();
}
echo "<br>";
echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=spoofed-csrf'>spoofed-csrf</a>";
if($_GET['num']=="spoofed-csrf"){
	$obj->spoofed_csrf();
}
echo "<br>";

echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=including_files'>including_files</a>";
if($_GET['num']=="including_files"){
	$obj->including_files();
}
echo "<br>";

echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=eval_attack'>eval_attack</a>";
if($_GET['num']=="eval_attack"){
	$obj->eval_attack();
}
echo "<br>";

echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=register_globals'>register_globals</a>";
if($_GET['num']=="register_globals"){
	$obj->register_globals();
}
echo "<br>";

echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=magic_quotes'>magic_quotes</a>";
if($_GET['num']=="magic_quotes"){
	$obj->magic_quotes();
}
echo "<br>";

echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=error_reporting'>error_reporting</a>";
if($_GET['num']=="error_reporting"){
	$obj->error_reporting();
}
echo "<br>";

echo "<a href='http://assignment.webonise.com/spike2/crosssite-attacks.php?num=plain_text_password'>plain_text_password</a>";
if($_GET['num']=="plain_text_password"){
	$obj->plain_text_password();
}
echo "<br>";




?>
