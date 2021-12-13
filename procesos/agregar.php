

<?php 

    // session_start();
    require_once "../clases/crud.php";
    
    // llamare la clase Crud del documento crud para acceder a las variables de lo datos
    $crud= new Crud();
    // arreglo de los datos con la variable global POST
    $datos= array(
        "nombre" => $_POST['nombre'], //en un lado tenemos los nombres de mis columnas de las tablas
        "paterno" => $_POST['Apaterno'], //al lado de la variable POST tenemos los nombres de mis inputs
        "materno" => $_POST['Amaterno'], //si no estan escritas correctamente no hara ninguna accion.
        "fecha_nacimiento" => $_POST['fechaNac']
    );
    $respuesta = $crud->insertarDatos($datos);

    if($respuesta->getInsertedId() >0){
        // $_SESSION['mensaje_crud']="insert";
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }

?>