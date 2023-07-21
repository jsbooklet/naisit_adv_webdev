<?php 
    // Anonymous function definition is created and saved into a variable
    $greet = function ($name) {
        echo "Good afternoon $name<br>";
        };

    // Calls the function and shows correct output
    $greet("Pardis Nafas");

    // Results in error because greet is not truly the function name
    call_user_func('greet', "Lily Tabrizi");

?>