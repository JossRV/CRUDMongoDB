
<?php include "header.php" ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center"><i class="fas fa-user-plus"></i> Agregar Registro nuevo </h1>
    <hr>
    <p class="lead">
        <form action="procesos/agregar.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control bg-dark border-0 text-light" required placeholder="Nombre">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" name="Apaterno" id="Apaterno" class="form-control bg-dark border-0 text-light" required placeholder="Apellido Paterno">
            <label for="materno">Apellido materno</label>
            <input type="text" name="Amaterno" id="Amaterno" class="form-control bg-dark border-0 text-light" required placeholder="Apellido Materno">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fechaNac" id="fechaNac" class="form-control bg-dark border-0 text-light" required placeholder="Fecha de nacimiento">
            <hr>
            <br>
              <button class="btn btn-outline-success btn-block" id="btn_agregar"><i class="fas fa-user-plus"></i> Agregar </button>
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
