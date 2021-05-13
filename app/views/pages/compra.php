<?php
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

<div class="container-fluid mt-5 mb-5">
    <div class="row">

        <div class="col-4">
            <div class="card bg-fondo">
                <div class="card-header text-center text-white">
                    <h4 class="">Productos/Servicios</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="#" class="list-group-item bg-fondo text-white border border-white">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Disco duro</h5>
                                <small>$1200 MXN x Unidad</small>
                            </div>
                            <p class="mb-1">Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc...</p>
                            <small>2 unidades</small>
                            <small>$2400 MXN</small>
                        </a>
                        <a href="#" class="list-group-item bg-fondo text-white border-white">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Disco duro</h5>
                                <small>$1200 MXN x Unidad</small>
                            </div>
                            <p class="mb-1">Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc...</p>
                            <small>2 unidades</small>
                            <small>$2400 MXN</small>
                        </a>
                        <a href="#" class="list-group-item bg-fondo text-white border-white">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Disco duro</h5>
                                <small>$1200 MXN x Unidad</small>
                            </div>
                            <p class="mb-1">Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc...</p>
                            <small>2 unidades</small>
                            <small>$2400 MXN</small>
                        </a>
                        <a href="#" class="list-group-item bg-fondo text-white border-white">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Disco duro</h5>
                                <small>$1200 MXN x Unidad</small>
                            </div>
                            <p class="mb-1">Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc...</p>
                            <small>2 unidades</small>
                            <small>$2400 MXN</small>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card bg-fondo">
                <div class="card-header">
                    <h4 class="text-white">Elije tu método de pago</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <select name="" id="" class="form-control">
                            <option value="">Visa terminación 2108</option>
                            <option value="">MasterCard terminación 5312</option>
                            <option value="">Visa terminación 8732</option>
                        </select>

                        <div class="card text-left bg-fondo text-white mt-4 mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                                    terminación 2108
                                </h5>
                                <p class="card-text"><b>Exp.</b> 05/25</p>
                                <p class="card-text"><b>Titular:</b> Nicolas Moreno Durán</p>
                                <p class="card-text"><b>Dirección:</b> Col. Santa Rosa calle reforma 66</p>
                                <small>MasterCard</small>
                            </div>
                        </div>
                        <h3 class="text-white">Pagar: $2400 MXN</h3><br>
                        <button class="btn btn-success btn-block"> <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            Procesar Pago</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//footer del html y de la página
include('../partials/footer.php');
?>