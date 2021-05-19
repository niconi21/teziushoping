<?php
$delete = $_GET['statusDelete'];
$put = $_GET['statusPut'];
session_start();
//inicio del html
include('../partials/header.php');

?>
<title>Usuarios</title>
</head>

<?php
//footer del html y de la página
include('../partials/navbar.php');
?>
<?php
if ($delete == 200)
    echo '<div class="alert alert-success mt-5" role="alert">
        Usuario dado de baja
    </div>';
if ($delete == 400)
    echo '<div class="alert alert-danger mt-5" role="alert">
        Ocurrió un error en la baja del usuario
    </div>';
if ($put == 200)
    echo '<div class="alert alert-success mt-5" role="alert">
        Usuario dado de alta
    </div>';
if ($put == 400)
    echo '<div class="alert alert-danger mt-5" role="alert">
        Ocurrió un error en la alta del usuario
    </div>';

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
                    <th>Estado</th>
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
                    echo '<td>' . ($row['estado']==1 ? 'Activado' : 'Desactivado') . '</td>';
                    echo '<td>
                                <a class="btn btn-info" href="../../scripts/usuarios/altaUsuario.admin.php?id=' . $row['id'] . '"><i class="fa fa-arrow-up" aria-hidden="true"></i>

                                </a>
                                <a class="btn btn-danger" href="../../scripts/usuarios/bajaUsuario.admin.php?id=' . $row['id'] . '"><i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </a>
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