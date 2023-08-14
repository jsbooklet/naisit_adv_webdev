<?php
    $pattern = "/c.p/";
    $string1 = "cup";
    $string2 = "cap";
    $string3 = "coop";

    $doesMatch = preg_match($pattern, $string1);
    echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string2);
    echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string3);
    echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");
?>