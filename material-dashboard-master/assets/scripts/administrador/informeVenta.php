<?php

require('../../DataBases/conexion.php');



$query = "SELECT v.fechaVenta, 
a.nombreArticulo, a.imagen as imagenArticulo, a.precio as precioArticulo, 
u.nombre as nombreComprador, u.apellidos as apellidosComprador, 
m.tipoCuenta, 
ven.nombre as nombreVendedor, ven.apellidos as apellidosVendedor, 
c.nombre as categoriaNombre 
FROM Ventas as v 
INNER JOIN Articulo as a ON v.idArticulo = a.idArticulo
INNER JOIN Usuario as u ON v.idUsuario = u.idUsuario
INNER JOIN MetodoPago as m ON v.idMetodoPago = m.idMetodoPago
INNER JOIN Usuario as ven ON a.idUsuario = ven.idUsuario
INNER JOIN CategoriaArticulo as c ON a.idCategoria = c.idCategoria
";

$query = $cn->prepare($query);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
?>