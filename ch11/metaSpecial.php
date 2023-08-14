<?php
    $pattern = "/^\(/";
    $string1 = "(416)";
    $string2 = "\(416)  ";
    $string3 = "416";

    $doesMatch = preg_match($pattern, $string1);
    echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string2);
    echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

    $doesMatch = preg_match($pattern, $string3);
    echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");
?>