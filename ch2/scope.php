<?php
    // Main execution
    $cost = 5.66;

    function greet(){
        // Function scope
        $cost = 8.66;
        return $cost;
    }

    echo "In the main execution scope, the cost is $cost<br>";
    echo "From the function scope, the cost is " . greet();

?>
