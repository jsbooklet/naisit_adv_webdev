<?php 
    $sunny_today = true;
    $weekday = false;
    
    echo $sunny_today or $weekday . "<br>"; // Outputs 1 because only one of the variables need to be true, but both can be true
    
    echo $sunny_today and $weekday . "<br>"; // Outputs nothing, because both need to be true
    
    echo $sunny_today xor $weekday . "<br>"; // Outputs 1, because only one of the variables can be true
    
    echo !$weekday; // Outputs 1, because the opposite of false is true
?>