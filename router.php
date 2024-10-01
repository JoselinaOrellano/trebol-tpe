<?php

require_once 'app/controllers/producto.controller.php';
require_once 'app/controllers/material.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'inicio'; // por defecto inicio
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'inicio':
        $controller = new ProductoController();
        $controller->mostrarProductos();
        break;
    case 'nuevoProducto':
        $controller = new ProductoController();
        $controller->insertarProducto();
        break;
    case 'modificarProducto':
        $controller = new ProductoController();
        $controller->modificarProducto();
        break;
    case 'eliminarProducto':
        $controller = new ProductoController();
        $controller->eliminarProducto();     
        break;
    case 'contacto':
        // PREGUNTAR COMO DIRECCIONAR ???? 
        break;
    case 'ingresar':
        $controller = new UsuarioController();
        $controller->ingresar();     
        break;
    case 'registrarse':
        $controller = new UsuarioController();
        $controller->registrarse();     
        break;
    case 'materiales':
        $controller = new MaterialController();
        $controller->mostrarMateriales();
        break;
    default:
        echo "404 not found";
        break;
}


?>

