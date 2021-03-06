<?php
session_start();
include('../../DataBases/conexion.php');

$id = $_SESSION['idUsuario'];

$queryCarrito = $cn->prepare('SELECT 
c.id, 
c.cantidad AS cantidadCarrito, 
p.id AS id_publicacion, 
p.nombre, 
p.descripcion, 
p.cantidad as cantidadPublicacion, 
p.precio, 
p.imagen,
p.id_usuario
FROM Carrito AS c INNER JOIN Publicaciones AS p ON  c.id_publicacion = p.id WHERE c.id_usuario=?');
$queryCarrito->execute([$id]);

?>