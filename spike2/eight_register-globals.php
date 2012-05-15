<?php
//sets $admin to FALSE so that the user cannot get administrative privileges except via the conditional statement:

//best way:- 
 $admin = FALSE;
 if (isset($_POST["password"]) && $_POST["password"] == "12345") {
     $admin = TRUE;
 }

?>
