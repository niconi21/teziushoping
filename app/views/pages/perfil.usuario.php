<?php
session_start();
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
    <div class="row animate__animated animate__fadeInLeft">
        <h6 class="text-white mt-3">
            <?php
            echo $urls[$page[0]];
            ?>
        </h6>
    </div>
</div>
<div class="container">

    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card bg-transparent animate__animated animate__fadeInLeft" style="width: 18rem;">
                <img src="../../assets/img/faces/marc.jpg" class="card-img-top">
                <div class="card-body border border-dark text-center bg-fondo">
                    <h5 class="text-white">Estado: <br> Cuenta <?php echo $_SESSION['estado']==1 ? 'Activada': 'Desactivada'; ?></h5>
                    <hr>
                    <button class="btn btn-outline-danger" onclick="bajaCuentaUsuario()">Dar de baja la cuenta</button><br>
                </div>
            </div>
        </div>
        <div class="col-md-8 bg-fondo text-center animate__animated animate__fadeInRight">
            <h4 class="text-white mt-3">Información de perfil</h4>
            <form action="../../scripts/usuarios/actualizarUsuario.php" method="POST">
                <div class="row mt-2">
                    <div class="col">
                        <div class="card bg-fondo text-white text-left border border-white">
                            <div class="card-header">Datos de cuenta</div>
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
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-picture-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="file" class="form-control" name="imagen">
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
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $_SESSION['nombre']; ?>" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" value="<?php echo $_SESSION['apellidos']; ?>" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>
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
                            <div class="card-header">Dirección</div>
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
                                            <input type="text" class="form-control" placeholder="No. Int" name="noInt" value="<?php echo $_SESSION['noInt']; ?>" required>
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
                                            <input type="text" class="form-control" placeholder="No. Ext" name="noExt" value="<?php echo $_SESSION['noExt']; ?>" required>
                                        </div>

                                    </div>
                                </div>


                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <textarea rows="5" class="form-control" name="referencias" placeholder="Referencias..." value="<?php echo $_SESSION['referencias']; ?>"></textarea>
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