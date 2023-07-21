<?php 
    // Function definition created and immediately thrown away
    function ($name) {
        echo "Hello $name";
    };

    // Function definition is created and saved into a variable
    $greet = function ($name) {
        echo "Goodbye $name";
    };

    $greet("Pardis Nafas");

?>