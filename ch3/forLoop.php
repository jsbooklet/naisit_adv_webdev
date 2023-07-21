<?php 
    $siblings = ["Jean Francois", "Marcel", "Amelie", "Jacqueline"];
    $num_siblings = count($siblings);

    for ($counter = 0; $counter < $num_siblings; $counter+=2) {
        echo "Goodnight $siblings[$counter] <br>";
    }

?>