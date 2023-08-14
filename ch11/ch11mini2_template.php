<form method="GET">
    <label for="numerator">Numerator (top number) </label>
    <?php
    // If the user has already entered a numerator
    if(isset($_GET['numerator'])) {
        $numerator = $_GET['numerator'];
        echo '<input type="text" name="numerator" id="numerator" value="' . $numerator . '">';
    } else {
        echo '<input type="text" name="numerator" id="numerator">';
    }
</form>
