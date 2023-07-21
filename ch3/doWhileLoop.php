<?php 
    $found = false;
    $fruit_chosen = "pear";
    $fruits = ["pear", "banana", "apple", "blueberry"];
    $index = 0;

    do {
        echo "Fruit SKU number: $index<br>";
        if ($fruits[$index] == $fruit_chosen){
            $found = true;
        } else {
            $index++;
        }

    } while(!$found);

    echo "The $fruit_chosen was found with SKU $index<br>";

?>