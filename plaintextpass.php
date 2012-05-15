To avoid plain text password
<?php
$username = 'Admin';
$password = 'gf45_gdf#4hg';
 

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
