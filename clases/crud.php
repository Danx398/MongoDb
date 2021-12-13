
<?php 

    require_once "conexion.php";

    class Crud{

        // este metodo es para mostrar los datos en la tabla del documento index
        public function mostrar(){
            try {
                $conexion = conexion::conectar(); // variable = clase de la hoja conexion :: llamar function ();
                $coleccion = $conexion -> personas; // traera los datos de la tabla personas o accedera a ello  
                $datos = $coleccion -> find(); //ya usa los comandos de mongo
                return $datos;
            } catch (\Throwable $th) {
                return $th;
            }
       }

        // metodo insertarDatos       recibe datos
        public function insertarDatos($datos){
            try {
                $conexion = conexion::conectar(); // variable = clase de la hoja conexcion :: llamar function ();
                $coleccion = $conexion -> personas; // traera los datos de la tabla personas o ingresara a ella
                $resultado = $coleccion -> insertOne([ // Comando de mongo insertOne osea que insertaremos datos en la tabla
                    "nombre" => $datos['nombre'], //nombres de mis columnas de la tabla en el lado izquierdo
                    "paterno" => $datos['paterno'], //nombres de mis variables del arreglo creado en el doc agregar
                    "materno" => $datos['materno'],
                    "fecha_nacimiento" => $datos['fecha_nacimiento']
                ]); 
                return $resultado;
            } catch (\Throwable $th) {
                return $th;
            }
        }

        // obtener el documento para mostrar en la vista eliminar y en la vista actualizar
        public function obtenerDocumento($id){
            $conexion = conexion::conectar();
            $coleccion = $conexion -> personas;
            try {
                $datos = $coleccion -> findOne(array('_id' => new MongoDB\BSON\ObjectId($id)));
                return $datos;
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        //    metodo eliminar datos
        public function eliminarDatos($datos){
            try {
                $conexion = conexion::conectar();
                $coleccion = $conexion -> personas;
                $respuesta = $coleccion -> deleteOne(array('_id' => new MongoDB\BSON\ObjectId($datos)));
                return $respuesta;
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        // metodo actualizarDatos
        public function actualizarDatos($datos){
                try {
                    $conexion = conexion::conectar();
                    $coleccion = $conexion -> personas;
                    $resultado = $coleccion -> updateOne(
                        ['_id' => new MongoDB\BSON\ObjectId($datos['_id'])],
                        [
                            '$set' => [
                                "nombre" => $datos['nombre'],
                                "paterno" => $datos['paterno'],
                                "materno" => $datos['materno'],
                                "fecha_nacimiento" => $datos['fecha_nacimiento']
                            ],
                        ]
                    );
                    return $resultado;
                } catch (\Throwable $th) {
                    throw $th;
                }
            }

    }

?>

<!-- cuando un documento esta en el mismo nivel dentro de la misma carpeta no es necesario llamar la carpeta,
solo el documento, cuando ya este en otra carpeta si es necesario llamar la carpeta para obtener el documento requerido -->
