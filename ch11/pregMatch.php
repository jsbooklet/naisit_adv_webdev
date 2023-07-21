<?php 
    $pattern = "/cat/";
    $string = "concatenate";
    // preg_match searches for cat within concatenate
    $doesMatch = preg_match($pattern, $string);
    echo "Is $pattern contained within $string? " . ($doesMatch ? "Yes" : "No");
    
?>