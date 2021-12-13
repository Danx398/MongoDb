
<?php 
  require_once "clases/crud.php";
  $crud = new Crud();
  $id = $_POST['_idActualizar'];
  $datos = $crud -> obtenerDocumento($id);
  // echo $id;
  $idMongo = new MongoDB\BSON\ObjectId($datos -> _id);
?>

<?php include "header.php" ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container bg-light">
    <h1 class="display-4 text-center"><i class="fas fa-edit"></i> Actualizar un registro </h1>
    <hr>
    <p class="lead">
        <form action="procesos/actualizar.php" method="POST">
            <input type="text" hidden name="idActualizar" value="<?php echo $idMongo; ?>" >
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="<?php echo $datos -> nombre; ?>">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" name="Apaterno" class="form-control" required value="<?php echo $datos -> paterno; ?>">
            <label for="materno">Apellido materno</label>
            <input type="text" name="Amaterno" class="form-control" required value="<?php echo $datos -> materno; ?>">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fechaNac" class="form-control" required value="<?php echo $datos -> fecha_nacimiento; ?>">
            <br>
                <button class="btn btn-warning btn-block"><i class="fas fa-edit"></i> Actualizar </button>
            </form>
            <!-- <button class="btn btn-outline-warning btn-block"><i class="fas fa-edit"></i> Actualizar </button> -->
            <br>
            <a href="index.php" class="btn btn-dark btn-block"> 
            <i class="fas fa-backward"></i>
              Regresar
            </a>
            <br>
        </form>
    </p>
  </div>
</div>

<?php include "scripts.php" ?>
