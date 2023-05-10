<?php 

    //require_once "./Conexion.php";

    class Crud extends Conexion{
        public function songs()
        {
            try{
                $conexion = parent::conectar();
                $coleccion = $conexion->songs;
                $datos = $coleccion->find();
                return $datos;
                $datos1 = $coleccion->find();
                return $datos1;
            }catch (\Throwable $th){
                return $th->getMessage();
            }
        }

    }
?>