<?php 

    ## File System - Part 2

    $file = 'quotes.txt';

    # opening a file for reading
    $handle = fopen($file, 'a+');
    // for more fopen() functions:
    // https://www.w3schools.com/php/func_filesystem_fopen.asp

    # read the file
    // echo fread($handle, filesize($file));
    // echo fread($handle, 112);

    # read a single line
    // echo fgets($handle);
    // echo fgets($handle);

    # read a single character
    // echo fgetc($handle);

    # writing to a file
    // fwrite($handle, "\nEverything popular is wrong.");

    # closes the handling of the file
    fclose($handle);

    // unlink($file); // deletes the file

?>