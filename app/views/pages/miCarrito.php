<?php
$delete = $_GET['statusDelete'];
//inicio del html
include('../partials/header.php');
?>
<title>Mi carrito</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');
?>

<?php
if ($delete == 200)
    echo '<div class="alert alert-success mt-5" role="alert">
Producto eliminado del carrito
</div>';
?>
<div class="container">
    <div class="row animate__animated animate__fadeInLeft">
        <h3 class="text-white mt-3">
            <?php
            echo $urls[$page[0]];
            ?>
        </h3>
    </div>
</div>

<div class="container-fluid mt-5 mb-5">
    <div class="row">
        <div class="col">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <td>Imagen</td>
                    <td>Producto</td>
                    <td>Descripcion</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                    <td>Monto Total</td>
                    <td>Acción</td>
                </thead>
                <tbody>
                    <?php
                    include('../../scripts/carrito/obtenerCarrito.php');
                    $i = 0;
                    while ($row = $queryCarrito->fetch(PDO::FETCH_ASSOC)) {

                        $i += ($row['cantidadCarrito'] * $row['precio']);

                        echo '<tr>';
                        echo '<td><img src="'.$host.'productos/'.$row['imagen'].'" alt="" width="100px"></td>';
                        echo '<td>' . $row['nombre'] . '</td>';
                        echo '<td>' . $row['descripcion'] . '<br><a href="">ver más...</a></td>';
                        echo '<td>' . $row['cantidadCarrito'] . ' unidades</td>';
                        echo '<td>$' . $row['precio'] . ' MXN</td>';
                        echo '<td>$' . ($row['precio'] * $row['cantidadCarrito']) . ' MXN</td>';
                        echo '<td>
                        <a href="../../scripts/carrito/bajaCarrito.php?id=' . $row['id'] . '" class="btn btn-outline-danger"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                        </a>
                                </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total:</td>
                        <td>
                            <?php

                            echo '$' . $i . ' MXN';
                            ?></td>
                    </tr>



                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col offset-10">
            <a href="./compra.php?id=<?php echo $_SESSION['idUsuario'];?>" class="btn btn-success btn-block"><i class="fa fa-money" aria-hidden="true"></i>
                Comprar carrito </a>
        </div>
    </div>
</div>
<?php
//footer del html y de la página
include('../partials/footer.php');
?>