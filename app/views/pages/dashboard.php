<?php
session_start();
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

    <h2 class='text-white mb-3'>Bienvenido <?php echo $_SESSION['nombre'].' '.$_SESSION['apellidos']; ?><h2>



    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-card border border-warning animate__animated animate__fadeInBottomLeft" style="width: 18rem">

                <div class="card-body">
                    <h6><b><i class="fa fa-star fa-2x" aria-hidden="true"></i>
                            Productos publicados</b></h6>
                    <p id="contenidoPublicaciones">20 publcaciónes <br> 10 activos <br> 10 inactivos </p>
                    <a class=" text-right" href="./misPublicaciones.php">Ver más...</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-card border border-success animate__animated animate__fadeInUpBig" style="width: 18rem">
                <div class="card-body ">
                    <h6><b><i class="fa fa-shopping-bag fa-2x" aria-hidden="true"></i>
                            Ventas</b></h6>
                    <p id="contenidoVentas">20 Ventas realizadas</p>
                    <a href="./misVentas.php">Ver más..</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card bg-card border border-info animate__animated animate__fadeInBottomRight" style="width: 18rem">
                <div class="card-body ">
                    <h6><b><i class="fa fa-credit-card-alt fa-2x" aria-hidden="true"></i>
                            Métodos de pago</b></h6>
                    <p id="contenidoMetodo">3 métodos de pagos</p>
                    <p id="numeroMetodo">Visa terminación 3168 cómo método de pago prncipal</p>
                    <a href="./misMetodosPago.php">Ver más...</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
$.get('../../scripts/dashboard/dashboard.php', function (data){
    console.log(data);
    $('#contenidoPublicaciones').empty();
    $('#contenidoVentas').empty();
    $('#contenidoMetodo').empty();
    $('#numeroMetodo').empty();

    $('#contenidoPublicaciones').append(data.publicaciones>0 ? `${data.publicaciones} publicaciónes <br> ${data.activas} actias <br> ${data.inactivas} inactivas` : 'No hay publicaciónes');
    $('#contenidoVentas').append(data.ventas > 0 ? `${data.ventas} ventas realizadas` : 'Ninguna venta realizada');
    $('#cotenidoMetodo').append(data.metodosPago> 0 ? `${data.metodosPago} métodos de pago` : 'No hay métodos de pago registrados');
    $('#numeroMetodo').append(data.metodo != null ? `${data.metodo[0] == 4 ? 'visa' : (data.metodo[0] == 5 ? 'MasterCard': 'Desconocido')} terminación ${data.metodo.substr(12,16)} como método de pago principal` : '-----');
})
</script>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>