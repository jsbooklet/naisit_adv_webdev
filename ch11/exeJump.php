<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <!--Purpose: to retrieve two numbers from the user, divide them, and display the result -->
    <h2>Welcome to the Divider</h2>

    <!-- Create the input spaces for the divider -->
    <form method="GET">
        <!-- Fill in the values of the text box upon submit/refresh with the previous value -->
        <label for="numerator">Numerator (top number) </label>
        <?php
        if(isset($_GET['numerator'])) {
            $numerator = $_GET['numerator'];
            // If the user has already entered a numerator, prefill the text box with the previous number
            echo '<input type="text" name="numerator" id="numerator" value="' . $numerator . '">';
        } else {
            // Otherwise, add an empty text box to the page
            echo '<input type="text" name="numerator" id="numerator">';
        }
        ?>


        <h2>  ____________________________ </h2>

        <label for="denominator">Denominator (bottom number)</label>
        <?php
        if(isset($_GET['denominator'])) {
            $denominator = $_GET['denominator'];
            // If the user has already entered a numerator, prefill the text box with the previous number
            echo '<input type="text" name="denominator" id="denominator" value="' . $denominator . '">';
        } else {
            // Otherwise, add an empty text box to the page
            echo '<input type="text" name="denominator" id="denominator">';
        }
        ?>
        <br>
        <br>

        <input type="submit" value="Divide">
    </form>

    <?php
    // Numerator: can be any positive or negative number or 0
    // Denominator: can be any positive or negative number but cannot be 0
    // If the user has entered values for both inputs
    if(isset($_GET['numerator']) && isset($_GET['denominator'])) {
        $quotient = $_GET['numerator'] / $_GET['denominator'];
        echo "<br> = $quotient";
    }
    ?>
    <form>
        Leave a Review
        <textarea></textarea>
        <p>This form will not display if the user enters 0 in the denominator, and then presses the Divide button.</p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


