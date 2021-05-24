<?php
session_start();
//inicio del html
include('../partials/header.php');
?>
<title>Alta método de pago</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');

$tipo = $_GET['tipo'];
$_SESSION['idMetodoPagoUpdate'] = $_GET['id'];
if ($tipo == 'put') {

    $urls['altaMetodoPago'] = '<a href="../pages/misMetodosPago.php">Mis métodos de pago</a> > Actualizar de método de pago';

    include('../../scripts/metodosPago/obtenerUnMetodoPago.php');
}
?>
<div class="container">
    <div class="row animate__animated animate__fadeInLeft">
        <h3 class="text-white mt-3">
            <?php
            echo $urls[$page[0]];
            ?>
        </h3>
    </div>
</div>

<div class="container mt-5">
    <form class="animate__animated animate__fadeInLeft" action="
            <?php echo $tipo == 'put' ? '../../scripts/metodosPago/actualizarMetodoPago.php' : '../../scripts/metodosPago/altaMetodoPago.php' ?>" method="POST">
        <div class="row">

            <div class="col-6">
                <div class="card  bg-fondo text-white">
                    <div class="card-header text-center">
                        <?php echo $tipo == 'put' ? 'Actualizar' : 'Agregar'; ?> método de pago
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre del titular" name="titular" value="<?php echo $result->titular ?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>

                                </span>
                            </div>
                            <input type="text" maxlength="16" minlength="16" class="form-control" placeholder="Número de tarjeta" name="tarjeta" value="<?php echo $result->noTarjeta ?>" required>
                        </div>
                        <label>Fecha de expiración</label>
                        <div class="row">

                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Mes
                                        </span>
                                    </div>
                                    <select name="mes">
                                        <?php
                                        for ($i = 1; $i <= 12; $i++) {
                                            echo '<option value="' . $i . '" ' . ($result->mes == $i ? 'selected' : '') . '>' . $i . '</option>';
                                        }
                                        ?>


                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-5">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Año
                                        </span>
                                    </div>
                                    <select name="anio">
                                        <?php
                                        for ($i = 2021; $i < 2030; $i++) {
                                            echo '<option value="' . $i . '" ' . ($result->anio == $i ? 'selected' : '') . '>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>

                                </span>
                            </div>
                            <input type="password" class="form-control" placeholder="CCV" name="ccv" value="<?php echo $result->ccv; ?>" required>
                            <i class="fa fa-question-circle fa-2x ml-2 " aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card  bg-fondo text-white">
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
        <div class="col">
        <button type="submit" class="btn btn-success btn-block"><?php echo $tipo == 'put' ? 'Actualizar' : 'Agregar'; ?> método de pago</button></div></div>
    </form>
</div>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>