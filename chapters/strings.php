<?php
    // echo 'hello world!';
    // $name = 'Arthur';
    // define('NAME', 'Arthur');

    // single quotes '' is used for normal strings
    // doucle quotes "" can use variables

    $name = 'Dutch';
    $occupation = 'Gunslinger';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>My PHP File</title>
    </head>
    <body>
        <h1>User Profile Page</h1>
        <div><?php echo "My name is $name" . " and I am a $occupation" ?></div>
        <div><?php echo "$name screamed for \"Arthur!\"" ?></div>
        <div><?php echo $name[2]; ?></div>
        <div><?php echo strlen($name); ?></div>
        <div><?php echo strtoupper($name); ?></div>
        <div><?php echo strtolower($name); ?></div>
        <div><?php echo str_replace('t', 'k', $name); ?></div>
    </body>
</html>