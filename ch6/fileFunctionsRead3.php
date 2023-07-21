<?php 
    // Open the file for reading
    $file_handle = fopen("games.txt","r");

    // Read all the bytes from the file based on the filesize
    echo fread($file_handle, filesize("games.txt"));

    // Close the file
    fclose($file_handle);

?>