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
        // Start of potential error
        if(isset($_GET['numerator']) && isset($_GET['denominator'])) {
            if($_GET['numerator'] < 0 ||  $_GET['denominator'] < 0) {
                throw new RangeException("Monetary values must be positive");
            }
            if($_GET['denominator'] == 0) {
                throw new DivisionByZeroError("Cannot divide by zero");
            }
            $quotient = $_GET['numerator'] / $_GET['denominator'];
            echo "<br> = $quotient";
        }
    } catch(RangeException $exception){
        // Log the error
        echo "<p style='color: red;'>Exception: The numerator and denominator cannot be negative: " . $exception->getMessage() . "</p>";
    } catch (DivisionByZeroError $error) {
        // Log the error
        echo "<p style='color: red;'>Error: Denominator cannot be 0: " . $error->getMessage() . "</p>";
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
