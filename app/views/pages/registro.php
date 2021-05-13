<?php
//inicio del html
include('../partials/header.php');
?>
<title>Registro</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <p class="navbar-brand">
        <i class="fa fa-shopping-bag" aria-hidden="true"></i> TeziuShoping
        </p>
    </nav>


    <div class="container-fluid mt-5">
        <div class="row ">
            
            <div class="col-md-4 offset-md-4 mt-2">
                <div class="card animate__animated animate__fadeInRight">
                    <div class="card-header text-center">
                        <h3><b><i>Regístrate</i></b>
                        </h3>
                        <i class="fa fa-user-plus fa-3x" aria-hidden="true"></i>

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Apellidos" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" placeholder="Correo" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="number" min="10" max="10" class="form-control" placeholder="Teléfono" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block mt-3">
                                Registrarse <i class="fa fa-user-plus" aria-hidden="true"></i>

                            </button>
                        </form>
                        <hr>
                        <p class="text-center">¿Ya tienes una cuenta? <a href="./login.php" class="text-dark"><b><i>Iniciar Sesión</i></b></a></p>
                    </div>
                </div>

            </div>

        </div>
    </div>



    <?php
    //footer del html y de la página
    include('../partials/footer.php');
    ?>