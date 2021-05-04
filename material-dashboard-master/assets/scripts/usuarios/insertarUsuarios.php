<?php


$idUsuario = $_POST['idUsuario'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";

include "../../DataBases/conexion.php";
try{



$sql = $cn-> prepare("delete from usuario where idUsuario=".$idUsuario);


header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
}


?>