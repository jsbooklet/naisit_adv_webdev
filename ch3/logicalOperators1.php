<?php 
    $age = 40;
    $username = "sherry_amani";

    if ($age >= 18 and $username == "sherry_amani") {
        echo "Welcome to the website $username";
    } else if ($age < 18) {
        echo "You cannot enter the website.";
    } else {
        echo "There was a login error, please sign in again.";
    }

?>