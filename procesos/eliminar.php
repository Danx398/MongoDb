
<?php 

    // session_start();
    require_once "../clases/crud.php";

    // llamare la clase Crud del documento crud para acceder a las variables de lo datos
    $crud= new Crud();
    // arreglo de los datos con la variable global POST
    $id = $_POST['idEliminar'];
    echo ($id);

    $respuesta = $crud->eliminarDatos($id);

    if($respuesta->getDeletedCount() >0){
        // $_SESSION['mensaje_crud']="delete";
        header("location:../index.php");
    }else{
        print_r($respuesta);
    }

?>