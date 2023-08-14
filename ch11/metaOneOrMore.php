<?php
$pattern = "/^La+-de+-da+$/";
$string1 = "La-de-da";
$string2 = "L-d-d";
$string3 = "Laa-dee-daa";

$doesMatch = preg_match($pattern, $string1);
echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string2);
echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string3);
echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");
?>