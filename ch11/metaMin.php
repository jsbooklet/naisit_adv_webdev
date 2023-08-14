<?php
$pattern = "/^Starz{2,}/";
$string1 = "Starz";
$string2 = "Starzz";
$string3 = "Starzzzzzzzzz";

$doesMatch = preg_match($pattern, $string1);
echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string2);
echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string3);
echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");
?>