<?php
//inicio del html
include('../partials/header.php');
?>
<title>Mis publicaciónes</title>
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
<div class="container-fluid">
    <div class="row m-3 mt-5 animate__animated animate__fadeInLeft">
        <a href="./altaProducto.misPublicaciones.php?tipo=post" class="btn btn-success"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
            Agregar producto/sevicio</a>
    </div>
    <div class="row animate__animated animate__fadeInRight">
        <div class="col">
            <table class="table table-dark table-striped  m-2 table-hover">
                <th>
                <td>Titulo</td>
                <td>Descripción</td>
                <td>Fecha</td>
                <td>Precio</td>
                <td>Imagen</td>
                <td>Acción</td>

                </th>
                <tbody>
                    <tr> 
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    <tr>
                        <td>1</td>
                        <td>Disco duro</td>
                        <td>Disco duro de 1 tb de almacenamiento perfecto para tus archivos en tu pc... <br><a href="">ver más...</a></td>
                        <td>12-03-2021 12:55:32 A.M</td>
                        <td>$1200.00 MXN</td>
                        <td><img src="../../img/productos.jpg" alt="" width="100px"></td>
                        <td>
                            <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=1"><i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <button class="btn btn-danger" onclick="eliminarProductoServicio()"><i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
            
                        </td>
                    
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
//footer del html y de la página
include('../partials/footer.php');
?>