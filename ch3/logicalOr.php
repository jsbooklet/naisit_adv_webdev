<?php 
    $active = true;
    $alumnus = false;

    if ($active or $alumnus) {
        echo "Welcome to the your College page!";
    } else {
        echo "You must be an active student or alumnus to enter the College page";
    }

?>