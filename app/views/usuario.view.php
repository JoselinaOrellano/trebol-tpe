<?php
require_once 'libs/Smarty.class.php';

class UsuarioView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function mostrarContacto($materiales) {
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display('contacto.tpl');
    }

    public function mostrarFormularioIngreso($materiales){
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display('formulario_ingreso.tpl');
    }

    public function mostrarFormularioRegistro(){ //estas ultimas dos funciones deberian llamarse igual y pasar nombre de formulario como parametro
        $this->smarty->display('formulario_registro.tpl');
    }


}
?>