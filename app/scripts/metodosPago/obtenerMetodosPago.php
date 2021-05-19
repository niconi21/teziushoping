
<?php
session_start();
$id = $_SESSION['idUsuario'];

include('../../DataBases/conexion.php');

$query = $cn->prepare('SELECT * FROM MetodoPago WHERE id_usuario=?');

$query->execute([$id]);

?>
