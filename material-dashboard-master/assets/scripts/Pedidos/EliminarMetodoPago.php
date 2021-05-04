<?php


$idArticulo = $_POST['idArticulo'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";

include "../../DataBases/conexion.php";
try{



$sql = $cn-> prepare("delete from Articulo where idArticulo=".$idArticulo);


header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
}

?>