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
        <div class="col">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <td>Imagen</td>
                    <td>Producto</td>
                    <td>Descripcion</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                    <td>Monto total</td>
                    <td>Acción</td>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>2 unidades</td>
                        <td>$1200 MXN</td>
                        <td>$2400 MXN</td>
                        <td><a href="" class="btn btn-outline-danger"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>2 unidades</td>
                        <td>$1200 MXN</td>
                        <td>$2400 MXN</td>
                        <td><a href="" class="btn btn-outline-danger"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>2 unidades</td>
                        <td>$1200 MXN</td>
                        <td>$2400 MXN</td>
                        <td><a href="" class="btn btn-outline-danger"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>2 unidades</td>
                        <td>$1200 MXN</td>
                        <td>$2400 MXN</td>
                        <td><a href="" class="btn btn-outline-danger"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </a></td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>2 unidades</td>
                        <td>$1200 MXN</td>
                        <td>$2400 MXN</td>
                        <td><a href="" class="btn btn-outline-danger"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total:</td>
                        <td>$2400 MXN</td>
                    </tr>



                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col offset-10">
            <a href="./compra.php" class="btn btn-success btn-block"><i class="fa fa-money" aria-hidden="true"></i>
                Comprar carrito </a>
        </div>
    </div>
</div>
<?php
//footer del html y de la página
include('../partials/footer.php');
?>