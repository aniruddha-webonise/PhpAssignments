
<?php

if(isset($_POST['name'],$_POST['age'],$_POST['email']))
{
$errors=array();

$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];

//when fields are empty
if(empty($name) || empty($age) || empty($email))
{
$errors[]="All fields are mandatory";
}
else
{
if(strlen($name)<3)
{
$errors[] = "Name must be atleast 3 characters";
}

// age is number and > 0
if(!is_numeric($age))
{
$errors[]="Age must be a number";
}
else
{
if($age<=0)
{
$errors[] = "Age must be > 0";
}
}

//Checking Email
if(filter_var($email, FILTER_VALIDATE_EMAIL)=== FALSE)
{
$errors[]="Enter valid Email";
}
}

//displaying errors
if(!empty($errors))
{
foreach($errors as $error)
{
echo $error."<br/>";
}
}
else
{
echo "Information was saved";
}
}

?>



<html>
<head>
<title> Form Validation </title>
</head>
<body>
<form action="24.php" method="POST">

Name:<input type="text" name="name"><br/>
Age:<input type="text" name="age"><br/>
Email:<input type="text" name="email"><br/>
<input type="submit" value="Save">
<input type="reset" value="Reset">

</form> 
</body>
</html>























