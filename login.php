<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

$user = filter_input(INPUT_POST, "tbxUsernameLogin");
$password = filter_input(INPUT_POST, "tbxPasswordLogin");
$connect = false;

$userAdmin = "admin";
$passwordAdmin = "123";

if((isset($user) == $userAdmin) && (isset($password) == $passwordAdmin)){
    $connect = true;
    $_SESSION["connect"] = $connect;
    header("Location: confirmation.php");
}
else{
    echo "Login Invalide";
}