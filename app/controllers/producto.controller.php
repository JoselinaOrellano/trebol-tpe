<?php

require_once 'app/models/producto.model.php';
require_once 'app/views/producto.view.php';
require_once 'app/models/material.model.php';

class ProductoController {
    private $modelProducto;
    private $viewProducto;
    private $modelMaterial;

    public function __construct(){
        $this->modelProducto = new ProductoModel();
        $this->viewProducto = new ProductoView();
        $this->modelMaterial = new MaterialModel();
    }

    public function mostrarProductos(){
        $productos =  $this->modelProducto->getProductos();
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewProducto->mostrarProductos($productos, $materiales);
    }

    public function detalleProducto($producto){
        $detalle=$this->modelProducto->detalleProducto($producto);
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewProducto->detalleProducto($detalle, $materiales);

    }

    public function eliminarProducto($producto){
        //$this->verificarUsuario();
        $this->modelProducto->eliminarProducto($producto);
        header('Location: ' . BASE_URL . 'inicio'); 

    }

    public function modificarProducto($id_producto){
        //$this->verificarUsuario();
        $materiales = $this->modelMaterial->getMateriales();
        $producto=$this->modelProducto->detalleProducto($id_producto);
        $this->viewProducto->modificarProducto($producto, $materiales);
    }

    public function guardarCambios($id_producto){
        $nombre = $_POST['nombreProducto'];
        $precio = $_POST['precioProducto'];
        $descripcion = $_POST['descripcionProducto'];
        $imagen = $_POST['imagenProducto'];
        $material = $_POST['materialProducto'];


        $this->modelProducto->guardarCambios($nombre, $precio, $descripcion, $imagen, $material, $id_producto);
        header('Location: ' . BASE_URL . 'inicio'); 
    }

}