<?php
$username = 'reshma';
$password = 'reshma12345';
echo "before: ";
 echo $password;
echo "<br>";
echo "after: ";
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
 
?>
