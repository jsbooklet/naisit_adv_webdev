<?php
    // Increases the counter by one, every time the function is called
    function incCount() {
        // Inside a function, static means:
        // The variable will keep its value each time the function is called during the life of the page load
        static $counter = 1;
        echo "You have called this function $counter times<br>";
        $counter++;
    }
    function BuggyResetCount() {
        echo "Count is reset to 1 <br>";
        $counter = 1;
    }

    BuggyResetCount(); // Prints 1
    incCount(); // Prints 1
    incCount(); // Prints 2
    BuggyResetCount(); // Prints 1 // But it does not change the existing value of static $counter variable;

    incCount(); // Prints 3
    incCount(); // Prints 4
    incCount(); // Prints 5
?>
