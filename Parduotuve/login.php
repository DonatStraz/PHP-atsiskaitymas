<?php
 session_start();

   $_SESSION['username'] = $_POST["username"];
   $_SESSION['password'] = $_POST["password"];
 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <form action="process.php" method="POST">
                <label>Vardas</label><br>
                <input type="text" id="user" name="username" /><br></br>
                <label>Slaptažodis</label><br>
                <input type="password" id="pass" name="password"/>  
                <input type="submit" id="btn" name="login" value="login"/><br><br>
            
            </form>
    </body>
</html>