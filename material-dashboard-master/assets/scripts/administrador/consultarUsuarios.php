<?php

require('../../DataBases/conexion.php');



$query = "SELECT nombre, apellidos, nombreUsuario, tipoUsuario, telefono, correo, fechaIngreso FROM Usuario";
$query = $cn->prepare($query);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);