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

if(isset($_SESSION["msgRegister"])){
    echo $_SESSION["msgRegister"];
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
        <form action="registrationScript.php" method="POST">
            <fieldset>
                <legend>Inscription</legend>
                <label>Prenom:</label>
                <input type="text" name="tbxFNameRegister" value="<?php if(isset($_SESSION["fNameRegister"])){echo $_SESSION["fNameRegister"];} ?>" required=""/>
                <label>Nom:</label>
                <input type="text" name="tbxLNameRegister" value="<?php if(isset($_SESSION["lNameRegister"])){echo $_SESSION["lNameRegister"];} ?>" required=""/>
                <label>Identifiant:</label>
                <input type="text" name="tbxUserRegister" value="<?php if(isset($_SESSION["userRegister"])){echo $_SESSION["userRegister"];} ?>" required=""/>
                <label>Mot de passe:</label>
                <input type="password" name="tbxPasswordRegister" required=""/>
                <label>Validation du mot de passe:</label>
                <input type="password" name="tbxValidationPasswordRegister" required=""/>
                <input type="submit" name="btnRegister"/>
            </fieldset>
            <a href="./index.php">Retour sur connection</a>
        </form>
        <?php
        
        ?>
    </body>
</html>
