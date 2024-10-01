<?php

require_once 'app/models/material.model.php';
require_once 'app/views/material.view.php';


class MaterialController {
    private $model;
    private $view;

    public function __construct(){
        $this->model = new MaterialModel();
        $this->view = new MaterialView();
    }

    public function mostrarMateriales(){
        $materiales =  $this->model->getMateriales();

        $this->view->mostrarMateriales($materiales);
    }

}