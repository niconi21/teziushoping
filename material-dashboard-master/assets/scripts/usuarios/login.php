<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

include "../../DataBases/conexion.php";

$sentencia = $cn->prepare("select*from Usuario where nombreUsuario=? and contrasenia=?");
$sentencia->execute([$usuario, $password]);
$login = $sentencia->fetch(PDO::FETCH_OBJ);

if($login){
    header("location: ../../html/altaproducto.html");
}else{
    header("location: ../../html/loginvista.html?Error=100");
}


?>