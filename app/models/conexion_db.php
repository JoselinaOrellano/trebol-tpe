<?php
require_once 'config/config.php';    

function crearConexion(){
        global $configuracion;

        $host = $configuracion['host'];
        $database = $configuracion['dbnombre'];
        $user = $configuracion['usuario'];
        $password = $configuracion['password'];
        

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
        } catch (\Throwable $th) {
            die($th);
        }
        return $pdo;
    }

?>