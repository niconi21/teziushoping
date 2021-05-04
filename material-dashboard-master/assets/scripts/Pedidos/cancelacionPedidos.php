<?php


$idVenta = $_POST['idVenta'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";

include "../../DataBases/conexion.php";
try{



$sql = $cn-> prepare("delete from Venta where idVenta=".$idVenta);


header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
}

?>