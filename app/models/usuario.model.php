<?php

class UsuariolModel{

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

    public function getUsuarios(){
        $pdo = $this->crearConexion();
        $sql = "select * from usuarios";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $usuarios;
    }

    
}

?>