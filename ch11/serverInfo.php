<?php
echo "File Name: <br>" . $_SERVER['PHP_SELF'];
echo "<br><br>Server Name: <br>" . $_SERVER['SERVER_NAME'];
echo "<br><br>The method used for request: <br>" . $_SERVER['REQUEST_METHOD'];
echo "<br><br>Time of HTTP request: <br>" . $_SERVER['REQUEST_TIME'];
echo "<br><br>Server Protocol and version: <br>" . $_SERVER['SERVER_PROTOCOL'];
?>