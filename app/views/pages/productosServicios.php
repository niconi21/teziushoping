<?php
//inicio del html
include('../../scripts/articulo/obtenerTodosProductosServicios.php');
include('../../scripts/articulo/obtenerCategorias.php');
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

<div class="container-fluid mt-5">
    <div class="row mb-5">
        <div class="col-3 text-white text-center">
            <h4>Categorías</h4>
            <form class="form-inline my-2 my-lg-0 ml-3">
                <input class="form-control" type="search" placeholder="Categoría" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
            </form>
            <div class="list-group mt-4">
                <?php
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {

                    echo '<a href="./productosServicios.php?categoria=' . $row['nombre'] . '" class="list-group-item bg-fondo text-white">' . $row['nombre'] . '</a>';
                }
                ?>


            </div>
        </div>
        <div class="col-9  pt-3">
            <h4 class="text-white">Últimos publicados</h4>
            <div class="card-columns bg-fondo">

                <?php
                while ($row = $queryProductos->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="card m-3 border border-dark" style="width: 18rem;">
                    <img src="../../assets/img/productos.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">'.$row['nombre'].'</h5>
                        <p class="card-text"><small class="text-muted"><b>Publicado:</b> '.$row['fecha'].'</small></p>
                        <p class="card-text"><small class="text-muted"><b>Precio:</b> '.$row['precio'].'</small></p>
                        <p class="card-text">'.$row['descripcion'].'</p>
                        <p class="card-text"><small class="text-muted"><b>Stock:</b> '.$row['cantidad'].'</small></p>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="card-link btn btn-info btn-block"><i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="card-link btn btn-success btn-block"><i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>



            </div>
        </div>
    </div>
</div>

<?php
//footer del html y de la página
include('../partials/footer.php');
?>