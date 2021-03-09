<?php
if (!function_exists("is_connected")) {
    function is_connected(): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return !empty($_SESSION['admin']);
    }
}

if (!function_exists("create")) {
    function create(string $log, string $password): bool
    {
        require "./database/connect.php";
        $sql = 'INSERT INTO users (mail, password) VALUES (:mail, :pass)';
        $newUser = $db->prepare($sql);
        $newUser->bindValue(":mail", $log, PDO::PARAM_STR);
        $newUser->bindValue(":pass", $password, PDO::PARAM_STR);
        $response = $newUser->execute();
        return $response;
    }
}


if (!function_exists('read')) {
    function read(string $login): array
    {
        require "./database/connect.php";
        $sql = 'SELECT * FROM users WHERE mail = :mail';
        $getUser = $db->prepare($sql);
        $getUser->bindValue(":mail", $login, PDO::PARAM_STR);
        $getUser->execute();
        $response = $getUser->fetch(PDO::FETCH_ASSOC);
        return $response;
    }
}
