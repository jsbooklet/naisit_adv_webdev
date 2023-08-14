<?php
try {
    if($_SERVER['SERVER_NAME']) {
       throw new RuntimeException("The Server cannot be nameless");
    } else {
        echo "Welcome to the web page";
    }
} catch (RuntimeException $exception){
    echo "<p style='color: red;'>Exception occurred </p>";
}
?>