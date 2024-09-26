<?php

require_once 'app/controllers/producto.controller.php';

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
    default:
        echo "404 not found";
        break;
}


?>

