<?php 

    //require_once "./Conexion.php";

    class Crud extends Conexion{
        public function songs()
        {
            try{
                $conexion = parent::conectar();
                if (!$conexion) {
                    throw new Exception("Error de conexión a la base de datos.");
                }
                $coleccion = $conexion->songs;
                if (!$coleccion) {
                    throw new Exception("No se encontró la colección de canciones.");
                }
                $datos = $coleccion->find();
                return $datos;
                $datos1 = $coleccion->find();
                return $datos1;
            } catch (\Throwable $th){
                return $th->getMessage();
            }
        }

    }
?>
