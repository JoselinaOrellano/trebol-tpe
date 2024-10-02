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

}