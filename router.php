<?php

require_once 'app/controllers/producto.controller.php';
require_once 'app/controllers/material.controller.php';
require_once 'app/controllers/usuario.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'inicio'; // por defecto inicio
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$controllerProducto = new ProductoController();
$controllerUsuario = new UsuarioController();

switch ($params[0]) {
    case 'inicio':
        $controllerProducto->mostrarProductos();
        break;
    case 'producto':
        $producto=$params[1];
        $controllerProducto ->detalleProducto($producto);
        break;
    case 'nuevoProducto':
        $controllerProducto->insertarProducto();
        break;
    case 'modificarProducto':
        $controllerProducto->modificarProducto();
        break;
    case 'eliminarProducto':
        $controllerProducto->eliminarProducto();     
        break;
    case 'contacto':
        $controllerUsuario->mostrarContacto(); 
        break;
    case 'ingresar':
        $controllerUsuario->ingresar();     
        break;
    case 'registrarse':
        $controllerUsuario->registrarse();     
        break;
    default:
        echo "404 not found";
        break;
}


?>

