<?php

require_once 'conexion_db.php';

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

    public function getProductos(){
        $pdo = crearConexion();

        $sql = "SELECT a.*, b.*
                FROM productos a
                INNER JOIN materiales b
                ON a.id_material = b.id_material";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $productos;
    }

    // public function getProductos(){
    //     $pdo = $this->crearConexion();

    //     $sql = "select * from productos ";
    //     $query = $pdo->prepare($sql);
    //     $query->execute();
    
    //     $productos = $query->fetchAll(PDO::FETCH_OBJ);
    
    //     return $productos;
    // }

    public function detalleProducto($id){
        
        $pdo = crearConexion();

        $sql = "select * from productos  where id_producto = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id]);
    
        $producto = $query->fetch(PDO::FETCH_OBJ);

        return $producto; 

    }

    public function eliminarProducto($producto){
        $pdo = $this->crearConexion();
        $sql = "DELETE FROM productos WHERE id_producto =?";
        $query = $pdo->prepare($sql);
        $query->execute([$producto]);
    }

    public function guardarCambios($nombre, $precio, $descripcion, $imagen, $material, $id_producto){
        $pdo = $this->crearConexion();
        
        $sql = 'UPDATE productos SET nombre=?, precio=?, descripcion=?, imagen=?, id_material=? WHERE id_producto=?';

        $query = $pdo->prepare($sql);
        $query->execute([$nombre, $precio, $descripcion, $imagen, $material, $id_producto]);
    }
}

?>