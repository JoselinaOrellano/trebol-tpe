<?php
require_once 'libs/Smarty.class.php';

class ProductoView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function mostrarProductos($productos, $materiales) {
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display('inicio.tpl');
    }

        public function detalleProducto($producto, $materiales){
            $this->smarty->assign('producto', $producto);
            $this->smarty->assign('materiales', $materiales);
            $this->smarty->display('producto.tpl');
        }
    
     public function modificarProducto($producto, $materiales){
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->display('formulario_modificarProducto.tpl');
     }
}
?>