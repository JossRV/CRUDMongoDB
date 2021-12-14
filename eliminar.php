
<?php 

    require_once "clases/crud.php";

    // llamare la clase Crud del documento crud para acceder a las variables de lo datos
    $obj = new Crud();
    // arreglo de los datos con la variable global POST
    $id = $_POST['_id'];

    $datos = $obj -> obtenerDocumento($id);
    // echo ($id);
    $idMongo = new MongoDB\BSON\ObjectId($datos -> _id);
    // echo $datos -> nombre;

?>

<?php require_once "header.php" ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-center"><i class="fas fa-trash-alt"></i> Eliminar</h1>
        <hr>
        <p class="lead">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading text-center text-dark">Advertencia!</h4>
                <p class="text-center text-dark">Estas seguro de elimiar este registro ¿?</p>
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover table-sm table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido Materno</th>
                            <th>Apellido Paterno</th>
                            <th>Fecha de nacimiento</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $datos -> nombre; ?></td>
                                <td><?php echo $datos -> paterno; ?></td>
                                <td><?php echo $datos -> materno; ?></td>
                                <td><?php echo $datos -> fecha_nacimiento; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="mb-0 mt-4">
                    <form action="procesos/eliminar.php" method="POST">
                        <input type="text" hidden name="idEliminar" value="<?php echo $idMongo; ?>" >
                        <button class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i> Eliminar</button>
                    </form>
                    <br>
                    <a href="index.php" class="btn btn-outline-dark btn-block">
                        <img src="public/img/regresar-0.png" class="img" style="width: 2%">
                        Regresar
                    </a>
                </p>
            </div>
            <hr>
        </p>
        <br>
    </div>
</div>

<?php require_once "scripts.php" ?>
