<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //parsing the form
    if(!isset($_SESSION['csrf']) || $_SESSION['csrf'] !== $_POST['csrf'])
        throw new RuntimeException('CSRF attack');
 
    
}
 
//Generate a key, print a form:
$key = sha1(microtime());
$_SESSION['csrf'] = $key;
?>
