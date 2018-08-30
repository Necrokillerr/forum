<!-- 
Author: Charneco Samuel
Title: Website
Description: Website with Database
Date: 30.08.2018
Version: 1.0
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <title>Login</title>
    </head>
    <body>
        <form method="POST">
            <fieldset>
                <legend>Connection</legend>
                <label>Identifiant:</label>
                <input type="text" name="tbxUsernameLogin"/>
                <label>Mot de passe:</label>
                <input type="password" name="tbxPasswordLogin"/>
                <input type="submit" name="btnLogin"/>
            </fieldset>
            <a href="./registration.php">Pas encore inscrit ?</a>
        </form>        
        <?php
        
        ?>
    </body>
</html>
