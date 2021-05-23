<?php
session_start();
include('../../DataBases/conexion.php');

$queryCompras = $cn->prepare('SELECT p.imagen, p.nombre AS nombreProducto, p.precio, u.nombre AS nombreVendedor, u.apellidos, m.noTarjeta, v.id, v.cantidad, v.monto, v.fecha, v.status FROM Venta AS v
INNER JOIN Publicaciones AS p ON v.id_publicacion = p.id
INNER JOIN Usuario AS u ON v.id_vendedor = u.id
INNER JOIN MetodoPago AS m ON v.id_metodo_pago = m.id
 WHERE id_comprador = ? ');
$queryCompras->execute([$_SESSION['idUsuario']]);
