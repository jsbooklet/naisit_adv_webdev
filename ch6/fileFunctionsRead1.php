<?php 
    // Opens the file for reading automatically
    // and returns all the file contents as a string
    $fileString = file_get_contents("games.txt");

    // Split the file into lines
    $games = explode("\n", $fileString);

    // Print out each game, line by line
    foreach ($games as $game) {
        echo $game . "<br>";
    }

?>