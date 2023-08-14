<?php
    $pattern = "/Grade \D for PHP/";
    $string1 = "Grade A for PHP";
    $string2 = "Grade 9/10 for PHP";

    $doesMatch = preg_match($pattern, $string1);
    echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string2);
    echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");
?>