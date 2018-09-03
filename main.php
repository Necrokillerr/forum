<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

$title = filter_input(INPUT_POST,"tbxTitle");
$desc = filter_input(INPUT_POST, "tbxDescription");

//----------------------------------------------------------------------------------------------------------------------------
//REQUÊTES SQL
//----------------------------------------------------------------------------------------------------------------------------
if(isset($_POST["btnInsert"])){
    //Connexion à la base de donnée
    $db = new PDO('mysql:host=localhost; dbname=forum; charset=utf8mb4', 'root', '');

    // Est-ce que l'Email correspond à celui du user ?
    $req = "INSERT INTO news (title, description) VALUES (\"{$title}\", \"{$desc}\")"; //1ere reqête
    //die($req);
    $insert = $db->prepare($req);
    $insert->execute();
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <title>Publication</title>
    </head>
    <body>
        <h1>Bonjour <?php echo $_SESSION["fName"] . " " . $_SESSION["lName"]; ?>, voici votre actualité</h1>
        <form method="POST">
            <fieldset>
                <legend>Nouveau post</legend>
                <label>Titre:</label>
                <input type="text" name="tbxTitle"/>
                <label>Description:</label>
                <textarea name="tbxDescription"></textarea>
                <input type="submit" name="btnInsert" value="Insérer"/>                
            </fieldset>
        </form>
        <form action="logout.php" method="POST">
            <input type="submit" name="btnLogout" value="Déconnection"/>
        </form>
        <?php
        
        ?>
    </body>
</html>
