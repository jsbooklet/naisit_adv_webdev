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
</body>
</html>
<?php
     try {
        // Start of potential error
        if(isset($_GET['numerator']) && isset($_GET['denominator'])) {
            $quotient = $_GET['numerator'] / $_GET['denominator'];
            echo "<br> = $quotient";
        }
    } catch (Error $err){
        // Log the error in red color
        echo "<p style='color: red;'>Error: Denominator cannot be 0: " . $err->getMessage() . "</p>";
    }
?>