<!-- 
Author: Charneco Samuel
Title: Website
Description: Website with Database
Date: 30.08.2018
Version: 1.0
-->
<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <title>Register</title>
    </head>
    <body>
        <form method="POST">
            <fieldset>
                <legend>Inscription</legend>
                <label>Prenom:</label>
                <input type="text" name="tbxFirstNameRegister"/>
                <label>Nom:</label>
                <input type="text" name="tbxLastNameRegister"/>
                <label>Identifiant:</label>
                <input type="text" name="tbxUsernameRegister"/>
                <label>Mot de passe:</label>
                <input type="password" name="tbxPasswordRegister"/>
                <label>Validation du mot de passe:</label>
                <input type="password" name="tbxValidationPasswordRegister"/>
                <input type="submit" name="btnRegister"/>
            </fieldset>
            <a href="./index.php">Retour sur connection</a>
        </form>
        <?php
        
        ?>
    </body>
</html>
