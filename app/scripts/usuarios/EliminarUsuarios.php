<!-- 
-Nombre proyecto: Teziushoping
-Creación: 04-05-2021
-FechaEntrega: 6 de Mayo de 2021
Autor: Jaret Josue Camacho Rolon
-->
<?php
//recibimos los datos por POST y los asignamos a una variable local
$idUsuario = $_POST['idUsuario'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";
//archivo de conexion
include "../../DataBases/conexion.php";
try{
//mandamos los datos por el metodo Prepare
$sql = $cn-> prepare("delete from usuario where idUsuario=".$idUsuario);
//redirigimos al indes.html
header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //desplegamos error
}
?>

