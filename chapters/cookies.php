<?php 

    ## Sessions

    if(isset($_POST['submit'])) {

        // make a cookie gender
        setcookie('gender', $_POST['gender'], time() + 86400);

        session_start();

        $_SESSION['name'] = $_POST['name'];

        header('Location: index.php');

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorial - Cookies</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" name="name">
            <select name="gender">
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
            <input type="submit" name="submit" value="Submit">
        </form>    
    </body>
</html>