<?php

class ProductoModel{
    //conexion a la db

    private function crearConexion(){
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'trebol_muebleria';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
        } catch (\Throwable $th) {
            die($th);
        }
        return $pdo;
    }
}

?>