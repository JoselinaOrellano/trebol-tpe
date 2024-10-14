<?php
require_once 'libs/Smarty.class.php';

class MaterialView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function mostrarMateriales($materiales, $logueado) {
       $this->smarty->assign('materiales', $materiales);
       $this->smarty->assign('logueado', $logueado);
       $this->smarty->display('verCategorias.tpl');
    }


}