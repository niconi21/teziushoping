<?php

include('../../DataBases/conexion.php');
$queryProductos = $cn->prepare('SELECT * FROM Publicaciones');
$queryProductos->execute();


?>