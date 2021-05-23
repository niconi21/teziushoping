<?php
session_start();

$id = $_SESSION['idUsuario'];

include('../../DataBases/conexion.php');
include('../../scripts/carrito/obtenerCarrito.php');
?>