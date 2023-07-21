<?php 
    // Open the file for reading automatically
    // Read the lines in the file line by line
    // And save each line as an element of an array
    $game_names_read = file("games.txt");
    
    foreach($game_names_read as $game_name){
        echo "<p> $game_name: </p>";
    }

?>