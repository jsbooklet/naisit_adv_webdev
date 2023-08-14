<?php
    // Example 1
    $replacement = "PHP";
    $string = "I am most comfortable programming with LANGUAGE";
    $pattern = "/LANGUAGE/";
    $newString = preg_replace($pattern, $replacement, $string);
    echo $newString . "<br>";

    // Example 2
    $replacement = "M2P 9G1";
    $string = "Postal code: X0X 0X0";
    $pattern = "/[A-Z]\d[A-Z] \d[A-Z]\d/";
    $newString = preg_replace($pattern, $replacement, $string);
    echo $newString;
?>