<?php
session_start();
include('../../DataBases/conexion.php');
$cantidadPublicaciones = $cn->prepare('SELECT COUNT(*) AS cantidad FROM Publicaciones WHERE id_usuario=?');
$cantidadPublicacionesActivas = $cn->prepare('SELECT COUNT(*) AS cantidad FROM Publicaciones WHERE activo = true AND id_usuario=?');
$cantidadPublicacionesInactivas = $cn->prepare('SELECT COUNT(*) AS cantidad FROM Publicaciones WHERE activo = false AND id_usuario=? ');
$cantidadVentas = $cn->prepare('SELECT COUNT(*) AS cantidad FROM Venta WHERE id_comprador = ? OR id_vendedor = ?');
$cantidadMetodos = $cn->prepare('SELECT COUNT(*) AS cantidad FROM MetodoPago WHERE id_usuario = ?;');
$metodoPagoPrincipal = $cn->prepare('SELECT noTarjeta FROM MetodoPago WHERE id_usuario = ?;');

$cantidadPublicaciones->execute([$_SESSION['idUsuario']]);
$cantidadPublicacionesActivas->execute([$_SESSION['idUsuario']]);
$cantidadPublicacionesInactivas->execute([$_SESSION['idUsuario']]);
$cantidadVentas->execute([$_SESSION['idUsuario'],$_SESSION['idUsuario']]);
$cantidadMetodos->execute([$_SESSION['idUsuario']]);
$metodoPagoPrincipal->execute([$_SESSION['idUsuario']]);

$publicaciones = $cantidadPublicaciones->fetch(PDO::FETCH_OBJ);
$activas = $cantidadPublicacionesActivas->fetch(PDO::FETCH_OBJ);
$inactivas = $cantidadPublicacionesInactivas->fetch(PDO::FETCH_OBJ);
$ventas = $cantidadVentas->fetch(PDO::FETCH_OBJ);
$metodosPago = $cantidadMetodos->fetch(PDO::FETCH_OBJ);
$metodo = $metodoPagoPrincipal->fetch(PDO::FETCH_OBJ);

header('content-type: application/json; charset=utf-8');   

echo json_encode(array('publicaciones'=> $publicaciones->cantidad,
"activas"=> $activas->cantidad,
"inactivas"=> $inactivas->cantidad,
"ventas"=> $ventas->cantidad,
"metodosPago"=> $metodosPago->cantidad,
"metodo"=>$metodo->noTarjeta
));


