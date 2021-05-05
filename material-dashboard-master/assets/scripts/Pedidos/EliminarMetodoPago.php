<?php
//recibimos los datos por POST y los asignamos a una variable local
$idArticulo = $_POST['idArticulo'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";
//archivo de conexion
include "../../DataBases/conexion.php";
try{
//mandamos los datos por el metodo Prepare
$sql = $cn-> prepare("delete from Articulo where idArticulo=".$idArticulo);
//redirigimos al indes.html
header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //desplegamos error
}

?>