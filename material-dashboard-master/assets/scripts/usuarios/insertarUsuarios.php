<?php


$nombre = $_POST['nombreUsuario'];
$apellidos = $_POST['apellidosUsuario'];
$usuario = $_POST['nombreUsuario'];
$contrasenia= $_POST['contrasenia'];
$correo=$_POST['correoUsuario'];
$telefono = $_POST['telefonoUsuario'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";

include "../../DataBases/conexion.php";
try{



$sql = $cn-> prepare("insert into Usuario(nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo) value ('?','?','?','?',?,'?','?','?','?')");
$resultado=$sql->execute([$nombre,$apellidos,$usuario,$contrasenia,$idDireccion,$fecha,"Comprador",$telefono,$correo]);

header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
}


?>