<!-- 
-Nombre proyecto: Teziushoping
-Creación: 04-05-2021
-FechaEntrega: 6 de Mayo de 2021
Autor: Enrique Cordova
-->

<?php
//importar el archivo de conexion
require('../../DataBases/conexion.php');

$id = $_POST['id'];
//actualizamos el tipo de usuario con una secuencia sql
$query = "UPDATE Usuario SET tipoUsuario='Vendedor' WHERE id = ${id}";
$query = $cn->prepare($query);
$query->execute();
?>

