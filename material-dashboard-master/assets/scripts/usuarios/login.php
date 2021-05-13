<?php
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

include "../../DataBases/conexion.php";

$sentencia = $cn->prepare("select*from Usuario where nombreUsuario=? and contrasenia=?");
$sentencia->execute([$usuario, $password]);
$login = $sentencia->fetch(PDO::FETCH_OBJ);
echo "Hola";

if($login){
    $_SESSION['NombreUsuario'] = $login->nombre;
    header("location: ../../views/pages/dashboard.php");
}else{
    header("location: ../../../views/pages/login.php?Error=100");
}


?>