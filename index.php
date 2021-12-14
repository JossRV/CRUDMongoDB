<?php 
  // llamar la calse crud
  require_once "clases/crud.php";
  $_SESSION['mensaje']="";
  $objeto = new Crud();
  $datos = $objeto -> mostrar();
  $mensaje=$objeto->mensaje_crud($_SESSION['mensaje']);
  unset($_SESSION['mensaje']);

  // echo "<pre>";
  //   print_r($datos);
  // echo"</pre>";
?>

<?php require_once "header.php" ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-center"> <i class="fas fa-address-book"></i> CRUD CON PHP Y MONGO DB</h1>
    <hr>
    <a href="agregar.php" class="btn btn-outline-success btn-block"><i class="fas fa-user-plus"></i> Agregar persona</a>
    <br>
    <!-- <a href="actualizar.php" class="btn btn-outline-warning">Actualizar persona</a> -->
    <div class="table-responsive">
      <table class="table table-hover table-sm table-bordered" id="tablaIndex">
        <thead >
          <!-- <th>id</th> -->
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Fecha de nacimiento</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </thead>
        <tbody >
          <?php foreach($datos as $key) : 
            $idMongo = new MongoDB\BSON\ObjectId($key->_id);  
          ?>
          <tr>
            <!-- <td><?//php echo $key -> _id ?></td> -->
            <td><?php echo $key -> nombre; ?></td>
            <td><?php echo $key -> paterno; ?></td>
            <td><?php echo $key -> materno; ?></td>
            <td><?php echo $key -> fecha_nacimiento; ?></td>
            <form action="actualizar.php" method="POST">
                <input type="text" name="_idActualizar" hidden value="<?php echo $idMongo; ?>">
                <td>
                  <button class="btn btn-outline-primary border-0 btn-block"><i class="fas fa-edit"></i></button>
                </td>
            </form>
            <form action="eliminar.php" method="POST">
                <input type="text" name="_id" hidden value="<?php echo $idMongo; ?>">
                <td>
                  <button class="btn btn-outline-danger border-0 btn-block"><i class="fas fa-trash-alt"></i></button>
                </td>
            </form>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <br>
  </div>
</div>

<?php require_once "scripts.php" ?>

<script>
  let mensaje = <?php echo $mensaje?>
  console.log(mensaje);
</script>
