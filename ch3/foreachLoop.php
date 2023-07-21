<?php 
    $item_ids = [84839, 23455, 30022, 11551, 21222];
    foreach ($item_ids as $item_id) {
        echo "The next id in the list is: $item_id<br>";
    }

    $family_members = ["mother" => "Alma", "father" => "Miguel", "aunt" => "Lila", "uncle" => "Alejandro", "cousin" => "Daniel"];

    foreach ($family_members as $member_type => $name) {
        echo "$name is my $member_type.<br/>";
    }

?>