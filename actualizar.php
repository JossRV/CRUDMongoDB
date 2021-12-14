
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
  <div class="container">
    <h1 class="display-4 text-center"><i class="fas fa-edit"></i> Actualizar un registro </h1>
    <hr>
    <p class="lead">
        <form action="procesos/actualizar.php" method="POST">
            <input type="text" hidden name="idActualizar" value="<?php echo $idMongo; ?>" >
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control bg-dark border-0 text-light" required value="<?php echo $datos -> nombre; ?>">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" name="Apaterno" id="Apaterno" class="form-control bg-dark border-0 text-light" required value="<?php echo $datos -> paterno; ?>">
            <label for="materno">Apellido materno</label>
            <input type="text" name="Amaterno" name="Amaterno" class="form-control bg-dark border-0 text-light" required value="<?php echo $datos -> materno; ?>">
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            <input type="date" name="fechaNac" id="fechaNac" class="form-control bg-dark border-0 text-light" required value="<?php echo $datos -> fecha_nacimiento; ?>">
            <hr>
            <br>
                <button class="btn btn-outline-primary btn-block"><i class="fas fa-edit"></i> Actualizar </button>
            </form>
            <!-- <button class="btn btn-outline-warning btn-block"><i class="fas fa-edit"></i> Actualizar </button> -->
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
