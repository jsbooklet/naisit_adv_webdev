<?php 
    $flower_types = ["peony", "daffodil", "stop", "bamboo", "orchid", "daisy"];
    foreach ($flower_types as $flower_type) {
        if ($flower_type == 'stop') {
            break;    
        } else {
            echo "$flower_type<br>"; 
        }
    }

?>