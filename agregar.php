
<?php include "header.php" ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container bg-light">
    <h1 class="display-4 text-center"><i class="fas fa-user-plus"></i> Agregar Registro nuevo </h1>
    <hr>
    <p class="lead">
        <form action="procesos/agregar.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required placeholder="Nombre">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" name="Apaterno" class="form-control" required placeholder="Apellido Paterno">
            <label for="materno">Apellido materno</label>
            <input type="text" name="Amaterno" class="form-control" required placeholder="Apellido Materno">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fechaNac"  class="form-control" required placeholder="Fecha de nacimiento">
            <br>
            <button class="btn btn-outline-success btn-block"><i class="fas fa-user-plus"></i> Agregar </button>
            <br>
            <a href="index.php" class="btn btn-outline-dark btn-block">
            <i class="fas fa-backward"></i>
              Regresar
            </a>
            <br>
        </form>
    </p>
  </div>
</div>

<?php include "scripts.php" ?>
