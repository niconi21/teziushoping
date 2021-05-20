<?php
session_start();

include('../../DataBases/conexion.php');

$id_usuario = $_SESSION['idUsuario'];
$id_publicacion = $_GET['id_publicacion'];
$cantidad = $_GET['cantidad'];

$addCarrito = $cn->prepare('INSERT INTO Carrito(id_usuario, id_publicacion, cantidad) VALUES (?, ?, ?)');
$addCarrito->execute([$id_usuario,$id_publicacion, $cantidad]);
if($addCarrito->rowCount()>0){
    header('location: ../../views/pages/productosServicios.php?statusPost=200');
}else{
    header('location: ../../views/pages/productosServicios.php?statusPost=400');
}
