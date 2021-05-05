<?php
//importar el archivo de conexion
require('../../DataBases/conexion.php');

$id = $_POST['id'];
//actualizamos el tipo de usuario con una secuencia sql
$query = "UPDATE Usuario SET tipoUsuario='Comprador' WHERE id = ${id}";
$query = $cn->prepare($query);
$query->execute();
header('location: ../../index.html');
?>