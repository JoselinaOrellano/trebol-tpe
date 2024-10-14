<?php
require_once 'libs/Smarty.class.php';

class UsuarioView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function mostrarContacto($materiales, $logueado) {
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display('contacto.tpl');
    }

    public function mostrarFormulario($materiales, $template, $logueado){
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display($template);
    }

}
?>