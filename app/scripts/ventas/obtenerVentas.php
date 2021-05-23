<?php
session_start();
include('../../DataBases/conexion.php');

$queryVentas = $cn->prepare('SELECT p.imagen, p.nombre AS nombreProducto, p.precio, u.nombre AS nombreComprador, u.apellidos, m.noTarjeta, v.id, v.cantidad, v.monto, v.fecha, v.status FROM Venta AS v
INNER JOIN Publicaciones AS p ON v.id_publicacion = p.id
INNER JOIN Usuario AS u ON v.id_comprador = u.id
INNER JOIN MetodoPago AS m ON v.id_metodo_pago = m.id
 WHERE id_vendedor = ? ');
$queryVentas->execute([$_SESSION['idUsuario']]);
