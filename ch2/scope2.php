<?php
    // Main execution
    $cost = 5.66;

    function greet(){
        // Function scope
        echo $cost; // Causes an error because $cost is not defined in this scope
        $cost = 8.66;
        echo $cost;
    }
?>
