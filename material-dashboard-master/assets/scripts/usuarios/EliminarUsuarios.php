<?php
//recibimos los datos por POST y los asignamos a una variable local
$idMetodoPago = $_POST['idMetodoPago'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";
//archivo de conexion
include "../../DataBases/conexion.php";
try{
//mandamos los datos por el metodo Prepare
$sql = $cn-> prepare("delete from metodoPago where idMetodoPago=".$idMetodoPago);
//redirigimos al indes.html
header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //desplegamos error
}
