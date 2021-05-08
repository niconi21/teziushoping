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
        <div class="col-md-8 offset-md-2 ">
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
                                    <textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col">
                            </div>
                        </div>
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