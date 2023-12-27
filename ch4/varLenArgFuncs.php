<h1>Guestlist</h1>
<?php

// Variable Length Argument Function using the splat operator
function create_guestlist(... $names) {
    $guestlist = "";
    foreach ($names as $name) {
        $guestlist .= $name . "<br>";
    }
    return $guestlist;
}

echo create_guestlist("Judy", "Hugo", "Mimi", "Nonny");

?>