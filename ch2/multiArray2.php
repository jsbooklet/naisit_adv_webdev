<?php
$headphone_brands = [
    [
        "brand" => "Anker",
        "price" => 15.99
    ],
    [
        "brand" => "Logitech",
        "price" => 129.99
    ],
    [
        "brand" => "Jabra",
        "price" => 189.99
    ]
];

$charger_brands = [
    [
        "brand" => "Aukey",
        "price" => 40.00
    ],
    [
        "brand" => "Google",
        "price" => 34.99
    ],
    [
        "brand" => "Apple",
        "price" => 169.00
    ]
];

$accessories = [
    "headphones" => $headphone_brands,
    "chargers" => $charger_brands
];

// Assume that the user chosen Aukey Headphones and you need to display the price
$brand_chosen = $accessories["headphones"][0]["brand"];
$price_chosen = $accessories["headphones"][0]["price"];
echo "$brand_chosen is $$price_chosen";
?>
