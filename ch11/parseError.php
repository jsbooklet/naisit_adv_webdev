<form method="GET">
    <!-- Fill in the values of the textbox upon submit/refresh with the previous value -->
    <label for="numerator">Numerator (top number) </label>
    <?php
    // If the user has already entered a numerator
    if(isset($_GET['numerator'])) {
        // Parse the numerator from the GET method (the URL)
        $numerator = $_GET['numerator'];
        // Print the input text box containing its previously entered value pre-filled
        echo '<input type="text" name="numerator" id="numerator" value="' . $numerator . '">';
    } else {
        // Print the input text box empty
        echo '<input type="text" name="numerator" id="numerator">';
    }
?>
</form>