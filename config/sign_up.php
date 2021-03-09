<?php
require "fonction.php";
$error = null;


if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['checkPassword'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $checkPassword = $_POST['checkPassword'];
    if ($password !== $checkPassword) {
            $error = "erreur";
    } else {
        // criptage du password
        $encryptedPass = password_hash($password, PASSWORD_BCRYPT);
        
        // insertion dans la bdd et connexion
        if (create($login, $encryptedPass)) {
            session_start();
            $_SESSION['admin'] = $login;
            header("Location: index.php?page=dashboard ");
        }
    }
} 
