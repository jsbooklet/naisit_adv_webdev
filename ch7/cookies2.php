<?php 
    $cookie_name = 'advertise_pref';

    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie " . $cookie_name . " is not set!";
    } else {
        echo "Cookie " . $cookie_name . " has value: " . $_COOKIE[$cookie_name];
    }

?>