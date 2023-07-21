<?php
    $friends_list = ["Katie", "Casey", "Damon", "Melanie"];
    $best_friends = [true, true, false, false];
    $first_friend = $friends_list[0];
    echo $first_friend; // Output: "Katie"

    $damon_is_bf = $best_friends[2];
    echo $damon_is_bf; // Output: false, but actually results in blank output
?>