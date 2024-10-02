<?php

require_once 'app/models/usuario.model.php';
require_once 'app/views/usuario.view.php';


class UsuarioController {
    private $modelUsuario;
    private $viewUsuario;
    private $modelMaterial;

    public function __construct(){
        $this->modelUsuario = new UsuariolModel();
        $this->viewUsuario = new UsuarioView();
        $this->modelMaterial = new MaterialModel();
    }

    public function mostrarContacto(){
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewUsuario->mostrarContacto($materiales);
    }


}

?>