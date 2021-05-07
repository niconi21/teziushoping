<!-- 
-Nombre proyecto: Teziushoping
-Creación: 04-05-2021
-FechaEntrega: 6 de Mayo de 2021
Autor: Nicolas Moreno Duran
-->
<?php

//recibimos los datos por POST y los asignamos a una variable local
$idUsuario = $_POST['idUsuario'];
$nombreArticulo=$_POST['nombreArticulo'];
$descripcion = $_POST['descripcion'];
$idCategoria=$_POST['idCategoria'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";

include "../../DataBases/conexion.php";
//Archivo de conexion
////CargaImagen

$NombreArchivo = $_FILES['imagenArticulo']['name'];
$directorioTemporal = $_FILES['imagenArticulo']['tmp_name'];
$tamanio = $_FILES['imagenArticulo']['size'];
////fin cargaImagen
$imagenArticulo = file_get_contents($directorioTemporal);
$urlArticulo = "img/";
$extImagen = strtolower(pathinfo($NombreArchivo, PATHINFO_EXTENSION));
$urlImagen = $urlArticulo.$nombreArticulo.".".$extImagen;
move_uploaded_file($directorioTemporal,$urlImagen);
try{
///madamos los datos por el metodo EXECUTE
$sql = $cn-> prepare("insert into Articulo(nombreArticulo, descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, 
idUsuario) value (?,?,?,?,?,?,?,?)");
$resultado=$sql->execute([$nombreArticulo,$descripcion,$idCategoria,$precio,$cantidad,$urlImagen,$fecha,$idUsuario]);

header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //depliega el error
}


?>