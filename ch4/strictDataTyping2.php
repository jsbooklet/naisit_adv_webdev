<?php 
    declare(strict_types=1);

    function get_product(int $num1, int $num2) {
        return $num1 * $num2;
    }

    $product = get_product(3, 4);
    echo "The product of 3 * 4 is : $product<br>";
    $product_f = get_product(3.5, 4.5);
    echo "The product of 3.5 * 4.5 is : $product<br>";

?>