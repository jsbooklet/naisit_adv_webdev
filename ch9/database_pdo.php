<?php
    $db_info = 'mysql:host=127.0.0.1;dbname=test';
    $username = 'root'; // If access is denied: use ‘root’
    $password = ''; // If access is denied: use ‘’

    try {
        $db_con = new PDO($db_info, $username, $password);
        echo "PDO Database connected successfully.<br>";
    } catch (PDOException $e){
        $error_message = $e->getMessage();
        echo "PDO Database not connected. Error: " . $error_message . "<br>";
        exit();
    }

?>
