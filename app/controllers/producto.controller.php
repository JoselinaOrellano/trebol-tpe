<?php

require_once 'app/models/producto.model.php';
require_once 'app/views/producto.view.php';
require_once 'app/models/material.model.php';
require_once 'app/controllers/usuario.controller.php';

class ProductoController {
    private $modelProducto;
    private $viewProducto;
    private $modelMaterial;
    private $usercontroller;

    public function __construct(){
        $this->modelProducto = new ProductoModel();
        $this->viewProducto = new ProductoView();
        $this->modelMaterial = new MaterialModel();
        $this->userController = new UsuarioController();
    }

    public function mostrarProductos(){
        $logueado = $this->userController->logueado();
        $productos =  $this->modelProducto->getProductos();
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewProducto->mostrarProductos($productos, $materiales, $logueado);
    }

    public function detalleProducto($producto){
        $logueado = $this->userController->logueado();
        $detalle=$this->modelProducto->detalleProducto($producto);
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewProducto->detalleProducto($detalle, $materiales, $logueado);

    }

    public function eliminarProducto($producto){
        $this->modelProducto->eliminarProducto($producto);
        header('Location: ' . BASE_URL . 'inicio'); 

    }

    public function modificarProducto($id_producto){
        $logueado = $this->userController->logueado();
        $materiales = $this->modelMaterial->getMateriales();
        $producto=$this->modelProducto->detalleProducto($id_producto);
        $this->viewProducto->modificarProducto($producto, $materiales, $logueado);
    }

    public function guardarCambios($id_producto){
        $nombre = $_POST['nombreProducto'];
        $precio = $_POST['precioProducto'];
        $descripcion = $_POST['descripcionProducto'];
        $imagen = "img/". $_POST['imagenProducto'];
        $material = $_POST['materialProducto'];


        $this->modelProducto->guardarCambios($nombre, $precio, $descripcion, $imagen, $material, $id_producto);
        header('Location: ' . BASE_URL . 'inicio'); 
    }

    public function agregarProducto(){
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewProducto->agregarProducto($materiales);
    }

    public function cargarProducto(){
        $nombre = $_POST['nombreProducto'];
        $precio = $_POST['precioProducto'];
        $descripcion = $_POST['descripcionProducto'];
        $imagen = "img/". $_POST['imagenProducto'];
        $material = $_POST['materialProducto'];

        $this->modelProducto->cargarProducto($nombre, $precio, $descripcion, $imagen, $material);
        header('Location: ' . BASE_URL . 'inicio');
    }

    public function mostrarCategoria($material){
        $productos =  $this->modelProducto->getProductosCategoria($material);
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewProducto->mostrarProductos($productos, $materiales);
    }

}