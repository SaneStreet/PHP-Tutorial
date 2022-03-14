<?php 

    ## File System - Part 1

    // $quotes = readfile('readme.txt');
    // echo $quotes;

    $file = 'readme.txt';

    if(file_exists($file)){
        # true, read file
        // echo readfile($file) . '<br />';

        # copy file
        // copy($file, 'quotes.txt');

        # absolute path to file
        // echo realpath($file) . '<br />';

        # file size
        // echo filesize($file) . '<br />';

        # rename file
        // rename($file, 'test.txt');

    } else {
        # false, do not read file
        echo 'File does not exist.';
    }

    # make directory
    mkdir('quotes');
?>