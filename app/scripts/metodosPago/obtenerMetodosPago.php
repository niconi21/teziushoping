
<?php
session_start();
$id = $_SESSION['idUsuario'];

include('../../DataBases/conexion.php');

$query = $cn->prepare('SELECT m.*, d.colonia, d.ciudad, d.cp FROM MetodoPago AS m INNER JOIN Direccion AS d ON m.id_direccion = d.id WHERE id_usuario=?');

$query->execute([$id]);

?>
