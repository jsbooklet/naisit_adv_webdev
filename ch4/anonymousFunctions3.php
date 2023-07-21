<?php 
    // Regular function
    function regular($name) {
        echo "Good morning $name<br>";
    }
    // Pass the name of a regular function as an argument - so that it can be called in call_user_func
    call_user_func('regular', "Bita Shahi");

?>