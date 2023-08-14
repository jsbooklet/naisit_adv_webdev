<?php
    $pattern = "/^cat/";
    $string1 = "concatenate";
    $string2 = "catty";

    $doesMatch = preg_match($pattern, $string1);
    echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");
    $doesMatch = preg_match($pattern, $string2);
    echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");
?>