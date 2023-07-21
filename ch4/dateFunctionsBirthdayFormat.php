<?php 
    // First create a date object
    $full_birthday = new DateTime('March 15, 2002');
    // Then format the date 
    $year = $full_birthday->format('Y');
    echo "My sister was born in $year<br>";

?>