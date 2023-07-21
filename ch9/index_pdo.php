<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
?>

<?php
require('database_pdo.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Some CSS to make the Webpage prettier --> 
    <link href="/dashboard/stylesheets/normalize.css" rel="stylesheet" type="text/css" /><link href="/dashboard/stylesheets/all.css" rel="stylesheet" type="text/css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>
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
            // Test XAMPP Web Server
            $webPage = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
            if (!$webPage) {
                $webPage = "home"; // Set to "home" as default
            }
            echo "<br><br>Currently on the " . $webPage . " page<br><br>";

            // Table Setup
            $query = "CREATE TABLE guitar (guitar_name varchar(15), guitar_id int(1), guitar_year int(4), guitar_wood varchar(15));";
            echo $query;
            // Prepare the query
            $prepped_query = $db_con->prepare($query);
            // Execute the query
            $success = $prepped_query->execute();

            // Check if the query was successful
            if($success){
                echo "<br>Successful execution of query <br><br>";
            } else {
                echo "<br>Unsuccessful execution of query <br><br>";
            }

            // Save the query as a string:
            $queryFill = "INSERT INTO `guitar` (`guitar_name`, `guitar_id`, `guitar_year`, `guitar_wood`) VALUES ('fender', '1', '2020', 'ash_wood'), ('gibson', '2', '2018', 'spruce'), ('epiphone', '3', '2020', 'maple'), ('yamaha', '4', '2021', 'spruce');";
            echo $queryFill;

            // Prepare the query
            $prepped_query3 = $db_con->prepare($queryFill);
            // Execute the query
            $success3 = $prepped_query3->execute();
            // Check if the query was successful
            if($success3){
              echo "Successful execution of query <br><br>";
            } else {
              echo "Unsuccessful execution of query <br><br>";
            }

            echo "<br>Prepared Statements<br>";
            // Save the query as a string:
            $query = "SELECT * FROM guitar WHERE guitar_wood='spruce';";
            echo $query;
            // Prepare the query
            $prepped_query = $db_con->prepare($query);
            // Execute the query
            $success = $prepped_query->execute();

            // Check if the query was successful
            if($success){
              echo "<br>Successful execution of query <br><br>";
            } else {
                echo "<br>Unsuccessful execution of query <br><br>";
            }

            // Fetch the results
            $sql_results = $prepped_query->fetchAll();

            // Output the results (in a simple but unorganized way)
            var_dump($sql_results);
          ?>

        <table>
            <tr>
              <th>Name</th>
              <th>ID</th>
              <th>Year</th>
              <th>Wood type</th>
            </tr>

            <?php
                // Output the results (in an organized way)
                foreach ($sql_results as $sql_result) :
            ?>
            <tr>
                <td> <?php var_dump($sql_result['guitar_name']) ?></td>
                <td> <?php var_dump($sql_result['guitar_id']) ?></td>
                <td> <?php var_dump($sql_result['guitar_year']) ?></td>
                <td> <?php var_dump($sql_result['guitar_wood']) ?></td>
            </tr>
            <?php
                endforeach;
            ?>
          </table>
          <br>
          <?php
            // Insert command

            $row_values = array("'taylor'", 5, 2017, "'sapele'");
            // Save the query as a string:
            $queryInsert = "INSERT INTO guitar (guitar_name, guitar_id, guitar_year,guitar_wood) VALUES ($row_values[0], $row_values[1], $row_values[2], $row_values[3]);";
            echo $queryInsert;

            // Prepare the query
            $prepped_query3 = $db_con->prepare($queryInsert);
            // Execute the query
            $success3 = $prepped_query3->execute();
            // Check if the query was successful
            if($success3){
                echo "Successful execution of query <br><br>";
            } else {
                echo "Unsuccessful execution of query <br><br>";
            }

          ?>



      </div>
    </div>
  </body>
</html>
