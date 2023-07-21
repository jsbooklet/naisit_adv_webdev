<?php 
    // Remember, the path will start from the root of the project
    $filename_path = "game.txt";

    // Append a new person to the game
    $num_players = 5;

    // Write the contents back to the file
    file_put_contents($filename_path, $num_players);

?>