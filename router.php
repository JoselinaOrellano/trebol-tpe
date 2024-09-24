<?php

require_once 'app/controllers/producto.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; // por defecto home
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);




?>

