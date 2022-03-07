<?php

# Include & Require
// include('cowboys.php');
// require('cowboys.php');

## Include continues the code even after error has been caught
// include('cowboyss.php');
## Require does not continue code after error has been caught
// require('cowboyss.php');

## Include and Require can also be used without brackets
// require 'cowboys.php';
// include 'cowboys.php';

echo 'end of php';
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
    <!-- You don't have to update three times, just once in content.php -->
    <?php include 'content.php'; ?>
    <?php include 'content.php'; ?>
    <?php include 'content.php'; ?>

    </body>
</html>