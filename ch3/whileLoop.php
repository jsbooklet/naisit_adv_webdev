<?php 
    $found = false;
    $fruit_chosen = "apple";
    $fruits = ["pear", "banana", "apple", "blueberry"];
    $index = 0;

    while(!$found) {
        echo "Keep looking for the fruit SKU number<br>";
        if ($fruits[$index] == $fruit_chosen){
            $found = true;
        }
        $index++;
    }

    echo "The $fruit_chosen was found with SKU $index<br>";

?>