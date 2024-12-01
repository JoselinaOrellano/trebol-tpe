<?php
require_once 'libs/Smarty.class.php';

class MaterialView {

    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
        $this->smarty->assign('base', BASE_URL);
    }

    public function mostrarMateriales($materiales, $logueado, $error = null) {
       $this->smarty->assign('error', $error);
       $this->smarty->assign('materiales', $materiales);
       $this->smarty->assign('logueado', $logueado);
       $this->smarty->display('verCategorias.tpl');
    }

    public function editarMaterial($detalleMaterial, $materiales, $logueado, $error){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->assign('material', $detalleMaterial);

       $this->smarty->display('editarMaterial.tpl');
    }

    public function agregarMaterial($materiales, $logueado,$error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('materiales', $materiales);
        $this->smarty->assign('logueado', $logueado);
        $this->smarty->display('formulario_agregarMaterial.tpl');
    }

    public function eliminarMaterial($id_material){
        $pdo = $this->crearConexion();
        $sql = "DELETE FROM materiales WHERE id_material =?";
        $query = $pdo->prepare($sql);
        try {
            $query->execute([$id_material]);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}