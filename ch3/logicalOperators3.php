<?php 
    $occupation = "retired";
    $age = 70;

    if (($occupation == "retired" and $age > 65) xor $occupation == "student") {
        echo "You will receive a 10% discount";
    } else {
        echo "No discount applied";
    }

?>