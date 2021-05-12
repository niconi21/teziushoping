<?php

//inicio del html
include('../partials/header.php');
?>
<title>Alta método de pago</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');

$tipo =$_GET['tipo'];
$id =$_GET['id'];
if($tipo == 'put'){
    $urls['altaMetodoPago'] = '<a href="../pages/misMetodosPago.php">Mis métodos de pago</a> > Actualizar de método de pago';

    //obtener el método de pago por id
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
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="post">
                <div class="card  bg-fondo text-white">
                    <div class="card-header text-center">
                        <?php echo $tipo == 'put' ? 'Actualizar': 'Agregar';?> método de pago
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre del titular" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>

                                </span>
                            </div>
                            <input type="number" class="form-control" placeholder="Número de tarjeta" required>
                        </div>
                        <label>Fecha de expiración</label>
                        <div class="row">
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Día
                                        </span>
                                    </div>
                                    <select>
                                        <?php
                                        for ($i = 1; $i < 32; $i++) {
                                            echo '<option>' . $i . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Mes
                                        </span>
                                    </div>
                                    <select>
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-credit-card-alt" aria-hidden="true"></i>

                                </span>
                            </div>
                            <input type="password" class="form-control" placeholder="CCV" required>
                            <i class="fa fa-question-circle fa-2x ml-2 " aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></i>
         

                        </div>
                        <div class="card-footer text-muted text-center">
                            <button type="submit" class="btn btn-success"><?php echo $tipo == 'put' ? 'Actualizar': 'Agregar';?> método de pago</button>
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