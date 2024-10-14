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

    public function mostrarContacto($logueado){
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewUsuario->mostrarContacto($materiales, $logueado);
    }

    public function ingresar($logueado){
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewUsuario->mostrarFormulario($materiales, 'formulario_ingreso.tpl', $logueado);        
    }

    public function logout () {
        session_start();
        session_destroy();

        header('Location: '.'login');
    }

    function logueado(){
        
        if (isset($_SESSION["usuario"])){
            return true;
        }else{
            session_start();
            return false;
        }
    }

    public function autenticar(){
        $nombreUsuario = $_REQUEST['usuario'];
        $password = $_REQUEST['password'];

        $user = $this->modelUsuario->getUsuario($nombreUsuario);

        if($user && password_verify($password,($user->password))){
            session_start();

            $_SESSION["logueado"] = true;
            $_SESSION["usuario"] = $nombreUsuario;
            
            header('Location: '.'inicio');
        }else{
            header('Location: '.'ingresar');//deberia aparecen mjs? tanto sesion iniciada como clave incorrecta?
        }

    }

    public function registrarse($logueado){
        $materiales = $this->modelMaterial->getMateriales();
        $this->viewUsuario->mostrarFormulario($materiales, 'formulario_registro.tpl', $logueado);//creo q deberia haber una sola funcion mostrar formulario con un parametro para identificar registro o login
    }

    public function agregarUsuario (){
        $nombre = $_POST['nombre'];
        $apellido  = $_POST['apellido'];
        $email = $_POST['email'];
        $nombreUsuario = $_POST['usuario'];
        $password = $_POST['password'];
    
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->modelUsuario->crearUsuario($nombre, $apellido, $email, $nombreUsuario, $hash);
        header('Location: '.'ingresar');
    }  



}

?>