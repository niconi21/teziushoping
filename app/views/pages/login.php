<?php
$registro = $_GET['registro'];
$error = $_GET['error'];
$status = $_GET['status'];
//inicio del html
include('../partials/header.php');
?>
<title>Iniciar sesión</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <p class="navbar-brand">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i> TeziuShoping
        </p>
    </nav>

    <div class="container-fluid mt-5">
        <?php
        if ($registro == 'true')
            echo '<div class="alert alert-success mt-5" role="alert">
        <b>¡Felicidades!</b>Has sido registrado en Teziushopipng
    </div>';
        else if ($registro == 'false')
            echo '<div class="alert alert-danger mt-5" role="alert">
        <b>¡Oops...!</b>Ha ocurrido un error con tu registro, vuelve a intentarlo
    </div>';
        if ($error == 401)
            echo '<div class="alert alert-danger mt-5" role="alert">
        <b>¡Oops...!</b>Usuario y/o contraseña incorrectos
    </div>';
        if ($status == 403)
            echo '<div class="alert alert-danger mt-5" role="alert">
        No cuentas con el acceso a esta información, por favor logueate con tus credencales correspondientes
    </div>';
        ?>

        <div class="row ">

            <div class="col-md-4 offset-md-4 mt-5">
                <div class="card bg-card animate__animated animate__fadeInLeft">
                    <div class="card-header text-center">
                        <h3 class="mt-3"><b>Iniciar sesión</b></h3>
                        <i class="fa fa-sign-in fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <form action="../../scripts/usuarios/login.php " method="POST">

                            <label for="" class="text-left"> <i class="fa fa-user" aria-hidden="true"></i> Usuario</label>
                            <input type="text" class="form-control mb-3" placeholder="" required name="usuario">

                            <label for=""><i class="fa fa-key" aria-hidden="true"></i>
                                Contraseña</label>
                            <input type="password" class="form-control mb-3" placeholder="" required name="password">

                            <button type="submit" class="btn btn-dark btn-block">
                                Iniciar sesión
                                <i class="fa fa-sign-in" aria-hidden="true"></i>

                            </button>
                            <hr class="bg-white">
                            <p class="text-center">¿No tienes una cuenta? <a href="./registro.php" class="text-primary"><b>Registrate aquí</b></a></p>
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