<h2>Nozzeli's Pasta</h2>
<h3>Checkout</h3>
<?php
    // Main execution
    $prod_price = 50.77;
    echo "<p>The price of your dinner is: $prod_price </p>";
    // Call the function from the main execution
    $tip_amounts = [0, 0.05, 0.10, 0.15, 0.20];
    $tax = 0.13;
    $totals = calculateTotal($prod_price, $tip_amounts, $tax);

    // Function scope
    function calculateTotal($price, $tip_amounts, $tax){
        // Calculate the
        $totals = [];

        foreach($tip_amounts as $tip_amount){
            $total = $price * ($tax + 1) * ($tip_amount + 1);
            // Format the total price to two decimal places
            $total_2_dec = number_format((float)$total, 2, '.', '');
            array_push($totals, $total_2_dec);
        }

        return $totals;
    }

    for($i = 0; $i < count($totals); $i++){
        echo "$i ) With " . $tip_amounts[$i]*100 . "% tip and $tax% tax: $totals[$i]<br>";
    }

?>
