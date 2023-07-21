<!-- Purpose: To retrieve two numbers from the user and divide them-->
<h2>Welcome to the Divider</h2>

<!-- Create the input spaces for the divider -->
<form method="GET">
    <label for="numerator">Numerator (top number) </label>
    <input type="text" name="numerator" id="numerator">

    <h2>  ____________________________ </h2>

    <label for="denominator">Denominator (bottom number)</label>
    <input type="text" name="denominator" id="denominator">

    <br>
    <br>

    <input type="submit" value="Divide">
</form>

<?php
    try {
        // If the user has entered values for both inputs, and pressed submit
        if(isset($_GET['numerator']) && isset($_GET['denominator'])) {
            $numerator = $_GET['numerator'];
            $denominator = $_GET['denominator'];
    
            // Numerator: can be any positive or negative number or 0
            // Denominator: can be any positive or negative number but cannot be 0
            $quotient = $numerator / $denominator;
            echo "<br> = $quotient";
        }
    } catch(Error $error) {
        echo "Error: Cannot divide by zero: " . $error->getMessage();
    }
?>

<form>
    <hr>
    <h2> Leave a Review </h2>
    <textarea></textarea>
    <p>This form will not display if the user enters 0 in the denominator, and then presses the Divide button.<p>

        <input type="submit" value="Submit">
</form>

</body>
</html>
