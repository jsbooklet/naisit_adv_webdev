<?php
    $family_members = ["mother" => "Alma", "father" => "Miguel", "aunt" => "Lila", "uncle" => "Alejandro", "cousin" => "Daniel"];

    foreach ($family_members as $member_type => $name) {
        echo "$name is my $member_type.<br/>";
    }

?>