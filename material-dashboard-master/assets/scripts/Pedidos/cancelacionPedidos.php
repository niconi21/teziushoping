<?php

//recibimos los datos por POST y los asignamos a una variable local
$idVenta = $_POST['idVenta'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";
//archivo de conexion
include "../../DataBases/conexion.php";
try{
//mandamos los datos por el metodo Prepare
$sql = $cn-> prepare("delete from Venta where idVenta=".$idVenta);
//redirigimos al la pagina principal
header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //desplegamos error
}

?>