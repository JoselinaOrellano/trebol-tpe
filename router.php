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
        $id_producto=$params[1];
        $controllerProducto->modificarProducto($id_producto);        
        break;
    case 'guardarCambios':
        $id_producto=$params[1];
        $controllerProducto->guardarCambios($id_producto);        
        break;
    case 'eliminarProducto':
        $producto=$params[1];
        $controllerProducto->eliminarProducto($producto);     
        break;
    case 'agregarProducto':
        $controllerProducto->agregarProducto();
        break;
    case 'cargarProducto':
        $controllerProducto->cargarProducto();        
        break;    
    case 'contacto':
        $controllerUsuario->mostrarContacto(); 
        break;
    case 'agregarProducto':
        $controllerProducto->agregarProducto();
        break;
    case 'ingresar':
        $controllerUsuario->ingresar();    //esta funcion no deberia llamarse de otra manera?? no estoy seguro igual 
        break;
    case 'login':
        $controllerUsuario->autenticar();
        break;
    case 'registrarse':
        $controllerUsuario->registrarse();     
        break;
    case 'registrar':
        $controllerUsuario->agregarUsuario();     
        break;
    default:
        echo "404 not found";
        break;
}


?>

