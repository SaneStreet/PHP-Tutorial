<?php

    ## Variable scope

    # Local variables
    function myFunc() {
        $price = 10;
        echo $price;
    }

    // myFunc();
    // echo $price; // not part of myFunc scope (local)


    function myFuncTwo ($age) {
        echo $age;
    }

    // myFuncTwo(25);
    // echo $age; // not part of myFuncTwo scope (local)

    # Global variables

    $name = 'Arthur';

    // function sayHello() {
    //     global $name;
    //     $name = 'Dutch';
    //     echo "Hello, $name";
    // }
    // sayHello();
    // echo $name;

    function sayBye( & $name) { // $name is local inside functions
        $name = 'Hosea';
        echo "Bye, $name";
    }

    // sayBye($name);
    // echo $name;

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

    </body>
</html>