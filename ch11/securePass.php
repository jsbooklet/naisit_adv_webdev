<?php
// Password that the user registered with
$passRegistered = 'Pa55w0rd';

// Hash the password to write this value into the credentials file
$hashedPass = password_hash($passRegistered, PASSWORD_DEFAULT);

$loginPass = 'Pa55w0rd';
// Compare the login password entered with the (hashed) registered password
$isValid = password_verify($loginPass, $hashedPass);
echo $isValid?  "Password is valid<br>" : "Password is not valid, try again<br>";

$loginPass = 'Wr0n9_Pa55';
// Compare the next login password entered with the (hashed) registered password
$isValid = password_verify($loginPass, $hashedPass);
echo $isValid?  "Password is valid<br>" : "Password is not valid, try again<br>";
?>