<?php
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
        <div class="row ">
            
            <div class="col-md-4 offset-md-4 mt-5">
                <div class="card bg-card animate__animated animate__fadeInLeft">
                    <div class="card-header text-center">
                        <h3 class="mt-3"><b>Iniciar sesión</b></h3>
                        <i class="fa fa-sign-in fa-3x" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <form action="./dashboard.php " method="POST" enctype="multipart/form-data">

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