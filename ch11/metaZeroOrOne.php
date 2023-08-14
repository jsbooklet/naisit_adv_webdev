<?php
$pattern = "/^1?-?416-777-2444$/";
$string1 = "1-416-777-2444";
$string2 = "416-777-2444";
$string3 = "-416-777-2444";
$string4 = "1416-777-2444";
$string5 = "11-416-777-2444";

$doesMatch = preg_match($pattern, $string1);
echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string2);
echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string3);
echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string4);
echo "<br>Is $pattern contained within $string4? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string5);
echo "<br>Is $pattern contained within $string5? " . ($doesMatch ? "Yes" : "No");
?>