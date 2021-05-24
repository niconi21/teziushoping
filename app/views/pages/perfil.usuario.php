<?php

$status = $_GET['status'];
$statusFile = $_GET['statusFile'];
session_start();
// include('../../scripts/usuarios/consultarUsuario.php');
//inicio del html
include('../partials/header.php');
?>
<title>Mi Perfil</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');
?>

<div class="container">

    <?php
    if ($status == 200) {
        echo '<div class="alert alert-success mt-5" role="alert">
        Tu perfil ha sido actualizado</div>';
    }
    if ($status == 400) {
        echo '<div class="alert alert-danger mt-5" role="alert">
        Ha ocurrido un error en la actualización del perfil</div>';
    }
    if ($statusFile == 200) {
        echo '<div class="alert alert-success mt-5" role="alert">
        imagen de perfil actualizada</div>';
    }
    if ($statusFile == 400) {
        echo '<div class="alert alert-danger mt-5" role="alert">
        Ocurrió un error al actualizar la imagen, intenta más tarde</div>';
    }
    if ($statusFile == 401) {
        echo '<div class="alert alert-danger mt-5" role="alert">
        Escoge una nueva imagen de perfil</div>';
    }
    ?>
    <div class="row animate__animated animate__fadeInLeft">
        <h3 class="text-white mt-3">
            <?php
            echo $urls[$page[0]];
            ?>
        </h3>
    </div>
</div>
<div class="container">

    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card bg-transparent animate__animated animate__fadeInLeft" style="width: 18rem;">
                <img src="<?php echo $host . 'usuarios/' . $_SESSION['imagen']; ?>" class="card-img-top" id="imagenPrevisualizacion">
                <form action="../../scripts/usuarios/imagenPerfil.php" method="POST" enctype="multipart/form-data" class="text-center">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-picture-o" aria-hidden="true"></i>
                            </span>
                        </div>
                        <input type="file" class="form-control" name="imagen" id="seleccionArchivos" accept="image/*">
                    </div>

                    <input type="submit" class=" btn btn-info" value="Actualizar imagen de perfil">
                </form>
                <div class="card-body border border-dark text-center bg-fondo">
                    <h5 class="text-white">Estado: <br> Cuenta <?php echo $_SESSION['estado'] == 1 ? 'Activada' : 'Desactivada'; ?></h5>
                    <hr>
                    <button class="btn btn-outline-danger" onclick="bajaCuentaUsuario()">Dar de baja la cuenta</button><br>
                </div>
            </div>
        </div>
        <div class="col-md-8 bg-fondo text-center animate__animated animate__fadeInRight">
            <h4 class="text-white mt-3">Información de Perfil</h4>
            <form action="../../scripts/usuarios/actualizarUsuario.php" method="POST">
                <div class="row mt-2">
                    <div class="col">
                        <div class="card bg-fondo text-white text-left border border-white">
                            <div class="card-header">Datos de Cuenta</div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" disabled value="<?php echo $_SESSION['usuario'] ?>" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Correo" name="correo" value="<?php echo $_SESSION['correo']; ?>" required>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-fondo text-white text-left border border-white">
                            <div class="card-header">Datos Personales</div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $_SESSION['nombre']; ?>" required disabled>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" value="<?php echo $_SESSION['apellidos']; ?>" required disabled>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Teléfono" name="telefono" value="<?php echo $_SESSION['telefono']; ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="card bg-fondo text-white text-left border border-white">
                            <div class="card-header">Domicilio</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Calle" name="calle" value="<?php echo $_SESSION['calle']; ?>" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Ciudad" name="ciudad" value="<?php echo $_SESSION['ciudad']; ?>" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="No. Ext" name="noExt" value="<?php echo $_SESSION['noExt']; ?>" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Colonia" name="colonia" value="<?php echo $_SESSION['colonia']; ?>" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="C.P" name="cp" value="<?php echo $_SESSION['cp']; ?>" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="No. Int" name="noInt" value="<?php echo $_SESSION['noInt']; ?>">
                                        </div>

                                    </div>
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <textarea rows="5" class="form-control" name="referencias" placeholder="Referencias..."><?php echo $_SESSION['referencias']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-info btn-block mt-2 mb-2" type="submit">Actualizar información de perfil</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>