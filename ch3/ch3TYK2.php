<?php 
    $coins = ["penny", "nickel", "dime", "quarter"];

    for ($i = 0; $i < count($coins); $i += 1) {
        if ($coins[$i] == 'dime') {
            break;
        } else {
            echo "$coins[$i] <br>";
        }
    }

?>