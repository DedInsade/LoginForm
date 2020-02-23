<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="Mstyle.css">
    </head>
    <body>
        <div id="form">
            <h1>Login form</h1>
            <form action="process.php" method='POST'>
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

