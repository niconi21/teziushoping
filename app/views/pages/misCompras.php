<?php
//inicio del html
include('../partials/header.php');
?>
<title>Mis ventas</title>
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


<div class="container-fluid mt-5 animate__animated animate__fadeInRight">
    <div class="row">
        <div class="col">
            <table class="table  table-dark table-striped table-hover">
                <thead class="text-center">
                    <td>Imagen</td>
                    <td>Producto/Servicio</td>
                    <td>Vendedor</td>
                    <td>Método de pago</td>
                    <td>Cantidad</td>
                    <td>Monto total</td>
                    <td>Fecha</td>
                    <td>Status</td>
                    <td>Acción</td>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Nicolas Moreno Durán</td>
                        <td><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 2108</td>
                        <td>1 unidad</td>
                        <td>$1200</td>
                        <td>21/03/2021</td>
                        <td>
                            <form action="">
                                <select name="" id="" class="form-control">
                                    <option value="">En proceso</option>
                                    <option value="">En camino</option>
                                    <option value="">Entregado</option>
                                </select>
                            </form>
                        </td>
                        <td class="text-center">
                            <button onclick="modalCompras(1)" class="btn btn-btn-btn-outline-dark"><i class="fa fa-eye text-white" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Nicolas Moreno Durán</td>
                        <td><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 2108</td>
                        <td>1 unidad</td>
                        <td>$1200</td>
                        <td>21/03/2021</td>
                        <td>
                            <form action="">
                                <select name="" id="" class="form-control">
                                    <option value="">En proceso</option>
                                    <option value="">En camino</option>
                                    <option value="">Entregado</option>
                                </select>
                            </form>
                        </td>
                        <td class="text-center">
                            <button onclick="modalCompras(1)" class="btn btn-btn-btn-outline-dark"><i class="fa fa-eye text-white" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Nicolas Moreno Durán</td>
                        <td><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 2108</td>
                        <td>1 unidad</td>
                        <td>$1200</td>
                        <td>21/03/2021</td>
                        <td>
                            <form action="">
                                <select name="" id="" class="form-control">
                                    <option value="">En proceso</option>
                                    <option value="">En camino</option>
                                    <option value="">Entregado</option>
                                </select>
                            </form>
                        </td>
                        <td class="text-center">
                            <button onclick="modalCompras(1)" class="btn btn-btn-btn-outline-dark"><i class="fa fa-eye text-white" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Nicolas Moreno Durán</td>
                        <td><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 2108</td>
                        <td>1 unidad</td>
                        <td>$1200</td>
                        <td>21/03/2021</td>
                        <td>
                            <form action="">
                                <select name="" id="" class="form-control">
                                    <option value="">En proceso</option>
                                    <option value="">En camino</option>
                                    <option value="">Entregado</option>
                                </select>
                            </form>
                        </td>
                        <td class="text-center">
                            <button onclick="modalCompras(1)" class="btn btn-btn-btn-outline-dark"><i class="fa fa-eye text-white" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Nicolas Moreno Durán</td>
                        <td><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 2108</td>
                        <td>1 unidad</td>
                        <td>$1200</td>
                        <td>21/03/2021</td>
                        <td>
                            <form action="">
                                <select name="" id="" class="form-control">
                                    <option value="">En proceso</option>
                                    <option value="">En camino</option>
                                    <option value="">Entregado</option>
                                </select>
                            </form>
                        </td>
                        <td class="text-center">
                            <button onclick="modalCompras(1)" class="btn btn-btn-btn-outline-dark"><i class="fa fa-eye text-white" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Nicolas Moreno Durán</td>
                        <td><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 2108</td>
                        <td>1 unidad</td>
                        <td>$1200</td>
                        <td>21/03/2021</td>
                        <td>
                            <form action="">
                                <select name="" id="" class="form-control">
                                    <option value="">En proceso</option>
                                    <option value="">En camino</option>
                                    <option value="">Entregado</option>
                                </select>
                            </form>
                        </td>
                        <td class="text-center">
                            <button onclick="modalCompras(1)" class="btn btn-btn-btn-outline-dark"><i class="fa fa-eye text-white" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="../../assets/img/productos.jpg" alt="" width="100px"></td>
                        <td>Disco duro</td>
                        <td>Nicolas Moreno Durán</td>
                        <td><i class="fa fa-cc-visa" aria-hidden="true"></i>
                            terminación 2108</td>
                        <td>1 unidad</td>
                        <td>$1200</td>
                        <td>21/03/2021</td>
                        <td>
                            <form action="">
                                <select name="" id="" class="form-control">
                                    <option value="">En proceso</option>
                                    <option value="">En camino</option>
                                    <option value="">Entregado</option>
                                </select>
                            </form>
                        </td>
                        <td class="text-center">
                            <button onclick="modalCompras(1)" class="btn btn-btn-btn-outline-dark"><i class="fa fa-eye text-white" aria-hidden="true"></i></button>
                        </td>
                    </tr>



                </tbody>
            </table>


        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalCompras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Compra de disco duro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center text-justify">
                <img src="../../assets/img/productos.jpg" alt="" width="150px" class="">
                <p class="text-left"><b>Descripción:</b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias ut alias quidem impedit deserunt nisi natus soluta, cum deleniti maxime laudantium, atque, ea voluptas repellat voluptatem? Asperiores voluptatibus nam earum!</p>
                <p class="text-left"><b>Precio:</b> $1200 MXN</p>
                <p class="text-left"><b>Cantidad:</b> 2 unidades</p>
                <p class="text-left"><b>Monto total:</b> $2400MXN</p>
                <p class="text-left"><b>Vendedor:</b> Nicolas Moreno Durán</p>
                <p class="text-left"><b>Método de pago:</b> <i class="fa fa-cc-visa" aria-hidden="true"></i>
                    terminación 2108</p>
                <p class="text-left"><b>Status:</b><span class="text-success">Entregado</span></p>
                <p class="text-left"><b>Fecha:</b> 12-03-2021 12:55:32 A.M</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php
//footer del html y de la página
include('../partials/footer.php');
?>