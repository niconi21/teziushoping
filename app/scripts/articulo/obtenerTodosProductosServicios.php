<?php
include('../../DataBases/conexion.php');
    $queryProductos = $cn->prepare('SELECT id, nombre, descripcion, fecha, precio, cantidad, imagen FROM Publicaciones WHERE activo = 1');
    $queryProductos->execute();


?>