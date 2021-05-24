<?php
$statusPost = $_GET['statusPost'];
$statusPut = $_GET['statusPut'];
$statusDelete = $_GET['statusDelete'];

//inicio del html
include('../../scripts/metodosPago/obtenerMetodosPago.php');

include('../partials/header.php');
?>
<title>Mis métodos de pago</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');
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
    <?php
    if ($statusPost == 200) {
        echo '<div class="alert alert-success mt-5" role="alert">
El método de pago ha sido agregado</div>';
    }
    if ($statusPost == 400) {
        echo '<div class="alert alert-danger mt-5" role="alert">
Ha ocurrido un erro al crear el método de pago</div>';
    }
    if ($statusPut == 200) {
        echo '<div class="alert alert-success mt-5" role="alert">
El metodo de pago Ha sido actualizado</div>';
    }
    if ($statusPut == 404) {
        echo '<div class="alert alert-danger mt-5" role="alert">
        El metodo de pago no existe</div>';
    }
    if ($statusPut == 400) {
        echo '<div class="alert alert-danger mt-5" role="alert">
        Error al actualizar metodo de pago</div>';
    }
    if ($statusDelete == 200) {
        echo '<div class="alert alert-warning mt-5" role="alert">
El metodo de pago Ha sido eliminado</div>';
    }
    if ($statusDelete == 404) {
        echo '<div class="alert alert-danger mt-5" role="alert">
        El metodo de pago no pudo ser eliminado</div>';
    }
    ?>
    <div class="row animate__animated animate__fadeInLeft">
        <div class="col"><a href="./altaMetodoPago.MisMetodosPago.php?tipo=post" class="btn btn-success"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Agregar método de pago</a></div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="text-white text-center animate__animated animate__fadeInLeft">Métodos de pago registrados</h5>

            <div class="card-columns mt-5 animate__animated animate__fadeInUp">

                <?php
                while ($result = $query->fetch(PDO::FETCH_ASSOC)) {

                    echo '<div class="card text-left bg-fondo text-white">
                            <div class="card-body">
                                <h5 class="card-title">
                                ' . ($result['noTarjeta'][0] == 4 ? '<i class="fa fa-cc-visa" aria-hidden="true"></i>' : ($result['noTarjeta'][0] == 5 ? '<i class="fa fa-cc-visa" aria-hidden="true"></i>' : '<i class="fa fa-asterisk" aria-hidden="true"></i>')) . ' 
                                    terminación ' . (substr($result['noTarjeta'], 12, 4)) . ' -
                                    <a href="./altaMetodoPago.MisMetodosPago.php?tipo=put&id=' . $result['id'] . '" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <button onclick="eliminarMetodoPago(' . $result['id'] . ')" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                        </i>
                                    </button>
                                </h5>
                                <p class="card-text"><b>Exp: </b>' . $result['mes'] . '/' . (substr($result['anio'], 2, 2)) . '</p>
                                <p class="card-text"><b>Titular: </b>' . $result['titular'] . '</p>
                                <small>' . ($result['noTarjeta'][0] == 4 ? 'Visa' : ($result['noTarjeta'][0] == 5 ? 'MasterCard' : 'Desconocida')) . '</small>
                            </div>
                        </div>';
                }
                ?>



            </div>

        </div>
    </div>

</div>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>