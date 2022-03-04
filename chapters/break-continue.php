<?php

## Continue and Break keywords

$products = [
    ['name' => 'Gun Oil', 'price' => 20 ],
    ['name' => 'Herbivore Bait', 'price' => 10],
    ['name' => 'Red Poncho', 'price' => 15],
    ['name' => 'Horse Sadle', 'price' => 5],
    ['name' => 'Cattleman Pistol', 'price' => 40],
    ['name' => 'Crackers', 'price' => 2]
];

foreach ( $products as $product ) {

    if ( $product['name'] === 'Cattleman Pistol' ) {
        break;
    }

    if ( $product['price'] > 15 ) {
        continue;
    }

    echo $product['name'] . '<br />';

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

    </body>
</html>