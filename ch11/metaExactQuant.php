<?php
$pattern = "/^416-\d{3}-\d{4}$/";
$string1 = "416-474-2993";
$string2 = "416-848-3117";
$string3 = "416-474-299";
$string4 = "416-47-2993";

$doesMatch = preg_match($pattern, $string1);
echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string2);
echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string3);
echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string4);
echo "<br>Is $pattern contained within $string4? " . ($doesMatch ? "Yes" : "No");
?>