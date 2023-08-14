<?php
$pattern = "/^\d{1,4} Doris Rd/";
$string1 = "25 Doris Rd";
$string2 = "8000 Doris Rd";
$string3 = "3 Doris Rd";
$string4 = "50000 Doris Rd";

$doesMatch = preg_match($pattern, $string1);
echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string2);
echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string3);
echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string4);
echo "<br>Is $pattern contained within $string4? " . ($doesMatch ? "Yes" : "No");
?>