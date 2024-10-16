<?php

require_once 'conexion_db.php';

class ProductoModel{
    //conexion a la db

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

    public function getProductosCategoria($id_material){
        $pdo = crearConexion();

        $sql = "select * from productos where id_material = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id_material]);
    
        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;

    }

    public function detalleProducto($id){
        
        $pdo = crearConexion();

        $sql = "select * from productos  where id_producto = ?";
        $query = $pdo->prepare($sql);
        $query->execute([$id]);
    
        $producto = $query->fetch(PDO::FETCH_OBJ);

        return $producto; 

    }

    public function eliminarProducto($producto){
        $pdo = crearConexion();
        $sql = "DELETE FROM productos WHERE id_producto =?";
        $query = $pdo->prepare($sql);
        $query->execute([$producto]);
    }

    public function guardarCambios($nombre, $precio, $descripcion, $imagen, $material, $id_producto){
        $pdo = crearConexion();
        
        $sql = 'UPDATE productos SET nombre=?, precio=?, descripcion=?, imagen=?, id_material=? WHERE id_producto=?';

        $query = $pdo->prepare($sql);
        $query->execute([$nombre, $precio, $descripcion, $imagen, $material, $id_producto]);
    }

    public function cargarProducto($nombre, $precio, $descripcion, $imagen, $material){
        $pdo = crearConexion();
        
        $sql = 'INSERT INTO productos SET nombre=?, precio=?, descripcion=?, imagen=?, id_material=? ';

        $query = $pdo->prepare($sql);
        $query->execute([$nombre, $precio, $descripcion, $imagen, $material]);
    }
}

?>