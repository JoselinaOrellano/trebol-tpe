<?php
require_once 'libs/Smarty.class.php';

class MaterialView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    //public function mostrarMateriales($materiales) {
       // $this->smarty->assign('materiales', $materiales);
        //this->smarty->display('nav.tpl');
    //}


}