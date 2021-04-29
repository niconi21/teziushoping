<?php

require('../../DataBases/conexion.php');

$id = $_POST['id'];

$query = "UPDATE Usuario SET tipoUsuario='Comprador' WHERE id = ${id}";
$query = $cn->prepare($query);
$query->execute();
?>