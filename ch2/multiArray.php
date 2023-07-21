<?php
    $emp_100999885 = [
        "Name" => "Sarah Ahmet",
        "Manager" =>
            [
                "Senior" => "Hoichi Chan",
                "Junior" => "Ingrid Xu"
            ],
        "Rank" => 7,
        "Hourly" => 65.78
    ];
    $senior = $emp_100999885["Manager"]["Senior"];
    $junior = $emp_100999885["Manager"]["Junior"];
    $emp_name = $emp_100999885["Name"];

    echo "$emp_name associates <br> senior associate: $senior <br>junior associate: $junior.";
?>
