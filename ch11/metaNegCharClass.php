<?php
    $pattern = "/[^tV]_2/";
    $string1 = "t_2";
    $string2 = "B_2";
    $string3 = "tV_2";

    $doesMatch = preg_match($pattern, $string1);
    echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string2);
    echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string3);
    echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");
?>