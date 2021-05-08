<?php
//inicio del html
include('../partials/header.php');
?>
<title>Alta de producto</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');
?>

<div class="container-fluid">

    <div class="row">
        <div class="col-md-4 offset-md-2">
            <div class="card bg-card ">
                <div class="card-header text-center">
                    <h4 class="mt-3"><b>Publicar un producto/servicio</b></h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <select name="" id="" class="form-control" required>
                                        <option value="">Seleccióna uno</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Precio MXN" required>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Cantidad" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <textarea class="form-control" rows="5" required></textarea>
                                </div>
                                <div class="input-group mb-3">

                                    <input type="file" class="form-control">
                                </div>

                                <input type="submit" class="btn btn-dark btn-block" value="Agregar producto/servicio">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 mt-5">
            <div class="card bg-card" style="width: 300px;">
                <div class="card-header">
                <h5><b><i>Imagen del producto</i></b></h5>
                </div>
                <img src="../../img/SinImagen.jpg" alt="" width="300px">
            </div>
        </div>
    </div>
</div>

<?php
//footer del html y de la página
include('../partials/footer.php');
?>