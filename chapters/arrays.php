<?php

    // INDEXED ARRAYS

    $peopleOne = ['Arthur', 'Dutch', 'Hosea'];
    //echo $peopleOne[1];

    $peopleTwo = array('Pearson', 'Mary', 'Leopold');
    //echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    //print_r($ages);

    //$ages[1] = 25;
    //print_r($ages);

    $ages[] = 60;
    //print_r($ages);

    array_push($ages, 70);
    //print_r($ages);

    //echo count($ages);

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    //print_r($peopleThree);

    // ASSOCIATIVE ARRAYS (key & value pairs)

    $cowboysOne = ['Arthur'=>'Gunman', 'Dutch'=>'Leader', 'Hosea'=>'Wiseman'];
    //echo $cowboysOne['Dutch'];
    //print_r($cowboysOne);

    $cowboysTwo = array('Pearson' => 'Cook', 'Lenny' => 'Hunter', 'Leopold' => 'Accountant');
    //print_r($cowboysTwo);

    $cowboysTwo['Lenny'] = 'Drunk';
    //print_r($cowboysTwo);

    //echo count($cowboysOne);
    $cowboysThree = array_merge($cowboysOne, $cowboysTwo);
    print_r($cowboysThree);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

    </body>
</html>