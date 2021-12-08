
<?php include "header.php" ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container bg-light">
    <h1 class="display-4"><i class="fas fa-edit"></i> Actualizar un registro </h1>
    <hr>
    <p class="lead">
        <form action="" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required placeholder="Nombre">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" name="paterno" class="form-control" required placeholder="Apellido Paterno">
            <label for="materno">Apellido materno</label>
            <input type="text" name="materno" class="form-control" required placeholder="Apellido Materno">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" class="form-control" required placeholder="Fecha de nacimiento">
            <br>
            <span class="btn btn-outline-warning btn-block"><i class="fas fa-edit"></i> Actualizar </span>
            <br>
            <a href="index.php" class="btn btn-outline-dark btn-block"> 
              <img src="public/img/regresar-0.png" class="img" style="width: 2%">
              Regresar
            </a>
            <br>
        </form>
    </p>
  </div>
</div>

<?php include "scripts.php" ?>
