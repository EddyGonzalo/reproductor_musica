<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/reproductor_musica/vendor/autoload.php";

    class Conexion {
        public function conectar() {
            try {
                $servidor = "cluster0.wdozrtl.mongodb.net";
                $baseDatos = "database1";
                $usuario = "equeama";
                $contraseña = "hJoWtnVgnDfdzVbZ";
                $cadenaConexion = "mongodb+srv://" . $usuario . ":" . $contraseña . "@" . $servidor . "/" . $baseDatos . "?retryWrites=true&w=majority";

                $cliente = new MongoDB\Client($cadenaConexion);

                return $cliente->selectDatabase($baseDatos);
            } catch (\Throwable $th) {
                return $th ->getMessage();
            }
        }
    }
?>
