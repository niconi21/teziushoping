<?php

//Se declaran los parametros a enviar usando el método POST
$nombre = $_POST['nombreUsuario'];
$apellidos = $_POST['apellidosUsuario'];
$usuario = $_POST['nombreUsuario'];
$contrasenia= $_POST['contrasenia'];
$correo=$_POST['correoUsuario'];
$telefono = $_POST['telefonoUsuario'];
$idDireccion=$_POST['1'];
$fecha="CURDATE()";
//Se establece la conexion a la base de datos
include "../../DataBases/conexion.php";
try{

//Se mandan los datos
$sql = $cn-> prepare("insert into Usuario(nombre, apellidos, nombreUsuario, contrasenia, idDireccion, fechaIngreso, tipoUsuario, telefono, correo) value ('?','?','?','?',?,'?','?','?','?')");
$resultado=$sql->execute([$nombre,$apellidos,$usuario,$contrasenia,$idDireccion,$fecha,"Comprador",$telefono,$correo]);
//redirigimos al index.html
header('location: ../../index.html');
}catch(Exception $e){
    echo "error en: ".$e;
    //desplegamos el error
}


?>