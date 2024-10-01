<?php

require_once 'app/models/producto.model.php';
require_once 'app/views/producto.view.php';


class ProductoController {
    private $model;
    private $view;

    public function __construct(){
        $this->model = new ProductoModel();
        $this->view = new ProductoView();
    }

    public function mostrarProductos(){
        $productos =  $this->model->getProductos();

        $this->view->mostrarProductos($productos);
    }

}