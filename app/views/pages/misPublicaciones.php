<?php
//inicio del html
$statusPost = $_GET['statusPost'];
$statusPut = $_GET['statusPut'];
include('../../scripts/articulo/obtenerProductosServicios.php');
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
        <h6 class="text-white mt-3 pl-5">
            <?php
            echo $urls[$page[0]];
            ?>
        </h6>
    </div>
</div>
<div class="container-fluid">
    <?php
    if ($statusPost == 200) {
        echo '<div class="alert alert-success mt-5" role="alert">
    El producto/servicio ha sido publicado</div>';
    }
    if ($statusPost == 400) {
        echo '<div class="alert alert-danger mt-5" role="alert">
    Ha ocurrido un erro al crear el producto/servicio</div>';
    }
    if ($statusPut == 404) {
        echo '<div class="alert alert-warning mt-5" role="alert">
    El producto no existe para actualizar</div>';
    }
    if ($statusPut == 200) {
        echo '<div class="alert alert-success mt-5" role="alert">
    El producto/servicio ha sido actualizado</div>';
    }
    if ($statusPut == 400) {
        echo '<div class="alert alert-danger mt-5" role="alert">
    Ha ocurrido un erro al acualizar el producto/servicio</div>';
    }
    ?>
    <div class="row m-3 mt-5 animate__animated animate__fadeInLeft">
        <a href="./altaProducto.misPublicaciones.php?tipo=post" class="btn btn-success"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
            Agregar producto/sevicio</a>
    </div>
    <div class="row animate__animated animate__fadeInRight">
        <div class="col">
            <table class="table table-dark table-striped m-2 table-hover">
                <th>
                <td>Titulo</td>
                <td>Descripción</td>
                <td>Fecha</td>
                <td>Precio</td>
                <td>Estado de publicación</td>
                <td>Imagen</td>
                <td>Acción</td>

                </th>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>' . $i . '</td>';
                        echo '<td>' . $row['nombre'] . '</td>';
                        echo '<td>' . $row['descripcion'] . '</td>';
                        echo '<td>' . $row['fecha'] . '</td>';
                        echo '<td>$' . $row['precio'] . ' MXN</td>';
                        echo '<td>' . ($row['activo']==true ? 'Publicación activa' : 'Publicación pausada') . '</td>';
                        echo '<td><img src="' . $host . 'productos/' . $row['imagen'] . '" alt="" width="100px"></td>';
                        echo '<td>
                                <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=' . $row['id'] . '"><i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <button class="btn btn-danger" onclick="eliminarProductoServicio(\'' . $row['nombre'] . '\',' . $row['id'] . ')"><i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>';
                        echo '</tr>';
                        $i++;
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
//footer del html y de la página
include('../partials/footer.php');
?>