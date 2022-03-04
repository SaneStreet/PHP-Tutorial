<?php

    ## Conditional statements

    // $price = 20;
    // if ($price < 10) {
    //     echo 'the condition is met';
    // } elseif ($price < 30) {
    //     echo 'else if condition met';
    // } else {
    //     echo 'condition is not met';
    // }

    $products = [
        ['name' => 'Gun Oil', 'price' => 20 ],
        ['name' => 'Herbivore Bait', 'price' => 10],
        ['name' => 'Red Poncho', 'price' => 15],
        ['name' => 'Horse Sadle', 'price' => 5],
        ['name' => 'Cattleman Pistol', 'price' => 40],
        ['name' => 'Crackers', 'price' => 2]
    ];

    foreach( $products as $product ) {
        // if ($product['price'] < 15 && $product['price'] > 2 ) {
        //     echo $product['name'] . '<br />';
        // }

        // if ($product['price'] > 20 || $product['price'] < 10 ) {
        //     echo $product['name'] . '<br />';
        // }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

    <div>
        <ul>
            <?php foreach ( $products as $product ) { ?>
                <?php if ($product['price'] > 15) { ?>
                    <li><?php echo $product['name'] ?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>

    </body>
</html>