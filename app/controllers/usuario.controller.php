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

    public function ingresar(){
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewUsuario->mostrarFormularioIngreso($materiales);
        
    }

    public function registrarse(){
        $this->viewUsuario->mostrarFormularioRegistro();//creo q deberia haber una sola funcion mostrar formulario con un parametro para identificar registro o login
    }


}

?>