<?php
require 'fonction.php';

$error = null;

if(isset($_POST['login']) && isset($_POST['password'])){
    $arrayUser = read($_POST['login']);
    if(password_verify($_POST['password'], $arrayUser['password'])){
        // session_start();
        $_SESSION['admin'] = $arrayUser['mail'];
        header('Location: index.php?page=dashboard');
    }
}

