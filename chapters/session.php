<?php 

    ## Sessions

    if(isset($_POST['submit'])) {

        session_start();

        $_SESSION['name'] = $_POST['name'];

        header('Location: ../index.php');

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial - Sessions</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="name">
            <input type="submit" name="submit" value="Submit">
        </form>    
    </body>
</html>