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
//Damos de baja al usuraio mediante un identificador
$query = "DELETE from Usuario WHERE idUsuario = ${id}";
$query = $cn->prepare($query);
$query->execute();
header('location: ../../index.html');
?>

