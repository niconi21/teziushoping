<?php
session_start();
$nombreUsuario=$_SESSION['NombreUsuario'];
//inicio del html
include('../partials/header.php');
?>
<title>Dashboard</title>
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
<div class="container mt-3">
    <div class="row animate__animated animate__fadeInLeft">
    <?php
    echo "<h2 class='text-white mb-3'>".$nombreUsuario." </h2>"

    ?>
        
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-card border border-warning animate__animated animate__fadeInBottomLeft" style="width: 18rem">

                <div class="card-body">
                    <h6><b><i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            Productos publicados</b></h6>
                    <p>20 publcaciónes <br> 10 activos <br> 10 inactivos </p>
                    <a class=" text-right" href="./misPublicaciones.php">Ver más...</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-card border border-success animate__animated animate__fadeInUpBig" style="width: 18rem">
                <div class="card-body ">
                    <h6><b><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i>
                            Ventas</b></h6>
                    <p>20 Ventas realizadas</p>
                    <a href="./misVentas.php">Ver más..</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-card border border-info animate__animated animate__fadeInBottomRight" style="width: 18rem">
                <div class="card-body ">
                    <h6><b><i class="fa fa-credit-card-alt fa-2x" aria-hidden="true"></i>
                            Métodos de pago</b></h6>
                    <p>3 métodos de pagos</p>
                    <p>Visa terminación 3168 cómo método de pago prncipal</p>
                    <a href="./misMetodosPago.php">Ver más...</a>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>