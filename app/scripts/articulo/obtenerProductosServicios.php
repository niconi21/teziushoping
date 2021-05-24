<?php
session_start();
include('../../DataBases/conexion.php');
$query = $cn->prepare('SELECT id, nombre, descripcion, precio, cantidad, imagen, fecha, activo FROM Publicaciones WHERE id_usuario = ?');
$query->execute([$_SESSION['idUsuario']]);
?>