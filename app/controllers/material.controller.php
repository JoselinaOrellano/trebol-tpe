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

    public function editarMaterial($id_material, $error = null){
        $materiales =  $this->model->getMateriales();
        $logueado = $this->userController->logueado();
        $detalleMaterial = $this->model->detalleMaterial($id_material);
        $this->view->editarMaterial($detalleMaterial, $materiales, $logueado, $error);
    }

    public function confirmarCambios($id_material){
        if(!isset($_POST['nombreMaterial']) || empty($_POST['nombreMaterial'])
        || !isset($_POST['proveedor']) || empty($_POST['proveedor'])){
            $error = "Faltan completar campos";
            $this->editarMaterial($id_material, $error);
        }

        else{
           $material = $_POST['nombreMaterial'];
            $proveedor = $_POST['proveedor'];
            $this->model->confirmarCambios($material, $proveedor, $id_material);
            header('Location: ' . BASE_URL . 'modificarMateriales');  
        }
            
        
    }

    public function eliminarMaterial($id_material){
        $eliminado = $this->model->eliminarMaterial($id_material);

        if($eliminado){
            header('Location: ' . BASE_URL . 'modificarMateriales');
        }
        else{
            $materiales =  $this->model->getMateriales();
            $logueado = $this->userController->logueado();
            $this->view->mostrarMateriales($materiales, $logueado, "No se pudo eliminar");
        }
        
    }

    public function agregarMaterial(){
        $materiales =  $this->model->getMateriales();
        $logueado = $this->userController->logueado();
        $this->view->agregarMaterial($materiales, $logueado);
    }

    public function cargarMaterial (){
        $materiales =  $this->model->getMateriales();
        $logueado = $this->userController->logueado();
        
        if(!isset($_POST['nombreMaterial']) || empty($_POST['nombreMaterial'])
        || !isset($_POST['proveedor']) || empty($_POST['proveedor'])){
            $error = "faltan completar campos";
            $this->view->agregarMaterial($materiales, $logueado, $error);
        }
        else{
            $material = $_POST['nombreMaterial'];
            $proveedor = $_POST['proveedor'];

            $this->model->cargarMaterial($material, $proveedor);
            header('Location: ' . BASE_URL . 'modificarMateriales');   
        }
        
    }
}