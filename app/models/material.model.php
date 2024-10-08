<?php

require_once 'conexion_db.php';

class MaterialModel{
//     //conexion a la db

//     private function crearConexion(){
//         $host = 'localhost';
//         $user = 'root';
//         $password = '';
//         $database = 'trebol_muebleria';

//         try {
//             $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
//         } catch (\Throwable $th) {
//             die($th);
//         }
//         return $pdo;
//     }

    public function getMateriales(){
        $pdo = crearConexion();
        $sql = "select * from materiales";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $materiales = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $materiales;
    }
}

?>