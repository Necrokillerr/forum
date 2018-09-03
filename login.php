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

$user = filter_input(INPUT_POST, "tbxUsernameLogin");
$password = filter_input(INPUT_POST, "tbxPasswordLogin");
$connect = false;
$_SESSION['connect'] = $connect;

//----------------------------------------------------------------------------------------------------------------------------
//REQUÊTES SQL
//----------------------------------------------------------------------------------------------------------------------------

//Connexion à la base de donnée
$db = new PDO('mysql:host=localhost; dbname=forum; charset=utf8mb4', 'root', '');

// Est-ce que l'user correspond à l'id de la bd ?
$req_User = $db->prepare("SELECT idUser FROM users WHERE login = ?");
$req_User->execute(array($user));
$resultUser = $req_User->fetch(PDO::FETCH_ASSOC);

// Est-ce que le mot de passe correspond à celui du user ?
$reqPasswordUser = $db->prepare("SELECT password FROM users WHERE idUser = ?");
$reqPasswordUser->execute(array($resultUser["idUser"]));
$resultPass = $reqPasswordUser->fetch(PDO::FETCH_ASSOC);

// Est-ce que le prenom du user correspond à l'id de la bd ?
$req_fName = $db->prepare("SELECT firstName FROM users WHERE idUser = ?");
$req_fName->execute(array($resultUser["idUser"]));
$result_fName = $req_fName->fetch(PDO::FETCH_ASSOC);

// Est-ce que le nom du user correspond à l'id de la bd ?
$req_lName = $db->prepare("SELECT lastName FROM users WHERE idUser = ?");
$req_lName->execute(array($resultUser["idUser"]));
$result_lName = $req_lName->fetch(PDO::FETCH_ASSOC);

//----------------------------------------------------------------------------------------------------------------------------

$_SESSION["lName"] = $result_lName["lastName"];
$_SESSION["fName"] = $result_fName["firstName"];

if(isset($_POST["btnLogin"])){
    if(sha1($password) == $resultPass["password"]){
        $_SESSION['connect'] = true;
        header("Location: ./main.php");
    }
    else{
        $msg = "Login invalide !!!!!!!!";
        $_SESSION["msg"] = $msg;
        header("Location: ./index.php");
    }
}

