<?php

    ## Functions

    function sayHello ($name = 'Dutch', $time = 'morning') {
        echo "Good $time, $name. <br /> ";
    }

    sayHello('Arthur');
    sayHello();
    sayHello('Hosea', 'night');

    function formatProduct ( $product ) {
        // echo "{$product['name']} costs €{$product['price']} to buy <br />";
        return "{$product['name']} costs €{$product['price']} to buy <br />";
    }

    // $formatted = formatProduct(['name' => 'Cattleman Pistol', 'price' => 20]);
    // echo $formatted;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

    </body>
</html>