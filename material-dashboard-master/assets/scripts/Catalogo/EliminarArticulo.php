<?php

//recibimos los datos por POST y los asignamos a una variable local
$idUsuario = $_POST['idUsuario'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";
//archivo de conexion
include "../../DataBases/conexion.php";
try{

//mandamos los datos por el metodo PREPARE
$sql = $cn-> prepare("delete from usuario where idUsuario=".$idUsuario);

header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //deplegamos error si se porduce
}


?>