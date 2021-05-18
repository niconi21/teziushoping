<?php
session_start();
include('../../DataBases/conexion.php');
$query = $cn->prepare('SELECT * FROM Publicaciones WHERE id_usuario = ?');
$query->execute([$_SESSION['idUsuario']]);
?>