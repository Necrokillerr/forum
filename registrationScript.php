<?php
// ==================================
// Author: Charneco Samuel
// Title: Website
// Description: Website with Database
// Date: 30.08.2018
// Version: 1.0
// ==================================
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

$fNameRegister = filter_input(INPUT_POST, "tbxFNameRegister");
$lNameRegister = filter_input(INPUT_POST, "tbxLNameRegister");
$userRegister = filter_input(INPUT_POST, "tbxUserRegister");
$passwordRegister = sha1(filter_input(INPUT_POST, "tbxPasswordRegister"));
$validePasswordRegister = sha1(filter_input(INPUT_POST, "tbxValidationPasswordRegister"));

//----------------------------------------------------------------------------------------------------------------------------
//REQUÊTES SQL
//----------------------------------------------------------------------------------------------------------------------------

if(isset($_POST["btnRegister"]) && $passwordRegister == $validePasswordRegister){
    //Connexion à la base de donnée
    $db = new PDO('mysql:host=localhost; dbname=forum; charset=utf8mb4', 'root', '');

    // Insertion d'un utilisateur
    $req = "INSERT INTO users (firstName, lastName, login, password) VALUES (\"{$fNameRegister}\", \"{$lNameRegister}\", \"{$userRegister}\", \"{$passwordRegister}\")"; //1ere reqête
    //die($req);
    $insertUser = $db->prepare($req);
    $insertUser->execute();
    header("Location: index.php");
}
else{
    $msgRegister = "Données Incorrect !";
    $_SESSION["msgRegister"] = $msgRegister;
    header("Location: ./registration.php");
}