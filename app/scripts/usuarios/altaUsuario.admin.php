<?php
$id = $_GET['id'];
include('../../DataBases/conexion.php');
$baja = $cn->prepare('UPDATE Usuario SET estado=1 WHERE id=?');
$baja->execute([$id]);

if ($baja->rowCount() > 0) {
    header('location: ../../views/pages/usuarios.php?statusPut=200');
} else {
    header('location: ../../views/pages/usuarios.php?statusPut=400');
}
