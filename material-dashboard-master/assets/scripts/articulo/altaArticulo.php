<?php

require('../../DataBases/conexion.php');

$nombreArticulo=$_POST['nombreArticulo'];
$descripcion=$_POST['decripcion'];
$idCategoria=$_POST['idCategoria'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$fecha="CURDATE()";
//$idUsuario=$_POST['idUsuario'];

try{
    
$sql = $cn->prepare("Insert into Articulo (nombreArticulo,descripcion, idCategoria, precio, cantidad, imagen, fechaIngreso, idUsuario) values (?,?,?,?,?,?,?,?)");
$resultado=$sql->execute([$nombreArticulo,$descripcion,$idCategoria, $precio, $cantidad, "/img", $fecha, "1"]);
header('location: ../../html/loginvista.html');
}catch(Exception $e){
    echo "Error ".$e;
}
?>
