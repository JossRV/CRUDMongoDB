<?php require_once "header.php" ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container bg-light">
        <h1 class="display-4"><i class="fas fa-trash-alt"></i> Eliminar</h1>
        <hr>
        <p class="lead">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Advertencia!</h4>
                <p>Estas seguro de elimiar este registro ¿?</p>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>
                </div>
                <p class="mb-0">
                    <span class="btn btn-outline-danger btn-block"><i class="fas fa-trash-alt"></i> Eliminar</span>
                    <br>
                    <a href="index.php" class="btn btn-outline-dark btn-block">
                        <img src="public/img/regresar-0.png" class="img" style="width: 2%">
                        Regresar
                    </a>
                </p>
            </div>
        </p>
        <br>
    </div>
</div>

<?php require_once "scripts.php" ?>
