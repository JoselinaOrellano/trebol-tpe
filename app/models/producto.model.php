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

    public function getProductos(){
        $pdo = $this->crearConexion();

        $sql = "select * from productos ";
        $query = $pdo->prepare($sql);
        $query->execute();
    
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $productos;
    }

    public function detalleProducto($id){
        
        $pdo = $this->crearConexion();

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
}

?>