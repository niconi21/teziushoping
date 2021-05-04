<?php


$idMetodoPago = $_POST['idMetodoPago'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";

include "../../DataBases/conexion.php";
try{



$sql = $cn-> prepare("delete from metodoPago where idMetodoPago=".$idMetodoPago);


header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
}
