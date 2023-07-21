<?php 
    function finalize_cost($sub_total, &$sub_discount, $sub_tax) {
        $W_DISCOUNT = 0.90; // 10% percent discount
        $W_TAX = 1.13;
        $sub_discount = $sub_total * $W_DISCOUNT;
        $sub_tax = $sub_discount * $W_TAX;
        return $sub_tax;
    }

    $sub_total = 40.55;
    $sub_discount = 0;
    $sub_tax = 0;

    $sub_tax = finalize_cost($sub_total, $sub_discount, $sub_tax);

    echo "The cost of your item is: $sub_total<br>";
    echo "The total cost with your discount is: $sub_discount<br>";
    echo "The final cost with tax is: $sub_tax<br>";

?>