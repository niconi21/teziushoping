<?php
session_start();
//inicio del html
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
<div class="container">
    <div class="row">
        <table class="table table-dark table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Usuario</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('../../scripts/usuarios/obtenerUsuarios.php');


                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['nombre'] . ' ' . $row['apellidos'] . '</td>';
                    echo '<td>' . $row['correo'] . '</td>';
                    echo '<td>' . $row['telefono'] . '</td>';
                    echo '<td>' . $row['usuario'] . '</td>';
                    echo '<td>
                                <a class="btn btn-info" href="./altaProducto.misPublicaciones.php?tipo=put&id=' . $row['id'] . '"><i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <button class="btn btn-danger" onclick="eliminarProductoServicio(\'' . $row['nombre'] . '\',' . $row['id'] . ')"><i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>';
                    echo '</tr>';
                }
                ?>



            </tbody>
        </table>
    </div>
</div>


<?php
//footer del html y de la página
include('../partials/footer.php');
?>