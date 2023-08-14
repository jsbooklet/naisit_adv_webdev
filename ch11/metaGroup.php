<?php
$pattern = "/^[a-z]*(\sand\s)[a-z]*/";
$string1 = "milk and cookies";
$string2 = "tomand jerry";
$string3 = "knife and fork";

$doesMatch = preg_match($pattern, $string1);
echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string2);
echo "<br>Is $pattern contained within $string2? " . ($doesMatch ? "Yes" : "No");

$doesMatch = preg_match($pattern, $string3);
echo "<br>Is $pattern contained within $string3? " . ($doesMatch ? "Yes" : "No");
?>