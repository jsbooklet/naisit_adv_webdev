<?php 
    $age = 15;

    if ($age < 16) {
        echo "You are under the legal driving age";
    } elseif ($age < 19) {
        echo "You may drive but 0 blood alcohol level";
    } else {
        echo "You may drive with less than 0.08% blood alcohol level";
    }

?>