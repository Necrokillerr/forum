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
        <title></title>
    </head>
    <body>
        <?php
        if($_SESSION["connect"] == true){
            echo "Bonjour ". $_SESSION["user"] . ", Vous êtes connecté !";
        }
        else{
            header("Location: index.php");
        }
        ?>
    </body>
</html>
