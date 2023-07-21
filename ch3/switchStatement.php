<?php 
    $day_of_week = "saturday";

    switch ($day_of_week) {
        case "saturday":
            echo "It’s the first day of the weekend";
            break;
        case "sunday":
            echo "It’s the second day of the weekend";
            break;
        default:
            echo "It is a weekday";
    }

?>