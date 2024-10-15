<?php

require_once 'app/models/material.model.php';
require_once 'app/views/material.view.php';
require_once 'app/controllers/usuario.controller.php';

class MaterialController {
    private $model;
    private $view;
    private $usercontroller;

    public function __construct(){
        $this->model = new MaterialModel();
        $this->view = new MaterialView();
        $this->userController = new UsuarioController();
    }


    public function modificarMateriales(){
        $materiales =  $this->model->getMateriales();
        $logueado = $this->userController->logueado();
        $this->view->mostrarMateriales($materiales, $logueado);
    }

    public function editarMaterial($id_material){
        $materiales =  $this->model->getMateriales();
        $logueado = $this->userController->logueado();
        $detalleMaterial = $this->model->detalleMaterial($id_material);
        $this->view->editarMaterial($detalleMaterial, $materiales, $logueado);
    }

    public function confirmarCambios($id_material){
        $material = $_POST['nombreMaterial'];
        $proveedor = $_POST['proveedor'];
        $this->model->confirmarCambios($material, $proveedor, $id_material);
        header('Location: ' . BASE_URL . 'modificarMateriales'); 
    }

    public function eliminarMaterial($id_material){
        $this->model->eliminarMaterial($id_material);
        header('Location: ' . BASE_URL . 'modificarMateriales');
    }

    public function agregarMaterial(){
        $materiales =  $this->model->getMateriales();
        $logueado = $this->userController->logueado();
        $this->view->agregarMaterial($materiales, $logueado);
    }

    public function cargarMaterial (){
        $material = $_POST['nombreMaterial'];
        $proveedor = $_POST['proveedor'];

        $this->model->cargarMaterial($material, $proveedor);
        header('Location: ' . BASE_URL . 'modificarMateriales');
    }
}