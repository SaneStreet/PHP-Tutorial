<?php

    // MULTI-DIMENSIONAL ARRAYS

    $blogs = [
        [   'title' => 'Van Der Linde Gang', 
            'author' => 'Dutch', 
            'content' => 'Lorem ipsum', 
            'likes' => 30
        ],
        [   'title' => 'Gunmen', 
            'author' => 'Arthur', 
            'content' => 'Dores meria', 
            'likes' => 50
        ],
        [   'title' => 'Robbing Valentine', 
            'author' => 'Lenny', 
            'content' => 'Eptum seri', 
            'likes' => 100
        ],
    ];

    //print_r($blogs[1][1]);
    //echo $blogs[2]['author'];
    //echo count($blogs);

    $blogs[] = [
        'title' => 'Van Horn Mansion Party',
        'author' => 'Hosea',
        'content' => 'Bandum iop',
        'likes' => 152
    ];

    //print_r($blogs);
    $popped = array_pop($blogs);
    print_r($popped);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>

    </body>
</html>