<?php

//inicio del html
include('../partials/header.php');
?>
<title>Mi Perfil</title>
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
<div class="container">
    <div class="row mt-2">
        <div class="col-md-4">
            <div class="card bg-transparent animate__animated animate__fadeInLeft" style="width: 18rem;">
                <img src="../../img/faces/marc.jpg" class="card-img-top">
                <div class="card-body border border-dark text-center bg-fondo">
                    <h5 class="text-white">Opciónes de cuenta</h5>
                    <hr>
                    <a href="" class="btn btn-outline-danger">Dar de baja la cuenta</a><br>
                </div>
            </div>
        </div>
        <div class="col-md-8 bg-fondo text-center animate__animated animate__fadeInRight">
            <h4 class="text-white">Información de perfil</h4>
            <form action="">
                <div class="row mt-2">
                    <div class="col">
                        <div class="card bg-fondo text-white text-left border border-white">
                            <div class="card-header">Datos de cuenta</div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Usuario" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Correo" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-fondo text-white text-left border border-white">
                            <div class="card-header">Datos Personales</div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombre" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Apellidos" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Teléfono" required>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="card bg-fondo text-white text-left border border-white">
                            <div class="card-header">Dirección</div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <textarea rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-info btn-block mt-2 mb-2" type="submit">Actualizar información de perfil</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>