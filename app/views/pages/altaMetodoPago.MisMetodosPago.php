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
        <h6 class="text-white mt-3">
            <?php
            echo $urls[$page[0]];
            ?>
        </h6>
    </div>
</div>

<div class="container mt-5">
    <div class="row animate__animated animate__fadeInLeft">
        <div class="col-6 offset-3">
            <form action="
            <?php echo $tipo == 'put'? '../../scripts/metodosPago/actualizarMetodoPago.php' : '../../scripts/metodosPago/altaMetodoPago.php'?>" method="POST">
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
                            <input type="text" class="form-control" placeholder="Nombre del titular" name="titular" value="<?php echo $result->titular?>" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>

                                </span>
                            </div>
                            <input type="number"  class="form-control" placeholder="Número de tarjeta" name="tarjeta" value="<?php echo $result->noTarjeta?>" required>
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
                                    for ($i=1; $i <= 12; $i++) { 
                                        echo '<option value="'.$i.'" '.($result->mes == $i ? 'selected' : '').'>'.$i.'</option>';
                                    }
                                    ?>
                                        
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Año
                                        </span>
                                    </div>
                                    <select name="anio">
                                        <?php
                                        for ($i = 2021; $i < 2030; $i++) {
                                            echo '<option value="'.$i.'" '.($result->anio == $i ? 'selected' : '').'>' . $i . '</option>';
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
                            <input type="password" class="form-control" placeholder="CCV" name="ccv" value="<?php echo $result->ccv;?>" required>
                            <i class="fa fa-question-circle fa-2x ml-2 " aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i>


                        </div>
                        <div class="card-footer text-muted text-center">
                            <button type="submit" class="btn btn-success"><?php echo $tipo == 'put' ? 'Actualizar' : 'Agregar'; ?> método de pago</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>