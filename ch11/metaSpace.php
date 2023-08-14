<?php
$pattern = "/Ms.\sRoberts/";
$string1 = "Ms. Roberts";

$doesMatch = preg_match($pattern, $string1);
echo "<br>Is $pattern contained within $string1? " . ($doesMatch ? "Yes" : "No");

?>