<?php
require_once 'libs/Smarty.class.php';

class ProductoView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function mostrarProductos($productos, $materiales) {
        $this->smarty->assign('productos', $productos, 'materiales', $materiales);
        $this->smarty->display('inicio.tpl');
    }


}