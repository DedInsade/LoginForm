<?php
    if (isset($_POST['submit'])) {
        $un=$_POST['username'];
        $pw=$_POST['password'];
        
        if ($un=='username' && $pw=='password') {
            header("location:main.html");
            exit();
        }
        else {
            echo "Invalid User/Password"; 
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="Mstyle.css">
    </head>
    <body>
        <div id="form">
            <h1>Login form</h1>
            <form method='POST'>
                <p>
                    <label>Username: </label> 
                    <input type="text" name="username" require>
                </p>
                <p>
                    <label>Password: </label> 
                    <input type="password" name="password" require>
                </p>
                <input type="submit" name="submit" id="sub" value="Login">
            </form>
        </div>
    </body>
</html>