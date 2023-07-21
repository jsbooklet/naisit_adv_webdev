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
    class UnluckyNum extends Exception {
        public function provideAlt() {
            return rand(5, 12);
        }
    }

    try {
        if (isset($_GET['numerator']) && isset($_GET['denominator'])) {
            $quotient = $_GET['numerator'] / $_GET['denominator'];
            if ($quotient == 4 || $quotient == 13) {
                throw new UnluckyNum("Unlucky number");
            }
            echo "<br> = $quotient";
        }
    } catch (UnluckyNum $exception) {
        echo "<p style='color: red;'>Exception: The division of numbers cannot result in 4 or 13: " . $exception->getMessage() . "</p>";
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