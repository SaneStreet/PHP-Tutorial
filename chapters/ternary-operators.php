<?php 

    ## Ternary operators
    
    $score = 50;

    // if($score > 40){
    //     echo 'High score!';
    // } else {
    //     echo 'Low score :(';
    // }

    // echo $score > 40 ? 'High score!' : 'Low score :(';

?>

<!DOCTYPE html>

<html>
    <head>
        <title>PHP Tutorials</title>
    </head>

    <body>
        <p><?php echo $score > 40 ? 'High score!' : 'Low score :('; ?></p>
    </body>
</html>