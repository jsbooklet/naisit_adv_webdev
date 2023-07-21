<?php

    $db_info = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'test';

    $db_con = new mysqli($db_info, $username, $password, $dbname);

    if($db_con->connect_errno){
        die('MySQLi Database not connected. Error: "' . $db_con->connect_errno);
    } else {
        echo "Successful connection to database " . $dbname;
    }
?>
