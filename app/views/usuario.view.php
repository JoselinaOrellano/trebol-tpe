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


}
?>