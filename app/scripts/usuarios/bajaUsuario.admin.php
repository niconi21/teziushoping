<?php
$id = $_GET['id'];
include('../../DataBases/conexion.php');
$baja = $cn->prepare('UPDATE Usuario SET estado=0 WHERE id=?');
$baja->execute([$id]);

if ($baja->rowCount() > 0) {
    header('location: ../../views/pages/usuarios.php?statusDelete=200');
} else {
    header('location: ../../views/pages/usuarios.php?statusDelete=400');
}
