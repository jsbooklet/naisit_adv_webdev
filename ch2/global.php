<?php
    $num_stars = 2;
    $num_coins = 8;

    function print_coins() {
        global $num_coins;
        echo $num_coins; // Works without error

    }

    print_coins(); // Output 8
?>
