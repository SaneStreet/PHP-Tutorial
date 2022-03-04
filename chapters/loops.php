<?php

    ## LOOPS
    
    $cowboys = ['Arthur', 'Lenny', 'Charles'];
    # FOR
    // for($i = 0; $i < count($cowboys); $i++){
    //     echo $cowboys[$i] . '<br />';
    // }

    # FOREACH
    // foreach($cowboys as $cowboy) {
    //     echo $cowboy . '<br />';
    // }

    $products = [
        ['name' => 'Gun Oil', 'price' => 10 ],
        ['name' => 'Herbivore Bait', 'price' => 15],
        ['name' => 'Red Poncho', 'price' => 25],
        ['name' => 'Horse Sadle', 'price' => 30],
        ['name' => 'Cattleman Pistol', 'price' => 50],
        ['name' => 'Crackers', 'price' => 5]
    ];

    // foreach( $products as $product){
    //     echo $product['name'] . ' - ' . $product['price'];
    //     echo '<br />';
    // }

    # WHILE
    // $i = 0;
    // while ($i < count($products)){
    //     echo $products[$i]['name'] . ' - ' . $products[$i]['price'];
    //     echo '<br />';
    //     $i++;
    // }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

        <h1>Products</h1>
        <ul>
            <?php foreach($products as $product) { ?>
                <h3><?php echo $product['name'] ?></h3>
                <p>€ <?php echo $product['price'] ?>,-</p>
            <?php } ?>
        </ul>

    </body>
</html>