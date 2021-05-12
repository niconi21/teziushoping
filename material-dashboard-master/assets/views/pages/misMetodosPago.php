<?php

//inicio del html
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
        <h6 class="text-white mt-3">
            <?php
            echo $urls[$page[0]];
            ?>
        </h6>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col"><a href="./altaMetodoPago.MisMetodosPago.php?tipo=post" class="btn btn-success"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Agregar método de pago</a></div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="text-white text-center">Métodos de pago registrados</h5>

            <div class="card-columns mt-5">

                <div class="card text-left bg-fondo text-white">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 7982 -
                            <a href="./altaMetodoPago.MisMetodosPago.php?tipo=put&id=1" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                </i>
                            </button>
                        </h5>
                        <p class="card-text"><b>Exp.</b> 05/25</p>
                        <p class="card-text"><b>Titular:</b> Nicolas Moreno Durán</p>
                        <p class="card-text"><b>Dirección:</b> Col. Santa Rosa calle reforma 66</p>
                        <small>Visa</small>
                    </div>
                </div>
                <div class="card text-left bg-fondo text-white ">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-cc-mastercard" aria-hidden="true"></i>

                            terminación 2108 -
                            <a href="./altaMetodoPago.MisMetodosPago.php?tipo=put&id=1" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                </i>
                            </button>
                        </h5>
                        <p class="card-text"><b>Exp.</b> 05/25</p>
                        <p class="card-text"><b>Titular:</b> Nicolas Moreno Durán</p>
                        <p class="card-text"><b>Dirección:</b> Col. Santa Rosa calle reforma 66</p>
                        <small>MasterCard</small>
                    </div>
                </div>
                <div class="card text-left bg-fondo text-white ">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 7982 -
                            <a href="./altaMetodoPago.MisMetodosPago.php?tipo=put&id=1" class="btn btn-outline-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                </i>
                            </button>
                        </h5>
                        <p class="card-text"><b>Exp.</b> 05/25</p>
                        <p class="card-text"><b>Titular:</b> Nicolas Moreno Durán</p>
                        <p class="card-text"><b>Dirección:</b> Col. Santa Rosa calle reforma 66</p>
                        <small>Visa</small>
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