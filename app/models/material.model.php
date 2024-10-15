<?php

require_once 'conexion_db.php';

class MaterialModel{

    public function getMateriales(){
        $pdo = crearConexion();
        $sql = "select * from materiales";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $materiales = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $materiales;
    }

    public function getIdMaterial($nombreMaterial, $materiales){
        foreach ($materiales as $material ){
            if ($material->material == $nombreMaterial){
                return $material->id_material;
            }
        }

    }
}

?>