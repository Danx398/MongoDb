
<?php 

// print_r($_POST);

    // session_start();
    require_once "../clases/crud.php";

    // llamare la clase Crud del documento crud para acceder a las variables de lo datos
    $crud= new Crud();
    // arreglo de los datos con la variable global POST
    $datos= array(
        "_id" => $_POST['idActualizar'],
        "nombre" => $_POST['nombre'], //en un lado tenemos los nombres de mis columnas de las tablas
        "paterno" => $_POST['Apaterno'], //al lado de la variable POST tenemos los nombres de mis inputs
        "materno" => $_POST['Amaterno'], //si no estan escritas correctamente no hara ninguna accion.
        "fecha_nacimiento" => $_POST['fechaNac']
    );
    $respuesta = $crud->actualizarDatos($datos);

    // cuando vas a actualiza, y el dato cambia se utiliza get modifiedcount,
    //  en caso contraro de que no modifique nada pero que le de al boton actualizar te lleva al index
    if($respuesta->getModifiedCount() >0 || $respuesta->getMatchedCount()>0){
        // $_SESSION['mensaje_crud']="insert";
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }

?>