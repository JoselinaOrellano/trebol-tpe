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
$controllerMateriales =  new MaterialController();
$logueado = $controllerUsuario->logueado();

switch ($params[0]) {
    case 'inicio':
        $controllerProducto->mostrarProductos();
        break;
    case 'mostrarCategoria':
        $material=$params[1];
        $controllerProducto ->mostrarCategoria($material);
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
        $controllerUsuario->mostrarContacto($logueado); 
        break;
    case 'ingresar':
        $controllerUsuario->ingresar($logueado);
        break;
    case 'login':
        $controllerUsuario->autenticar();
        break;
    case 'logout':
        $controllerUsuario->logout();
        break;
    case 'registrarse':
        $controllerUsuario->registrarse($logueado);     
        break;
    case 'registrar':
        $controllerUsuario->agregarUsuario();     
        break;

    case 'modificarMateriales':
        $controllerMateriales->modificarMateriales();
        break;
    case 'editarMaterial':
        $id_material=$params[1];
        $controllerMateriales->editarMaterial($id_material);
        break;
    case 'confirmarCambios':
        $id_material=$params[1];
        $controllerMateriales->confirmarCambios($id_material);
        break;
    case 'eliminarMaterial':
        $id_material=$params[1];
        $controllerMateriales->eliminarMaterial($id_material);
        break;
    case 'agregarMaterial':
        $controllerMateriales->agregarMaterial();
        break;
        case 'cargarMaterial':
            $controllerMateriales->cargarMaterial();
            break;
    default:
        echo "404 not found";
        break;
}


?>

