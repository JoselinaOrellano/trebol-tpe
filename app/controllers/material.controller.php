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

}