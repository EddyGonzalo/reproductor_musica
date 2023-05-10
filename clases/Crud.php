<?php 

    //require_once "./Conexion.php";

    class Crud extends Conexion{
        public function songs()
        {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->songs;
                $datos = $coleccion->find();
                $datos1 = $coleccion->find();
                $resultados = [
                    'datos' => $datos,
                    'datos1' => $datos1
                ];
                return $resultados;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }


    }
?>
