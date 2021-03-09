<?php

if(isset($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = 'home';
}

if($page === 'home'){
    require 'views/home.php';
}

if($page === 'dashboard'){
    require 'views/dashboard.php';
}

if ($page === 'login') {
    require 'views/login.php';
}

if ($page === 'deconnexion') {
    require 'config/deconnexion.php';
}
if ($page === 'inscription') {
    require 'views/inscription.php';
}