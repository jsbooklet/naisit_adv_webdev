<?php
    $pattern = "/Sunny \d degrees/";
    $string1 = "Sunny";
    $string2 = "Sunny 6 degrees";
    $string3 = "Sunny 84 degrees";

    $doesMatch = preg_match($pattern, $string1);
    echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string2);
    echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string3);
    echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");
?>