<?php
require "fonction.php";

is_connected();
unset($_SESSION['admin']);

header('location: index.php?page=login');
