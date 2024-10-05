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

    public function getUsuario($nombreUsuario){
        $pdo = $this->crearConexion();

        $sql = "select * from usuarios where nombre_usuario = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$nombreUsuario]);
    
        $usuario = $query->fetch(PDO::FETCH_OBJ);
    
        return $usuario;
    }

    public function crearUsuario($nombre, $apellido, $email, $nombreUsuario, $password){
        $pDO = $this->crearConexion();
        
        $sql = 'INSERT INTO usuarios (nombre, apellido, email, nombre_usuario, password) 
                VALUES (?, ?, ?, ?, ?)';

        $query = $pDO->prepare($sql);
        try {
            $query->execute([$nombre, $apellido, $email, $nombreUsuario, $password]);
        } catch (\Throwable $th) {
            return null;
        }
    }

    
}

?>