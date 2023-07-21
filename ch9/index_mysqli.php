<?php
    require('database_mysqli.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Some CSS to make the Webpage prettier --> 
    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body class="index">
    <div id="wrapper">
      <div class="hero">
        <div class="row">
          <div class="large-12 columns">
            <h1> My Guitar Shop</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">

        <?php 
            // Special Characters
            echo "<br><br>Special Characters <br>";
            $apostrophe_s = "'s";
            // Convert the apostrophe to an escaped version of the apostrophe
            $apostrophe_s = $db_con->real_escape_string($apostrophe_s);
            echo "Escaped String: " . $apostrophe_s . "<br>";

            // Define the UPDATE query
            $query = "UPDATE guitar SET guitar_name = CONCAT(guitar_name, '$apostrophe_s');";
            echo $query;

            // Execute the query
            $result = $db_con->query($query);

            // Check if the query was successful
            if(!$result){
                echo "Unsuccessful execution of query <br>" . $db_con->error;
            } else {
                echo "Successful execution of query <br>";

            }
          ?>
              
        </div>
      </div>
    </div>
  </body>
</html>


