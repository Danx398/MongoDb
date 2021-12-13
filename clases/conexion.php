
<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."MyProjects/adminbd_Mongo_Copy/admindbmongo/vendor/autoload.php";

    class conexion{
        public static function conectar(){
            $servidor="127.0.0.1"; //tu ip, la del servidor local localhost
            $puerto="27017"; //puerto por defecto del mongodb
            $usuario="danx3"; //usuario que creamos en mongodb
            $password="123456"; //mi contraseña del susuario
            $DB="crudmongo"; //base de datos

            // creo mi cadena para facilitar el acceso a mongo
            $cadenaConexion = "mongodb://". $usuario . ":" . $password . "@" . $servidor . ":" . $puerto . "/" . $DB;
										 try{
											$cliente = new MongoDB\Client($cadenaConexion);
											return $cliente->selectDatabase($DB);
										} catch (\Throwable $th){
											return $th;
										}
            return $cliente->selectDatabase($DB);

        }
    }
    // $objeto = new conexion();
	// print_r($objeto->conectar());

    // echo $cadenaConexcion;
?>