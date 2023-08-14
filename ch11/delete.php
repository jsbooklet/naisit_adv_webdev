<?php
$password = 's3sam3';
$hash = password_hash($password, PASSWORD_DEFAULT);
$valid_password = password_verify('s3sam3',
    $hash);
if ($valid_password) {
    echo "Password is valid.<br>";
}


?>