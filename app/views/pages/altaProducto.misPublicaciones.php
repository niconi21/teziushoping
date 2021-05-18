<?php
session_start();
//inicio del html
include('../partials/header.php');
include('../../scripts/articulo/obtenerCategorias.php');

?>
<title>Alta de producto</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');
$tipo = $_GET['tipo'];
$_SESSION['idProductoUpdate'] = $_GET['id'];
$producto = null;
if ($tipo == 'put') {

    $urls['altaProducto'] = '<a href="../pages/misPublicaciones.php">Mis publicaciónes</a> > Actualización de Producto';
    //buscar el producto/servicio por el id
    include('../../scripts/articulo/ObtenerUnProductoServicio.php');
}
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

    <div class="row">
        <div class="col-md-4 offset-md-2">
            <div class="card bg-card animate__animated animate__fadeInLeft">
                <div class="card-header text-center">
                    <h4 class="mt-3"><b><?php echo $tipo == 'put' ? 'Actualizar' : 'Publicar'; ?> un producto/servicio</b></h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo $tipo == 'put' ? '../../scripts/articulo/actualizarArticulo.php' : '../../scripts/articulo/altaArticulo.php' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="<?php echo $result->nombre; ?>" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-filter" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <select class="form-control" name="idCategoria" required>
                                        <option value="0">Seleccióna una categoría</option>
                                        <?php
                                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                            echo '<option value="' . $row['id'] . '" ' . ($result->id_categoria == $row['id'] ? 'selected' : '') . '>' . $row['nombre'] . '</option>';
                                        }

                                        ?>


                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-money" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input type="number" class="form-control" placeholder="Precio MXN" name="precio" value="<?php echo $result->precio; ?>" required>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>

                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Cantidad" name="cantidad" value="<?php echo $result->cantidad; ?>" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-comment" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <textarea class="form-control" rows="5" required name="descripcion"> <?php echo $result->descripcion; ?></textarea>
                                </div>
                                <div class="input-group mb-3">

                                    <input type="file" class="form-control" name="imagen">
                                </div>
                                <button class="btn btn-dark btn-block" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    <?php echo $tipo == 'put' ? 'Actualizar' : 'Publicar'; ?> producto/servicio</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 mt-5">
            <div class="card bg-card animate__animated animate__fadeInRight" style="width: 300px;">
                <div class="card-header">
                    <h5><b>Imagen del producto</b></h5>
                </div>
                <img src="../../assets/img/noImage.png" alt="" width="300px">
                <div class="card-body">
                    noImage.png
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//footer del html y de la página
include('../partials/footer.php');
?>