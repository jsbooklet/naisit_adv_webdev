<?php
    $firstDouble = 1.12121121;
    $secondDouble = 1.12121120;
    $epsilon = 0.0000001;

    if(abs($firstDouble - $secondDouble) < $epsilon) {
        echo "The doubles are equal (within 7 decimal places)";
    } else {
        echo "The doubles are not equal (within 7 decimal places)";
    }

    // Output: "The doubles are equal (within 7 decimal places)"
?>
