<?php 

    //require_once "./Conexion.php";

    class Crud extends Conexion{
    public function songs()
    {
        try{
            $conexion = parent::conectar();
            $coleccion = $conexion->selectCollection('songs');
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th){
            return $th->getMessage();
        }
    }
}
?>
