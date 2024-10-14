<?php

require_once 'conexion_db.php';

class UsuariolModel{

    public function getUsuario($nombreUsuario){
        $pdo = crearConexion();

        $sql = "select * from usuarios where nombre_usuario = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$nombreUsuario]);
    
        $usuario = $query->fetch(PDO::FETCH_OBJ);
    
        return $usuario;
    }

    public function crearUsuario($nombre, $apellido, $email, $nombreUsuario, $password){
        $pDO = crearConexion();
        
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